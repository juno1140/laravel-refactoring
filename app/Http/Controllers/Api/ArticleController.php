<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Models\ArticleUpdateDateTime;

class ArticleController extends Controller
{
    /**
     * 記事更新 (すべてのロジックを1つのメソッドに詰め込んだNG例)
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        // --- 1) 認証ユーザの取得 ---
        $user = Auth::user();
        if (!$user) {
            return response()->json([
                'message' => 'ログインしてください。'
            ], 401);
        }

        // --- 2) 該当の記事を取得 ---
        $article = Article::find($id);
        if (!$article) {
            return response()->json([
                'message' => '記事が見つかりません。'
            ], 404);
        }

        // --- 3) 自分の投稿かどうか (認可チェック) ---
        if ($article->user_id !== $user->id) {
            return response()->json([
                'message' => 'この操作は許可されていません。（他人の記事です）'
            ], 403);
        }

        // --- 4) 1日の更新回数が2回以内か (Middlewareなしでチェック) ---
        $today = Carbon::today();
        $updateCountToday = ArticleUpdateDateTime::where('article_id', $article->id)
            ->whereDate('datetime', $today)
            ->count();

        if ($updateCountToday >= 2) {
            return response()->json([
                'message' => '1日の更新回数の上限(2回)に達しています。'
            ], 429);
        }

        // --- 5) バリデーション (FormRequest不使用で直接書く) ---
        $validator = Validator::make($request->all(), [
            'title'   => 'required|string|max:255',
            'content' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => '入力エラーがあります。',
                'errors'  => $validator->errors()
            ], 422);
        }

        // バリデーション済みデータの取得
        $validatedData = $validator->validated();

        // --- 6) データ更新 (ビジネスロジックを直接ここに記述) ---
        try {
            // 更新
            $article->title   = $validatedData['title'];
            $article->content = $validatedData['content'];
            $article->save();

            // 更新日時を記録 (ArticleUpdateDateTimes へのレコード追加)
            ArticleUpdateDateTime::create([
                'article_id' => $article->id,
                'datetime'   => Carbon::now(),
            ]);
        } catch (\Exception $e) {
            // エラーハンドリング
            return response()->json([
                'message' => '記事の更新に失敗しました。',
                'error'   => $e->getMessage()
            ], 500);
        }

        // --- 7) レスポンス (JsonResource等不使用で直接配列返却) ---
        return response()->json([
            'message' => '記事を更新しました。',
            'data'    => [
                'id'      => $article->id,
                'title'   => $article->title,
                'content' => $article->content,
                'updated_at' => $article->updated_at,
            ]
        ], 200);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Carbon\Carbon;
use App\Models\ArticleUpdateDateTime;

class CheckUpdateArticleCount
{
    /**
     * 更新回数の上限
     */
    const UPDATE_COUNT_LIMIT = 10;

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $article = $request->route('article');

        // 今日更新された回数をカウント
        $today = Carbon::today();
        $countToday = ArticleUpdateDateTime::where('article_id', $article->id)
            ->whereDate('datetime', $today)
            ->count();

        // 2回以上なら弾く
        if ($countToday >= self::UPDATE_COUNT_LIMIT) {
            return response()->json([
                'message' => '1日の更新回数の上限(' . self::UPDATE_COUNT_LIMIT . '回)に達しています。'
            ], 429);
        }

        return $next($request);
    }
}

<?php

namespace App\Services;

use App\Models\Article;
use Carbon\Carbon;
use App\Models\ArticleUpdateDateTime;
use Illuminate\Support\Facades\DB;

class ArticleService
{
    public function update(Article $article, array $data)
    {
        // トランザクション
        DB::transaction(function () use ($article, $data) {
            $article->title   = $data['title'];
            $article->content = $data['content'];
            $article->save();

            // 更新日時を記録
            ArticleUpdateDateTime::create([
                'article_id' => $article->id,
                'datetime'   => Carbon::now(),
            ]);
        });

        return $article;
    }
}
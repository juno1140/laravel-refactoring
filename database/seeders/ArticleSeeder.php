<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\ArticleStoreDateTime;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 投稿1
        Article::create([
            'user_id' => 1,
            'title' => 'テスト投稿',
            'content' => 'これはテスト投稿です。',
        ]);

        ArticleStoreDateTime::create([
            'article_id' => 1,
            'datetime' => now(),
        ]);

        // 投稿2
        Article::create([
            'user_id' => 2,
            'title' => 'テスト投稿2',
            'content' => 'これはテスト投稿2です。',
        ]);

        ArticleStoreDateTime::create([
            'article_id' => 2,
            'datetime' => now(),
        ]);
    }
}

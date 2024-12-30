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
        // factoryはなしで生成
        Article::create([
            'user_id' => 1,
            'title' => 'テスト投稿',
            'content' => 'これはテスト投稿です。',
        ]);

        ArticleStoreDateTime::create([
            'article_id' => 1,
            'datetime' => now(),
        ]);
    }
}

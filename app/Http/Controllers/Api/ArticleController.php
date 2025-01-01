<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;

use App\Services\ArticleService;
use App\Http\Requests\UpdateRequest;
use App\Http\Resources\ArticleResource;

class ArticleController extends Controller
{
    public function __construct(private readonly ArticleService $articleService)
    {
    }
    
    /**
     * 記事更新
     * @param UpdateRequest $request
     * @param Article $article
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateRequest $request, Article $article)
    {
        $this->articleService->update($article, $request->validated());
        return new ArticleResource($article);
    }
}

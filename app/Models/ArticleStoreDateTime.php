<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleStoreDateTime extends Model
{
    protected $fillable = ['article_id', 'datetime'];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}

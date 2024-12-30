<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleUpdateDateTime extends Model
{
    protected $fillable = ['datetime'];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}

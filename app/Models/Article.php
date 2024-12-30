<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function storeDateTime()
    {
        return $this->hasOne(ArticleStoreDateTime::class);
    }

    public function updateDateTime()
    {
        return $this->hasOne(ArticleUpdateDateTime::class);
    }
}

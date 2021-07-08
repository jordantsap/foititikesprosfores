<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $fillable = [
        'title',
        'slug',
        'image',
        'active',
        'featured',
<<<<<<< HEAD
        'articletype_id',
=======
        'article_type_id',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        'description',
        // 'meta_description',
        // 'meta_keywords',
    ];

    public function articletype()
    {
        return $this->belongsTo(ArticleType::class);
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
    public function scopeTips($query)
    {
<<<<<<< HEAD
        return $query->where('articletype_id', 1);
    }
    public function scopeBlog($query)
    {
        return $query->where('articletype_id', 2);
=======
        return $query->where('article_type_id', 1);
    }
    public function scopeBlog($query)
    {
        return $query->where('article_type_id', 2);
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    }
}

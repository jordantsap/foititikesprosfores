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
        'articletype_id',
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
        return $query->where('articletype_id', 1);
    }
    public function scopeBlog($query)
    {
        return $query->where('articletype_id', 2);
    }
}

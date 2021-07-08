<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleType extends Model
{
    use HasFactory;

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    protected $fillable = [
        'title',
        'slug',
        'image',
        'active',
        'featured',
    ];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}

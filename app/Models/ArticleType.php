<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleType extends Model
{
    use HasFactory;

<<<<<<< HEAD
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

=======
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}

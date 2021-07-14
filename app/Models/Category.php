<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Category class @category
 */
class Category extends Model // level 1 of category relations
{
    use HasFactory;

    /**
     * GetRouteKeyName
     *
     * @return void
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'image',
        'featured',
    ];

    /**
     * Products
     *
     * @return void
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * types
     *
     * @return void
     */
    public function types()
    {
        return $this->hasMany(Type::class)->orderBy('title', 'asc');
    }

    /**
     * App\Models\Subtypes
     *
     * @return void
     */
    public function subtypes()
    {
        return $this->hasManyThrough(SubType::class, Type::class)->orderBy('title', 'asc');
    }

    /**
     * ScopeActive
     *
     * @return void
     */
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    /**
     * ScopeFeatured
     *
     * @ param  mixed $query
     * @return void
     */
    public function scopeFeatured($query)
    {
        return $query->where('featured', 1);
    }
}

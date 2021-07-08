<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
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
        'slider',
        // 'sku',
        'link',
        'price',
        'active',
        'description',
        'featured',
        'link',

        'category_id',
        'user_id',
        'color_id',
        'brand_id',
        'company_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function favorite()
    {
        return $this->belongsToMany(Favorite::class);
    }
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class)->orderBy('title', 'asc');
    }

    // public function type()
    // {
    //     return $this->belongsTo(Type::class)->orderBy('title', 'asc');
    // }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
    public function scopeFeatured($query)
    {
        return $query->where('featured', 1);
    }
    public function scopeAddToSlider($query)
    {
        return $query->where('slider', 1);
    }
}

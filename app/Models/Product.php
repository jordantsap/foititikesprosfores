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
<<<<<<< HEAD
        'sku',
        'link',
        'price',
=======
        'category_id',
        'field_id',
        'value_id',
        'type_id',
        'sku',
        'link',
        'color',
        'price',
        'brand_id',
        'company_id',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        'active',
        'description',
        'featured',
        'link',
<<<<<<< HEAD

        'category_id',
        'user_id',
        'color_id',
        'brand_id',
        'company_id',
=======
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

<<<<<<< HEAD
    public function color()
    {
        return $this->belongsTo(Color::class);
    }

=======
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    public function favorite()
    {
        return $this->belongsToMany(Favorite::class);
    }
<<<<<<< HEAD
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
=======
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54

    public function category()
    {
        return $this->belongsTo(Category::class)->orderBy('title', 'asc');
    }

<<<<<<< HEAD
    // public function type()
    // {
    //     return $this->belongsTo(Type::class)->orderBy('title', 'asc');
    // }
=======
    public function type()
    {
        return $this->belongsTo(Type::class)->orderBy('title', 'asc');
    }
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
<<<<<<< HEAD

=======
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    public function scopeFeatured($query)
    {
        return $query->where('featured', 1);
    }
<<<<<<< HEAD

=======
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    public function scopeAddToSlider($query)
    {
        return $query->where('slider', 1);
    }
}

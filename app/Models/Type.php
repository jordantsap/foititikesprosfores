<?php

namespace App\Models;

use App\Models\Type as ModelsType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model // level 2 of category relations
{
    use HasFactory;

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
        'category_id',
        'active',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function products()
    {
<<<<<<< HEAD
        return $this->hasManyThrough(Product::class, Category::class);
=======
        return $this->hasMany(Product::class);
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    }

    public function subtypes()
    {
        return $this->hasMany(SubType::class);
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
}

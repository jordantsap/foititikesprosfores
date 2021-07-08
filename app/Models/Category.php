<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
/**
 * Category class @category
 */
=======
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
class Category extends Model // level 1 of category relations
{
    use HasFactory;

<<<<<<< HEAD
    /**
     * GetRouteKeyName
     *
     * @return void
     */
=======
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
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
<<<<<<< HEAD
    ];

    /**
     * Products
     *
     * @return void
     */
=======
        'field_id',
    ];


    public function users()
    {
        return $this->hasMany(User::class);
    }

>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    public function products()
    {
        return $this->hasMany(Product::class);
    }

<<<<<<< HEAD
    /**
     * types
     *
     * @return void
     */
=======
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    public function types()
    {
        return $this->hasMany(Type::class)->orderBy('title', 'asc');
    }

<<<<<<< HEAD
    /**
     * App\Models\Subtypes
     *
     * @return void
     */
=======
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    public function subtypes()
    {
        return $this->hasManyThrough(SubType::class, Type::class)->orderBy('title', 'asc');
    }

<<<<<<< HEAD
    /**
     * ScopeActive
     *
     * @return void
     */
=======
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

<<<<<<< HEAD
    /**
     * ScopeFeatured
     *
     * @ param  mixed $query
     * @return void
     */
=======
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    public function scopeFeatured($query)
    {
        return $query->where('featured', 1);
    }
}

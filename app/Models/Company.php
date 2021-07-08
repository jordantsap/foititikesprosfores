<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'slug';
    }


    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'user_id',
        'image',
        'telephone',
        'manager',
<<<<<<< HEAD
        'url',
=======
        'website',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        'area',
        'afm',
        'email',
        'password',
        'active',
        // 'description',
    ];


<<<<<<< HEAD
    /**
     * user
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
=======
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
    // public function scopeFeatured($query)
    // {
    //     return $query->where('featured', 1);
    // }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

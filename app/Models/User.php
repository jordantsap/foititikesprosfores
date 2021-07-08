<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        // 'active',
        // 'title',
        // 'slug',
        'company_id',
        // 'image',
        // 'telephone',
        // 'manager',
        // 'website',
        // 'area',
        // 'afm',
    ];

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    // protected $primaryKey = 'slug';

    // public function verifyUser()
    // {
    //     return $this->hasOne(VerifyUser::class);
    // }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function company()
    {
        return $this->hasOne(Company::class);
    }

    /**
     * Get all of the products of the related company.
     */
    // public function products()
    // {
    //     return $this->hasMany(Product::class);
    // }

    public function scopeCompany($query)
    {
        // return $query->hasAnyRole('Partner');
        $this->whereHas('roles', function ($query) {
            return $query->whereIn('name', ['Partner']);
        })->first();
    }
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

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

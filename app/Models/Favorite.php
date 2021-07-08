<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = [
        'product_id',
        'user_id',
    ];

=======
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
<<<<<<< HEAD

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
=======
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
}

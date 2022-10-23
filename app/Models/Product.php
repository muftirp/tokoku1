<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'image',
        'description',
        'price',
        'stock',
        'discont',
        'view',
        'rating',
        'user_id'
    ];

    // public function user_id()
    // {
    //     return $this->hasOne(User::class, 'id', 'user_id');
    // }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [

        'nama',
        'slug',
        'description',
        'user_id'
    ];

    // public function user_id()
    // {
    //     return $this->hasOne(User::class, 'id', 'user_id');
    // }


}

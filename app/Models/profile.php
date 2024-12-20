<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;
    protected $table = 'profile';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'gender',
        'password',
        'city',
        'image',
        'terms',
    ];
}

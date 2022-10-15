<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    protected $table = 'user_information';
    protected $guarded = [];

//    protected $fillable = [
//        'Grade',
//        'Age',
//        'gender',
//        'Math',
//        'Science',
//        'History',
//        'Beliefs',
//        'Job',
//    ];
}

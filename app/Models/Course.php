<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'title', 'body', 'teacher', 'date_start', 'date_end', 'date_limit', 'limit_number', 'status', 'image'
    ];

    protected $dates = ['date_start', 'date_end'];
}

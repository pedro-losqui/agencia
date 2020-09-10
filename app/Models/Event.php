<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'responsible', 'title', 'description', 'local', 'date', 'hour', 'status', 'image'
    ];

    protected $dates = ['date'];
}

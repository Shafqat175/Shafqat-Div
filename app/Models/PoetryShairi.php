<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoetryShairi extends Model
{
    use HasFactory;

    protected $table = 'poetry_shairi';

    protected $fillable = [
        'title',
        'content',
        'category',
    ];
}


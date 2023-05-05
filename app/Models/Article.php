<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

      // dichiarazione attributi
      protected $fillable = [
        'title',
        'author',
        'description',
        'cover',
    ];
}

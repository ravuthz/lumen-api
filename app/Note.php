<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Note extends Model
{
    protected $fillable = [
        'title', 'description', 'book', 'author'
    ];
}

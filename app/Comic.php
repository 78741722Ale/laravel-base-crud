<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    // Questo è il modello

    /* Metodo Fillable */
    protected $fillable = ['title', 'cover_image', 'author', 'info', 'price', 'release'];
}

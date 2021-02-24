<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['nome', 'ano', 'artista', 'faixas'];

}

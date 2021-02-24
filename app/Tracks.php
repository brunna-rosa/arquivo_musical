<?php
    namespace App;
    use Illuminate\Database\Eloquent\Model;

    class Tracks extends Model
    {
        protected $fillable = ['id','nome','duracao','album','ordem'];
    }
?> 
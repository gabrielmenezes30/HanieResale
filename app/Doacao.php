<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doacao extends Model
{
    protected $table = "doacoes";

    protected $fillable = [
        'title', 'description', 'city', 'image', 'gender',
    ];
}

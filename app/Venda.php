<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{

    protected $table = "vendas";

    protected $fillable = [
        'title', 'description', 'city', 'price', 'image', 'gender',
    ];
}

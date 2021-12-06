<?php

namespace App;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class Venda extends Model
{

    protected $table = "vendas";

    protected $fillable = [
        'title', 'description', 'city', 'price', 'image', 'gender',
    ];

    protected $guarded = [];


    public function user(){
        return $this->belongsTo('App\User');
    }
   
}

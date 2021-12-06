<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;


class Doacao extends Model
{
    protected $table = "doacoes";

    protected $fillable = [
        'title', 'description', 'city', 'image', 'gender',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objet extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function type(){
        return $this->belongsTo(Type::class);
    }


    public function etat(){
        return $this->belongsTo(Etats::class);
    }



    public function user(){
        return $this->belongsTo(User::class);
    }
}

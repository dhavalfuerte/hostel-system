<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\rooms;
class roomstype extends Model
{
     public $table = "roomstype";
     Protected $fillable = ['name', 'description', 'capacity','floor','fees',];
     public function itemDestribution()
     {
         return $this->hasMany('App\ItemDistribution','foreign_key');
     }
    public function rooms()
    {
       return $this->hasOne(rooms::class);
    }
}

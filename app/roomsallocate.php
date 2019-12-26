<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roomsallocate extends Model
{
    public $table = "room_allocate";
    Protected $fillable = ['user_id', 'room_id', 'bed',];
}
 
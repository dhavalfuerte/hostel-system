<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\roomstype;
class rooms extends Model
{
     public $table = "rooms";
     Protected $fillable = ['id', 'room_type_id', 'room_no','description',];
}

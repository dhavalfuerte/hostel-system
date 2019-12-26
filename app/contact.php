<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
   public $table = "contact";
   Protected $fillable = ['name', 'email', 'subject',];
}

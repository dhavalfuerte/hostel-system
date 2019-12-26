<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class complain extends Model
{
     public $table = "complain";
     Protected $fillable = ['emailid', 'contactno', 'complain',];
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
   protected $table="students";
   protected $fillable=['identify_id','school_id'];
}

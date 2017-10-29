<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table ="customers";
    protected $hidden=['password','created_date','udpated_date','created_by','updated_by'];
    // protected $primaryKey='';
 
    // const CREATED_AT = 'created_date';
    // const UPDATED_AT = 'updated_date';
}

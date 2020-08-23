<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Availabilit extends Model

{
	protected $table="user_availability";
    protected $fillable= ['status'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable= ['names','lastnames','email','phone', 'residence_address','job_profile_id', 'work_experience_id'];
}

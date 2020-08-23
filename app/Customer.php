<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table="customers";
    protected $fillable= ['users_id', 'academic_titles_id','work_experience_id','user_availability_id','job_profile_id'];
}

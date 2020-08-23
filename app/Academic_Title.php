<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academic_Title extends Model
{
	protected $table="academic_titles";
    protected $fillable= ['titles', 'university'];
}

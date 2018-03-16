<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = ['first_name','last_name','age','contact','address','child_id'];
}

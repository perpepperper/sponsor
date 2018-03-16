<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    public function person(){
        return $this->hasOne('App\Person');
    }
}

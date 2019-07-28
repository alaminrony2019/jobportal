<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applyjob extends Model
{
  public function users()
  {
      return $this->hasMany('App\User');
  }
}

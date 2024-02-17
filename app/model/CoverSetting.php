<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CoverSetting extends Model
{
  public function type(){
   return $this->belongsTo(ServicesType::class,'cover_id','id');
  }

}

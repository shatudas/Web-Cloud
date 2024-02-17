<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class DomainPricing extends Model
{
	 public function DomainCategory(){
	  return $this->belongsTo(DomainCategory::class,'category_id','id');
	 }
   
}

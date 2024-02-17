<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class DomainCategory extends Model
{
     public function Domainprice(){
	  return $this->belongsTo(DomainPricing::class,'id','category_id');
	 }
}

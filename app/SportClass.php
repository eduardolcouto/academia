<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SportClass extends Model
{
    protected $fillable = [
    	'name','qtde','modality_id'
    ];
    
   public function modality(){
   		return $this->belongsTo(Modality::call);
   }
    
}

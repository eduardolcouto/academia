<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modality extends Model
{
    protected $fillable = [
        'name'
    ]; 
    
    public function sportClasses(){
    	return $this->hasMany(SportClass::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkoutType extends Model
{
    protected $fillable = [
    	'name',
    	'messure_id'
    ]; 
    
    public function messure(){
    	return $this->belongsTo(Messure::class);
    }
}

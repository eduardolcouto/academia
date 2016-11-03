<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messure extends Model
{
    protected $fillable = [
        'name'
    ]; 
    
    public function workoutType(){
    	return $this->hasMany(WorkoutType::class);
    }
}

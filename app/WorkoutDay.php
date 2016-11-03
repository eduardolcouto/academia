<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkoutDay extends Model
{
    protected $fillable = [
    	'name','reps','weight','time','workout_type_id'
    ]; 
    
    public function workoutType(){
    	return $this->belongsTo(WorkoutType::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
    	'date',
    	'time',
        'sport_class_id',
    	'workout_day_id'
    ]; 
}

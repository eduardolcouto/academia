<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkoutType extends Model
{
    protected $fillable = [
    	'name',
    	'messure_id'
    ]; 
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable = [
    	'pseudo',
    	'race_id',
    	'job_id',
    	'specialisation_id',
    	'skill_id',
    	'armor_id',
    	'health',
    	'owner'
    ];
}

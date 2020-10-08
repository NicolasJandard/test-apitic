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

    public function job() {
        return $this->belongsTo('App\Models\Job', 'job_id', 'id');
    }

    public function race() {
        return $this->belongsTo('App\Models\Race', 'race_id', 'id');
    }

    public function specialisation() {
        return $this->belongsTo('App\Models\Specialisation', 'specialisation_id', 'id');
    }

    public function skill() {
        return $this->belongsTo('App\Models\Skill', 'skill_id', 'id');
    }

    public function armor() {
        return $this->belongsTo('App\Models\Armor', 'armor_id', 'id');
    }
}

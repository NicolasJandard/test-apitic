<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Job;

class Specialisation extends Model
{
    protected $fillable = ['name'];

    public function job() {
        return $this->belongsTo('App\Models\Job', 'job_id', 'id');
    }

    public function skills() {
        return $this->hasMany('App\Models\Skill', 'spe_id');
    }

    public function characters() {
    	return $this->hasMany('App\Models\Characters', 'specialisation_id');
    }
}

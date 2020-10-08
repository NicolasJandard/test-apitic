<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
	protected $fillable = ['name', 'job_id'];

	public function specialisations() {
        return $this->hasMany('App\Models\Specialisation', 'job_id');
    }

    public function characters() {
    	return $this->hasMany('App\Models\Characters', 'job_id');
    }
}

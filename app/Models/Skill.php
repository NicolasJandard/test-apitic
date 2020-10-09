<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = ['name', 'spe_id'];

    public function specialisation() {
        return $this->belongsTo('App\Models\Specialisation', 'spe_id', 'id');
    }

    public function skillType() {
        return $this->belongsTo('App\Models\SkillType', 'type_id', 'id');
    }

    public function characters() {
    	return $this->hasMany('App\Models\Characters', 'skill_id');
    }
}

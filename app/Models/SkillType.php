<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkillType extends Model
{
    protected $fillable = ['name'];

    public function skills() {
        return $this->hasMany('App\Models\Skill', 'type_id');
    }
}

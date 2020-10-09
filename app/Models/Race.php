<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    protected $fillable = ['name'];

    public function characters() {
    	return $this->hasMany('App\Models\Characters', 'race_id');
    }
}

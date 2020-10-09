<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Armor extends Model
{
    protected $fillable = ['name'];

    public function characters() {
    	return $this->hasMany('App\Models\Characters', 'armor_id');
    }
}

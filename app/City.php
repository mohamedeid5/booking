<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
	protected $fillable = ['name','country'];
    public function hotels() {
    	return $this->hasMany(Hotel::class);
    }
}

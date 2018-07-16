<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IP extends Model
{
	protected $fillable = ['ip','user_id','country','country_code','city','state','currency'];
    public function user() {

    	return $this->belongsTo(User::class);
    }
}

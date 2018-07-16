<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    
    protected $fillable = ['user_id', 'hotel_id','price', 'nights', 'rooms', 'adult', 'children', 'from', 'to'];

    public function user() {

    	return $this->belongsTo(User::class);
    }

    public function hotel() {

    	return $this->belongsTo(Hotel::class);
    }
}

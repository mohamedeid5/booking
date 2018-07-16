<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
    	'country', 'city', 'city_id','location', 'hotel_name', 'rooms', 'adult', 'children', 'distance',
    	'price', 'rate', 'decription','from', 'to'
    ];

    public function city() {

    	return $this->belongsTo(City::class);
    }

    public function books() {

    	return $this->hasMany(Book::class);
    } 

}

<?php

namespace App\Http\Controllers;
use DB;
use App\Hotel;
use App\City;
use App\Book;
use App\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function __construct() {
        $this->middleware('web');
    }
    // search in hotels table and get data

    public function search() {

        // if user get from index page 
        if (request()->has('city_id')) {

           $hotels =  City::find(request('city_id'))->hotels;

            return view('home.search.result', compact('hotels'));
        }

        $this->validate(request(),[
            'city' => 'required',
            'from' => 'required',
            'to'  => 'required',
        ]);
      
        $query = Hotel::query();
        $query->whereHas('city', function($q){
            $q->where('cities.name','like','%'.request('city').'%');
        });
        $query->where([
                ['from','<=',request('from')],
                ['to','>=',request('to')],
                ['rooms','>=',request('rooms')],
                ['adult','>=',request('adult')],
                ['children','>=',request('children')],  
         ]);
        $hotels = $query->get();
        return view('home.search.result', compact('hotels'));
    }

    //for search box
    public function citysearch() {
         $hotels = City::where('name','like','%'.request('city').'%')->get();
            
            foreach($hotels as $hotel){
                return $hotel->name;
        }
    }
}

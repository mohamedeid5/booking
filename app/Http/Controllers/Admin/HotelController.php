<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Hotel;
use App\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::all();

        return view('home.hotel.index', compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        return view('home.hotel.create', compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data = $this->validate(request(),[
            'hotel_name'=> 'required',
            'city_id' => 'required', 
            'country' => 'required',
            'location' => 'required',
            'rooms' => 'required',
            'adult' => 'required',
            'children' => 'required',
            'distance' => 'required',
            'price' => 'required',
            'rate' => 'required',
            'from' => 'required',
            'to' => 'required',
        ]); 

        Hotel::create($data);

        return redirect('hotels');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function showhotel() {
        if(request()->has('hotel_id')){
            $id = request('hotel_id');

            $hotel = Hotel::find($id);

            return view('home.search.show', compact('hotel'));    
        } else {
            return back();
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cities = City::all();
        $hotel  = Hotel::find($id);
        return view('home.hotel.edit', compact('cities', 'hotel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
         $data = $this->validate(request(),[
            'hotel_name'=> 'required',
            'city_id' => 'required', 
            'country' => 'required',
            'location' => 'required',
            'rooms' => 'required',
            'adult' => 'required',
            'children' => 'required',
            'distance' => 'required',
            'price' => 'required',
            'rate' => 'required',
            'from' => 'required',
            'to' => 'required',
        ]); 

         Hotel::find($id)->update($data);

         return redirect('hotels');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hotel::find($id)->delete();
        return back();
    }

     //get hotels from user country

    public function get_hotels() {

        $cities = DB::table('cities')->where('country',ip()->country)->get();
        return view('welcome', compact('cities'));
    }
}

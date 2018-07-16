@extends('layouts.app')
@section('content')
	<div class="container">

		<div class="row">
			@include('home.search.searchform')
				<a href="{{ url()->full() . '&order=price' }}">order</a>
		@foreach($hotels as $hotel)
		<div class="col-9">
          <div class="card mb-3" style="width: 600px;height: 200px;padding: 5px">
            <img class="card-img-top" src="http://via.placeholder.com/350x120" alt="Card image cap"> 
            <h1>
            	<a href="{{ url('/hotel?hotel_id='.$hotel->id).'&'.request()->getQueryString() }}">{{ $hotel->hotel_name }}</a>
            </h1>
            <p>rate: {{ $hotel->rate }},city {{ $hotel->name }},distance from center {{ $hotel->distance }}k,price {{ $hotel->price . ip()->currency }} </p>   
          </div>
        </div>		
		@endforeach
	</div>
	</div>
@endsection
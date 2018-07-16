@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
		<div class="col-3">
			@include('home.search.searchform')
			
		</div>
		<div class="col-9">
			<h1>Hotel Name: {{ $hotel->hotel_name }}</h1>
		<p>Hotel Description : {{ $hotel->description }}</p>
		<span class="btn btn-info">rate: {{ $hotel->rate }}</span>
		<span>
			@php
				// get price from database and * in nights (night will be diynamicly)
			$nights = 3;
			 	$price = $hotel->price * $nights;
			 	echo "<span class='btn btn-danger' >".$price." ".ip()->currency."</span>"
			 @endphp
		</span>
		<form action="{{ url('book') }}" method="post">
			@csrf
			<input type="hidden" name="hotel_id" value="{{ request('hotel_id') }}">
			<input type="hidden" name="user_id" value="{{  auth()->user() ? auth()->user()->id : '' }}">
			<input type="hidden" name="price" value="{{ $price }}">
			<input type="hidden" name="rooms" value="{{ request('rooms') }}">
			<input type="hidden" name="adult" value="{{ request('adult') }}">
			<input type="hidden" name="children" value="{{ request('children') }}">
			<input type="hidden" name="nights" value="{{ $nights }}">
			<input type="hidden" name="from" value="{{ request('from') }}">
			<input type="hidden" name="to" value="{{ request('to') }}">
			<input type="submit" value="Book Now" class="btn btn-primary">
		</form>

		</div>
	</div>
	</div>
@endsection
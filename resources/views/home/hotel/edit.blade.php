@extends('layouts.app')
@section('content')
<div class="container">
	<form action="{{ url('hotels/'.$hotel->id) }}" method="post" class="form-group">
		@csrf
		{{ method_field('PUT') }}
		<label for="">Hotel Name</label>
		<input type="text" name="hotel_name" class="form-control" value="{{ $hotel->hotel_name  }}">
		<label for="">City Name</label>
		<select name="city_id" class="form-control">
			@foreach($cities as $city)
				<option value="{{ $city->id }}" {{ $city->id == $hotel->city_id ? 'selected' : '' }}>{{ $city->name }}</option>
			@endforeach
		</select>
		<label for="">Country</label>
		<input type="text" name="country" class="form-control" value="{{ $hotel->country  }}">
		<label for="">Location</label>
		<input type="text" name="location" class="form-control" value="{{ $hotel->location }}">
		<label for="">Rooms</label>
		<input type="text" name="rooms" class="form-control" value="{{ $hotel->rooms }}">
		<label for="">Adults</label>
		<input type="text" name="adult" class="form-control" value="{{ $hotel->adult }}">
		<label for="">Childrens</label>
		<input type="text" name="children" class="form-control" value="{{ $hotel->children }}">
		<label for="">Distance</label>
		<input type="text" name="distance" class="form-control" value="{{ $hotel->distance }}">
		<label for="">Price</label>
		<input type="text" name="price" class="form-control" value="{{ $hotel->price }}">
		<label for="">Rate</label>
		<input type="text" name="rate" class="form-control" value="{{ $hotel->rate }}">
		<label for="">From</label>
		<input type="text" name="from" class="form-control" value="{{ $hotel->from }}">
		<label for="">To</label>
		<input type="text" name="to" class="form-control" value="{{ $hotel->to }}">
		<input type="submit" class="btn btn-primary" value="Add">
	</form>
	@if(!empty($errors->all()))
		
		<ul>	
			@foreach($errors->all() as $error)
				
				<li>{{ $error }}</li>
		
			@endforeach
		</ul>
	@endif
</div>
@endsection
@extends('layouts.app')
@section('content')
<div class="container">
	<form action="{{ url('admin/hotels') }}" method="post" class="form-group">
		@csrf
		<label for="">Hotel Name</label>
		<input type="text" name="hotel_name" class="form-control">
		<label for="">City Name</label>
		<select name="city_id" class="form-control">
			@foreach($cities as $city)
				<option value="{{ $city->id }}">{{ $city->name }}</option>
			@endforeach
		</select>
		<label for="">Country</label>
		<input type="text" name="country" class="form-control">
		<label for="">Location</label>
		<input type="text" name="location" class="form-control">
		<label for="">Rooms</label>
		<input type="text" name="rooms" class="form-control">
		<label for="">Adults</label>
		<input type="text" name="adult" class="form-control">
		<label for="">Childrens</label>
		<input type="text" name="children" class="form-control">
		<label for="">Distance</label>
		<input type="text" name="distance" class="form-control">
		<label for="">Price</label>
		<input type="text" name="price" class="form-control">
		<label for="">Rate</label>
		<input type="text" name="rate" class="form-control">
		<label for="">From</label>
		<input type="text" name="from" class="form-control">
		<label for="">To</label>
		<input type="text" name="to" class="form-control">
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

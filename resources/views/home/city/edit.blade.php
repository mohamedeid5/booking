@extends('layouts.app')
@section('content')
<div class="container">
	<form action="{{ url('admin/city/'.$city->id) }}" method="post" class="form-group">
		@csrf
		{{ method_field('PUT') }}
		<label for="">Name</label>
		<input type="text" name="name" class="form-control"  value="{{ $city->name }}">
		<label for="">Country</label>
		<input type="text" name="country" class="form-control" value="{{ $city->country }}">
		<input type="submit" class="btn btn-primary" value="Add">
	</form>
</div>
@endsection

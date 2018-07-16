@extends('layouts.app')
@section('content')
<div class="container">
	<form action="{{ url('city') }}" method="post" class="form-group">
		@csrf
		<label for="">Name</label>
		<input type="text" name="name" class="form-control">
		<label for="">Country</label>
		<input type="text" name="country" class="form-control">
		<input type="submit" class="btn btn-primary" value="Add">
	</form>
</div>
@endsection
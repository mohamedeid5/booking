@extends('layouts.app')
@section('content')
<div class="container">
	<form action="{{ url('admin/admins') }}" method="post" class="form-group">
		@csrf
		<label for="">First Name</label>
		<input type="text" name="first_name" class="form-control">
		<label for="">Last Name</label>
		<input type="text" name="last_name" class="form-control">
		<label for="">Email</label>
		<input type="text" name="email" class="form-control">
		<label for="">Paasword</label>
		<input type="password" name="password" class="form-control">
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
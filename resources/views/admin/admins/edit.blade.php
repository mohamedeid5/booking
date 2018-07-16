@extends('layouts.app')
@section('content')
<div class="container">
	<form action="{{ url('admin/admins/'.$admin->id) }}" method="post" class="form-group">
		@csrf
		{{ method_field('PUT') }}
		<label for="">First Name</label>
		<input type="text" name="first_name" class="form-control" value="{{ $admin->first_name }}">
		<label for="">Last Name</label>
		<input type="text" name="last_name" class="form-control" value="{{ $admin->last_name }}">
		<label for="">Email</label>
		<input type="text" name="email" class="form-control" value="{{ $admin->email }}">
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
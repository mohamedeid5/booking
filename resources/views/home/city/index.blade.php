@extends('layouts.app')
@section('content')
	
	<div class="container">
		<a href="{{ url('admin/city/create') }}" class="btn btn-primary">Add City</a>
		<table class="table">
		 <thead class="thead-dark">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Name</th>
		      <th scope="col">Country</th>
		      <th scope="col">Created at</th>
		      <th scope="col">Actions</th>
		    </tr>
		  </thead>
		@foreach($cities as $city)
			  <tbody>
			    <tr>
			      <th scope="row">{{ $city->id }}</th>
			      <td>{{ $city->name }}</td>
			      <td>{{ $city->country }}</td>
			      <td>{{ $city->created_at }}</td>
			      <td>
			      	<a class="btn btn-primary" href="{{ url('city/'.$city->id.'/edit') }}">edit</a>
			      	<form action="{{ url('city/'.$city->id) }}" method="post">
			      		@csrf
			      		{{ method_field('DELETE') }}
			      		<button class="btn btn-danger">
			      			delete
			      		</button>
			      	</form>
			      </td>
			    </tr>
			  </tbody>
		@endforeach
		</table>
	</div>
	
@endsection

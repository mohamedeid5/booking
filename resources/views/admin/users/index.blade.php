@extends('layouts.app')
@section('content')
<div class="container">
		<a href="{{ url('admin/users/create') }}" class="btn btn-primary">Add Member</a>
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#ID</th>
	      <th scope="col">First Name</th>
	      <th scope="col">Last Name</th>
	      <th scope="col">Email</th>
	      <th scope="col">Created At</th>
	      <th scope="col">Actions</th>
	    </tr>
	  </thead>
	  <tbody>
	  @foreach($users as $user)
	    <tr>
	      <th scope="row">{{ $user->id }}</th>
	      <td>{{ $user->first_name }}</td>
	      <td>{{ $user->last_name }}</td>
	      <td>{{ $user->email }}</td>
	      <td>{{ $user->created_at }}</td>
	      <td>
	      	<a href="{{ url('admin/users/'.$user->id.'/edit') }}" class="btn btn-primary">edit</a>
	      	<form action="{{ url('admin/users/'.$user->id) }}" method="post">
	      		@csrf
	      		{{ method_field('DELETE') }}
	      		<input type="submit" class="btn btn-danger" value="delete">
	      	</form>
	      </td>
	    </tr>
	  @endforeach
	  </tbody>
	</table>
</div>
@endsection
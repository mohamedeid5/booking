@extends('layouts.app')
@section('content')
<div class="container">
		<a href="{{ url('admin/admins/create') }}" class="btn btn-primary">Add Member</a>
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
	  @foreach($admins as $admin)
	    <tr>
	      <th scope="row">{{ $admin->id }}</th>
	      <td>{{ $admin->first_name }}</td>
	      <td>{{ $admin->last_name }}</td>
	      <td>{{ $admin->email }}</td>
	      <td>{{ $admin->created_at }}</td>
	      <td>
	      	<a href="{{ url('admin/admins/'.$admin->id.'/edit') }}" class="btn btn-primary">edit</a>
	      	<form action="{{ url('admin/admins/'.$admin->id) }}" method="post">
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
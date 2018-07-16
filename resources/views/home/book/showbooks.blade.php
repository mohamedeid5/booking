@extends('layouts.app')
@section('content')
	<div class="container">
					<h1>{{ auth()->user()->first_name }} 's Books</h1>
		
		<div class="row">
			@foreach($books as $book)
				@php
					 $hotel = App\Book::find($book->id)->hotel
				@endphp
				<div class="col4">
					<div class="card" style="width: 18rem;">
			  <div class="card-header">
			    Book #ID {{ $book->id }}
			  </div>
			  <ul class="list-group list-group-flush">
			  	<li class="list-group-item">{{ $hotel->hotel_name }}</li>
			    <li class="list-group-item">{{ $book->rooms }} rooms</li>
			    <li class="list-group-item">{{ $book->adult }} adults</li>
			    <li class="list-group-item">{{ $book->children }} childrens</li>
			     <li class="list-group-item">
			     	<form action="{{ url('books/delete/'.$book->id) }}" method="post">
			     		@csrf
			     		{{ method_field('DELETE') }}
			     		<button class="btn btn-danger">Delete</button>
			     	</form>
			     </li>
			  </ul>
			</div>
				</div>	
			@endforeach
			
		</div>
	</div>
@endsection
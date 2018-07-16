@extends('layouts.app')
@section('content')
<div class="container">
  <a href="{{ url('hotels/create') }}" class="btn btn-primary">Add Hotel</a>
	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Hotle Name</th>
      <th scope="col">City</th>
      <th scope="col">Country</th>
      <th scope="col">rooms</th>
      <th scope="col">adults</th>
      <th scope="col">children</th>
      <th scope="col">distance</th>
      <th scope="col">price</th>
      <th scope="col">rate</th>
      <th scope="col">form</th>
      <th scope="col">to</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  @foreach($hotels as $hotel)
  		 @php $city = App\Hotel::find($hotel->id)->city @endphp 
	  <tbody>
	    <tr>
	      <th scope="row">{{ $hotel->id }}</th>
	      <td>{{ $hotel->hotel_name }}</td>
	      <td>{{ $city->name }}</td>
	      <td>{{ $city->country }}</td>
	      <td>{{ $hotel->rooms }}</td>
	      <td>{{ $hotel->adult }}</td>
	      <td>{{ $hotel->children }}</td>
	      <td>{{ $hotel->distance }}</td>
	      <td>{{ $hotel->price }}</td>
	      <td>{{ $hotel->rate }}</td>
	      <td>{{ $hotel->from }}</td>
	      <td>{{ $hotel->to }}</td>
        <td>
          <a href="{{ url('hotels/'.$hotel->id.'/edit') }}" class="btn btn-primary">edit</a>
          <form action="{{ url('hotels/'.$hotel->id) }}" method="post" class="form-group">
            @csrf
           {{ method_field('DELETE') }}
            <input type="submit" value="delete" class="btn btn-danger">
          </form>
        </td>
	    </tr>
	  </tbody>
  @endforeach	
</table>
</div>
@endsection
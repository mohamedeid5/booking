@extends('layouts.app')

@section('content')
<div class="container">
    <form class="form-inline my-2 my-lg-0" method="get" action="{{ url('/searchresult') }}" style="padding: 5px"  id="search">
        @csrf
      <input class="form-control mr-lg-2" type="search" name="city" placeholder="where are you going?" aria-label="Search" id="searchbox">
      <input class="form-control mr-sm-3" type="search" name="from" placeholder="from: y-m-d" aria-label="Search">
      <input class="form-control mr-sm-6" type="search" name="to"   placeholder="to: y-m-d" aria-label="Search">
      <select name="rooms" class="custom-select" style="width: 50px">
          @for($i=1;$i <= 30;$i++)
            <option value="{{ $i }}">{{ $i }}</option>
          @endfor
      </select>
        <select name="adult" class="custom-select" style="width: 50px">
          @for($i=1;$i <= 30;$i++)
            <option value="{{ $i }}">{{ $i }}</option>
          @endfor
         </select>
           <select name="children" class="custom-select" style="width: 50px">
          @for($i=0;$i <= 30;$i++)
            <option value="{{ $i }}">{{ $i }}</option>
          @endfor
         </select>
      <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="search">
     </form>
     @if(!empty($errors->all()))
        
        <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      
     @endif
    <div class="row">
      @foreach($cities as $city)
       <div class="col-6">
          <div class="card mb-3" style="width: 557px;height: 200px;padding: 5px">
                <img class="card-img-top" src="http://via.placeholder.com/350x120" alt="Card image cap"> 
                <h1>
                  <a href="{{ url('searchresult?city_id='.$city->id) }}">{{ $city->name }}</a>
                </h1>         
          </div>
        </div>
      @endforeach
    </div>
    <div class="result" style="background-color: #eee;
    width: 215px;
    height: 171px;position: absolute;
    top: 130px;
">
      <p class="include"></p>
    </div>
       
</div>
@endsection
<div class="col-3" style='width: 200px;background-color: #c4da0e;height: 283px;'>
	<form class="form-inline my-2 my-lg-0" method="get" action="{{ url('/searchresult') }}" style="padding: 5px" id="searchform">
        {{ csrf_field() }}
      <input value="{{ request('city') }}"  class="form-control mr-lg-2" type="search" name="city" placeholder="where are you going?" aria-label="Search">
      <input value="{{ request('from') }}" class="form-control mr-sm-3" type="search" name="from" placeholder="from: y-m-d" aria-label="Search">
      <input value="{{ request('to') }}" class="form-control mr-sm-6" type="search" name="to"   placeholder="to: y-m-d" aria-label="Search">
      <select name="rooms" class="custom-select" style="width: 50px">
          @for($i=1;$i <= 30;$i++)
            <option value="{{ $i }}" @php if($i == request('rooms')) {echo 'selected';} @endphp>{{ $i }}</option>
          @endfor
      </select>
        <select name="adult" class="custom-select" style="width: 50px">
          @for($i=1;$i <= 30;$i++)
            <option value="{{ $i }}" @php if($i == request('adult')) {echo 'selected';} @endphp>{{ $i }}</option>
          @endfor
         </select>
           <select name="children" class="custom-select" style="width: 50px">
          @for($i=0;$i <= 30;$i++)
            <option value="{{ $i }}" @php if($i == request('children')) {echo 'selected';} @endphp>{{ $i  }}</option>
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
</div>

        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                       
                        @auth
                           <li class="list-group" style="padding-top: 8px;">
                                <span class="btn btn-primary">{{  ip()->iso_code }}</span>
                            </li>
                             <li class="list" style="padding-top: 8px;">
                                 <span class="btn btn-info">{{  ip()->currency }}</span>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user() ?Auth::user()->first_name : Auth::guard('admin')->user()->first_name . ' ' }} <span class="caret"></span>
                                </a>
                                
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ url('logout') }}" method="get" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                           
                            <div class="dropdown">
                              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Books
                              </a>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ url('/admin/books') }}">Books</a>
                                 @if(auth()->guard('admin')->check())
                                <a class="dropdown-item" href="{{ url('/admin/city') }}">Cities</a>
                                <a class="dropdown-item" href="{{ url('/admin/hotels') }}">Hotels</a>
                                @endif

                              </div>
                            </div>
                        @else
                              <li class="nav-item">
                                <a class="nav-link" href="{{ url('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endauth
                    </ul>
                </div>
            </div>
        </nav>

       


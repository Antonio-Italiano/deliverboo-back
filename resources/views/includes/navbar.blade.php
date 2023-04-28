<nav class="navbar navbar-expand-md navbar-light" id="navbar">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" @auth href="{{ route('admin.restaurants.index')}}" @endauth href="{{ url('/') }}">
            <div class="logo mb-1">
                <img src="https://cdn.discordapp.com/attachments/1090199171568500760/1091310054222864464/logo_deliverboo_100x250.png" class="img" alt="">
            </div>
            {{-- config('app.name', 'Laravel') --}}
        </a>
        <button id="bg-btn" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon btn-color"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto justify-content-end w-100">
                <!-- Authentication Links -->
                @guest

                <li class="nav-item">
                    <a class="nav-link btn-cust-1 @if (request()->routeIs('login')) d-none @endif" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link btn-cust-2 @if (request()->routeIs('register')) d-none @endif" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item">
                    <a class="nav-link btn-cust-1"  href="http://localhost:5174/">{{ __('Deliveboo.com') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-cust-1 @if(request()->routeIs('admin.restaurants')) custom-active  @endif" href="{{ route('admin.restaurants.index') }}">{{ __('Ristoranti') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-cust-1 @if(request()->routeIs('admin.foods')) custom-active  @endif" href="{{ route('admin.foods.index') }}">{{ ('Menù') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-cust-1 @if(request()->routeIs('admin.orders*')) custom-active  @endif" href="{{ route('admin.orders.index') }}">{{ ('Ordini') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown " class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right bg-color-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('/admin/restaurants') }}">{{__('Home')}}</a>
                        <a class="dropdown-item" href="{{ url('profile') }}">{{__('Profile')}}</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
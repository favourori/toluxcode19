<header id="header-wrap">

<nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="lni-menu"></span>
                <span class="lni-menu"></span>
                <span class="lni-menu"></span>
            </button>
            <a href="/" class="navbar-brand">
                <img src="{{asset('/img/property-logo.png')}}" alt="">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categories">
                        Categories
                    </a>
                </li>
              
                <li class="nav-item">
                    <a class="nav-link" href="/contact">
                        Contact
                    </a>
                </li>
            </ul>
            @if(Auth::check())
            
            <ul class="sign-in">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('account/dashboard')}}">
                        <i class="lni-user"></i> My Account
                    </a>
                
                </li>
            </ul>
            <a class="tg-btn" href="{{url('account/advert')}}">
                <i class="lni-pencil-alt"></i> Post An Ad
            </a>

            <a title="Logout" class="tg-btn" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                
             Logout <i class="lni-enter"></i>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @else
                <a class="tg-btn" href="{{url('account/advert')}}">
                    <i class="lni-pencil-alt"></i> Post An Ad
                </a>

                <a class="tg-btn" href="/login">
                    <i class="lni-user"></i> Login
                </a>

                
                
                <a class="tg-btn" href="/register">
                    <i class="lni-pencil"></i> Signup
                </a>
            @endif
        </div>
    </div>

    <ul class="mobile-menu">
        <li>
            <a class="active" href="/">Home</a>
        </li>
        <li>
            <a href="/categories">Categories</a>
        </li>
     
        <li>
            <a href="/contact">Contact Us</a>
        </li>
        <li>
            <a>My Account</a>
            <ul class="dropdown">
                @if(Auth::check())
                    <li>
                        <a href="/account/dashboard">
                            <i class="lni-home"></i> Account Home</a>
                    </li>
                    <li>
                        <a href="/account/advert">
                            <i class="lni-wallet"></i> My Ads</a>
                    </li>
                @else
                    <li>
                        <a class="active" href="/login">
                            <i class="lni-lock"></i> Log In</a>
                    </li>
                    <li>
                        <a href="/register">
                            <i class="lni-user"></i> Signup</a>
                    </li>
                @endif
            </ul>
        </li>
    </ul>

</nav>

@yield('landing')

</header>
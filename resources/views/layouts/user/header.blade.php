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
            <a href="index.html" class="navbar-brand">
                <img src="/img/logo.png" alt="">
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
                    <a class="nav-link" href="category.html">
                        Categories
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Listings
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="adlistinggrid.html">Ad Grid</a>
                        <a class="dropdown-item" href="adlistinglist.html">Ad Listing</a>
                        <a class="dropdown-item" href="ads-details.html">Listing Detail</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pages
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="about.html">About Us</a>
                        <a class="dropdown-item" href="services.html">Services</a>
                        <a class="dropdown-item" href="ads-details.html">Ads Details</a>
                        <a class="dropdown-item" href="post-ads.html">Ads Post</a>
                        <a class="dropdown-item" href="pricing.html">Packages</a>
                        <a class="dropdown-item" href="testimonial.html">Testimonial</a>
                        <a class="dropdown-item" href="faq.html">FAQ</a>
                        <a class="dropdown-item" href="404.html">404</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Blog
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="blog.html">Blog - Right Sidebar</a>
                        <a class="dropdown-item" href="blog-left-sidebar.html">Blog - Left Sidebar</a>
                        <a class="dropdown-item" href="blog-grid-full-width.html"> Blog full width </a>
                        <a class="dropdown-item" href="single-post.html">Blog Details</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">
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
            <a class="tg-btn" href="post-ads.html">
                <i class="lni-pencil-alt"></i> Post An Ad
            </a>

            <a title="Logout" class="tg-btn" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                
                <i class="lni-enter"></i>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @else
                <a class="tg-btn" href="/login">
                    <i class="lni-pencil-alt"></i> Login
                </a>
                
                <a class="tg-btn" href="/register">
                    <i class="lni-pencil-alt"></i> Signup
                </a>
            @endif
        </div>
    </div>

    <ul class="mobile-menu">
        <li>
            <a class="active" href="index.html">Home</a>
        </li>
        <li>
            <a href="category.html">Categories</a>
        </li>
        <li>
            <a href="#">
                Listings
            </a>
            <ul class="dropdown">
                <li>
                    <a href="adlistinggrid.html">Ad Grid</a>
                </li>
                <li>
                    <a href="adlistinglist.html">Ad Listing</a>
                </li>
                <li>
                    <a href="ads-details.html">Listing Detail</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Pages</a>
            <ul class="dropdown">
                <li>
                    <a href="about.html">About Us</a>
                </li>
                <li>
                    <a href="services.html">Services</a>
                </li>
                <li>
                    <a href="ads-details.html">Ads Details</a>
                </li>
                <li>
                    <a href="post-ads.html">Ads Post</a>
                </li>
                <li>
                    <a href="pricing.html">Packages</a>
                </li>
                <li>
                    <a href="testimonial.html">Testimonial</a>
                </li>
                <li>
                    <a href="faq.html">FAQ</a>
                </li>
                <li>
                    <a href="404.html">404</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Blog</a>
            <ul class="dropdown">
                <li>
                    <a href="blog.html">Blog - Right Sidebar</a>
                </li>
                <li>
                    <a href="blog-left-sidebar.html">Blog - Left Sidebar</a>
                </li>
                <li>
                    <a href="blog-grid-full-width.html"> Blog full width </a>
                </li>
                <li>
                    <a href="single-post.html">Blog Details</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="contact.html">Contact Us</a>
        </li>
        <li>
            <a>My Account</a>
            <ul class="dropdown">
                <li>
                    <a href="account-profile-setting.html">
                        <i class="lni-home"></i> Account Home</a>
                </li>
                <li>
                    <a href="account-myads.html">
                        <i class="lni-wallet"></i> My Ads</a>
                </li>
                <li>
                    <a href="account-favourite-ads.html">
                        <i class="lni-heart"></i> Favourite ads</a>
                </li>
                <li>
                    <a href="account-archived-ads.html">
                        <i class="lni-folder"></i> Archived</a>
                </li>
                <li>
                    <a href="login.html">
                        <i class="lni-lock"></i> Log In</a>
                </li>
                <li>
                    <a href="signup.html">
                        <i class="lni-user"></i> Signup</a>
                </li>
                <li>
                    <a href="forgot-password.html">
                        <i class="lni-reload"></i> Forgot Password</a>
                </li>
                <li>
                    <a href="account-close.html">
                        <i class="lni-close"></i>Account close</a>
                </li>
            </ul>
        </li>
    </ul>

</nav>

@yield('landing')

</header>
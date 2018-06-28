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
                        <li class="nav-item">
                            <a class="nav-link" href="/">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/categories">
                                Categories
                            </a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Listings
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="adlistinggrid.html">Ad Grid</a>
                                <a class="dropdown-item" href="adlistinglist.html">Ad Listing</a>
                                <a class="dropdown-item" href="ads-details.html">Listing Detail</a>
                            </div>
                        </li> -->
                        
                        
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">
                                Contact
                            </a>
                        </li>
                    </ul>

                     <a class="tg-btn" href="/login">
                        <i class="lni-pencil-alt"></i> Login
                    </a>
                   
                    <a class="tg-btn" href="/register">
                        <i class="lni-pencil-alt"></i> Signup
                    </a>
                </div>
            </div>

            <ul class="mobile-menu">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/category">Categories</a>
                </li>
                <!-- <li>
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
                </li> -->
                <li>
                    <a class="active">My Account</a>
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

    </header>
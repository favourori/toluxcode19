<div class="col-sm-12 col-md-4 col-lg-3 page-sidebar">
                    <aside>
                        <div class="sidebar-box">
                            <div class="user">
                                <figure>
                                    <a href="#">
                                        <img src="/img/author/img1.jpg" alt="">
                                    </a>
                                </figure>
                                <div class="usercontent">
                                    <h3>User</h3>
                                    <h4>{{auth()->user()->username}}</h4>
                                </div>
                            </div>
                            <nav class="navdashboard">
                                <ul>
                                    <li>
                                        <a class="active" href="/account/dashboard">
                                            <i class="lni-dashboard"></i>
                                            <span>Dashboard</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/account/profile">
                                            <i class="lni-cog"></i>
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/account/contact">
                                            <i class="lni-phone"></i>
                                            <span>Contact</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/account/social">
                                            <i class="lni-heart"></i>
                                            <span>Socials</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/account/advert">
                                            <i class="lni-layers"></i>
                                            <span>Create Advert</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/account/myadvert">
                                            <i class="lni-layers"></i>
                                            <span>My Adverts</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/account/adverts/reported">
                                            <i class="lni-layers"></i>
                                            <span>Reported Adverts</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/account/seller/apply">
                                            <i class="lni-layers"></i>
                                            <span>Become a Verified Seller</span>
                                        </a>
                                    </li>
                                    @if(Auth::user()->verified_seller)
                                    <li>
                                        <a href="/store/{{Auth::user()->store_url}}">
                                            <i class="lni-layers"></i>
                                            <span>My Store</span>
                                        </a>
                                    </li>
                                    @endif

                                    <!-- <li>
                                        <a href="offermessages.html">
                                            <i class="lni-envelope"></i>
                                            <span>Offers/Messages</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="payments.html">
                                            <i class="lni-wallet"></i>
                                            <span>Payments</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="account-favourite-ads.html">
                                            <i class="lni-heart"></i>
                                            <span>My Favourites</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="privacy-setting.html">
                                            <i class="lni-star"></i>
                                            <span>Privacy Settings</span>
                                        </a>
                                    </li> -->
                                    <li>
                                        <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="lni-enter"></i>
                                            <span>Logout</span>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- <div class="widget">
                            <h4 class="widget-title">Advertisement</h4>
                            <div class="add-box">
                                <img class="img-fluid" src="/img/img1.jpg" alt="">
                            </div>
                        </div> -->
                    </aside>
                </div>
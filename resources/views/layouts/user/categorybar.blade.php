<div class="col-lg-3 col-md-12 col-xs-12 page-sidebar">
                    <aside>

                        <!-- <div class="widget widget_search">
                            <form role="search" id="search-form">
                                <input type="search" class="form-control" autocomplete="off" name="s" placeholder="Search..." id="search-input" value="">
                                <button type="submit" id="search-submit" class="search-btn">
                                    <i class="lni-search"></i>
                                </button>
                            </form>
                        </div> -->

                        <div class="widget categories">
                            <h4 class="widget-title">All Categories</h4>
                            <ul class="categories-list">
                                @foreach($categories as $key => $category)
                                <li>
                                    <a href="{{url('categories/filter')}}?category={{$category->id}}">
                                       
                                        {{$category->name}}
                                        <span class="category-counter">({{count($category->advert)}})</span>
                                    </a>
                                </li>
                                @endforeach
                                
                            </ul>
                        </div>
                       
                    </aside>
                </div>
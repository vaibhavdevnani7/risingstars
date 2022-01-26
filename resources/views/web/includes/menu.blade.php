<div class="nt-section">
    <div class="container-fluid pl-0 pr-0">
        <div class="row no-gutters">
            <div class="nt-column col-sm-12">
                <header
                    id="top-bar"
                    class="top-bar top-bar--dark nt-shortcode-header"
                    data-nav-anchor="true"
                    data-res-css="       #nt-logo.top-bar__logo.site-logo img { width:auto; } #nt-logo.top-bar__logo.site-logo img { height:45px; }  "
                >
                    <div class="top-bar__inner">
                        <div class="container-fluid">
                            <div class="row align-items-center no-gutters">
                                <a style="color: #2f86c4; font-weight: bold;" href="{{url('/')}}" id="nt-logo" class="top-bar__logo site-logo">
                                    <img src="https://rising-star-img.s3.ap-south-1.amazonaws.com/AlgoCap_Logo.png" alt="Rising Star" class="img-fluid main-logo" />
                                    <!-- Rising Star -->
                                </a>

                                <a id="top-bar__navigation-toggler" class="top-bar__navigation-toggler" href="javascript:void(0);"><span></span></a>
                                <div class="top-bar__collapse">
                                    <nav id="top-bar__navigation" class="top-bar__navigation">
                                        <ul class="nav-menu align-to-right">
                                            {{-- <li id="menu-item-644" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active menu-item-644">
                                            <div class="bg-light rounded rounded-pill shadow-sm ">
                                                <form action="{{url('/')}}" method="get">
                                                    @csrf
                                                    <div class="input-group">
                                                      <input required="" value="{{request('search')?request('search'):''}}" type="search" placeholder="What're you searching for?" aria-describedby="button-addon1" name="search" class="form-control search-input border-0 bg-light">
                                                      <div class="input-group-append">
                                                        <button id="button-addon1" type="submit" class="btn btn-link text-primary"><img src="{{asset('assets/img/search-bar.svg')}}"></button>
                                                      </div>
                                                    </div>
                                                </form>
                                            </div>
                                            
                                            </li> --}}
                                            <li id="menu-item-643" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active menu-item-643">
                                                <a href="{{url('about-us')}}">About Us</a>
                                            </li>
                                            <li id="menu-item-643" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active menu-item-643">
                                                <a href="https://sand-challenge-855.notion.site/Rising-Stars-Guide-48f085cde58342cbb02792e8ca56fefb" " target="_blank">Learn</a>
                                            </li>
                                            <li id="menu-item-643" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active menu-item-643">
                                                <a target="_blank" href="https://risingcapital.substack.com/">Blog</a>
                                            </li>
                                            
                                            @guest
                                                <li id="menu-item-643" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active menu-item-643">
                                                <a href="{{url('login')}}">Sign in/up</a>
                                                    </div>
                                                </li>
                                                
                                            @else
                                                <li id="menu-item-643" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active menu-item-643">
                                                    <a href="{{url('add-product')}}">Add Product</a>
                                                </li>

                                                <li id="menu-item-649" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor menu-item-has-children nt-last-menu-item has-submenu active menu-item-649">
                                                    <a href="javascript:void(0);">{{Auth()->user()->name}}</a>
                                                        <ul class="submenu depth_0">
                                                            <li id="menu-item-775" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-parent menu-item-has-children active menu-item-775">
                                                                <a href="{{url('my-products')}}">My Products</a>
                                                            </li>
                                                            <li id="menu-item-775" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-parent menu-item-has-children active menu-item-775">
                                                                <a href="{{ route('logout') }}"
                                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                                    style="display: none;">
                                                                    @csrf
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>

                                                

                                            @endguest
                                          
                                            
                                        </ul>
                                    </nav>
                                    <div id="top-bar__action" class="top-bar__action d-none">
                                        <div class="d-xl-flex flex-xl-row flex-xl-wrap align-items-xl-center">
                                            
                                            <div class="top-bar__auth-btns"><a class="custom-btn custom-btn--medium custom-btn--style-3" href="{{url('/#contact')}}">Get in Touch</a>
                                            </div>
                                            <div class="top-bar__side-menu-button js-side-menu-open d-none" >
                                                <span class="line"></span>
                                                <span class="line"></span>
                                                <span class="line"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
        </div>
    </div>
</div>

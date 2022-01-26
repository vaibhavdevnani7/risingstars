<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
        <script>
            WebFontConfig = { google: { families: ["Nunito Sans:400,400i,700,700i,800,800i,900,900i:latin,latin-ext", "Quicksand:300,400,700:latin,latin-ext", "Caveat:400,700:latin,latin-ext"] } };
            if (typeof WebFont === "object" && typeof WebFont.load === "function") {
                WebFont.load(WebFontConfig);
            }
        </script>
        <script id="litespeed-webfont-lib" src="{{asset('assets/assetwebfontloader.min.js')}}" defer></script>
        <!--maincss--->
        <link data-optimized="2" rel="stylesheet" href="{{asset('assets/css/81e4c-1.css?v='.date('ymdhis'))}}" />
        <link data-optimized="1" rel="stylesheet" href="{{asset('assets/css/style-1.css?v='.date('ymdhis'))}}" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.css">
        <script type="text/javascript" src="{{asset('assets/js/jquery.js')}}" id="jquery-core-js"></script>
        <script data-optimized="1" src="{{asset('assets/js/66a54.js?ceb66')}}" defer></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="initial-scale=1.0" />
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui" />
        <meta name="theme-color" content="#056EB9" />
        <meta name="msapplication-navbutton-color" content="#056EB9" />
        <meta name="apple-mobile-web-app-status-bar-style" content="#056EB9" />
        <title>Rising Star</title>
        <meta name="robots" content="noindex,nofollow" />
        <link rel="dns-prefetch" href="//fonts.googleapis.com" />
        <link rel="dns-prefetch" href="//s.w.org" />
        <!-- <link rel="alternate" type="application/rss+xml" title="Techland &raquo; Feed" href="https://ninetheme.com/themes/techland/feed/" /> -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        @yield('header-script')
        
        <style type="text/css">
            
            .error{
                font-size: 10px;
                color: red;
            }
            .vote{
              cursor: pointer;
            }
        </style>
        
        <script type="text/javascript">
            let baseUrl = '{{url('/')}}';
            let wait = false;
            @guest
              let username = 'Guest';
            @else
              let username = '{{Auth()->user()->name}}';
            @endguest
        </script>
        

    </head>
    <body class="home page-template page-template-custom-page page-template-custom-page-php page page-id-19 theme-techland nt-shortcode-1.0 woocommerce-no-js Techland nt-version-1.0 wpb-js-composer js-comp-ver-6.4.1 vc_responsive">
        
        <div id="app">
            
              @include('web.includes.side-menu')
            
            <div id="btn-to-top-wrap">
                <a id="btn-to-top" class="circled" href="javascript:void(0);" data-visible-offset="800"></a>
            </div>
            <main>
               <div class="nt-section">
                  <div class="container-fluid pl-0 pr-0">
                      <div class="row no-gutters">
                          <div class="nt-column col-sm-12">
                              <header
                                  id="top-bar"
                                  class="top-bar top-bar--dark nt-shortcode-header home_02"
                                  data-nav-anchor="true"
                                  data-res-css="       #nt-logo.top-bar__logo.site-logo img { width:auto; } #nt-logo.top-bar__logo.site-logo img { height:45px; }  "
                              >
                                  <div class="top-bar__inner">
                                      <div class="container-fluid">
                                          <div class="row align-items-center no-gutters">
                                              <a style="color: #2f86c4; font-weight: bold;" href="{{url('/')}}" id="nt-logo" class="top-bar__logo site-logo">
                                                  <img src="https://rising-star-img.s3.ap-south-1.amazonaws.com/AlgoCap_Logo.png" alt="Rising Star" class="img-fluid main-logo" />
                                                  <img src="https://rising-star-img.s3.ap-south-1.amazonaws.com/whiteLogo.png" alt="Rising Star" class="img-fluid main-logo" />
                                                  <!-- Rising Star -->
                                              </a>
                                              <form action="{{url('/')}}" method="get">
                                                    @csrf
                                                  <div class="InputSearch deskBlock">
                                                    
                                                      <div class="rounded rounded-pill shadow-sm ">

                                                          <div class="input-group">
                                                            <input required value="{{request('search')?request('search'):''}}" type="search" name="search" placeholder="Search Rising Stars.." aria-describedby="button-addon1" class="form-control">
                                                            <div class="input-group-append">
                                                              <button id="button-addon1" type="submit" class="btn btn-link text-primary"><img src="https://rising-star-img.s3.ap-south-1.amazonaws.com/rocket.png"></button>
                                                            </div>
                                                          </div>
                                                      </div>
                                                    
                                                  </div>
                                              </form>
                                              <a id="top-bar__navigation-toggler" class="top-bar__navigation-toggler" href="javascript:void(0);"><span></span></a>
                                              <div class="top-bar__collapse">
                                                  <nav id="top-bar__navigation" class="top-bar__navigation">
                                                      <ul class="nav-menu align-to-right">
                                                          
                                                          <li id="menu-item-644" class="MobBlock menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active menu-item-644">
                                                             <div class="bg-light rounded rounded-pill shadow-sm ">
                                                                <form action="{{url('/')}}" method="get">
                                                                  @csrf
                                                                <div class="input-group">
                                                                  
                                                                    <input type="search" name="search" required="" placeholder="Search Rising Stars..." aria-describedby="button-addon1" class="form-control border-0 bg-light">
                                                                    <div class="input-group-append">
                                                                      <button id="button-addon1" type="submit" class="btn btn-link text-primary"><img src="https://rising-star-img.s3.ap-south-1.amazonaws.com/rocket.png"></button>
                                                                    </div>
                                                                  
                                                                </div>
                                                                </form>
                                                            </div> 
                                                          </li>

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
                                                                
                                                            </li>

                                                            

                                                        @endguest

                                                        
                                                        
                                                    </ul>
                                                                  
                                                          
                                                  </nav>
                                                  <div id="top-bar__action" class="top-bar__action d-none">
                                                      <div class="d-xl-flex flex-xl-row flex-xl-wrap align-items-xl-center">
                                                          
                                                          
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


<main>
  <div id="home" class="nt-section">
  <div class="postSection">
              <div class="banner_Section">
                <div class='description'>
                       <h2>RISING STARS</h2>
                       <h3>World’s Leading Place To Discover Crypto & Web3 Projects.</h3>
                       <p>#1 place to showcase projects of the Future</p>
                       <div class="socialSection">
                         <span>
                            <a href="https://twitter.com/Rising_Cap" target="_blank">
                                 <img src="storage/twitterbtn.png" style="height:40px;">
                               </a>
                            
                               <a href="https://discord.gg/Msh4BeYhDj" target="_blank">
                                <img src="storage/discodbtn.png"style="height:40px;">
                               </a>
                          </span> 
                       </div>
                    </div>
                <div class='solar-syst'>
                  <div class='sun'></div>
                  <div class='mercury'></div>
                  <div class='venus'></div>
                  <div class='earth'></div>
                  <div class='mars'></div>
                  <div class='jupiter'></div>
                  <div class='saturn'></div>
                  <div class='uranus'></div>
                  <div class='neptune'></div>
                  <div class='pluto'></div>
                  <div class='asteroids-belt'></div>
                </div>
              </div>

              <div class="listCollumn">
                <div class="container">
                  <div class="row">
                    <div class="col-md-7 lazy-loader">
                      
                      <div class="w-100">
                        <div class="row" style="margin-left: 30px;">
                          
                          <div class="col-md-12">
                            <div class="filterbuttons">
                              <button id="nft"><a href="{{url('/?tags=nft')}}">NFT</a></button>
                              <button id="de-fi"><a href="{{url('/?tags=de-fi')}}">DeFi</a></button>
                              <button id="dao"><a href="{{url('/?tags=dao')}}">DAO</a></button>
                              <button id="game-fi"><a href="{{url('/?tags=game-fi')}}">GameFi</a></button>
                              <button id="metaverse"><a href="{{url('/?tags=metaverse')}}">MetaVerse</a></button>
                            </div>
                            <script>
                              var activebtn = document.getElementById("{{$tagflux}}");
                              activebtn.style.backgroundColor="blue";
                              activebtn.children[0].style.color="white";
                              </script>
                            @foreach($products as $product)
                              @php
                                $tempTags = [];
                                foreach(json_decode($product->tags,true) as $tag){
                                  $tempTags[] = (int)$tag;
                                }
                                $tags = DB::table('tags')->select('tag_name','slag')->whereIn('id',$tempTags)->get();
                              @endphp
                              <div class="blogSection mb-3"  data-full-url="{{'product='.$product->slag}}">
                                <div class="productc card circle_border">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-md-2 show-modal" data-toggle="modal" data-target=".detailsCards">
                                        <img loading="lazy" src="{{url('storage/'.$product->logo)}}"  data-product-slag="{{$product->slag}}" class="w-100  rounded">
                                      </div>
                                      <div class="col-md-10">
                                        <h2 class="show-modal" data-toggle="modal" data-target=".detailsCards" data-product-slag="{{$product->slag}}">{{$product->product_title}}</h2>
                                        <p class="w-100 mb-3 show-modal blogParagraph" data-toggle="modal" data-target=".detailsCards" data-product-slag="{{$product->slag}}">{{$product->about_product_short}}</p>
                                        <div class="w-100 row mt-3">
                                        <div class="col-6">
                                            <div class="w-100 hashtag">
                                              @foreach($tags as $tag)
                                                <a href="{{url('/?tags='.$tag->slag)}}">#{{$tag->tag_name}}</a>
                                              @endforeach
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="row activeIcone justify-content-end upvote-section">
                                              @guest 
                                                <a href="{{url('/login')}}"> <span>{{$product->upvote}}</span> 
                                                  
                                                  <i class="far fa-star"></i>
                                                </a>
                                              @else
                                                 
                                                  
                                                  <span class="total-upvote total_upvote_{{$product->id}}">
                                                    {{$product->upvote}}
                                                  </span> 
                                                  <a class="vote" data-p-id="{{$product->id}}">
                                                    <span class="upvote-star-{{$product->id}}"> 
                                                      @php
                                                        $isUpVote = DB::table('upvotes')->where(['user_id'=>Auth()->user()->id, 'product_id'=>$product->id])->count();
                                                        if($isUpVote==0){
                                                          echo '<i class="far fa-star"></i>';
                                                        }
                                                        else{
                                                          echo '<i class="fa fa-star"></i>';
                                                          
                                                        }

                                                      @endphp
                                                    </span>
                                                  </a>
                                              @endguest
                                            </div>
                                        </div>
                                      </div>
                                      </div>
                                      
                                    </div>
                                    
                                  </div>
                                </div>
                              </div>
                            @endforeach
                            

                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="col-md-4 pl-10 blog-section" style="border-left: solid #ccc 1px;">
                      <div class="titleSection">
                        <!-- <h6>Featured</h6> -->
                        <h2>Featured Blogposts</h2>
                      </div>
                      <a target="_blank" href="https://risingcapital.substack.com/p/what-does-the-indian-crypto-bill" class="blogPost">
                        <div class="card circle_border featuredBg">
                          <div class="card-body">
                            <div class="col-md-12">
                                <div class="row">
                                  <div class="col-md-5 pl-0">
                                    <div style="" class="blog-img-sec">
                                      <img class="w-100" src="storage/indian crypto.png">
                                    </div>
                                  </div>
                                  <div class="col-md-7 pl-1 pt-1">
                                    <h4>What does the Indian crypto bill really mean?</h4>
                                    <h6>15 min read</h6>
                                  </div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </a>
                      <a target="_blank" href="https://risingcapital.substack.com/p/what-does-the-indian-crypto-bill" class="blogPost">
                        <div class="card circle_border featuredBg">
                          <div class="card-body">
                            <div class="col-md-12">
                                <div class="row">
                                  <div class="col-md-5 pl-0">
                                    <div style="" class="blog-img-sec">
                                      <img class="w-100" src="storage/jackon.jpeg">
                                    </div>
                                  </div>
                                  <div class="col-md-7 pl-1 pt-1">
                                    <h4>Jack On</h4>
                                    <h6>9 min read</h6>
                                  </div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </a>
                      <a target="_blank" href="https://risingcapital.substack.com/p/what-does-the-indian-crypto-bill" class="blogPost">
                        <div class="card circle_border featuredBg">
                          <div class="card-body">
                            <div class="col-md-12">
                                <div class="row">
                                  <div class="col-md-5 pl-0">
                                    <div style="" class="blog-img-sec">
                                      <img class="w-100" src="storage/crypto markets.jpeg">
                                    </div>
                                  </div>
                                  <div class="col-md-7 pl-1 pt-1">
                                    <h4>Crypto market and the decisions by the FED</h4>
                                    <h6>8 min read</h6>
                                  </div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </a>
                      <a target="_blank" href="https://risingcapital.substack.com/p/what-does-the-indian-crypto-bill" class="blogPost">
                        <div class="card circle_border featuredBg">
                          <div class="card-body">
                            <div class="col-md-12">
                                <div class="row">
                                  <div class="col-md-5 pl-0">
                                    <div style="" class="blog-img-sec">
                                      <img class="w-100" src="storage/cryptobanindia.png">
                                    </div>
                                  </div>
                                  <div class="col-md-7 pl-1 pt-1">
                                    <h4>Cryptocurrency Ban in India: Is it Possible?</h4>
                                    <h6>10 min read</h6>
                                  </div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </a>
                      <p>Read More...<p>
                      
                      <div class="web-3-section">
                        <iframe src="https://hashtalk.substack.com/embed" width="480" height="180" style=" border-radius: 4px; font-family: helvetica" frameborder="0" scrolling="no"></iframe>
                      </div>

                      
                      <div class="text-center mt-8 pt-5 timeline">
                        <a target="_blank" href="https://risingcapital.substack.com/">Blog </a>| <a target="_blank" href="https://discord.gg/Msh4BeYhDj">Discord </a>| <a target="_blank" href="https://twitter.com/Rising_Cap">Twitter </a>| <a  href="https://sand-challenge-855.notion.site/Rising-Stars-Guide-48f085cde58342cbb02792e8ca56fefb" " target="_blank">Resources</a> | <a  href="{{url('/about-us')}}">About Us</a>
                        <div class="">&copy;2022 <a class="__dev" href="{{url('/')}}"  rel="noopener noreferrer"> risingstars.co</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  </div>
          


    <div id="myModal" class="modal fade detailsCards"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content render-detail">
              <div class="row text-center">
                  <img  class="loader-img" src="{{asset('assets/img/loader.gif')}}">
              </div>
            <!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->   
    </div>


</main>

    

  <footer id="nt-footer" class="nt-footer-sidebar footer footer--s1 footer--color-light">
     
  </footer>
</div>
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- slick Carousel CDN -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js"></script>
    <script data-optimized="1" src="{{asset('assets/js/663cb.js?bb5d7')}}" defer></script>
    <script data-optimized="1" src="{{asset('assets/js/posts.js?v='.date('his'))}}" defer></script>
    <script src="{{asset('assets/js/application.js?v='.date('his'))}}"></script>
    <script src="{{asset('assets/js/custom-validation-form.js?v='.date('his'))}}"></script>
    <script type="text/javascript">

      function showModel(slag){
          $.ajax({
            type:"GET",
            url:baseUrl+'/product/detail/'+slag,
            dataType:"html",
            success:function(response){
                console.log(response)
                $(document).find('.render-detail').html(response);
                wait=false;
            },
            error: function (jqXHR, textStatus, errorThrown) {

                wait=false;
                //$('#loader-modal').modal('hide');
                if (jqXHR.status == 500) {
                    console.log('Internal error: ' + jqXHR.responseText);
                } 
                else 
                    console.log('Unexpected error.');
            }
          });
      }
      $(window).load(function() {
        @if(request('product'))
          $("#myModal").modal('show');
          showModel('{{request('product')}}');
        @endif
      });
    </script>
    @yield('footer-script')
  </body>
</html>
                
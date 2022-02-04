<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <!--maincss--->
        <link data-optimized="2" rel="stylesheet" href="{{asset('assets/css/81e4c-1.css?v='.date('ymdhis'))}}" />
        <link data-optimized="1" rel="stylesheet" href="{{asset('assets/css/style-1.css?v='.date('ymdhis'))}}" />
        <link data-optimized="3" rel="stylesheet" href="{{asset('assets/css/newstyle.css?v='.date('ymdhis'))}}" />
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
        <title>Rising Stars</title>
        <meta name="robots" content="noindex,nofollow" />
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <link rel="shortcut icon" href="assets/img/FAVICON.png" type="image/x-icon">
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
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-S7JGXS3LT7"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-S7JGXS3LT7');
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
                                                  
                                            
                                              </a>
                                              
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
                                                              <a target="_blank" href="https://hashtalk.substack.com/">Blog</a>
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
  <img class="toplogonew" src="assets/img/rising logo.png" onclick="window.location='https://risingstars.co/'">
              <div class="banner_Section">
                  
                <div class='description'>
                       <h3>World’s Leading Place To Discover Crypto & Web3 Projects.</h3>
                
        
                       
                        
                       <div class="socialSection">
                         <a href="{{url('add-product')}}"><button class="addprod">Feature Product
                        </button></a>
                        <div class='icons'>
                        <a href="https://twitter.com/Rising_Cap" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://discord.gg/Xy4wKJkfkz" target="_blank">
                            <i class="fab fa-discord"></i>
                        </a>
                        </div>
                               

                       </div>
                    </div>
                    <div class="blogSection topcardblog" style="right:45px; bottom:27px;">
                        <div class="productcard topcard">
                            <div class="productthumb" >
                                <img loading="lazy" src="assets/img/baycthumb.jpg">
                            </div>
                            <div class="productdetails" >
                                <h2>BAYC</h2>
                                <p>YOLO your retirement savings here</p>
                                
                            </div>
                            <div class="productags">
                            <a href="?tags=nft">#NFT</a>
                            <a href="?tags=web3">#Web3</a>
                              
                            </div>
                            <div class="productupvote">
                             
                                    <a> <span>11</span> 
                                      
                                      <i class="far fa-star"></i>
                                    </a>
                                                              </div>
                            
                            </div>
                        
                        </div>
                        <div class="blogSection topcardblog" style="right:6px; bottom:136px;">
                        <div class="productcard topcard">
                            <div class="productthumb" >
                                <img loading="lazy" src="assets/img/maticthumb.png">
                            </div>
                            <div class="productdetails" >
                                <h2>Polygon</h2>
                                <p>Ethereum's Internet of Blockchains</p>
                                
                            </div>
                            <div class="productags">
                            <a href="?tags=crypto">#Crypto</a>
                            <a href="?tags=web3">#Web3</a>
                              
                            </div>
                            <div class="productupvote">
                             
                                    <a> <span>9</span> 
                                      
                                      <i class="far fa-star"></i>
                                    </a>
                                                              </div>
                            
                            </div>
                        
                        </div>
                        <div class="blogSection topcardblog" style="right:298px; bottom:197px;">
                        <div class="productcard topcard">
                            <div class="productthumb" >
                                <img loading="lazy" src="assets/img/metamaskthumb.jpeg">
                            </div>
                            <div class="productdetails" >
                                <h2>MetaMask</h2>
                                <p>Brings Ethereum to your browser</p>
                                
                            </div>
                            <div class="productags">
                            <a href="?tags=crypto">#Crypto</a>
                            <a href="?tags=tech">#Tech</a>
                              
                            </div>
                            <div class="productupvote">
                             
                                    <a> <span>20</span> 
                                      
                                      <i class="far fa-star"></i>
                                    </a>
                                                              </div>
                            
                            </div>
                        
                        </div>
                        <div class="blogSection topcardblog" style="right:359px; bottom:86px;">
                        <div class="productcard topcard">
                            <div class="productthumb" >
                                <img loading="lazy" src="assets/img/dogethumb.png">
                            </div>
                            <div class="productdetails" >
                                <h2>DogeCoin</h2>
                                <p>World's most stable asset, right Elon?</p>
                                
                            </div>
                            <div class="productags">
                            <a href="?tags=crypto">#Crypto</a>
                            <a href="?tags=de-fi">#DeFi</a>
                              
                            </div>
                            <div class="productupvote">
                             
                                    <a> <span>15</span> 
                                      
                                      <i class="far fa-star"></i>
                                    </a>
                                                              </div>
                            
                            </div>
                        
                        </div>
                
              </div>

              <div class="maindiv">
              <button onclick="topFunction()" id="myBtn" title="Go to top"><svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><path d="M0 20c0 11.028 8.972 20 20 20s20-8.972 20-20S31.028 0 20 0 0 8.972 0 20zm29.023 3.333l-2.356 2.357L20 19.023l-6.667 6.667-2.356-2.357L20 14.31l9.023 9.023z" fill="#666" opacity="0.5"></path></svg></button>
        <div class="maindiv2">
            <div class="topbar">
            <form action="{{url('/')}}" method="get"  class="topsearchbar">
                @csrf
                <div class="InputSearch deskBlock">
                  
                        <input required value="{{request('search')?request('search'):''}}" type="search" name="search" placeholder="Search Rising Stars.." aria-describedby="button-addon1" class="form-control">
                        
                        <button type="submit" ><img src="https://rising-star-img.s3.ap-south-1.amazonaws.com/rocket.png"></button>
                       
                </div>
            </form>
                <div class="filterbuttons">
                    <button id="nft"><a href="{{url('/?search=nft')}}">NFT</a></button>
                    <button id="de-fi"><a href="{{url('/?tags=de-fi')}}">DeFi</a></button>
                    <button id="dao"><a href="{{url('/?tags=dao')}}">DAO</a></button>
                    <button id="game-fi"><a href="{{url('/?tags=game-fi')}}">GameFi</a></button>
                    <button id="metaverse"><a href="{{url('/?tags=metaverse')}}">MetaVerse</a></button>
                </div>
                <script>
                  var activebtn = document.getElementById("{{$tagflux}}");
                  activebtn.style.backgroundColor="#6e6ed9";
                  activebtn.children[0].style.color="white";
                  activebtn.children[0].href="https://risingstars.co/";
                </script>
            </div>
            <div class="maindiv3">
                <div class="products">
                @foreach($products as $product)
                  @php
                    $tempTags = [];
                    foreach(json_decode($product->tags,true) as $tag){
                      $tempTags[] = (int)$tag;
                    }
                    $tags = DB::table('tags')->select('tag_name','slag')->whereIn('id',$tempTags)->get();
                  @endphp
                    <div class="blogSection" data-full-url="{{'product='.$product->slag}}">
                        <div class="productcard">
                            <div class="productthumb show-modal" data-product-slag="{{$product->slag}}" data-toggle="modal" data-target=".detailsCards">
                                <img loading="lazy" src="{{url('storage/'.$product->logo)}}">
                            </div>
                            <div class="productdetails show-modal" data-product-slag="{{$product->slag}}" data-toggle="modal" data-target=".detailsCards">
                                <h2>{{$product->product_title}}</h2>
                                <p>{{$product->about_product_short}}</p>
                                
                            </div>
                            <div class="productags">
                            @foreach($tags as $tag)
                            <a href="{{url('/?tags='.$tag->slag)}}">#{{$tag->tag_name}}</a>
                            @endforeach  
                            </div>
                            
                            <div class="productupvote">
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
                    @endforeach
                </div>
                <div class="rightside">
                    <div class="foundercard" onclick="window.location='https://risingstars.co/about-us'">
                        <h2>Founders Corner</h2>
                        <p>Get access to an active network of thought leaders from the Blockchain industry to take your venture to the moon!</p>
                        <p>Raise Funds<br>Web3 Services<br>Get Mentorship<br>Become a Partner</p>
       
                    </div>
                    <div class="featuredblogs">
                        <h2>Featured Blogposts</h2>

                        <a target="_blank" href="https://hashtalk.substack.com/p/what-does-the-indian-crypto-bill" class="blogPost">
                            <div class="featblog">
                                <div class="featblogimg">
                                    <img src="assets/img/indian crypto.png">
                                </div>
                                <div class="featblogcontent">
                                    <h4>What does the Indian crypto bill really mean?</h4>
                                    <h6>15 min read</h6> 
                                </div>
                            </div>
                        </a>
                        <a target="_blank" href="https://risingcapital.substack.com/p/jackon" class="blogPost">
                            <div class="featblog">
                                <div class="featblogimg">
                                    <img src="assets/img/jackon.jpeg">
                                </div>
                                <div class="featblogcontent">
                                    <h4>Jack On</h4>
                                    <h6>15 min read</h6> 
                                </div>
                            </div>
                        </a>
                        <a target="_blank" href="https://hashtalk.substack.com/p/crypto-market-and-the-decisions-by" class="blogPost">
                            <div class="featblog">
                                <div class="featblogimg">
                                    <img src="assets/img/crypto markets.jpeg">
                                </div>
                                <div class="featblogcontent">
                                    <h4>Crypto market and the decisions by the FED</h4>
                                    <h6>15 min read</h6> 
                                </div>
                            </div>
                        </a>
                        <a target="_blank" href="https://hashtalk.substack.com/p/cryptocurrency-ban-in-india-is-it" class="blogPost">
                            <div class="featblog">
                                <div class="featblogimg">
                                    <img src="assets/img/cryptobanindia.png">
                                </div>
                                <div class="featblogcontent">
                                    <h4>Cryptocurrency Ban in India: Is it Possible?</h4>
                                    <h6>15 min read</h6> 
                                </div>
                            </div>
                        </a>
                        <a href="https://hashtalk.substack.com/" style="text-decoration:none"><h6 style="margin-top: -2px;">Read More...</h6></a>
                        

                    </div>
                    <div class="rightfooter">
                    
                        <a target="_blank" href="https://hashtalk.substack.com/">Blog </a>|
                        <a target="_blank" href="https://discord.gg/Xy4wKJkfkz">Discord </a>| 
                        <a target="_blank" href="https://twitter.com/Rising_Cap">Twitter </a>|
                        <a href="https://sand-challenge-855.notion.site/Rising-Stars-Guide-48f085cde58342cbb02792e8ca56fefb" target="_blank">Resources</a> |
                        <a href="https://risingstars.co/about-us">About Us</a>
                        <div class="">&copy;2022 <a class="__dev" href="https://risingstars.co" rel="noopener noreferrer">risingstars.co</a></div>
                    
                    </div>
                </div>

            </div>

        </div>

    </div>  
  </div>
          


    <div id="myModal" class="modal fade detailsCards"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="padding:0;">
        <div class="modal-dialog">
          <div class="modal-content render-detail">
              <div class="row text-center">
                  
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
    <script>
        window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    var mybutton = document.getElementById("myBtn");
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
    </script>
    
    @yield('footer-script')
  </body>
</html>
                

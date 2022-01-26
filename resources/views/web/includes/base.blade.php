<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script id="litespeed-webfont-lib" src="{{asset('assets/assetwebfontloader.min.js')}}" defer></script>
        <!--maincss--->
        <link data-optimized="2" rel="stylesheet" href="{{asset('assets/css/81e4c.css?v='.date('ymdhis'))}}" />
        <link data-optimized="1" rel="stylesheet" href="{{asset('assets/css/style-1.css?v='.date('ymdhis'))}}" />
        
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
        </style>
        <script type="text/javascript">
            let baseUrl = '{{url('/')}}';
            let maxFileUploadSize = '{{env('MAX_UPLOAD_SIZE',2048)*1024 }}';
        </script>
    </head>
    <body class="home page-template page-template-custom-page page-template-custom-page-php page page-id-19 theme-techland nt-shortcode-1.0 woocommerce-no-js Techland nt-version-1.0 wpb-js-composer js-comp-ver-6.4.1 vc_responsive">
        <div id="nt-preloader" class="preloader"><div class="loader01"></div></div>
        <div id="app">
            
              {{-- @include('web.includes.side-menu') --}}
            
            <div id="btn-to-top-wrap">
                <a id="btn-to-top" class="circled" href="javascript:void(0);" data-visible-offset="800"></a>
            </div>
            <main>
                @include('web.includes.menu')

            @yield('content')
            {{-- <div class="footerSection">
              <div class="footerBg">
                <!-- <div class="mb-5">
                    <div class="company-contacts company-contacts--s2">
                        <div class="__inner text-center">
                            <div class="__name h3">Follow us on</div>
                        </div>
                    </div>
                </div> -->
                <div class="socialSection">
                  <div class="row d-flex justify-content-center" style="align-items: center;">
                     <div class="col-2">
                         <a href="https://www.linkedin.com/company/risingcap">
                             <span class="Icon">
                                 <img src="{{asset('assets/img/icon/linkedin.png')}}">
                             </span>
                         </a>
                     </div>
                     <!-- <div class="col">
                         <a href="#">
                             <span class="Icon">
                                 <img src="{{asset('assets/img/icon/medium.png')}}">
                             </span>
                         </a>
                     </div> -->
                     <!-- <div class="col">
                         <a href="#">
                             <span class="Icon">
                                 <img src="{{asset('assets/img/icon/discord.png')}}">
                             </span>
                         </a>
                     </div> -->
                     <div class="col">
                         <a href="#">
                             <span class="Icon">
                                 <img src="{{asset('assets/img/icon/github.png')}}">
                             </span>
                         </a>
                     </div>
                     <div class="col-2">
                         <a target="_blank" href="https://twitter.com/Rising_Cap">
                             <span class="Icon">
                                 <img src="{{asset('assets/img/icon/twitter.png')}}">
                             </span>
                         </a>
                     </div>
                  </div>
                </div>
               <div class="newsLetter">
                    <div class="section-heading section-heading--center">
                        <h2 class="__title mb-5">Sign up<span> for our newsletter</span></h2>
                        <div class="__description mb-5" style="font-size: 14px;">Stay up to date with new events, developments, and research reports directly in your inbox</div>
                    </div>
                    <div class="subscribe-response"></div>
                    <form class="row subscribe-us" method="post" name="news-letter-form">
                        @csrf
                        <input type="email" name="email" placeholder="your email address" required class=" email">
                        <button class="custom-btn custom-btn--big custom-btn--style-1 subscribe-btn" href="#" title="see more features">Subscribe</button>
                    </a> 
               </div>
              </div>
            </div> --}}
            <footer id="nt-footer" class="nt-footer-sidebar footer footer--s1 footer--color-light">
                <div class="footer__line footer__line--first p-0" style="padding-bottom: 10px !important;">
                   
                    <div class="container">
                        <div class="row">
                            <div class="nt-footer-widget col-12 col-md-12 col-lg-12 col-xl-12 custom-footer-widget-1">
                                <div class="nt-sidebar-footer-widget widget_text">
                                    <div class="footer__item">
                                        <div class="row d-flex justify-content-md-center" style="align-items: center;">
                                            
                                            <div class="col-12 text-center">
                                                <p>
                                                <span class="__copy">Copyrights {{date('Y');}} @ <a class="__dev" href="{{url('/')}}"  rel="noopener noreferrer">risingstar.co</a></span>
                                            </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="footer__waves-container" >
                    <svg class="footer__wave js-wave" data-wave='{"height": 40, "bones": 6, "amplitude": 70, "color": "rgba(78, 111, 136, 0.14)", "speed": 0.3}' width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <defs></defs>
                        <path d="" />
                    </svg>
                    <svg class="footer__wave js-wave" data-wave='{"height": 60, "bones": 5, "amplitude": 90, "color": "rgba(243, 248, 249, 0.02)", "speed": 0.35}' width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <defs></defs>
                        <path d="" />
                    </svg>
                </div> --}}
            </footer>
          </div>
          <script data-optimized="1" src="{{asset('assets/js/663cb.js?bb5d7')}}" defer></script>
          <script src="{{asset('assets/js/application.js?v='.date('his'))}}"></script>
          <script src="{{asset('assets/js/custom-validation-form.js?v='.date('his'))}}"></script>
          @yield('footer-script')
      </body>
</html>
                
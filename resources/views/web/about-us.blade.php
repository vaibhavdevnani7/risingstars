@extends('web.includes.base')
  @section('content')
  {{-- <div class="breadCrumbs">
            <div class="container">
                <div class="row align-items-center d-flex justify-content-center">
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <a href="{{url('/')}}">Home</a>
                                <a href="#">/</a>
                                <a>About Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="innerSection">
            <br><br><br>
            <div id="features" class="nt-section pt-0 section ">
                <div class="container">
                    <div class="row align-items-md-center">
                        <div class="nt-column col-sm-12 col-lg-6 col-12">
                            <div class="section-heading section-heading--dark">
                                <h6 class="__subtitle">Our Mission</h6>
                                <h2 class="__title">
                                    Our mission is to empower Entrepreneurs in the Indian<br>
                                    <span> Blockchain Ecosystem in all aspects</span>
                                </h2>
                            </div>
                            <div class="spacer py-2"></div>
                            <div class="wpb_text_column wpb_content_element hard-dark">
                                <div class="wpb_wrapper">
                                    <p>
                                       We want to be at the forefront of BUIDLing the Indian Blockchain ecosystem by empowering the Entrepreneurs with all the tools to scale their ventures to the moon. We take an active involvement approach by giving the entrepreneurs access to our network of thought leaders, mentors and investors. Additionally, we provide technical, business and marketing support to accelerate the venture's growth.
                                    </p>
                                </div>
                            </div>
                            <!-- <div class="nt_btn_6092 mt-9">
                                <a class="nt-btn custom-btn custom-btn--medium custom-btn--style-2 btn-default-size" href="#features-two" title="see more features">Read More</a>
                            </div> -->
                        </div>
                        <div class="nt-column col-sm-12 col-lg-6 col-12 text-center text-lg-right">
                            <div class="spacer py-4 d-lg-none"></div>
                            <figure class="image-container js-tilt" data-tilt-speed="600" data-tilt-max="15" data-tilt-perspective="700">
                                <img class="img-fluid" width="520" height="507" src="{{asset('assets/img/mission.png')}}" alt="Demo">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
             <div id="blog" class="nt-section section pt-0">
        <div class="container">
             <div class="row">
                <div class="nt-column col-sm-12">
                    <div class="section-heading section-heading--dark">
                        <h6 class="__subtitle"></h6>
                        <h2 class="__title">Our<span> Team</span></h2>
                    </div>
                    <div class="spacer py-6"></div>
                    <div class="posts posts--s1">
                        <div class="__inner">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-lg-4 col-xl-4 nt-post post-731 post type-post status-publish format-standard has-post-thumbnail hentry category-seo category-strategy nt-post-class d-flex align-items-stretch">
                                    <div class="__item __item--preview __item--rounded __item--shadow">
                                        <div class="__header">
                                            <figure class="__image __image--rounded">
                                                <img src="https://rising-star-img.s3.ap-south-1.amazonaws.com/Sankalp.png?v=1">
                                            </figure>
                                        </div>
                                        <div class="__body">
                                            <div class="__content">
                                                
                                                <h4 class="__title">
                                                   Sankalp Shangari
                                                </h4>
                                                <h6>
                                                  Founder
                                                </h6>
                                                <p>
                                                  <i>JP Morgan and Deutsche Bank | Built and sold Instant Pay (Fintech Wallet), LALA (Crypto non-custodial wallet), COSS (Singapore’s first crypto exchange) | Active investor | Hosts a Crypto Podcast called @HashTalk</i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-12 col-sm-12 col-lg-4 col-xl-4 nt-post post-731 post type-post status-publish format-standard has-post-thumbnail hentry category-seo category-strategy nt-post-class d-flex align-items-stretch">
                                    <div class="__item __item--preview __item--rounded __item--shadow">
                                        <div class="__header">
                                            <figure class="__image __image--rounded">
                                                <img src="https://rising-star-img.s3.ap-south-1.amazonaws.com/Sudhanshu.png">
                                            </figure>
                                        </div>
                                        <div class="__body">
                                            <div class="__content">
                                                
                                                <h4 class="__title">
                                                   Sudhanshu Sabharwal  
                                                   
                                                </h4>
                                                  <h6>
                                                  Head Partnerships
                                                  </h6>
                                                <p>
                                                  <i>MBA IE Business School | Delhi College of Engineering | Ex-Product Manager at Staxe (DeFi) and Co-founder of Gymday (B2B SaaS) | Long on NFTs, Crypto and Metaverse</i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-12 col-sm-12 col-lg-4 col-xl-4 nt-post post-731 post type-post status-publish format-standard has-post-thumbnail hentry category-seo category-strategy nt-post-class d-flex align-items-stretch">
                                    <div class="__item __item--preview __item--rounded __item--shadow">
                                        <div class="__header">
                                            <figure class="__image __image--rounded">
                                                <img src="https://rising-star-img.s3.ap-south-1.amazonaws.com/Siddharth.png">
                                            </figure>
                                        </div>
                                        <div class="__body">
                                            <div class="__content">
                                                
                                                <h4 class="__title">
                                                   Siddharth Sambharia
                                                   
                                                </h4>
                                                <h6>
                                                  Analyst
                                                 </h6>
                                                <p><i>BITS Pilani | Generalist with interest in product development and growth | Entrepreneur in making</i></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-lg-4 col-xl-4 nt-post post-731 post type-post status-publish format-standard has-post-thumbnail hentry category-seo category-strategy nt-post-class d-flex align-items-stretch">
                                    <div class="__item __item--preview __item--rounded __item--shadow">
                                        <div class="__header">
                                            <figure class="__image __image--rounded">
                                                <img src="https://rising-star-img.s3.ap-south-1.amazonaws.com/Pavel.jpeg?v=1">
                                            </figure>
                                        </div>
                                        <div class="__body">
                                            <div class="__content">
                                                
                                                 <h4 class="__title">
                                                   Pavel Bains
                                                   
                                                </h4>
                                                <h6>
                                                     Advisor, Web 3.0 & Gaming
                                                </h6>
                                                <p>
                                                  <i> Founder Bluzelle, MixMob | Ex-Disney, EA and Warner Bros | Active investor in crypto and tech startups.</i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-12 col-sm-12 col-lg-4 col-xl-4 nt-post post-731 post type-post status-publish format-standard has-post-thumbnail hentry category-seo category-strategy nt-post-class d-flex align-items-stretch">
                                    <div class="__item __item--preview __item--rounded __item--shadow">
                                        <div class="__header">
                                            <figure class="__image __image--rounded">
                                                <img src="https://rising-star-img.s3.ap-south-1.amazonaws.com/SubhashBedi.jpeg">
                                            </figure>
                                        </div>
                                        <div class="__body">
                                            <div class="__content">
                                                
                                                <h4 class="__title">
                                                    Subhash Bedi
                                                </h4>
                                                <h6>
                                                     Advisor, Structuring and Funds
                                                </h6>
                                                <p>
                                                  <i>Rising Straits and Red fort Capital | 100 most influential persons of the decade in Global Real Estate | Emerging Entrepreneur Award 2015</i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-12 col-sm-12 col-lg-4 col-xl-4 nt-post post-731 post type-post status-publish format-standard has-post-thumbnail hentry category-seo category-strategy nt-post-class d-flex align-items-stretch">
                                    <div class="__item __item--preview __item--rounded __item--shadow">
                                        <div class="__header">
                                            <figure class="__image __image--rounded">
                                                <img src="https://rising-star-img.s3.ap-south-1.amazonaws.com/Santosh.jpeg">
                                            </figure>
                                        </div>
                                        <div class="__body">
                                            <div class="__content">
                                                
                                                <h4 class="__title">
                                                    Santosh Jaiswal
                                                </h4>
                                                <h6>
                                                     Advisor, CFO Services
                                                </h6>
                                                <p><i>17+ Years of Finance & Fund experience | Red Fort Capital, GE Capital, Genpact, Fidelity Worldwide Investment. </i></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
@endsection

@extends('web.includes.base')
  @section('content')
  <div id="home" class="nt-section">
      <div class="container-fluid pl-0 pr-0">
          <div class="row no-gutters">
              <div class="nt-column col-sm-12">
                  <div id="start-screen" class="start-screen start-screen--full-height start-screen--style-1">
                      <div class="start-screen__bg-container">
                          <div class="start-screen__bg" style="background-image: url(https://ninetheme.com/themes/techland/wp-content/uploads/2019/05/bg_1.png); background-position: center bottom;"></div>
                      </div>
                      <div class="start-screen__shapes d-none d-lg-block">
                          <img src="https://ninetheme.com/themes/techland/wp-content/uploads/2019/05/shape_1.png')}}" class="img-shape d-none d-xl-block" alt="shape_1.png')}}" />
                          <img src="{{asset('assets/img/shape_2.png')}}" class="img-shape" alt="shape_2.png')}}" />
                      </div>
                      <div class="start-screen__content-container">
                          <div class="start-screen__content__item align-items-center">
                              <div class="container">
                                  <div class="row">
                                      <div class="col-12 col-md-10 col-lg-6">
                                          <!-- <div class="d-none d-md-block"><div class="__site-name">TechLand</div></div> -->
                                          <h1><span>We don't just provide capital</span></h1>
                                          <p>
                                              <b>We help Web3.0 start-ups grow in all aspects</b>
                                              <p>Get access to an active network of thought leaders from the Blockchain industry to take your venture to the moon!</p>
                                          </p>
                                          <div class="spacer py-2 py-sm-4"></div>
                                          <div class="d-table">
                                              <div class="d-table-cell"><a class="custom-btn custom-btn--big custom-btn--style-1" href="{{url('be-partner')}}" title="read more">Become a Partner</a></div>
                                             {{--  <div class="d-table-cell">
                                                  <div class="top-bar__auth-btns ml-5"><a class="custom-btn custom-btn--big custom-btn--style-3" href="{{url('raise-fund')}}">Raise Funds</a>
                                                  </div>
                                              </div> --}}
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


  <div id="testimonials" class="nt-section section pb-0 vc_custom_1558664469887 nt-has-fill">
      <div class="container">
          <div class="row justify-content-lg-between align-items-md-end">
              <div class="nt-column col-sm-12 col-lg-5 col-md-6 col-12">
                  <div class="section-heading section-heading--dark">
                      <h6 class="__subtitle">Offer</h6>
                      <h2 class="__title">
                          What we have to offer<br />
                          <span>Global network of Industry Leaders</span>
                      </h2>
                  </div>
              </div>
              <div class="nt-column col-sm-12 col-md-6 col-12">
                  <div class="spacer py-2 d-md-none"></div>
                  <div class="wpb_text_column wpb_content_element">
                      <div class="wpb_wrapper"><p>Get access to global industry leaders via one to one interactions, masterclasses, workshops and networking events.</p></div>
                  </div>
              </div>
              <div class="nt-column col-sm-12"><div class="spacer py-6"></div></div>
          </div>
      </div>
  </div>
  <div class="nt-section pt-0 section vc_custom_1558664460638 nt-has-fill noBefore">
      <div class="container-fluid">
          <div class="row">
              <div class="nt-column col-sm-12">
                  <div class="review review--s4 review--slider">
                      <div
                          class="js-slick"
                          data-slick='{"autoplay": true,"infinite": true,"arrows": false,"dots": true,"speed": 1200,"slidesToShow": 1,"autoplaySpeed": 3000,"responsive": [{"breakpoint":575,"settings":{"slidesToShow": 2}},{"breakpoint":767,"settings":{"slidesToShow": 2}},{"breakpoint":991,"settings":{"slidesToShow": 3}},{"breakpoint":1199,"settings":{"slidesToShow": 4}}]}'
                      >
                          <div class="review__item review__item--rounded review__item--shadow review__item--corner-left">
                              <figure class="review__item__author-image"><img src="{{asset('assets/img/technology.svg')}}" alt="3.jpg" /></figure>
                              <span class="review__item__author-name h5">Technology know-how</span>
                              <p><i>Facing trouble product-wise? Our tech partners will help you cross any technical hurdle</i></p>
                          </div>
                          <div class="review__item review__item--rounded review__item--shadow review__item--corner-left">
                              <figure class="review__item__author-image"><img src="{{asset('assets/img/marketing.svg')}}" alt="4.jpg" /></figure>
                              <span class="review__item__author-name h5">Marketing</span>
                              <p><i>Build your brand under guidance of our Marketing experts</i></p>
                          </div>
                          <div class="review__item review__item--rounded review__item--shadow review__item--corner-left">
                              <figure class="review__item__author-image"><img src="{{asset('assets/img/CommunityBuilding.svg')}}" alt="s3_4.jpg" /></figure>
                              <span class="review__item__author-name h5">Community Building</span>
                              <p>Build a strong Discord community around your project</p>
                             
                          </div>
                          <div class="review__item review__item--rounded review__item--shadow review__item--corner-left">
                              <figure class="review__item__author-image"><img src="{{asset('assets/img/token.svg')}}" alt="s3_5.jpg" /></figure>
                              <span class="review__item__author-name h5">Tokenomics</span>
                              <p><i>Design sturdy tokenomics around your project to capture maximum value</i></p>
                                  
                          </div>
                          <div class="review__item review__item--rounded review__item--shadow review__item--corner-left">
                              <figure class="review__item__author-image"><img src="{{asset('assets/img/hammer.svg')}}" alt="3.jpg" /></figure>
                              <span class="review__item__author-name h5">Governance</span>
                              <p><i>Build robust community governance for your project</i></p>
                              
                          </div>
                          
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div
      id="info-block"
      data-jarallax
      data-type="scroll"
      data-speed="0.3"
      data-img-position="50% 50%"
      data-img-size="cover"
      data-img-repeat="no-repeat"
      style="background-attachment: fixed; -webkit-background-size: cover; background-image: url(https://ninetheme.com/themes/techland/wp-content/uploads/2019/05/base_bg.jpg);"
      class="nt-section section nt-has-fill section--bg-img nt-has-divider jarallax jarallax-bg jarallax-scroll"
  >
    <div class="container">
        <div class="row">
            <div class="nt-column col-sm-12">
                <div class="row align-items-md-center align-items-xs-center text-center-device">
                    <div class="nt-column col-sm-12 col-md-6 col-12">
                        <div class="section-heading section-heading--white">
                            <h6 class="__subtitle">APPLICATION</h6>
                            <h2 class="__title">You are only an application <span><br> form away from making it! GMI!</span></h2>
                        </div>
                        <div class="spacer py-3"></div>
                        <div class="nt_btn_8861">
                            <a class="nt-btn custom-btn custom-btn--medium custom-btn--style-4" href="{{url('raise-fund')}}" title="see our reviews">Raise Funds</a>
                        </div>
                    </div>
                    <div class="info-block--s1 nt-column col-sm-12 col-md-6 col-12 text-center">
                        <div class="spacer py-4 d-lg-none"></div>
                        <figure class="image-container">
                            <img
                                class="img-fluid"
                                width="409"
                                height="440"
                                src="{{asset('assets/img/application.png')}}"
                                alt="demo"
                            />
                        </figure>
                    </div>
                </div>
            </div>
            <div class="nt-column col-sm-12">
                <div class="spacer py-10 d-none d-md-block"></div>
                <div class="spacer py-4 d-none d-lg-block"></div>
            </div>
        </div>
    </div>
    <div class="shape">
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="200" viewBox="0 0 1680 200" preserveAspectRatio="none" style="min-height: 180px;">
            <path d="M0 3s561.937 57 842 55c286 0 484-18 839-58v200H-2z" style="mix-blend-mode: screen;" fill="#fff" fill-rule="evenodd"></path>
        </svg>
    </div>
  </div>
  
  <div id="features" class="nt-section pt-0 section">
      <div class="container">
          <div class="row align-items-md-center">
              <div class="nt-column col-sm-12 col-lg-6 col-12">
                  <div class="section-heading section-heading--dark">
                      <h6 class="__subtitle">Our Mission</h6>
                      <h2 class="__title">
                          Our mission is to empower Entrepreneurs in the Indian<br />
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
                  <div class="nt_btn_6092 mt-9">
                      <a class="nt-btn custom-btn custom-btn--medium custom-btn--style-2 btn-default-size" href="{{url('about-us')}}" title="see more features">Read More</a>
                  </div>
              </div>
              <div class="nt-column col-sm-12 col-lg-6 col-12 text-center text-lg-right">
                  <div class="spacer py-4 d-lg-none"></div>
                  <figure class="image-container js-tilt" data-tilt-speed="600" data-tilt-max="15" data-tilt-perspective="700">
                      <img class="img-fluid" width="520" height="507" src="{{asset('assets/img/mission.png')}}" alt="Demo" />
                  </figure>
              </div>
          </div>
      </div>
  </div>

  <div
      id="info-block"
      data-jarallax
      data-type="scroll"
      data-speed="0.3"
      data-img-position="50% 50%"
      data-img-size="cover"
      data-img-repeat="no-repeat"
      style="background-attachment: fixed; -webkit-background-size: cover; background-image: url(https://ninetheme.com/themes/techland/wp-content/uploads/2019/05/base_bg.jpg);"
      class="nt-section section nt-has-fill section--bg-img nt-has-divider jarallax jarallax-bg jarallax-scroll"
  >
      <div class="container">
          <div class="row">
              <div class="nt-column col-sm-12">
                  <div class="row align-items-md-center text-center-device">
                      <div class="nt-column col-sm-12 col-md-6 col-12">
                          <div class="section-heading section-heading--white">
                              <h6 class="__subtitle">ACCESS</h6>
                              <h2 class="__title">
                         {{--  Our mission is to empower Entrepreneurs in the Indian<br />
                          <span> Blockchain Ecosystem in all aspects</span> --}}
                          Get first access to the most promising ventures in the Indian Ecosystem<br /> <span>  at an early stage</span>
                      </h2>
                          </div>
                          <div class="spacer py-3"></div>
                          <div class="nt_btn_8861">
                              <a class="nt-btn custom-btn custom-btn--medium custom-btn--style-4" href="{{url('be-partner')}}" title="see our reviews">Become a Partner</a>
                          </div>
                      </div>
                      <div class="info-block--s1 nt-column col-sm-12 col-md-6 col-12 text-center">
                          <div class="spacer py-4 d-lg-none"></div>
                          <figure class="image-container">
                              <img
                                  class="img-fluid"
                                  width="409"
                                  height="440"
                                  src="{{asset('assets/img/newsletter.png')}}"
                                  alt="demo"
                              />
                          </figure>
                      </div>
                  </div>
              </div>
              <div class="nt-column col-sm-12">
                  <div class="spacer py-10 d-none d-md-block"></div>
                  <div class="spacer py-4 d-none d-lg-block"></div>
              </div>
          </div>
      </div>
      <div class="shape">
          <svg xmlns="http://www.w3.org/2000/svg')}}" width="100%" height="200" viewBox="0 0 1680 200" preserveAspectRatio="none" style="min-height: 180px;">
              <path d="M0 3s561.937 57 842 55c286 0 484-18 839-58v200H-2z" style="mix-blend-mode: screen;" fill="#fff" fill-rule="evenodd"></path>
          </svg>
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
                <div
                    id="contact"
                    data-jarallax
                    data-type="scroll"
                    data-speed="0.3"
                    data-img-position="50% 50%"
                    data-img-size="cover"
                    data-img-repeat="no-repeat"
                    style=" background-attachment: fixed; -webkit-background-size: cover; background-image: url(https://ninetheme.com/themes/techland/wp-content/uploads/2019/05/base_bg.jpg);"
                    class="nt-section section nt-has-fill section--bg-img jarallax jarallax-bg jarallax-scroll pb-0"
                >
                    <div class="container">
                        <div class="row">
                            @if(session('contact_us_status'))
                              @if(session('contact_us_status')==true)
                                <script type="text/javascript">
                                  $(document).ready(function(){       
                                   $('#success_tic').modal('show');
                                    }); 
                                </script>
                              @endif
                            @endif
                            <div class="nt-column col-sm-12">
                                <div class="section-heading section-heading--center section-heading--white">
                                    <h2 class="__title">Get <span> in Touch</span></h2>
                                    <div class="__description">Feel free to reach out to us with any questions! We will reach out to you within the next 24 hours.</div>
                                </div>
                                <div class="spacer py-4"></div>
                                <div class="row justify-content-md-center">
                                    <div class="nt-column col-sm-12 col-lg-6 col-md-10 col-12">
                                        <div role="form" class="wpcf7" id="wpcf7-f520-p19-o1" lang="en-US" dir="ltr">
                                            <div class="screen-reader-response" role="alert" aria-live="polite"></div>
                                            <form action="{{url('contact-us')}}" method="post" class="wpcf7-form init demo" novalidate="novalidate">
                                                @csrf
                                                <div class="js-contact-form">
                                                    <div class="input-wrp">
                                                        <span class="wpcf7-form-control-wrap text-554">
                                                            <input maxlength="30"
                                                                type="text"
                                                                name="name"
                                                                value=""
                                                                size="40"
                                                                class="required wpcf7-form-control wpcf7-text wpcf7-validates-as-required textfield textfield--dark"
                                                                aria-required="true"
                                                                aria-invalid="false"
                                                                placeholder="Full name"
                                                            />
                                                        </span>
                                                    </div>
                                                    <div class="input-wrp">
                                                        <span class="wpcf7-form-control-wrap text-554">
                                                            <input  maxlength="50"
                                                                type="text"
                                                                name="email"
                                                                value=""
                                                                size="50"
                                                                class="required email wpcf7-form-control wpcf7-text wpcf7-validates-as-required textfield textfield--dark"
                                                                aria-required="true"
                                                                aria-invalid="false"
                                                                placeholder="Email address"
                                                            />
                                                        </span>
                                                    </div>
                                                    <p>
                                                        <label class="input-wrp">
                                                            <br />
                                                            <span class="wpcf7-form-control-wrap textarea-124">
                                                                <textarea
                                                                    name="message"
                                                                    cols="40"
                                                                    rows="6"
                                                                    class="required wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required textfield textfield--dark"
                                                                    aria-required="true"
                                                                    aria-invalid="false"
                                                                    placeholder="Message"
                                                                ></textarea>
                                                            </span>
                                                            <br />
                                                        </label>
                                                        <br />
                                                        <input type="submit" value="Send Message" class="wpcf7-form-control wpcf7-submit custom-btn custom-btn--medium custom-btn--style-5 wide" />
                                                    </p>
                                                </div>

                                                
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

</main>

<div id="success_tic" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <a class="close" href="#" data-dismiss="modal">&times;</a>
          <div class="page-body">
        <div class="head">
        <h1 style="text-align:center;"><div class="checkmark-circle">
      <div class="background"></div>
      <div class="checkmark draw"></div>
    </div><h1>  
          <h3 style="margin-top:5px;">Thanks for reaching out. We’ll get back to you in the next 24 hours.</h4>
        </div>
      </div>
    </div>
      </div>
    </div>

@endsection

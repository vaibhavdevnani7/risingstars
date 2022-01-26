<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME TO WORLD OF BOLLY HEROES</title>
    <meta name="description" content="NFT Collection"/>
    <link rel="stylesheet" type="text/css" href="{{asset('preregister/css/bootstrap.min.css?v=1.1')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('preregister/css/fontawesome-all.min.css?v=1.1')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('preregister/css/iosoon-style.css?v=2.2')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('preregister/css/iosoon-theme7.css?v=3.1')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style type="text/css">
        .response-msg{
            text-align: center;
            font-size: 14px;
            margin-bottom: 10px;
        }
        .success-response{
            color: green;
        }
        .error-response{
            color: red;
        }
        .error{
            color: red;
            font-size: 12px;
        }
        .logo-section img{
            margin-left: 260px;
        }
    </style>
    <script type="text/javascript">
      let baseUrl = '{{url('/')}}';
    </script>
    @if(env('APP_ENV')=='production')
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-206905016-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-206905016-1');
      </script>
      <!-- Hotjar Tracking Code for bollyheroes.com -->
      <script>
          (function(h,o,t,j,a,r){
              h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
              h._hjSettings={hjid:2590028,hjsv:6};
              a=o.getElementsByTagName('head')[0];
              r=o.createElement('script');r.async=1;
              r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
              a.appendChild(r);
          })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
      </script>
    @endif
</head>
<body>
    <div class="form-body">
        
        <img src="https://refrance-image.s3.ap-south-1.amazonaws.com/Shahanshah.png" class="bannerImage">
        <div class="other-bg"></div>
        <div class="row">
            <div class="img-holder">
                <div class="info-holder">
                    
                    <p>
                        <strong>
                            A Limited Edition NFT collection from a parallel dimension called Bollyverse. The world's first community-driven world, where your Hero NFTs will be the star of their own movies, animated series, gaming, and a whole lot more.
                        </strong>
                    </p>
                </div>
            </div>
            <div class="form-holder custom-bg2">
                
                   
                <div class="form-content">
                    <div class="logo-section">
                        <a href="{{url('/')}}"  class="logo">
                            {{-- <img class="logo-size deskBlock" src="https://refrance-image.s3.ap-south-1.amazonaws.com/BollyLogo_02.png" width="150" alt="">
                            <img class="logo-size MobBlock" src="https://refrance-image.s3.ap-south-1.amazonaws.com/BollyLogo_02.png" width="150" alt=""> --}}
                            {{-- <img class="logo-size deskBlock" style="width:110px;"  src="https://refrance-image.s3.ap-south-1.amazonaws.com/logo.webp" alt="Logo">
                            <img class="logo-size MobBlock"  src="https://refrance-image.s3.ap-south-1.amazonaws.com/logo.webp" alt="Logo"> --}}
                        </a>
                    </div>

                    <div class="form-items">
                       
                        {{-- <div class="time-counter form-row">
                            <div class="days count col">
                                <div class="num">8</div>
                                <div class="label">Days</div>
                            </div>
                            <div class="hours count col">
                                <div class="num">13</div>
                                <div class="label">Hrs</div>
                            </div>
                            <div class="minutes count col">
                                <div class="num">59</div>
                                <div class="label">Min</div>
                            </div>
                            <div class="seconds count col">
                                <div class="num">30</div>
                                <div class="label">Sec</div>
                            </div>
                        </div> --}}
                         <div class="spacer"></div>
                        <div class="form-row logo-social">
                           
                            
                        </div>
                        
                        <h3 style="text-transform: uppercase; ">Bolly Heroes <br> Pre-Registration Page</h3>
                        <p>A parallel bollywood world built in collaboration with real partners - production house,
music labels, brand, celebrities, gaming studios & animation companies</p>
                        
                        <!-- <form class="form-row">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="E-mail">
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="ETH Address">
                            </div>
                             <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Enter your name">
                            </div>
                            <div class="col-md-12">
                                <span data-toggle="modal" data-target="#Thankyou" class="btn btn-primary">Register Now</span> 
                            </div>
                        </form> -->
                        <div class="response-msg"></div>
                        <form class="form-row">
                          @csrf
                            <div class="col-md-12">
                                <input type="text"  required="" maxlength="30" class="form-control" name="name" placeholder="Name*">
                            </div>
                            <div class="col-md-12">
                                <input type="email" required="" maxlength="50" class="form-control" name="email" placeholder="E-mail*">
                            </div>
                            <div class="col-md-12">
                                <input type="text" required="" id="ether" maxlength="42" class="form-control" name="ether_address" placeholder="ETH Address*">
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select class="form-control required communication_method" required="" name="communication_method">
                                        <option value="">Select preferred method of communication </option>
                                        <option value="email">Email</option>
                                        <option value="twitter">Twitter</option>
                                        <option value="telegram">Telegram</option>
                                        <option value="discord">Discord</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 sub-input" style="display: none;">
                                <input type="text" id="communication_method_value" maxlength="42" class="form-control" name="communication_method_value" placeholder="Please enter">
                            </div>
                            <div class="col-md-12">
                                <input type="text"  id="referred" maxlength="50" class="form-control" name="referred" placeholder="Referred by">
                            </div>
                             
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" style="float: right;">Register Now</button>
                            </div>
                            <input type="hidden" name="submit-form" value="1">
                        </form>
                        <div class="spacer"></div>

                        <div class="MobBlock Offersection ">
                    <p>
                        <strong>
                            A Limited Edition NFT collection from a parallel dimension called Bollyverse. The world's first community-driven world, where your Hero NFTs will be the star of their own movies, animated series, gaming, and a whole lot more.
                        </strong>
                    </p>
                </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <footer>
        <!-- <h4>Join Us on</h4> -->
        <ul>
            <li>
                <a href="https://bollyheroesofficial.medium.com/" target="_blank">
                    <img src="https://refrance-image.s3.ap-south-1.amazonaws.com/social/medium.png">
                </a>
            </li>
            <li>
                <a href="https://discord.gg/qzUKVrn9e8" target="_blank">
                    <img src="https://refrance-image.s3.ap-south-1.amazonaws.com/social/new/discord.png">
                </a>
            </li>
            <li>
                <a href="https://t.me/bolly_heroes_official" target="_blank">
                    <img src="https://refrance-image.s3.ap-south-1.amazonaws.com/social/new/telegram.png">
                </a>
            </li>
            <li>
                <a href="https://twitter.com/BollyHeroes?s=20" target="_blank">
                    <img src="https://refrance-image.s3.ap-south-1.amazonaws.com/social/new/twitter.png">
                </a>
            </li>
        </ul>
    </footer>
    <!-- basic modal -->
<div class="modal fade" id="Thankyou" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="https://refrance-image.s3.ap-south-1.amazonaws.com/social/Thankyou.jpg">
        <h4>Thanks for signing up. Stay tuned</h4>
      </div>
    </div>
  </div>
</div>
<!-- basic modal -->
<script src="{{asset('preregister/js/jquery.min.js')}}"></script>
<script src="{{asset('preregister/js/popper.min.js')}}"></script>
<script src="{{asset('preregister/js/bootstrap.min.js')}}"></script>
<script src="{{asset('preregister/js/paper-full.min.js')}}"></script>
<script src="{{asset('preregister/js/animation1.js')}}"></script>
<script src="{{asset('preregister/js/main.js?v='.date('ymdhis'))}}"></script>
<script type="text/javascript">

        
    $(function(){

        var isAddress = function (address) {
            if (!/^(0x)?[0-9a-f]{40}$/i.test(address)) {
                // check if it has the basic requirements of an address
                return false;
            } else if (/^(0x)?[0-9a-f]{40}$/.test(address) || /^(0x)?[0-9A-F]{40}$/.test(address)) {
                // If it's all small caps or all all caps, return true
                return true;
            } else {
                return true;
            }
        };


        

        
        $(document).on("submit", "form", function(e){
          e.preventDefault();
          $(document).find('.ether-error').remove();
          console.log(isAddress($(document).find('#ether').val()));
          if(isAddress($(document).find('#ether').val())==false){
            //$('#ether').after('<div class="error ether-error">Please enter valid ether address.</div>');
            $(document).find('.response-msg').addClass('error-response').html('Please enter valid ether address.<br>');
            return false;
          }

          $(document).find('.response-msg').removeClass('success-response');
          $(document).find('.response-msg').removeClass('error-response');
          $.ajax({
              url: baseUrl+"/post/pre-register",
              data: $(this).serialize(),
              type: 'post',
              dataType: 'json',
              success: function (resp) {
                  console.log(resp);
                  $(document).find('.response-msg').css('display','block');
                  if(resp.status=='error'){
                    $(document).find('.response-msg').addClass('error-response').html(resp.message+'<br>');
                  }
                  else{
                        $(document).find('.response-msg').addClass('success-response').html(resp.message+'<br>');
                        $(document).find('#Thankyou').modal('show');
                  }
                  setTimeout(
                    function(){
                      $(document).find('.response-msg').html('');
                      $(document).find('.response-msg').css('display','none');
                    },5000);
              },

              error: function(jqXHR, textStatus, errorThrown) {
                    if (jqXHR.status == 500) {
                      //toastr.error("API Server is down. Please try it in some time.", 'Api Error');
                      console.log('Internal error: ' + jqXHR.responseText);
                    } 
                      else
                      {
                          //toastr.error("API Server is down. Please try it in some time.", 'Api Error');
                          console.log('Unexpected error.');
                      }
                }
            })
        });

        $(document).on('change','.communication_method',function(){
            console.log($(this).val());

            if($(this).val()!='email' && $(this).val()!=''){
                $(document).find('#communication_method_value').attr('required','required');
                $(document).find('.sub-input').css('display','block');
                
                $(document).find('#communication_method_value').attr('placeholder','Enter your '+$(this).val()+' link');
                
            }
            else{
                $(document).find('#communication_method_value').attr('required',false);
                $(document).find('.sub-input').css('display','none');
            }
        })

    });
</script>
</body>
</html>
@extends('web.includes.base')
@section('header-script')
 <link data-optimized="1" rel="stylesheet" href="{{asset('assets/css/form.css?v='.date('ymdhis'))}}" />
@endsection
@section('content')
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
          <h3 style="margin-top:5px;">Thank You! We have successfully received your request. Our team will contact you soon.</h4>
        </div>
      </div>
    </div>
      </div>
    </div>


 
  <div class="formSection">

    <div class="container">

          @if(session('status'))
            @if(session('status')==true)
            <script type="text/javascript">
              $(document).ready(function(){       
               $('#success_tic').modal('show');
                }); 
            </script>
           
            @endif
          @endif
          

          <form class="form panel__register-form" enctype="multipart/form-data" id="investee-form" method="post" action="{{url('investee/store')}}">
            @csrf
            <div class="form__row Mb_5">
              <div class="company-contacts company-contacts--s2">
                <div class="__inner">
                    <div class="__name h3">Application  <span>Form</span></div>
                </div>
            </div>
            <p>Dear Founder, please fill this form to apply for the program. We will get back to you with a response as soon as possible.</p>
            </div>
            <div class="form__row">
              <label><b>Upload Pitch Deck</b></label>
              <div class="file-drop-area">
                  <span class="fake-btn">Choose files</span>
                  <span class="file-msg">or drag and drop files here</span>
                  <input class="file-input" type="file" multiple name="investee[pitch_deck]">
                </div>
            </div>
              <div class="form__row row">
                <div class="col-md-4">
                  <input type="text" id="project_name" class="form__input required input_Shadow" name="investee[project_name]" data-validation="text" data-error="Invalid Project." >
                  <span class="form__bar"></span>
                  <label for="project_name" class="form__label">Project Name</label>
                  <span class="form__error"></span>
                </div>
                <div class="col-md-4">
                  <input type="text" id="email" class="form__input required email input_Shadow" name="investee[email]" data-validation="email" data-error="Invalid email address.">
                  <span class="form__bar"></span>
                  <label for="email" class="form__label">Email</label>
                  <span class="form__error"></span>
                </div>
                <div class="col-md-4">
                  <input type="text" id="fisrt_name" class="form__input required input_Shadow" name="investee[first_name]" data-validation="text" data-error="Invalid fisrt name." >
                  <span class="form__bar"></span>
                  <label for="first_name" class="form__label">First Name</label>
                  <span class="form__error"></span>
                </div>
              </div>
              <div class="form__row row">
                <div class="col-md-4">
                  <input type="text" id="last_name" class="form__input required input_Shadow" name="investee[last_name]" data-validation="text" data-error="Invalid last name.">
                  <span class="form__bar"></span>
                  <label for="last_name" class="form__label">Last Name</label>
                  <span class="form__error"></span>
                </div>
                <div class="col-md-4">
                  <input type="text" id="website_url" class="form__input required url input_Shadow" name="investee[website_url]" data-validation="email" data-error="Invalid email address.">
                  <span class="form__bar"></span>
                  <label for="website_url" class="form__label">Website URL</label>
                  <span class="form__error"></span>
                </div>
                
              </div>
              <div class="form__row">
                <label><b>What is your Company's focus?</b></label>
                  @php
                    $thesis = ['Layer 1 & Native Blockchains','Layer 2 & Scaling Solutions','DeFi','NFTs, Gaming & Metaverse','Analytics & On-Chain','Crypto Trading','Digital Asset Management','Others'];
                    $c=1;
                  @endphp
                  <div class="row">
                    @foreach($thesis as $key=>$value)

                      <label for="opt-{{$key}}" class="radio col-md-4">
                        <input type="radio"  name="investee[investment_thesis]" data-target-class="investment_thesis" value="{{$value}}" id="opt-{{$key}}" class="hidden only-one investment_thesis required"/>
                        <span class="label"></span>{{$value}}
                      </label>
                      @if($c%3==0)
                        </div>
                        <div class="row form__row">
                          @php
                            $c = 0;
                          @endphp
                      @endif
                      @php
                        $c++;
                      @endphp
                    @endforeach
                  </div>
                  <div class="investment_thesis-error"></div>
                 
              </div>
              <div class="form__row row">
                <div class="col-md-12">
                  <label><b>Elevator Pitch</b></label>
                  <textarea name="investee[elevator_pitch]" class="form__input required input_Shadow" style="width: 100%;" cols="4" rows="12"></textarea>
                </div>
              </div>

              <div class="form__row">
                <label ><b>Stage of Product Development:</b></label>
                @php
                    $product_stages = ['Idea','MVP','Testnet/Beta','Mainnet/Live','Other'];
                    $c=1;
                @endphp
                <div class="row">
                  @foreach($product_stages as $key=>$product_stage)
                    <label for="product_stage-{{$key}}" class="radio col-md-4">
                      <input type="radio" name="investee[product_stage]" data-target-class="product_stage" value="{{$product_stage}}" id="product_stage-{{$key}}" class="hidden required only-one product_stage"/>
                      <span class="label"></span>{{$product_stage}}
                    </label>
                    @if($c%3==0)
                      </div>
                      <div class="row form__row">
                        @php
                          $c = 0;
                        @endphp
                    @endif
                    @php
                      $c++;
                    @endphp
                  @endforeach
                  
                </div>
                <div class="product_stage-error"></div>
              </div>
              <div class="form__row">
                <label ><b>What is your biggest concern today?</b></label>
                @php
                    $biggestConcern = ['Funding & relevant investors','Marketing & influencers','Technology & developer availability','Hiring & team growth','Other'];
                    $c=1;
                @endphp
                <div class="row">
                  @foreach($biggestConcern as $key=>$concern)
                    <label for="concern-{{$key}}" class="radio col-md-4">
                      <input type="radio" name="investee[concern]" data-target-class="concern" value="{{$concern}}" id="concern-{{$key}}" class="hidden required only-one concern"/>
                      <span class="label"></span>{{$concern}}
                    </label>
                    @if($c%3==0)
                      </div>
                      <div class="row form__row">
                        @php
                          $c = 0;
                        @endphp
                    @endif
                    @php
                      $c++;
                    @endphp
                  @endforeach
                  
                </div>
                <div class="concern-error"></div>
              </div>

              <div class="form__row">
                <label ><b>Investment Stage</b></label>
                @php
                    $investmentStages = ['Pre-Seed / Private Sale - Idea','Seed / Pre-Public Sale - Alpha or Beta','Series A+','Post Seed / Post ICO/IEO/IDO / Public Sale - Launched','Series B+ or Beyond (M&A, Listing, SPAC)'];
                    $c=1;
                @endphp
                <div class="row">
                  @foreach($investmentStages as $key=>$investmentStage)
                    <label for="investmentStage-{{$key}}" class="radio col-md-6">
                      <input type="radio" name="investee[investment_stage]" data-target-class="investmentStage" value="{{$investmentStage}}" id="investmentStage-{{$key}}" class="hidden required only-one investmentStage"/>
                      <span class="label"></span>{{$investmentStage}}
                    </label>
                    @if($c%2==0)
                      </div>
                      <div class="row form__row">
                        @php
                          $c = 0;
                        @endphp
                    @endif
                    @php
                      $c++;
                    @endphp
                  @endforeach
                  
                </div>
                <div class="investmentStage-error"></div>
              </div>

              <div class="form__row row">
                <div class="col-md-12">
                  <label><b>Tell us more about your product usage/traction.</b></label>
                  <textarea name="investee[about_product]" class="form__input required input_Shadow" style="width: 100%;" cols="4" rows="12"></textarea>
                </div>
              </div>
              <div class="form__row row">
                <div class="col-md-12">
                  <label><b>Tell us more about your community and growth plans.</b></label>
                  <textarea name="investee[about_community]" class="form__input required input_Shadow" style="width: 100%;" cols="4" rows="12"></textarea>
                </div>
              </div>
              <div class="form__row row">
                <div class="col-md-12">
                  <label><b>What’s your fundraising history?</b></label>
                  <textarea name="investee[fundraise_history" class="form__input required input_Shadow" style="width: 100%;" cols="4" rows="12"></textarea>
                </div>
              </div>
              <div class="form__row row">
                
                <div class="col-md-6">
                   <div class="row">
                     <div class="col-6">
                       <label>Do you have any token plans?</label>
                     </div>
                     <div class="col-6">
                       <div class="material-toggle">
                        <input type="checkbox" id="toggle" name="investee[taken_plan]"  class="switch required" />
                        <label for="toggle" class=""></label>
                      </div>
                     </div>
                   </div>
                </div>
              </div>
             
              <div class="form__row row">
                <div class="col-md-4">
                  <input type="text" id="linkedin" class="form__input required url input_Shadow" name="investee[linkedin]" data-validation="text" data-error="Invalid linkedin url">
                  <span class="form__bar"></span>
                  <label for="linkedin" class="form__label">LinkedIn</label>
                  <span class="form__error"></span>
                </div>
                <div class="col-md-4">
                  <input type="text" id="Telegram" class="form__input input_Shadow" name="investee[telegram]" data-validation="email" data-error="Invalid email address." >
                  <span class="form__bar"></span>
                  <label for="Telegram" class="form__label">Telegram</label>
                  <span class="form__error"></span>
                </div>
                <div class="col-md-4">
                  <input type="text" id="github" class="form__input input_Shadow" name="investee[github]" data-validation="text" data-error="Invalid Project.">
                  <span class="form__bar"></span>
                  <label for="github" class="form__label">Github Link</label>
                  <span class="form__error"></span>
                </div>
              </div>
              <div class="form__row row">
                
                <div class="col-md-4">
                  <input type="text" id="discord" class="form__input input_Shadow" name="investee[discord]" data-validation="email" data-error="Invalid email address.">
                  <span class="form__bar"></span>
                  <label for="discord" class="form__label">Discord</label>
                  <span class="form__error"></span>
                </div>
                <div class="col-md-4">
                  <input type="text" id="incorporated" class="form__input required input_Shadow" name="investee[incorporated]" data-validation="text" data-error="Invalid incorporated.">
                  <span class="form__bar"></span>
                  <label for="incorporated" class="form__label">Where are you incorporated? (Countries)</label>
                  <span class="form__error"></span>
                </div>
                

              </div>
              
              <div class="form__row row">
                <div class="col-md-12">
                  <label><b>How did you hear about us?</b></label>
                </div>
                <label for="opt-twitter" class="radio col-md-2">
                    <input type="radio" name="investee[hear_about_us]" value="twitter" id="opt-twitter" data-target-class="hear_about_us" class="hidden required only-one hear_about_us"/>
                    <span class="label"></span>Twitter
                  </label>
                  
                  <label for="opt-linkedin" class="radio col-md-2">
                    <input type="radio" name="investee[hear_about_us]" id="opt-linkedin" value="linkedin" data-target-class="hear_about_us" class="hidden required only-one hear_about_us"/>
                    <span class="label"></span>LinkedIn 
                  </label>
                  
                  <label for="opt-news" class="radio col-md-2">
                    <input type="radio" name="investee[hear_about_us]" value="news" id="opt-news" data-target-class="hear_about_us" class="hidden required only-one hear_about_us"/>
                    <span class="label"></span>News
                  </label>
                  
                  <label for="opt-referral" class="radio col-md-2">
                    <input type="radio" name="investee[hear_about_us]" value="referral" id="opt-referral" data-target-class="hear_about_us" class="hidden required only-one hear_about_us"/>
                    <span class="label"></span>Referral
                  </label>
                  <label for="opt-Engine" class="radio col-md-2">
                    <input type="radio" name="investee[hear_about_us]" id="opt-Engine" value="search_engine" data-target-class="hear_about_us" class="hidden required only-one hear_about_us"/>
                    <span class="label"></span>Search Engine
                  </label>
                  
              </div>
              <div class="hear_about_us-error"></div>
              <div class="form__row row footerButton mt-5">
                <div class="col fG_0">
                  <a class="custom-btn custom-btn--medium custom-btn--style-3" href="{{url('/')}}">Cancel</a>
                </div>

                <div class="col fG_0">
                  <button type="submit" class="nt-btn custom-btn custom-btn--medium custom-btn--style-2 btn-default-size" href="#features-two" title="see more features">Submit</button>
                </div>
                
                
              </div>
          </form>
    </div>
  </div>
@endsection
@section('footer-script')
  
@endsection
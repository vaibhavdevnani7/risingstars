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
                <h1 style="text-align:center;">
                  <div class="checkmark-circle">
                    <div class="background"></div>
                    <div class="checkmark draw"></div>
                  </div>
                  <div>  
                    <h3 style="margin-top:5px;">Thank You! We have successfully received your request. Our team will contact you soon.</h3>
                  </div>
                </h1>
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

      <form class="form panel__register-form" id="register-form" method="post" action="{{url('partner/store')}}">
        @csrf
       
        <div class="form__row Mb_5">
          <div class="company-contacts company-contacts--s2">
            <div class="__inner">
                <div class="__name h3">Application <span>Form</span></div>
            </div>
          </div>
          <p>Thank you for your interest in joining our partner network. Please complete this form so that we can add you to our network and share the relevant Web 3 investment deals and events with you.</p>
        </div>
        <div class="form__row">
          <label ><b>In what capacity would you like to collaborate with us?</b></label>
          <div class="checkBox row">
            @php
              $capacities = ['Investor','Mentor', 'Collaborator'];
            @endphp
            @foreach($capacities as $key=>$capacity)
              <div class="md-checkbox col-md-4">
                <input id="i-{{$key}}" name="partner[capacity][]" data-target-class="capacity" value="{{$capacity}}" type="checkbox" class="required only-one capacity">
                <label for="i-{{$key}}">{{$capacity}}</label>
              </div>
            @endforeach
            <span class="capacity-error col-md-12"></span>
             
          </div>
        </div>
        
          <div class="form__row row">
            <div class="col-md-4">
              <input type="text" id="register-email" class="form__input input_Shadow email required" name="partner[email]" data-validation="text" data-error="Invalid email address." >
              <span class="form__bar"></span>
              <label for="register-email" class="form__label">Enter your email </label>
              <span class="form__error"></span>
            </div>
            
            
            <div class="col-md-4">
              <input type="text" id="first_name" class="form__input required input_Shadow" name="partner[first_name]" data-validation="text" data-error="Invalid First Name" >
              <span class="form__bar"></span>
              <label for="first_name" class="form__label">First Name</label>
              <span class="form__error"></span>
            </div>
            <div class="col-md-4">
              <input type="text" id="last-name" class="form__input input_Shadow" name="partner[last_name]" data-validation="text" data-error="Invalid Last name" >
              <span class="form__bar"></span>
              <label for="last-name" class="form__label">Last Name</label>
              <span class="form__error"></span>
            </div>
          </div>
          <div class="form__row row">
            <div class="col-md-4">
              <input type="text" id="company-name" class="form__input input_Shadow" name="partner[company]" data-validation="text" data-error="Invalid Company Name." >
              <span class="form__bar"></span>
              <label for="company-name" class="form__label">Name of Company</label>
              <span class="form__error"></span>
            </div>
            
            <div class="col-md-4">
              <input type="text" id="website-url" class="form__input url input_Shadow" name="partner[website_url]" data-validation="text" data-error="Invalid Website URL" >
              <span class="form__bar"></span>
              <label for="website-url" class="form__label">Website URL</label>
              <span class="form__error"></span>
            </div>
            <div class="col-md-4">
              <input type="text" id="location" class="form__input required input_Shadow" name="partner[location]" data-validation="text" data-error="Invalid location" >
              <span class="form__bar"></span>
              <label for="location" class="form__label">Location</label>
              <span class="form__error"></span>
            </div>
          </div>
          <div class="form__row row">
             <div class="col-md-12">
               <label><b>Area of Expertise</b></label>
              <textarea class="form__input required input_Shadow" style="width: 100%;" cols="4" rows="12"  name="partner[expertise]"></textarea>
             </div>
          </div>

          <div class="form__row">
              <label><b>What is your investment thesis?</b></label>
              @php
                $thesis = ['Layer 1 & Native Blockchains','Layer 2 & Scaling Solutions','DeFi','NFTs, Gaming & Metaverse','Analytics & On-Chain','Crypto Trading','Digital Asset Management','Others'];
                $c=1;
              @endphp
              <div class="row">
                @foreach($thesis as $key=>$value)

                  <label for="opt-{{$key}}" class="radio col-md-4">
                    <input type="radio"  name="partner[investment_thesis]" data-target-class="investment_thesis" value="{{$value}}" id="opt-{{$key}}" class="hidden only-one investment_thesis required"/>
                    <span class="label"></span>{{$value}}
                  </label>
                  @if($c%3==0)
                    </div>
                    <div class="row">
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


          <div class="form__row">
              <label><b>What type of investor or investment house are you?</b></label>
              @php
                $investorTypes = ['Accredited Individual / Angel Investor', 'Non Accredited Individual / Angel Investor', 'Family Office', 'Accelerator / Incubator', 'VC Fund Pre-Seed and Seed', 'Syndicate Lead', 'Corporate / Company VC', 'Series A and Growth', 'Series B & Beyond (Listing, M&A, SPAC)', 'M&A Advisor'];
                $c=1;
              @endphp
              <div class="row">
                @foreach($investorTypes as $key=>$type)
                  <label for="investorTypes-{{$key}}" class="radio col-md-4">
                    <input type="radio" name="partner[investor_type]" data-target-class="investor_type" value="{{$type}}" id="investorTypes-{{$key}}" class="hidden required only-one investor_type"/>
                    <span class="label"></span> {{$type}}
                  </label>
                  @if($c%3==0)
                    </div>
                    <div class="row">
                      @php
                        $c = 0;
                      @endphp
                  @endif
                  @php
                    $c++;
                  @endphp
                @endforeach
            </div>
              <div class="investor_type-error"></div>
          </div>
          
          <div class="form__row">
            <label><b>Preferred Average cheque size (USD)?</b></label>
            
            @php
                $chequeSizes = ['100K','100k-200k','250k-500k','500k-1M','1M'];
                $c=1;
            @endphp
            <div class="row">
              @foreach($chequeSizes as $key=>$size)
                <label for="chequeSizes-{{$key}}" class="radio col-md-3">
                  <input type="radio" name="partner[check_size]" data-target-class="check_size" value="{{$size}}" id="chequeSizes-{{$key}}" class="hidden required only-one check_size"/>
                  <span class="label"></span>{{$size}}
                </label>
                @if($c%4==0)
                  </div>
                  <div class="row">
                    @php
                      $c = 0;
                    @endphp
                @endif
                @php
                  $c++;
                @endphp
              @endforeach
            </div>
            <div class="check_size-error"></div>
          </div>
          <div class="form__row">
            <label><b>Stages that you invest in:</b></label>
            @php
                $stages = ['Pre-Seed / Private Sale - Idea','Seed / Pre-Public Sale - Alpha or Beta','Series A+','Post Seed / Post ICO/IEO/IDO / Public Sale - Launched','Series B+ or Beyond (M&A, Listing, SPAC)'];
                $c=1;
            @endphp
            <div class="row">
              @foreach($stages as $key=>$stage)
                <label for="stage-{{$key}}" class="radio col-md-6">
                  <input type="radio" name="partner[stage]" data-target-class="stage" value="{{$stage}}" id="stage-{{$key}}" class="hidden required only-one stage"/>
                  <span class="label"></span>{{$stage}}
                </label>
                @if($c%2==0)
                  </div>
                  <div class="row">
                    @php
                      $c = 0;
                    @endphp
                @endif
                @php
                  $c++;
                @endphp
              @endforeach
              
            </div>
            <div class="stage-error"></div>
          </div>

          <div class="form__row">
            <label><b>Are you a Generalist or Specialist when it comes to sectors invested in?</b></label>
            
            <div class="row">
               <label for="generalist-1" class="radio col-md-6">
                <input type="radio" name="partner[sector]" value="Generalist - Invest in everything except a few sectors" id="generalist-1" data-target-class="sector" class="hidden required only-one sector"/>
                <span class="label"></span>Generalist - Invest in everything except a few sectors
              </label>
              
              <label for="specialist-1" class="radio col-md-6">
                <input type="radio"  name="partner[sector]" value="Specialist - Invest in only a few sectors" id="specialist-1" data-target-class="sector" class="hidden required only-one sector"/>
                <span class="label"></span>Specialist - Invest in only a few sectors
              </label>
            </div>
            <div class="sector-error"></div>
            
          </div>

          <div class="form__row col-md-12">
            <label class="row" >
              <b>Geography you invest in:</b>
            </label>
            @php
                $geographies = ['USA / Canada','Europe','Asia / Australia','Latin America','Africa'];
                $c=1;
            @endphp
            <div class="row">
              @foreach($geographies as $key=>$geography)
                <div class="md-checkbox col-md-4">
                  <input id="geography-{{$key}}" type="checkbox" name="partner[geography][]" value="{{$geography}}" class="required only-one geography" data-target-class="geography">
                  <label for="geography-{{$key}}">{{$geography}}</label>
                </div>
              @endforeach
            </div>
            <div class="geography-error"></div>
          </div>
          <div class="form__row">
            <label><b>Investment Structure</b></label>
            @php
              $investmentStructure = ['All', 'Tokens Only', 'SAFE', 'Convertible Note', 'Equity', 'Revenue Share', 'Advisory'];
              $c=1;
            @endphp
             <div class="row">
                @foreach($investmentStructure as $key=>$structure)
                   <label for="structure-{{$key}}" class="radio col-md-3">
                    <input type="radio"  name="partner[investment_structure]" value="{{$structure}}" id="structure-{{$key}}" class="hidden required only-one investment_structure " data-target-class="investment_structure"/>
                    <span class="label"></span>{{$structure}}
                  </label>
                  @if($c%4==0)
                    </div>
                    <div class="row">
                      @php
                        $c = 0;
                      @endphp
                  @endif
                  @php
                    $c++;
                  @endphp
                @endforeach
               

              </div>
              <div class="investment_structure-error"></div>
          </div>

          <div class="form__row row">
              <div class="col-md-8">
                <div class="row">
                    <div class="col ">
                       <label><b>Are you keen to lead Investment Rounds</b></label>
                     </div>
                     <div class="col">
                       <div class="material-toggle">
                        <input type="checkbox" id="toggle" name="partner[investment_rounds]" class="switch"  />
                        <label for="toggle" class=""></label>
                      </div>
                     </div>
                </div>
              </div>
          </div>
          <div class="form__row row">
            <div class="col-md-4">
              <input type="text" id="linkedin" class="form__input required url input_Shadow" name="partner[linkedin]" data-validation="text" data-error="Invalid Linkedin URL" >
              <span class="form__bar"></span>
              <label for="linkedin" class="form__label">Linkedin URL</label>
              <span class="form__error"></span>
            </div>
            <div class="col-md-4">
              <input type="text" id="angel" class="form__input input_Shadow" name="partner[angel]" data-validation="text" data-error="Invalid URL" >
              <span class="form__bar"></span>
              <label for="angel" class="form__label">Angel.co</label>
              <span class="form__error"></span>
            </div>
          </div>
      
           
          
      
          <div class="form__row row footerButton">
            <div class="col fG_0">
              <a class="custom-btn custom-btn--medium custom-btn--style-3" href="{{url('/')}}">Cancel</a>
            </div>

            <div class="col fG_0">
              <button class="nt-btn custom-btn custom-btn--medium custom-btn--style-2 btn-default-size" href="#features-two" title="see more features">Submit</button>
            </div>
            
            
          </div>
      </form>
    </div>
  </div>
@endsection
@section('footer-script')
  
@endsection
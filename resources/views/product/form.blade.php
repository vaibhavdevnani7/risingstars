@extends('web.includes.base')
@section('header-script')
 <link  rel="stylesheet" href="{{asset('assets/css/form.css?v='.date('ymdhis'))}}" />
 <link  rel="stylesheet" href="{{asset('assets/css/product.css?v='.date('ymdhis'))}}" />
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
              </h1>  
              <div style="margin-top:5px;">Thank You! We have successfully received your request. Your product will list on our product listing once we verified it.</div>
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

      <form class="form product-form" id="product-form" method="post" action="{{url('product/store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form__row Mb_5">
          <div class="company-contacts company-contacts--s2">
            <div class="__inner">
                <div class="__name h3">Product <span>Form</span></div>
            </div>
          </div>
          
        </div>
        <div class="form__row row mt-5">
            
            
            <div class="col-md-8">
              {{-- <label><b>Product Name</b></label> --}}
              
              <input type="text" id="product_title" maxlength="50" class="form__input input_Shadow required" name="product_title" data-validation="text" data-error="Invalid Product Title"  >
              <span class="form__bar"></span>
              <label for="product_title" class="form__label f-required">Product Name</label>
              <span class="form__error"></span>
            
            </div>
          </div>
          <div class="form__row row">
              <div class="col-md-12">
                <input type="text" id="about_product_short" maxlength="50" class="form__input required input_Shadow" name="about_product_short" data-validation="text" data-error="Invalid Short Description"  >
                <span class="form__bar"></span>
                <label for="about_product_short" class="form__label f-required">Short Description <small>(In 50 words)</small></label>
                <span class="form__error"></span>
              </div>
          </div>

          <div class="form__row row">
            <div class="col-md-4">
              <input type="text" id="link"  maxlength="150" class="form__input input_Shadow " name="link[website_url]" data-validation="text" data-error="Invalid Product Link" >
              <span class="form__bar"></span>
              <label for="link" class="form__label">Product link</label>
              <span class="form__error"></span>
            </div>
            
            
            <div class="col-md-4">
              <input type="text" id="app-link" class="form__input  input_Shadow" name="link[app]" data-validation="text" data-error="Invalid APP Link" >
              <span class="form__bar"></span>
              <label for="app-link" class="form__label">APP Store Link</label>
              <span class="form__error"></span>
            </div>
            <div class="col-md-4">
              <input type="text" id="last-name" class="form__input input_Shadow" name="link[play_store]" data-validation="text" data-error="Invalid play store" >
              <span class="form__bar"></span>
              <label for="last-name" class="form__label">Play Store Link</label>
              <span class="form__error"></span>
            </div>
          </div>


          <div class="form__row row">
            <div class="col-md-4">
              <input type="text" id="twitter"  maxlength="150" class="form__input input_Shadow " name="link[twitter]" data-validation="text" data-error="Invalid Product Link" >
              <span class="form__bar"></span>
              <label for="twitter" class="form__label">Twitter Link</label>
              <span class="form__error"></span>
            </div>
            
            
            <div class="col-md-4">
              <input type="text" id="linkedin" class="form__input  input_Shadow" name="link[linkedin]" data-validation="text" data-error="Invalid APP Link" >
              <span class="form__bar"></span>
              <label for="linkedin" class="form__label">linkedin Link</label>
              <span class="form__error"></span>
            </div>

            {{-- <div class="col-md-4">
              <input type="text" id="last-name" class="form__input input_Shadow" name="link[play_store]" data-validation="text" data-error="Invalid play store" >
              <span class="form__bar"></span>
              <label for="last-name" class="form__label">Play Store Link</label>
              <span class="form__error"></span>
            </div> --}}
          </div>

          <div class="form__row row">
             <div class="col-md-12">
               <label class="f-required"><b>Detailed Description </b><small>(In 250 words)</small></label>
              <textarea maxlength="250" class="form__input required input_Shadow" style="width: 100%;" cols="4" rows="12"  name="about_product_details"></textarea>
             </div>
          </div>
          

          <div class="form__row">
              <label class="f-required"><b>Did you work on this product?</b></label>
              <div class=" mt-3">
                  <label for="opt-1" class="radio col-md-4">
                    <input type="radio"  name="did_you_work" data-target-class="did_you_work" value="1" id="opt-1" class="hidden only-one did_you_work required"/>
                    <span class="label"></span>I worked on this product
                  </label>
                  <label for="opt-2" class="radio col-md-6">
                    <input type="radio"  name="did_you_work" data-target-class="did_you_work" value="0" id="opt-2" class="hidden only-one did_you_work required"/>
                    <span class="label"></span>I didn’t work on this product (you’ll be listed as hunter)
                  </label>
              </div>
              
              <div class="did_you_work-error"></div>
          </div>

          <div class="form__row row partner-section" style="display:none;">
            
              <div class="row col-md-12">
                <div class="col-md-4">
                
                
                  <input type="text" id="submittor" maxlength="30" class="form__input required input_Shadow" name="discoverer[name]" data-validation="text" >
                  <span class="form__bar"></span>
                  <label for="submittor" class="form__label">Your Name</label>
                  <span class="form__error"></span>
                
                </div> 
                <div class="col-md-4">

                  <input type="text" id="twitterLink" maxlength="30" class="form__input required input_Shadow" name="discoverer[twitter]" data-validation="text" >
                  <span class="form__bar"></span>
                  <label for="twitterLink" class="form__label">Your Twitter Link</label>
                  <span class="form__error"></span>
                </div> 
                <div class="col-md-4">
                  {{-- <label>&nbsp;</label> --}}
                  <div class="input-group-btn">   
                    <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add Maker name</button>  
                  </div> 
                </div>
              </div>
            
          </div>
          <div class="form__row row">
            <div class="after-add-more">
              <div class="copy" style="display:none;"> 
                <div class="col-md-12 row partner-group"> 
                  <div class="control-group col-md-4">
                    <input type="text" id="partnerNa" name="partner[0][name]" class="form__input required input_Shadow">  
                    
                    <span class="form__bar"></span>
                    <label for="partnerNa" class="form__label">Enter Maker Name</label>
                    <span class="form__error"></span>

                  </div>  
                  <div class="control-group col-md-4">
                    <input type="text" id="twitterL" name="partner[0][twitter]" class="form__input required input_Shadow" > 
                    <span class="form__bar"></span>
                    <label for="twitterL" class="form__label">Enter Twitter Link</label>
                    <span class="form__error"></span> 
                    <div class="input-group-btn remove-input">  
                      <span class="remove">X</span>
                    </div>
                  </div>  
                </div>
              </div>
            </div>
          </div>

          

          <div class="form__row col-md-12">
            <label class="row f-required">
              <b>Tags</b>
            </label>
            
            <div class="mt-4 row ml-1">
            <div class="md-checkbox col-md-4">
                <input id="tag-160" type="checkbox" name="tags[]" value="160" class="required only-one tag" data-target-class="tag">
                <label for="tag-160">NFT</label>
            </div>
            <div class="md-checkbox col-md-4">
                <input id="tag-1" type="checkbox" name="tags[]" value="1" class="required only-one tag" data-target-class="tag">
                <label for="tag-1">DeFi</label>
            </div>
            <div class="md-checkbox col-md-4">
                <input id="tag-162" type="checkbox" name="tags[]" value="162" class="required only-one tag" data-target-class="tag">
                <label for="tag-162">DAO</label>
            </div>
            <div class="md-checkbox col-md-4">
                <input id="tag-21" type="checkbox" name="tags[]" value="21" class="required only-one tag" data-target-class="tag">
                <label for="tag-21">GameFi</label>
            </div>
            <div class="md-checkbox col-md-4">
                <input id="tag-164" type="checkbox" name="tags[]" value="164" class="required only-one tag" data-target-class="tag">
                <label for="tag-164">Crypto Trading</label>
            </div>
            <div class="md-checkbox col-md-4">
                <input id="tag-8" type="checkbox" name="tags[]" value="8" class="required only-one tag" data-target-class="tag">
                <label for="tag-8">Metaverse</label>
            </div>
            </div>
            <div class="tag-error"></div>
          </div>
          <div class="form__row">
                          <label><b class="f-required">Logo </b><small>(You can upload png, jpg, jpeg, gif)</small></label>
                          <div class="kw-input-wrapper px-2">
                            <div class="row">
                                
                                <div class="col-md-3 col-6">
                                    <div class="add_doc_div text-center">
                                        <label class="cutom-file-input-1 upload_icon" id="main_file0">
                                            <input name="logo" accept="image/*" type="file" class="file required mn reset_input0" value="" onchange="readURL(this,0,true);" id="reset_input0">
                                            <i class="fa fa-upload up_icon"></i>
                                        </label>

                                        <div id="imagePreview0" class="selected_file_0">
                                        </div>
                                        <label>Upload Logo 
                                            
                                        </label>
                                        <br>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="form__row">
                          <label><b class="f-required">Gallery </b><small>(You can upload png, jpg, jpeg, gif)</small></label>
                          <div class="kw-input-wrapper px-2">
                            <div class="row">
                                
                                <div class="col-md-3 col-6">
                                    <div class="add_doc_div text-center">
                                        <label class="cutom-file-input-1 upload_icon" id="main_file1">
                                            <input name="gallery[]" multiple accept="image/*" type="file" class="file reset_input1 required mn gallery only-one" data-target-class="gallery" value="" onchange="readURL(this,1,true);" id="reset_input1">
                                            <i class="fa fa-upload up_icon"></i>
                                        </label>

                                        <div id="imagePreview1" class="selected_file_1">
                                        </div>
                                        <label>Gallery 1
                                            
                                        </label>
                                        <br>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="add_doc_div text-center">
                                        <label class="cutom-file-input-1 upload_icon" id="main_file2">
                                            <input name="gallery[]" multiple accept="image/*" type="file" class="file reset_input2 required mn gallery only-one" data-target-class="gallery" value="" onchange="readURL(this,2,true);" id="reset_input2">
                                            <i class="fa fa-upload up_icon"></i>
                                        </label>

                                        <div id="imagePreview2" class="selected_file_2">
                                        </div>
                                        <label>Gallery 2
                                            
                                        </label>
                                        <br>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="add_doc_div text-center">
                                        <label class="cutom-file-input-1 upload_icon" id="main_file3">
                                            <input name="gallery[]" multiple accept="image/*" type="file" class="file reset_input3 required mn gallery only-one" data-target-class="gallery" value="" onchange="readURL(this,3,true);" id="reset_input3">
                                            <i class="fa fa-upload up_icon"></i>
                                        </label>

                                        <div id="imagePreview3" class="selected_file_3">
                                        </div>
                                        <label>Gallery 3
                                            
                                        </label>
                                        <br>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="add_doc_div text-center">
                                        <label class="cutom-file-input-1 upload_icon" id="main_file4">
                                            <input name="gallery[]" multiple accept="image/*" type="file" class="file reset_input4 required mn gallery only-one" data-target-class="gallery" value="" onchange="readURL(this,4,true);" id="reset_input4">
                                            <i class="fa fa-upload up_icon"></i>
                                        </label>

                                        <div id="imagePreview4" class="selected_file_4">
                                        </div>
                                        <label>Gallery 4
                                            
                                        </label>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <span class="gallery-error"></span>
                          </div>
                        </div>
          
          
          <div class="form__row row footerButton">
            {{-- <div class="col fG_0">
              <a class="custom-btn custom-btn--medium custom-btn--style-3" href="{{url('/')}}">Cancel</a>
            </div> --}}

            <div class="col fG_0">
              <button class="nt-btn custom-btn custom-btn--medium custom-btn--style-2 btn-default-size" href="#features-two" title="see more features">Submit</button>
            </div>
            
            
          </div>
      </form>
    </div>
  </div>
@endsection
@section('footer-script')
  <script  src="{{asset('assets/js/product.js?v='.date('ymdhis'))}}"></script>
  
  <script type="text/javascript">

      function reset_selection(id) {
        document.getElementById("reset_input"+ id).value = "";
        $(document).find('#imagePreview'+id).html('');
        document.getElementById("imagePreview" + id).style.display = "none";

        document.getElementById("main_file" + id).style.display = "inline-block";
        $('.error-box').addClass('hide');
      }
      
  </script>
@endsection
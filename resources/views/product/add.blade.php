@extends('web.includes.base')
  @section('header-script')
    <link  rel="stylesheet" href="{{asset('assets/css/form.css?v='.date('ymdhis'))}}" />
    <link  rel="stylesheet" href="{{asset('assets/css/product.css?v='.date('ymdhis'))}}" />
  @endsection
  @section('content')


  <main>
    <div class="postSection">
      <div class="listCollumn">
        <div class="container">
          <div class="row">
            
            <div class="col-md-2 pl-2" style="border-right:1px #ccc solid;">
              <div class="titleSection">
                <!-- <h6>Featured</h6> -->
                
                <ul class="sideitems">
                    <li> <a  href="{{url('/my-products')}}">My Products</a></li>
                    <li > <a class="active"  href="{{url('/add-product')}}">Add Product</a></li>
                </ul>
              </div>
              
            </div>


            <div class="col-md-10" style="min-height: 600px;">
              <div class="titleSection" style="padding-bottom:10px; border-bottom: 1px solid #ccc; ">
                <b>Add Product</b>
              </div>
              <div class="formSection-account">
                <div class="w-100">
                  <div class="">
                    <form class="form product-form" id="product-form" method="post" action="{{url('product/store')}}" enctype="multipart/form-data">
                      @csrf
                      <div class="form__row row">
                          
                          
                          <div class="col-md-8">
                            <label><b class="f-required"> Product Name </b></label>
                            <input type="text" id="product_title" maxlength="50" class="form__input required input_Shadow" name="product_title" data-validation="text" data-error="Invalid email address."  >
                            <span class="form__bar"></span>
                            <label for="product_title" class="form__label">Enter your email</label>
                            <span class="form__error"></span>
                          </div>
                        </div>
                        <div class="form__row row">
                            <div class="col-md-12">
                              <label><b class="f-required">Short Description </b><small>(In 50 words)</small></label>
                              <input type="text" id="about_product_short" maxlength="50" class="form__input required input_Shadow" name="about_product_short" data-validation="text"  >
                            </div>
                        </div>
                        <div class="form__row row">
                            <div class="col-md-4">
                              <label> <b>Product Link </b></label>
                              <input type="text"  maxlength="150" class="form__input input_Shadow" name="link[website_url]" data-validation="text" >

                            </div>
                            <div class="col-md-4">
                              <label> <b>APP Link </b></label>
                              <input type="text" maxlength="150" class="form__input input_Shadow" name="link[app]" data-validation="text" >

                            </div>
                            <div class="col-md-4">
                              <label><b>Play Store Link</b></label>
                              <input type="text" maxlength="150" class="form__input input_Shadow" name="link[play_store]" data-validation="text" >

                            </div>
                            <div class="col-md-4">
                              <label><b>Twitter Link</b></label>
                              <input type="text" maxlength="150" class="form__input input_Shadow" name="link[twitter]" data-validation="text" >

                            </div>
                            <div class="col-md-4">
                              <label><b>Linkedin Link</b></label>
                              <input type="text" maxlength="150" class="form__input input_Shadow" name="link[linkedin]" data-validation="text" >
                            </div>
                        </div>
                        <div class="form__row row">
                           <div class="col-md-12">
                             <label><b class="f-required">Detailed Description </b><small>(In 250 words)</small></label>
                            <textarea maxlength="250" class="form__input required input_Shadow" style="width: 100%;" cols="4" rows="12"  name="about_product_details"></textarea>
                           </div>
                        </div>
                        

                        <div class="form__row">
                            <label><b class="f-required">Did you work on this product?</b></label>
                            <div class=" mt-3">
                                <label for="opt-1" class="radio col-md-4">
                                  <input type="radio"  name="did_you_work" data-target-class="did_you_work" value="1" id="opt-1" class="hidden only-one did_you_work required"/>
                                  <span class="label"></span> I worked on this product
                                </label>
                                <label for="opt-2" class="radio col-md-6">
                                  <input type="radio"  name="did_you_work" data-target-class="did_you_work" value="0" id="opt-2" class="hidden only-one did_you_work required"/>
                                  <span class="label"></span> I didn’t work on this product (you’ll be listed as hunter)
                                </label>
                            </div>
                            
                            <div class="did_you_work-error"></div>
                        </div>

                        <div class="form__row row partner-section" style="display:none">
                          <div class="col-md-4">
                            <label><b class="f-required">Your Name</b></label>
                            <input type="text" maxlength="30" class="form__input required input_Shadow" name="submittor" data-validation="text" >
                          </div> 
                          <div class="col-md-4">
                            <label>&nbsp;</label>
                            <div class="input-group-btn">   
                              <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add More Partner</button>  
                            </div> 
                          </div>
                        </div>
                        <div class="form__row row ">
                          <div class="after-add-more">
                            <div class="copy" style="display:none;">  
                              <div class="control-group col-md-4">
                                <input type="text" name="partner[]" class="form__input required input_Shadow" placeholder="Enter Partner Name">  
                                <div class="input-group-btn remove-input">  
                                  <span class="remove">X</span>
                                </div>
                              </div>  
                               
                            </div>
                          </div>
                        </div>

                        

                        <div class="form__row col-md-12">
                          <label class="row">
                            <b class="f-required">Tags</b>
                          </label>
                          
                          <div class="mt-4 row ml-1">
                            @foreach($tags as $key=>$tag)
                              <div class="md-checkbox col-md-4">
                                <input id="tag-{{$key}}" type="checkbox" name="tags[]" value="{{$key}}" class="required only-one tag" data-target-class="tag">
                                <label for="tag-{{$key}}">{{$tag->tag_name}}</label>
                              </div>
                            @endforeach
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
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
 
 
  </main>

@endsection
@section('footer-script')
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

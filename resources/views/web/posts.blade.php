@extends('web.includes.base')
  @section('header-script')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  @endsection
  @section('content')
  <main>
    <div class="postSection">
      <div class="listCollumn">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="titleSection">
                <!-- <h6>Featured</h6> -->
                <h2>Your next favorite thing</h2>
              </div>
              <div class="w-100">
                <div class="row">
                  @foreach($products as $product)
                    
                    @php
                      $tempTags = [];
                      foreach(json_decode($product->tags,true) as $tag){
                        $tempTags[] = (int)$tag;
                      }
                      $tags = DB::table('tags')->select('tag_name','slag')->whereIn('id',$tempTags)->get();
                    @endphp
                    <div class="col-md-6">
                      <div class="blogSection mb-5 " >
                        <div class="card circle_border show-modal" data-product-slag={{$product->slag}}>
                          <div class="card-body">
                            <h4 style="cursor:pointer;" data-toggle="modal" data-target=".detailsCards" class="blogHeading mb-0">{{$product->product_title}}</h4>
                            <h6 class="blogWriter">By {{$product->name}} on {{date('M d, Y',strtotime($product->created_at))}}</h6>
                            <div class="row mb-5">
                              <div class="col-md-5 pr-0" style="">
                               <div data-toggle="modal" data-target=".detailsCards" style="cursor:pointer" class="img-box">
                                  <img src="{{url('storage/'.$product->logo)}}">
                                </div>
                                
                              </div>
                              <div data-toggle="modal" data-target=".detailsCards" class="col-md-7" style="cursor:pointer">
                                <p class="w-100 mb-3 blogParagraph">{{$product->about_product_short}}</p>
                              </div>
                            </div>
                            <div class="row w-100">
                              <div class="col">
                                  <div class="w-100">
                                    @foreach($tags as $tag)
                                      <a href="{{url('/?tags='.$tag->slag)}}">#{{$tag->tag_name}}</a>
                                    @endforeach
                                  </div>
                              </div>
                              <div class="col pr-0">
                                  <div class="row activeIcone justify-content-end">
                                    {{-- <a href=""><i class="far fa-heart"><span>16</span></i></a> --}}
                                    <a href=""><i class="far fa-eye"><span>{{$product->total_views}}</span></i></a>
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
            <div class="col-md-4 pl-5">
              <div class="titleSection">
                <!-- <h6>Featured</h6> -->
                <h2>Blog Posts</h2>
              </div>
              <a href="https://risingcapital.substack.com/p/20-charts-and-tweets-that-describe" target="_blank" class="blogPost">
                <div class="card circle_border featuredBg">
                  <div class="card-body">
                    <div class="row justify-content-center align-items-center ">
                      <div class="col-md-6">
                        <img class="pl-0" src="https://cdn.substack.com/image/fetch/w_900,c_limit,f_auto,q_auto:good,fl_progressive:steep/https%3A%2F%2Fbucketeer-e05bbc84-baa3-437e-9518-adb32be77984.s3.amazonaws.com%2Fpublic%2Fimages%2Fc590b444-f56d-4dc2-90d5-ee8eb73e3340_886x886.jpeg">
                      </div>
                      <div class="col-md-6">
                        <h4>20 Charts & Tweets that Describe Crypto 2021</h4>
                        <h6>17 min read</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              <a href="https://risingcapital.substack.com/p/what-does-the-indian-crypto-bill" target="_blank"  class="blogPost">
                <div class="card circle_border featuredBg">
                  <div class="card-body">
                    <div class="row justify-content-center align-items-center ">
                      <div class="col-md-6">
                        <img class="pl-0" src="https://cdn.substack.com/image/fetch/w_336,c_limit,f_auto,q_auto:good,fl_progressive:steep/https%3A%2F%2Fbucketeer-e05bbc84-baa3-437e-9518-adb32be77984.s3.amazonaws.com%2Fpublic%2Fimages%2F0c97bb61-89df-474b-87af-24ab87155a36_1000x576.png">
                      </div>
                      <div class="col-md-6">
                        <h4>What does the Indian crypto bill really mean?</h4>
                        <h6>9 min read</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              <a href="https://risingcapital.substack.com/p/jackon"  target="_blank" class="blogPost">
                <div class="card circle_border featuredBg">
                  <div class="card-body">
                    <div class="row justify-content-center align-items-center ">
                      <div class="col-md-6">
                        <img class="pl-0" src="https://cdn.substack.com/image/fetch/w_336,c_limit,f_auto,q_auto:good,fl_progressive:steep/https%3A%2F%2Fbucketeer-e05bbc84-baa3-437e-9518-adb32be77984.s3.amazonaws.com%2Fpublic%2Fimages%2F2f74e39b-844c-432a-9938-d65650bcc34f_836x499.jpeg">
                      </div>
                      <div class="col-md-6">
                        <h4>JackOn</h4>
                        <h6>6 min read</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              <a target="_blank" href="https://risingcapital.substack.com/p/crypto-market-and-the-decisions-by"  class="blogPost">
                <div class="card circle_border featuredBg">
                  <div class="card-body">
                    <div class="row justify-content-center align-items-center ">
                      <div class="col-md-6">
                        <img class="pl-0" src="https://cdn.substack.com/image/fetch/w_336,c_limit,f_auto,q_auto:good,fl_progressive:steep/https%3A%2F%2Fbucketeer-e05bbc84-baa3-437e-9518-adb32be77984.s3.amazonaws.com%2Fpublic%2Fimages%2Fe9bba5bb-e97e-4a19-9107-304a008638d9_6172x4469.jpeg">
                      </div>
                      <div class="col-md-6">
                        <h4>Crypto market and the decisions by the FED</h4>
                        <h6>17 min read</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
 
           <!-- Modal -->
    <div class="modal fade detailsCards"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content render-detail">
            
            <!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->   
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
@section('footer-script')
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
  <script  src="{{asset('assets/js/posts.js?v='.date('ymdhis'))}}"></script>
  
@endsection

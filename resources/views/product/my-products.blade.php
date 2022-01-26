@extends('web.includes.base')
  @section('header-script')
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

  @if(session('status'))
    @if(session('status')==true)
        <script type="text/javascript">
          $(document).ready(function(){       
           $('#success_tic').modal('show');
          }); 
        </script>
    @endif
  @endif

  <main>
    <div class="postSection">
      <div class="listCollumn">
        <div class="container">
          <div class="row">
            
            {{-- <div class="col-md-2 pl-2" style="border-right:1px #ccc solid;">
              <div class="titleSection">
                <!-- <h6>Featured</h6> -->
                
                <ul class="sideitems">
                    <li > <a class="active" href="{{url('/my-products')}}">My Products</a></li>
                    <li> <a href="{{url('/add-product')}}">Add Product</a></li>
                </ul>
              </div>
              
            </div> --}}


            <div class="col-md-12" style="min-height: 600px;">
              <div class="titleSection">
                <!-- <h6>Featured</h6> -->
                <h2>My Products</h2>
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
                            <div style="text-align: right; font-size: 12px;"> Status : {!!$product->status==1?'<span style="color:green">Approved</span>':($product->status==2?'<span style="color:red">Rejected</span>':'Pending')!!}</div>
                            {{-- <h6 class="blogWriter">By {{$product->name}} on {{date('M d, Y',strtotime($product->created_at))}}</h6> --}}
                            <div class="row mb-5">
                              <div class="col-md-5 pr-0" style="">
                               <div class="img-box">
                                  <img width="50px" src="{{url('storage/'.$product->logo)}}">
                                </div>
                                
                              </div>
                              <div class="col-md-7">
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
                              {{-- <div class="col pr-0">
                                  <div class="row activeIcone justify-content-end">
                                    <a href=""><i class="far fa-heart"><span>16</span></i></a>
                                    <a href=""><i class="far fa-eye"><span>{{$product->total_views}}</span></i></a>
                                  </div>
                              </div> --}}
                            </div>
                          </div>
                        </div>
                      </div>
                        </div>
                    @endforeach

                    @if(count($products) == 0)
                        <div class="col-md-12 text-center"><p>No product found.</p></div>
                    @endif
                  
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
  
  
@endsection

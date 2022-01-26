<style type="text/css">
  .fa-user:before {
    content: "\f007";
    font-size: 35px;
  }
</style>
<div class="modal-header">
            <h4 class="modal-title text-center"><img width="50px" src="{{url('/storage/'.$product->logo)}}"> <span>{{$product->product_title}}</span></h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
          </div>
          <div class="modal-body">          
            <div class="container">
                <div class="offset-md-2 col-md-8 ">
                    <div class="slick-carousel mb-5">
                          <!-- Inside the containing div, add one div for each slide -->
                          @foreach(json_decode($product->galary,true) as $galary)
                            <div>
                              <!-- You can put an image or text inside each slide div -->
                              <img style="max-height: 300px;" src="{{url('/storage/'.$galary)}}">
                            </div>
                          @endforeach
                    </div>

                    @php
                      $link  = '#';
                      $links = json_decode($product->link,true);
                      if(!empty($links)){
                        
                        if(isset($links['website_url'])){
                          $link = $links['website_url'];
                        }
                        elseif(isset($links['app'])){
                          $link = $links['app'];
                        }
                      }

                    @endphp

                    <div class="row">
                      <div class="col-md-12">
                        <div id="textbox">
                            <div class="alignleft-1"></div>
                            <div class="aligncenter-1 socialButton">
                              <a href="{{$link}}" target="_blank"><button>TRY NOW</button> </a>
                            </div>
                            <div class="alignright-1">
                              
                              @guest 
                                    <div class="">
                                      <a  data-p-id="{{$product->id}}" href="{{url('/login')}}">
                                        <span class="upvote-star-{{$product->id}} upvote-star"> 
                                          <i class="far fa-star"></i>
                                        </span>
                                      </a>
                                    </div>

                                    <div class="count-upvote">{{$product->upvote}}</div> 

                                  @else
                                    <div class="">
                                      <a class="vote" data-p-id="{{$product->id}}">
                                        <span class="upvote-star-{{$product->id}} upvote-star"> 
                                          @php
                                            $isUpVote = DB::table('upvotes')->where(['user_id'=>Auth()->user()->id, 'product_id'=>$product->id])->count();
                                            if($isUpVote==0){
                                              echo '<i class="far fa-star"></i>';
                                            }
                                            else{
                                              echo '<i class="fa fa-star"></i>';
                                            }
                                          @endphp
                                        </span>
                                      </a>
                                    </div>
                                    <div class="count-upvote total-upvote total_upvote_{{$product->id}}">{{$product->upvote}}</div> 
                                     
                                  @endguest

                            </div>
                        </div>
                          <div style="clear: both;"></div>
                        </div>
                      </div>

                    {{-- <div class="socialButton">
                        <div class="row text-center justify-content-end">

                            
                            
                            
                            
                        </div>
                    </div> --}}
                  <div class="col-md-12  mb-2 mt-4">
                    <p>{{$product->about_product_details}}</p>
                  </div>
                  @php
                    $tags = DB::table('tags')->select('tag_name','slag')->whereIn('id', json_decode($product->tags,true))->get();
                  @endphp
                  <div class="col-md-12 mb-6 hashtag">
                    @foreach($tags as $tag)
                      <a href="{{url('/?tags='.$tag->slag)}}">#{{$tag->tag_name}}</a>
                    @endforeach
                    
                  </div>
                  <div class="col-md-12 mb-5">
                      <div class="row">

                          <div class="col-md-8 col-sm-6">

                              <div class="maker">BUIDLer</div>
                              
                              @if(!is_null($product->partner))
                                @php
                                    $partners = json_decode($product->partner,true);
                                @endphp
                                @foreach($partners as $partner)
                                  <div class="w-100 partner-name">
                                    {{$partner['name']}} 
                                    <a target="_blank" href="{{$partner['twitter']}}"><i class="fab fa-twitter"></i></a></div>
                                @endforeach
                              @endif
                          </div>
                          <div class="col-md-4 col-sm-6">
                              <div class="maker">Discoverer</div>
                              @php
                                $discoverer = json_decode($product->discoverer,true);
                              @endphp
                              <div class="w-100 partner-name">{{$discoverer['name']}} <a target="_blank" href="{{$discoverer['twitter']}}"><i class="fab fa-twitter"></i></a></div>
                              
                          </div>
                      </div>
                  </div>
                  <div class="col-md-12 mb-5">
                      <div class="row">
                          <div class="col-md-6 offset-3">
                              <div class="card socialBg">
                                   <div class="ul">
                                      {{-- <li>
                                           <a target="_blank" href="">
                                               <img src="{{asset('assets/img/ic_facebook.png')}}"  class="def_fb">
                                           </a>
                                       </li> --}}
                                      
                                      @if(isset($links['instagram']))
                                       <li>
                                           <a target="_blank" href="{{$links['instagram']}}">
                                               <i class="fab fa-instagram"></i>
                                           </a>
                                       </li>
                                       @endif
                                       @if(isset($links['twitter']))
                                       <li>
                                            <a target="_blank" href="{{$links['twitter']}}">
                                               <i class="fab fa-twitter"></i>
                                           </a>
                                       </li>
                                       @endif
                                       @if(isset($links['linkedin']))
                                          <li>
                                            <a target="_blank" href="{{$links['linkedin']}}">
                                               <i class="fab fa-linkedin"></i>
                                            </a>
                                          </li>
                                        @endif
                                        
                                        @if(isset($links['youtube']))
                                          <li>
                                            <a target="_blank" href="{{$links['youtube']}}">
                                               <i class="fab fa-youtube"></i>
                                            </a>
                                          </li>
                                        @endif
                                
                                        @if(isset($links['github']))
                                          <li>
                                             <a target="_blank" href="{{$links['github']}}">
                                                 <i class="fab fa-github-alt"></i>
                                             </a>
                                         </li>
                                        @endif
                                        @if(isset($links['app']))
                                        <li>
                                             <a target="_blank" href="{{$links['app']}}">
                                                 <i class="fab fa-app-store"></i>
                                             </a>
                                         </li>
                                         @endif
                                         @if(isset($links['play_store']))
                                          <li>
                                               <a target="_blank" href="{{$links['play_store']}}">
                                                   <i class="fab fa-google-play"></i>
                                               </a>
                                           </li>
                                         @endif
                                         @if(isset($links['website_url']))
                                          <li>
                                               <a target="_blank" href="{{$links['website_url']}}">
                                                   <i class="fa fa-globe"></i>
                                               </a>
                                           </li>
                                         @endif
                                        
                                       
                                   </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-12 mb-5 text-center">
                      <h2>Discussion</h2>
                  </div>
                  <div class="container mt-5 mb-5">
                    <div class="d-flex justify-content-center row">
                        <div class="d-flex flex-column col-md-12">
                            
                            <div class="coment-bottom bg-white p-2 px-4">
                                <div class="d-flex flex-row add-comment-section mt-4 mb-4">
                                  
                                   
                                    <i class="fa fa-user mr-2"></i> 
                                    <textarea data-product-slag="{{$product->slag}}"  class="form-control comment-box mr-3" name="comment" placeholder="@guest Please login to add comment @else Write a comment... @endguest"></textarea>
                                    <button class="btn comment btn-primary" type="button">Comment</button>
                                  
                                </div>
                                <hr>
                                <div class="comment-section">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                  
                </div>
            </div>
          
          </div>





<script type="text/javascript">
  let slag = '{{$product->slag}}';
  $('.slick-carousel').slick({
      autoplay:true,
      autoplaySpeed:1500,
      infinite: true,
      slidesToShow: 1, // Shows a three slides at a time
      slidesToScroll: 1, // When you click an arrow, it scrolls 1 slide at a time
      arrows: false, // Adds arrows to sides of slider
      dots: true // Adds the dots on the bottom
  });


  function getComments(slag){

      if(wait==true){
        return false;
      }
      wait = true;

      $.ajax({
        type:"POST",
        data:{slag:slag, '_token':$('meta[name="csrf-token"]').attr('content')},
        url:baseUrl+'/product/discussions',
        dataType:"html",
        success:function(response){
            console.log(response)
            wait=false;
            $(document).find('.comment-section').html(response);
        },
        error: function (jqXHR, textStatus, errorThrown) {

            wait=false;
            //$('#loader-modal').modal('hide');
            if (jqXHR.status == 500) {
                console.log('Internal error: ' + jqXHR.responseText);
            } 
            else 
                console.log('Unexpected error.');
        }
      });

  }
  getComments(slag);
  
  </script>

@foreach($discussions as $discussion)
    <div class="commented-section mt-3">
        <div class="d-flex flex-row align-items-center commented-user">
            <div >
                <span class="commenter-name mr-2">{{-- <i class="fa fa-user"></i> --}} {{$discussion->name}}</span> 
                <span><i class="fas fa-calendar" aria-hidden="true"></i></span>
                <span class="mb-1  comment-time"> {{date('h:i D-m A, Y',strtotime($discussion->created_at))}}</span>
            </div>
        </div>
        <div class="comment-text-sm mt-2">
            <span>{{$discussion->comment}}</span>
                @guest
                    @php
                        $isLike = 0;
                    @endphp
                @else
                    @php
                        $isLike = DB::table('discussion_likes')->where(['user_id'=>Auth()->user()->id,'discussion_id'=>$discussion->id])->count();
                    @endphp
                @endguest
            <div class="pt-3 cursor">
                 <span class="like-discussion like-discussion-{{$discussion->id}}" data-discussion-id="{{$discussion->id}}" style="color:red"> 
                    @if($isLike == 0 )
                        <i class="far fa-heart" title="like"></i> 
                    @else
                        <i class="fas fa-heart" title="like"></i>
                    @endif
                </span>
                 <span class="pl-3 reply-discussion" data-discussion-id="{{$discussion->id}}">  <i class="fas fa-reply" title="reply"></i>  </span>
                 <div class="reply-box reply-box-{{$discussion->id}} ml-5" style="display:none">
                    <div class="d-flex flex-row mt-2 mb-4">
                        <i class="fa fa-user mr-2"></i> 
                        <textarea data-discussion-id="{{$discussion->id}}"  class="form-control reply-comment-box mr-1" name="reply" placeholder="@guest Please login to add reply @else Write your reply... @endguest"></textarea>
                        <button class="btn reply-btn btn-primary" type="button">Reply</button>
                      
                    </div>
                </div>
                @php
                    $replies = DB::table('discussion_replies as r')->join('users as u','r.user_id','u.id')->select('u.name','r.*')->where(['discussion_id'=>$discussion->id])->orderBy('id','desc')->get();
                @endphp
                <div class="reply-comments ml-5 reply-comments-{{$discussion->id}}">
                    @foreach($replies as $reply)
                        <div class="reply-section mb-2">
                            <div class="d-flex flex-row align-items-center commented-user">
                                <div >
                                    <span class="reply-name mr-2"> {{$reply->name}}</span> 
                                    <span><i class="fas fa-calendar" aria-hidden="true"></i></span>
                                    <span class="mb-1  comment-time"> {{date('h:i D-m A, Y',strtotime($reply->created_at))}}</span>
                                </div>
                            </div>
                            <div class="comment-text-sm mt-2">
                                <span>{{$reply->comment}}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endforeach
<script type="text/javascript">
    
    

  
</script>

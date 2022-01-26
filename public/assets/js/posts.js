


$(document).ready(function() {  
    
    

    $(document).on('click','.show-modal',function(){
        let fullUrl = $(this).parents('.blogSection').attr('data-full-url');
        window.history.pushState("object or string", "Title", baseUrl + '?' + fullUrl);
        showModel($(this).data('product-slag'));
    })

    $(document).on('click','.vote',function(){

        console.log($(this).attr('data-p-id'));
        if(wait==true){
          return false;
        }
        wait = true;
        let product_id = $(this).attr('data-p-id');
        $.ajax({
          type:"POST",
          data:{product_id:$(this).attr('data-p-id'), '_token':$('meta[name="csrf-token"]').attr('content')},
          url:baseUrl+'/product/upvote',
          dataType:"json",
          success:function(response){
              console.log(response)
              wait=false;
              if(response.action=='minus'){
                $(document).find('.total_upvote_'+product_id).html(eval($(document).find('.total_upvote_'+product_id).html())-1);
                $(document).find('.upvote-star-'+product_id).html('<i class="far fa-star"></i>');
                
              }
              else{
                $(document).find('.total_upvote_'+product_id).html(eval($(document).find('.total_upvote_'+product_id).html())+1);
                $(document).find('.upvote-star-'+product_id).html('<i class="fa fa-star"></i>');
              }
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
    })

    
    function postComment(comment, slag){
        
        if(wait==true){
          return false;
        }
        wait = true;

        $.ajax({
          type:"POST",
          data:{slag:slag, comment:comment, '_token':$('meta[name="csrf-token"]').attr('content')},
          url:baseUrl+'/product/comment',
          dataType:"json",
          success:function(response){
              console.log(response)
              wait=false;
              getComments(slag);
              $(this).val('');
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
    $(document).on('keypress','.comment-box',function(event){
        if(event.which == 13) {
            event.preventDefault();

            console.log($(this).val());
            
            if($(this).val().length!=0){
                postComment($(this).val(), $(this).attr('data-product-slag'));
                $(this).val('');
            }

        }
    });
    $(document).on('click','.comment',function(){
        if($(document).find('.comment-box').val().length!=0){
            postComment($(document).find('.comment-box').val(), $(document).find('.comment-box').attr('data-product-slag'));
        }
    });


    

    function discussionLike(discussion_id){
          
        

        if(wait==true){
          return false;
        }
        wait = true;

        $.ajax({
          type:"POST",
          data:{discussion_id:discussion_id, '_token':$('meta[name="csrf-token"]').attr('content')},
          url:baseUrl+'/discussion_like',
          dataType:"json",
          success:function(response){
              wait=false;
              if(response.action=='add'){
                  $(document).find('.like-discussion-'+discussion_id).html('<i class="fas fa-heart"></i>');
              }
              else
                $(document).find('.like-discussion-'+discussion_id).html('<i class="far fa-heart"></i>');
              
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
    $(document).on('click','.like-discussion',function(){
        discussionLike($(this).data('discussion-id'));
    });

    $(document).on('click','.reply-discussion',function(){
      $(document).find('.reply-box-'+$(this).data('discussion-id')).toggle();
    })
    
    function formatDate(dateVal) {
        var newDate = new Date(dateVal);

        var sMonth = padValue(newDate.getMonth() + 1);
        var sDay = padValue(newDate.getDate());
        var sYear = newDate.getFullYear();
        var sHour = newDate.getHours();
        var sMinute = padValue(newDate.getMinutes());
        var sAMPM = "AM";

        var iHourCheck = parseInt(sHour);

        if (iHourCheck > 12) {
            sAMPM = "PM";
            sHour = iHourCheck - 12;
        }
        else if (iHourCheck === 0) {
            sHour = "12";
        }

        sHour = padValue(sHour);

        return sHour + ":" + sMinute + " " + sAMPM+', '+sMonth + "-" + sDay + "-" + sYear;
    }

    function padValue(value) {
        return (value < 10) ? "0" + value : value;
    }


    function postReply(comment, discussion_id){
        
        if(wait==true){
          return false;
        }
        wait = true;

        $.ajax({
          type:"POST",
          data:{discussion_id:discussion_id, comment:comment, '_token':$('meta[name="csrf-token"]').attr('content')},
          url:baseUrl+'/discussion/reply',
          dataType:"json",
          success:function(response){
              console.log(response)
              wait=false;
              $(this).val('');

              var d = new Date,
              dformat = formatDate(d);
              // [d.getHours(),
              //  d.getMinutes(),
              //  d.getSeconds()].join(':')+' '+
              //  [d.getMonth()+1,
              //  d.getDate(),
              //  d.getFullYear()].join('/');

              $(document).find('.reply-comments-'+discussion_id).prepend('<div class="reply-section mb-2">'+
                            '<div class="d-flex flex-row align-items-center commented-user">'+
                                '<div ><span class="reply-name mr-2">'+username+'</span>'+ 
                                    '<span><i class="fas fa-calendar" aria-hidden="true"></i></span>'+
                                    '<span class="mb-1  comment-time"> '+dformat+'</span>'+
                                '</div></div><div class="comment-text-sm mt-2"><span>'+comment+'</span></div></div>');
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
    $(document).on('keypress','.reply-comment-box',function(event){
        if(event.which == 13) {
            event.preventDefault();

            console.log($(this).val());
            
            if($(this).val().length!=0){
                postReply($(this).val(), $(this).attr('data-discussion-id'));
                $(this).val('');
            }

        }
    });
    $(document).on('click','.reply-btn',function(){
        if($(document).find('.reply-comment-box').val().length!=0){
            postReply($(document).find('.reply-comment-box').val(), $(document).find('.reply-comment-box').attr('data-discussion-id'));
        }
    });
        
    // $(document).on('click','.add-reply',function(){
    //   document.getElementById('container').insertAdjacentHTML('beforeend', '<div id="idChild"> content html </div>');
    // });
    
    

});  
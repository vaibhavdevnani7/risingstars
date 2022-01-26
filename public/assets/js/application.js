$(function(){
    $(document).on('submit','.subscribe-us',function(event){
        
        event.preventDefault();
        
        $('.subscribe-btn').html('Please wait ...');
        $.ajax({
            type:"post",
            url:baseUrl+"/subscribe-us",
            dataType:"JSON",
            data:$(this).serialize(),
            success:function(response){
                
                $('.subscribe-btn').html('Subscribe');
                if(response.status==true){
                    $(document).find('.subscribe-response').html('<div class="alert alert-success">'+response.message+'</div>');
                }
                else  
                {
                  $(document).find('.subscribe-response').html('<div class="alert alert-danger">'+response.message+'</div>');
                }
                setTimeout(function(){
                    $(document).find('.subscribe-response').html('');
                },5000);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                
              if (jqXHR.status == 500) {
                    
                console.log('Internal error: ' + jqXHR.responseText);
                } else {
                    console.log('Unexpected error.');
                }
            }

        });
    });
})
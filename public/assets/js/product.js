

  $(document).ready(function() {  
  
      $(".add-more").click(function(){   
          var html = $(".copy").html();  
          $(".after-add-more").after(html);  

          let key =0;
          $(".partner-group").each(function(){
            $(this).find('#partnerNa').attr('name','partner['+key+'][name]');
            $(this).find('#twitterL').attr('name','partner['+key+'][twitter]');
            key++;
          })
      });  
  
      $("body").on("click",".remove-input",function(){   
          $(this).parents(".partner-group").remove();  
      });  

      $(document).on('click','.did_you_work',function(){
        if($(this).prop('checked')==true){
          $(document).find('.partner-section').css('display','block');
        }
      })

      let wait = false;
      $(document).on('click','.show-modal',function(){

        if(wait==true){
          return false;
        }
        wait = true;
        $.ajax({
          type:"GET",
          url:baseUrl+'/product/details/slag/'+$(this).data('product-slag'),
          dataType:"html",
          success:function(response){
              console.log(response)
              wait=false;
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



     
      


      let excel_url = baseUrl+'/assets/img/ic_xls.jpg';
      let pdf_url = baseUrl+'/assets/img/ic_pdf.png';
      let doc_url = baseUrl+'/assets/img/ic_doc.png';
      let ppt_url = baseUrl+'/assets/img/ic_ppt.png';

      readURL = (input, id = '', append = false) => {

          var filePath = $(input).val();
          var name = input.name;
          var file_ext = filePath.substr(filePath.lastIndexOf('.') + 1, filePath.length);

          var fileName = input.files[0].name;

          if (input.files) {

              var filesAmount = input.files.length;

              for (i = 0; i < filesAmount; i++) {

                  var reader = new FileReader();
                  reader.onload = function(e) {
                      if (file_ext == 'xlsx' || file_ext == 'xls')
                          url = '<i class="fa fa-times reset_icon" onclick="reset_selection(' + id + ')" aria-hidden="true"></i><div class="preview_img_div pb-2"><img width="50px" src="' + excel_url + '" class="selected_file_preview"/></div>';
                      else if (file_ext == 'pdf')
                          url = '<i class="fa fa-times reset_icon" onclick="reset_selection(' + id + ')" aria-hidden="true"></i><div class="preview_img_div pb-2"><img width="50px" src="' + pdf_url + '" class="selected_file_preview"/></div>';
                      else if (file_ext == 'doc' || file_ext == 'docx')
                          url = '<i class="fa fa-times reset_icon" onclick="reset_selection(' + id + ')" aria-hidden="true"></i><div class="preview_img_div pb-2"><img width="50px" src="' + doc_url + '" class="selected_file_preview"/></div>';
                      else if (file_ext == 'ppt' || file_ext == 'pptx')
                          url = '<i class="fa fa-times reset_icon" onclick="reset_selection(' + id + ')" aria-hidden="true"></i><div class="preview_img_div pb-2"><img width="50px" src="' + ppt_url + '" class="selected_file_preview"/></div>';
                      else
                          url = '<i class="fa fa-times reset_icon" onclick="reset_selection(' + id + ')" aria-hidden="true"></i><div class="preview_img_div pb-2"><img width="50px" src="' + e.target.result + '" class="selected_file_preview"/></div>';

                      if (append == true)
                          $(document).find('#imagePreview' + id).append(url);
                      else
                          $(document).find('#imagePreview' + id).html(url);
                  };
                  reader.readAsDataURL(input.files[i]);
              }
          }
          $('#imagePreview' + id).show();
          $('#main_file' + id).hide();

      }

  }); 
      
      

  
   
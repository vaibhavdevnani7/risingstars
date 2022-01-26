let validationIgnore = false;
$(function(){
    
    $(document).on('click', '.save-draft',function(){
      validationIgnore = true
      $("form").append('<input type="hidden" id="save-draft-input" name="save-draft" value="1">');
      $("form").submit();
    });

    $(document).on('click', '.save-proceed',function(){
      validationIgnore = false;
      $("form").find('#save-draft-input').remove();
    });

});

    let pass = false;
    
    $(document).on("submit", "form", function(){

      if(validationIgnore)
        return true;

      //let errorDisplay = false;
      pass = true;
      let onlyOneTimeCheck = true;
      let email_exp =  /^([\w-\.]+@([\w-]+\.)+[\w-]{2,8})?$/;   ///^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{0,20})+$/;
      let num_exp = /^[0-9]\d*(\.\d+)?$/;
      let atleastaNum = /^(?=.*[0-9])$/;
      let alphaWSpace = /^[a-zA-Z\s]+$/;
      // let url =  /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
      let url = /(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,})/;
      let password = /^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])[a-zA-Z0-9\w#!:.?+=&%@$!\-\/]{8,}$/;
      let check_script =/<(.|\n)*?>/g; 
      
      
      $(document).find('.error-box').remove();
      $(document).find('.error').removeClass('error');

      $(this).find('input, select, textarea').each(function(event){

        if( $(this).attr('type')=='file' && !$(this).hasClass('gallery') && $(this).hasClass('required') && $(this).val()=='')
        {
          $(this).addClass('error');
          if($(this).hasClass('mn'))
            $(this).parent().after('<div class="error-box"><span class="lable-error error">This is a mandatory field.</span></span>');
          else
            $(this).after('<span class="error-box"><span class="lable-error error">This is a mandatory field.</span></span>');
          pass = false;
        }
        else
        if( $(this).hasClass('required') && $(this).is(":visible") && $(this).val()=='' && !$(this).hasClass('only-one'))
        {

          $(this).addClass('error');
          if($(this).hasClass('mn'))
            $(this).parent().after('<div class="error-box"><span class="lable-error error">This is a mandatory field.</span></span>');
          else
            $(this).after('<span class="error-box"><span class="lable-error error">This is a mandatory field.</span></span>');
          pass = false;
        }
        else
        if(($(this).hasClass('no-script') && $(this).is(":visible") && $(this).val()!='' && $(this).val().match(check_script)))
        {
          $(this).addClass('error');
          if($(this).hasClass('mn'))
            $(this).parent().after('<span class="error-box"><span class="lable-error error"> \< \>  characters are not allowed. < tag is no</span></span>');
          else
            $(this).after('<span class="error-box"><span class="lable-error error"> \< \>  characters are not allowed.</span></span>');
          pass = false;
        }
        else
        if(($(this).hasClass('num') && $(this).is(":visible") && $(this).val()!='' && !$(this).val().match(num_exp)))
        {
          $(this).addClass('error');

          if($(this).hasClass('mn'))
            $(this).parent().after('<span class="error-box"><span class="lable-error error">Only number is required</span></span>');
          else
            $(this).after('<span class="error-box"><span class="lable-error error">Only number is required</span></span>');
          pass = false;
        }
        else
        if(($(this).hasClass('alphaspace') && $(this).is(":visible") && $(this).val()!='' && !$(this).val().match(alphaWSpace)))
        {
          $(this).addClass('error');
          if($(this).hasClass('mn'))
            $(this).parent().after('<span class="error-box"><span class="lable-error error">Please enter valid input.</span></span>');
          else
          $(this).after('<span class="error-box"><span class="lable-error error">Please enter valid input.</span></span>');
          pass = false;
        }
        else
        if($(this).hasClass('max-length') && $(this).is(":visible") && $(this).val()!='' && (eval($(this).val().split("\n").length) > eval($(this).attr('data-max-length'))))
        {
          $(this).addClass('error');
          $(this).after('<span class="error-box"><span class="lable-error error">Length could not be exceed more than '+$(this).attr('data-max-length')+'</span></span>');
          pass = false;
        }
        else
        if(($(this).hasClass('password') && $(this).is(":visible") && $(this).val()!='' && !$(this).val().match(password)))
        {
          $(this).addClass('error');
          $(this).after('<span class="error-box"><span class="lable-error error">Password should have atleast one number, one lower case, one upper case character and atleast 8 characters.</span></span>');
          pass = false;
        }
        else
        if(($(this).hasClass('email') && $(this).is(":visible") && $(this).val()!='' && !$(this).val().match(email_exp)))
        {
          $(this).addClass('error');
          $(this).after('<span class="error-box"><span class="lable-error error">Please enter valid email.</span></span>');
          pass = false;
        }
        else
        if($(this).hasClass('max') && $(this).is(":visible") && $(this).val()!='' && (eval($(this).val()) > eval($(this).attr('data-max-value'))))
        {
          $(this).addClass('error');
          if($(this).hasClass('mn'))
            $(this).parent().after('<span class="error-box"><span class="lable-error error">Value could not be exceed more than '+$(this).attr('data-max-value')+'</span></span>');
          else
            $(this).after('<span class="error-box"><span class="lable-error error">Value could not be exceed more than '+$(this).attr('data-max-value')+'</span></span>');
          pass = false;
        }
        else
        if($(this).hasClass('min-value') && $(this).is(":visible") && $(this).val()!='' && (eval($(this).val()) < eval($(this).attr('data-min-value'))))
        {

          $(this).addClass('error');
          $(this).parent().after('<span class="error-box"><span class="lable-error error">Value could not be less than '+$(this).attr('data-min-value')+'</span></span>');
          pass = false;
        }
        else
        if($(this).hasClass('min-deal-value') && $(this).is(":visible") && $(this).hasClass('investor-detail') && $(this).val()!='' && (eval($(this).val()) < eval($(this).attr('data-min-value')) || eval($(this).val()) > eval($(this).attr('data-max-value'))))
        {
          $(this).addClass('error');
          $(this).parent().after('<span class="error-box"><span class="lable-error error">Value could not be less than '+$(this).attr('data-min-value')+' and could not greater than '+$(this).attr('data-max-value')+'</span></span>');
          pass = false;
        }
        else
        if($(this).hasClass('max-deal-value') && $(this).is(":visible") && $(this).hasClass('investor-detail') && $(this).val()!='' && (eval($(this).val()) < eval($(this).attr('data-min-value')) || eval($(this).val()) > eval($(this).attr('data-max-value'))))
        {
          $(this).addClass('error');
          $(this).parent().after('<span class="error-box"><span class="lable-error error">Value could not be less than '+$(this).attr('data-min-value')+' and could not greater than '+$(this).attr('data-max-value')+'</span></span>');
          pass = false;
        }
        else
        if($(this).hasClass('min-length') && $(this).is(":visible") && $(this).val()!='' && (eval($(this).val().length) < eval($(this).attr('data-min-length'))))
        {
          $(this).addClass('error');
          $(this).after('<span class="error-box"><span class="lable-error error">Length could not be less than '+$(this).attr('data-min-length')+'</span></span>');
          pass = false;
        }
        else
        if($(this).hasClass('confirm') && $(this).val()!='' && ($(this).val()!=$('#'+$(this).attr('data-confirm-field')).val()) )
        {
          $(this).addClass('error');
          $(this).after('<span class="error-box"><span class="lable-error error">Value should be same as '+$(this).attr('data-confirm-field')+' field.</span></span>');
          pass = false;
        }
        else
        if($(this).hasClass('less') && $(this).val()!='' && ( eval($(this).val()) < eval($('#'+$(this).attr('data-less-field')).val()) ) )
        {

          let errorMsg = 'Value couldn\'t be less than from '+$(this).attr('data-less-field')+' field.';
          if($(this).hasClass('fund-error'))
          {
            errorMsg = 'Fund size should be equal to or greater than Investment quantum field.';
          }

          $(this).addClass('error');
          if($(this).hasClass('mn'))
            $(this).parent().after('<span class="error-box"><span class="lable-error error">'+errorMsg+'</span></span>');
          else
            $(this).after('<span class="error-box"><span class="lable-error error">'+errorMsg+'</span></span>');
        
          
          pass = false;
        }
        else
        if($(this).hasClass('more') && $(this).val()!='' && ( eval($(this).val()) > eval($('#'+$(this).attr('data-less-field')).val()) ) )
        {
          $(this).addClass('error');
          if($(this).hasClass('mn'))
            $(this).parent().after('<span class="error-box"><span class="lable-error error">Value should be less than from '+$(this).attr('data-less-field')+' field.</span></span>');
          else
            $(this).after('<span class="error-box"><span class="lable-error error">Value should be less from '+$(this).attr('data-less-field')+' field.</span></span>');
        
          
          pass = false;
        }
        else
        if($(this).hasClass('reg-mobile') && $(this).val()!='')
        {
          
          if((eval($(this).val().length) > eval(15) ||  eval($(this).val().length) < eval(6)) && $('#mobile-number').val()!= +91){
            $(this).addClass('error');
            if($(this).hasClass('mn'))
              $(this).parent().after('<span class="error-box"><span class="lable-error error">Please enter valid mobile number.</span></span>');
            $(this).after('<span class="error-box"><span class="lable-error error">Please enter valid mobile number.</span></span>');
            pass = false;
          }
          else 
          if((eval($(this).val().length) != eval(10)) && $('#mobile-number').val()== +91){
            $(this).addClass('error');
            $(this).after('<span class="error-box"><span class="lable-error error">Please enter valid mobile number.</span></span>');
            pass = false;
          }
        }
        else
        if(($(this).hasClass('url') && $(this).val()!='' && !$(this).val().match(url)))
        {
          $(this).addClass('error');
          $(this).after('<span class="error-box"><span class="lable-error error">Please enter correct URL.</span></span>');
          pass = false;
        }

        
        if($(this).attr('type')=='checkbox' && $(this).hasClass('required') && !$(this).hasClass('only-one')){
          
          if(!$(this).prop('checked')){
            $(this).addClass('error');
            $(document).find('.checkbox-error').html('<span class="error-box"><br/><span class="lable-error error">This is a mandatory field.</span></span>');
            pass = false;
          }

        }

        if($(this).attr('type')=='checkbox' && $(this).hasClass('smeTicketSize') && $(this).hasClass('required')){          
            $(document).find('.sme-checkbox-error').html('<span class="error-box"><br/><span class="lable-error error">This is a mandatory field.</span></span>');
            pass = false; 
        }

        if($(this).attr('type')=='checkbox' && $(this).hasClass('startupTicketSize') && $(this).hasClass('required')){          
            $(document).find('.startup-checkbox-error').html('<span class="error-box"><br/><span class="lable-error error">This is a mandatory field.</span></span>');
            pass = false; 
        }

        if($(this).hasClass('file-size')){ 
          if(document.getElementById("file-size").files.length != 0){
            var file_size = $('#file-size')[0].files[0].size;
            if(file_size > maxFileUploadSize) {
              $(this).after('<span class="error-box"><span class="lable-error error"> File size exceeds maximum limit '+(maxFileUploadSize/1024/1024)+' MB.</span></span>');
              pass = false;
            } 
          } 
        }

        if($(this).hasClass('business_document')){ 
          if(document.getElementById("reset_input4").files.length != 0){
            var file_size = $('#reset_input4')[0].files[0].size;
            if(file_size > maxFileUploadSize) {
              $(this).parent().after('<span class="error-box"><span class="lable-error error"> File size exceeds maximum limit '+(maxFileUploadSize/1024/1024)+' MB.</span></span>');
              pass = false;
            } 
          } 
        }

        if($(this).hasClass('ticket-size-startup')){
          if($('.ticket-size-startup').val() != ""){
            var usdRateData = '{"INR":0.013, "EURO":1.13, "USD":1}';
            var usdRate = JSON.parse(usdRateData);

            var dealRate = $(".startup-deal-size-currency").val();
            var dealTo = $(".to-deal-size").val();
            var startupTicketCurrency = $(".startup-ticket-currency").val();
            var startupTicket = $(".ticket-size-startup").val();

            var dealToValue = eval(usdRate[dealRate])*eval(dealTo);
            var startupTicketValue = eval(usdRate[startupTicketCurrency])*eval(startupTicket);

            if(eval(startupTicketValue)>eval(dealToValue)){
              $(this).parent().after('<span class="error-box"><span class="lable-error error"> Ticket size must be less then '+dealRate+' '+dealTo+' Mn. </span></span>');
              pass = false;
            }            
          }
        }

        if($(this).hasClass('ticket-size-corporate')){
          if($('.ticket-size-corporate').val() != ""){
            var usdRateData = '{"INR":0.013, "EURO":1.13, "USD":1}';
            var usdRate = JSON.parse(usdRateData);

            var dealRate = $(".deal-currency-corporate").val();
            var dealTo = $(".to-deal-size-corporate").val();
            var corporateTicketCurrency = $(".corporate-ticket-currency").val();
            var corporateTicket = $(".ticket-size-corporate").val();

            var dealToValue = eval(usdRate[dealRate])*eval(dealTo);
            var corporateTicketValue = eval(usdRate[corporateTicketCurrency])*eval(corporateTicket);

            if(eval(corporateTicketValue)>eval(dealToValue)){
              $(this).parent().after('<span class="error-box"><span class="lable-error error"> Ticket size must be less then '+dealRate+' '+dealTo+' Mn. </span></span>');
              pass = false;
            }            
          }
        }

        if($(this).hasClass('user_aadharcard')){ 
          if(document.getElementById("file").files.length != 0){
            var file_size = $('#file')[0].files[0].size;
            if(file_size>maxFileUploadSize) {
              $(this).parent().after('<span class="error-box"><span class="lable-error error"> File size exceeds maximum limit '+(maxFileUploadSize/1024/1024)+' MB.</span></span>');
              pass = false;
            } 
          } 
        }

        if($(this).hasClass('user_votercard')){ 
          if($('.user_votercard').val() != ""){
          var profileEmpProof = document.getElementsByClassName("user_votercard")[0].files[0].size; 
          if(profileEmpProof>maxFileUploadSize) {
              $(this).parent().after('<span class="error-box"><span class="lable-error error"> File size exceeds maximum limit '+(maxFileUploadSize/1024/1024)+' MB.</span></span>');
              pass = false;
            } 
          }          
        }

        if($(this).hasClass('reset_input7')){ 
          if($('#reset_input7').val() != ""){
            var file_size = $('#reset_input7')[0].files[0].size;
            if(file_size>maxFileUploadSize) {
              $(this).parent().after('<span class="error-box"><span class="lable-error error"> File size exceeds maximum limit '+(maxFileUploadSize/1024/1024)+' MB.</span></span>');
              pass = false;
            }
          }
        }
        if($(this).hasClass('reset_input1')){ 
          if($('#reset_input1').val() != ""){
            var file_size = $('#reset_input1')[0].files[0].size;
            if(file_size>maxFileUploadSize) {
              $(this).parent().after('<span class="error-box"><span class="lable-error error"> File size exceeds maximum limit '+(maxFileUploadSize/1024/1024)+' MB.</span></span>');
              pass = false;
            }
          }
        }
        if($(this).hasClass('reset_input2')){ 
          if($('#reset_input2').val() != ""){
            var file_size = $('#reset_input2')[0].files[0].size;
            if(file_size>maxFileUploadSize) {
              $(this).parent().after('<span class="error-box"><span class="lable-error error"> File size exceeds maximum limit '+(maxFileUploadSize/1024/1024)+' MB.</span></span>');
              pass = false;
            }
          }
        }
        if($(this).hasClass('reset_input3')){ 
          if($('#reset_input3').val() != ""){
            var file_size = $('#reset_input3')[0].files[0].size;
            if(file_size>maxFileUploadSize) {
              $(this).parent().after('<span class="error-box"><span class="lable-error error"> File size exceeds maximum limit '+(maxFileUploadSize/1024/1024)+' MB.</span></span>');
              pass = false;
            }
          }
        }
        if($(this).hasClass('reset_input4')){ 
          if($('#reset_input4').val() != ""){
            var file_size = $('#reset_input4')[0].files[0].size;
            if(file_size>maxFileUploadSize) {
              $(this).parent().after('<span class="error-box"><span class="lable-error error"> File size exceeds maximum limit '+(maxFileUploadSize/1024/1024)+' MB.</span></span>');
              pass = false;
            }
          }
        }
        if($(this).hasClass('reset_input5')){ 
          if($('#reset_input5').val() != ""){
            var file_size = $('#reset_input5')[0].files[0].size;
            if(file_size>maxFileUploadSize) {
              $(this).parent().after('<span class="error-box"><span class="lable-error error"> File size exceeds maximum limit '+(maxFileUploadSize/1024/1024)+' MB.</span></span>');
              pass = false;
            }
          }
        }
        if($(this).hasClass('reset_input6')){ 
          if($('#reset_input6').val() != ""){
            var file_size = $('#reset_input6')[0].files[0].size;
            if(file_size>maxFileUploadSize) {
              $(this).parent().after('<span class="error-box"><span class="lable-error error"> File size exceeds maximum limit '+(maxFileUploadSize/1024/1024)+' MB.</span></span>');
              pass = false;
            }
          }
        }

        if($(this).hasClass('event_pitch_deck_class')){ 
          if($('#event_pitch_deck').val() != ""){
            var file_size = $('#event_pitch_deck')[0].files[0].size;
            if(file_size>maxFileUploadSize) {
              $(this).parent().after('<span class="error-box"><span class="lable-error error"> File size exceeds maximum limit '+(maxFileUploadSize/1024/1024)+' MB.</span></span>');
              pass = false;
            }
          }
        }

        if($(this).hasClass('debt_equity_ratio')){ 
          if($('#debt_equity_ratio_input').val() != ""){
            var input = parseInt(this.value);
            if (input < 1 || input > 100){
              $(document).find('.debt_equity_ratio').after('<span class="error-box"><span class="lable-error error">Value should be between 0 - 100.</span></span>');
            pass = false;
            }            
          }
        }

        if(($(this).attr('type')=='text' || $(this).attr('type')=='file' || $(this).attr('type')=='radio' || $(this).attr('type')=='checkbox') && $(this).hasClass('required') && $(this).hasClass('only-one')){
            
            let checkOne = false;
            let targetClass = $(this).attr('data-target-class');
            
            $(document).find('.'+targetClass).each(function () {
              
              if($(this).attr('type')!='text' && $(this).attr('type')!='file'){
                
                if($(this).prop('checked')){
                    checkOne = true;
                }
              }
              else{
                
                if($(this).val()!=''){
                  checkOne = true;
                }
              
              }
      
            });

            if(!checkOne)
            {
                $(this).addClass('error');
                
                $(document).find('.'+targetClass+'-error').html('<span class="error-box"><span class="lable-error error">This is a mandatory field.</span></span>');
               
                pass = false;

            }
            
        }

        if($(this).parent().hasClass('required') && $(this).parent().hasClass('dropdown')){
          
          if($(this).dropdown('get value').length==0){
            $(this).addClass('error');
            $(this).parent().after('<span class="error-box"><span class="lable-error error">This is a mandatory field.</span></span>');
            pass = false;
          }
        }

        if($(this).hasClass('linkedInProfileInput')){ 
          if($('.linkedInProfileInput').val() != ""){
            var input = this.value;
            // if (/(ftp|http|https):\/\/?(?:www\.)?linkedin.com(\w+:{0,1}\w*@)?(\S+)(:([0-9])+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/.test(input)){
            if (/()?linkedin.com(\w+:{0,1}\w*@)?(\S+)(:([0-9])+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/.test(input)){
            } else{
              $(document).find('.linkedin_profile-error').after('<span class="error-box"><span class="lable-error error">Please enter the valid linkedin profile</span></span>');
              pass = false;
            }          
          }
        }


        if($(this).hasClass('required-both-either') && onlyOneTimeCheck==true)
        {
          var targetClassName = $(this).attr('target-data-class');
          var counterTotal = 0;
          var fillTotal = 0;
          var fromValue='';
          var toValue='';
          $(document).find('.'+targetClassName).each(function() {
              counterTotal++;
              if($(this).val()!=''){
                if($(this).hasClass('from-value'))
                {
                  fromValue = $(this).val();
                }
                else
                if($(this).hasClass('to-value'))
                {
                  toValue = $(this).val();
                }

                fillTotal++;
              }
          })
          if(fillTotal > 0 && fillTotal != counterTotal){
            pass = false;
            $(document).find('.'+targetClassName+'-error').html('<span class="error-box"><span class="lable-error error">All fields are required.</span></span>').addClass('error');
          }

          if(fillTotal==counterTotal){
            if(eval(fromValue) > eval(toValue)){
              $(document).find('.'+targetClassName+'-error').html('<span class="error-box"><span class="lable-error error">Please fill correct range.</span></span>').addClass('error');
              pass = false;
            }
          }
         
          onlyOneTimeCheck = false;
          
        }


        if($(this).hasClass('file-extension') && $(this).val()!=''){
          
          var fileExt = $(this).data('file-ext');

          var fName = $(this).val().replace(/C:\\fakepath\\/i, '');

          let lastDot = fName.lastIndexOf('.');

          let fileName = fName.substring(0, lastDot);
          let ext = fName.substring(lastDot + 1);
          console.log(fileName, ext);

          var a = fileExt.split ("|");
          if(a.includes(ext)){
            console.log('work kr rha hai');
          }else{
            pass = false;
            $(this).after('<span class="error-box"><span class="lable-error error">Only '+fileExt.split (" or ")+' extensions is allowed. </span></span>');
          }
        }




      });

      
      if(typeof db_division !== 'undefined') {
        
        if(db_division==true){
          $(document).find('.db_division_error').css({"margin-left": "10px",  "margin-top" : "10px"});
          $(document).find('.db_division_error').html('<span class="error-box"><span class="lable-error error">This is a mandatory field.</span></span>');
        }

      }
      console.log('pass '+pass);
      if(pass==false){
        $("html, body").animate({
            scrollTop: $(".error-box").offset().top - 250
          }, 1000);
        return false;
      } 
      return pass;

    });

    $(document).on('click','input, select, textarea', function(){
        
        if($(this).hasClass('error')){
            
            $(this).parent().parent().find('.error-box').remove();
            $(this).removeClass('error');
            if($(this).hasClass('only-one')){
              $(document).find('.'+$(this).attr('data-target-class')+'-error').html('');
            }
        }
    });
    $(document).on('click','.error-box', function(){
        $(this).remove();
    });

    let num_2_decimal= /^\d+(\.\d{1,2})?$/;
    let regexp = /^\s*-?(\d+(\.\d{1,2})?|\.\d{1,2})\s*$/;
    let t = /^(10|\d)(\.\d{1,2})?$/;
    //this.value.replace(/(\.\d\d)\d+|([\d.]*)[^\d.]/, '$1$2')
    $(document).on("input", ".numeric", function() {
        let filtered = this.value.replace(/[^0-9.]/g, '').split('.')
        let integer = filtered.shift()
        let hasDecimal = filtered.length > 0
        let fraction = filtered.join('').slice(0, 3)
        this.value = integer + (hasDecimal ? '.' + fraction : '')


    });
    $(document).on("input", ".numeric-free", function() {
        let filtered = this.value.replace(/[^0-9.]/g, '').split('.')
        let integer = filtered.shift()
        let hasDecimal = filtered.length > 0
        let fraction = filtered.join('').slice(0, 20)
        this.value = integer + (hasDecimal ? '.' + fraction : '')
    });

    $(document).on("input", ".number", function() {
      this.value = this.value.replace(/[^0-9]/g, '');
    });
    
    $(document).on("input", ".allow-negative", function() {
      //this.value = this.value.replace(/[^0-9 \- .]/g, '');
      let filtered = this.value.replace(/[^0-9.\-]/g, '').split('.')
      let integer = filtered.shift()
      let hasDecimal = filtered.length > 0
      let fraction = filtered.join('').slice(0, 2)
      this.value = integer + (hasDecimal ? '.' + fraction : '')
    });

    $(document).on("input", ".alpha-num", function() {
      this.value = this.value.replace(/[^a-zA-Z0-9]/g, '');
    });
    $(document).on("input", ".alpha", function() {
      this.value = this.value.replace(/[^a-zA-Z]/g, '');
    });

    $('input[type="file"]').click(function() { 
      $('.error.pull-left').addClass('hide');
    });


    function ValidateExt(oForm) {
        var arrInputs = oForm.getElementsByTagName("input");
        for (var i = 0; i < arrInputs.length; i++) {
            var oInput = arrInputs[i];
            if (oInput.type == "file") {
                var sFileName = oInput.value;
                if (sFileName.length > 0) {
                    var blnValid = false;
                    for (var j = 0; j < _validFileExtensions.length; j++) {
                        var sCurExtension = _validFileExtensions[j];
                        if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                            blnValid = true;
                            break;
                        }
                    }
                    
                    if (!blnValid) {
                        alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
                        return false;
                    }
                }
            }
        }
      
        return true;
    }



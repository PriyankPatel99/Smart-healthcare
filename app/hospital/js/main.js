
(function ($) {
    "use strict";


    /*==================================================================
    [ Focus input ]*/
    $('.input100').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })
  
  
    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
		 if($(input).attr('type') == 'phone' || $(input).attr('name') == 'phone') {
            if($(input).val().trim().match(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/) == null) {
                return false;
            }
        }
		 if($(input).attr('type') == 'pincode' || $(input).attr('name') == 'pincode') {
            if($(input).val().trim().match(/^\d{6}$|^\d{6}$/) == null) {
                return false;
            }
        }
		if($(input).attr('type') == 'password' || $(input).attr('id') == 'password') {
            if($(input).val().trim().match(/^([a-zA-Z0-9!@#$%^&*()_=\[\]{};':"\\|,.<>\/?+-]){4,16}$/) == null) {
                return false;
            }
        }
		if($(input).attr('type') == 'name' || $(input).attr('id') == 'name') {
            if($(input).val().trim().match(/^([a-zA-Z.&               ]){3,60}$/) == null) {
                return false;
            }
        }
		if($(input).attr('type') == 'address' || $(input).attr('name') == 'address') {
            if($(input).val().trim().match(/^([a-zA-Z0-9! ,@#$%^&*()_=\[\]{};':"\\|,.<>\/?+-]){10,100}$/) == null) {
                return false;
            }
        }
		if($(input).attr('type') == 'grno' || $(input).attr('name') == 'grno') {
            if($(input).val().trim().match(/^([a-zA-Z0-9!@#$%^&*()_=\[\]{};':"\\|,.<>\/?+-]){4,16}$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }
	
	

	
	

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    /*==================================================================
    [ Show pass ]*/
    var showPass = 0;
    $('.btn-show-pass').on('click', function(){
        if(showPass == 0) {
            $(this).next('input').attr('type','text');
            $(this).find('i').removeClass('zmdi-eye');
            $(this).find('i').addClass('zmdi-eye-off');
            showPass = 1;
        }
        else {
            $(this).next('input').attr('type','password');
            $(this).find('i').addClass('zmdi-eye');
            $(this).find('i').removeClass('zmdi-eye-off');
            showPass = 0;
        }
        
    });


})(jQuery);
$(document).ready(function(){
    $('.name-error').css("display","none");
    $('.contact-error').css("display","none");
    $('.mail-error').css("display","none");
    $('.age-error').css("display","none");
    $('.ch_age-error').css("display","none");
    $('form').submit(function(e){
        e.preventDefault();
        let name = $(this).find("[name='u_name']").val();
        let phone = $(this).find("[name='u_phone']").val();
        let mail = $(this).find("[name='u_mail']").val();
        let age = $(this).find("[name='u_age']").val();
        let ch_age = $(this).find("[name='u_ch_age']").val();
        let name_err = $(this).find('.name-error');
        let con_err = $(this).find('.contact-error');
        let mail_err = $(this).find('.mail-error');
        let age_err = $(this).find('.age-error');
        let ch_age_err = $(this).find('.ch_age-error');

        if(name.length <= 0){
            name_err.css("display","block");
            name_err.text("Please Enter Your Name");
        }
        else if(/^[a-zA-Z- ]*$/.test(name) == false){
            name_err.css("display","block");
            name_err.text("Special Characters or Numbers Are Invalid");
        }
        else if(phone.length != 10){
            con_err.css("display","block");
            con_err.text("Contact Number Required 10 Digits");
        }
        else if(/^[a-zA-Z- ]*$/.test(phone) == true){
            con_err.css("display","block");
            con_err.text("Only Numbers Are Valid");
        }
        else if(mail.length <= 0){
            mail_err.css("display","block");
            mail_err.text("Please Enter Your Email");
        }
        else if(/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(mail) == false){
            mail_err.css("display","block");
            mail_err.text("Invalid Mail ID");
        }
        else if(age <= 0 || age.length <= 0){
            age_err.css("display","block");
            age_err.text("Enter Valid Age");
        }
        else if(ch_age <= 0 || ch_age.length <= 0){
            ch_age_err.css("display","block");
            ch_age_err.text("Enter Valid Age");
        }
        else{
            console.log('valid');
        }
        
    });

    $('form').find("[name='u_name']").keyup(function(){
        $('.name-error').css("display","none");
    });
    $('form').find("[name='u_phone']").keyup(function(){
        $('.contact-error').css("display","none");
    });
    $('form').find("[name='u_mail']").keyup(function(){
        $('.mail-error').css("display","none");
    });
    $('form').find("[name='u_age']").keyup(function(){
        $('.age-error').css("display","none");
    });
    $('form').find("[name='u_ch_age']").keyup(function(){
        $('.ch_age-error').css("display","none");
    });

});
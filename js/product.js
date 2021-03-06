$(document).ready(function(){

    $(window).bind('hashchange',function(){
        $('html, body').animate({
            scrollTop: $("#products").offset().top - 20
        }, 1000);
        $('#products_content').find('.otr-div.active').removeClass('active show');
        $('#products_pills').find('.active').removeClass('active');
        var w = window.location.hash.substr(1);
        let xhsh = '#'+w;
        let x = $('#products_content').find(xhsh);
        x.addClass("active show");
        $('a[href="#'+w+'"]').addClass('active');
        setTimeout(function(){
            let n_btn = $('#products_pills').find('.active').text();
            $('.btn-txt').text('Products | '+n_btn);
        },500);
    });
    $('.name-error').css("display","none");
    $('.mail-error').css("display","none");
    $('.contact-error').css("display","none");
    $('form').submit(function(e){
        e.preventDefault();
        let name = $(this).find("[name='name']").val();
        let mail = $(this).find("[name='mail']").val();
        let contact = $(this).find("[name='number']").val();
        let plan = $(this).find("[name='plan']").val();
        const name_err = $(this).find('.name-error');
        const mail_err = $(this).find('.mail-error');
        const contact_err = $(this).find('.contact-error'); 
        if(name.length <= 0){
            name_err.css("display","block");
            name_err.text("Please Enter Your Name");
        }
        else if(/^[a-zA-Z- ]*$/.test(name) == false){
            name_err.css("display","block");
            name_err.text("Special Characters or Numbers Are Invalid");
        }
        else if(mail.length <= 0){
            mail_err.css("display","block");
            mail_err.text("Please Enter Your Email");
        }
        else if(/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(mail) == false){
            mail_err.css("display","block");
            mail_err.text("Invalid Mail ID");
        }
        else if(contact.length != 10){
            contact_err.css("display","block");
            contact_err.text("Contact Number Required 10 Digits");
        }
        else if(/^[a-zA-Z- ]*$/.test(contact) == true){
            contact_err.css("display","block");
            contact_err.text("Only Numbers Are Valid");
        }
        else{
            $.post('mail.php',{name: name,mail: mail,contact:contact,plan:plan},function(response){
                if(response = 'Enquiry Inserted'){
                    console.log('done');
                }
            });
        }

    })

    $('form').find("[name='name']").keyup(function(){
        $('form').find('.name-error').css("display","none");
    });
    $('form').find("[name='mail']").keyup(function(){
        $('form').find('.mail-error').css("display","none");
    });
    $('form').find("[name='number']").keyup(function(){
        $('form').find('.contact-error').css("display","none");
    });
    var w = window.location.hash.substr(1);
    if(w != ''){
        $('html, body').animate({
            scrollTop: $("#products").offset().top - 20
        }, 1000);
        $('#products_content').find('.otr-div.active').removeClass('active show');
        $('#products_pills').find('.active').removeClass('active');
        let x = $('#products_content').find('#'+w);
        x.addClass("active show");
        $('a[href="#'+w+'"]').addClass('active');
    }
    $('.nav-link').click(function(){
        $("#products_pills").removeClass('show');
        setTimeout(function(){
            let n_btn = $('#products_pills').find('.active').text();
            $('.btn-txt').text('Products | '+n_btn);
        },500);
    });
    let n_btn = $('#products_pills').find('.active').text();
    $('.btn-txt').text('Products | '+n_btn);
});
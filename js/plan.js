$(document).ready(function(){
    let w = window.location.hash.substr(1);
    $(window).bind('hashchange',function(){
        $('html, body').animate({
            scrollTop: $("#products").offset().top - 20
        }, 1000);
        $('#products_content').find('.otr-div.active').removeClass('active show');
        $('#products_pills').find('.active').removeClass('active');
        w = window.location.hash.substr(1);
        let xhsh = '#'+w;
        let x = $('#products_content').find(xhsh);
        x.addClass("active show");
        $('a[href="#'+w+'"]').addClass('active');
        setTimeout(function(){
            let n_btn = $('#products_pills').find('.active').text();
            $('.btn-txt').text('Plans | '+n_btn);
        },500);
    });
    if(w != ''){
        $('html, body').animate({
            scrollTop: $("#products").offset().top - 20
        }, 1000);
        $('#products_content').find('.otr-div.active').removeClass('show active');
        $('#products_pills').find('.active').removeClass('active');
        let x = $('#products_content').find('#'+w);
        x.addClass("active show");
        $('a[href="#'+w+'"]').addClass('active');
    }
    $('.nav-link').click(function(){
        $("#products_pills").removeClass('show');
        setTimeout(function(){
            let n_btn = $('#products_pills').find('.active').text();
            $('.btn-txt').text('Plans | '+n_btn);
        },500);
    });
    let n_btn = $('#products_pills').find('.active').text();
    $('.btn-txt').text('Plans | '+n_btn);
});
$(window).on("load scroll",function(e){   
    var scroll = $(window).scrollTop();
  
    if (scroll >= 80) {  
        $("body").addClass("scrolling"); 
    } else {
        $("body").removeClass("scrolling");
    } 
});
 
$(document).ready(function(){   
    $("a.target").on('click', function(event) {
        event.preventDefault();
        var hash = this.hash; 

        $('html, body').animate({
            scrollTop: $(hash).offset().top  
            }, 800, function(){ 
        });
    }); 
  
    /*------------[Start] Menu  ------------*/
    $('<div class="page-blocker"></div>').appendTo('body'); 
    $('.navbar-toggle, .page-blocker, .nav-slider .nav a').click(function () {
      $("html").toggleClass("nav-opened");
    });
   
    AOS.init({
        duration: 1200, 
        once: true, 
    });
 
    $(function () {
        $('[data-bs-toggle="tooltip"]').tooltip()
    })
    
    $(".totop").click(function(event) {
        event.preventDefault();
        $("html, body").animate({scrollTop: 0}, 800);
    }); 
 
   /*------------[Start] form-effect ------------*/

    $('.form-select:not(.custom)').each(function (i) {
        var $dropdownList = $(this).find('.dropdown-menu').find('li');
        
        $dropdownList.on('click', function () { 
            var dropdownListValue = $(this).find(".text").html();
            $dropdownList.parents('.form-select').find('[data-bs-toggle]').html(dropdownListValue).addClass('selected');
            $dropdownList.parents('.form-select').find('input').val(dropdownListValue).addClass('selected');

            $dropdownList.removeClass('active');
            $(this).addClass('active');
        });
    });
 
   
    $('select').on('change', function() {
        if (this.value) {
            $(this).addClass("selected");
        } else {
            $(this).removeClass("selected");
        }
    }).change();

     
});
 
$(window).on("load", function() {
    $(".swiper-banner").each(function(index, element){
        var $this = $(this);
        var swiper = new Swiper(this, {  
            speed: 700, 
            effect: 'slide',  

            spaceBetween:0,
            slidesPerView:1, 
            slidesPerGroup: 1,
            loop: true, 
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            observer: true,
            observeParents: true,
            watchOverflow: true,  
            pagination: {
                el: $this.parent().find('.swiper-pagination'),
                clickable: true,
            },
            navigation: {
                nextEl: $this.parent().find(".swiper-button-next")[0],
                prevEl: $this.parent().find(".swiper-button-prev")[0],
            } 
        });
    });
    
    $(".preload").fadeOut();

    setTimeout(function () {
        $("html").addClass("page-loaded");
    }, 200);
  
    $('img.svg-js').each(function() {
        var $img = jQuery(this);
        var imgURL = $img.attr('src');
        var attributes = $img.prop("attributes");

        $.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');

            // Remove any invalid XML tags
            $svg = $svg.removeAttr('xmlns:a');

            // Loop through IMG attributes and apply on SVG
            $.each(attributes, function() {
                $svg.attr(this.name, this.value);
            });

            // Replace IMG with SVG
            $img.replaceWith($svg);
        }, 'xml');
    });
});
 
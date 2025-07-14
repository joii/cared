

    $(window).on("load", function(){
        var galleryThumbs = new Swiper('.gallery-thumbs', {
            spaceBetween:10,
            slidesPerView: 3,
            loop: false,
            effect: 'slide',
            watchSlidesVisibility: true,
            observeParents: true,
            watchOverflow: true,
            /*simulateTouch:false,*/

        });
        var gallery = new Swiper('.gallery-top', {
            slidesPerView:1,
            spaceBetween:10,
            speed: 500,
            loop: false,
            observer: true,
            effect: 'slide',
            observeParents: true,
            watchOverflow: true,
            thumbs: {
                swiper: galleryThumbs,
            },
            navigation: {
                nextEl: '.swiper-button-next.gallery-top',
                prevEl: '.swiper-button-prev.gallery-top',
            }
        });
    });

    $(".swiper-gallery").each(function(index, element){
        var $this = $(this);
        var swiper = new Swiper(this, {
            speed: 700,
            effect: 'slide',

            spaceBetween:0,
            slidesPerView:"auto",
            slidesPerGroup: 1,
            centeredSlides: true,
            loop: true,
            // autoplay: {
            //     delay: 5000,
            //     disableOnInteraction: false,
            // },
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

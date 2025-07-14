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

    $(".swiper-table-infos").each(function(index, element){
        var $this = $(this);
        var swiper = new Swiper(this, {
            speed: 700,
            effect: 'slide',

            spaceBetween:0,
            slidesPerView:1,
            slidesPerGroup: 1,
            loop: false,

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

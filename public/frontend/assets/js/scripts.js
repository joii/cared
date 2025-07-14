
    $(".swiper-review").each(function(index, element){
        var $this = $(this);
        var swiper = new Swiper(this, {
            speed: 700,
            effect: 'slide',

            spaceBetween:0,
            slidesPerView:"auto",
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
            } ,
            breakpoints: {
                1200: {
                    slidesPerView: 3,
                    spaceBetween:35
                },
                1025: {
                    slidesPerView: 3,
                    spaceBetween:25
                },
                767: {
                    slidesPerView: 2,
                    spaceBetween:25
                },
                671: {
                    slidesPerView: 2,
                    spaceBetween:15
                },
                0: {
                    slidesPerView: 1,
                    spaceBetween:15
                }
            }
        });
    });

    $(".seemore").click(function (e) {
        e.stopPropagation();
        if($(".card-limit").hasClass("expand")) {
            $(this).text("อ่านเพิ่มเติม");
        } else {
            $(this).text("น้อยลง");
        }

        $(".card-limit").toggleClass("expand");
    });

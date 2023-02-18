$(function() {

    var owl = $('.owl-1');
    owl.owlCarousel({
        loop:false,
        margin:0,
        nav:false,
        dots: false,
        items: 1,
        smartSpeed: 10,
        autoplay: false,
        navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">']
    });

    var carousel_nav_a = $('.carousel-nav a');

    carousel_nav_a.each(function(slide_index){
        var $this = $(this);
        $this.attr('data-num', slide_index);
        $this.click(function(e) {
            owl.trigger('to.owl.carousel',[slide_index,500]);
            e.preventDefault();
        })
    })

    owl.on('changed.owl.carousel', function(event) {
        carousel_nav_a.removeClass('active');
        $(".carousel-nav a[data-num="+event.item.index+"]").addClass('active');
    })


})

$(function() {

	if ( $('.owl-4').length > 0 ) {
        $('.owl-4').owlCarousel({
            center: false,
            items: 1,
            loop: true,
            stagePadding: 0,
            margin: 20,
            smartSpeed: 1000,
            autoplay: true,
            nav: false,
            dots: true,
            pauseOnHover: false,
            responsive:{
                600:{
                    margin: 20,
                    nav: false,
                  items: 2
                },
                1000:{
                    margin: 20,
                    stagePadding: 0,
                    nav: false,
                  items: 3
                }
            }
        });
    }

})

$(function() {

    if ( $('.owl-3').length > 0 ) {
        $('.owl-3').owlCarousel({
            center: false,
            items: 1,
            loop: true,
            stagePadding: 0,
            margin: 20,
            smartSpeed: 1000,
            autoplay: true,
            nav: false,
            dots: true,
            pauseOnHover: false,
            responsive:{
                600:{
                    margin: 20,
                    nav: false,
                    items: 2
                },
                1000:{
                    margin: 20,
                    stagePadding: 0,
                    nav: false,
                    items: 5
                }
            }
        });
    }

})


$(document).ready(function() {
		  $("#page-nav").sticky({
    topSpacing:0
  });
		  $('.reviews').slick({
        // dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 6,
                slidesToScroll: 1,
                // centerMode: true,

            }

        }, {
            breakpoint: 800,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 2,
                dots: true,
                infinite: true,

            }


        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true,
                infinite: true,

            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 2000,
            }
        }]
    });

//remodal call
            $('.reviewCTA > a').on('click', function(e) {
    $('[data-remodal-id=review-form-modal]').remodal({
      hashTracking: false
    }).open();
    // $('.remodal-zipform .location-form input').focus();
    e.preventDefault();
  });
            $('.bookCTA > a').on('click', function(e) {
    $('[data-remodal-id=booking-form-modal]').remodal({
      hashTracking: false
    }).open();
    // $('.remodal-zipform .location-form input').focus();
    e.preventDefault();
  });

})

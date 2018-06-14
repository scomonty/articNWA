$(document).ready(function() {
    function close_accordion_section() {
        $('.accordionFAQ .accordion-section-title').removeClass('active');
        $('.accordionFAQ .accordionFAQ-section-content').slideUp(300).removeClass('open');
    }

    $('.accordion-section-title').click(function(e) {
        // Grab current anchor value
        var currentAttrValue = $(this).attr('href');

        if($(e.target).is('.active')) {
            close_accordion_section();
        }else {
            close_accordion_section();

            // Add active class to section title
            $(this).addClass('active');
            // Open up the hidden content panel
            $('.accordionFAQ ' + currentAttrValue).slideDown(300).addClass('open');
        }

        e.preventDefault();
    });
    $('.segment').mouseover(function() {
        $('#firstPanel').removeClass('highlight');
})
$('.segment').mouseleave(function() {
        $('#firstPanel').addClass('highlight');
})

});

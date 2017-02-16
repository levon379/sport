$( document ).ready(function() {
    $('#myCarousel').on('slid.bs.carousel', function () {
        jQuery.each( $(".youtube-player-iframe"), function( i, val ) {
            jQuery( this ).attr('src', "");
            var url = jQuery( this ).attr('data-src');
            jQuery( this ).attr('src', url);
        });
    })
});

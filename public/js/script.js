$( document ).ready(function() {
    $('#myCarousel').on('slid.bs.carousel', function () {
        jQuery.each( $(".youtube-player-iframe"), function( i, val ) {
            jQuery( this ).attr('src', "");
            var url = jQuery( this ).attr('data-src');
            jQuery( this ).attr('src', url);
        });
    })
    var url = window.location;
    $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
    $('ul.nav a').filter(function() {
        return this.href == url;
    }).parent().addClass('active');
});

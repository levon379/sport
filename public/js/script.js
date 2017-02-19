$( document ).ready(function() {
    //slider
    $('#myCarousel').on('slid.bs.carousel', function () {
        jQuery.each( $(".youtube-player-iframe"), function( i, val ) {
            jQuery( this ).attr('src', "");
            var url = jQuery( this ).attr('data-src');
            jQuery( this ).attr('src', url);
        });
    })
    //menu
    var url = window.location;
    $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
    $('ul.nav a').filter(function() {
        return this.href == url;
    }).parent().addClass('active');

    //image
    $( ".image_size" ).find('.gal-item:eq( 0 )').addClass('col-md-4 col-sm-4 co-xs-4 gal-item');
    $( ".image_size" ).find('.gal-item:eq( 1 )').addClass('col-md-8 col-sm-8 co-xs-8 gal-item');
    $( ".image_size" ).find('.gal-item:eq( 2 )').addClass('col-md-4 col-sm-6 co-xs-3 gal-item');
    $( ".image_size" ).find('.gal-item:eq( 3 )').addClass('col-md-4 col-sm-6 co-xs-3 gal-item');
    $( ".image_size" ).find('.gal-item:eq( 4 )').addClass('col-md-4 col-sm-6 co-xs-3 gal-item');

});

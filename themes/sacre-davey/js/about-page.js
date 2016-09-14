(function($) {

    //About page flickity


    var $gallery = $('.carousel-main').flickity({
            cellAlign: 'left',
            pageDots: false,
            resize: true
        }),

        $flkty = $gallery.data('flickity'),

        $nav = $('.carousel-nav').flickity({
            asNavFor: $('.carousel-main'),
            prevNextButtons: false,
            pageDots: false,
            cellAlign: 'left',
            dragThreshold: 1,
            contain: true,
            setGallerySize: false
        }),

        $navGroup = $('.carousel-nav'),

        $navCells = $navGroup.find('.carousel-cell');

  //Switch content slider on nav slider click
    $('.carousel-nav').on('click', '.carousel-cell', function() {
        var index = $(this).index();
        $gallery.flickity('select', index);
        $nav.flickity('select', index);
    });

  //Switch nav slider on menu slider scroll
    $('.carousel-main').on('select.flickity', function() {
        $navCells.filter('.is-selected')
            .removeClass('is-selected');
        $navCells.eq($flkty.selectedIndex)
            .addClass('is-selected');
        $nav.flickity('select', $flkty.selectedIndex);
    });
})(jQuery);
jQuery(document).ready(function ($) {
    var $grid = $('.row-isotope').isotope({
        itemSelector: '.col',
        layoutMode: 'fitRows'
    });

    // Lọc theo danh mục khi click tab
    $('.filter-nav a').on('click', function (e) {
        e.preventDefault();

        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });

        // Active tab
        $('.filter-nav li').removeClass('active');
        $(this).parent().addClass('active');
    });
});

function show_tabs_data() {
    let timelineBlocks = $('.chain_block'),
        offset = 0.8;

    hideBlocks(timelineBlocks, offset);

    $(window).on('scroll', function () {
        (!window.requestAnimationFrame)
            ? setTimeout(function () {
                showBlocks(timelineBlocks, offset);
            }, 500)
            : window.requestAnimationFrame(function () {
                showBlocks(timelineBlocks, offset);
            });
    });

    function hideBlocks(blocks, offset) {
        blocks.each(function () {
            ($(this).offset().top > $(window).scrollTop() + $(window).height() * offset) && $(this).find('.chain_icon, .chain_data').addClass('is-hidden');
        });
    }

    function showBlocks(blocks, offset) {
        blocks.each(function () {
            ($(this).offset().top <= $(window).scrollTop() + $(window).height() * offset && $(this).find('.chain_icon').hasClass('is-hidden')) && $(this).find('.chain_icon, .chain_data').removeClass('is-hidden').addClass('bounce-in');
        });
    }

    let listItemHeight = $(".tabs_panel ul")
        .find("li:eq(" + 0 + ")")
        .innerHeight();
    $(".tabs_panel ul").height(listItemHeight + "px");
}
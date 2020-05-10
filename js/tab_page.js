$(document).on("click", ".tabs_panel .tabs_menu div", function () {
    let numberIndex = $(this).index();

    if (!$(this).is("active")) {
        $(".tabs_panel .tabs_menu div").removeClass("active");
        $(".tabs_panel ul li").removeClass("active");

        $(this).addClass("active");
        $(".tabs_panel ul").find("li:eq(" + numberIndex + ")").addClass("active");

        let listItemHeight = $(".tabs_panel ul")
            .find("li:eq(" + numberIndex + ")")
            .innerHeight();
        $(".tabs_panel ul").height(listItemHeight + "px");
    }
});

function calculate_height() {
    let listItemHeight = $(".tabs_panel ul")
        .find("li:eq(" + 0 + ")")
        .innerHeight();
    $(".tabs_panel ul").height(listItemHeight + "px");
}

function set_height(id, h) {
    $("id").height(h + "px");
}
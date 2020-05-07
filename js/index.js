var current_slider_photos = [];
var current_slider_photo_titles = [];

function add_photos_to_index_slider(photos, titles) {
    let slider_container = $("#index_slider_container_id");
    for (let i = 0; i < photos.length; i++) {
        let div = $('<div/>');
        let a_download = $('<a/>');
        a_download.attr('href', photos[i]);
        a_download.attr('download', '');
        a_download.attr('title', titles[i]);
        let img1 = $('<img/>');
        img1.addClass('img-thumbnail');
        img1.attr('data-u', 'image');
        img1.attr('src', photos[i]);
        let img2 = $('<img/>');
        img2.attr('data-u', 'thumb');
        img2.attr('src', photos[i]);
        img1.appendTo(a_download);
        a_download.appendTo(div);
        img2.appendTo(div);
        div.appendTo(slider_container);
    }
}

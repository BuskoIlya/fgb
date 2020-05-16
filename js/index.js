var current_slider_photos = [];
var current_slider_photo_titles = [];
var tournaments_2020 = [];
var news_2020 = [];

function add_photos_to_index_slider(photos, titles) {
    let slider_container = $("#index_slider_container_id");
    for (let i = 0; i < photos.length; i++) {
        let div = $('<div/>');
        let a_download = $('<a/>');
        a_download.attr('href', photos[i]);
        a_download.attr('download', '');
        if (titles.length == photos.length) {
            a_download.attr('title', titles[i]);
        }
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

function decorate_tournament(table, arr) {
    $(table).find('tr').each(function (i, el) {
        let $tds = $(this).find('td');
        for (let i = 0; i < arr.length; i++) {
            let val = $tds.eq(arr[i]).text();
            if (val.includes('+')) {
                $tds.eq(arr[i]).addClass('bg-success');
            } else if (val.includes('-')) {
                $tds.eq(arr[i]).addClass('bg-danger');
            }
        }
    });
}

function decorate_rus_tournament(table, arr, score) {
    $(table).find('tr').each(function (i, el) {
        let $tds = $(this).find('td');
        for (let i = 0; i < arr.length; i++) {
            let val = $tds.eq(arr[i]).text();
            if (val.includes('+')) {
                $tds.eq(arr[i]).addClass('text-success');
            } else if (val.includes('-')) {
                $tds.eq(arr[i]).addClass('text-danger');
            }
        }
        let val = $tds.eq(score).text();
        if (val.includes('+')) {
            $tds.eq(score).addClass('bg-success');
        } else if (val.includes('-')) {
            $tds.eq(score).addClass('bg-danger');
        }
    });
}

function select_blue_color_our_players(table, arr, number) {
    $(table).find('tr').each(function (i, el) {
        let $tds = $(this).find('td');
        let val = $tds.eq(number).text();
        let img_title = $(this).find('img').attr('title');
        if (val.includes('Беларусь') ||
            val.includes('Минск') || val.includes('Витебск')) {
            for (let i = 0; i < arr.length; i++) {
                $tds.eq(arr[i]).addClass('select_our_player');
            }
        }
        if (img_title != undefined && img_title.includes('Беларусь')) {
            for (let i = 0; i < arr.length; i++) {
                $tds.eq(arr[i]).addClass('select_our_player');
            }
        }
    });
}


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

var old_ref_map = new Map();

old_ref_map.set('contacts', 'pages/menu/contacts.php');
old_ref_map.set('ranks', 'pages/menu/ranks.php');
old_ref_map.set('info-board', 'pages/info_board/info_board.php');
old_ref_map.set('schools', 'pages/schools/schools.php');
old_ref_map.set('news', 'pages/news/news.php');

old_ref_map.set('by-players', 'pages/menu/players.php');
old_ref_map.set('tournaments', 'pages/tournaments/tournaments.php');
old_ref_map.set('players-lib', 'pages/menu/persons.php');

old_ref_map.set('go-stories', 'pages/stories/stories.php');
old_ref_map.set('go-manual', 'pages/gomanual/go_manual.php');

old_ref_map.set('news-2018-03-23', 'pages/tournaments/2018/0323.php');
old_ref_map.set('news-2018-11-30', 'pages/tournaments/2018/1130.php');
old_ref_map.set('news-2019-02-16', 'pages/tournaments/2019/0216.php');
old_ref_map.set('news-2019-03-29', 'pages/tournaments/2019/0329.php');
old_ref_map.set('news-2019-05-30', 'pages/tournaments/2019/0530.php');
old_ref_map.set('news-2019-08-30', 'pages/tournaments/2019/0831.php');
old_ref_map.set('news-2019-09-20', 'pages/tournaments/2019/0920.php');
old_ref_map.set('news-2019-10-25', 'pages/tournaments/2019/1025.php');
old_ref_map.set('news-2019-11-23', 'pages/tournaments/2019/1123.php');
old_ref_map.set('news-2019-12-20', 'pages/tournaments/2019/1220.php');

old_ref_map.set('news-2020-01-24', 'pages/tournaments/2020/0124.php');
old_ref_map.set('news-2020-02-15', 'pages/tournaments/2020/0404.php');

old_ref_map.set('match-belarus-cyprus-2019-10-08', 'pages/news/2019/1008.php');
old_ref_map.set('match-belarus-iceland-2019-10-29', 'pages/news/2019/1029.php');
old_ref_map.set('match-bulgaria-belarus-2019-11-26', 'pages/news/2019/1126.php');
old_ref_map.set('match-spain-belarus-2019-12-17', 'pages/news/2019/1217.php');
old_ref_map.set('match-belarus-morocco-2020-01-21', 'pages/news/2020/0121.php');
old_ref_map.set('match-belarus-portugal-2020-02-18', 'pages/news/2020/0218.php');

old_ref_map.set('tournament-2018-03-23', 'pages/tournaments/2018/0323.php');
old_ref_map.set('tournament-2018-11-30', 'pages/tournaments/2018/1130.php');
old_ref_map.set('tournament-2019-02-16', 'pages/tournaments/2019/0216.php');
old_ref_map.set('tournament-2019-03-29', 'pages/tournaments/2019/0329.php');
old_ref_map.set('tournament-2019-05-30', 'pages/tournaments/2019/0530.php');
old_ref_map.set('tournament-2019-08-30', 'pages/tournaments/2019/0831.php');
old_ref_map.set('tournament-2019-09-20', 'pages/tournaments/2019/0920.php');
old_ref_map.set('tournament-2019-10-25', 'pages/tournaments/2019/1025.php');
old_ref_map.set('tournament-2019-11-23', 'pages/tournaments/2019/1123.php');
old_ref_map.set('tournament-2019-12-20', 'pages/tournaments/2019/1220.php');

old_ref_map.set('tournament-2020-01-24', 'pages/tournaments/2020/0124.php');
old_ref_map.set('tournament-2020-03-14', 'pages/tournaments/2020/0404.php');

old_ref_map.set('eu-19/20', 'pages/world/eu_19_20.php');
old_ref_map.set('eus', 'pages/world/europe.php');
old_ref_map.set('wagc', 'pages/menu/wagc.php');

old_ref_map.set('o-go-anechaev', 'pages/stories/stories.php?page=o-go-anechaev');
old_ref_map.set('eef-2018', 'pages/stories/stories.php?page=eef-2018');
old_ref_map.set('japan-60-70', 'pages/stories/stories.php?page=japan-60-70');
old_ref_map.set('legend', 'pages/stories/stories.php?page=legend');
old_ref_map.set('neiro', 'pages/stories/stories.php?page=neiro');

old_ref_map.set('stone-dragon', 'pages/schools/stone_dragon.php');
old_ref_map.set('vit-go', 'pages/schools/vitebsk.php');
old_ref_map.set('malinovka', 'pages/schools/malinovka.php');
old_ref_map.set('brainforce', 'pages/schools/brainforce.php');
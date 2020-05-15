<?php
require_once 'php/lang/lang_index_' . $_SESSION['lang'] . '.php';
?>

<div id="index_slider"></div>

<div class="running_line">
    <div>
        <p class="text-danger">
            <?php echo $Lang_index['run_line'] ?>
        </p>
    </div>
</div>

<div class="container main_info">
    <div class="row">
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 news_block">
            <h1><?php echo $Lang_index['news_title'] ?></h1>
            <div id="main_news_id">
            </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 tournaments_block">
            <h1><?php echo $Lang_index['tournaments_title'] ?></h1>
            <div id="main_tournaments_id">
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/index.js"></script>

<script>
    $(document).ready(function () {
        current_slider_photo_titles.splice(0);
        current_slider_photos.splice(0);
        current_slider_photo_titles = get_photo_titles();
        current_slider_photos = get_photos();
        $("#index_slider").load("pages/index/index_slider.html");

        get_tournaments('2020');
        get_news('2020');

    });
</script>

<script>
    function get_photo_titles() {
        return [
            "<?php echo $Lang_index['2019_02_16'] ?>",
            "<?php echo $Lang_index['2019_03_30'] ?>",
            "<?php echo $Lang_index['2019_05_30'] ?>",
            "<?php echo $Lang_index['2019_08_30'] ?>",
            "<?php echo $Lang_index['2019_09_20'] ?>",
            "<?php echo $Lang_index['2019_10_25'] ?>",
            "<?php echo $Lang_index['2019_11_23'] ?>",
            "<?php echo $Lang_index['2019_12_25'] ?>",
            "<?php echo $Lang_index['2020_01_24'] ?>"
        ];
    }

    function get_photos() {
        return [
            "img/by/index_slider/2019_02_16_spb_china_cup.jpg",
            "img/by/index_slider/2019_03_30_minsk_cup.jpg",
            "img/by/index_slider/2019_05_30_wagc_japan.jpg",
            "img/by/index_slider/2019_08_30_seul.jpg",
            "img/by/index_slider/2019_09_20_study_open.jpg",
            "img/by/index_slider/2019_10_25_list.jpg",
            "img/by/index_slider/2019_11_23_belarus_chp.jpg",
            "img/by/index_slider/2019_12_25_christmas.jpg",
            "img/by/index_slider/2020_01_24_open_13.jpg"
        ];
    }

    function get_tournaments(year) {
        $.ajax({
            url: 'php/read_news.php',
            type: 'POST',
            cache: false,
            data: {'year': '2020', 'type': 'tournament',
                'is_finished': 'ALL'},
            dataType: 'json',
            success: function (data) {
                tournaments_2020.splice(0);
                tournaments_2020 = data;
                $("#main_tournaments_id").load("pages/index/index_tournaments.html");
            }
        });
    }

    function get_news(year) {
        $.ajax({
            url: 'php/read_news.php',
            type: 'POST',
            cache: false,
            data: {'year': '2020', 'type': 'ALL',
                'is_finished': 'finished'},
            dataType: 'json',
            success: function (data) {
                news_2020.splice(0);
                news_2020 = data;
                $("#main_news_id").load("pages/index/index_news.html");
            }
        });
    }
</script>
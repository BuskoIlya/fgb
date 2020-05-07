<?php
require_once 'lang/lang_index_' . $_SESSION['lang'] . '.php';
?>

<div id="index_slider"></div>

<div class="running_line">
    <div>
        <p class="text-danger">
            <?php echo $Lang_index['run_line'] ?>
        </p>
    </div>
</div>

<script type="text/javascript" src="/fgb/js/index.js"></script>

<script>
    $(document).ready(function () {
        current_slider_photo_titles.splice(0);
        current_slider_photos.splice(0);
        current_slider_photo_titles = get_photo_titles();
        current_slider_photos = get_photos();

        $("#index_slider").load("/fgb/pages/index/index_slider.html");
    });
</script>

<script>
    function get_photos() {
        return [
            "/fgb/img/by/index_slider/2019_02_16_spb_china_cup.jpg",
            "/fgb/img/by/index_slider/2019_03_30_minsk_cup.jpg",
            "/fgb/img/by/index_slider/2019_05_30_wagc_japan.jpg",
            "/fgb/img/by/index_slider/2019_08_30_seul.jpg",
            "/fgb/img/by/index_slider/2019_09_20_study_open.jpg",
            "/fgb/img/by/index_slider/2019_10_25_list.jpg",
            "/fgb/img/by/index_slider/2019_11_23_belarus_chp.jpg",
            "/fgb/img/by/index_slider/2019_12_25_christmas.jpg",
            "/fgb/img/by/index_slider/2020_01_24_open_13.jpg"
        ];
    }

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
</script>
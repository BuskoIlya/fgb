<html prefix="og: http://ogp.me/ns#">
<head>
    <?php
    require '../blocks/set_lang.php';
    require_once '../../php/lang/lang_' . $_SESSION['lang'] . '.php';
    $website_title = $Lang['page_info'];
    require '../blocks/head_pages.php';
    ?>

    <meta property="og:image" content="../../img/og/page_info.jpg"/>
    <meta property="og:description" content="ФГБ: сайты с информацией об игре го в мире и Беларуси"/>
</head>
<body>
<div id="fgb_body">
    <?php
    require '../blocks/top_pages.php';
    require '../blocks/menu_pages.php';
    ?>

    <div id="info_board_id"></div>

    <?php
    require '../blocks/bottom.php';
    ?>
</div>
</body>

<script>
    $(document).ready(function () {
        var lang = "<?php echo $_SESSION['lang'] ?>";
        if (lang == 'ru') {
            $("#info_board_id").load("info_board_ru.html");
        } else {
            $("#info_board_id").load("info_board_en.html");
        }
    });
</script>
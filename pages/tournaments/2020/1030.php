<html prefix="og: http://ogp.me/ns#">
<head>
    <?php
    require '../../blocks/set_lang.php';
    require_once '../../../php/lang/lang_' . $_SESSION['lang'] . '.php';
    $website_title = $Lang['page_t20201030'];
    require '../../blocks/head_news.php';
    ?>
    <script type="text/javascript" src="../../../js/index.js"></script>
    <script type="text/javascript" src="../../../libs/jssor.slider.min.js"></script>
    <script type="text/javascript" src="../../../js/sliders/index_slider.js"></script>
    <script type="text/javascript" src="1030.js"></script>

    <meta property="og:image" content="../../../img/by/index_slider/2020_10_30_autumn.jpg"/>
</head>
<body>
<div id="fgb_body">
    <?php
    require '../../blocks/top_news.php';
    require '../../blocks/menu_news.php';
    require '1030.html';
    require '../../blocks/bottom.php';
    ?>
</div>
</body>
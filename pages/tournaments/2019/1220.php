<html prefix="og: http://ogp.me/ns#">
<head>
    <link rel="stylesheet/less" href="../../../css/index.less">
    <?php
    require '../../blocks/set_lang.php';
    require_once '../../../php/lang/lang_' . $_SESSION['lang'] . '.php';
    $website_title = $Lang['page_t20191220'];
    require '../../blocks/head_news.php';
    ?>
    <script type="text/javascript" src="../../../js/index.js"></script>
    <script type="text/javascript" src="../../../libs/jssor.slider.min.js"></script>
    <script type="text/javascript" src="../../../js/sliders/index_slider.js"></script>
    <script type="text/javascript" src="1220.js"></script>

    <meta property="og:image" content="../../../img/by/index_slider/2019_12_25_christmas.jpg"/>
</head>
<body>
<div id="fgb_body">
    <?php
    require '../../blocks/top_news.php';
    require '../../blocks/menu_news.php';
    require '1220.html';
    require '../../blocks/bottom.php';
    ?>
</div>
</body>
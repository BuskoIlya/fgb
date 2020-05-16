<html>
<head>
    <link rel="stylesheet/less" href="../../../css/index.less">
    <?php
    require '../../blocks/set_lang.php';
    require_once '../../../php/lang/lang_' . $_SESSION['lang'] . '.php';
    $website_title = $Lang['page_players'];
    require '../../blocks/head_news.php';
    ?>
    <script type="text/javascript" src="../../../js/index.js"></script>
    <script type="text/javascript" src="../../../libs/jssor.slider.min.js"></script>
    <script type="text/javascript" src="../../../js/sliders/index_slider.js"></script>
    <script type="text/javascript" src="0124.js"></script>
</head>
<body>
<div id="fgb_body">
    <?php
    require '../../blocks/top_pages.php';
    require '../../blocks/menu_pages.php';
    require '0124.html';
    require '../../blocks/bottom.php';
    ?>
</div>
</body>
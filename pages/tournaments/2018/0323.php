<html>
<head>
    <link rel="stylesheet/less" href="../../../css/index.less">
    <?php
    require '../../blocks/set_lang.php';
    require_once '../../../php/lang/lang_' . $_SESSION['lang'] . '.php';
    $website_title = $Lang['page_t20180323'];
    require '../../blocks/head_news.php';
    ?>
    <script type="text/javascript" src="0323.js"></script>
    <script type="text/javascript" src="../../../js/index.js"></script>
    <script type="text/javascript" src="../../../libs/jssor.slider.min.js"></script>
    <script type="text/javascript" src="../../../js/sliders/index_slider.js"></script>
</head>
<body>
<div id="fgb_body">
    <?php
    require '../../blocks/top_news.php';
    require '../../blocks/menu_news.php';
    require '0323.html';
    require '../../blocks/bottom.php';
    ?>
</div>
</body>
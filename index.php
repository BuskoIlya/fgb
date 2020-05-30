<html prefix="og: http://ogp.me/ns#">
<head>
    <link rel="stylesheet/less" href="css/index.less">

    <?php
    require 'pages/blocks/set_lang.php';
    require_once 'php/lang/lang_' . $_SESSION['lang'] . '.php';
    $website_title = $Lang['website_title'];
    require 'pages/blocks/head.php';
    ?>

    <script type="text/javascript" src="js/index.js"></script>

    <meta property="og:image" content="img/og/page_index.jpg"/>
    <meta property="og:description" content="ФГБ — сайт федерации го Беларуси. Все события
  внутри страны и в мире, рассказы о го, книги и видео разборы партий."/>

    <script>
        $(document).ready(function () {
            let searchParams = new URLSearchParams(window.location.search)
            let page = searchParams.get('page');
            if (page != null) {
                window.location = 'http://federationgo.by/' + old_ref_map.get(page);
            }
        });
    </script>
</head>
<body>
<div id="fgb_body">
    <?php
    require 'pages/blocks/top.php';
    require 'pages/blocks/menu.php';
    require 'pages/index/index_main.php';
    require 'pages/blocks/bottom.php';
    ?>
</div>
</body>
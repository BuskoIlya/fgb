<html>
<head>
    <link rel="stylesheet/less" href="css/index.less">

    <?php
    require 'pages/blocks/set_lang.php';
    require_once 'php/lang/lang_' . $_SESSION['lang'] . '.php';
    $website_title = $Lang['website_title'];
    require 'pages/blocks/head.php';
    ?>
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
<html>
<head>
    <?php
    require 'blocks/set_lang.php';
    require_once 'lang/lang_' . $_SESSION['lang'] . '.php';
    $website_title = $Lang['website_title'];
    require 'blocks/head.php';
    ?>
</head>
<body>
<div id="fgb_body">
    <?php
    require 'blocks/top.php';
    require 'blocks/menu.php';
    require 'pages/index/index_main.php';
    require 'blocks/bottom.php';
    ?>
</div>
</body>
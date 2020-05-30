<html>
<head>
    <link rel="stylesheet" type="text/css"
          href="../../libs/galleria_slider/galleria.folio.css"/>
    <link rel="stylesheet" type="text/css"
          href="../../libs/galleria_slider/galleria-inline.folio.css"/>
    <link rel="stylesheet/less" href="../../css/schools.less"/>
    <?php
    require '../blocks/set_lang.php';
    require_once '../../php/lang/lang_' . $_SESSION['lang'] . '.php';
    $website_title = $Lang['page_stone_dragon'];
    require '../blocks/head_pages.php';
    ?>
</head>
<body>
<div id="fgb_body">
    <?php
    require '../blocks/top_pages.php';
    require '../blocks/menu_pages.php';
    ?>

    <div id="stone_dragon_id"></div>

    <?php
    require '../blocks/bottom.php';
    ?>
</div>
</body>

<script type="text/javascript" src="../../libs/galleria_slider/galleria.js"></script>
<script type="text/javascript" src="../../libs/galleria_slider/galleria.folio.js"></script>

<script>
    $(document).ready(function () {
        var lang = "<?php echo $_SESSION['lang'] ?>";
        if (lang == 'ru') {
            $("#stone_dragon_id").load("stone_dragon_ru.html");
        } else {
            $("#stone_dragon_id").load("stone_dragon_en.html");
        }
    });
</script>
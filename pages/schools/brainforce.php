<html prefix="og: http://ogp.me/ns#">
<head>
    <link rel="stylesheet" type="text/css"
          href="../../libs/galleria_slider/galleria.folio.css"/>
    <link rel="stylesheet" type="text/css"
          href="../../libs/galleria_slider/galleria-inline.folio.css"/>
    <link rel="stylesheet/less" href="../../css/schools.less"/>
    <?php
    require '../blocks/set_lang.php';
    require_once '../../php/lang/lang_' . $_SESSION['lang'] . '.php';
    $website_title = $Lang['page_brainforce'];
    require '../blocks/head_pages.php';
    ?>

    <meta property="og:image" content="../../img/og/page_brainforce.jpg"/>
    <meta property="og:description" content="ФГБ: школа го в Минске 'Брейнфорс'"/>
</head>
<body>
<div id="fgb_body">
    <?php
    require '../blocks/top_pages.php';
    require '../blocks/menu_pages.php';
    ?>

    <div id="brainforce_id"></div>

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
            $("#brainforce_id").load("brainforce_ru.html");
        } else {
            $("#brainforce_id").load("brainforce_en.html");
        }
    });
</script>
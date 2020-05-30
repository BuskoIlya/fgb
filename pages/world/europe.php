<html prefix="og: http://ogp.me/ns#">
<head>
    <link rel="stylesheet/less" href="../../css/tab_page.less">

    <?php
    require '../blocks/set_lang.php';
    require_once '../../php/lang/lang_' . $_SESSION['lang'] . '.php';
    $website_title = $Lang['page_eu'];
    require '../blocks/head_pages.php';
    ?>

    <meta property="og:image" content="../../img/og/page_eu.jpg"/>
    <meta property="og:description" content="ФГБ: результаты чемпионатов Европы"/>
</head>
<body>
<div id="fgb_body">
    <?php
    require '../blocks/top_pages.php';
    require '../blocks/menu_pages.php';
    ?>

    <div class="inner_page">
        <div class="data_panel">
            <h1><?php echo $Lang['eu_title'] ?></h1>
            <div class="tabs_panel">
                <div>
                    <div class="tabs_panel_col" style="margin-right: 0">
                        <div class="tabs_menu">
                            <div class="active"><span class="light"></span>
                                <span><?php echo $Lang['eu_personal'] ?></span>
                            </div>
                            <div><span class="light"></span>
                                <span><?php echo $Lang['eu_command'] ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="tabs_panel_col" style="margin-left: 0; border-left: 1px solid #f3f3f3;
            width: 80%; line-height: 2; text-align: justify;">
                        <ul class="tabs_data">
                            <li id="eu_personal_id" class="active" style="width:100%"></li>
                            <li id="eu_command_id" style="width:100%"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    require '../blocks/bottom.php';
    ?>
</div>
</body>

<script type="text/javascript" src="../../js/tab_page.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $.ajax({
            url: '../../php/read_eup.php',
            type: 'POST',
            cache: false,
            dataType: 'json',
            success: function (data) {
                ue_personal = data;
                $("#eu_personal_id").load("eu_personal.php");
                setTimeout(function(){calculate_height();},100);
            }
        });
        $.ajax({
            url: '../../php/read_euc.php',
            type: 'POST',
            cache: false,
            dataType: 'json',
            success: function (data) {
                ue_command = data;
                $("#eu_command_id").load("eu_command.php");
                setTimeout(function(){calculate_height();},100);
            }
        });
    });
</script>
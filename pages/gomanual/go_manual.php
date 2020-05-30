<html prefix="og: http://ogp.me/ns#">
<head>
    <link rel="stylesheet/less" href="../../css/tab_page.less">

    <?php
    require '../blocks/set_lang.php';
    require_once '../../php/lang/lang_' . $_SESSION['lang'] . '.php';
    $website_title = $Lang['page_go_manual'];
    require '../blocks/head_pages.php';
    ?>

    <meta property="og:image" content="../../img/og/page_go_manual.jpg"/>
    <meta property="og:description" content="ФГБ, Го: правила игры, термины, сентэ, готэ, примеры партий"/>
</head>
<body>
<div id="fgb_body">
    <?php
    require '../blocks/top_pages.php';
    require '../blocks/menu_pages.php';
    ?>

    <div class="inner_page">
        <div class="data_panel">
            <h1>Справочник Го</h1>
            <div class="tabs_panel">
                <div>
                    <div class="tabs_panel_col" style="margin-right: 0">
                        <div class="tabs_menu">
                            <div class="active"><span class="light"></span><span>Правила</span></div>
                            <div><span class="light"></span><span>Термины</span></div>
                            <div><span class="light"></span><span>Первая игра</span></div>
                            <div><span class="light"></span><span>Глаза</span></div>
                            <div><span class="light"></span><span>Ко</span></div>
                            <div><span class="light"></span><span>Сентэ/Готэ</span></div>
                            <div><span class="light"></span><span>19 на 19</span></div>
                        </div>
                    </div>
                    <div class="tabs_panel_col" style="margin-left: 0; border-left: 1px solid #f3f3f3;
            width: 80%; line-height: 2; text-align: justify;">
                        <ul class="tabs_data">
                            <li id="go_rules_id" class="active"></li>
                            <li id="go_dictionary_id"></li>
                            <li id="go_first_game_id"></li>
                            <li id="go_eyes_id"></li>
                            <li id="go_ko_id"></li>
                            <li id="go_sente_gote_id"></li>
                            <li id="go_19_19_id"></li>
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
        $("#go_dictionary_id").load("go_dictionary.html");
        $("#go_rules_id").load("go_rules.html");
        $("#go_first_game_id").load("go_first_game.html");
        $("#go_eyes_id").load("go_eyes.html");
        $("#go_ko_id").load("go_ko.html");
        $("#go_sente_gote_id").load("go_sente_gote.html");
        $("#go_19_19_id").load("go_19_19.html");
        setTimeout(function () {
            calculate_height();
        }, 500);
    });
</script>
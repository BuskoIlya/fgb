<html prefix="og: http://ogp.me/ns#">
<head>
    <link rel="stylesheet/less" href="../../css/tab_page.less">

    <?php
    require '../blocks/set_lang.php';
    require_once '../../php/lang/lang_' . $_SESSION['lang'] . '.php';
    $website_title = $Lang['page_eu_20-21'];
    require '../blocks/head_pages.php';
    ?>

    <meta property="og:image" content="../../img/og/page_eu_20_21.jpg"/>
    <meta property="og:description" content="ФГБ: командный чемпионат Европы 2020-2021"/>
</head>
<body>
<div id="fgb_body">
    <?php
    require '../blocks/top_pages.php';
    require '../blocks/menu_pages.php';
    ?>

    <div class="inner_page">
        <div class="data_panel">
            <h1><?php echo $Lang['eu_20_21_title']?></h1>
            <div class="tabs_panel">
                <div>
                    <div class="tabs_panel_col" style="margin-right: 0">
                        <div class="tabs_menu">
                            <div><span class="light"></span><span>A</span></div>
                            <div><span class="light"></span><span>B</span></div>
                            <div><span class="light"></span><span>C</span></div>
                            <div class="active"><span class="light"></span><span>D</span></div>
                        </div>
                    </div>
                    <div class="tabs_panel_col" style="margin-left: 0; border-left: 1px solid #f3f3f3;
            width: 90%; line-height: 2; text-align: justify;">
                        <p style="margin: 0 10px">
                            &emsp;<strong>До</strong> 2011 г. команд было мало и разрешалось иметь по нескольку
                            команд от страны. При этом, соревнования проводились очно летом, т.к. для этого
                            хватало одной/двух недель. С 2011 г. разрешается иметь только одну команду от
                            страны, стран участниц стало намного больше и теперь летом очно проходит
                            только финальная часть, а отборочная к этому финалу проходит в течение года
                            заочно по интернету. Группы поделены на четыре лиги по силе команд: в лиге А -
                            самые сильные, в лиге D - самые слабые. Четыре сильнейшие команды лиги А летом
                            в очном поединке разыгрывают первые три места. Первая команда лиг B, C, D поднимается
                            на уровень выше, а последняя A, B, C опускается на уровень ниже. Вторые и
                            предпоследние команды соприкасающихся лиг играют матч за право пройти/остаться
                            в более сильной лиге.
                        </p>
                        <ul class="tabs_data" style="height: 2900px !important;">
                            <li id="eu_20_21_a_id" style="width:100%"></li>
                            <li id="eu_20_21_b_id" style="width:100%"></li>
                            <li id="eu_20_21_c_id" style="width:100%"></li>
                            <li id="eu_20_21_d_id" class="active" style="width:100%"></li>
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
            url: '../../php/read_eu_20_21.php',
            type: 'POST',
            cache: false,
            data: {'eu_group': 'A'},
            dataType: 'json',
            success: function (data) {
                eu_20_21_a = data;
                $("#eu_20_21_a_id").load("eu_20_21_a.html");
            }
        });
        $.ajax({
            url: '../../php/read_eu_20_21.php',
            type: 'POST',
            cache: false,
            data: {'eu_group': 'B'},
            dataType: 'json',
            success: function (data) {
                eu_20_21_b = data;
                $("#eu_20_21_b_id").load("eu_20_21_b.html");
            }
        });
        $.ajax({
            url: '../../php/read_eu_20_21.php',
            type: 'POST',
            cache: false,
            data: {'eu_group': 'C'},
            dataType: 'json',
            success: function (data) {
                eu_20_21_c = data;
                $("#eu_20_21_c_id").load("eu_20_21_c.html");
            }
        });
        $.ajax({
            url: '../../php/read_eu_20_21.php',
            type: 'POST',
            cache: false,
            data: {'eu_group': 'D'},
            dataType: 'json',
            success: function (data) {
                eu_20_21_d = data;
                $("#eu_20_21_d_id").load("eu_20_21_d.html");
                set_height(".tabs_panel ul", 2500);
            }
        });
    });
</script>
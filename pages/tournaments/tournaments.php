<html prefix="og: http://ogp.me/ns#">
<head>
    <link rel="stylesheet/less" href="../../css/tab_page.less">
    <link rel="stylesheet/less" href="../../css/news_pages.less">

    <?php
    require '../blocks/set_lang.php';
    require_once '../../php/lang/lang_' . $_SESSION['lang'] . '.php';
    $website_title = $Lang['page_tournaments'];
    require '../blocks/head_pages.php';
    ?>

    <meta property="og:image" content="../../img/og/page_tournaments.jpg"/>
    <meta property="og:description" content="ФГБ: турниры по го"/>
</head>
<body>
<div id="fgb_body">
    <?php
    require '../blocks/top_pages.php';
    require '../blocks/menu_pages.php';
    ?>

    <div class="inner_page">
        <div class="data_panel">
            <h1>Турниры</h1>
            <div class="tabs_panel">
                <div>
                    <div class="tabs_panel_col" style="margin-right: 0">
                        <div class="tabs_menu">
                            <div class="active"><span class="light"></span><span>2021</span></div>
                            <div><span class="light"></span><span>2020</span></div>
                            <div><span class="light"></span><span>2019</span></div>
                            <div><span class="light"></span><span>2018</span></div>
                        </div>
                    </div>
                    <div class="tabs_panel_col" style="margin-left: 0; border-left: 1px solid #f3f3f3">
                        <ul class="tabs_data">
                            <li id="2021_id" class="active" style="width:100%"></li>
                            <li id="2020_id" style="width:100%"></li>
                            <li id="2019_id" style="width:100%"></li>
                            <li id="2018_id" style="width:100%"></li>
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
<script type="text/javascript" src="../../js/news_pages.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $.ajax({
            url: '../../php/read_news.php',
            type: 'POST',
            cache: false,
            data: {'year': '2021', 'type': 'tournament',
                'is_finished': 'ALL'},
            dataType: 'json',
            success: function (data) {
                news_2021 = data;
                for (let i = 0; i < news_2021.length; i++) {
                    $('#tournament_template').tmpl(news_2021[i]).appendTo('#2021_id');
                }
                setTimeout(function () {
                    show_tabs_data();
                }, 200);
            }
        });
        $.ajax({
            url: '../../php/read_news.php',
            type: 'POST',
            cache: false,
            data: {'year': '2020', 'type': 'tournament',
                'is_finished': 'ALL'},
            dataType: 'json',
            success: function (data) {
                news_2020 = data;
                for (let i = 0; i < news_2020.length; i++) {
                    $('#tournament_template').tmpl(news_2020[i]).appendTo('#2020_id');
                }
                setTimeout(function () {
                    show_tabs_data();
                }, 200);
            }
        });
        $.ajax({
            url: '../../php/read_news.php',
            type: 'POST',
            cache: false,
            data: {'year': '2019', 'type': 'tournament',
                'is_finished': 'ALL'},
            dataType: 'json',
            success: function (data) {
                news_2019 = data;
                for (let i = 0; i < news_2019.length; i++) {
                    $('#tournament_template').tmpl(news_2019[i]).appendTo('#2019_id');
                }
            }
        });
        $.ajax({
            url: '../../php/read_news.php',
            type: 'POST',
            cache: false,
            data: {'year': '2018', 'type': 'tournament',
                'is_finished': 'ALL'},
            dataType: 'json',
            success: function (data) {
                news_2018 = data;
                for (let i = 0; i < news_2018.length; i++) {
                    $('#tournament_template').tmpl(news_2018[i]).appendTo('#2018_id');
                }
            }
        });
    });
</script>

<script type='text/x-jquery-tmpl' id='tournament_template'>
    <div class="chain_block">
      <div class="chain_icon chain_icon_tournament">
        <img src="../../${place_img}">
      </div>
      <div class="chain_data chain_data_tournament">
        <small style="vertical-align:top">
          <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
          ${short_description}
          <span class="glyphicon glyphicon-user ${is_finished}"
            style="float:right;font-size:18px"
            aria-hidden="true">${pc}</span>
        </small>
        <div style="text-align:center; margin: 5px 0">
          <a href="../../${ref}" class="color_fill ${decoration}"
            style="vertical-align:bottom">${title}</a>
        </div>
        <div>
        <i style="font-size: 13px">${address}</i>
        </div>
        <span class="chain_date">${place_name}</span>
      </div>
    </div>
</script>
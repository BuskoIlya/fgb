<html>
<head>
    <link rel="stylesheet/less" href="../../css/tab_page.less">
    <link rel="stylesheet/less" href="../../css/news_pages.less">

    <?php
    require '../blocks/set_lang.php';
    require_once '../../php/lang/lang_' . $_SESSION['lang'] . '.php';
    $website_title = $Lang['page_players'];
    require '../blocks/head_pages.php';
    ?>
</head>
<body>
<div id="fgb_body">
    <?php
    require '../blocks/top_pages.php';
    require '../blocks/menu_pages.php';
    ?>

    <div class="inner_page">
        <div class="data_panel">
            <h1>Новости</h1>
            <div class="tabs_panel">
                <div>
                    <div class="tabs_panel_col" style="margin-right: 0">
                        <div class="tabs_menu">
                            <div class="active"><span class="light"></span><span>2020</span></div>
                            <div><span class="light"></span><span>2019</span></div>
                            <div><span class="light"></span><span>2018</span></div>
                        </div>
                    </div>
                    <div class="tabs_panel_col" style="margin-left: 0; border-left: 1px solid #f3f3f3">
                        <ul class="tabs_data">
                            <li id="2020_id" class="active" style="width:100%"></li>
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
            data: {
                'year': '2020', 'type': 'ALL',
                'is_finished': 'finished'
            },
            dataType: 'json',
            success: function (data) {
                news_2020 = data;
                for (let i = 0; i < news_2020.length; i++) {
                    if (news_2020[i].type == 'match') {
                        $('#match_template').tmpl(news_2020[i]).appendTo('#2020_id');
                    } else {
                        $('#news_template').tmpl(news_2020[i]).appendTo('#2020_id');
                    }
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
            data: {
                'year': '2019', 'type': 'ALL',
                'is_finished': 'finished'
            },
            dataType: 'json',
            success: function (data) {
                news_2019 = data;
                for (let i = 0; i < news_2019.length; i++) {
                    if (news_2019[i].type == 'match') {
                        $('#match_template').tmpl(news_2019[i]).appendTo('#2019_id');
                    } else {
                        $('#news_template').tmpl(news_2019[i]).appendTo('#2019_id');
                    }
                }
            }
        });
        $.ajax({
            url: '../../php/read_news.php',
            type: 'POST',
            cache: false,
            data: {
                'year': '2018', 'type': 'ALL',
                'is_finished': 'finished'
            },
            dataType: 'json',
            success: function (data) {
                news_2018 = data;
                for (let i = 0; i < news_2018.length; i++) {
                    if (news_2018[i].type == 'match') {
                        $('#match_template').tmpl(news_2018[i]).appendTo('#2018_id');
                    } else {
                        $('#news_template').tmpl(news_2018[i]).appendTo('#2018_id');
                    }
                }
            }
        });
    });
</script>

<script type='text/x-jquery-tmpl' id='news_template'>
  <div class="chain_block">
    <div class="chain_icon chain_icon_news">
      <img src="../../${author_img}" alt="Picture">
    </div>
    <div class="chain_data chain_data_news">
<div class="news_element row">
      <div class="news_data">
        <div style="padding: 15px">
          <div class="news_img">
            <a><img src="../../${img}"></a>
          </div>
          <div style="display:table-cell;vertical-align:top;padding-left: 15px">
            <p><small class="news_date">
              <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>${date}
            </small></p>
            <p><a href="../../${ref}" class="news_title color_fill ${decoration}">${title}</a></p>
            <p class="news_text text-justify">${description}</p>
          </div>
        </div>
        <div class="news_footer">
          <small class="news_author">
            <span class="glyphicon glyphicon-user" aria-hidden="true">
              ${author}
            </span>
          </small>
        </div>
      </div>
  </div>
    </div>
  </div>

</script>

<script type='text/x-jquery-tmpl' id='match_template'>

  <div class="chain_block">
    <div class="chain_icon chain_icon_news">
      <img src="../../${author_img}" alt="Picture">
    </div>
    <div class="chain_data chain_data_match">

  <div class="match_element row">
      <div class="match_data">
        <p style="display:table-cell;margin: 0;padding-top: 10px">
          <p><small class="match_date">
            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>${date}
          </small></p>
          <p><a href="" class="match_title color_fill ${decoration}">${title}
          </a></p>
        </p>
        <div style="padding: 10px 45px;">
          <div class="match_img">
            <p><img src="../../${flag1}" alt=""></p>
            <p>${name1}</p>
            <p>${score1}</p>
          </div>
          <div class="match_img">
            <p><img src="../../${flag2}" alt=""></p>
            <p>${name2}</p>
            <p>${score2}</p>
          </div>
        </div>
        <div class="match_footer">
          <small class="match_author">
            <span class="glyphicon glyphicon-user" aria-hidden="true">
              ${author}
            </span>
          </small>
        </div>
      </div>
  </div>

    </div>
  </div>

</script>
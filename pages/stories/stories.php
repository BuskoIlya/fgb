<html>
<head>
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

    <div id="story_id" style="display: none"></div>
    <div id="stories_id" class="inner_page">
        <div class="data_panel">
            <h1>Рассказы о го</h1>
            <div>
                <div id="story_id_row1" class="row" style="margin-bottom: 15px">
                </div>
                <div id="story_id_row2" class="row" style="margin-bottom: 15px">
                </div>
                <div id="story_id_row3" class="row" style="margin-bottom: 15px">
                </div>
            </div>
        </div>
    </div>

    <?php
    require '../blocks/bottom.php';
    ?>
</div>
</body>

<script type="text/javascript" src="../../js/stories.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        let searchParams = new URLSearchParams(window.location.search)
        let page = searchParams.get('page');
        if (page == null) {
            $("#story_id").attr('style', 'display: none');
            $("#stories_id").attr('style', 'display: block');
            for (let i = 0; i < 3; i++) {
                $("#story_card_template").tmpl(stories[i]).appendTo('#story_id_row1');
                fill_key_words("#keys_id-" + (i+1), stories[i].key_words);
            }
            for (let i = 3; i < stories.length; i++) {
                $("#story_card_template").tmpl(stories[i]).appendTo('#story_id_row2');
                fill_key_words("#keys_id-" + (i+1), stories[i].key_words);
            }
        } else {
            $("#stories_id").attr('style', 'display: none');
            $("#story_id").attr('style', 'display: block');
            $("#story_id").load(page_map.get(page));
        }
    });
</script>

<script type='text/x-jquery-tmpl' id='story_card_template'>
  <div class="col-md-4">
  <div class="story_card_css">
    <p>
      <p><img src=${photo} class="photo"></p>
      <a href="?page=${story_page}" class="color_fill pink">${title}</a>
      <p>
        <small style="margin:0">
          <span class="glyphicon glyphicon-user" aria-hidden="true"
            style="vertical-align: super"></span>
          <a href="../menu/persons.php" class="color_fill green" style="padding: 0 5px">
              ${author}
          </a>
        </small>
      </p>
      <p id="keys_id-${number}" style="line-height:1.4"></p>
    </p>
  </div>
  </div>
</script>
<html>
<head>
    <?php
    require '../blocks/set_lang.php';
    require_once '../../php/lang/lang_' . $_SESSION['lang'] . '.php';
    $website_title = $Lang['page_schools'];
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
            <h1>Секции го</h1>
            <div id="school_id">
                <div id="school_id_row1" class="row" style="margin-bottom: 15px">
                </div>
                <div id="school_id_row2" class="row" style="margin-bottom: 15px">
                </div>
                <div id="school_id_row3" class="row" style="margin-bottom: 15px">
                </div>
            </div>
        </div>
    </div>

    <?php
    require '../blocks/bottom.php';
    ?>
</div>
</body>

<script type="text/javascript" src="../../js/schools.js"></script>

<script>
    $(document).ready(function () {
        for (let i = 0; i < 3; i++) {
            $("#school_card_template").tmpl(schools[i]).appendTo('#school_id_row1');
        }
        for (let i = 3; i < 6; i++) {
            $("#school_card_template").tmpl(schools[i]).appendTo('#school_id_row2');
        }
        for (let i = 6; i < schools.length; i++) {
            $("#school_card_template").tmpl(schools[i]).appendTo('#school_id_row3');
        }
    });
</script>

<script type='text/x-jquery-tmpl' id='school_card_template'>
  <div class="col-md-4">
  <div class="school_card_css">
    <p>
      <p><img src=${photo} alt="" class="photo"></p>
      <a href="${ref}" class="color_fill green">${name}</a>
      <p style="line-height:1.5"><small>${manager}</small></p>
      <p><small>${city}, ${address}</small></p>
      <p><small><i>${phone}</i></small></p>
      <a href="${vk}"><img src='../../img/icons/vk.jpg' class="vk_icon_css"></img></a>
    </p>
  </div>
  </div>
</script>

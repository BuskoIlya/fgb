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

    <div class="inner_page">
        <div class="data_panel">
            <h1>Библиотека игроков</h1>
            <div id="persons_id">
                <div id="persons_id_row1" class="row" style="margin-bottom: 15px">
                </div>
                <div id="persons_id_row2" class="row">
                </div>
            </div>
        </div>
    </div>

    <?php
    require '../blocks/bottom.php';
    ?>
</div>
</body>

<script type="text/javascript" src="../../js/persons.js"></script>

<script>
    $(document).ready(function () {
        for (let i = 0; i < 4; i++) {
            $("#person_card_template").tmpl(persons[i]).appendTo('#persons_id_row1');
        }
        for (let i = 4; i < persons.length; i++) {
            $("#person_card_template").tmpl(persons[i]).appendTo('#persons_id_row2');
        }
    });
</script>

<script type='text/x-jquery-tmpl' id='person_card_template'>
  <div class="col-md-3">
  <div class="person_card_css">
    <p>
      <p><img src=${photo} alt="" class="photo"></p>
      <a href="#" class="color_fill ${type}"
        onclick="">${name}</a>
      <p style="font-size: 14px;margin-bottom:5px">
        <img src=${flag} title=${country} width="30" height="20px"
          style="margin-right:5px;vertical-align:sub">
        ${city}
      </p>
      <p><small>${rank}</small></p>
      <p style="line-height:1.5"><small>${description}</small></p>
      <a href="${vk}"><img src='../../img/icons/vk.jpg' class="vk_icon_css"></img></a>
    </p>
  </div>
  </div>

</script>
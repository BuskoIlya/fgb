<html prefix="og: http://ogp.me/ns#">
<head>
    <?php
    require '../blocks/set_lang.php';
    require_once '../../php/lang/lang_' . $_SESSION['lang'] . '.php';
    $website_title = $Lang['page_contacts'];
    require '../blocks/head_pages.php';
    ?>

    <meta property="og:image" content="../../img/og/page_contacts.jpg"/>
    <meta property="og:description" content="ФГБ: го в Беларуси, контакты по го в Беларуси"/>
</head>
<body>
<div id="fgb_body">
    <?php
    require '../blocks/top_pages.php';
    require '../blocks/menu_pages.php';
    ?>

    <div class="inner_page">
        <div class="data_panel">
            <h1>Контакты</h1>
            <div id="contacts_id">
                <div id="contacts_id_row1" class="row" style="margin-bottom: 15px">
                </div>
                <div id="contacts_id_row2" class="row">
                </div>
            </div>
        </div>
    </div>

    <?php
    require '../blocks/bottom.php';
    ?>
</div>
</body>

<script type="text/javascript" src="../../js/contacts.js"></script>

<script>
    $(document).ready(function () {
        for (let i = 0; i < 4; i++) {
            $("#contact_card_template").tmpl(contacts[i]).appendTo('#contacts_id_row1');
        }
        for (let i = 4; i < contacts.length; i++) {
            $("#contact_card_template").tmpl(contacts[i]).appendTo('#contacts_id_row2');
        }
    });
</script>

<script type='text/x-jquery-tmpl' id='contact_card_template'>
  <div class="col-md-3">
  <div class="contact_card_css">
    <p>
      <p><img src=${photo} alt="" class="photo"></p>
      <a href="#" class="color_fill green"
        onclick="">${name}</a>
      <p><small>${rank}</small></p>
      <p style="line-height:1.5"><small>${position}</small></p>
      <p><small><i>${phone}</i></small></p>
      <p><small><i>${mail}</i></small></p>

    </p>
  </div>
  </div>
</script>

<!--a href="${vk}"><img src='../../img/icons/vk.jpg' class="vk_icon_css"></img></a-->
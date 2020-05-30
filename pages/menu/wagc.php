<html>
<head>
    <?php
    require '../blocks/set_lang.php';
    require_once '../../php/lang/lang_' . $_SESSION['lang'] . '.php';
    $website_title = $Lang['page_wagc'];
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
            <h1><?php echo $Lang['wagc_title'] ?></h1>

            <div class="table-responsive fgb_table"
                 style="text-align:center;margin: 20px 0;">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                    <tr class="active">
                        <th style="text-align:center"><?php echo $Lang['wagc_year'] ?></th>
                        <th style="text-align:center"><?php echo $Lang['wagc_place'] ?></th>
                        <th style="text-align:center">
                            <img src="../../img/icons/gold.jpg" width="20" height="20px"></img>
                            <?php echo $Lang['wagc_g'] ?>
                        </th>
                        <th style="text-align:center">
                            <img src="../../img/icons/silver.jpg" width="20" height="20px"></img>
                            <?php echo $Lang['wagc_s'] ?>
                        </th>
                        <th style="text-align:center">
                            <img src="../../img/icons/bronze.jpg" width="20" height="20px"></img>
                            <?php echo $Lang['wagc_b'] ?>
                        </th>
                    </tr>
                    </thead>
                    <tbody id="results_table_id">
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php
    require '../blocks/bottom.php';
    ?>
</div>
</body>

<script>
    $(document).ready(function () {
        $.ajax({
            url: '../../php/read_wagc.php',
            type: 'POST',
            cache: false,
            dataType: 'json',
            success: function (data) {
                for (let i = 0; i < data.length; i++) {
                    $('#wagcs_template').tmpl(data[i]).appendTo('#results_table_id');
                }
            }
        });
    });
</script>

<script type='text/x-jquery-tmpl' id='wagcs_template'>
  <tr>
    <td>${year}</td>
    <td style="text-align:left">
      <img src="${flag_country}" title="${country}" width="30" height="20px"
        style="margin-left:5px"></img>
      ${city}
    </td>
    <td style="text-align:left">
      <img src="${flag_g_country}" title="${g_country}" width="30" height="20px"
        style="margin-left:5px"></img>
      ${g_name}
    </td>
    <td style="text-align:left">
      <img src="${flag_s_country}" title="${s_country}" width="30" height="20px"
        style="margin-left:5px"></img>
      ${s_name}
    </td>
    <td style="text-align:left">
      <img src="${flag_b_country}" title="${b_country}" width="30" height="20px"
        style="margin-left:5px"></img>
      ${b_name}
    </td>
  </tr>
</script>
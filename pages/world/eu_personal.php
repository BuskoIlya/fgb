<?php
require '../blocks/set_lang.php';
require_once '../../php/lang/lang_' . $_SESSION['lang'] . '.php';
?>

<script>
    $(document).ready(function () {
        for (let i = 0; i < ue_personal.length; i++) {
            $('#eup_template').tmpl(ue_personal[i]).appendTo('#eup_table_id');
        }
    });
</script>

<script type='text/x-jquery-tmpl' id='eup_template'>
  <tr>
    <td>${year}</td>
    <td style="text-align:left">
      <img src="${flag}" title="${country}" width="30" height="20px"
        style="margin-left:10px"></img>
      ${city}
    </td>
    <td style="text-align:left">
      <img src="${g_flag}" title="${g_country}" width="30" height="20px"
        style="margin-left:10px"></img>
      ${g_name}
    </td>
  </tr>

</script>

<div>
    <div class="table-responsive fgb_table"
         style="text-align:center;margin: 20px 0">
        <table class="table table-striped table-hover table-bordered">
            <thead>
            <tr class="active">
                <th style="text-align:center"><?php echo $Lang['eup_year'] ?></th>
                <th style="text-align:center"><?php echo $Lang['eup_place'] ?></th>
                <th style="text-align:center"><?php echo $Lang['eup_winner'] ?></th>
            </tr>
            </thead>
            <tbody id="eup_table_id">
            </tbody>
        </table>
    </div>
</div>
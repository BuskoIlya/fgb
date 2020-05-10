<?php
require '../blocks/set_lang.php';
require_once '../../php/lang/lang_' . $_SESSION['lang'] . '.php';
?>

<script>
    $(document).ready(function () {
        for (let i = 0; i < ue_command.length; i++) {
            $('#euc_template').tmpl(ue_command[i]).appendTo('#euc_table_id');
        }
    });
</script>

<script type='text/x-jquery-tmpl' id='euc_template'>
  <tr>
    <td>${year}</td>
    <td style="text-align:left">
      <img src="${flag}" title="${country}" width="30" height="20px"
        style="margin-left:5px"></img>
      ${city}
    </td>
    <td style="text-align:left">
      <img src="${g_flag}" title="${g_country}" width="30" height="20px"
        style="margin-left:5px"></img>
      ${g_country}
    </td>
    <td style="text-align:left">
      <img src="${s_flag}" title="${s_country}" width="30" height="20px"
        style="margin-left:5px"></img>
      ${s_country}
    </td>
    <td style="text-align:left">
      <img src="${b_flag}" title="${b_country}" width="30" height="20px"
        style="margin-left:5px"></img>
      ${b_country}
    </td>
  </tr>
</script>

<div>
    <div class="table-responsive fgb_table"
         style="text-align:center;margin: 20px 0">
        <table class="table table-striped table-hover table-bordered">
            <thead>
            <tr class="active">
                <th style="text-align:center"><?php echo $Lang['euc_year'] ?></th>
                <th style="text-align:center"><?php echo $Lang['euc_place'] ?></th>
                <th style="text-align:center">
                    <img src="../../img/icons/gold.jpg" width="20" height="20px"></img>
                    <?php echo $Lang['euc_g'] ?>
                </th>
                <th style="text-align:center">
                    <img src="../../img/icons/silver.jpg" width="20" height="20px"></img>
                    <?php echo $Lang['euc_s'] ?>
                </th>
                <th style="text-align:center">
                    <img src="../../img/icons/bronze.jpg" width="20" height="20px"></img>
                    <?php echo $Lang['euc_b'] ?>
                </th>
            </tr>
            </thead>
            <tbody id="euc_table_id">
            </tbody>
        </table>
    </div>
</div>
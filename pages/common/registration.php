<html>
<head>
    <?php
    require '../blocks/set_lang.php';
    require_once '../../php/lang/lang_' . $_SESSION['lang'] . '.php';
    $website_title = $Lang['reg_title'];
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
        <div class="popup_window">
            <h1><?php echo $Lang['reg_title'] ?></h1>

            <form method="post">

                <p><input class="input_text"
                          type="text" id="email" value=""
                          placeholder=<?php echo $Lang['reg_email'] ?>></p>
                <p><input class="input_text"
                          type="password" id="user_password" value=""
                          placeholder=<?php echo $Lang['reg_password'] ?>></p>
                <p><input class="input_text"
                          type="text" id="family" value=""
                          placeholder=<?php echo $Lang['reg_family'] ?>></p>
                <p><input class="input_text"
                          type="text" id="name" value=""
                          placeholder=<?php echo $Lang['reg_name'] ?>></p>
                <p><input class="input_text"
                          type="text" id="father" value=""
                          placeholder=<?php echo $Lang['reg_father'] ?>></p>
                <p><input class="input_text"
                          type="date" id="birth_date" value=""
                          placeholder=<?php echo $Lang['reg_birth_date'] ?>></p>
                <p><input class="input_text"
                          type="text" id="city" value=""
                          placeholder=<?php echo $Lang['reg_city'] ?>></p>

                <p>
                    <div style="text-align: right">
                <p style="display: inline;"><input class="input_submit"
                                                   type="button" id="commit"
                                                   value=<?php echo $Lang['btn_ok'] ?>></p>
                <p style="display: inline;"><input class="input_submit"
                                         type="button" id="cancel"
                                         value=<?php echo $Lang['btn_cancel'] ?>></p>
                </p>
            </form>
        </div>
    </div>
    <?php
    require '../blocks/bottom.php';
    ?>
</div>
</body>

<script>
    $('#commit').click(function () {
        var email = $('#email').val();
        var user_password = $('#user_password').val();
        var family = $('#family').val();
        var name = $('#name').val();
        var father = $('#father').val();
        var birth_date = $('#birth_date').val();
        var city = $('#city').val();

        $.ajax({
            url: '../../php/do_register.php',
            type: 'POST',
            cache: false,
            data: {'email': email, 'user_password': user_password,
            'family': family, 'name': name, 'father': father,
            'birth_date': birth_date, 'city': city},
            dataType: 'html',
            success: function (data) {
                if (data == 'Successful') {
                    document.location.href = "error-info.php";
                } else {
                    document.location.href = "error-info.php";
                }
            }
        });
    });
    $('#cancel').click(function () {
        document.location.href = "../../index.php";
    });
</script>
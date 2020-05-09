<html>
<head>
    <?php
    require '../blocks/set_lang.php';
    require_once '../../php/lang/lang_' . $_SESSION['lang'] . '.php';
    $website_title = $Lang['login_title'];
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
            <h1><?php echo $Lang['login_title'] ?></h1>

            <form method="" action="">

                <p><input class="input_text"
                          type="text" id="email" value=""
                          placeholder=<?php echo $Lang['reg_email'] ?>></p>
                <p><input class="input_text"
                          type="password" id="user_password" value=""
                          placeholder=<?php echo $Lang['reg_password'] ?>></p>
                <p class="remember_checkbox">
                    <label>
                        <input type="checkbox" name="remember_me">
                        <?php echo $Lang['login_remember_me'] ?>
                    </label>
                </p>

                <p>
                    <div style="text-align: right">
                <p style="display: inline;"><input class="input_submit" id="commit"
                                                   type="button"
                                                   value=<?php echo $Lang['btn_ok'] ?>></p>
                <p style="display: inline;"><input class="input_submit" id="cancel"
                                                   type="button"
                                                   value=<?php echo $Lang['btn_cancel'] ?>></p>
                </p>
            </form>

            <div>
                <a style="margin: 20px 0; font-size: 11px; color: white; text-align: center"
                   href="">
                    <?php echo $Lang['login_forgot'] ?></a>
            </div>
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

        $.ajax({
            url: '../../php/authorization.php',
            type: 'POST',
            cache: false,
            data: {'email': email, 'user_password': user_password},
            dataType: 'html',
            success: function (data) {
                if (data == 'Successful') {
                    document.location.href = "../../index.php";
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
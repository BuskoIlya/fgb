<div>
    <div class="top_menu">
        <div class="lang_block">
            <?php if ($_SESSION['lang'] == 'ru'): ?>
                <div id="lang_ru" class="lang_selected" title="Русский">
                    <a href="?lang=ru">Рус</a>
                </div>
                <div id="lang_eng" class="lang" title="English">
                    <a href="?lang=en">Eng</a>
                </div>
            <?php else: ?>
                <div id="lang_ru" class="lang" title="Русский">
                    <a href="?lang=ru">Рус</a>
                </div>
                <div id="lang_eng" class="lang_selected" title="English">
                    <a href="?lang=en">Eng</a>
                </div>
            <?php
            endif;
            ?>
        </div>

        <?php /*if (!isset($_COOKIE['login']) || $_COOKIE['login'] == ''): ?>
            <div class="register_block">
                <a class="color_fill pink" href="../common/login.php">
                    <?php echo $Lang['log_in'] ?></a>
                <a class="color_fill green" href="../common/registration.php">
                    <?php echo $Lang['do_register'] ?></a>
            </div>
        <?php else: ?>
            <div class="register_block">
                <a class="color_fill blue" href="">
                    <?php echo $_COOKIE['login'] ?></a>
                <a id="exit_btn" class="color_fill gray" href="">
                        <?php echo $Lang['do_exit'] ?></a>
            </div>
        <?php endif; */?>

    </div>
    <div class="banner">
        <div class="banner_left"></div>
        <div class="banner_logo"></div>
        <div class="banner_right"></div>
    </div>
</div>

<script>
    $('#lang_ru').click(function () {
        $('#lang_ru').attr('class', 'lang_selected');
        $('#lang_eng').attr('class', 'lang');
    });
    $('#lang_eng').click(function () {
        $('#lang_eng').attr('class', 'lang_selected');
        $('#lang_ru').attr('class', 'lang');
    });

    $('#exit_btn').click(function () {
        $.ajax({
            url: '../../php/exit.php',
            type: 'POST',
            cache: false,
            data: {},
            dataType: 'html',
            success: function (data) {
                document.location.href = "../../index.php";
            }
        });
    });
</script>
<html prefix="og: http://ogp.me/ns#">
<head>
    <?php
    require '../blocks/set_lang.php';
    require_once '../../php/lang/lang_' . $_SESSION['lang'] . '.php';
    $website_title = $Lang['menu_welcome_to_go'];
    require '../blocks/head_pages.php';
    ?>

    <meta property="og:image" content="../../img/og/menu_welcome_to_go.jpg"/>
    <meta property="og:description" content="ФГБ: Краткий курс знакомства с игрой Го"/>
</head>
<body>
<div id="fgb_body">
    <?php
    require '../blocks/top_pages.php';
    require '../blocks/menu_pages.php';
    ?>
    <div class="inner_page">
        <div class="data_panel">
            <h1><?php echo $Lang['menu_welcome_to_go'] ?></h1>

            <div style="text-align:center; margin-top:30px; font-size: 16px">
                <p style="margin: 10px">
                    <small style="margin:0">
                <span class="glyphicon glyphicon-user" aria-hidden="true" style="vertical-align: super"></span>
                        <a href="?page=players-lib" class="color_fill green" style="padding:0 5px">
                            Бусько Илья
                        </a>
                    </small>
                </p>
                <p style="margin-top:30px;">
                    <iframe width="720" height="480" frameborder="0" allowfullscreen
                            src="https://www.youtube.com/embed/2Uos29KWnBc">
                    </iframe>
                </p>

                <p style="margin-top:50px;">
                    <iframe width="720" height="480" frameborder="0" allowfullscreen
                            src="https://www.youtube.com/embed/8uJxzU1P71A">
                    </iframe>
                </p>

                <p style="margin-top:50px;">
                    <iframe width="720" height="480" frameborder="0" allowfullscreen
                            src="https://www.youtube.com/embed/weEKSi1Gwu8">
                    </iframe>
                </p>

                <p style="margin-top:50px;">
                    <iframe width="720" height="480" frameborder="0" allowfullscreen
                            src="https://www.youtube.com/embed/VoT4rCqqn3Q">
                    </iframe>
                </p>

                <p style="margin-top:50px;">
                    <iframe width="720" height="480" frameborder="0" allowfullscreen
                            src="https://www.youtube.com/embed/KrMS_NzKRms">
                    </iframe>
                </p>

                <p style="margin-top:50px;">
                    <iframe width="720" height="480" frameborder="0" allowfullscreen
                            src="https://www.youtube.com/embed/e6i3L_muzqM">
                    </iframe>
                </p>

                <p style="margin-top:50px;">
                    <iframe width="720" height="480" frameborder="0" allowfullscreen
                            src="https://www.youtube.com/embed/oTLapsZrtEU">
                    </iframe>
                </p>

                <p style="margin-top:50px;">
                    <iframe width="720" height="480" frameborder="0" allowfullscreen
                            src="https://www.youtube.com/embed/UBo4tIx3mA4">
                    </iframe>
                </p>
            </div>

        </div>
    </div>

    <?php
    require '../blocks/bottom.php';
    ?>
</div>
</body>
<html>
<head>
    <?php
    require '../blocks/set_lang.php';
    require_once '../../php/lang/lang_' . $_SESSION['lang'] . '.php';
    if (!isset($_SESSION['error_text']) || $_SESSION['error_text'] == '')
        $website_title = $Lang['info_title'];
    else {
        $website_title = $Lang['error_title'];
    }
    require '../blocks/head_pages.php';
    ?>
</head>
<body>
<div id="fgb_body">
    <?php
    require '../blocks/top_pages.php';
    require '../blocks/menu_pages.php';
    ?>

    <div class="error-info_block">
        <?php
        if (!isset($_SESSION['error_text']) || $_SESSION['error_text'] == ''): ?>
            <div class="error-info_title">
                <?php echo $Lang['info_title'] ?>
            </div>
            <p><?php
                if (isset($_SESSION['info_text'])) echo $_SESSION['info_text'];
                unset($_SESSION['info_text']) ?></p>
        <?php else: ?>
            <div class="error-info_title">
                <?php echo $Lang['error_title'] ?>
            </div>
            <p><?php echo $_SESSION['error_text'];
                unset($_SESSION['error_text']) ?></p>
        <?php endif; ?>
    </div>

    <?php
    require '../blocks/bottom.php';
    ?>
</div>
</body>

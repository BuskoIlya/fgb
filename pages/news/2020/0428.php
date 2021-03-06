<html prefix="og: http://ogp.me/ns#">
<head>
    <link rel="stylesheet/less" href="../../../css/go_board.less">
    <?php
    require '../../blocks/set_lang.php';
    require_once '../../../php/lang/lang_' . $_SESSION['lang'] . '.php';
    $website_title = $Lang['page_19-20_8'];
    require '../../blocks/head_news.php';
    ?>
    <script type="text/javascript" src="../../../js/countries.js"></script>
    <script type="text/javascript" src="0428.js"></script>
    <script type="text/javascript" src="../../../js/go_board2.js"></script>

    <meta property="og:image" content="../../../img/og/20200428_belarus-kazakhstan.jpg"/>
</head>
<body>
<div id="fgb_body">
    <?php
    require '../../blocks/top_news.php';
    require '../../blocks/menu_news.php';
    ?>
    <div class="inner_page">
        <div class="data_panel">
            <h1>League D 2019/2020 - Round 8</h1>
            <div id="match_id"></div>
        </div>
    </div>
    <?php
    require '../../blocks/bottom.php';
    ?>
</div>
</body>

<script>
    $(document).ready(function () {
        $.get('../../blocks/t_match.php', function (template) {
            $(template).tmpl(m0428).appendTo('#match_id');
        });
    });
</script>
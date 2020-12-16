<html prefix="og: http://ogp.me/ns#">
<head>
    <link rel="stylesheet/less" href="../../css/books.less">

    <?php
    require '../blocks/set_lang.php';
    require_once '../../php/lang/lang_' . $_SESSION['lang'] . '.php';
    $website_title = $Lang['page_persons'];
    require '../blocks/head_pages.php';
    ?>

    <meta property="og:image" content="../../img/icons/book.jpg"/>
    <meta property="og:description" content="ФГБ: книги го"/>
</head>
<body>
<div id="fgb_body">
    <?php
    require '../blocks/top_pages.php';
    require '../blocks/menu_pages.php';
    ?>

    <div id="book_id"></div>

    <?php
    require '../blocks/bottom.php';
    ?>
</div>
</body>


<script>
    $(document).ready(function () {
        var book_id = parseInt(<?php echo $_GET['book']?>);
        $.ajax({
            url: '../../php/read_books.php',
            type: 'POST',
            cache: false,
            data: {'param': 'current_book', 'book_id': book_id},
            dataType: 'json',
            success: function (data) {
                current_book = data;
                $("#t_full_book").tmpl(current_book[0]).appendTo('#book_id');
            },
            error: function(data) {
                k = 2;
            }
        });
    });
</script>

<script type='text/x-jquery-tmpl' id='t_full_book'>
    <div class="inner_page">
        <div class="data_panel">
            <h1>${author}. "${name}"</h1>
            <div class="book_page">

                <p>
                    <p><img src="../../${img}" alt="" class="photo"></p>
                    <a href="../../books/${ref}" download
                        class="color_fill green" style="margin-top:15px">Скачать</a>
                </p>

            </div>
        </div>
    </div>
</script>
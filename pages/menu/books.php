<html prefix="og: http://ogp.me/ns#">
<head>
    <link rel="stylesheet/less" href="../../css/books.less">

    <?php
    require '../blocks/set_lang.php';
    require_once '../../php/lang/lang_' . $_SESSION['lang'] . '.php';
    $website_title = $Lang['menu_books'];
    require '../blocks/head_pages.php';
    ?>

    <meta property="og:image" content="../../img/og/menu_books.jpg"/>
    <meta property="og:description" content="ФГБ: Книги по Го"/>
</head>
<script>
    function view(id) {
        $(id).slideToggle(1000);
    }
</script>


<body>
<div id="fgb_body">
    <?php
    require '../blocks/top_pages.php';
    require '../blocks/menu_pages.php';
    ?>

    <div class="inner_page">
        <div class="data_panel">
            <h1><?php echo $Lang['mb_title'] ?></h1>

            <div class="book_part" style="margin-top: 50px">
                <h1 class="panel_title add_cursor_for_title" onclick="view('.all_books')">
                    Все книги в алфавитном порядке авторов
                </h1>
                <div class="all_books" style="display: none">
                    <div style="padding-bottom: 50px">
                        <div id="b_all_books_id"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php
    require '../blocks/bottom.php';
    ?>
</div>
</body>

<script type="text/javascript">
    $(document).ready(function () {
        $.ajax({
            url: '../../php/read_books.php',
            type: 'POST',
            cache: false,
            data: {'param': 'all'},
            dataType: 'json',
            success: function (data) {
                books_all = data;

                for (let i = 0; i < books_all.length; i++) {
                    let div_row = $('<div/>');
                    let str_id = "all_books_row" + i.toString();
                    div_row.id = str_id;
                    div_row.addClass("row");
                    div_row.attr("style", "margin-bottom: 15px");
                    for (let j = 0; j < books_all.length && j < 4; j++) {
                        $("#t_book_card").tmpl(books_all[i]).appendTo(div_row);
                        i += j + 1;
                    }
                    div_row.appendTo("#b_all_books_id");
                }
            }
        });
    });
</script>

<script type='text/x-jquery-tmpl' id='t_book_card'>
  <div class="col-md-3">
  <div class="book_card_css">
    <p>
      <p><img src="../../${img}" alt="" class="photo"></p>
      <a href="book.php?book='${id}'" class="color_fill green">${name}</a>
      <p><small><i>${author}</i></small></p>
    </p>
  </div>
  </div>
</script>


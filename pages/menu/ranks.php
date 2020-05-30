<html>
<head>
    <?php
    require '../blocks/set_lang.php';
    require_once '../../php/lang/lang_' . $_SESSION['lang'] . '.php';
    $website_title = $Lang['page_ranks'];
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
        <div class="data_panel">
            <h1><?php echo $Lang['ranks_title'] ?></h1>

            <?php
            require_once "../../php/fgb_db_connect.php";
            $sql = 'SELECT * FROM `ranks`';
            $query = $pdo->prepare($sql);
            $query->execute();
            $ranks = $query->fetchAll(PDO::FETCH_OBJ);
            ?>

            <div class="table-responsive fgb_table">
                <table class="table table-striped table-hover table-bordered"
                       style="width: 50%;text-align: center; position: relative; left: 25%">
                    <thead>
                    <tr class="active">
                        <th style="text-align: center"><?php echo $Lang['ranks_score'] ?></th>
                        <th style="text-align: center"><?php echo $Lang['ranks_level'] ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $rank = 0;
                    foreach ($ranks as $r) {
                        $rank++;
                        if ($_SESSION['lang'] == 'ru') {
                            echo "<tr>
                            <td>$r->beg - $r->end</td>
                            <td>$r->description</td>
                            </tr>";
                        } else {
                            echo "<tr>
                            <td>$r->beg - $r->end</td>
                            <td>$r->description_en</td>
                            </tr>";
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php
    require '../blocks/bottom.php';
    ?>
</div>
</body>
<html prefix="og: http://ogp.me/ns#">
<head>
    <?php
    require '../blocks/set_lang.php';
    require_once '../../php/lang/lang_' . $_SESSION['lang'] . '.php';
    $website_title = $Lang['page_players'];
    require '../blocks/head_pages.php';
    ?>

    <meta property="og:image" content="../../img/og/page_players.jpg"/>
    <meta property="og:description" content="ФГБ: рейтинг лист белорусских игроков го"/>
</head>
<body>
<div id="fgb_body">
    <?php
    require '../blocks/top_pages.php';
    require '../blocks/menu_pages.php';
    ?>
    <div class="inner_page">
        <div class="data_panel">
            <h1><?php echo $Lang['pp_title'] ?></h1>

            <div style="padding-left: 10px; margin-bottom: 25px">
                <p><i><?php echo $Lang['pp_egd_comment'] ?></i></p>
                <p><a href="http://www.europeangodatabase.eu/EGD/Find_Player.php">Europeangodatabase</a></p>
            </div>

            <?php
            require_once "../../php/fgb_db_connect.php";
            $sql = 'SELECT * FROM `by_players` ORDER BY `score` DESC';
            $query = $pdo->prepare($sql);
            $query->execute();
            $players = $query->fetchAll(PDO::FETCH_OBJ);
            ?>

            <div class="table-responsive fgb_table">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                    <tr class="active">
                        <th>№</th>
                        <th><?php echo $Lang['pp_name'] ?></th>
                        <th><?php echo $Lang['pp_city'] ?></th>
                        <th><?php echo $Lang['pp_rank'] ?></th>
                        <th><?php echo $Lang['pp_score'] ?></th>
                    </tr>
                    </thead>
                    <tbody id="players_table_id">
                    <?php
                    $place = 0;
                    foreach ($players as $p) {
                        $place++;
                        echo "<tr>
                            <td>$place</td>
                            <td>$p->name</td>
                            <td>$p->city</td>
                            <td>$p->rank</td>
                            <td>$p->score</td>
                        </tr>";
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
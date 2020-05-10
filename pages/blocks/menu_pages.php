<nav class="navbar navbar-default main_menu" role="navigation">
    <div class="container-fluid">

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class=""><a href="../../index.php">
                        <?php echo $Lang['menu_main'] ?></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php echo $Lang['menu_info'] ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=contacts"><?php echo $Lang['menu_contacts'] ?></a></li>
                        <li><a href="../../pages/menu/ranks.php">
                                <?php echo $Lang['menu_rank_system'] ?></a></li>
                        <li><a href="../../pages/info_board/info_board.php">
                                <?php echo $Lang['menu_board_info'] ?></a></li>
                        <li><a href="?page=news"><?php echo $Lang['menu_news'] ?></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php echo $Lang['menu_players'] ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="../menu/players.php">
                                <?php echo $Lang['menu_players_egf'] ?></a></li>
                        <li><a href="?page=tournaments">
                                <?php echo $Lang['menu_tournaments'] ?></a></li>
                        <li><a href="?page=players-lib">
                                <?php echo $Lang['menu_players_library'] ?></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php echo $Lang['menu_international_tournaments'] ?><b
                                class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=eu-19/20">
                                <?php echo $Lang['menu_command_ech_20192020'] ?></a></li>
                        <li><a href="../world/europe.php">
                                <?php echo $Lang['menu_european_chs'] ?></a></li>
                        <li><a href="../menu/wagc.php">
                                <?php echo $Lang['menu_world_chs'] ?></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php echo $Lang['menu_study'] ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=schools"><?php echo $Lang['menu_schools'] ?></a></li>
                        <li><a href="?page=go-stories"><?php echo $Lang['menu_stories'] ?></a></li>
                        <li><a href="?page=go-manual"><?php echo $Lang['menu_manual'] ?></a></li>
                        <!--li><a href="?page=go-books">Литература</a></li-->
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php echo $Lang['menu_belarus'] ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=by-minsk"><?php echo $Lang['menu_minsk'] ?></a></li>
                        <!--li><a href="?page=by-vitebsk">Витебск</a></li>
                        <li><a href="?page=by-brest">Брест</a></li>
                        <li><a href="?page=by-gomel">Гомель</a></li>
                        <li><a href="?page=by-grodno">Гродно</a></li>
                        <li><a href="?page=by-mogilev">Могилёв</a></li-->
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

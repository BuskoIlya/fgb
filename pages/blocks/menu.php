<nav class="navbar navbar-default main_menu" role="navigation">
    <div class="container-fluid">

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class=""><a href="index.php">
                        <?php echo $Lang['menu_main'] ?></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php echo $Lang['menu_info'] ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="pages/menu/contacts.php"><?php echo $Lang['menu_contacts'] ?></a></li>
                        <li><a href="pages/menu/ranks.php"><?php echo $Lang['menu_rank_system'] ?></a></li>
                        <li><a href="pages/info_board/info_board.php"><?php echo $Lang['menu_board_info'] ?></a></li>
                        <li><a href="pages/news/news.php"><?php echo $Lang['menu_news'] ?></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php echo $Lang['menu_players'] ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="pages/menu/players.php">
                                <?php echo $Lang['menu_players_egf'] ?></a></li>
                        <li><a href="pages/tournaments/tournaments.php">
                                <?php echo $Lang['menu_tournaments'] ?></a></li>
                        <li><a href="pages/menu/persons.php">
                                <?php echo $Lang['menu_players_library'] ?></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php echo $Lang['menu_international_tournaments'] ?><b
                                class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="pages/world/eu_19_20.php">
                                <?php echo $Lang['menu_command_ech_20192020'] ?></a></li>
                        <li><a href="pages/world/eu_20_21.php">
                                <?php echo $Lang['menu_command_ech_20202021'] ?></a></li>
                        <li><a href="pages/world/europe.php">
                                <?php echo $Lang['menu_european_chs'] ?></a></li>
                        <li><a href="pages/menu/wagc.php">
                                <?php echo $Lang['menu_world_chs'] ?></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php echo $Lang['menu_study'] ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="pages/schools/schools.php">
                                <?php echo $Lang['menu_schools'] ?></a>
                        </li>
                        <li><a href="pages/stories/stories.php">
                                <?php echo $Lang['menu_stories'] ?></a>
                        </li>
                        <li><a href="pages/gomanual/go_manual.php">
                                <?php echo $Lang['menu_manual'] ?></a>
                        </li>

                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php echo $Lang['menu_courses'] ?></a>
                            <ul class="dropdown-menu">
                                <li><a href="pages/menu/welcome_to_go.php">
                                        <?php echo $Lang['menu_welcome_to_go'] ?></a>
                                </li>
                            </ul>
                        </li>

                        <li><a href="pages/menu/books.php">
                                <?php echo $Lang['menu_books'] ?></a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php echo $Lang['menu_belarus'] ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="pages/belarus/minsk.php"><?php echo $Lang['menu_minsk'] ?></a></li>
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

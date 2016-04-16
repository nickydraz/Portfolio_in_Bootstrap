<?php exec("cd /var/www/html/test.ndraz.com && git pull origin master");?>
    <html>

    <head>
        <?php require 'includes/style.php'; ?>
            <title>Home | Nicholas Drazenovic</title>
    </head>

    <body>
        <!-- Begin header and navbar for page -->
        <header class="navbar navbar-static-top navbar-inverse hidden-xs">
            <div class="container">
                <a id="logo" href='#'>Nicholas Drazenovic</a>
                <nav>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href='#'>Home</a>
                        </li>
                        <li>
                            <a href='#'>Courses</a>
                        </li>
                        <li>
                            <a href='#'>About</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- End navbar -->

        <!-- Begin header and navbar for page -->
        <header class="navbar navbar-static-top navbar-inverse visible-xs-inline">
            <div class="container">

                <nav>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href='#'><span class="glyphicon glyphicon-home"></span></a>
                        </li>
                        <li>
                            <a href='#'><span class="glyphicon glyphicon-book"></span></a>
                        </li>
                        <li>
                            <a href='#'><span class="glyphicon glyphicon-info-sign"></span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- End navbar -->
        <!-- Begin main content -->
        <div class='container'>
            <div class='text-center jumbotron'>
                <h2>Featured Projects</h2>
                <p class='lead'>A few select projects from various Computer Science courses</p>
            </div>

            <!--
        Begin Showcase
        These will be hardcoded for now,
        but eventually will be randomly selected
        from a pool
        -->
            <div class='row text-center'>
                <div class='well col-md-4 col-md-offset-1'>
                    <a href='#'><img class='img-rounded img-responsive' alt='Screenshot of Vader Emporium Project' src='images/vader.png' /></a>
                    <p class='lead'>Vader's Emporium</p>
                    <p>An online storefront built with Javascript, PHP, and MySQL</p>
                </div>
                <div class='well col-md-4 col-md-offset-2'>
                    <a href='#'>
                        <a href='#'><img class='img-rounded img-responsive' alt='Screenshot of Javascript Yahtzee Project' src='images/yahtzee.png' /></a>
                        <p class='lead'>Multiplayer Yahtzee</p>
                        <p>Multiplayer Yahtzee game built with Javascript. It's on the moon!</p>
                    </a>
                </div>
            </div>
        </div>
        <!-- End main content -->
    </body>

    </html>

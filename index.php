<html>

<head>
    <?php require 'includes/style.php'; ?>
        <title>Home | Nicholas Drazenovic</title>
</head>

<body>
    <!-- Begin header and navbar for page -->
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class='navbar-brand hidden-xs' id="logo" href='/index.php'>Nicholas Drazenovic</a>
                <a class='navbar-brand visible-xs' id="logo" href='/index.php'>N.D.</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
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

            </div>
            <!--/.navbar-collapse -->
        </div>
    </nav>

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

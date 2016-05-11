<html>

<head>
    <!-- Include the needed styles and other files -->
    <?php require 'includes/style.php'; ?>
        <title>Home | Nicholas Drazenovic</title>
</head>

<body>

    <!-- Include the navbar -->
    <?php require 'includes/navbar.php'; ?>

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
                    <p>An online storefront built with Javascript, PHP, and MySQL.</p>
                </div>
                <div class='well col-md-4 col-md-offset-2'>
                    <a href='#'>
                        <a href='#'><img class='img-rounded img-responsive' alt='Screenshot of Javascript Yahtzee Project' src='images/yahtzee.png' /></a>
                        <p class='lead'>Multiplayer Yahtzee</p>
                        <p>Multiplayer Yahtzee game built with Javascript.</p>
                    </a>
                </div>
            </div>
        </div>
        <!-- End main content -->

        <!-- Include the footer -->
        <?php require 'includes/footer.php'; ?>
</body>

</html>

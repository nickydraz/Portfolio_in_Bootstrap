<!-- Begin header and navbar for page -->
<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <a class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class='navbar-brand hidden-xs' id="logo" href='/index.php'><img class='img-responsive main-logo' src='/images/logo-lg.png' /></a>
            <a class='navbar-brand visible-xs' id="logo" href='/index.php'><img class='img-responsive mobile-logo' src='/images/mobile-logo-lg.png' /></a>
        </a>
        <div id="navbar" class="navbar-collapse collapse text-right">
            <ul class="nav navbar-nav navbar-right">
                <li role="presentation" id="Home">
                    <a href='/index.php'>Home</a>
                </li>
                <li role="presentation" id="Courses">
                    <a href='/courses.php'>Courses</a>
                </li>
                <li role="presentation" id="About">
                    <a href='/about.php'>About</a>
                </li>
            </ul>

        </div>
        <!--/.navbar-collapse -->
    </div>
</nav>
<script>
    determineActive();
</script>

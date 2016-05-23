<html>

<head>
    <!-- Include the needed styles and other files -->
    <?php require 'includes/style.php'; ?>
        <title>About | Nicholas Drazenovic</title>
</head>

<body class="aboutBody img-responsive">
    <!-- Include the navbar -->
    <?php require 'includes/navbar.php'; ?>

        <br>

        <div class="row">
            <div class="col-sm-6 col-sm-offset-2 text-center" id="tagLine">
                <div id="box">
                    <div class="corner top left"></div>
                    <div class="corner top right"></div>
                    <div class="content">
                        <h3>Front-End Developer With Back-End Foundations</h3></div>
                    <div class="corner bottom left"></div>
                    <div class="corner bottom right"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-4 col-xs-offset-4 col-sm-2 col-sm-offset-0 profilePic">
                <img class="img-circle" id="profilePic" alt="profile picture of Nicholas Drazenovic" src="images/profile_pic.jpg">
            </div>

            <div class="col-xs-12 col-sm-8 col-sm-offset-1 well">
                <h4><lead>Nicholas Drazenovic - Front-End Developer</lead></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras scelerisque in eros sed viverra. Donec eget pellentesque orci, sed porta nunc. Aenean aliquam elit eget nulla auctor pharetra eget ac elit. Proin posuere, neque id ultrices pulvinar, justo nunc egestas nunc, at pellentesque enim libero in mauris. Integer arcu mi, mollis fringilla arcu vitae, mattis consequat nibh. Donec sed justo risus. Ut id elit a massa tristique molestie. Fusce elit odio, ultrices euismod massa ac, porta ullamcorper dolor. Suspendisse tellus est, vulputate sit amet feugiat id, molestie id ligula. Aenean ac viverra nibh, eu volutpat nibh. Morbi vitae rhoncus lorem. Mauris ac volutpat enim. Nam tempor sem lacus, sit amet maximus risus maximus consectetur. Phasellus ac mattis tellus, vitae accumsan ligula. Mauris vulputate sed mi quis condimentum. Nulla viverra nisl ut nunc volutpat, quis placerat odio facilisis. Nullam massa quam, ultrices a ante sed, rutrum mattis dui. Phasellus venenatis sem placerat turpis scelerisque, eget consequat felis hendrerit. Fusce non mi nec nibh ullamcorper rhoncus et a lectus. Duis id elementum eros. Quisque luctus aliquet sollicitudin. Curabitur cursus vulputate nisl, a pharetra turpis rutrum quis. Maecenas mattis tellus nunc, a auctor nunc egestas ac. Aliquam nec eros iaculis odio maximus pretium. Nam euismod, nunc sed semper pretium, nunc purus lacinia sapien, nec dictum tellus mi aliquam dolor. In nec ante facilisis nunc vehicula convallis. Mauris congue lacus nec elit fringilla, ut molestie sem pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur eu vulputate sem. Maecenas rutrum nulla placerat, pellentesque erat non, scelerisque erat. Proin ultricies urna non erat vehicula, quis luctus sem tempor. Sed laoreet convallis mauris sed cursus. Sed quis vehicula purus. Praesent vel dolor nec dolor vulputate laoreet. Maecenas in vestibulum metus. Integer non diam aliquam, cursus mi et, sodales mi. Generated 3 paragraphs, 299 words, 1990 bytes of Lorem Ipsum</p>
            </div>
        </div>

        <!-- Include the footer -->
        <?php require 'includes/footer.php'; ?>

            <script>
                $(document).ready(function () {
                    $(window).resize(function () {
                        var viewportWidth = $(window).width();
                        if (viewportWidth < 700) {
                            $("#profilePic").addClass("img-responsive");
                        } else {
                            $("#profilePic").removeClass("img-responsive");
                        }
                    });

                    $(window).on('load', function () {
                        var viewportWidth = $(window).width();
                        if (viewportWidth < 700) {
                            $("#profilePic").addClass("img-responsive");
                        } else {
                            $("#profilePic").removeClass("img-responsive");
                        }
                    });
                })
            </script>
</body>

</html>

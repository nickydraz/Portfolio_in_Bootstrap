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
                <p>My name is Nicholas Drazenovic. I am a Spring 2016 graduate of North Central College, after studying English&mdash; with a concentration in writing&mdash; and Computer Science.
			    <br>
                <br>
                This site showcases some of the projects that I have developed throughout my Computer Science courses.
			    <br>
                <br>
                Below, you will find links to my resume and my LinkedIn profile.
			    <br>
                <br>
                Feel free to contact me at <a href="mailto:njdrazenovic@gmail.com">njdrazenovic@gmail.com</a>
			    <br>
                <br>
                <a href="documents/N_Drazenovic_Resume.pdf" target="_blank">Click here to view my resume</a>
			    <br>
                <br>
                <a href="https://www.linkedin.com/pub/nicholas-drazenovic/b8/565/b5" target="_blank">Click here to view my LinkedIn Profile</a>
            </p>
            </div>
        </div>

        <!-- Include the footer -->
        <?php require 'includes/footer.php'; ?>

            <script>
            //jQuery to handle properly rearranging elements based on screen size
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

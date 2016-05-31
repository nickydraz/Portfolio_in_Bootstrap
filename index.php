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
                <p class='lead'>A couple select projects from various Computer Science courses</p>
            </div>
        </div> <!-- End container -->

        <!-- Begin featured projects -->
        <?php

        //Grab all the projects from the database
        include 'Courses/allCourses.php';

        //Generate two random indices for featured courses
        $index1 = rand(0, sizeof($allCourses) - 1);
        $index2 = rand(0, sizeof($allCourses) - 1);

        //Make sure they aren't the same
        while ($index1 == $index2) {
            $index2 = rand(0, sizeof($allCourses) - 1);
        }

        //Insert into HTML
        ?>
            <div class="row">
                <div class="col-xs-12">
                    <div class='row text-center'>
                        <div class='well col-md-4 col-md-offset-1'>
                            <a href='Courses/projectDetailed.php?project_id=<?php echo $allCourses[$index1]['project_id'];?>'><img class='img-rounded img-responsive' src='<?php echo $allCourses[$index1]['ImageLink'];?>' /></a>
                            <p class='lead'>
                                <?php echo $allCourses[$index1]['Title']?>
                            </p>
                            <p>
                                <?php
                                //truncate the description string if it is over 125 characters
                                $finalString = $allCourses[$index1]['Description'];

                                if (strlen($allCourses[$index1]['Description']) > 125) {
                                    $finalString = substr($allCourses[$index1]['Description'], 0, 125).'...';
                                }
                                echo $finalString; ?>
                            </p>
                        </div>
                        <div class='well col-md-4 col-md-offset-2'>
                            <a href='Courses/projectDetailed.php?project_id=<?php echo $allCourses[$index2]['project_id'];?>'><img class='img-rounded img-responsive' src='<?php echo $allCourses[$index2]['ImageLink'];?>' /></a>
                            <p class='lead'>
                                <?php echo $allCourses[$index2]['Title']?>
                            </p>
                            <p>
                                <?php
                                //truncate the description string if it is over 125 characters
                                $finalString = $allCourses[$index2]['Description'];

                                if (strlen($allCourses[$index2]['Description']) > 125) {
                                    $finalString = substr($allCourses[$index2]['Description'], 0, 125).'...';
                                }
                                echo $finalString; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <!-- End featured projects -->

        <!-- Include the footer -->
        <?php require 'includes/footer.php'; ?>
</body>

</html>

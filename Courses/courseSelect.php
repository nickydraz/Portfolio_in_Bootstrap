<?php

    $server = "localhost";
    $username = "web";
    $password = "ndrazdev";
    $database = "course_projects";

    //Connect to the database
    $con = mysqli_connect($server, $username, $password, $database);

    if (mysqli_connect_errno())
    {
        echo "Failed to connect to the ".$database." database: ".mysqli_connect_error();
    }

    $course = $_GET["currCourse"];
    $sql =  "SELECT * FROM Projects WHERE Course = '$course';";
    $result = mysqli_query($con, $sql);

    $countSql = "SELECT Course, count(1) FROM Projects WHERE Course = '$course'; ";
    $count = mysqli_num_rows($result);
    ?>
    <div class='row text-center'>
        <div class="row">
        <?php
            //If there is only one project in the course,
            //make it larger so it displays better on the page
            if ($count == 1)
            {
                $row = mysqli_fetch_assoc($result);
                ?>
                <div class='well col-md-6 col-md-offset-3 course-listing'>
                    <a href='Courses/projectDetailed.php?project_id=<?php echo $row["project_id"] ?>'><img class='img-rounded img-responsive' src='<?php echo $row["ImageLink"] ?>' /></a>
                    <p class='lead'>
                        <?php echo $row["Title"]?>
                    </p>
                    <p>
                        <?php echo $row["Description"] ?>
                    </p>
                </div>
            <?php }
            else
            {
                //More than one project in the course,
                //format as 2 projects per row

                //Counter for the results
                $counter = 0;
                while ($counter < $count) {
                    //Cycle through the results
                    $row = mysqli_fetch_assoc($result);
                    $counter++;

                    //Logic for formatting
                    $needRowStart = false;
                    if ($counter % 2 != 0) {
                        $offset = 1;
                        $needRowStart = true;
                    }
                    else {
                        $offset = 2;
                        $needRowStart = false;
                    }
                    //Insert row div if needed
                    if ($needRowStart)
                    {
                        echo '<div class="row">';
                    }
                    ?>
                    <div class='well col-md-4 col-md-offset-<?php echo $offset; ?> course-listing '>
                        <a href='Courses/projectDetailed.php?project_id=<?php echo $row["project_id"] ?>'><img class='img-rounded img-responsive' src='<?php echo $row["ImageLink"] ?>' /></a>
                        <p class='lead'>
                            <?php echo $row["Title"]?>
                        </p>
                        <p>
                            <?php echo $row["Description"] ?>
                        </p>
                    </div>
                    <?php
                    //Insert closing row div tag if needed
                    if (!$needRowStart) {
                        echo '</div>';
                    }
                }//end while
            }//end else
         ?>
        </div>
    </div>

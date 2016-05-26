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
        <?php if ($count == 3) {
            $counter = 3;
            while ($row = mysqli_fetch_assoc($result))
            {
                $counter-- ?>
            <div class='well col-md-2 col-md-offset-<?php echo max($counter, 1) ?> course-listing '>
                <a href='<?php echo $row[ "Link"] ?>' target="_blank"><img class='img-rounded img-responsive' src='<?php echo $row["ImageLink"] ?>' /></a>
                <p class='lead'>
                    <?php echo $row["Title"]?>
                </p>
                <p>
                    <?php echo $row["Description"] ?>
                </p>
            </div>
            <?php } }
            else if ($count == 2) {
        $counter = 0;
        while ($row = mysqli_fetch_assoc($result)) { $counter++; ?>
                <div class='well col-md-4 col-md-offset-<?php echo min($counter, 3) ?> course-listing '>
                    <a href='<?php echo $row[ "Link"] ?>' target="_blank"><img class='img-rounded img-responsive' src='<?php echo $row["ImageLink"] ?>' /></a>
                    <p class='lead'>
                        <?php echo $row["Title"]?>
                    </p>
                    <p>
                        <?php echo $row["Description"] ?>
                    </p>
                </div>
                <?php } } else if ($count == 1) { while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class='well col-md-6 col-md-offset-3 course-listing'>
                        <a href='<?php echo $row["Link"] ?>' target="_blank"><img class='img-rounded img-responsive' src='<?php echo $row["ImageLink"] ?>' /></a>
                        <p class='lead'>
                            <?php echo $row["Title"]?>
                        </p>
                        <p>
                            <?php echo $row["Description"] ?>
                        </p>
                    </div>
                    <?php }
}?>
    </div>

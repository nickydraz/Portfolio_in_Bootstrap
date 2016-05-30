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
    $sql =  "SELECT * FROM Projects;";
    $result = mysqli_query($con, $sql);

    //Array to be returned with the all the courses
    $allCourses = [];

    $counter = 0;
    while ($row = mysqli_fetch_assoc($result))
    {
        $allCourses[$counter] = $row;
        $counter++;
    }
    ?>

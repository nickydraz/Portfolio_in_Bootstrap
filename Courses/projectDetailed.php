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

    $id = $_GET["project_id"];
    $sql =  "SELECT * FROM Projects WHERE project_id = '$id';";
    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_assoc($result);
?>

<html>
<head>
    <!-- Include the needed styles and other files -->
    <?php require '../includes/head.php'; ?>
    <title>Project Details | Nicholas Drazenovic</title>
</head>

<body>

    <!-- Include the navbar -->
    <?php require '../includes/navbar.php'; ?>

    <div class="container-fluid">
        <div class="row well">
            <div class="col-md-7">
                    <a href='<?php echo $row["Link"] ?>' target="_blank"><img class='img-rounded img-responsive img-thumbnail' src='../<?php echo $row["ImageLink"] ?>' /></a>
            </div>
            <div class="col-md-5">
                <p class='lead'>
                    <?php echo $row["Title"]?>
                </p>
                <p>
                    <?php echo $row["detailed_description"] ?>
                </p>
            </div>
        </div>
    </div>

    <!-- Include the footer -->
    <?php require '../includes/footer.php'; ?>
</body>

</html>

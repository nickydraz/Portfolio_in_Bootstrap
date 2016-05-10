<?php $course;

if ($_GET["course"] == null)
{
    $course="Courses/csc215.php";
}
else {
   $course = "Courses/".$_GET["course"].".php"; 
}




?>
<html>

<head>
    <!-- Include the needed styles and other files -->
    <?php require 'includes/style.php'; ?>
        <title>Courses | Nicholas Drazenovic</title>
</head>

<body>

    <!-- Include the navbar -->
    <?php require 'includes/navbar.php'; ?>
    
    <!-- Begin the main content -->
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <ul class="pagination">
                    <li><a href="courses.php?course=csc115">CSC 115</a></li>
                    <li id="215li"><a href="courses.php?course=csc215">CSC 215</a></li>
                    <li><a href="courses.php?course=csc415">CSC 415</a></li>
                    <li><a href="courses.php?course=csc425">CSC 425</a></li>
                </ul>
            </div>
        </div><!--End row -->
        
        <!-- insert the proper course listing -->
        <?php include $course;?>
    </div>
    


</body>

</html>

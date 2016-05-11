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
                <div class="col-xs-12">
                    <h4 class="text-center">Please select a course to view project samplings.</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 hidden-xs text-center">
                    <ul class="pagination" id="courseListings">
                        <li id="CSC115" onclick="determineCourse('CSC115');"><a>CSC 115</a></li>
                        <li id="CSC215" onclick="determineCourse('CSC215');"><a>CSC 215</a></li>
                        <li id="CSC415" onclick="determineCourse('CSC415');"><a>CSC 415</a></li>
                        <li id="CSC425" onclick="determineCourse('CSC425');"><a>CSC 425</a></li>
                    </ul>
                </div>
                <div class="col-xs-10 col-xs-offset-1 visible-xs-block visible-sm-block">
                    <form class="form-group">
                        <select class="form-control" onchange="determineCourse(this.value)">
                            <option value="CSC115">CSC 115</option>
                            <option value="CSC215">CSC 215</option>
                            <option value="CSC415">CSC 415</option>
                            <option value="CSC425">CSC 425</option>
                        </select>
                    </form>
                </div>
            </div>
            <!--End row -->

            <!-- insert the proper course listing -->
            <!-- Javascript will determine what fills this div.
                    JQuery will load the content of the course's page
                -->
            <div id="selectedCourseContent">
            </div>
        </div>



</body>

</html>

//Basic functions for the website

//Function to determine active page for the nav bar
function determineActive(linkName) {
    var currentTitle = "";
    var fullTitle = document.title;

    //Loop through to get first part of title,
    //which indicates what page the user is on
    for (var i = 0; fullTitle.charAt(i) != ' '; i++) {
        currentTitle += fullTitle.charAt(i);
    }
    //Find that element in the navbar, and set it to active
    document.getElementById(currentTitle).className += " active";
}

//Function to switch the content of the courses page
//based on which course was selected
function determineCourse(currCourse) {

    //Clear the current active
    var arr = document.getElementById("courseListings").childNodes;
    arr[1].className = "";
    arr[3].className = "";
    arr[5].className = "";
    arr[7].className = "";

    //Set the appropriate one as active
    $("#" + currCourse).addClass("active");
    //Load the content
    $("#selectedCourseContent").load("/Courses/" + currCourse + ".html");
}

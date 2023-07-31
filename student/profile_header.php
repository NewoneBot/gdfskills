<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <?php 
    
include_once 'links.php';
include 'connection.php';

?>

</head>
<style>
.navbar-light .navbar-nav .nav-link {
    color: rgb(0 0 0) !important;
    FONT-WEIGHT: 500;
    font-size: smaller;

    padding: 5px;

}

.navbar-light .navbar-nav .nav-link:hover {
    color: orange !important;
    FONT-WEIGHT: 500;
}
</style>

<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand" href="#"><img src="gdf_logo.png" alt="" style=" height:60px; weight:80px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item active">
                    <a class="nav-link" href="student-home.php"> HOME<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="student-assignments.php"> ASSIGNMENTS<span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="student-books.php">BOOKS</a>
                </li>
                <!-- <li class="nav-item">
        <a class="nav-link" href="#">ASK EXPERT</a>
      </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="#">PERFORMANCE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="online-exam.php">ONLINE EXAM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="student-project.php">PROJECTS</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Links
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="https://www.gst.gov.in/" target="_new">GST Portal</a>
                        <a class="dropdown-item" href="https://www.incometaxindiaefiling.gov.in/home"
                            target="_new">Income Tax Portal</a>
                        <a class="dropdown-item" href="https://www.nsdl.co.in/" target="_new">NDSL Portal</a>
                        <a class="dropdown-item" href="https://www.esic.in/" target="_new">ESIC Portal</a>
                        <a class="dropdown-item" href="https://www.kotak.com/" target="_new">Banking Portal</a>
                        <a class="dropdown-item" href="https://www.xe.com/" target="_new">Forex Portal</a>
                        <a class="dropdown-item" href="http://indiasbestjobs.com/" target="_new">Job Portal</a>
                        <a class="dropdown-item" href="http://www.gdfskills.com" target="_new">GDFSkills Portal</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gdf-videos.php">VIDEOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="online-class.php">ONLINE CLASSES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CERTIFICATE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="fee-pay.php">UPI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://payu.in/web/0D6A7AAA3331AA012B2D56F7E4E84F02">PAY NOW</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="fee-status.php">Fee Status</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Profile
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="student-document.php">Upload Document</a>
                        <a class="dropdown-item" href="student-feedback.php">Upload Document</a>
                        <a class="dropdown-item" href="logout.php">LOG OUT</a>

                    </div>
                </li>

            </ul>
        </div>
    </nav>

</body>
<script>
$(document).ready(function() {
    $('body').bind('cut copy paste', function(e) {})
    $("body").on("contextmenu", function(e) {
        return false;
    })
})
</script>

</html>
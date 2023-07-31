<?php
session_start();
if(isset($_SESSION["registeration_no"]))
{

?>

<head>
    <title>Student Books:: GDF</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="GDF" />

    <?php include 'links.php'; ?>
    <style>

    </style>
</head>

<body oncontextmenu="return false;">
    <!-- home -->
    <div id="home" class="inner-gdf-page">
        <div class="overlay-innerpage">
            <?php include 'profile_header.php'; ?>
        </div>
        <!-- //banner -->
    </div>
    <div class="container py-5">
        <div class="row ">
            <div class="col-md-12 custyle">
                <h4 class=" text-primary"> Books are not available</h4>
                <embed src="books/computer-book.pdf" width="100%" height="600px" type="application/pdf" />
            </div>
        </div>
    </div>


    <!-- footer -->

    <!-- //footer -->
    <!-- copyright -->

    <!-- //copyright -->
    <script>
    $(document).ready(function() {


    });
    </script>
</body>
<?php
}
else
{
  header("Location:../login.php");
}
?>
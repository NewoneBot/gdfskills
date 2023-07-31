<?php
session_start();
if(isset($_SESSION["registeration_no"]))
{
?>

<head>
    <title>Student Videos:: GDF</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="GDF" />
    <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->

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

    <div class="container py-3">
        <div class="row ">
            <div class="col-md-12 custyle">
                <h2 class=" text-center bg-primary" style="color:white;">Tally Classes</h2>
                <table class="table">
                    <tr>
                        <td>
                            <figure>
                                <iframe width="460" height="315" src="https://www.youtube.com/embed/El3aXH-uYng"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                <figcaption class="text-danger">Tally GSTR -1 Full Process</figcaption>
                            </figure>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="container py-3">
        <div class="row ">
            <div class="col-md-12 custyle">
                <h2 class=" text-center bg-primary" style="color:white;">Excel Classes</h2>
                <table class="table">
                    <tr>
                        <td>
                            <figure>
                                <iframe width="460" height="315" src="https://www.youtube.com/embed/l_RFsu8Bqxk"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                <figcaption class="text-danger">Excel basic class DAY - 1 Introduction of Excel
                                </figcaption>
                            </figure>
                        </td>
                        <td>
                            <figure>
                                <iframe width="460" height="315" src="https://www.youtube.com/embed/KaX3R7RJZBo"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                <figcaption class="text-danger">Excel basic class DAY 2 Cell Reference Basic
                                </figcaption>
                            </figure>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="copy_right p-3 d-flex justify-content-around">

        <p>© 2016 GDF. All rights reserved
        </p>

    </div>
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
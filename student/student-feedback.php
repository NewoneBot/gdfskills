<?php
session_start();
if(isset($_SESSION["registeration_no"]))
{
?>

<head>
    <title>Student Feedback:: GDF</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="GDF" />

    <?php include 'links.php'; ?>
    <style>
    .theory-table {
        width: 100%;
        height: auto;
    }

    .lab-table {
        width: 100%;
        height: auto;
    }

    .center-table {
        width: 100%;
        height: auto;
    }
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
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-success btn-block" id="theoryClassBtn">Theory Class +</button>
                <div class="theory-table" id="theory-table">
                    <table class="table table-bordered" id="theoryTable">
                        <tr>
                            <th>Faculty Name</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Module Name</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Batch ID</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Center Name</th>
                            <td></td>
                        </tr>

                        <tr>
                            <th>The trainer was knowledgeable about the training topics</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>The overall performance of the trainer</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>The training experience</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>The time allotted for the training was sufficient</th>
                            <td></td>
                        </tr>

                        <tr>
                            <th>The responsiveness of teacher</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Did your Teacher guide you properly</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Did you clear your concepts properly</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Behavior Of Trainer With you</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Behavior Of Trainer With you</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Please share Your Valuable comments</th>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-success btn-block" id="labClassBtn">Lab Class +</button>
                <div class="lab-table" id="lab-table">
                    <table class="table table-bordered">
                        <tr>
                            <th>Faculty Name</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Module Name</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Batch ID</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Center Name</th>
                            <td></td>
                        </tr>

                        <tr>
                            <th>The trainer was knowledgeable about the training topics</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>The overall performance of the trainer</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>The training experience</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>The computer systems of the practical Lab were Properly work </th>
                            <td></td>
                        </tr>

                        <tr>
                            <th>Did your Teacher guide you properly</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Did you clear your concepts properly</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Behavior Of Trainer With you</th>
                            <td></td>
                        </tr>

                        <tr>
                            <th>Please share Your Valuable comments</th>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-success btn-block" id="centerBtn">Center Feedback +</button>
                <div class="center-table" id="center-table">
                    <table class="table table-bordered">
                        <tr>
                            <th>Center Name</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Center Manager Name</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Your Counselor Name</th>
                            <td></td>
                        </tr>

                        <tr>
                            <th>Classes start on time</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Cleaning at center </th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>The responsiveness of non teaching staff.</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>The infrastructure and the accommodation were</th>
                            <td></td>
                        </tr>

                        <tr>
                            <th>How would you rate the Training Facilities for this course</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Were you satisfied/happy with your experience at</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Name of Chairman Of GDF Skills</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Behavior of management with you</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>What did you find especially good about this course?</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>How could the course be improved in the future?</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>What did you like most about this training?</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Please share other comments or expand on previous responses here</th>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <!-- //copyright -->
    <script>
    $(document).ready(function() {
        $("#theory-table").hide();
        $("#lab-table").hide();
        $("#center-table").hide();

        $("#theoryClassBtn").click(function() {
            $("#theory-table").slideToggle(5000);
        });
        $("#labClassBtn").click(function() {
            $("#lab-table").slideToggle(5000);
        });
        $("#centerBtn").click(function() {
            $("#center-table").slideToggle(5000);
        });

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
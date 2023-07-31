<?php
session_start();
if(isset($_SESSION["registeration_no"]))
{
?>

<head>
    <title>Student Payment Detail:: GDF</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="GDF" />
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <?php include 'links.php'; ?>
    <style>

    </style>
</head>

<body oncontextmenu="return false;">
    <!-- home -->
    <div id="home" class="inner-gdf-page">
        <div class="overlay-innerpage">
            <?php include 'menu.php'; ?>
        </div>
        <!-- //banner -->
    </div>
    <section class="about py-5">
        <div class="container py-md-2">
            <h3 class="tittle-gdf text-center">Enter Payment Details</h3>
            <div class="row py-5">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form action="successDB.php" method="post">
                        <div class="form-group">
                            <label for="usr">Registration No:</label>
                            <input type="text" class="form-control" name="sregNo"
                                value="<?php echo $_SESSION["student_reg_no"];?>" id="usr" required readonly>
                        </div>
                        <div class="form-group">
                            <label for="usr">Full Name:</label>
                            <input type="text" class="form-control" name="sname"
                                value="<?php echo $_SESSION["student_first_name"];?>" id="usr" required readonly>
                        </div>
                        <div class="form-group">
                            <label for="father">Father's Name:</label>
                            <input type="text" class="form-control"
                                value="<?php echo $_SESSION["student_father_name"];?>" name="fathername" id="father"
                                required readonly>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone No (Used For Payment):</label>
                            <input type="text" class="form-control" name="phone" id="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone No (Used For Payment):</label>
                            <select class="form-control" name="feeType" style="height:30px;">
                                <option value="1">Installment Fee</option>
                                <option value="2">Admission Fee</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tranction">Transaction Id:</label>
                            <input type="text" class="form-control" name="tranctionID" id="tranction" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block">Enter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- footer -->
    <?php include '../gdf_footer.php'; ?>
    <!-- //footer -->
    <!-- copyright -->
    <div class="copy_right p-3 d-flex justify-content-around">

        <p>© 2016 GDF. All rights reserved
        </p>

    </div>
    <!-- //copyright -->

</body>
<?php
}
else
{
  header("Location:../login.php");
}
?>
<?php
session_start();
if(isset($_SESSION["registeration_no"]))
{
?>

<head>
    <title>Student Fee:: GDF</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="GDF" />
    <?php include 'links.php'; ?>

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
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h3 class=" text-primary text-center">Pay Fee</h3>
                <form action="insertFeeUPIDB.php" method="post">
                    <div class="row py-2">
                        <div class="col-md-12">
                            <label>Registration No:</label>
                            <input type="text" class="form-control" name="regNo" readonly
                                value="<?php echo $_SESSION["student_reg_no"];?>">
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-12">
                            <label>Phone No: (Enter your UPI Registered Number)</label>
                            <input type="text" class="form-control" name="phone" maxlength="10" minlength="10" required>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-12">
                            <label>Fee Type:</label>
                            <select class="form-control" name="feeType" style="height:35px;" required>
                                <option value="">Select</option>
                                <option value="1">Installment Fees</option>
                                <option value="2">Admission Fees</option>
                            </select>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-12">
                            <label>Fee Amount:</label>
                            <input type="number" name="FeePaid" class="form-control" placeholder="Fee Amount" required>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-12">
                            <button class="btn btn-success" id="upiBtn" type="button">BHIM UPI</button>
                        </div>
                    </div>
                    <div class="row py-2" id="upiDiv">
                        <div class="col-md-12">
                            <img src="images/bhim-upi.jpg" width="300px">
                            <br>
                            <label>Transaction ID</label>
                            <input class="form-control" type="text" name="transactionID" placeholder="Transaction ID"
                                required>
                            <br>
                            <button class="btn btn-success" id="" type="Submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr>
    <div class="copy_right p-3 d-flex justify-content-around">
        <p>© 2016 GDF. All rights reserved
        </p>
    </div>
    <!-- //copyright -->
    <script>
    $(document).ready(function() {
        $("#upiDiv").hide();
        $("#upiBtn").click(function() {
            $("#upiDiv").show(4000);
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
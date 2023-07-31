<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include 'header.php';?>


    <div class="page_top_img">
        <img src="img/pay.jpg">
    </div>

    <div class="container py-3 text-info">

        <div class="row p-3 text-center border-info" style="border:2px solid white;">
            <div class="col-12 p-3">
                <h2>Online Pay Fee</h2>
                <hr class="mt-5 border-info" style="border: 1px solid white;">
            </div>

            <div class="col-md-6 my-3">
                <button class="btn btn-success" id="tap">Pay With UPI</button>
                <form action="insertFeeUPIDB.php" class="bg-warning p-3 m-3 border border-warning" style="color:white;"
                    method="post" id="toggle">
                    <div class="row py-2">
                        <div class="col-md-12">
                            <label>Registration No: (If Any)</label>
                            <input type="text" class="form-control text-dark" name="regNo">
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
                            <select class="form-control" name="feeType" style="height:auto;" required>
                                <option value="">-Select-</option>
                                <option value="Installment Fees">Installment Fees</option>
                                <option value="Admission Fees">Admission Fees</option>
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
                            <center> <img src="img/scan-pui.jpg" width="300px">
                                <br>
                                <label>Transaction ID</label>
                            </center>
                            <input class="form-control" type="text" name="transactionID" placeholder="Transaction ID"
                                required>
                            <br>
                            <button class="btn btn-success" id="" type="Submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 my-3">
                <button class="btn btn-success"><a class="text-white"
                        href="https://payu.in/web/0D6A7AAA3331AA012B2D56F7E4E84F02">Pay With Net Banking</a></button>
            </div>
        </div>
    </div>





    <?php include 'footer.php';?>
</body>
<script>
$(document).ready(function() {
    $("#upiDiv").hide();
    $("#upiBtn").click(function() {
        $("#upiDiv").show(4000);
    });
});

$(document).ready(function() {
    $("#toggle").hide();
    $("#tap").click(function() {
        $("#toggle").show(4000);
    });
});
</script>


</html>
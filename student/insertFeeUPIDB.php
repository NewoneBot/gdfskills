<?php
session_start();
include 'connection.php';
if (!$conn) {
die("Connection failed: " . mysqli_connect_error($con));
} 
// include_once 'connection.php';
else { 
    $regNo = $_POST["regNo"];
    $phone = $_POST["phone"];
    $feeType = $_POST["feeType"];
    $feePaid = $_POST["FeePaid"];
    $transation = $_POST["transactionID"];
    
        $sql="INSERT INTO `online_payment`(`student_reg_no`, `fee_paid`, `fee_type`, `pay_phone`, `pay_tranction_id`, `pay_date`, `transaction_by`) VALUES('$regNo','$feePaid','$feeType','$phone','$transation',CURRENT_DATE,'UPI')";
        if(mysqli_query($conn,$sql))
        {
            ?>
<script>
alert("Fee Submited! Your Fee Status Update Soon");
window.location = "fee-pay.php";
</script>
<?php
        }else
        {
            ?>
<script>
alert("Problem In Fee Submition!");
window.location = "fee-pay.php";
</script>
<?php
        }
}
?>
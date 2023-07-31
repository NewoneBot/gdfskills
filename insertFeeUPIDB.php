<?php
include "connection.php";


$tab = "CREATE TABLE IF NOT EXISTS `feedetaile` (
    `s.no.` int(11) NOT NULL AUTO_INCREMENT,
    `regno` varchar(25) NOT NULL,
    `phone` int(11) NOT NULL,
    `feetype` varchar(25) NOT NULL,
    `feepaid` varchar(25) NOT NULL,
    `transactionid` varchar(25) NOT NULL,
    PRIMARY KEY (`s.no.`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
  
$sql = mysqli_query($conn, $tab);


$regNo = $_POST['regNo'];
$phones = $_POST['phone'];
$feeType = $_POST['feeType'];
$FeePaid = $_POST['FeePaid'];
$transactionID = $_POST['transactionID'];

$sql="INSERT INTO `feedetaile`(`regno`, `phone`, `feetype`, `feepaid`, `transactionid`) VALUES ('$regNo','$phones','$feeType','$FeePaid','$transactionID')";

if(mysqli_query($conn,$sql)){
    echo "<script>
window.location.href='pay-fee-recipt.php';
alert('Your fee submit successfull please contact to faculty');
</script>";
} else{
    echo "ERROR: Hush! Sorry $sql. "
    . mysqli_error($conn);
}

?>
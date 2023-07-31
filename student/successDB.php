<?php
session_start();
include 'connection.php';

else {
        $payRegNo = $_POST["sregNo"];
        $payName = $_POST["sname"];
        $payFather = $_POST["fathername"];
        $payPhone = $_POST["phone"];
        $payType = $_POST["feeType"];
        $payTranction = $_POST["tranctionID"];
        
        $webSql = "insert into online_payment(student_reg_no,pay_name,pay_phone,pay_father,fee_type,pay_tranction_id,pay_date,transaction_by) values('$payRegNo','$payName','$payPhone','$payFather','$payType','$payTranction',CURRENT_DATE,'PayUMoney')";
        
        if(mysqli_query($con,$webSql))
        {
            ?>
<script>
alert("Successfully Submitted");
window.location = "student-home.php";
</script>
<?php
        }
    
}

?>
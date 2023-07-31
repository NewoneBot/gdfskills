<?php
session_start();
include 'connection.php';
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error($con));
} 

else {
    $sreg = $_SESSION["student_reg_no"];
    $ass= $_GET["ass"];  
    $sql = "select * from student_assignment where student_reg_no='$sreg' and download_date=CURRENT_DATE";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0)
    {
        echo "Only One Assignment Could be Downloaded In a Day";
    }
    else
    {
        $assSql="INSERT INTO `student_assignment`(`student_reg_no`, `assignment`, `download_date`) VALUES('$sreg','$ass',CURRENT_DATE) ";
        if(mysqli_query($con,$assSql))
        {
            echo "1";
        }else
        {
            echo "0";
        }
        
    }
}
?>
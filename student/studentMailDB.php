<?php
session_start();
// $server="localhost";
// $user="root";
// $password="";
// $dbname="gdfms_ims";

// $con = mysqli_connect($server,$user,$password,$dbname);
include 'connection.php';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error($con));
}

else {
    $reg = $_SESSION["registeration_no"];
    // echo $reg."<br>";
    $toMember = $_POST["sMember"];
    // echo $toMember."<br>";
    $subject = $_POST["sSubject"];
    // echo $subject."<br>";
    $msg = $_POST["sMsg"];
    // echo $msg."<br>";
    $branch = $_SESSION["branch_id"]; 
    // echo $branch."<br>";
    
    $sql = "INSERT INTO `student_mail`(`registeration_no`, `to_member`, `subject`, `message`, `mail_date`, `is_active`, `branch_id`) VALUES ('$reg','$toMember','$subject','$msg','CURRENT_DATE','1','$branch')";
    if(mysqli_query($conn,$sql))
    {
        // $lastInsertID = mysqli_insert_id($con);
        
        // $mailStatusSQL = "INSERT INTO `student_mail_followup`(`mail_id`, `followup_msg`, `followup_date`, `member_id`)"
        //                 . "values ('$lastInsertID','$msg',CONVERT_TZ(NOW(),@@session.time_zone,'+5:30'),'$toMember')";
        
        // mysqli_query($con, $mailStatusSQL);
        
        ?>
<script>
alert("Message Send Successfully");
window.location = "student-home.php";
</script>
<?php
    }
    else
    {
        ?>
<script>
alert("Problem In Sending Message");
window.location = "student-home.php";
</script>
<?php
    }
    
}
?>
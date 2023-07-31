<?php
session_start();

include 'connection.php';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error($conn));
} 

else {
    $sreg = $_POST["sreg"];  

    $sname = $_POST["sfname"];  

    $slname = $_POST["slname"];
    $sfname = $_POST["sfather"];
    $sdob = $_POST["sdob"];
    $sphone1 = $_POST["sphone1"];
    $smobile1 = $_POST["smobile1"];
    // $sadd1 = $_POST["sadd1"];
    $sadd2 = $_POST["sadd2"];
    $spassword = $_POST["spassword"];
    $sql = "UPDATE `gdfproject_student_insert` SET fname='$sname', lname='$slname', fathername='$sfname', dob='$sdob', phone='$sphone1', mobile='$smobile1', second_address='$sadd2', student_pass='$spassword' where registeration_no='$sreg'";
    if(mysqli_query($conn,$sql))
    {
      ?>
<script>
alert("Profile Edit Successfully");
window.location = "logout.php";
</script>

<?php   
    }
    else
    {
        ?>
<script>
alert("Problem In Updation! Contect in Branch");
window.location = "student-home.php";
</script>
<?php
    }
    
}

?>
<?php
session_start();
if(isset($_SESSION["registeration_no"]))
{
    include 'connection.php';
    
    $examTitle = $_POST["examTitle"];
    $reg = $_SESSION["student_reg_no"];
    $ansCount = $_POST["ansCount"];
    $ExamID = $_POST["exam_id"];   
    $sqlResult="INSERT INTO `student_exam_result`(`exam_id`, `student_reg_no`, `result`,`exam_result_date`) VALUES('$ExamID','$reg','$ansCount',CURRENT_DATE)";
    
    if(mysqli_query($conn,$sqlResult))
    {
       ?>
<script>
alert("Exam Submit Successfully");
window.location = "student-home.php";
</script>
<?php  
    }else
    {
    ?>
<script>
alert("Something Wrong");
window.location = "student-home.php";
</script>
<?php  
    }
}

else
{
  header("Location:student-home.php");  
}
?>
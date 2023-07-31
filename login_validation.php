<?php
session_start();
include_once 'connection.php';
$user = $_GET["student_user"];  
$pass = $_GET["student_pass"];
    
    $sql = "select * from gdfproject_student_insert g LEFT JOIN gdfproject_course_module c ON g.course_id=c.id where g.registeration_no='$user' and g.student_pass='$pass'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        if($row=mysqli_fetch_assoc($result))
        {
            $_SESSION["registeration_no"]=$row["registeration_no"];
            $_SESSION["admission_date"]=$row["admission_date"];
            $_SESSION["fname"]=$row["fname"];
            $_SESSION["lname"]=$row["lname"];
            $_SESSION["first_address"]=$row["first_address"];
            $_SESSION["second_address"]=$row["second_address"];
            $_SESSION["course_id"] =$row["course_id"];
            $_SESSION["s_batch_id"] =$row["s_batch_id"];
            $_SESSION["phone"]=$row["phone"];
            $_SESSION["mobile"]=$row["mobile"];
            $_SESSION["dob"]=$row["dob"];
            $_SESSION["fathername"]=$row["fathername"];
            $_SESSION["total_fee"]=$row["total_fee"];
            $_SESSION["admission_fee"]=$row["admission_fee"];
            $_SESSION["no_of_installments"]=$row["no_of_installments"];
            $_SESSION["installment_amount"]=$row["installment_amount"];
            $_SESSION["student_pic"]=$row["student_pic"];
            $_SESSION["student_password"]=$row["student_pass"];
            $_SESSION["branch_id"]=$row["branch_id"];
            $_SESSION["batch_id"]=$row["batch_id"];
            $_SESSION["course_name"]=$row["course_name"];    
            $_SESSION["examCode"]=$row["examCode"];    
            header("Location:student/student-home.php");
        } 
      }
        else {
  echo "<script>
  alert('Username or Password Not Valid');
  window.location='login.php';
  </script>";
}

mysqli_close($conn);
?>
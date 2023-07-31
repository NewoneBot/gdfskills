<?php
session_start();
if(isset($_SESSION["registeration_no"]))
{
    $examCode = $_SESSION['examCode'];
    $registeration_no = $_SESSION["registeration_no"];
    $batch_id=$_SESSION["batch_id"];
?>

<head>
    <title>Online Exam:: GDF</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="keywords" content="GDF">
    <?php include 'links.php'; ?>
</head>

<body oncontextmenu="return false;">
    <!-- home -->
    <div id="home" class="inner-gdf-page">
        <div class="overlay-innerpage">
            <?php include 'profile_header.php'; ?>
        </div>
    </div>

    <div class="container py-3">
        <div class="row ">
            <div class="col-md-12 custyle">
                <h4 class=" text-primary text-center" style="font-size:20px;">Online Exam</h4>
            </div>
        </div>
    </div>
    <div class="container py-3">
        <div class="row ">
            <div class="col-md-4"></div>
            <div class="col-md-4 jumbotron">
                <form method="post">
                    <p style="color:red;font-size:12px">Enter your Exam code to start your Exam.</p>
                    <input type="text" name="StudentExamcode" class="form-control" placeholder="Exam Code">
                    <button type="submit" class="btn btn-success mt-3" name="sub">Submit</button>
                </form>
                <p style="color:black;font-size:15px;">
                    1. Make sure you do not refresh to the page after taking the exam.
                </p>
                <p style="color:black;font-size:15px;">
                    2. Complete your exam in a given time period.
                </p>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <?php
    if(isset($_POST["sub"]))
    {
        include 'connection.php';

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } 
        else {
            $StudentExamcode = $_POST["StudentExamcode"];
            $resSQL="select * from student_exam_result where registeration_no='$registeration_no' and exam_id='$StudentExamcode'";
            $res = mysqli_query($conn,$resSQL);
            if(mysqli_num_rows($res)>0)
            {
                echo "<h4 style='color:red;text-align:center'>You already took the exam</h4>"; 
            }
            else
            {
                $sql="select * from gdfcreate_exam where examCode='$StudentExamcode'";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0)
                {
                    ?>
    <script>
    window.location =
        "exam-start.php?eid=<?php echo $StudentExamcode;?>";
    </script>
    <?php
      }
      else
      {
         echo "<h4 style='color:red;text-align:center'>Code Is Not Valid</h4>";
    }
            }    
        }
    }    
    ?>
    <!-- footer -->
</body>
<?php
}
else
{
  header("Location:../login.php");
}
?>
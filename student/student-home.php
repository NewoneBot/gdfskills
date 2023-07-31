<?php
session_start();
if (!isset($_SESSION["registeration_no"])){
    header("Location:../login.php");
}



$id= $_SESSION["registeration_no"];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student home</title>

</head>

<body>
    <?php
include_once 'profile_header.php';
?>
    <div class="container emp-profile">
        <div class="row">
            <div class="col-md-6 align-self-center">
                <div class="profile-img" style="z-index:1;">
                    <div class="image_box" id="d_img">
                        <?php
                            if($_SESSION["student_pic"]==""){
                                ?>
                        <img src="profile-image/profile.png" alt="">
                        <?php
                                }
                            else
                                {
                                    $sqlimage = "SELECT * FROM `gdfproject_student_insert` WHERE registeration_no='$id'";
                                    $imageresult1 = mysqli_query($conn,$sqlimage);
                                    while($rows = mysqli_fetch_assoc($imageresult1))
                                    {       
                                        $image = $rows['student_pic'];    
                                        ?>
                        <img src="profile-image/<?php echo $image?>" alt="">
                        <?php
                                    } 
                                }?>
                    </div>
                    <form id="submit_form" method="POST">
                        <a href="#" class="file btn btn-lg btn-primary">
                            <i class="fa fa-camera" id="camera" aria-hidden="true"></i>
                            <input type="submit" name="submit" id="formId">
                            <input type="file" name="image" id="upload_file">
                        </a>
                    </form>

                    <!-- back grounf box blue -->


                    <div class="box">
                    </div>

                    <!-- end -->

                    <h5>
                        <?php echo strtoupper($_SESSION["fname"]." ".$_SESSION["lname"]); ?>
                    </h5>

                    <h6 id="courseID">
                        <?php echo $_SESSION["course_name"];?>
                    </h6>

                    <div class="col-md">
                        <button type="button" class="profile-edit-btn" data-toggle="modal" href="#myModal"
                            id="float">Edit Profile</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="all" id="profile">
                    <div class="profile-head">
                        <h1>About</h1>
                        <hr>
                        <br>
                        <div class="container justify-content-between d-flex" id="trap">
                            <label>User Id</label>
                            <p><?php echo $_SESSION["registeration_no"]; ?></p>
                        </div>
                        <div class="container justify-content-between d-flex" id="trap">
                            <label>Father's Name</label>
                            <p><?php echo $_SESSION["fathername"];?></p>
                        </div>
                        <div class="container justify-content-between d-flex" id="trap">
                            <label>DOB</label>
                            <p><?php echo $_SESSION["dob"];?></p>
                        </div>
                        <div class="container justify-content-between d-flex" id="trap">
                            <label>Phone</label>
                            <p><?php echo $_SESSION["mobile"]; ?></p>
                        </div>
                        <div class="container justify-content-between d-flex" id="trap">
                            <label>Address 1</label>
                            <p><?php echo $_SESSION["first_address"]; ?></p>
                        </div>
                        <div class="container justify-content-between d-flex" id="trap">
                            <label>Address 2</label>
                            <p><?php echo $_SESSION["second_address"]; ?></p>
                        </div>

                        <div class="container justify-content-between d-flex" id="trap">
                            <label>Date Of Admission</label>
                            <p><?php echo $_SESSION["admission_date"]; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="container my-3">
            <div class="row">
                <div class="col-md-12 custyle">
                    <h4 class=" text-white">1. Academic Records</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr class="table-success">
                                    <th>S.no.</th>
                                    <th>Exam Date</th>
                                    <th>Exam Name</th>
                                    <th>Total Marks</th>
                                    <th>Marks Obtained</th>
                                    <th>Exam Status</th>
                                    <th>Exam Type</th>
                                    <th>Diploma Marks Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    // student_exam_result.student_marks,student_exam_result.exam_id,student_exam_result.result,student_exam_result.exam_result_date,gdfcreate_exam.modulName,gdfcreate_exam.examCode,gdfcreate_exam.totalMarks
                        $sql="SELECT * FROM student_exam_result INNER JOIN gdfcreate_exam ON student_exam_result.exam_id = gdfcreate_exam.examCode WHERE registeration_no='$id'";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0)
                        {
                            $i=0;
                            while($data=mysqli_fetch_assoc($result))
                            {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo ++$i;?>
                                    </td>
                                    <td>
                                        <?php echo $data["exam_result_date"];?>
                                    </td>
                                    <td>
                                        <?php echo $data["modulName"];?>
                                    </td>
                                    <td>
                                        <?php echo $data["totalMarks"];?>
                                    </td>
                                    <td>
                                        <?php echo $data["student_marks"];?>
                                    </td>
                                    <td>
                                        <?php echo $data["examMode"];?>
                                    </td>
                                    <td>
                                        <?php echo $data["examType"];?>
                                    </td>
                                    <td>
                                        <?php 
                                            $res = ($data["student_marks"]/$data["totalMarks"])*100;
                                            if($res>=50){
                                                echo "<h4 style='color:green;'>Pass</h4>";
                                            }else
                                            {
                                                echo "<h4 style='color:red;'>Fail</h4>";
                                            }
                                    ?>
                                    </td>

                                </tr>
                                <?php
                            }
                        }
                    ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-3">
            <div class="row">
                <div class="col-md-12 custyle">
                    <h4 class=" text-white">2. Attandance Records</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead id="tb">
                                <tr class="table-success">
                                    <th>Month</th>
                                    <th>Total class held</th>
                                    <th>Present</th>
                                    <th>Absent</th>
                                    <th>Attandance Ratio</th>
                                </tr>
                            </thead>

                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 custyle">
                    <h4 class="text-white">3. Application Records</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr class="table-success">
                                    <th>S.No</th>
                                    <th>Date of application</th>
                                    <th>Member name</th>
                                    <th>Massage</th>
                                    <th>Status (Open or close) </th>
                                </tr>
                            </thead>
                            <tbody id="application">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="container py-1">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Send Message</h4>
                            <form action="studentMailDB.php" method="post">
                                <div class="form-group">
                                    <label for="email">To :</label>
                                    <select id="sMember" name="sMember" class="form-control" style="height:37px;"
                                        required>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Subject:</label>
                                    <select id="sub" name="sSubject" class="form-control" required>
                                        <option value="">select</option>
                                        <option>Batch Change</option>
                                        <option>Fees</option>
                                        <option>classes</option>
                                        <option>other</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Message:</label>
                                    <textarea class="form-control" rows="5" name="sMsg" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-success">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="container">
            <div class="row ">
                <div class="col-md-12 custyle">
                    <h4 class=" text-white">4. Module Status </h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr class="table-success">
                                    <th>S.No</th>
                                    <th>Module Name</th>
                                    <th>Module status (Runing, completed or Pending)</th>
                                    <th>Project Status</th>
                                </tr>
                            </thead>
                            <tbody id="getModules">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <form action="editProfileDB.php" method="post">
                    <div class="modal hide" id="myModal"
                        style="width:60%;height:70%;top:10%;left:20%;background-color:white">
                        <div class="modal-header">
                            <h3>Edit Profile</h3>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col">
                                    <label>new Name</label>
                                    <input type="hidden" class="form-control" placeholder="Enter First Name" name="sreg"
                                        id="sreg" value="<?php echo $_SESSION['registeration_no']; ?>">
                                    <input type="text" class="form-control" placeholder="Enter First Name" name="sfname"
                                        value="<?php echo $_SESSION['fname']; ?>">
                                </div>
                                <div class="col">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Last Name" name="slname"
                                        value="<?php echo $_SESSION['lname']; ?>">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label>Father's Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Father's Name"
                                        name="sfather" value="<?php echo $_SESSION['fathername']; ?>">
                                </div>
                                <div class="col">
                                    <label>Date Of Birth</label>
                                    <input type="date" class="form-control" placeholder="Enter DOB" name="sdob"
                                        value="<?php echo $_SESSION['dob']; ?>" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label>Phone 1</label>
                                    <input type="text" class="form-control" placeholder="Enter Phone 1" name="sphone1"
                                        value="<?php echo $_SESSION['phone']; ?>">
                                </div>
                                <div class="col">
                                    <label>Phone 2</label>
                                    <input type="text" class="form-control" placeholder="Enter Phone 2" name="smobile1"
                                        value="<?php echo $_SESSION['mobile']; ?>">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label>Address 1</label>
                                    <input type="text" class="form-control" placeholder="Enter Add 1" name="sadd1"
                                        value="<?php echo $_SESSION['first_address']; ?>" disabled>
                                </div>
                                <div class="col">
                                    <label>Address 2</label>
                                    <input type="text" class="form-control" placeholder="Enter Add 2" name="sadd2"
                                        value="<?php echo $_SESSION['second_address']; ?>">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label>Password</label>
                                    <input type="text" class="form-control" placeholder="Enter New Password"
                                        name="spassword" value="<?php echo $_SESSION['student_password'];?>" required>
                                </div>
                                <div class="col">

                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Edit Profile</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>

<script>
$('#upload_file').change(function() {
    $("#formId").submit();
});



$(document).ready(function() {
    $("#submit_form").on("submit", function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: "upload.php",
            type: "post",
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                $("#d_img").html(data);
            }
        });
    });
});




$(document).ready(function() {

    var sreg = $("#sreg").val();
    // console.log(sreg);
    $.ajax({
        url: "getMemberNameListDB.php",
        type: "post",
        success: function(result) {
            $("#sMember").html(result);
        }
    });

    $.ajax({
        url: "getApplicationListDB.php?reg=" + sreg,
        type: "post",
        success: function(result) {
            $("#application").html(result);
        }
    });


    $.ajax({
        url: "getModuleListDB.php?course=<?php echo $_SESSION['course_id'];?>",
        type: "post",
        success: function(result) {
            $("#getModules").html(result);
        }
    });

});




// var modal = document.getElementById("myFeesModal");
// var span = document.getElementsByClassName("closeFees")[0];
// modal.style.display = "block";
// span.onclick = function() {
//     modal.style.display = "none";
// }

// window.onclick = function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }
</script>



</html>
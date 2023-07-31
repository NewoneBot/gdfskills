<?php
session_start();
$target="documents/";
$target_dir1 = $target.basename($_FILES['chooseFile1']['name']);
$target_dir2 = $target.basename($_FILES['chooseFile2']['name']);
$target_dir3 = $target.basename($_FILES['chooseFile3']['name']);
$target_dir4 = $target.basename($_FILES['chooseFile4']['name']);

$filename1 = $_FILES["chooseFile1"]["name"];
$filesize1 = $_FILES["chooseFile1"]["size"];
$imageFileType1 = strtolower(pathinfo($filename1,PATHINFO_EXTENSION));

$filename2 = $_FILES["chooseFile2"]["name"];
$filesize2 = $_FILES["chooseFile2"]["size"];
$imageFileType2 = strtolower(pathinfo($filename2,PATHINFO_EXTENSION));

$filename3 = $_FILES["chooseFile3"]["name"];
$filesize3 = $_FILES["chooseFile3"]["size"];
$imageFileType3 = strtolower(pathinfo($filename3,PATHINFO_EXTENSION));

$filename4 = $_FILES["chooseFile4"]["name"];
$filesize4 = $_FILES["chooseFile4"]["size"];
$imageFileType4 = strtolower(pathinfo($filename4,PATHINFO_EXTENSION));

$uploadOk = 1;
$uploadOk2 = 1;
$uploadOk3 = 1;
$uploadOk4 = 1;
$reg = $_SESSION["student_reg_no"];

if($filename1!="" || $filename1!=null)
{
    
    if (file_exists($target_dir1)) {
    $uploadOk = 0;
    ?>
<script>
alert("Aadhar, file already exists with same name.");
</script>
<?php
}

if ($filesize1 > 204800) {
    $uploadOk = 0;
    ?>
<script>
alert("Aadhar, your file is too large must be < 200KB.");
</script>
<?php
}

if(($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg")) {
    $uploadOk = 0;
    ?>
<script>
alert("Aadhar, only JPG, JPEG, PNG files are allowed.");
</script>
<?php
}
    
    if ($uploadOk == 0) {
    ?>
<script>
alert("Aadhar, your file was not uploaded.");
window.location = "student-document.php";
</script>
<?php
} else {
    if (move_uploaded_file($_FILES["chooseFile1"]["tmp_name"], $target_dir1)) {
            $server="Localhost";
            $user="gdfims_root";
            $password="Admin@123";
            $dbname="gdfims_ims";
            
            $con = mysqli_connect($server,$user,$password,$dbname);
            
            if (!$con) {
                die("Connection failed: " . mysqli_connect_error($con));
            } 
            
            else {
                 
                    $sql = "INSERT INTO `student_document`(`student_reg_no`, `aadhar_card`) VALUES('$reg','$filename1')";         
                    mysqli_query($con,$sql);
                 }
            } else {
                    header("Location:student-document.php");
            }
        }   
    }
    
    
    // 10 th sheet
    if($filename2!="" || $filename2!=null)
    {
    
    if (file_exists($target_dir2)) {
    $uploadOk2 = 0;
    ?>
<script>
alert("10th sheet, file already exists  with same name.");
</script>
<?php
}

if ($filesize2 > 204800) {
    $uploadOk2 = 0;
    ?>
<script>
alert("10th sheet, your file is too large must be <200KB.");
</script>
<?php
}

if(($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg")) {
    $uploadOk2 = 0;
    ?>
<script>
alert("10th sheet, only JPG, JPEG, PNG files are allowed.");
</script>
<?php
}
    
    if ($uploadOk2 == 0) {
    ?>
<script>
alert("10th sheet, your file was not uploaded.");
window.location = "student-document.php";
</script>
<?php
} else {
    if (move_uploaded_file($_FILES["chooseFile2"]["tmp_name"], $target_dir2)) {
        include 'connection.php';
            
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error($con));
            } 
            
            else {
                    $sql2 = "INSERT INTO `student_document`(`student_reg_no`, `sheet_10`) VALUES('$reg','$filename2')";   
                    mysqli_query($con,$sql2);
                 }
            } else {
                    header("Location:student-document.php");
            }
        }   
    }
    
    // 12 th sheet
    if($filename3!="" || $filename3!=null)
    {
    
    if (file_exists($target_dir3)) {
    $uploadOk3 = 0;
    ?>
<script>
alert("12th sheet, file already exists with same name.");
</script>
<?php
}

if ($filesize3 > 204800) {
    $uploadOk3 = 0;
    ?>
<script>
alert("12th sheet, your file is too large must be <200KB.");
</script>
<?php
}

if(($imageFileType3 != "jpg" && $imageFileType3 != "png" && $imageFileType3 != "jpeg")) {
    $uploadOk3 = 0;
    ?>
<script>
alert("12th sheet, only JPG, JPEG, PNG files are allowed.");
</script>
<?php
}
    
    if ($uploadOk3 == 0) {
    ?>
<script>
alert("12th sheet, your file was not uploaded.");
window.location = "student-document.php";
</script>
<?php
} else {
    if (move_uploaded_file($_FILES["chooseFile3"]["tmp_name"], $target_dir3)) {
        include 'connection.php';
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error($con));
            } 
            
            else {
                    $sql3 = "INSERT INTO `student_document`(`student_reg_no`, `sheet_12`) VALUES('$reg','$filename2')";   
                    mysqli_query($con,$sql3);
                 }
            } else {
                    header("Location:student-document.php");
            }
        }   
    }
    
    // photo sheet
    if($filename4!="" || $filename4!=null)
    {
    
    if (file_exists($target_dir4)) {
    $uploadOk4 = 0;
    ?>
<script>
alert("Photo, file already exists with same name.");
</script>
<?php
}

if ($filesize4 > 204800) {
    $uploadOk4 = 0;
    ?>
<script>
alert("Photo, your file is too large must be <200KB.");
</script>
<?php
}

if(($imageFileType4 != "jpg" && $imageFileType4 != "png" && $imageFileType4 != "jpeg")) {
    $uploadOk4 = 0;
    ?>
<script>
alert("Photo, only JPG, JPEG, PNG files are allowed.");
</script>
<?php
}
    
    if ($uploadOk4 == 0) {
    ?>
<script>
alert("Photo, your file was not uploaded.");
window.location = "student-document.php";
</script>
<?php
} else {
    if (move_uploaded_file($_FILES["chooseFile4"]["tmp_name"], $target_dir4)) {
        include 'connection.php';
            
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error($con));
            } 
            
            else {
                    $sql4 = "INSERT INTO `student_document`(`student_reg_no`, `photo`) VALUES('$reg','$filename4')";         
                    mysqli_query($con,$sql4);
                 }
            } else {
                    header("Location:student-document.php");
            }
        }   
    }
    
    
    header("Location:student-document.php");
?>
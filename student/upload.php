<?php 
session_start();

 $id= $_SESSION["registeration_no"];



    if(isset($_FILES['image'])){
    $target_dir = "profile-image/";
    $target_file = $target_dir.basename($_FILES["image"]["name"]);
    $file_name = $_FILES['image']['name'];  
    $file_size = $_FILES['image']['size']; 
    $file_tmp = $_FILES['image']['tmp_name']; 
    $file_type = $_FILES['image']['type'];
    $imageFileType = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));
?>


<?php   
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"  ) {
    $uploadOk = 0;
    ?>
<script>
alert("Sorry, only JPG, JPEG, PNG files are allowed.");
window.location = "student-home.php";
</script>


<?php
}
 
elseif (file_exists($target_file)) {
    $uploadOk = 0;
    ?>
<script>
alert("Sorry, file already exists.");
window.location = "student-home.php";
</script>

<?php
}

elseif ($file_size > 15300000) {
    ?>
<script>
alert("Sorry, your file is too large.");
window.location = "student-home.php";
</script>

<?php
}
else{
    if(move_uploaded_file($file_tmp, $target_dir. $file_name)){
        include 'connection.php';

        $sql = "update gdfproject_student_insert set student_pic='$file_name' where registeration_no='$id'";
        mysqli_query($conn,$sql); 

        $sqlimage = "SELECT * FROM `gdfproject_student_insert` WHERE registeration_no='$id'";
        $imageresult1 = mysqli_query($conn,$sqlimage);

while($rows = mysqli_fetch_assoc($imageresult1))
{       
    $image = $rows['student_pic'];    
    ?><img src="profile-image/<?php echo $image?>" alt="">

<?php
} 
    $_SESSION["student_pic"]="profile-image/<?php echo $image?>";
}
}
}

?>
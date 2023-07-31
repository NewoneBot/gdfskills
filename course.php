<?php
include 'connection.php';

$sql = "SELECT * FROM gdfproject_course_module";
$result = mysqli_query($conn,$sql) or die("query faild to connet in database");
?>
<select class="form-control  mb-2" name="corse" id="course" required>
    <option selected value="">-Select Your Course-</option>
    <?php
while($row=mysqli_fetch_assoc($result))
{
    ?>
    <option value="<?php echo $row['course_name'];?>"><?php echo $row['course_name'];?></option>
    <?php
};
?>
</select>
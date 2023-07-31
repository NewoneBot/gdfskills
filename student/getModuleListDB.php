<?php
session_start();
include 'connection.php';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error($conn));
} 
// include_once 'connection.php';
else {
    $courseID = $_GET["course"];  
    $i=0;
    
    $sql = "SELECT * FROM `gdfproject_module` WHERE course_id ='$courseID' ORDER BY id";
    
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
      while($row=mysqli_fetch_assoc($result))
      {
          ?>
<tr>
    <td><?php echo ++$i;?></td>
    <td><?php echo $row["module_name"];?></td>
    <td><?php echo "Running";?></td>
    <td><?php echo "None";?></td>
</tr>
<?php
      }
    }
    
}
?>
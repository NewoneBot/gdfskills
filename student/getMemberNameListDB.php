<?php
session_start();
include 'connection.php';
    $sql = "SELECT id,member_name FROM `gdfproject_members` WHERE is_active=1";
    
   
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        echo "<option value=''> Select Memeber </option>";
        while($row=mysqli_fetch_assoc($result))
        {
            ?>
<option value="<?php echo $row["id"];?>"> <?php echo $row["member_name"];?> </option>
<?php
        }
    }
    
// }
?>
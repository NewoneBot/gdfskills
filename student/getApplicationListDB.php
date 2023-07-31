<?php
session_start();
include 'connection.php';
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error($conn));
} 
else {
    $sreg = $_GET["reg"];  
    $i=0;
    
    $sql = "select * from student_mail where registeration_no='$sreg'";
    
    $result = mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
          $mamberid=$row['to_member'];
          ?>
<tr>
    <td><?php echo ++$i;?></td>

    <td><a href="application-status.php?mid=<?php echo $row['mail_id'];?>"><?php echo $row["mail_date"];?></a></td>

    <td><?php 
                        $msql = "SELECT * FROM `gdfproject_members` WHERE id='$mamberid'";
                        $mr = mysqli_query($conn,$msql);
                        if(mysqli_num_rows($mr)>0)
                        {
                            if($m=mysqli_fetch_assoc($mr))
                            {
                                echo $m["member_name"];
                            }
                        }
                ?>
    </td>
    <td><?php echo $row["message"];?></td>
    <td><?php 
                        if($row["is_active"]==1)
                        {
                            echo "<p style='color:green'>Application is Open</p>";
                        }else
                        {
                            echo "<p style='color:red'>Application is Close</p>";
                        }
                ?></td>
</tr>
<?php
      }
    }
}
?>
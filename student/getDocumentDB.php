<?php
session_start();

include 'connection.php';
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error($conn));
} 

else {
    $sreg = $_SESSION["registeration_no"]; 
    $i=0;
    
    $sql = "select * from student_document where student_reg_no='$sreg'";
    
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
      while($row=mysqli_fetch_assoc($result))
      {
          ?>
<tr class="text-center">
    <td><?php echo ++$i; ?></td>
    <td>Document <?php echo $i ?></td>
    <td><?php 
                        if($row["aadhar_card"]=="" || $row["aadhar_card"]==null)
                        {
                            
                            $ok=1;
                        }
                        else
                        {
                            ?>
        <img src="documents/<?php echo $row['aadhar_card']?>" width='200px'>
        <?php
                        }
                        
                        if($row["sheet_10"]=="" || $row["sheet_10"]==null)
                        {
                            $ok=1;
                        }else
                        {
                            ?>

        <img src="documents/<?php echo $row['sheet_10']?>" width='200px'>
        <?php
                        }
                        
                        if($row["sheet_12"]=="" || $row["sheet_12"]==null)
                        {
                            $ok=1;
                        }else
                        {
                            ?>

        <img src="documents/<?php echo $row['sheet_12']?>" width='200px'>
        <?php
                        }
                        
                        if($row["photo"]=="" || $row["photo"]==null)
                        {
                           $ok=1;
                        }else
                        {
                            ?>

        <img src="documents/<?php echo $row['photo']?>" width='200px'>
        <?php
                        }
                
                ?>
    </td>
</tr>
<?php
      }
    }
}
?>
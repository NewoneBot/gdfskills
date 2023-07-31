<?php
session_start();
include 'connection.php';
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error($conn));
} 

else {
    $sreg = $_GET["reg"];  
    $i=0;
    $totalFeePaid = 0;
    $sql = "select * from student_fee where student_reg_no='$sreg'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
      while($row=mysqli_fetch_assoc($result))
      {
          ?>
<tr>
    <td><?php echo ++$i;?></td>
    <td><?php echo $row["fee_paid_date"];?></td>
    <td><?php echo $row["fee_receipt_no"];?></td>
    <td><?php echo $row["fee_paid"];?></td>
    <td><?php 
                        if($row["fee_type"]==1)
                        {
                            echo "Installment Fees";
                        }else if($row["fee_type"]==2)
                        {
                            echo "Admission Fees";
                        }else if($row["fee_type"]==3)
                        {
                            echo "Registration Fees";
                        }else if($row["fee_type"]==4)
                        {
                            echo "Confirmation Fees";
                        }else if($row["fee_type"]==5)
                        {
                            echo "Book Fees";
                        }else 
                        {
                            echo "Other Fees";
                        }
                
                        ?></td>
    <td>
        <?php
                    if ($row["fee_type"] == 2 || $row["fee_type"] == 1) {
                        $totalFeePaid += $row["fee_paid"];
                    }
                    $remainingFee = $totalFee - $totalFeePaid;

                    echo $remainingFee;
                    ?>
    </td>
</tr>
<?php
      }
    }
}
?>
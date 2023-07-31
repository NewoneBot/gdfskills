<?php
session_start();

include 'connection.php';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
    $mid = $_GET["mid"];
    $esql99 = "select * from `student_mail_followup` where mail_id ={$mid} ";
    $result99 = mysqli_query($conn, $esql99);
    if (mysqli_num_rows($result99) > 0) {
        while ($enq99 = mysqli_fetch_assoc($result99)) {
            ?>
<tr>
    <td><?php echo $enq99["followup_date"]; ?> </td>
    <td><?php echo $enq99["followup_msg"]; ?> </td>
    <td>
        <?php 
                        $msql="select member_name from member where member_id='".$enq99["member_id"]."'";
                        $mres=mysqli_query($conn,$msql);
                        if(mysqli_num_rows($mres)>0)
                        {
                            if($r=mysqli_fetch_assoc($mres))
                            {
                                echo $r["member_name"];
                            }
                        }
                     ?>
    </td>
</tr>

<?php
        }
    }
    
}
?>
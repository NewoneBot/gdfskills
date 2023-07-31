<?php
session_start();
include_once 'connection.php';

if(isset($_POST['date1']) && isset($_POST['date2']) && isset($_POST['date3'])){
    $min = $_POST['date1'];
    $max = $_POST['date2'];
    $ins = $_POST['date3'];
    $sql="SELECT * FROM atse_student_session WHERE visited=1";
    if($min!="" && $max!=""){
    $sql .=" AND visit_date BETWEEN '{$min}' AND '{$max}'";
    }
    if($ins!=""){
    $sql .=" AND branch_id ='{$ins}' ORDER BY student_name";
    }
 }
else{
    $sql = "SELECT * FROM atse_student_session WHERE visited=1 ORDER BY student_name";
}
    $i=0;
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
      {
          
        $st_code=$row["student_code"];


          ?>

<tr class="">
    <td><?php echo ++$i;?></td>
    <td><?php echo $row["mobile"];?></td>
    <td>
        <?php $arr = str_split($row["school"]);
        for($j = 0; $j < 30; $j++) {
            print($arr[$j]);
        }
        ?>
    </td>
    <td><?php echo $row["visit_date"];?></td>
    <td><?php echo $row["branch_id"];?></td>
    <td><?php echo $row["branch_id"];?></td>
    <td><?php echo $row["branch_id"];?></td>
</tr>

<?php
      }
    }  
?>


<script>
// $("button").on('click', function() {
//     var t = (this.id);
//     $('#show').text(t);
// });
</script>
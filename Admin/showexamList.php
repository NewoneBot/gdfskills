<?php

include 'connection.php';
$sql = "SELECT * FROM `gdfcreate_exam` where 1";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
    $i =1; 
    while($row=mysqli_fetch_assoc($result)){       
        ?>
<tr>
    <th scope="row"><?php echo $i++ ?></th>
    <th><?php echo $row['examName']; ?></th>
    <td><?php echo $row['examCode']?></td>
    <td><?php echo $row['examTime']?></td>
    <td><?php echo $row['totalMarks']?></td>
    <td><?php echo $row['examType']?></td>
    <td><?php echo $row['examMode']?></td>
    <td><?php echo $row['isActive']?></td>
    <td><?php echo $row['modulName']?></td>
    <td><?php echo $row['examCreatedate']?></td>
</tr>

<?php
    }
}
else{?>
<tr>
    <th scope="row">1</th>
    <th>no data found</th>
    <td>no data found</td>
    <td>no data found</td>
    <td>no data found</td>
    <td>no data found</td>
    <td>no data found</td>
    <td>no data found</td>
    <td>no data found</td>
    <td>no data found</td>
</tr>
<?php
}
?>
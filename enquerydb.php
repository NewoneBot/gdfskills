<?php 
include 'connection.php';

$table = "CREATE TABLE IF NOT EXISTS `enquery_web`(
    `s.no.` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(25) NOT NULL,
    `father_name` varchar(25) NOT NULL,
    `corse` varchar(25) NOT NULL,
    `num` varchar(25) NOT NULL,
    `address` varchar(25) NOT NULL,
    PRIMARY KEY(`s.no.`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

$sql=mysqli_query($conn,$table);

$name=$_POST['name'];
$father=$_POST['father'];
$corse=$_POST['corse'];
$num=$_POST['num'];
$loc=$_POST['loc'];

$sql ="INSERT INTO `enquery_web`(`name`, `father_name`, `corse`, `num`, `address`) VALUES ('$name','$father','$corse','$num','$loc')";

if(mysqli_query($conn,$sql)){
    echo "<script>
window.location.href='index.php';
alert('Your Details is Successfully field');
</script>";
} else{
    echo "ERROR: Hush! Sorry $sql. "
    . mysqli_error($conn);
}
mysqli_close($conn);





?>
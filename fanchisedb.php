<?php
include "connection.php";




$tab = "CREATE TABLE IF NOT EXISTS `franchise` (
    `s.no.` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(25) NOT NULL,
    `gen` varchar(25) NOT NULL,
    `age` varchar(25) NOT NULL,
    `phon` int(11) NOT NULL,
    `mail` varchar(50) NOT NULL,
    `loc` varchar(100) NOT NULL,
    `city` varchar(25) NOT NULL,
    `state` varchar(25) NOT NULL,
    `pin` int(11) NOT NULL,
    `center` varchar(25) NOT NULL,
    `running_center` varchar(5) NOT NULL,
    `lan` varchar(10) NOT NULL,
    `info` varchar(50) NOT NULL,
    `invest` varchar(10) NOT NULL,
    `wopn` varchar(10) NOT NULL,
    PRIMARY KEY (`s.no.`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
  
$sql = mysqli_query($conn, $tab);

$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$num = $_POST['num'];
$mail = $_POST['mail'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$pin = $_POST['pin'];
$center = $_POST['center'];
$con = $_POST['con'];
$lan = $_POST['lan'];
$area = $_POST['area'];
$invest = $_POST['invest'];
$wopn = $_POST['wopn'];


$sql ="INSERT INTO `franchise`(`name`, `gen`, `age`, `phon`, `mail`, `loc`, `city`, `state`, `pin`, `center`, `running_center`, `lan`, `info`,`invest`,`wopn`) VALUES ('$name','$gender','$age','$num','$mail','$address','$city','$state','$pin','$center','$con','$lan','$area','$invest','$wopn')";

if(mysqli_query($conn,$sql)){
    echo "<script>
window.location.href='franchiseform.php';
alert('Your Details is Successfully field');
</script>";
} else{
    echo "ERROR: Hush! Sorry $sql. "
    . mysqli_error($conn);
}
mysqli_close($conn);
?>
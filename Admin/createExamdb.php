<?php
include 'connection.php';
$examName = $_GET['examName'];
$examCode = $_GET['examCode'];
$examTime = $_GET['examTime'];
$totalMarks = $_GET['totalMarks'];
$examType = $_GET['examType'];
$examMode = $_GET['examMode'];
$isActive = $_GET['isActive'];
$examModule = $_GET['examModule'];
$createExamDate = date("dmy");
$createShowExamDate = date("d-m-Y");
$tableName=$examName.$createExamDate;
echo $examMode;
$sql = "INSERT INTO `gdfcreate_exam`(`examName`, `examCode`, `examTime`, `totalMarks`, `examType`, `examMode`,`isActive`,`modulName`,`examCreatedate`) VALUES ('$tableName','$examCode','$examTime','$totalMarks','$examType','$examMode','$isActive','$examModule','$createShowExamDate')";
$requert = mysqli_query($conn,$sql);
if(!$requert){
    echo "not insertested";
}
else {
    echo "inserted successfully";
    $table = "CREATE TABLE IF NOT EXISTS `$tableName`(
        `id` int(11) unsigned NOT NULL auto_increment,
        `examCode` varchar(255) NOT NULL,
        `question` varchar(255) NOT NULL,
        `options_A` varchar(255) NOT NULL,
        `options_B` varchar(255) NOT NULL,
        `options_C` varchar(255) NOT NULL,
        `options_D` varchar(255) NOT NULL,
        `answer` varchar(255) NOT NULL,
        PRIMARY KEY (`id`)
    )ENGINE=InnoDB CHARSET=utf8mb4;";
    $sqli = mysqli_query($conn,$table);
    if (!$sqli){
        echo "not created table";
    }
    else{
        echo "created table";
        header("location: uploadExam.php");
    }
}
?>
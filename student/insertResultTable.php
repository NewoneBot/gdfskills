<?php 
include 'connection.php';
$registeration_no = $_POST["registeration_no"];
$examCode = $_POST["examCode"];
$studentAnswer = $_POST["studentAnswer"];
$table = $_POST["table"];
$studentExamdate = date("Y/m/d");
$array = json_decode($studentAnswer, true);
// echo $array; 
$count = 0;
foreach ($array as $question => $answers) {
    $sql = "SELECT * FROM $table WHERE id='$question'";
    $query = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_array($query)) {
        if ($row['answer'] == $answers) {
            $count++;
        }
    }
}
// echo $count;
$sql = "INSERT INTO `student_exam_result`(`exam_id`, `registeration_no`, `result`,`student_marks`,`exam_result_date`) VALUES ('$examCode','$registeration_no','$studentAnswer','$count','$studentExamdate')";
$query = mysqli_query($conn,$sql);
if (!$query){
    echo "Error";
}
else{
    echo 1;
}
?>
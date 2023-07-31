<?php
include 'connection.php';
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
// echo $fileName;
if (isset($_POST['save_excel_data'])){
    $fileName = $_FILES['import']['name'];
    $tableName = $_POST['file'];
    // echo $tableName;
    $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowed_ext = ['xls','csv','xlsx'];
    if (in_array($file_ext, $allowed_ext)){
        $inputFileNamePath = $_FILES['import']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
        $data = $spreadsheet->getActiveSheet()->toArray();
        foreach($data as $row){
           $examCode=$row['0'];
           $question=$row['1'];
           $oa=$row['2'];
           $ob=$row['3'];
           $oc=$row['4'];
           $od=$row['5'];
           $ans=$row['6'];
           $sql = "INSERT INTO `$tableName`(`examCode`, `question`, `options_A`, `options_B`, `options_C`, `options_D`, `answer`) VALUES ('$examCode','$question','$oa','$ob','$oc','$od','$ans')";
           if(mysqli_query($conn, $sql)){
            header("Location:admin.php");
        }
        else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
           }
        }
    }
    else{
        $_SESSION['massage']= "invalid file extension";
        header('Location:uploadExam.php');
        exit(0);
    }
}
else {
    echo "No file name selected.";
}

?>
<?php 

include 'connection.php';

if (isset($_POST['submit'])){
    $examCode = $_POST['examCode'];
    $batch=$_POST['batch'];
            $sql = "UPDATE `gdfproject_student_insert` SET `examCode`='$examCode' WHERE `batch_id` = '$batch';";
            $query = mysqli_query($conn,$sql);
            if (!$query){
                echo 'faild to update';
            }else{
        ?>
<script>
alert("inserted successfully")
</script>
<?php
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="images/gdf_logo.png" type="image/x-icon">
</head>
<style>
body::-webkit-scrollbar {
    display: none;
}
</style>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php 
            include 'header.php';     
            include 'sidemanu.php';
?>
            <div class="col-md-10 p-0 bg-light p-3">
                <form action="assignBatchexam.php" method="POST">
                    <h1 class="px-2">Assign Exam To Batch</h1>
                    <div class="p-3 d-flex flex-wrap bg-white border rounded ">
                        <div class="form-group w-50 p-2" id="form-group">
                            <label class="fw-bold">Select Exam Code</label>
                            <?php 
                        $sqlw = "SELECT * FROM `gdfcreate_exam` WHERE 1 ";
                        $resulte = mysqli_query($conn,$sqlw) or die("query faild to connet in database");
                            ?>
                            <select class="form-control member mb-2" name="examCode" id="institute">
                                <option value="">-Select Exam Code-</option>
                                <?php
                                 while($rowe=mysqli_fetch_assoc($resulte))
                                 {
                                ?>
                                <option value="<?php echo $rowe['examName'];?>"><?php echo $rowe['examName'];?>
                                </option>
                                <?php
                                    };
                                    ?>
                            </select>
                        </div>
                        <div class="form-group w-50 p-2" id="form-group">
                            <label class="fw-bold">Exam Batch To Assign.</label>
                            <?php
$sql = "SELECT * FROM `gdfproject_batch` where 1";
$result = mysqli_query($conn,$sql) or die("query faild to connet in database");
?>
                            <select class="form-control " name="batch" id="course" required>
                                <option selected value="">-Select Your Batch-</option>
                                <?php
while($row=mysqli_fetch_assoc($result))
{
    ?>
                                <option value="<?php echo $row['id'];?>"><?php echo $row['batch_code'];?></option>
                                <?php
};
?>
                            </select>
                        </div>
                        <div class="form-group w-100 p-2 d-flex align-items-end" id="form-group">
                            <button type="text" class="btn btn-primary w-100" id="bt" name="submit"
                                value="1">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</html>
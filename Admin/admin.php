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
                <h1 class="px-2">Home</h1>

                <div class="p-3 d-flex flex-wrap bg-white border rounded ">
                    <div class="form-group w-50 p-2" id="form-group">
                        <label class="fw-bold">Date</label>
                        <input class="form-control w-100" type="date" id="from" name="from">
                    </div>
                    <div class="form-group w-50 p-2" id="form-group">
                        <label class="fw-bold">Select Your Branch</label>
                        <?php 
                        $sqlw = "SELECT * FROM `gdfproject_branch` WHERE 1 ";
                        $resulte = mysqli_query($conn,$sqlw) or die("query faild to connet in database");
                            ?>
                        <select class="form-control member mb-2" name="member" id="institute">
                            <option value="">-Select Your Branch-</option>
                            <?php
                                 while($rowe=mysqli_fetch_assoc($resulte))
                                 {

                                ?>
                            <option value="<?php echo $rowe['id'];?>"><?php echo $rowe['branch_name'];?>
                            </option>

                            <?php
                                    };
                                    ?>
                        </select>

                    </div>
                    <div class="form-group w-50 p-2" id="form-group">
                        <label class="fw-bold">Course</label>
                        <?php

$sql = "SELECT * FROM gdfproject_course_module";
$result = mysqli_query($conn,$sql) or die("query faild to connet in database");
?>
                        <select class="form-control " name="corse" id="course" required>
                            <option selected value="">-Select Your Course-</option>
                            <?php
while($row=mysqli_fetch_assoc($result))
{
    ?>
                            <option value="<?php echo $row['id'];?>"><?php echo $row['course_name'];?></option>
                            <?php
};
?>
                        </select>
                    </div>

                    <div class="form-group w-50 p-2 d-flex align-items-end" id="form-group">
                        <button class="btn btn-primary w-100" id="bt" onclick="datechange()">Search</button>
                    </div>
                </div>

                <div class="p-3 mt-3 bg-white border rounded">
                    <div class="w-100 d-flex justify-content-between">
                        <h2 class="p-2 mt-2 text-muted"><i class="fa-sharp fa-solid fa-file-lines mx-2"></i> Search Exam
                        </h2>
                        <h2 class="p-2 mt-2 text-muted bg-light rounded"><i class="fa-solid fa-filter"></i></h2>
                    </div>
                    <div class="table-responsive border rounded shadow-sm" style="z-index: -1;">
                        <table class="table ">
                            <thead class="bg-light">
                                <tr class="">
                                    <th scope="col">S.No.</th>
                                    <th scope="col">Reg. No</th>
                                    <th scope="col">First & Last Name</th>
                                    <th scope="col">Exam Name</th>
                                    <th scope="col">Marks</th>
                                    <th scope="col">Result</th>
                                    <th scope="col">Center</th>
                                </tr>
                            </thead>
                            <!-- <tbody id="table-data"> -->
                            <tbody id="">

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- tttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt -->


                <div class="p-3 mt-3 d-flex flex-wrap bg-white border rounded ">
                    <div class="form-group w-50 p-2" id="form-group">
                        <label class="fw-bold">Date</label>
                        <input class="form-control w-100" type="date" id="from" name="from">
                    </div>
                    <div class="form-group w-50 p-2" id="form-group">
                        <label class="fw-bold">Select Your Branch</label>
                        <?php 
        $sqlw = "SELECT * FROM `gdfproject_branch` WHERE 1 ";
        $resulte = mysqli_query($conn,$sqlw) or die("query faild to connet in database");
            ?>
                        <select class="form-control member mb-2" name="member" id="institute">
                            <option value="">-Select Your Branch-</option>
                            <?php
                 while($rowe=mysqli_fetch_assoc($resulte))
                 {

                ?>
                            <option value="<?php echo $rowe['id'];?>"><?php echo $rowe['branch_name'];?>
                            </option>

                            <?php
                    };
                    ?>
                        </select>

                    </div>
                    <div class="form-group w-50 p-2" id="form-group">
                        <label class="fw-bold">Course</label>
                        <?php

$sql = "SELECT * FROM gdfproject_course_module";
$result = mysqli_query($conn,$sql) or die("query faild to connet in database");
?>
                        <select class="form-control " name="corse" id="course" required>
                            <option selected value="">-Select Your Course-</option>
                            <?php
while($row=mysqli_fetch_assoc($result))
{
    ?>
                            <option value="<?php echo $row['id'];?>"><?php echo $row['course_name'];?></option>
                            <?php
};
?>
                        </select>
                    </div>
                    <div class="form-group w-50 p-2" id="form-group">
                        <label class="fw-bold">Batch</label>
                        <select class="form-control " name="corse" id="course" required>
                            <option selected value="">Active Batch</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="form-group w-100 p-2 d-flex align-items-end" id="form-group">
                        <button class="btn btn-primary w-100" id="bt" onclick="datechange()">Search</button>
                    </div>
                </div>

                <div class="p-3 mt-3 bg-white border rounded">
                    <div class="w-100 d-flex justify-content-between">
                        <h2 class="p-2 mt-2 text-muted"><i class="fa-sharp fa-solid fa-file-lines mx-2"></i> Exam lineup
                        </h2>
                        <h2 class="p-2 mt-2 text-muted bg-light rounded"><i class="fa-solid fa-filter"></i></h2>
                    </div>
                    <div class="table-responsive border rounded shadow-sm" style="z-index: -1;">
                        <table class="table ">
                            <thead class="bg-light">
                                <tr class="">
                                    <th scope="col">S.No.</th>
                                    <th scope="col">Exam Name</th>
                                    <th scope="col">Batch</th>
                                    <th scope="col">Center</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Creat By</th>
                                </tr>
                            </thead>
                            <tbody id="">

                            </tbody>
                        </table>
                    </div>
                </div>


                <!-- hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh -->

                <div class="p-3 mt-3 d-flex flex-wrap bg-white border rounded ">

                    <div class="form-group w-50 p-2" id="form-group">
                        <label class="fw-bold">Date</label>
                        <input class="form-control w-100" type="date" id="from" name="from">
                    </div>

                    <div class="form-group w-50 p-2" id="form-group">
                        <label class="fw-bold">Center</label>
                        <?php 
        $sqlw = "SELECT * FROM `gdfproject_branch` WHERE 1 ";
        $resulte = mysqli_query($conn,$sqlw) or die("query faild to connet in database");
            ?>
                        <select class="form-control member mb-2" name="member" id="institute">
                            <option value="">-Select Your Branch-</option>
                            <?php
                 while($rowe=mysqli_fetch_assoc($resulte))
                 {

                ?>
                            <option value="<?php echo $rowe['id'];?>"><?php echo $rowe['branch_name'];?>
                            </option>

                            <?php
                    };
                    ?>
                        </select>

                    </div>
                    <div class="form-group w-50 p-2" id="form-group">
                        <label class="fw-bold">Module</label>
                        <?php

$sql = "SELECT * FROM gdfproject_course_module";
$result = mysqli_query($conn,$sql) or die("query faild to connet in database");
?>
                        <select class="form-control " name="corse" id="course" required>
                            <option selected value="">-Select Your Course-</option>
                            <?php
while($row=mysqli_fetch_assoc($result))
{
    ?>
                            <option value="<?php echo $row['id'];?>"><?php echo $row['course_name'];?></option>
                            <?php
};
?>
                        </select>
                    </div>
                    <div class="form-group w-50 p-2" id="form-group">
                        <label class="fw-bold">Batch ID</label>
                        <select class="form-control " name="corse" id="course" required>
                            <option selected value="">Select Your Course</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="form-group w-100 p-2 d-flex align-items-end" id="form-group">
                        <button class="btn btn-primary w-100" id="bt" onclick="datechange()">Search</button>
                    </div>
                </div>

                <div class="p-3 mt-3 bg-white border rounded">
                    <div class="w-100 d-flex justify-content-between">
                        <h2 class="p-2 mt-2 text-muted"><i class="fa-sharp fa-solid fa-file-lines mx-2"></i> Exam lineup
                        </h2>
                        <h2 class="p-2 mt-2 text-muted bg-light rounded"><i class="fa-solid fa-filter"></i></h2>
                    </div>
                    <div class="table-responsive border rounded shadow-sm" style="z-index: -1;">
                        <table class="table ">
                            <thead class="bg-light">
                                <tr class="">
                                    <th scope="col">S.No.</th>
                                    <th scope="col">Exam Name</th>
                                    <th scope="col">Batch</th>
                                    <th scope="col">Center</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Creat By</th>
                                </tr>
                            </thead>
                            <tbody id="">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
function datechange() {
    var from_date = document.getElementById("from").value;
    var to_date = document.getElementById("to").value;
    var institue = document.getElementById("institute").value;
    loadTable(from_date, to_date, institue);
}

function loadTable(date1, date2, date3) {
    $.ajax({
        url: "visitD.php",
        type: "POST",
        data: {
            date1: date1,
            date2: date2,
            date3: date3
        },
        success: function(response) {
            $("#table-data").html(response);
        }
    });
}
loadTable();
</script>



</html>
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
                <h1 class="px-2">Create Exam Form</h1>
                <hr>
                <form action="createExamdb.php" method="GET">
                    <div class="p-3 d-flex flex-wrap bg-white border rounded ">
                        <div class="form-group w-50 p-2" id="form-group">
                            <label class="fw-bold">Exam Name</label>
                            <input class="form-control w-100" type="text" id="examName" name="examName">
                        </div>
                        <div class="form-group w-50 p-2" id="form-group">
                            <label class="fw-bold">Exam Code</label>
                            <input class="form-control w-100" type="text" id="examCode" name="examCode">
                        </div>
                        <div class="form-group w-50 p-2" id="form-group">
                            <label class="fw-bold">Exam Time</label>
                            <input class="form-control w-100" type="text" id="examTime" name="examTime">
                        </div>
                        <div class="form-group w-50 p-2" id="form-group">
                            <label class="fw-bold">Total Marks</label>
                            <input class="form-control w-100" type="text" id="totalMarks" name="totalMarks">
                        </div>
                        <div class="form-group w-50 p-2" id="form-group">
                            <label class="fw-bold">Module Name</label>
                            <select class="form-control member mb-2" name="examModule" id="examModule">
                                <option value="">-Select Your Type Exam-</option>
                                <?php
                                include 'connections.php';
                                $sql = "SELECT * From `gdfproject_module` where 1";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_array($result)){
                                ?>
                                <option value="<?php echo $row['module_name']?>">
                                    <?php echo $row['module_name'] ?></option>
                                <?php }?>
                            </select>
                        </div>
                        <div class="form-group w-50 p-2" id="form-group">
                            <label class="fw-bold">Exam Type</label>
                            <select class="form-control member mb-2" name="examType" id="examType">
                                <option value="">-Select Your Type Exam-</option>
                                <option value="Internal">Internal</option>
                                <option value="Diploma">Diploma</option>
                                <option value="Class">Class</option>
                                <option value="Monthly">Monthly</option>
                                <option value="Certificate">Certificate</option>
                            </select>
                        </div>
                        <div class="form-group w-50 p-2" id="form-group">
                            <label class="fw-bold">Exam Mode</label>
                            <select class="form-control member mb-2" name="examMode" id="examMode">
                                <option value="">-Select Your Exam Mode-</option>
                                <option value="Online">Online</option>
                                <option value="Offline">Offline</option>
                            </select>
                        </div>
                        <div class="form-group w-50 p-2" id="form-group">
                            <label class="fw-bold">Exam Active or Deactive</label>
                            <select class="form-control member mb-2" name="isActive" id="institute">
                                <option value="">-Select Your Branch-</option>
                                <option value="1">Is Active</option>
                                <option value="0">Is Defaule</option>
                            </select>
                        </div>
                        <div class="form-group w-50 p-2 d-flex align-items-end" id="form-group">
                            <button class="btn btn-primary w-100" id="bt" onclick="datechange()">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</html>
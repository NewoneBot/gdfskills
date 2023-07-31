<?php
session_start();
if(isset($_SESSION["registeration_no"]))
{
?>

<head>
    <title>Student Projects:: GDF</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="GDF">

    <?php include 'links.php';?>
    <style>

    </style>
</head>

<body oncontextmenu="return false;">
    <!-- home -->
    <div id="home" class="inner-gdf-page">
        <div class="overlay-innerpage">
            <?php include 'profile_header.php'; ?>
        </div>
        <!-- //banner -->
    </div>
    <div class="container py-5">
        <div class="row ">
            <div class="col-md-9">
                <h4 class=" text-primary text-center">Upload Projects / Assignments</h4>
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class="form-control" name="titleTF" placeholder="File Title" required>
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control-file border" name="chooseFile1" id="chooseFile1"
                            required>
                    </div>
                    <br>
                    <button class="btn btn-success py-2" name="sub">Submit</button>
                </form>
                <?php
                if(isset($_POST["sub"]))
                {
                    $target="student-project/";
                    $target_dir1 = $target.basename($_FILES['chooseFile1']['name']);
                    $filename1 = $_FILES["chooseFile1"]["name"];
                    
                    if($filename1!="" || $filename1!=null)
                    {
                    if (file_exists($target_dir1)) {
                    ?>
                <script>
                alert("file already exists with same name.");
                </script>
                <?php
                    }else {
                        if (move_uploaded_file($_FILES["chooseFile1"]["tmp_name"], $target_dir1)) {
                            include 'connection.php';
                                if (!$conn) {
                                    die("Connection failed: " . mysqli_connect_error($conn));
                                } 
                                
                                else {
                                        $fileTF = $_POST["titleTF"];
                                        $reg = $_SESSION["student_reg_no"];
                                        $sql = "INSERT INTO `project_assignment`(`student_reg_no`, `title`, `file`) VALUES('$reg','$fileTF','$filename1')"; 
                                        mysqli_query($conn,$sql);
                                        echo "<h5 style='color:red;'>Uploaded Successfully</h5>";
                                     }
                                } else {
                                        header("Location:student-project.php");
                                }
                            }   
                        }
                    }
            ?>
            </div>
        </div>
    </div>

    <div class="container py-3">
        <div class="row ">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr class="bg-success">
                        <th>S No.</th>
                        <th>Title</th>
                        <th>File</th>
                    </tr>
                    <tbody>
                        <?php
                            include 'connection.php';
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error($conn));
                            } 
                            
                            else {
                                $reg = $_SESSION["student_reg_no"];
                                $psql="select * from project_assignment where student_reg_no='$reg'";
                                $result = mysqli_query($conn,$psql);
                                if(mysqli_num_rows($result)>0)
                                {
                                    $i=0;
                                    while($data = mysqli_fetch_assoc($result))
                                    {
                                        ?>
                        <td><?php echo ++$i; ?></td>
                        <td><?php echo $data["title"]; ?></td>
                        <td><?php echo $data["file"]; ?></td>
                        <?php
                                    }
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include '../gdf_footer.php'; ?>
    <!-- //footer -->
    <!-- copyright -->
    <div class="copy_right p-3 d-flex justify-content-around">

        <p>© 2016 GDF. All rights reserved
        </p>

    </div>
    <!-- //copyright -->
    <script>
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
    </script>
</body>
<?php
}
else
{
  header("Location:../login.php");
}
?>
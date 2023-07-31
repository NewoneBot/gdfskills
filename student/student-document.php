<?php
session_start();
if(isset($_SESSION["registeration_no"]))
{
?>

<head>
    <title>Student Document:: GDF</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="GDF" />
    <?php include 'links.php'; ?>
    <style>
    .file-upload1 {
        display: block;
        text-align: center;
        font-family: Helvetica, Arial, sans-serif;
        font-size: 12px;
    }

    .file-upload1 .file-select1 {
        display: block;
        border: 2px solid #dce4ec;
        color: #34495e;
        cursor: pointer;
        height: 40px;
        line-height: 40px;
        text-align: left;
        background: #FFFFFF;
        overflow: hidden;
        position: relative;
    }

    .file-upload1 .file-select1 .file-select-button1 {
        background: #dce4ec;
        padding: 0 10px;
        display: inline-block;
        height: 40px;
        line-height: 40px;
    }

    .file-upload1 .file-select1 .file-select-name1 {
        line-height: 40px;
        display: inline-block;
        padding: 0 10px;
    }

    .file-upload1 .file-select1:hover {
        border-color: #34495e;
        transition: all .2s ease-in-out;
        -moz-transition: all .2s ease-in-out;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
    }

    .file-upload1 .file-select1:hover .file-select-button1 {
        background: #34495e;
        color: #FFFFFF;
        transition: all .2s ease-in-out;
        -moz-transition: all .2s ease-in-out;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
    }

    .file-upload1.active1 .file-select1 {
        border-color: #3fa46a;
        transition: all .2s ease-in-out;
        -moz-transition: all .2s ease-in-out;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
    }

    .file-upload1.active1 .file-select1 .file-select-button1 {
        background: #3fa46a;
        color: #FFFFFF;
        transition: all .2s ease-in-out;
        -moz-transition: all .2s ease-in-out;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
    }

    .file-upload1 .file-select1 input[type=file] {
        z-index: 100;
        cursor: pointer;
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        opacity: 0;
        filter: alpha(opacity=0);
    }

    .file-upload1 .file-select1.file-select-disabled1 {
        opacity: 0.65;
    }

    .file-upload1 .file-select1.file-select-disabled1:hover {
        cursor: default;
        display: block;
        border: 2px solid #dce4ec;
        color: #34495e;
        cursor: pointer;
        height: 40px;
        line-height: 40px;
        margin-top: 5px;
        text-align: left;
        background: #FFFFFF;
        overflow: hidden;
        position: relative;
    }

    .file-upload1 .file-select1.file-select-disabled1:hover .file-select-button1 {
        background: #dce4ec;
        color: #666666;
        padding: 0 10px;
        display: inline-block;
        height: 40px;
        line-height: 40px;
    }

    .file-upload1 .file-select1.file-select-disabled1:hover .file-select-name1 {
        line-height: 40px;
        display: inline-block;
        padding: 0 10px;
    }

    .file-upload2 {
        display: block;
        text-align: center;
        font-family: Helvetica, Arial, sans-serif;
        font-size: 12px;
    }

    .file-upload2 .file-select2 {
        display: block;
        border: 2px solid #dce4ec;
        color: #34495e;
        cursor: pointer;
        height: 40px;
        line-height: 40px;
        text-align: left;
        background: #FFFFFF;
        overflow: hidden;
        position: relative;
    }

    .file-upload2 .file-select2 .file-select-button2 {
        background: #dce4ec;
        padding: 0 10px;
        display: inline-block;
        height: 40px;
        line-height: 40px;
    }

    .file-upload2 .file-select2 .file-select-name2 {
        line-height: 40px;
        display: inline-block;
        padding: 0 10px;
    }

    .file-upload2 .file-select2:hover {
        border-color: #34495e;
        transition: all .2s ease-in-out;
        -moz-transition: all .2s ease-in-out;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
    }

    .file-upload2 .file-select2:hover .file-select-button2 {
        background: #34495e;
        color: #FFFFFF;
        transition: all .2s ease-in-out;
        -moz-transition: all .2s ease-in-out;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
    }

    .file-upload2.active2 .file-select2 {
        border-color: #3fa46a;
        transition: all .2s ease-in-out;
        -moz-transition: all .2s ease-in-out;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
    }

    .file-upload2.active2 .file-select2 .file-select-button2 {
        background: #3fa46a;
        color: #FFFFFF;
        transition: all .2s ease-in-out;
        -moz-transition: all .2s ease-in-out;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
    }

    .file-upload2 .file-select2 input[type=file] {
        z-index: 100;
        cursor: pointer;
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        opacity: 0;
        filter: alpha(opacity=0);
    }

    .file-upload2 .file-select2.file-select-disabled2 {
        opacity: 0.65;
    }

    .file-upload2 .file-select2.file-select-disabled2:hover {
        cursor: default;
        display: block;
        border: 2px solid #dce4ec;
        color: #34495e;
        cursor: pointer;
        height: 40px;
        line-height: 40px;
        margin-top: 5px;
        text-align: left;
        background: #FFFFFF;
        overflow: hidden;
        position: relative;
    }

    .file-upload2 .file-select2.file-select-disabled2:hover .file-select-button2 {
        background: #dce4ec;
        color: #666666;
        padding: 0 10px;
        display: inline-block;
        height: 40px;
        line-height: 40px;
    }

    .file-upload2 .file-select2.file-select-disabled2:hover .file-select-name2 {
        line-height: 40px;
        display: inline-block;
        padding: 0 10px;
    }

    .file-upload3 {
        display: block;
        text-align: center;
        font-family: Helvetica, Arial, sans-serif;
        font-size: 12px;
    }

    .file-upload3 .file-select3 {
        display: block;
        border: 2px solid #dce4ec;
        color: #34495e;
        cursor: pointer;
        height: 40px;
        line-height: 40px;
        text-align: left;
        background: #FFFFFF;
        overflow: hidden;
        position: relative;
    }

    .file-upload3 .file-select3 .file-select-button3 {
        background: #dce4ec;
        padding: 0 10px;
        display: inline-block;
        height: 40px;
        line-height: 40px;
    }

    .file-upload3 .file-select3 .file-select-name3 {
        line-height: 40px;
        display: inline-block;
        padding: 0 10px;
    }

    .file-upload3 .file-select3:hover {
        border-color: #34495e;
        transition: all .2s ease-in-out;
        -moz-transition: all .2s ease-in-out;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
    }

    .file-upload3 .file-select3:hover .file-select-button3 {
        background: #34495e;
        color: #FFFFFF;
        transition: all .2s ease-in-out;
        -moz-transition: all .2s ease-in-out;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
    }

    .file-upload3.active3 .file-select3 {
        border-color: #3fa46a;
        transition: all .2s ease-in-out;
        -moz-transition: all .2s ease-in-out;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
    }

    .file-upload3.active3 .file-select3 .file-select-button3 {
        background: #3fa46a;
        color: #FFFFFF;
        transition: all .2s ease-in-out;
        -moz-transition: all .2s ease-in-out;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
    }

    .file-upload3 .file-select3 input[type=file] {
        z-index: 100;
        cursor: pointer;
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        opacity: 0;
        filter: alpha(opacity=0);
    }

    .file-upload3 .file-select3.file-select-disabled3 {
        opacity: 0.65;
    }

    .file-upload3 .file-select3.file-select-disabled3:hover {
        cursor: default;
        display: block;
        border: 2px solid #dce4ec;
        color: #34495e;
        cursor: pointer;
        height: 40px;
        line-height: 40px;
        margin-top: 5px;
        text-align: left;
        background: #FFFFFF;
        overflow: hidden;
        position: relative;
    }

    .file-upload3 .file-select3.file-select-disabled3:hover .file-select-button3 {
        background: #dce4ec;
        color: #666666;
        padding: 0 10px;
        display: inline-block;
        height: 40px;
        line-height: 40px;
    }

    .file-upload3 .file-select3.file-select-disabled3:hover .file-select-name3 {
        line-height: 40px;
        display: inline-block;
        padding: 0 10px;
    }


    .file-upload4 {
        display: block;
        text-align: center;
        font-family: Helvetica, Arial, sans-serif;
        font-size: 12px;
    }

    .file-upload4 .file-select4 {
        display: block;
        border: 2px solid #dce4ec;
        color: #34495e;
        cursor: pointer;
        height: 40px;
        line-height: 40px;
        text-align: left;
        background: #FFFFFF;
        overflow: hidden;
        position: relative;
    }

    .file-upload4 .file-select4 .file-select-button4 {
        background: #dce4ec;
        padding: 0 10px;
        display: inline-block;
        height: 40px;
        line-height: 40px;
    }

    .file-upload4 .file-select4 .file-select-name4 {
        line-height: 40px;
        display: inline-block;
        padding: 0 10px;
    }

    .file-upload4 .file-select4:hover {
        border-color: #34495e;
        transition: all .2s ease-in-out;
        -moz-transition: all .2s ease-in-out;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
    }

    .file-upload4 .file-select4:hover .file-select-button4 {
        background: #34495e;
        color: #FFFFFF;
        transition: all .2s ease-in-out;
        -moz-transition: all .2s ease-in-out;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
    }

    .file-upload4.active4 .file-select4 {
        border-color: #3fa46a;
        transition: all .2s ease-in-out;
        -moz-transition: all .2s ease-in-out;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
    }

    .file-upload4.active4 .file-select4 .file-select-button4 {
        background: #3fa46a;
        color: #FFFFFF;
        transition: all .2s ease-in-out;
        -moz-transition: all .2s ease-in-out;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
    }

    .file-upload4 .file-select4 input[type=file] {
        z-index: 100;
        cursor: pointer;
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        opacity: 0;
        filter: alpha(opacity=0);
    }

    .file-upload4 .file-select4.file-select-disabled4 {
        opacity: 0.65;
    }

    .file-upload4 .file-select4.file-select-disabled4:hover {
        cursor: default;
        display: block;
        border: 2px solid #dce4ec;
        color: #34495e;
        cursor: pointer;
        height: 40px;
        line-height: 40px;
        margin-top: 5px;
        text-align: left;
        background: #FFFFFF;
        overflow: hidden;
        position: relative;
    }

    .file-upload4 .file-select4.file-select-disabled4:hover .file-select-button4 {
        background: #dce4ec;
        color: #666666;
        padding: 0 10px;
        display: inline-block;
        height: 40px;
        line-height: 40px;
    }

    .file-upload4 .file-select4.file-select-disabled4:hover .file-select-name4 {
        line-height: 40px;
        display: inline-block;
        padding: 0 10px;
    }
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
            <div class="col-md-12 custyle">
                <h4 class="text-center">Upload Your Documents</h4>
                <form action="studentDocumentDB.php" method="post" enctype="multipart/form-data">
                    <div class="row py-5">
                        <div class="col-md-3">
                            <div class="file-upload1">
                                <div class="file-select1">
                                    <div class="file-select-button1" id="fileName1">Choose File</div>
                                    <div class="file-select-name1" id="noFile1">Aadhar Card</div>
                                    <input type="file" name="chooseFile1" id="chooseFile1">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="file-upload2">
                                <div class="file-select2">
                                    <div class="file-select-button2" id="fileName2">Choose File</div>
                                    <div class="file-select-name2" id="noFile2">10th Marksheet</div>
                                    <input type="file" name="chooseFile2" id="chooseFile2">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="file-upload3">
                                <div class="file-select3">
                                    <div class="file-select-button3" id="fileName3">Choose File</div>
                                    <div class="file-select-name3" id="noFile3">12th Marksheet</div>
                                    <input type="file" name="chooseFile3" id="chooseFile3">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="file-upload4">
                                <div class="file-select4">
                                    <div class="file-select-button4" id="fileName4">Choose File</div>
                                    <div class="file-select-name4" id="noFile4">Student Photo</div>
                                    <input type="file" name="chooseFile4" id="chooseFile4">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-5">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary btn-lg active">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr class="bg-primary">
                        <th>S.No</th>
                        <th>Documents</th>
                        <th>Status</th>
                    </tr>
                    <tbody id="document">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- footer -->
    <!-- //copyright -->
    <script>
    $(document).ready(function() {

        $('#chooseFile1').bind('change', function() {
            var filename = $("#chooseFile1").val();
            if (/^\s*$/.test(filename)) {
                $(".file-upload1").removeClass('active1');
                $("#noFile1").text("No file chosen...");
            } else {
                $(".file-upload1").addClass('active1');
                $("#noFile1").text(filename.replace("C:\\fakepath\\", ""));
            }
        });
        $('#chooseFile2').bind('change', function() {
            var filename = $("#chooseFile2").val();
            if (/^\s*$/.test(filename)) {
                $(".file-upload2").removeClass('active2');
                $("#noFile2").text("No file chosen...");
            } else {
                $(".file-upload2").addClass('active2');
                $("#noFile2").text(filename.replace("C:\\fakepath\\", ""));
            }
        });

        $('#chooseFile3').bind('change', function() {
            var filename = $("#chooseFile3").val();
            if (/^\s*$/.test(filename)) {
                $(".file-upload3").removeClass('active3');
                $("#noFile3").text("No file chosen...");
            } else {
                $(".file-upload3").addClass('active3');
                $("#noFile3").text(filename.replace("C:\\fakepath\\", ""));
            }
        });

        $('#chooseFile4').bind('change', function() {
            var filename = $("#chooseFile4").val();
            if (/^\s*$/.test(filename)) {
                $(".file-upload4").removeClass('active4');
                $("#noFile4").text("No file chosen...");
            } else {
                $(".file-upload4").addClass('active4');
                $("#noFile4").text(filename.replace("C:\\fakepath\\", ""));
            }
        });
    });

    function show() {
        $.ajax({
            url: "getDocumentDB.php",
            type: "POST",
            success: function(result) {
                $("#document").html(result);
            }
        });
    }
    show();
    </script>
</body>
<?php
}
else
{
  header("Location:../login.php");
}
?>
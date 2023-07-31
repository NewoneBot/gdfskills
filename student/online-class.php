<?php
session_start();
if(isset($_SESSION["registeration_no"]))
{
?>

<head>
    <title>Student Classes:: GDF</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="GDF" />

    <?php include 'links.php'; ?>
    <script>
    $(document).ready(function() {
        //$("#myModal").modal('show');
    });
    </script>
    <style>
    .modal-pop {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content-pop {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 60%;
    }

    .closeFees {
        color: black;
        font-size: 28px;
        font-weight: bold;
    }

    .closeFees:hover,
    .closeFees:focus {
        color: red;
        text-decoration: none;
        cursor: pointer;
    }

    .cui-ctl-iconContainer14 {
        display: none;
    }
    </style>
</head>

<body>
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
                <h4 class=" text-primary text-center">Online Session Details</h4>
                <table class="table">
                    <tr>
                        <td class="text-center" colspan="2">URL</td>
                        <td class="text-center" colspan="2">
                            <?php
                        include 'connection.php';
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error($conn));
                            } 
                            else {                
                                $isOK=0;
                                $sSQL="select student_batch_id from student where registeration_no='".$_SESSION["registeration_no"]."'";
                                $sres=mysqli_query($conn,$sSQL);
                                if(mysqli_num_rows($sres)>0)
                                {
                                    if($s=mysqli_fetch_assoc($sres))
                                    {
                                        $sBatchID = $s["student_batch_id"];
                                    }
                                }
                                
                                $urlSQL="select * from online_class_url where is_active='1'";
                                $urlRes=mysqli_query($conn,$urlSQL);
                                if(mysqli_num_rows($urlRes)>0)
                                {
                                    while($url=mysqli_fetch_assoc($urlRes))
                                    {
                                        if($sBatchID==$url["batch_id"])
                                        {
                                            $isOK=1;
                                            $onlineURL=$url["url"];
                                            break;
                                        }
                                    }
                                }
                                if($isOK==1)
                                {
                                    echo "<a href='".$onlineURL."' target='_new'>$onlineURL</a>";
                                }else
                                {
                                    echo "No Session Yet";
                                }
                            }                    
                        ?>
                        </td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
    <h4 class=" text-primary text-center">CCC PPTs</h4>
    <div class="container py-5">
        <div class="row ">
            <div class="col-md-3">
                <iframe
                    src="https://onedrive.live.com/embed?cid=1A3DC0B083382233&resid=1A3DC0B083382233%2112464&authkey=AMFmnxm3nWnfCNg&em=2"
                    width="100%" height="300" frameborder="0" scrolling="no"></iframe>
            </div>
            <div class="col-md-3">
                <iframe
                    src="https://onedrive.live.com/embed?cid=1A3DC0B083382233&resid=1A3DC0B083382233%2112461&authkey=AKb9Tz8CVXSIgbY&em=2"
                    width="100%" height="300" frameborder="0" scrolling="no"></iframe>
            </div>
            <div class="col-md-3">
                <iframe
                    src="https://onedrive.live.com/embed?cid=1A3DC0B083382233&resid=1A3DC0B083382233%2112463&authkey=ANGAUFZRfj22Osk&em=2"
                    width="100%" height="300" frameborder="0" scrolling="no"></iframe>
            </div>
            <div class="col-md-3">
                <iframe
                    src="https://onedrive.live.com/embed?cid=1A3DC0B083382233&resid=1A3DC0B083382233%2112462&authkey=ABIi3lE3z-Dv6Xc&em=2"
                    width="100%" height="300" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-md-3">
                <iframe
                    src="https://onedrive.live.com/embed?cid=1A3DC0B083382233&resid=1A3DC0B083382233%2112458&authkey=AAxhFG13wg3Q22g&em=2"
                    width="100%" height="300" frameborder="0" scrolling="no"></iframe>
            </div>
            <div class="col-md-3">
                <iframe
                    src="https://onedrive.live.com/embed?cid=1A3DC0B083382233&resid=1A3DC0B083382233%2112460&authkey=AN34xiBK7QDBvKo&em=2"
                    width="100%" height="300" frameborder="0" scrolling="no"></iframe>
            </div>
            <div class="col-md-3">
                <iframe
                    src="https://onedrive.live.com/embed?cid=1A3DC0B083382233&resid=1A3DC0B083382233%2112457&authkey=AKn8RmZMIRY1srM&em=2"
                    width="100%" height="300" frameborder="0" scrolling="no"></iframe>
            </div>
            <div class="col-md-3">
                <iframe
                    src="https://onedrive.live.com/embed?cid=1A3DC0B083382233&resid=1A3DC0B083382233%2112459&authkey=AAwcp4gCoApLL00&em=2"
                    width="100%" height="300" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-md-3">
                <iframe
                    src="https://onedrive.live.com/embed?cid=1A3DC0B083382233&resid=1A3DC0B083382233%2112456&authkey=AD02B7EVf0toa3o&em=2"
                    width="100%" height="300" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>
    </div>

    <!-- online ppt -->
    <?php
    if($_SESSION['course_id']=='53' ||$_SESSION['course_id']=='54')
    {
    ?>
    <h4 class=" text-primary text-center">Accounts PPTs</h4>
    <div class="container py-5">
        <div class="row ">
            <div class="col-md-3">
                <iframe
                    src="https://onedrive.live.com/embed?cid=1A3DC0B083382233&resid=1A3DC0B083382233%2112418&authkey=AG8ZwStuvJGV-z8&em=2"
                    width="100%" height="300" frameborder="0" scrolling="no"></iframe>
            </div>
            <div class="col-md-3">
                <iframe
                    src="https://onedrive.live.com/embed?cid=1A3DC0B083382233&resid=1A3DC0B083382233%2112419&authkey=ADSPt-Nz0fPfqeI&em=2"
                    width="100%" height="300" frameborder="0" scrolling="no"></iframe>
            </div>
            <div class="col-md-3">
                <iframe
                    src="https://onedrive.live.com/embed?cid=1A3DC0B083382233&resid=1A3DC0B083382233%2112417&authkey=ALGOFtqZja_WFDw&em=2"
                    width="100%" height="300" frameborder="0" scrolling="no"></iframe>
            </div>
            <div class="col-md-3">
                <iframe
                    src="https://onedrive.live.com/embed?cid=1A3DC0B083382233&resid=1A3DC0B083382233%2112416&authkey=ADqqqoAWCJFHpII&em=2"
                    width="100%" height="300" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row ">
            <div class="col-md-3">
                <iframe
                    src="https://onedrive.live.com/embed?cid=1A3DC0B083382233&resid=1A3DC0B083382233%2112454&authkey=AHfD8CoC2-g6rpk&em=2"
                    width="100%" height="300" frameborder="0" scrolling="no"></iframe>
            </div>
            <div class="col-md-3">
                <iframe
                    src="https://onedrive.live.com/embed?cid=1A3DC0B083382233&resid=1A3DC0B083382233%2112453&authkey=ACeg8PH_gaJ7FIM&em=2"
                    width="100%" height="300" frameborder="0" scrolling="no"></iframe>
            </div>
            <div class="col-md-3">
                <iframe
                    src="https://onedrive.live.com/embed?cid=1A3DC0B083382233&resid=1A3DC0B083382233%2112452&authkey=APsMCPsg7V-MwGM&em=2"
                    width="100%" height="300" frameborder="0" scrolling="no"></iframe>
            </div>
            <div class="col-md-3">
                <iframe
                    src="https://onedrive.live.com/embed?cid=1A3DC0B083382233&resid=1A3DC0B083382233%2112451&authkey=ALZDnAMheZb2dKY&em=2"
                    width="100%" height="300" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <?php
    if($_SESSION['course_id']=='62' ||$_SESSION['course_id']=='63')
    {
    ?>
    <h4 class=" text-primary text-center">Photoshop PPTs</h4>
    <div class="container py-5">
        <div class="row ">
            <div class="col-md-3">
                <iframe
                    src="https://onedrive.live.com/embed?cid=1A3DC0B083382233&resid=1A3DC0B083382233%2114352&authkey=AKB_N_wADAalT5w&em=2"
                    width="100%" height="300" frameborder="0" scrolling="yes"></iframe>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <?php
    if($_SESSION['course_id']=='62' ||$_SESSION['course_id']=='63' || $_SESSION['course_id']=='64' ||$_SESSION['course_id']=='68')
    {
    ?>
    <h4 class=" text-primary text-center">HTML PPTs</h4>
    <div class="container py-5">
        <div class="row ">
            <div class="col-md-3">
                <iframe
                    src="https://onedrive.live.com/embed?cid=1A3DC0B083382233&resid=1A3DC0B083382233%2114505&authkey=AMwEMlJ5Ff6IvIc&em=2"
                    width="100%" height="300" frameborder="0" scrolling="yes"></iframe>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <!--ppts links -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="myFeesModal" class="modal-pop">
                    <div class="modal-content-pop">
                        <p class="closeFees">CLOSE &times;</p>
                        <div class="row py-2">
                            <div class="col-md-12">
                                <h4>It is to inform that all students submit their fees before 20 June.</h4>
                            </div>
                        </div>
                        <h4 class="bg-header"> STUDENT HAVE ANY ISSUE REGARDING CLASSES. PLEASE CONTACT ON:</h4>
                        <h4>1) +91 98 917 686 67</h4>
                        <h4>2) +91 97 177 501 64</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->

    <!-- //footer -->
    <!-- copyright -->
    <div class="copy_right p-3 d-flex justify-content-around">

        <p>© 2016 GDF. All rights reserved
        </p>
    </div>
    <!-- //copyright -->
    <script>
    var modal = document.getElementById("myFeesModal");
    var span = document.getElementsByClassName("closeFees")[0];
    modal.style.display = "block";
    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
</body>
<?php
}
else
{
  header("Location:../login.php");
}
?>
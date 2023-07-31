<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Verification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<style>
.all {
    height: 463px;
    border-radius: 10px;
    position: relative;
}

#trap label {
    font-family: cursive;
    font-size: 40px;
    color: rgb(0 0 0);
    font-weight: 600;
    pedding-left: 20px;
    margin-left: 18px;
}

#trap p {
    font-weight: 700;
    margin-right: 22px;
    font-size: 27px;
    font-family: cursive;
}

img {
    margin-top: 50px;
    z-index: -1;
    height: 1419px;
    width: 1154px;
    position: absolute;
    left: 5px;
    padding-bottom: 69px;
}

.profile-head {
    padding: 15px;
    position: relative;
    top: 645px;
    left: 73px;
    width: 998px;
}

@media (max-width: 900px) {

    .profile-head {
        padding: 15px;
        position: relative;
        top: 645px;
        left: -17px;
        width: 998px;
    }

    img {
        margin-top: -2px;
        z-index: -1;
        padding: 20px;
        height: 1419px;
        width: 1154px;
        position: absolute;
        left: -72px;
        padding-bottom: 39px;
    }

}


@media (max-width: 700px) {
    .profile-head {
        padding: 0px;
        position: relative;
        top: 558px;
        left: -168px;
        width: 1001px;
    }

    #trap p {
        font-weight: 700;
        margin-right: -300px;
        font-size: 27px;
        font-family: cursive;
    }
}


@media (max-width: 500px) {
    img {
        margin-top: 10px;
        z-index: -1;
        padding: 18px;
        height: 1462px;
        width: 1097px;
        position: absolute;
        left: 1px;
    }

    #trap p {
        font-weight: 700;
        margin-right: 102px;
        font-size: 27px;
        font-family: cursive;
    }

    .profile-head {
        padding: 0px;
        position: relative;
        top: 594px;
        left: 95px;
        width: 1001px;
    }
}
</style>

<body>


    <?php
    include 'connection.php';
mysqli_close($conn);
?>

    <div class="container emp-profile">
        <form action="profileDB.php" id="formId" method="post" enctype="multipart/form-data">
            <div class="row">


                <div class="col-md-12">
                    <div class="all" id="profile">
                        <h2><a href="back.php">Back to home</a></h2>
                        <img src="img/cert.jpg">
                        <div class="profile-head">



                            <div class="container justify-content-between d-flex" id="trap">
                                <label>Student Name :-</label>
                                <p><?php echo strtoupper($_SESSION["fname"]." ".$_SESSION["lname"]); ?>
                                </p>
                            </div>
                            <br>
                            <div class="container justify-content-between d-flex" id="trap">
                                <label>Father's Name :-</label>
                                <p><?php echo $_SESSION["fathername"];?></p>
                            </div>
                            <br>

                            <div class="container justify-content-between d-flex" id="trap">
                                <label>Enrollment No :-</label>
                                <p><?php echo $_SESSION["registeration_no"]; ?></p>
                            </div>
                            <br>



                            <div class="container justify-content-between d-flex" id="trap">
                                <label>Course :-</label>
                                <p><?php echo $_SESSION["course_name"]; ?></p>
                            </div>

                            <br>


                            <div class="container justify-content-between d-flex" id="trap">
                                <label>Date Of Admission :-</label>
                                <p><?php echo $_SESSION["admission_date"]; ?></p>
                            </div>
                            <br>

                        </div>

</body>




</html>
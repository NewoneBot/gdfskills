<?php

include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["student_user"];
    $password = $_POST["student_pass"];
    $mammber_roll = $_POST["mammber_roll"];
    $sql = "SELECT * FROM gdf_logins WHERE user_id = '$mammber_roll' AND user_name = '$username' AND  user_pass = '$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) >= 0) {
        if($row=mysqli_fetch_assoc($result)){
        $_SESSION["user_id"]=$row["user_id"];        
        $_SESSION["user_name"]=$row["user_name"];        
        $_SESSION["user_pass"]=$row["user_pass"];        
        header("Location: Admin/admin.php");
     }
    }
    else {
        echo "your not vailed for login";
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
</head>
<style>
#demo {
    height: auto;
    margin: 0 auto;
}
</style>

<body id="demo">
    <?php include 'header.php';?>
    <section class="login">
        <div class="container">
            <h3 class="tittle-gdf">Teachers Logins</h3>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <div class="row ">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="textbox" class="form-control" name="student_user"
                                placeholder="Please Enter your ID">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="student_pass"
                                placeholder="Please Enter your Password" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Login Roll</label>
                            <select class="form-control" name="mammber_roll">
                                <option>-Selecte roll-</option>
                                <option value="1">Super Admin</option>
                                <option value="0">Center head</option>
                                <option value="0">Teachers</option>
                            </select>
                        </div>
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-success w-100 submit mt-4">Login</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <?php include 'footer.php';?>
</body>

</html>
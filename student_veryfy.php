<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Veryfy</title>
</head>

<body>
    <?php include 'header.php';?>

    <section class="login">
        <div class="container">
            <h3 class="tittle-gdf">Veryfy your ID</h3>
            <div class="row">
                <div class="col-lg-6">
                    <form action="veryfyDB.php" method="get">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="textbox" class="form-control" name="student_user" id="validationDefault01"
                                placeholder="Please Enter your ID" required>
                        </div>
                        <button type="submit" class="btn btn-success submit mb-4">Show</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php';?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php include 'header.php';?>


    <div id="dem">
        <div class="banner_demo">
            <img src="img/e.jpg">
        </div>
    </div>
    <br>
    <div class="container">
        <div class="dam">
            <form action="enquerydb.php" method="post">

                <center>
                    <h3 style="color:white;">ENQUIRY<h3>
                </center>

                <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp"
                        placeholder="Full Name" required>
                </div>

                <div class="form-group">
                    <input type="text" name="father" class="form-control" id="fname" aria-describedby="emailHelp"
                        placeholder="Father Name" required>
                </div>

                <div class="form-group" id="cor">

                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="mynum" placeholder="Mobile" name="num" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Address" name="loc" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <br>
    <br>
    <br id="br">
    <br id="br">
    <br id="br">
    <br id="br">
    <?php include 'footer.php';?>
</body>

<script>
$.ajax({
    url: "course.php",
    type: "post",
    success: function(result) {
        $("#cor").html(result);
    }
});
</script>

</html>
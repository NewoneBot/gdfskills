<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icon.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php include 'header.php'?>

    <section class="vh-120 gradient-custom pt-5 mt-5">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100 mt-5 pt-5">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">

                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Please Enter Your Phone number for Free
                                Job Traning Programe</h3>



                            <form name="RegForm" onSubmit="return validateForm();" action="otp.php" method="post"
                                class="mt-5">


                                <input type="text" placeholder="Mobile number" name="num" class="form-control"><br>
                                <input type="submit" class="btn btn-primary" value="Send OTP" name="btn" on>


                            </form>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php'?>

</body>
<script>
function validateForm() {
    var phoneNo = document.forms["RegForm"]["num"];
    var phone = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;

    if (phoneNo.value == "" || phoneNo.value == null || !(phoneNo.value.match(phone))) {
        alert("Please enter valid 10 digit Mobile No.");
        phoneNo.focus();
        return false;
    }

    return true;
}
</script>




</html>
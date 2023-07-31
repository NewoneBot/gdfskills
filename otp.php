<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

$otp = rand(1111,9999);

$no = $_POST['num'];


$postData = "apikey=suyWBu7X6cxrGPDi&senderid=GDFSKL&number={$no}&message=Dear visitor,
Welcome in GDF Skills Govt. Registered Center. Your one time password (OTP) {$otp}.
Regards
GDF Skills&format=json";

$response = httpPOST($postData);

//print_r($response);

echo "OTP sent successfully";

function httpPOST($post){

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,'http://sms.ringinginfotech.in/V2/http-api.php');

curl_setopt($ch, CURLOPT_POST, 1);

curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$output = curl_exec($ch);

curl_close ($ch);

return $output;

}
?>
    <?php include 'header.php';?>
    <?php include 'connection.php';?>
    <?php
	include_once 'connection.php';
	include_once 'header.php';
    
	

        $sql="INSERT INTO `otp`(`phone`, `otp`) VALUES ($no,$otp)";
        
        if(mysqli_query($conn, $sql)){
            
        }
        ?>


    <section class="vh-120 gradient-custom pt-5 mt-5">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100 mt-5 pt-5">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Please Verify your phone OTP</h3>
                            <form action="" method="post" class="mt-5">

                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <div class="form-outline">
                                            <input type="text" id="otp" class="form-control form-control-lg"
                                                placeholder="Enter You Name" name="otp">
                                            <label class="form-label" for="firstName">Verify you phone OTP </label>
                                        </div>
                                        <input class="btn btn-success btn-lg" type="button" onclick="verify()"
                                            value="verify">
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php';?>
</body>
<script>
function verify() {
    var code = document.getElementById('otp').value;
    var otp = '<?php echo $otp;?>';
    // var otp = '1234';
    if (otp == code) {
        window.location.href = 'demo_class.php'
    } else {
        alert('incorrect otp');
    }

}
</script>



</html>
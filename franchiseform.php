<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Franchise</title>
    <style>
    .form {
        border: 2px solid white;
        border-radius: 30px;
    }

    .hide {
        display: none;
    }
    </style>
</head>

<body>

    <?php include "header.php" ?>
    <div class="page_top_img">
        <img src="img/demo.png">
    </div>

    <div class="container p-5  my-3">
        <div class="row form p-3">
            <div class="col-md-6 bg-white d-flex ">
                <div class="page_top_img align-self-center">
                    <img src="img/footer_logo.png" class="w-100 p-0">
                </div>
            </div>
            <div class="col-md-6 text-white bg-warning">
                <form action="fanchisedb.php" class="p-3" method="post">
                    <div class="row mb-3">
                        <div class="col-md-12 mb-3">
                            <h1>Registration Form</h1>
                        </div>
                        <div class="col-md-12 fill">
                            <div>
                                <input type="text" class="form-control my-2" style="font-family:'Font Awesome 5 Free';"
                                    placeholder="&#xf007; Your Name" name="name" required>
                            </div>
                            <div>
                                <select class="form-control mb-2" name="gender" id="" required>
                                    <option selected value="">-Gender-</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>

                            <div>
                                <select class="form-control" name="age" required id="exampleFormControlSelect1">
                                    <option value="15">15 Years</option>
                                    <option value="16">16 Years</option>
                                    <option value="17">17 Years</option>
                                    <option value="18">18 Years</option>
                                    <option value="19">19 Years</option>
                                    <option value="20">20 Years</option>
                                    <option value="21">21 Years</option>
                                    <option value="22">22 Years</option>
                                    <option value="23">23 Years</option>
                                    <option value="24">24 Years</option>
                                    <option value="25">25 Years</option>
                                    <option value="26">26 Years</option>
                                    <option value="27">27 Years</option>
                                    <option value="28">28 Years</option>
                                    <option value="29">29 Years</option>
                                    <option value="30">30 Years</option>
                                    <option value="31">31 Years</option>
                                    <option value="32">32 Years</option>
                                    <option value="33">33 Years</option>
                                    <option value="34">34 Years</option>
                                    <option value="35">35 Years</option>
                                    <option value="36">36 Years</option>
                                    <option value="37">37 Years</option>
                                    <option value="38">38 Years</option>
                                    <option value="39">39 Years</option>
                                    <option value="40">40 Years</option>
                                    <option value="41">41 Years</option>
                                    <option value="42">42 Years</option>
                                    <option value="43">43 Years</option>
                                    <option value="44">44 Years</option>
                                    <option value="45">45 Years</option>
                                    <option value="46">46 Years</option>
                                    <option value="47">47 Years</option>
                                    <option value="48">48 Years</option>
                                    <option value="49">49 Years</option>
                                    <option value="50">50 Years</option>
                                    <option value="51">51 Years</option>
                                    <option value="52">52 Years</option>
                                    <option value="53">53 Years</option>
                                    <option value="54">54 Years</option>
                                    <option value="55">55 Years</option>
                                    <option value="56">56 Years</option>
                                    <option value="57">57 Years</option>
                                    <option value="58">58 Years</option>
                                    <option value="59">59 Years</option>
                                    <option value="60">60 Years</option>
                                </select>
                            </div>

                            <div>
                                <input type="number" style="font-family:'Font Awesome 5 Free';" name="num"
                                    class="form-control my-2" placeholder="Your Active Mobile Number" required>
                            </div>

                            <div>
                                <input type="mail" name="mail" class="form-control my-2"
                                    placeholder="Your Active Email ID" required>
                            </div>

                            <div>
                                <input type="text" name="address" class="form-control my-2"
                                    placeholder="Your Center Locatin Address" required>
                            </div>

                            <div>
                                <input type="text" name="city" class="form-control my-2" placeholder="City" required>
                            </div>

                            <div>
                                <input type="text" name="state" class="form-control my-2" placeholder="State" required>
                            </div>

                            <div>
                                <input type="text" name="pin" class="form-control my-2" placeholder="Pin Code" required>
                            </div>

                            <div>
                                <select class="form-control mb-2" id="" name="center" required>
                                    <option selected value="">-Select Center-</option>
                                    <option value="Software Training Centre">Software Training Centre
                                    </option>
                                    <option value="Accounting and Finance Training Centre">Accounting and
                                        Finance Training Centre</option>
                                    <option value="IT Training Center">IT Training Center</option>
                                    <option value="GDF Skills Franchise Center - 1">GDF Skills Franchise
                                        Center - 1</option>
                                    <option value="GDF Skills Franchise Center - 2">GDF Skills Franchise
                                        Center - 2</option>
                                    <option value="GDF Skills Franchise Center - 3">GDF Skills Franchise
                                        Center - 3</option>
                                </select>
                            </div>

                            <div>
                                <select class="form-control mb-2" name="con" id="sel" required>
                                    <option selected value="">-Are you Already Running Center?-</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <div class="hide" id="show">
                                <input type="text" name="invest" class="form-control my-2"
                                    placeholder="Investment Capicity">

                                <input type="text" name="wopn" class="form-control my-2"
                                    placeholder="City Name Where U Want To Open It">
                            </div>

                            <div>
                                <select class="form-control  mb-2" name="lan" id="" required>
                                    <option selected value="">-Select Your Language-</option>
                                    <option value="hindi">Hindi</option>
                                    <option value="english">English</option>
                                    <option value="both">Both</option>
                                </select>
                            </div>

                            <div>
                                <input type="text" class="form-control my-2" value="" name="area"
                                    placeholder="Other Info." required>
                            </div>
                            <div>
                                <input type="submit" class="btn bg-info text-white" placeholder="Submit">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include "footer.php" ?>
</body>
<script>
$('#sel').on('change', function() {
    if (this.value == "no") {
        $('#show').show();
    } else if (this.value == "yes") {
        $('#show').hide();
    }
});
</script>

</html>
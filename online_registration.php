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



    <section class="vh-120 gradient-custom pt-5 mt-5">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100 mt-5 pt-5">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Online Registration Form</h3>
                            <form>

                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" id="firstName" class="form-control form-control-lg" />
                                            <label class="form-label" for="firstName">Full Name</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" id="lastName" class="form-control form-control-lg" />
                                            <label class="form-label" for="lastName">Father's Name</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 d-flex align-items-center">

                                        <div class="form-outline datepicker w-100">
                                            <input type="text" class="form-control form-control-lg" id="birthdayDate" />
                                            <label for="birthdayDate" class="form-label">Contact Number</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <h6 class="mb-2 pb-1">Gender: </h6>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="femaleGender" value="option1" checked />
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="maleGender" value="option2" />
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="otherGender" value="option3" />
                                            <label class="form-check-label" for="otherGender">Other</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <input type="email" id="emailAddress"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="emailAddress">Email ID</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                                            <label class="form-label" for="phoneNumber">School Name</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">

                                        <select class="select form-control-lg">
                                            <option value="1">Choose Time Slote</option>
                                            <option value="2">9:30AM-10:30AM</option>
                                            <option value="3">11:00AM-12:00PM</option>
                                            <option value="4">4:00PM-5:00PM</option>
                                        </select>


                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">
                                        <select class="select form-control-lg">
                                            <option value="1">Choose Branch</option>
                                            <option value="2">UTTAM NAGAR</option>
                                            <option value="3">EAST AZAD NAGAR</option>
                                            <option value="4">PALAM</option>
                                            <option value="4">NAJAFGARH</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mx-5 pt-2">
                                    <center>
                                        <input class="btn btn-danger btn-lg" type="submit" value="Scholarship">
                                        <input class="btn btn-primary btn-lg" type="submit" value="Submit">
                                        <a href="demo.php">demo class</a>
                                    </center>
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

</html>
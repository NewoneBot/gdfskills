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
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Demo Registration Form</h3>
                            <form action="print_demo.php" method="post">

                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" id="firstName" class="form-control form-control-lg"
                                                placeholder="Enter You Name" name="first_name">
                                            <label class="form-label" for="firstName">Full
                                                Name</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" id="lastName" class="form-control form-control-lg"
                                                placeholder="Enter Father Name" name="father">
                                            <label class="form-label">Father's
                                                Name</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 d-flex align-items-center">

                                        <div class="form-outline datepicker w-100">
                                            <input type="text" class="form-control form-control-lg" id="birthdayDate"
                                                placeholder="Enter You Number" name="contact_number">

                                            <label for="birthdayDate" class="form-label">Contact Number</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" id="lastName" class="form-control form-control-lg"
                                                placeholder="Enter Current address" name="home_add">

                                            <label class="form-label" for="lastName">Home Address</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" id="lastName" class="form-control form-control-lg"
                                                placeholder="School Location" name="school_loc">

                                            <label class="form-label" for="lastName">School Address</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">



                                        <div class="form-outline">
                                            <input type="text" id="lastName" class="form-control form-control-lg"
                                                placeholder="School Name" name="school_name">
                                            <label class="form-label" for="lastName">School Name</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-6 mb-4 pb-2">
                                        <select class="select form-control-lg w-100" name="branch" id="slct1"
                                            onchange="populate(this.id,'slct2')">
                                            <option disabled selected>Choose Branch</option>
                                            <option
                                                value="	A-7A Milap Nagar, 1st floor Uttam nagar east metro gate 2, Uttam Nagar, Delhi, 110059">
                                                UTTAM NAGAR</option>
                                            <option
                                                value="1665, Najafgarh Thana Rd, near Nawada bazar, Prem Nagar, Najafgarh, Delhi, 110043">
                                                NAJAFGARH
                                            </option>
                                            <option
                                                value="apposite State Bank of India, L-5, 1st Floor, L Block Mahaveer Enclave, Main, Palam - Dabri Marg, Palam, Delhi, 110045">
                                                PALAM</option>
                                            <option
                                                value="341/9A,Main Kanti Nagar Chowk metro station, Swami Dayanand Marg, near east azad nagar, Delhi, 110051">
                                                EAST AZAD NAGAR</option>
                                        </select>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <select class="select form-control-lg w-100" name="time" id="slct2">

                                        </select>

                                    </div>
                                    <div class="col-md-12 mb-4 pb-2">

                                        <select class="select form-control-lg w-100" name="courses">
                                            <option value="1">Choose Course</option>
                                            <option value="IT Expert">IT Expert</option>
                                            <option value="E-Accounting">E-Accounting</option>
                                            <option value="FCIT">FCIT</option>
                                            <option value="MDSE">MDSE</option>
                                            <option value="Digital Marketing">Digital Marketing</option>
                                            <option value="Data Analyst">Data Analyst</option>
                                            <option value="Business Aanalyst">Business Aanalyst</option>
                                            <option value="Hardware">Hardware</option>
                                            <option value="Software Engineering">Software Engineering
                                            </option>
                                            <option value="Computer Teacher Training">Computer Teacher
                                                Training</option>
                                            <option value="English speaking">English speaking</option>
                                        </select>

                                    </div>

                                </div>
                                <center>
                                    <div class="col-md-12 ">

                                        <div class="">

                                            <input class="btn btn-primary btn-lg" type="submit" value="Submit">

                                        </div>
                                    </div>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <?php include 'footer.php';?>
</body>
<script>
function populate(s1, s2) {
    var s1 = document.getElementById(s1);
    var s2 = document.getElementById(s2);

    s2.innerHTML = "";

    if (s1.value == "	A-7A Milap Nagar, 1st floor Uttam nagar east metro gate 2, Uttam Nagar, Delhi, 110059") {
        var optionArray = ['9:30AM-10:30AM|9:30AM-10:30AM', '11:00AM-12:00PM|11:00AM-12:00PM',
            '4:00PM-5:00PM|4:00PM-5:00PM'
        ];
    } else if (s1.value ==
        '1665, Najafgarh Thana Rd, near Nawada bazar, Prem Nagar, Najafgarh, Delhi, 110043') {
        var optionArray = ['9:30AM-10:30AM|9:30AM-10:30AM', '11:00AM-12:00PM|11:00AM-12:00PM',
            '4:00PM-5:00PM|4:00PM-5:00PM'
        ];
    } else if (s1.value ==
        'apposite State Bank of India, L-5, 1st Floor, L Block Mahaveer Enclave, Main, Palam - Dabri Marg, Palam, Delhi, 110045'
    ) {
        var optionArray = ['9:30AM-10:30AM|9:30AM-10:30AM', '11:00AM-12:00PM|11:00AM-12:00PM',
            '4:00PM-5:00PM|4:00PM-5:00PM'
        ];
    } else if (s1.value ==
        '341/9A,Main Kanti Nagar Chowk metro station, Swami Dayanand Marg, near east azad nagar, Delhi, 110051') {
        var optionArray = ['9:30AM-10:30AM|9:30AM-10:30AM', '12:30AM-1:30PM|12:30AM-1:30PM',
            '4:00PM-5:00PM|4:00PM-5:00PM'
        ];
    }
    for (var option in optionArray) {
        var pair = optionArray[option].split("|");
        var newoption = document.createElement("option");

        newoption.value = pair[0];
        newoption.innerHTML = pair[1];
        s2.options.add(newoption);
    }
}
</script>

</html>
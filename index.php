<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GDF Skill</title>

    <link rel="icon" href="img/icon.png" type="image/x-icon">

</head>
<style type="text/css">
.testrominal .h2 {
    color: #000;
    font-size: 26px;
    font-weight: 300;
    position: relative;
    margin: 0 0 50px 0;
    text-transform: uppercase;
    display: inline-block;
}

.testrominal .h2::after {
    content: "";
    width: 50%;
    position: absolute;
    height: 4px;
    border-radius: 1px;
    background: #ff5555;
    left: 0;
    bottom: -20px;
}

.testrominal .carousel {
    margin: 50px auto;
}

.testrominal .carousel .carousel-item {
    color: #999;
    overflow: hidden;
    min-height: 120px;
    font-size: 13px;
}

.testrominal .carousel .media {
    position: relative;
    padding: 0 0 0 20px;
    margin-left: 20px;
}

.testrominal .carousel .media img {
    width: 75px;
    height: 75px;
    display: block;
    border-radius: 50%;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    border: 2px solid #fff;
}

.testrominal .carousel .testimonial {
    color: #fff;
    position: relative;
    background: #9b9b9b;
    padding: 15px;
    margin: 0 0 20px 20px;
}

.testrominal .carousel .testimonial::before,
.testrominal .carousel .testimonial::after {
    content: "";
    display: inline-block;
    position: absolute;
    left: 0;
    bottom: -20px;
}

.testrominal .carousel .testimonial::before {
    width: 20px;
    height: 20px;
    background: #9b9b9b;
    box-shadow: inset 12px 0 13px rgba(0, 0, 0, 0.5);
}

.testrominal .carousel .testimonial::after {
    width: 0;
    height: 0;
    border: 10px solid transparent;
    border-bottom-color: #fff;
    border-left-color: #fff;
}

.testrominal .carousel .carousel-item .row>div:first-child .testimonial {
    margin: 0 20px 20px 0;
}

.testrominal .carousel .carousel-item .row>div:first-child .media {
    margin-left: 0;
}

.testrominal .carousel .testimonial p {
    text-indent: 40px;
    line-height: 21px;
    margin: 0;
}

.testrominal .carousel .testimonial p::before {
    content: "\201D";
    font-family: Arial, sans-serif;
    color: #fff;
    font-weight: bold;
    font-size: 68px;
    line-height: 70px;
    position: absolute;
    left: -25px;
    top: 0;
}

.testrominal .carousel .overview {
    padding: 3px 0 0 15px;
}

.testrominal .carousel .overview .details {
    padding: 5px 0 8px;
}

.testrominal .carousel .overview b {
    text-transform: uppercase;
    color: #ff5555;
}



.star-rating li {
    padding: 0 2px;
}

.star-rating i {
    font-size: 14px;
    color: #ffdc12;
}
</style>

<body>

    <?php include 'header.php';?>
    <!----------------------------------------------------slider start----------------------->

    <div class="section-1 d-flex flex-column">
        <div class="page_top_img">
            <div class="inner-image w-100">
                <img src="image/1.webp" class="w-100" alt="">
            </div>
        </div>
        <div class="inner-content position-absolute h-100 w-100">
            <div class="container pt-5">
                <div class="row pt-5 mt-5">
                    <div class="col-md-8 pt-5 d-flex justify-content-center">
                        <div class="d-flex align-items-center search w-75">
                            <div class="flex-column w-100">
                                <div class="d-flex w-100 pb-5">
                                    <input class="form-control" type="search">
                                    <button class="btn searchbtn"><i class="fa fa-search "
                                            aria-hidden="true"></i></button>
                                </div>
                                <div class="innercourse">
                                    <ul class="d-flex flex-wrap justify-content-center">
                                        <li>Course After - 10 <i class="fa fa-arrow-circle-right"
                                                aria-hidden="true"></i></li>
                                        <li>Course After - 12 <i class="fa fa-arrow-circle-right"
                                                aria-hidden="true"></i></li>
                                        <li>Accounting Course <i class="fa fa-arrow-circle-right"
                                                aria-hidden="true"></i></li>
                                        <li>Digital Marketing <i class="fa fa-arrow-circle-right"
                                                aria-hidden="true"></i></li>
                                        <li>IT Course <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-12 py-5 px-3">
                        <form class="d-flex flex-column text-white text-center" data-aos="zoom-in">
                            <div class="card row pb-3 rounded-0">
                                <div class="col-lg-12 bg-info p-2">
                                    <h3>REQUEST A CALL BACK</h3>
                                    <p>Submit your details and we'll be in touch shortly.</p>
                                </div>
                                <div class="col-12 py-3">
                                    <input type="text" class="form-control" placeholder="First name">
                                </div>
                                <div class="col-12 py-3">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-12 py-3">
                                    <input type="text" class="form-control" placeholder="Mobile Number">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <select class="select form-control-lg w-100" name="branch" id="slct1" onchange="">
                                        <option>Prefered Day To Call</option>
                                        <option>Today</option>
                                        <option>Tomorrow</option>
                                        <option>Weekdays</option>
                                        <option>Weekends</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <select class="select form-control-lg w-100" name="branch" id="slct1" onchange="">
                                        <option>Prefered Time To Call</option>
                                        <option>Immediately</option>
                                        <option>Morning</option>
                                        <option>Afternoon</option>
                                        <option>Evening</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!----------------------------------------------------end video-------------------->

    <div class="container">
        <div class="row">
            <div class="col-md-12 py-3 d-flex justify-content-center">
                <div>
                    <a href="demo.php"><button type="button" class="btn btn-primary  bt" data-aos="fade-right">BOOK
                            DEMO</button>
                    </a>
                </div>
                <div>
                    <a href="admission.php"> <button type="button" class="btn btn-primary  bt" data-aos="fade-right">
                            ADMISSION</button>
                    </a>
                </div>
                <div>
                    <a href="consuling.php">
                        <button type="button" class="btn btn-primary  bt" data-aos="fade-right">COUNSELLING</button>
                    </a>
                </div>
                <div>
                    <a href="enquiry.php">
                        <button type="button" class="btn btn-primary bt" data-aos="fade-right">ENQUIRY</button>
                    </a>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="all" data-aos="fade-right">
            <h2 class="text-info text-center p-3" data-aos="fade-right">Our Affiliates</h2>
            <div class="logo-slide">
                <div class=" owl-carousel owl-theme">
                    <div class="itme">
                        <a href="#"><img src="img/logo1.jpg" alt=""></a>
                    </div>
                    <div class="itme">
                        <a href="#"><img src="img/logo2.jpg" alt=""></a>
                    </div>
                    <div class="itme">
                        <a href="#"><img src="img/logo3.jpg" alt=""></a>
                    </div>
                    <div class="itme">
                        <a href="#"><img src="img/logo4.jpg" alt=""></a>
                    </div>
                    <div class="itme">
                        <a href="#"><img src="img/logo5.jpg" alt=""></a>
                    </div>
                    <div class="itme">
                        <a href="#"><img src="img/logo6.jpg" alt=""></a>
                    </div>
                    <div class="itme">
                        <a href="#"><img src="img/logo7.jpg" alt=""></a>
                    </div>
                    <div class="itme">
                        <a href="#"><img src="img/logo8.jpg" alt=""></a>
                    </div>
                    <div class="itme">
                        <a href="#"><img src="img/logo9.jpg" alt=""></a>
                    </div>
                    <div class="itme">
                        <a href="#"><img src="img/logo0.jpg" alt=""></a>
                    </div>
                    <div class="itme">
                        <a href="#"><img src="img/logo10.jpg" alt=""></a>
                    </div>
                    <div class="itme">
                        <a href="#"><img src="img/logo11.jpg" alt=""></a>
                    </div>
                    <div class="itme">
                        <a href="#"><img src="img/logo12.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="container_1" data-aos="fade-right">
                <i class="fas fa-caret-up" id="arro"></i>
                <div class="logo-bar">
                    <div class="owl-carousel owl-theme" id="">
                        <div class="itme">Intrnational Organization for standardization QMS-GDSL-20-101600</div>
                        <div class="itme"> Ministry of Corporate Affairs -AAR-1722</div>
                        <div class="itme">Aassociate partner with Microsoft</div>
                        <div class="itme">Common Service Center -22374130019</div>
                        <div class="itme">Micro Small & Medium Enterprises -DL02D001711</div>
                        <div class="itme">Aassociate partner with Tally Academy</div>
                        <div class="itme">Pradhan Mantri Kaushal Vikas Yojana Aassociate partner NIFA infocomp
                            Services Private Limited</div>
                        <div class="itme">Facilitated center National Institute of electronics & Information
                            Technalogy -9907977 </div>
                        <div class="itme">Aassociate partner with Marg Academy</div>
                        <div class="itme">Aassociate partner with Busy Academy</div>
                        <div class="itme">Digital India Power To Empower</div>
                        <div class="itme">Google Education</div>
                        <div class="itme">National Accreditation Board for Education and Training</div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>




    <div style="background-color:skyblue;">
        <div class="container-fluid text-center text-white">
            <div class="row py-5">
                <div class="col-lg-12 ">
                    <h2 class="text-white" id="lineh2" data-aos="fade-right">we rank best Coures in india</h2>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class=" text-justify p-3" data-aos="fade-up">
                        <center> <img src=" image/m1.png" alt="">
                            <h3>IT EXPERT COURSE</h3>
                        </center>
                        <p>
                            IT EXPERT COURSE - A specialized and career-focused diploma training course, the IT
                            Expert
                            Training Course is appropriate for 10+2 students who want to work in the web development
                            industry.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="text-justify p-3" data-aos="fade-up">
                        <center> <img src=" image/think.png" alt="">
                            <h3>E- accounting with GST</h3>
                        </center>
                        <p>E- accounting with GST - E-Accounts, E-Income Tax (ITR 1 to 7), and E-GST training
                            courses
                            are conceptually and practically based on concepts developed by a team of 5 to 6
                            Chartered
                            Accountants.
                        </p>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="text-justify p-3" data-aos="fade-up">
                        <center> <img src="image/m3.png" alt="">
                            <h3>Data Analytics</h3>
                        </center>
                        <p>Data Analytics - Six different modules make up the overall Data Analyst Training, and
                            each
                            one may be finished in 200 hours. The content of the Data Analytics Training Course,
                            which
                            has been thoroughly updated in accordance with industry standards, is its main selling
                            point
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="text-justify p-3" data-aos="fade-up">
                        <center> <img src="image/m4.png" alt="">
                            <h3>Genius IT expert</h3>
                        </center>
                        <p>Genius IT expert - Developing web apps and websites with a variety of technologies, such
                            as
                            HTML5, CSS3, JavaScript, PHP, MySQL, AngularJS, NodeJS, Bootstrap, WordPress, MongoDB,
                            ExpressJS, LARAVEL, is referred to as "IT expertise."
                        </p>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="text-justify p-3" data-aos="fade-up">
                        <center> <img src="image/its.png" xlass="" alt="">
                            <h3>PDAD</h3>
                        </center>
                        <p>PDAD - Our knowledgeable instructors in the PDAD program teach you not just for IT but
                            also
                            for interviews through separate personality development and English-speaking classes.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="text-justify p-3" data-aos="fade-up">
                        <center> <img src="image/tools.png" alt="">
                            <h3>Prof. E- accounting course</h3>
                        </center>
                        <p>Professional E- accounting course - A team of 5 to 6 Chartered Accountants developed the
                            theoretical and practical methodologies that form the foundation of the E-Accounts,
                            E-Income
                            Tax (ITR 1 to 7), and E-GST training courses.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h2 class="text-info text-center p-3" data-aos="fade-right">GDF SKILLS BASE JOB PORGRAM</h2>

    <div style="background-color:white;">
        <div class="container-fluid">
            <div class="row p-3">

                <div class="col-lg-4 p-2 d-flex align-items-stretch" data-aos="flip-left"
                    data-aos-easing="ease-out-cubic" data-aos-duration="1800">
                    <div class="border border-info p-3 d-flex align-items-start flex-column">
                        <div class="mb-auto">
                            <i class="fab fa-java fa-2x text-info p-1"></i>
                            <h5>JAVA</h5>
                            <p class="text-justify">Java is a popular programming language that is widely used for
                                building enterprise-level
                                applications. It is an object-oriented language and has a syntax similar to C and
                                C++.GDF skill is the best institute for learning java. </p>
                        </div>
                        <div class="">
                            <strong>Status:</strong> Open<br>
                            <strong>For Apply:</strong> Open
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 p-2 d-flex align-items-stretch" data-aos="flip-left"
                    data-aos-easing="ease-out-cubic" data-aos-duration="1800">
                    <div class="border border-info p-3 d-flex align-items-start flex-column">
                        <div class="mb-auto">
                            <i class="fab fa-php fa-2x text-info p-1"></i>
                            <h5>PHP</h5>
                            <p class="text-justify">PHP is a server-side scripting language for web development, used to
                                dynamically generate
                                HTML, process form data, and access databases. For studying java, GDF skill is the best
                                institute. </p>
                        </div>
                        <div class="">
                            <strong>Status:</strong> Open<br>
                            <strong>For Apply:</strong> Open
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 p-2 d-flex align-items-stretch" data-aos="flip-left"
                    data-aos-easing="ease-out-cubic" data-aos-duration="1800">
                    <div class="border border-info p-3 d-flex align-items-start flex-column">
                        <div class="mb-auto">
                            <i class="fab fa-python fa-2x text-info p-1"></i>
                            <h5>Python</h5>
                            <p class="text-justify">Python is a high-level, interpreted programming language known for
                                its simplicity and
                                readability. It is used in various fields such as web development, data analysis,
                                artificial intelligence, and scientific computing.
                            </p>
                        </div>
                        <div class="">
                            <strong>Status:</strong> Open<br>
                            <strong>For Apply:</strong> Open
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 p-2 d-flex align-items-stretch" data-aos="flip-left"
                    data-aos-easing="ease-out-cubic" data-aos-duration="1800">
                    <div class="border border-info p-3 d-flex align-items-start flex-column">
                        <div class="mb-auto">
                            <i class="fas fa-tv fa-2x text-info p-1"></i>
                            <h5>CCC</h5>
                            <p class="text-justify">CCC stands for "Common Cartridge Content". It is a specification for
                                creating, packaging,
                                and sharing reusable learning content in the e-learning industry. GDF provides the best
                                classes of CCC.
                            </p>
                        </div>
                        <div class="">
                            <strong>Status:</strong> Open<br>
                            <strong>For Apply:</strong> Open
                        </div>
                    </div>
                </div>

                <div class="col-lg-4  p-2 d-flex align-items-stretch" data-aos="flip-left"
                    data-aos-easing="ease-out-cubic" data-aos-duration="1800">
                    <div class="border border-info p-3 d-flex align-items-start flex-column">
                        <div class="mb-auto">
                            <i class="fa fa-calculator fa-2x text-info p-1" aria-hidden="true"></i>

                            <h5>GST</h5>
                            <p class="text-justify">GST stands for "Goods and Services Tax". It is a comprehensive
                                value-added tax system
                                implemented in India, which subsumes multiple indirect taxes into one. GDF skills
                                provide one of the best classes of GST in Delhi.
                            </p>
                        </div>
                        <div class="">
                            <strong>Status:</strong> Open<br>
                            <strong>For Apply:</strong> Open
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  p-2 d-flex align-items-stretch" data-aos="flip-left"
                    data-aos-easing="ease-out-cubic" data-aos-duration="1800">
                    <div class="border border-info p-3 d-flex align-items-start flex-column">
                        <div class="mb-auto">
                            <i class="fab fa-android fa-2x text-info p-1"></i>
                            <h5>Android</h5>
                            <p>Android is the most widely used mobile operating system in the world, and its open-source
                                nature allows for the customization and development of custom ROMs. In Delhi, GDF
                                provides the best android classes. </p>
                        </div>
                        <div class="">
                            <strong>Status:</strong> Open<br>
                            <strong>For Apply:</strong> Open
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-----------------dash board----------------------------------------------------->


    <div class="container-fluid Counter-Up p-3 bg-white" data-aos="fade-up">
        <h2 class="text-info text-center p-3 bg-white" data-aos="fade-right">Success Story Of GDF</h2>
        <hr class="border border-info" id="hr">
        <div class="row p-5">
            <div class="succse col-md-8 d-flex flex-column">

                <div class="succse_one d-flex justify-content-around h-100 flex-wrap">

                    <div class="succse_two d-flex">
                        <div>
                            <span class="counter-value">17</span>
                            <p>Branch Over India</p>
                        </div>
                    </div>
                    <div class="succse_two d-flex">
                        <div>
                            <span class="counter-value">6300</span>
                            <p>Student Placed</p>
                        </div>
                    </div>
                    <div class="succse_two d-flex">
                        <div>
                            <span class="counter-value">9000</span>
                            <p>Student Trained</p>
                        </div>
                    </div>
                </div>

                <div class="succse_one d-flex justify-content-around h-100 flex-wrap">

                    <div class="succse_two d-flex">
                        <div>
                            <span class="counter-value">1100</span>
                            <p>Job Training</p>
                        </div>
                    </div>

                    <div class="succse_two d-flex">
                        <div>
                            <span class="counter-value">2250</span>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
                <div class="border border-info p-3">
                    <!-- <hr class="border border-info" id="hr"> -->
                    <img src="img\gallery\infra\infra23.jpg" class="border borderborder-info" style="width:18rem;"
                        alt="">
                    <!-- <hr class="border border-info" id="hr"> -->
                </div>
            </div>
        </div>
        <hr class="border border-info" id="hr">
    </div>
    <h2 class="text-info text-center p-3">Google Review</h2>

    <!------------dash----end---------------------------------------------------------->
    <!--------------------Re_views ----------------------------------------------->
    <div class="container-fluid bg-info p-3 bg-info d-flex align-items-center justify-content-center position-relative flex-wrap"
        data-aos="fade-up">
        <div class="view d-flex position-relative flex-column">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img src="img/view-1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/view-2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/view-3.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item active">
                        <img src="img/view-4.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/view-5.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/view-6.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/view-7.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/view-8.png" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="hid">
            <div class="view hid d-flex position-relative flex-column">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/P1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/P2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/P3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/P4.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/P5.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/P6.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/P7.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/P8.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="view d-flex position-relative flex-column">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/I1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/I2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/I3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/I4.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/I5.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/I6.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/I7.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/I8.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/I9.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------------------------end -------------------------------->

    <br>
    <h2 class="text-info text-center p-3">Real Facts for GDF </h2>
    <br>

    <div class="container d-flex align-items-center justify-content-center position-relative flex-wrap"
        data-aos="fade-up">
        <div class="pad d-flex position-relative flex-column">
            <div class='imgContainer '>
                <img src='img/col_c.jpg'>
            </div>
            <div class="content">
                <h5>Smart Classes</h5>
                <p>GDF SKILLS impart excellent teaching methodology and provide Smart Classroom for teaching and
                    learning by integrating Learning Technology, such as Computers, Specialized Software,
                    Audience
                    Response Technology, Assistive Listening Devices,
                    Networking & Audio-Visual capabilities.</p>
            </div>
        </div>
        <div class="pad d-flex position-relative flex-column">
            <div class='imgContainer '> <img src='img/col_d.jpg '> </div>
            <div class="content">
                <h5>Expert Teacher's</h5>
                <p>The Team of Faculty or Trainer of GDF SKILLS have highly experience in teaching in renowned
                    Industry & Institution. Our Teaching Team focus on Excellent Communication Skills, offering
                    Rich
                    Training Technique, Possesses Industry Knowledge,
                    Passionate About Learning, High Level of Professionalism.
                </p>
            </div>
        </div>
        <div class="pad d-flex position-relative flex-column">
            <div class='imgContainer'> <img src='img/col_e.jpg'> </div>
            <div class="content">
                <h5>Job Oriented Courses</h5>
                <p>GDF SKILLS is expert in Accounting & Finance, IT Expert, Software Programming Courses, Doeacc
                    Certification, Graphics & Web Designing, Digital Marketing, Hardware & Mobile Repairing
                    Courses.
                    All of the modules under these Course are job
                    oriented and 100% placement Assurance.</p>
            </div>
        </div>

    </div>
    <div class="container d-flex align-items-center justify-content-center position-relative flex-wrap"
        data-aos="fade-up">
        <div class="pad d-flex position-relative flex-column">
            <div class='imgContainer'> <img src='img/col_f.jpg'> </div>
            <div class="content">
                <h5>Lifetime Membership</h5>
                <p>GDF SKILLS Asssistance to our Students after Successfully completion of their Courses have
                    made
                    unusual contributions to the association GDF Community. Our Students are kept relationship
                    with
                    their institution to access different works
                    and activities with Proper Guideance.</p>
            </div>
        </div>
        <div class="pad d-flex position-relative flex-column">
            <div class='imgContainer'> <img src='img/col_g.jpg'> </div>
            <div class="content">
                <h2>100% Placement</h6>
                    <p>are basically extended internships or work experience assignments. GDF SKILLS Has strong
                        placement cells. Our Placement Team are in contact with renowned & reputed Industry to
                        place
                        students in different organisation.</p>
            </div>
        </div>
        <div class="pad d-flex position-relative flex-column">
            <div class='imgContainer'> <img src='img/col_h.jpg'> </div>
            <div class="content">
                <h5>Small Size Of Batch</h5>
                <p>The Strength of the batches should be standard. GDF SKILLS works on standard Stduent Teacher
                    Ratio. The main goal of GDF SKILLS to keep the batch size should be optimal. We don't gather
                    a
                    lots of students in a single batches. On the basis
                    of Student Skills & Understanding capacity.
                </p>
            </div>
        </div>

    </div>


    <!--------------social media--------------------------------------------------------------------->

    <br>
    <!------------------------------------------------------------------------>


    <div class="bg-white">

        <div class="container testrominal">
            <div class="row">
                <div class="col-sm-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <span class="h2">Customer <b>Testimonials</b></span>
                        <div class="carousel-inner py-5">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-sm-6 py-3">

                                        <div class="testimonial">
                                            <p>The institute's focus on hands-on learning and they start
                                                everything
                                                with
                                                Scratch
                                                and the mentor of GDF are amazing and the best.
                                            </p>
                                        </div>

                                        <div class="media">
                                            <img src="image/user.png" class="mr-3" alt="">
                                            <div class="media-body">
                                                <div class="overview">
                                                    <div class="name"><b>Rohit Kumar</b></div>
                                                    <div class="details">Media Analyst / SkyNet</div>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 py-3">

                                        <div class="testimonial">
                                            <p>If anyone is looking for the best and most affordable java
                                                classes I
                                                would like to
                                                recommend GFD Skills</p>
                                        </div>
                                        <div class="media">
                                            <img src="image/user.png" class="mr-3" alt="">
                                            <div class="media-body">
                                                <div class="overview">
                                                    <div class="name"><b>Vijay Sharma</b></div>
                                                    <div class="details">Web Developer / SoftBee</div>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-sm-6 py-3">
                                        <div class="testimonial">
                                            <p> As a student, I have taken several courses at this institute and
                                                have
                                                loved the
                                                level of education and support provides by GDF skills institute.
                                            </p>
                                        </div>
                                        <div class="media">
                                            <img src="image/user.png" class="mr-3" alt="">
                                            <div class="media-body">
                                                <div class="overview">
                                                    <div class="name"><b>Sumit gupta</b></div>
                                                    <div class="details">Web Developer / DevCorp</div>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 py-3">
                                        <div class="testimonial">
                                            <p>
                                                I would highly recommend this institute to those who are looking
                                                to
                                                gain
                                                skills in
                                                IT the sector GDF is a worth-full institute if you will do
                                                courses
                                                from
                                                them.
                                            </p>
                                        </div>
                                        <div class="media">
                                            <img src="image/user.png" class="mr-3" alt="">
                                            <div class="media-body">
                                                <div class="overview">
                                                    <div class="name"><b>Sanny Sharma</b></div>
                                                    <div class="details">Graphic Designer / MarsMedia</div>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row">

                                    <div class="col-sm-6 py-3">
                                        <div class="testimonial">
                                            <p>The course was well-structured and helped me to get the best job
                                                after
                                                the gap of 3
                                                years GDF is the best institute for skill development
                                            </p>
                                        </div>
                                        <div class="media">
                                            <img src="image/user.png" class="mr-3" alt="">
                                            <div class="media-body">
                                                <div class="overview">
                                                    <div class="name"><b>Sohail Kumar</b></div>
                                                    <div class="details">SEO Analyst / RealSearch</div>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 py-3">
                                        <div class="testimonial">
                                            <p> I have now been chosen by ABP News Network thanks to gdf skills.
                                            </p>
                                        </div>
                                        <div class="media">
                                            <div class="media-left d-flex mr-3">
                                                <img src="image/user.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="overview">
                                                    <div class="name"><b>Priyanshu gauttam</b></div>
                                                    <div class="details">Web Designer / UniqueDesign</div>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i>
                                                            </li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php include 'footer.php';?>
    <!-- <h4>sahilsuelksn</h4> -->

</body>
<script>
$(document).ready(function() {
    $('.counter-value').each(function() {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 22000,
            easing: 'swing',
            step: function(now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
    integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
$('.logo-slide .owl-carousel').owlCarousel({
    autoplay: true,
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    responsive: {
        0: {
            items: 3
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
})

$('.logo-bar .owl-carousel').owlCarousel({
    autoplay: Infinity,
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})
$('.testimornial .owl-carousel').owlCarousel({
    autoplay: true,
    loop: true,
    margin: 1,
    nav: false,
    dots: false,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 2
        },
        1000: {
            items: 2
        }
    }
})
</script>


</html>
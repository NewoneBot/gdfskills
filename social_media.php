<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include "header.php";?>

    <!-------------board or education system------------------------>
    <h1>Social Media</h1>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6 social">


                <div id="carouselExampleControls" class="social-outter carousel slide" data-bs-ride="carousel">
                    <h1>Events at GDF Skills</h1>
                    <br>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img src="img/social_0.png" class="img-fluid d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="img/social_1.png" class="img-fluid d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="img/social_2.png" class="img-fluid d-block w-100" alt="">
                        </div>
                        <div class="carousel-item active">
                            <img src="img/social_3.png" class="img-fluid d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="img/social_4.png" class="img-fluid d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="img/social_5.png" class="img-fluid d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="img/social_6.png" class="img-fluid d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="img/social_7.png" class="img-fluid d-block w-100" alt="">
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="social-outter">

                    <h1>Follow Us</h1>
                    <br>
                    <nav>
                        <div class="nav nav-tabs" id="nav-tap" role="tablist">
                            <button class="nav-link navtap active" id="nav-tap-1" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">Youtube</button>

                            <button class="nav-link" id="nav-tap-1" data-bs-toggle="tab" data-bs-target="#nav-profile"
                                type="button" role="tab" aria-controls="nav-profile"
                                aria-selected="false">Facebook</button>

                            <button class="nav-link" id="nav-tap-1" data-bs-toggle="tab" data-bs-target="#nav-contact"
                                type="button" role="tab" aria-controls="nav-contact"
                                aria-selected="false">Twitter</button>

                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent"><br><br>

                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">

                            <iframe width="100%" height="300px" src="https://www.youtube.com/embed/rrjEPUJxwoQ"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen class="youtub" style="border-radius: 20px;">
                            </iframe>
                        </div>

                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <iframe
                                src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fgdfskills%2Fphotos%2Fa.112195676817135%2F671301980906499%2F&show_text=true&width=500"
                                width="100%" height="300px" style="border:none;overflow:hidden; border-radius: 20px;"
                                scrolling="no" frameborder="0" allowfullscreen="true"
                                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                                class="facebook" id="fb">
                            </iframe>
                        </div>

                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <blockquote class="twitter-tweet" data-dnt="true">
                                <a
                                    href="https://twitter.com/gdfskill/status/1497118712960217091?ref_src=twsrc%5Etfw"></a>
                            </blockquote>
                            <script async src="https://platform.twitter.com/widgets.js"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include "footer.php";?>
</body>

</html>
<!DOCTYPE html>
<html>

<head>

    <!-- Basic -->

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Mobile Metas -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Site Metas -->

    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Wonderland</title>


    <!-- bootstrap core css -->

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- progress barstle -->

    <link rel="stylesheet" href="css/css-circular-prog-bar.css" />

    <!-- fonts style -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />

    <!-- font wesome stylesheet -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />

    <!-- Custom styles for this template -->

    <link href="css/style.css" rel="stylesheet" />

    <!-- responsive style -->

    <link href="css/responsive.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/css-circular-prog-bar.css" />


</head>

<body>
    <div class="top_container">

        <!-- header section strats -->

        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                        <img src="images/logo.png" alt="">
                        <span>
                            Wonderland
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html"> Home <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="about.html"> About </a>
                                </li>

                                <li class="nav-item ">
                                    <a class="nav-link" href="teacher.html"> Teacher </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="vehicle.html"> vehicle </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ URL::to('/admin-login') }}">Admin Login</a>
                                </li>
                            </ul>
                        </div>
                </nav>
            </div>
        </header>
        <section class="hero_section ">
            <div class="hero-container container">
                <div class="hero_detail-box">
                    <h3>
                        Welcome to <br>
                    </h3>
                    <h1>
                        Wonderland
                    </h1>
                    <p>
                        Where we nurture young minds with care and creativity,
                        fostering a love for
                        lifelong learning.
                    </p>
                    <div class="hero_btn-continer">
                    </div>
                </div>
                <div class="hero_img-container">
                    <div>
                        <img src="images/hero.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- end header section -->

    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container">
            <h2 class="main-heading ">
                About School
            </h2>
            <p class="text-center">
                "Welcome to Wonderland Primary School, where we nurture young minds with care and creativity, fostering
                a love for
                lifelong learning."
            </p>
            <div class="about_img-box ">
                <img src="images/kids.jpg" alt="" class="img-fluid w-100">
            </div>
            <div class="d-flex justify-content-center mt-5">
                <a href="" class="call_to-btn  ">
                    <span>
                        Read More
                    </span>
                    <img src="images/right-arrow.png" alt="">
                </a>
            </div>
        </div>
    </section>

    <!-- about section -->

    <!-- teacher section -->

    <section class="teacher_section layout_padding-bottom">
        <div class="container">
            <h2 class="main-heading ">
                Our Teachers
            </h2>
            <p class="text-center">
                Ipsum available, but the majority h
            </p>
            <div class="teacher_container layout_padding2">
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="images/teacher-1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Den Mark</h5>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="images/teacher-2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Leena jorj</h5>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="images/teacher-3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Magi Den</h5>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="images/teacher-4.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">jonson mark</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-3">
                <a href="" class="call_to-btn  ">
                    <span>
                        See More
                    </span>
                    <img src="images/right-arrow.png" alt="">
                </a>
            </div>
        </div>
    </section>

    <!-- teacher section -->

    <!-- vehicle section -->

    <section class="vehicle_section layout_padding">
        <div class="container">
            <h2 class="main-heading ">
                Vehicles Facility
            </h2>
            <p class="text-center">
                There are many variations of passages of Lorem Ipsum available, but the majority hThere are many
                variations of
                passages of Lorem Ipsum available, but the majority h
            </p>
            <div class="layout_padding-top">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="vehicle_img-box ">
                                <img src="images/bus.png" alt="" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="vehicle_img-box ">
                                <img src="images/bus.png" alt="" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="vehicle_img-box ">
                                <img src="images/bus.png" alt="" class="img-fluid w-100">
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- vehicle section -->

    <!-- client section -->

    <section class="client_section layout_padding">
        <div class="container">
            <h2 class="main-heading ">
                Our Students Feedback
            </h2>
            <p class="text-center">
                There are many variations of passages of Lorem Ipsum available, but the majority hThere are many
                variations of
                passages of Lorem Ipsum available, but the majority h
            </p>
            <div class="layout_padding2">
                <div class="client_container d-flex flex-column">
                    <div class="client_detail d-flex align-items-center">
                        <div class="client_img-box ">
                            <img src="images/student.png" alt="">
                        </div>
                        <div class="client_detail-box">
                            <h4>
                                Veniam Quis
                            </h4>
                            <span>
                                (exercitation)
                            </span>
                        </div>
                    </div>
                    <div class="client_text mt-4">
                        <p>
                            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex
                            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu
                            fugiat
                            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit
                            anim id est laborum."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- client section -->

    <!-- contact section -->

    <section class="contact_section layout_padding-bottom">
        <div class="container">
            <h2 class="main-heading">
                Contact Now
            </h2>
            <p class="text-center">
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
            </p>
            <div class="">
                <div class="contact_section-container">
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <div class="contact-form">
                                <form action="">
                                    <div>
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div>
                                        <input type="text" placeholder="Phone Number">
                                    </div>
                                    <div>
                                        <input type="email" placeholder="Email">
                                    </div>
                                    <div>
                                        <input type="text" placeholder="Message" class="input_message">
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn_on-hover">
                                            Send
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end contact section -->

    <!-- admission section -->

    <section class="admission_section ">
        <div class="container-fluid position-relative">
            <div class="row h-100">
                <div id="map" class="h-100 w-100 ">
                </div>
                <div class="container">
                    <div class="admission_container position-absolute">
                        <div class="admission_img-box">
                            <img src="images/kidss.jpg" alt="">
                        </div>
                        <div class="admission_detail">
                            <h3>
                                Apply for Admission
                            </h3>
                            <p class="mt-3 mb-4">
                                There are many variations of passages of Lorem Ipsum available, but the majority h
                            </p>
                            <div class="">
                                <a href="" class="admission_btn btn_on-hover">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- admission section -->

    <!-- landing section -->

    <section class="landing_section layout_padding">
        <div class="container">
            <h2 class="main-heading">
                Free Multipurpose Responsive
            </h2>
            <h2 class="main-heading number_heading">
                Landing Page 2019
            </h2>
            <p class="landing_detail text-center">
                There are many variations of passages of Lorem Ipsum available, but the majority There are many
                variations of
                passages of Lorem Ipsum available, but the majority h
            </p>
        </div>
    </section>

    <!-- end landing section -->

    <!-- footer section -->

    <section class="container-fluid footer_section">
        <p>
            Copyright &copy; 2019 All Rights Reserved By
            <a href="https://html.design/">Free Html Templates</a>
        </p>
    </section>

    <!-- footer section -->

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>
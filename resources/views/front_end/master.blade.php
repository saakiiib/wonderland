<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit-no" />

    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Wonderland</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/bootstrap.css') }}" />

    <!-- progress bars style -->
    <link rel="stylesheet" href="{{ URL::to('css/css-circular-prog-bar.css') }}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />

    <!-- font awesome stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />

    <!-- Custom styles for this template -->
    <link href="{{ URL::to('css/style.css') }}" rel="stylesheet" />

    <!-- responsive style -->
    <link href="{{ URL::to('css/responsive.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="{{ URL::to('css/css-circular-prog-bar.css') }}" />
</head>

<body>
    <div class="">

        <!-- header section starts -->

        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="{{ URL::to('/') }}">
                        <img src="{{ URL::to('images/logo.png') }}" alt="">
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
                                    <a class="nav-link" href="{{ URL::to('/home') }}"> Home <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ URL::to('/about') }}"> About </a>
                                </li>

                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ URL::to('/teachers') }}"> Teacher </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ URL::to('/vehicles') }}"> vehicle </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ URL::to('/contact-us') }}">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ URL::to('/students-feedback') }}">Students Feedback</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ URL::to('/admin-login') }}">Admin Login</a>
                                </li>
                            </ul>
                        </div>
                </nav>
            </div>
        </header>
    </div>

    <!-- end header section -->

    <!-- about section -->

    @yield('content')

    <!-- end contact section -->

    <!-- footer section -->

    <section class="container-fluid footer_section">
        <p>
            Copyright &copy; 2023 All Rights Reserved By
            <a href="{{ URL::to('#') }}">Sakib</a>
        </p>
    </section>

    <!-- footer section -->

    <script type="text/javascript" src="{{ URL::to('js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/bootstrap.js') }}"></script>

</body>

</html>
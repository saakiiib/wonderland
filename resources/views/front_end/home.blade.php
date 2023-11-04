@extends('front_end.master')
@section('content')
<section class="about_section layout_padding">
    <div class="container">
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
                    <img src="{{ URL::to('images/hero.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="main-heading">
            About School
        </h2>
        <p class="text-center">
            "Welcome to Wonderland Primary School, where we nurture young minds with care and creativity, fostering
            a love for
            lifelong learning."
        </p>
        <div class="about_img-box">
            <img src="{{ URL::to('images/kids.jpg') }}" alt="" class="img-fluid w-100">
        </div>
        {{-- <div class="d-flex justify-content-center mt-5">
            <a href="{{ URL::to('about.html') }}" class="call_to-btn">
                <span>
                    Read More
                </span>
                <img src="{{ URL::to('images/right-arrow.png') }}" alt="">
            </a>
        </div> --}}
    </div>
</section>

<!-- about section -->

<!-- teacher section -->

<section class="teacher_section layout_padding-bottom">
    <div class="container">
        <h2 class="main-heading">
            Our Teachers
        </h2>
        <p class="text-center">
            Ipsum available, but the majority h
        </p>
        <div class="teacher_container layout_padding2">
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="{{ URL::to('images/teacher-1.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Den Mark</h5>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ URL::to('images/teacher-2.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Leena jorj</h5>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ URL::to('images/teacher-3.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Magi Den</h5>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{ URL::to('images/teacher-4.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">jonson mark</h5>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="d-flex justify-content-center mt-3">
            <a href="{{ URL::to('your-see-more-page.html') }}" class="call_to-btn">
                <span>
                    See More
                </span>
                <img src="{{ URL::to('images/right-arrow.png') }}" alt="">
            </a>
        </div> --}}
    </div>
</section>

<!-- teacher section -->

<!-- vehicle section -->

<section class="vehicle_section layout_padding">
    <div class="container">
        <h2 class="main-heading">
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
                        <div class="vehicle_img-box">
                            <img src="{{ URL::to('images/bus.png') }}" alt="" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="vehicle_img-box">
                            <img src="{{ URL::to('images/bus.png') }}" alt="" class="img-fluid w-100">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="vehicle_img-box">
                            <img src="{{ URL::to('images/bus.png') }}" alt="" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
                {{-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a> --}}
                {{-- <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" ariahidden="true"></span>
                    <span class="sr-only">Next</span>
                </a> --}}
            </div>
        </div>
    </div>
</section>

<!-- vehicle section -->

<!-- client section -->

<section class="client_section layout_padding">
    <div class="container">
        <h2 class="main-heading">
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
                    <div class="client_img-box">
                        <img src="{{ URL::to('images/student.png') }}" alt="">
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
            Contact Us
        </h2>
        <p class="text-center">
            You can contact us for any questions, suggestions or services😊
        </p>
        <div class="contact_section-container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="contact-form">
                        <form action="{{ route('store-contact-data') }}" method="post">
                            @csrf
                            <div>
                                <input type="text" name="name" placeholder="Name" required>
                            </div>
                            <div>
                                <input type="text" name="phone_number" placeholder="Phone Number" required>
                            </div>
                            <div>
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                            <div>
                                <input type="text" name="message" placeholder="Message" class="input_message" required>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn_on-hover">
                                    Send
                                </button>
                            </div>
                        </form>
                        <br>
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
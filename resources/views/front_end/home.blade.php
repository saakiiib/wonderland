@extends('front_end.master')
@section('content')
<section class="about_section layout_padding">
    <div class="container">
        <div class="hero-container container">
            <div class="hero_detail-box">
                <h3>
                    {{ $homeData->title }}
                </h3>
                <h1>
                    Wonderland
                </h1>
                <p>
                    {{ $homeData->description }}
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
            {{ $aboutData->title }}
        </h2>
        <p class="text-center">
            {{ $aboutData->description }}
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
            Meet Our Dedicated Teachers
        </h2>
        <div class="teacher_container layout_padding2">
            <div class="card-deck">
                <div class="card">
                    <div class="card-body">
                        @foreach($teachers as $teacher)
                        <h2 class="card-title">{{ $teacher->name }}</h2>
                        <p class="card-title">Email: {{ $teacher->email }}</p>
                        <p class="card-title">Mobile Number: {{ $teacher->mobile_number }}</p>
                        <p class="card-title">Class: {{ $teacher->class_id }}</p>
                        <br>
                        @endforeach
                    </div>
                </div>
                {{-- <div class="card">
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
                </div> --}}
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
    <div class="container text-center">
        <h2 class="main-heading">Vehicles Facility</h2>
        <p class="text-center">
            There are many variations of passages of Lorem Ipsum available, but the majority hThere are many
            variations of passages of Lorem Ipsum available, but the majority h
        </p>
        <div class="layout_padding-top">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="vehicle_img-box mx-auto">
                            <img src="{{ URL::to('images/bus.png') }}" alt="" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container card-deck">
                @foreach ($vehicles as $vehicle)
                <div class="card-body">
                    <h3 class="card-title">{{ $vehicle->vehicle_type }}</h3>
                    <p class="card-text">{{ $vehicle->vehicle_number }}</p>
                    @endforeach
                </div>
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
            Your thoughts, our inspiration. Students' feedback helps us enhance the learning journey, making education
            more tailored
            to your needs. Share, shape, and excel with us.
        </p>
        <div class="layout_padding2">
            <div class="client_container d-flex flex-column">
                @foreach ($feedbacks as $feedback)
                <div class="client_detail d-flex align-items-center">
                    <div class="client_img-box">
                        <img src="{{ URL::to('images/student.png') }}" alt="">
                    </div>
                    <div class="client_detail-box">
                        <h4>
                            {{ $feedback->student_name }}
                        </h4>
                    </div>
                </div>
                <div class="client_text mt-4">
                    <p>
                        {{ $feedback->feedback_description }}
                    </p>
                </div>
                @endforeach
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
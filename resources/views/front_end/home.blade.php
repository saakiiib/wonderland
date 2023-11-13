@extends('front_end.master')
@section('content')
<section class="about_section layout_padding">
    <div class="container layout_padding">
        <div class="hero-container container">
            <div class="hero_detail-box">
                <h3>
                    {{ $homeData->title }}
                </h3>
                <h1>
                    Wonderland
                </h1>
                <p>
                    {{-- {{ $homeData->description }} --}}
                    <?php
                    echo $homeData->description;
                    ?>
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
    <div class="container layout_padding">
        <h2 class="main-heading">
            {{ $aboutData->title }}
        </h2>
        <p class="text-center layout_padding2">
            {{ $aboutData->description }}
        </p>
        <div class="about_img-box">
            <img src="{{ URL::to('images/kids.jpg') }}" alt="" class="img-fluid w-100">
        </div>
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
            </div>
        </div>
    </div>
</section>

<!-- teacher section -->

<!-- vehicle section -->

<section class="vehicle_section layout_padding">
    <div class="container text-center">
        <h2 class="main-heading">Vehicles Facility</h2>
        <p class="text-center layout_padding2">
            Experience seamless transportation with our versatile fleet featuring standard buses, comfortable
            mini-buses, and
            convenient mini-vans, providing flexibility and convenience for all students.
        </p>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="vehicle_img-box mx-auto">
                        <img src="{{ URL::to('images/bus.png') }}" alt="" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </div>
        <div class="container card-deck layout_padding">
            @foreach ($vehicles as $vehicle)
            <div class="card-body">
                <h3 class="card-title">{{ $vehicle->vehicle_type }}</h3>
                <p class="card-text">{{ $vehicle->vehicle_number }}</p>
                @endforeach
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
        <p class="text-center layout_padding2">
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

<section class="contact_section layout_padding">
    <div class="container">
        <h2 class="main-heading ">
            Contact Us
        </h2>
        <p class="text-center layout_padding">
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
                                <input name="message" placeholder="Message" class="input_message" required
                                    maxlength="255" oninput="checkMessageLength(this)">
                                <span id="messageLengthFeedback"></span>
                            </div>

                            <script>
                                function checkMessageLength(textarea) {
                                const maxLength = parseInt(textarea.getAttribute('maxlength'));
                                const currentLength = textarea.value.length;
                            
                                const feedbackElement = document.getElementById('messageLengthFeedback');
                            
                                if (currentLength > maxLength) {
                                    feedbackElement.textContent = `You've exceeded the character limit by ${currentLength - maxLength} characters. Please reduce your message.`;
                                } else {
                                    feedbackElement.textContent = '';
                                }
                            }
                            </script>

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
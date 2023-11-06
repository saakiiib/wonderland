@extends('front_end.master')
@section('content')
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
@endsection
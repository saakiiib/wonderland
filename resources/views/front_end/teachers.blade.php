@extends('front_end.master')
@section('content')
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
@endsection
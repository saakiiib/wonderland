@extends('front_end.master')
@section('content')
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
            </div>
        </div>
    </div>
</section>
@endsection
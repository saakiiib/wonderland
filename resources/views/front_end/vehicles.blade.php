@extends('front_end.master')
@section('content')
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
        <div class=" layout_padding container card-deck">
            @foreach ($vehicles as $vehicle)
            <div class="card-body">
                <h3 class="card-title">{{ $vehicle->vehicle_type }}</h3>
                <p class="card-text">{{ $vehicle->vehicle_number }}</p>
                @endforeach
            </div>
        </div>

    </div>
</section>
@endsection
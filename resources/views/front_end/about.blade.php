@extends('front_end.master')
@section('content')
<section class="about_section layout_padding">
    <div class="container">
        <h2 class="main-heading ">
            {{ $aboutData->title }}
        </h2>
        <div class="layout_padding2">
            <p class="text-center">
                {!! $aboutData->description !!}
            </p>
        </div>
        <div class="about_img-box ">
            <img src="images/kids.jpg" alt="" class="img-fluid w-100">
        </div>
    </div>
</section>
@endsection
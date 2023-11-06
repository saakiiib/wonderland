@extends('front_end.master')
@section('content')
<section class="teacher_section layout_padding">
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
@endsection
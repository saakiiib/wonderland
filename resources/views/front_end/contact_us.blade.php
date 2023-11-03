@extends('front_end.master')
@section('content')
<section class="contact_section layout_padding-bottom">
    <div class="container">
        <h2 class="main-heading">
            Contact Now
        </h2>
        <p class="text-center">
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        </p>
        <div class="">
            <div class="contact_section-container">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="contact-form">
                            <form action="">
                                <div>
                                    <input type="text" placeholder="Name">
                                </div>
                                <div>
                                    <input type="text" placeholder="Phone Number">
                                </div>
                                <div>
                                    <input type="email" placeholder="Email">
                                </div>
                                <div>
                                    <input type="text" placeholder="Message" class="input_message">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn_on-hover">
                                        Send
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
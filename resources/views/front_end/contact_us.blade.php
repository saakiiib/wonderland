@extends('front_end.master')
@section('content')
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
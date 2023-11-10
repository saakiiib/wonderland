@extends('admin.dashboard')
@section('admin_content')
<section class="bs-validation">
    <div class="card-header">
        <h4 class="card-title">Edit Student Feedback</h4>
    </div>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="row">
        <div class="card">
            <div class card-body="">
                <form class="needs-validation" novalidate method="POST"
                    action="{{ route('student-feedbacks.update', $feedback->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-1">
                        <label class="form-label" for="basic-addon-name">Student Name</label>
                        <input type="text" id="basic-addon-name" name="student_name" class="form-control"
                            value="{{ $feedback->student_name }}" required />
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                    <div class="mb-1">
                        <label class="d-block form-label" for="validationBioBootstrap">Feedback Description</label>
                        <textarea class="form-control" id="id" name="feedback_description" rows="3"
                            required>{{ $feedback->feedback_description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
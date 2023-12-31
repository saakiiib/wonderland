@extends('admin.dashboard')
@section('admin_content')
<section class="bs-validation">
    <div class="card-header">
        <h4 class="card-title">Add a New Student Feedback</h4>
    </div>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="row">
        <div class="card">
            <div class="card-body">
                <form class="needs-validation" novalidate method="POST" action="{{ route('store-student.feedback') }}">
                    @csrf
                    <div class="mb-1">
                        <label class="form-label" for="basic-addon-name">Student Name</label>
                        <input type="text" id="basic-addon-name" name="student_name" class="form-control"
                            placeholder="Name" aria-label="Name" aria-describedby="basic-addon-name" required
                            value="{{ old('student_name') }}" />
                        <div class="valid-feedback">Looks good!</div>
                        @if ($errors->has('student_name'))
                        <span class="text-danger">{{ $errors->first('student_name') }}</span>
                        @endif
                    </div>
                    <div class="mb-1">
                        <label class="d-block form-label" for="validationBioBootstrap">Feedback Description</label>
                        <textarea class="form-control" id="id" name="feedback_description" rows="3" required
                            value="{{ old('feedback_description') }}"></textarea>
                        @if ($errors->has('feedback_description'))
                        <span class="text-danger">{{ $errors->first('feedback_description') }}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
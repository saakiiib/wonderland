@extends('admin.dashboard')
@section('admin_content')
<section class="bs-validation">
    <div class="card-header">
        <h4 class="card-title">Edit Teacher</h4>
    </div>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="row" id="edit-teacher-form">
        <div class="card">
            <div class="card-body">
                <form class="needs-validation" novalidate method="POST"
                    action="{{ route('teachers.update', $teacher->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-1">
                        <label class="form-label" for="basic-addon-name">Name</label>
                        <input type="text" id="basic-addon-name" name="name" class="form-control"
                            value="{{ $teacher->name }}" required />
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="basic-default-email1">Email</label>
                        <input type="email" id="basic-default-email1" name="email" class="form-control"
                            value="{{ $teacher->email }}" required />
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="contact-info">Mobile Number</label>
                        <input type="number" id="contact-info" name="mobile_number" class="form-control"
                            value="{{ $teacher->mobile_number }}" required />
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                    <div class="mb-1">
                        <label class="form-label">Class</label>
                        <select class="form-select" name="class_id" required>
                            <option value="" disabled selected>Select class</option>
                            <option value="1" @if ($teacher->class_id == 1) selected @endif>1</option>
                            <option value="2" @if ($teacher->class_id == 2) selected @endif>2</option>
                            <option value="3" @if ($teacher->class_id == 3) selected @endif>3</option>
                            <option value="4" @if ($teacher->class_id == 4) selected @endif>4</option>
                            <option value="5" @if ($teacher->class_id == 5) selected @endif>5</option>
                        </select>
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
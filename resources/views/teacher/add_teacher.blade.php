@extends('admin.dashboard')
@section('admin_content')
<section class="bs-validation">
    <div class="card-header">
        <h4 class="card-title">Add a New Teacher</h4>
    </div>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="row">
        <div class="card">
            <div class="card-body">
                <form class="needs-validation" novalidate method="POST" action="{{ URL::to('store-teacher') }}">
                    @csrf
                    <div class="mb-1">
                        <label class="form-label" for="basic-addon-name">Name</label>
                        <input type="text" id="basic-addon-name" name="name" class="form-control" placeholder="Name"
                            aria-label="Name" aria-describedby="basic-addon-name" required />
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="basic-default-email1">Email</label>
                        <input type="email" id="basic-default-email1" name="email" class="form-control"
                            placeholder="john.doe@email.com" aria-label="john.doe@email.com" required />
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="basic-default-email1">Mobile Number</label>
                        <input type="number" id="contact-info" name="mobile_number" class="form-control"
                            placeholder="01xxxxxxxxx" required />
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                    <div class="mb-1">
                        <label class="form-label">Class</label>
                        <select class="form-select" name="class_id" required>
                            <option value="" disabled selected>Select class</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
@extends('admin.dashboard')
@section('admin_content')
<section class="bs-validation">
    <div class="card-header">
        <h4 class="card-title">Add a New Student Feedback</h4>
    </div>
    <div class="row">
        <div class="card">
            <div class="card-body">
                <form class="needs-validation" method="post" action="#" novalidate>
                    <div class="mb-1">
                        <label class="form-label" for="basic-addon-name">Student Name</label>

                        <input type="text" id="basic-addon-name" class="form-control" placeholder="Category Title"
                            aria-label="Name" aria-describedby="basic-addon-name" name="category_name" required />
                        @csrf
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                    <div class="mb-1">
                        <label class="d-block form-label" for="validationBioBootstrap">Feedback Description</label>
                        <textarea class="form-control" id="validationBioBootstrap" name="category_description" rows="3"
                            required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
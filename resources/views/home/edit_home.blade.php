@extends('admin.dashboard')
@section('admin_content')
<div class="card-header">
    <h4 class="card-title">Edit Home</h4>
</div>
<div class="card-body">
    <form class="needs-validation" method="post" action="{{ route('update-home') }}" novalidate>
        @csrf
        <div class="mb-1">
            <label class="form-label" for="basic-addon-name">New Title</label>
            <input type="text" id="basic-addon-name" class="form-control" name="title" placeholder="Title"
                aria-label="Name" aria-describedby="basic-addon-name" required />
            <div class="valid-feedback">Looks good!</div>
        </div>
        <div class="mb-1">
            <label class="d-block form-label" for="validationBioBootstrap">New Description</label>
            <textarea class="form-control" id="validationBioBootstrap" name="description" placeholder="Description"
                rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    @if(session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
    @endif
</div>
@endsection
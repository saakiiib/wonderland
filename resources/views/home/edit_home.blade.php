@extends('admin.dashboard')

@section('admin_content')
<div class="card-header">
    <h4 class="card-title">Edit Home</h4>
</div>
<div class="card-body">
    <form class="needs-validation" method="post" action="{{ route('update-home') }}" enctype="multipart/form-data"
        novalidate>
        @csrf
        <div class="mb-1">
            <label class="form-label" for="basic-addon-name">New Title</label>
            <input type="text" id="basic-addon-name" class="form-control" name="title" placeholder="Title"
                aria-label="Name" aria-describedby="basic-addon-name" required value="{{ old('title') }}" />
            <div class="valid-feedback">Looks good!</div>
            @if ($errors->has('title'))
            <span class="text-danger">{{ $errors->first('title') }}</span>
            @endif
        </div>
        <div class="mb-1">
            <label class="d-block form-label" for="validationBioBootstrap">New Description</label>
            <textarea class="form-control" id="id" name="description" placeholder="Description" rows="3" required
                value="{{ old('description') }}"> </textarea>
            @if ($errors->has('description'))
            <span class="text-danger">{{ $errors->first('description') }}</span>
            @endif
        </div>
        <div class="mb-1">
            <label for="formFile" class="form-label">Image</label>
            <input class="form-control" type="file" id="image" name="image" accept="image/*" required />
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
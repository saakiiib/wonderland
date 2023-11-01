@extends('admin.dashboard')
@section('admin_content')
<div class="card-header">
    <h4 class="card-title">Edit About</h4>
</div>
<p class="d-none d-sm-inline-block">

    {{--
    <?php
        $message = Session::get('message');
        if($message)
        {
            echo $message;
            Session::put('message','');
        }
    ?> --}}

</p>
<div class="card-body">
    <form class="needs-validation" method="post" action="#" novalidate>
        <div class="mb-1">
            <label class="form-label" for="basic-addon-name">New Title</label>

            <input type="text" id="basic-addon-name" class="form-control" placeholder="Category Title" aria-label="Name"
                aria-describedby="basic-addon-name" name="category_name" required />
            @csrf
            <div class="valid-feedback">Looks good!</div>
        </div>
        <div class="mb-1">
            <label class="d-block form-label" for="validationBioBootstrap">New Description</label>
            <textarea class="form-control" id="validationBioBootstrap" name="category_description" rows="3"
                required></textarea>
        </div>
        <div class="mb-1">
            <label for="customFile1" class="form-label">New Image</label>
            <input class="form-control" type="file" accept="image/* id=" customFile1" required />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
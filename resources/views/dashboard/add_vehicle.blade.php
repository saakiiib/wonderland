@extends('admin.dashboard')
@section('admin_content')
<section class="bs-validation">
    <form action="">
        <div class="card-header">
            <h4 class="card-title">Add a New Vehicle</h4>
        </div>
        <div class="mb-1">
            <label class="form-label" for="basic-default-email1">Vechile Number</label>
            <input type="number" id="contact-info" class="form-control" placeholder="22-xxxx" required />
            <div class="valid-feedback">Looks good!</div>
        </div>
        <div class="mb-1">
            <label class="form-label">Vehicle type</label>
            <select class="form-select" required>
                <option value="" disabled selected>Select bus</option>
                <option value="">Bus</option>
                <option value="">Minibus</option>
                <option value="">MiniVan</option>
            </select>
            <div class="valid-feedback">Looks good!</div>
        </div>
        <div class="mb-1">
            <label for="customFile1" class="form-label">Vehcile pic</label>
            <input class="form-control" type="file" accept="image/*" id="customFile1" required />
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</section>
@endsection
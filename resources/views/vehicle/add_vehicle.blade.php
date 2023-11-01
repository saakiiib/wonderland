@extends('admin.dashboard')
@section('admin_content')
<section class="bs-validation">
    <div class="card-header">
        <h4 class="card-title">Add a New Vehicle</h4>
    </div>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="row">
        <div class="card">
            <div class="card-body">
                <form class="needs-validation" novalidate method="POST" action="{{ route('store-vehicle') }}">
                    @csrf
                    <div class="mb-1">
                        <label class="form-label" for="basic-addon-vehicle-number">Vehicle Number</label>
                        <input type="text" id="basic-addon-vehicle-number" name="vehicle_number" class="form-control"
                            placeholder="Vehicle Number" aria-label="Vehicle Number"
                            aria-describedby="basic-addon-vehicle-number" required />
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                    <div class="mb-1">
                        <label class="form-label">Vehicle Type</label>
                        <select class="form-select" name="vehicle_type" required>
                            <option value="" disabled selected>Select Vehicle Type</option>
                            <option value="Bus">Bus</option>
                            <option value="MiniBus">MiniBus</option>
                            <option value="MiniVan">Mini Van</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
@extends('admin.dashboard')
@section('admin_content')
<section class="bs-validation">
    <div class="card-header">
        <h4 class="card-title">Edit Vehicle</h4>
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
                    action="{{ route('update-vehicle', $vehicle->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-1">
                        <label class="form-label" for="basic-addon-vehicle-number">Vehicle Number</label>
                        <input type="text" id="basic-addon-vehicle-number" name="vehicle_number" class="form-control"
                            value="{{ $vehicle->vehicle_number }}" required value="{{ old('vehicle_number') }}" />
                        <div class="valid-feedback">Looks good!</div>
                        @if ($errors->has('vehicle_number'))
                        <span class="text-danger">{{ $errors->first('vehicle_number') }}</span>
                        @endif
                    </div>
                    <div class="mb-1">
                        <label class="form-label">Vehicle Type</label>
                        <select class="form-select" name="vehicle_type" required value="{{ old('vehicle_typ') }}">
                            <option value="Bus" @if($vehicle->vehicle_type == 'Bus') selected @endif>Bus</option>
                            <option value="MiniBus" @if($vehicle->vehicle_type == 'MiniBus') selected @endif>MiniBus
                            </option>
                            <option value="MiniVan" @if($vehicle->vehicle_type == 'MiniVan') selected @endif>Mini Van
                            </option>
                        </select>
                        @if ($errors->has('vehicle_type'))
                        <span class="text-danger">{{ $errors->first('vehicle_type') }}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
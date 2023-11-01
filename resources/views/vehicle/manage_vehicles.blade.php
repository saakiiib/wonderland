@extends('admin.dashboard')
@section('admin_content')
<div class="row" id="basic-table">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Manage Vehicles</h4>
            </div>
            <div class="card-body">
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Vehicle Number</th>
                            <th class="text-center">Vehicle Type</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vehicles as $vehicle)
                        <tr>
                            <td class="text-center">{{ $vehicle->id }}</td>
                            <td class="text-center">{{ $vehicle->vehicle_number }}</td>
                            <td class="text-center">{{ $vehicle->vehicle_type }}</td>
                            <td class="text-center">
                                <a href="{{ route('edit-vehicle', $vehicle->id) }}" class="btn btn-link">Edit</a>
                                <form method="POST" action="{{ route('delete-vehicle', $vehicle->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('admin.dashboard')
@section('admin_content')
<div class="row" id="basic-table">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Students</h4>
            </div>
            <div class="card-body">
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Vechile id</th>
                            <th>Vehcile Number</th>
                            <th>Actions</th> <!-- Add a new column for Actions -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>22 333 4444</td>
                            <td>
                                <!-- Add the Actions column -->
                                <div class="d-flex align-items-center">
                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0"
                                        data-bs-toggle="dropdown" data-bs-reference="parent">
                                        <i data-feather="more-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">
                                            <i data-feather="edit-2" class="me-50"></i>
                                            <span>Edit</span>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i data-feather="trash" class="me-50"></i>
                                            <span>Delete</span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
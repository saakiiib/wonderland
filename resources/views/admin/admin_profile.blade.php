@extends('admin.dashboard')

@section('admin_content')
<div class="row" id="admin-profile-table">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Admins</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($admins as $admin)
                            <tr>
                                <td>{{ $admin->admin_id }}</td>
                                <td>{{ $admin->admin_name }}</td>
                                <td>{{ $admin->email_address }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
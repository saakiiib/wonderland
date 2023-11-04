@extends('admin.dashboard')

@section('admin_content')

<div class="row" id="basic-table">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Manage Students</h4>
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
                            <th class="text-center">Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Mobile Number</th>
                            <th class="text-center">Class</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                        <tr>
                            <td class="text-center">{{ $student->id }}</td>
                            <td class="text-center">{{ $student->name }}</td>
                            <td class="text-center">{{ $student->email }}</td>
                            <td class="text-center">{{ $student->mobile_number }}</td>
                            <td class="text-center">{{ $student->class_id }}</td>
                            <td class="text-center">
                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-link">Edit</a>
                                <form method="POST" action="{{ route('students.delete', $student->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link"
                                        onclick="return confirm('Do you really want to delete?')">Delete</button>
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
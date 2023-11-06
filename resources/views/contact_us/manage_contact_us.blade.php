@extends('admin.dashboard')
@section('admin_content')
<div class="row" id="basic-table">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Manage Contact Us</h4>
            </div>
            <div class="card-body">
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
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
                            <th class="text-center">Message</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                        <tr>
                            <td class="text-center">{{ $contact->id }}</td>
                            <td class="text-center">{{ $contact->name }}</td>
                            <td class="text-center">{{ $contact->email }}</td>
                            <td class="text-center">{{ $contact->phone_number }}</td>
                            <td class="text-center">{{ $contact->message }}</td>
                            <td class="text-center">
                                <form method="POST" action="{{ route('delete-contact', $contact->id) }}">
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
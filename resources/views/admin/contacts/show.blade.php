@extends('layouts.admin')

@section('title', 'Contact Inquiry Details')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Contact Inquiry Details</h3>
            <div class="card-tools">
                <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary btn-sm">
                    <i class="fas fa-arrow-left"></i> Back to List
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <td>{{ $contact->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $contact->email }}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{ $contact->mobile }}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{ $contact->address }}</td>
                        </tr>
                        <tr>
                            <th>Received At</th>
                            <td>{{ $contact->created_at->format('M d, Y H:i:s') }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Message</h4>
                        </div>
                        <div class="card-body">
                            <p class="text-muted">{{ $contact->message }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this inquiry?')">
                        <i class="fas fa-trash"></i> Delete Inquiry
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 
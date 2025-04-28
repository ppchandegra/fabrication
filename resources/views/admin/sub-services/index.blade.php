@extends('layouts.admin')

@section('title', 'Sub-Services Management')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Sub-Services Management</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.sub-services.create') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> Add New Sub-Service
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Service</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($subServices as $subService)
                                    <tr>
                                        <td>{{ $subService->id }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $subService->image) }}" alt="{{ $subService->title }}" 
                                                 class="img-thumbnail" style="max-width: 100px;">
                                        </td>
                                        <td>{{ $subService->service->title }}</td>
                                        <td>{{ $subService->title }}</td>
                                        <td>{{ $subService->price ? '₹' . number_format($subService->price, 2) : 'N/A' }}</td>
                                        <td>{{ Str::limit($subService->description, 50) }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('admin.sub-services.edit', $subService) }}" 
                                                   class="btn btn-sm btn-info">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('admin.sub-services.destroy', $subService) }}" 
                                                      method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" 
                                                            onclick="return confirm('Are you sure you want to delete this sub-service?')">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No sub-services found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-center mt-4">
                        {{ $subServices->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Sub-services page loaded!');
    </script>
@stop 
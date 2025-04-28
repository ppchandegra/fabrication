@extends('layouts.admin')

@section('title', 'Gallery Management')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
    <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Gallery Management</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.galleries.create') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> Add New Gallery Item
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
                        <th>Title</th>
                                    <th>Category</th>
                                    <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                                @forelse($galleries as $gallery)
                        <tr>
                            <td>{{ $gallery->id }}</td>
                            <td>
                                            <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}" 
                                                 class="img-thumbnail" style="max-width: 100px;">
                            </td>
                            <td>{{ $gallery->title }}</td>
                                        <td>{{ $gallery->category }}</td>
                                        <td>{{ Str::limit($gallery->description, 50) }}</td>
                            <td>
                                            <div class="btn-group">
                                                <a href="{{ route('admin.galleries.edit', $gallery) }}" 
                                                   class="btn btn-sm btn-info">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('admin.galleries.destroy', $gallery) }}" 
                                                      method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" 
                                                            onclick="return confirm('Are you sure you want to delete this item?')">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                </form>
                                            </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                                        <td colspan="6" class="text-center">No gallery items found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
                    </div>

                    <div class="d-flex justify-content-center mt-4">
                        {{ $galleries->links() }}
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
        console.log('Galleries page loaded!');
    </script>
@stop 
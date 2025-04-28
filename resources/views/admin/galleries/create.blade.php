@extends('layouts.admin')

@section('title', 'Add New Gallery Item')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
    <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add New Gallery Item</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.galleries.index') }}" class="btn btn-secondary btn-sm">
                            <i class="fas fa-arrow-left"></i> Back to Gallery
                        </a>
                    </div>
                </div>
        <div class="card-body">
            <form action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" 
                           id="title" name="title" value="{{ old('title') }}" required>
                    @error('title')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="category">Category</label>
                            <input type="text" class="form-control @error('category') is-invalid @enderror" 
                                   id="category" name="category" value="{{ old('category') }}" required>
                            @error('category')
                                <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" 
                              id="description" name="description" rows="3">{{ old('description') }}</textarea>
                    @error('description')
                                <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('image') is-invalid @enderror" 
                                       id="image" name="image" required>
                                <label class="custom-file-label" for="image">Choose image</label>
                    @error('image')
                                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                            </div>
                    <small class="form-text text-muted">
                                Maximum file size: 2MB. Allowed formats: jpeg, png, jpg, gif
                    </small>
                </div>

                <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Save Gallery Item
                            </button>
                </div>
                    </form>
                </div>
                </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
    // Update the file input label with the selected file name
    document.querySelector('.custom-file-input').addEventListener('change', function(e) {
        var fileName = e.target.files[0].name;
        var nextSibling = e.target.nextElementSibling;
        nextSibling.innerText = fileName;
    });
    </script>
@endsection 
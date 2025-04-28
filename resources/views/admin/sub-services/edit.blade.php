@extends('layouts.admin')

@section('title', 'Edit Sub-Service')

@section('content')
<div class="container-fluid px-3 py-2">
    <div class="card">
        <div class="card-header py-2">
            <h3 class="card-title mb-0">Edit Sub-Service</h3>
            <div class="card-tools">
                <a href="{{ route('admin.sub-services.index') }}" class="btn btn-primary btn-sm">
                    <i class="fas fa-arrow-left"></i> Back to List
                </a>
            </div>
        </div>
        <div class="card-body p-3">
            @if ($errors->any())
                <div class="alert alert-danger py-2">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.sub-services.update', $subService) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group mb-2">
                    <label for="service_id">Parent Service</label>
                    <select name="service_id" id="service_id" class="form-control @error('service_id') is-invalid @enderror" required>
                        <option value="">Select a service</option>
                        @foreach($services as $service)
                            <option value="{{ $service->id }}" {{ old('service_id', $subService->service_id) == $service->id ? 'selected' : '' }}>
                                {{ $service->title }}
                            </option>
                        @endforeach
                    </select>
                    @error('service_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                           value="{{ old('title', $subService->title) }}" required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="description">Description</label>
                    <textarea name="description" id="description"
                              class="form-control @error('description') is-invalid @enderror" rows="6" required>{{ old('description', $subService->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <div class="form-group mb-2">
                    <label>Current Image</label>
                    @if($subService->image)
                        <div class="mb-1">
                            <img src="{{ asset('storage/' . $subService->image) }}" alt="Current Image" class="img-thumbnail" style="max-height: 200px;">
                        </div>
                    @else
                        <p class="text-muted mb-1">No image uploaded</p>
                    @endif
                </div>

                <div class="form-group mb-2">
                    <label for="image">New Image</label>
                    <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" accept="image/*">
                    <small class="form-text text-muted">Recommended size: 800x600 pixels. Maximum file size: 2MB.</small>
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary">Update Sub-Service</button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('styles')
<style>
.ck-editor__editable_inline {
    min-height: 500px !important;
}
.ck.ck-editor {
    width: 100% !important;
}
.card {
    margin-bottom: 0;
}
.form-group {
    margin-bottom: 0.75rem;
}
</style>
@endpush

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Check if the textarea exists
    const descriptionTextarea = document.querySelector('#description');
    if (descriptionTextarea) {
        ClassicEditor
            .create(descriptionTextarea, {
                height: '500px',
                toolbar: [
                    'heading', '|',
                    'bold', 'italic', 'link', '|',
                    'bulletedList', 'numberedList', '|',
                    'insertTable', 'blockQuote', '|',
                    'undo', 'redo'
                ]
            })
            .then(editor => {
                console.log('Editor was initialized', editor);
            })
            .catch(error => {
                console.error('Error initializing editor:', error);
            });
    } else {
        console.error('Textarea with ID "description" not found');
    }
});
</script>
@endpush

@endsection
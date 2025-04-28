@extends('layouts.frontend')

@section('title', $gallery->title)

@section('content')
<div class="gallery-detail-page">
    <!-- Hero Section -->
    <section class="gallery-hero">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('frontend.gallery') }}">Gallery</a></li>
                            <li class="breadcrumb-item active">{{ $gallery->title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="gallery-content py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="gallery-image-main">
                        <img src="{{ Storage::url($gallery->image) }}" alt="{{ $gallery->title }}" class="img-fluid rounded-3 shadow">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-info bg-white rounded-3 shadow-sm p-4">
                        <h1 class="gallery-title h3 mb-4">{{ $gallery->title }}</h1>
                        <div class="gallery-meta mb-4">
                            <div class="meta-item">
                                <i class="fas fa-calendar-alt text-primary"></i>
                                <span>{{ $gallery->created_at->format('M d, Y') }}</span>
                            </div>
                        </div>
                        <div class="gallery-description">
                            <p class="text-muted">{{ $gallery->description }}</p>
                        </div>
                        <div class="gallery-actions mt-4">
                            <a href="{{ route('frontend.contact') }}" class="btn btn-primary d-block">
                                Request Information
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
.gallery-detail-page {
    background-color: #f8f9fa;
}

.gallery-hero {
    background: linear-gradient(to right, #1a1a1a, #333);
    padding: 2rem 0;
    margin-bottom: 2rem;
}

.breadcrumb {
    background: transparent;
    margin: 0;
    padding: 0;
}

.breadcrumb-item a {
    color: #fff;
    text-decoration: none;
    opacity: 0.8;
    transition: opacity 0.3s ease;
}

.breadcrumb-item.active {
    color: #fff;
    opacity: 1;
}

.breadcrumb-item + .breadcrumb-item::before {
    color: #fff;
    opacity: 0.5;
}

.gallery-image-main {
    position: relative;
    margin-bottom: 2rem;
}

.gallery-image-main img {
    width: 100%;
    height: auto;
    object-fit: cover;
}

.gallery-info {
    height: 100%;
}

.gallery-title {
    color: #333;
    font-weight: 600;
    line-height: 1.3;
}

.gallery-meta {
    display: flex;
    gap: 1.5rem;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: #666;
    font-size: 0.9rem;
}

.meta-item i {
    font-size: 1rem;
}

.gallery-description {
    line-height: 1.6;
}

.btn-primary {
    background: linear-gradient(45deg, #1B3664, #4A90E2);
    border: none;
    padding: 0.8rem 1.5rem;
    font-weight: 500;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(74, 144, 226, 0.3);
}

@media (max-width: 991.98px) {
    .gallery-info {
        margin-top: 2rem;
    }
}
</style>
@endsection 
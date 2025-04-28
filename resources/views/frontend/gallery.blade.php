@extends('layouts.frontend')

@section('title', 'Our Gallery')

@section('content')
<div class="gallery-page">
    <!-- Hero Section -->
    <section class="gallery-hero text-center py-5">
        <div class="container">
            <h1 class="display-4 fw-bold mb-3">Our Gallery</h1>
            <p class="lead text-muted">Explore our collection of precision engineering and fabrication projects</p>
        </div>
    </section>

    <!-- Gallery Grid -->
    <section class="gallery-grid py-5">
        <div class="container">
            <div class="row g-4">
                @foreach($galleries as $gallery)
                <div class="col-md-6 col-lg-4">
                    <div class="gallery-card">
                        <div class="gallery-image">
                            <img src="{{ Storage::url($gallery->image) }}" alt="{{ $gallery->title }}" class="img-fluid">
                            <div class="gallery-overlay">
                                <div class="overlay-content">
                                    <h3 class="gallery-title">{{ $gallery->title }}</h3>
                                    <p class="gallery-excerpt">{{ Str::limit($gallery->description, 100) }}</p>
                                    <a href="{{ route('frontend.gallery.show', $gallery) }}" class="btn btn-light">
                                        View Details <i class="fas fa-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>

<!-- Why Choose Us Section -->
<section id="why-choose-us" class="strengths-section">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-badge">Our Strengths</span>
            <h2 class="section-title">
                Why Choose <span class="text-accent">Us?</span>
            </h2>
            <div class="title-underline"></div>
            <p class="section-subtitle">
                Delivering Excellence Through Innovation and Expertise
            </p>
        </div>
        <div class="strengths-grid">
            <div class="strength-card" data-aos="fade-up" data-aos-delay="100">
                <div class="strength-icon">
                    <i class="fas fa-certificate"></i>
                </div>
                <div class="strength-content">
                    <h3>ASME-Certified Excellence</h3>
                    <p>Setting industry standards with our ASME-certified equipment and unwavering commitment to quality.</p>
                </div>
                <div class="strength-footer">
                    <a href="#" class="learn-more">
                        Explore Certifications 
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="strength-card" data-aos="fade-up" data-aos-delay="200">
                <div class="strength-icon">
                    <i class="fas fa-cogs"></i>
                </div>
                <div class="strength-content">
                    <h3>Custom Engineering</h3>
                    <p>Tailored solutions crafted to perfection, meeting your unique specifications with precision.</p>
                </div>
                <div class="strength-footer">
                    <a href="#" class="learn-more">
                        View Solutions 
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="strength-card" data-aos="fade-up" data-aos-delay="300">
                <div class="strength-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="strength-content">
                    <h3>Timely Excellence</h3>
                    <p>Committed to delivering quality within your timeline, every project, every time.</p>
                </div>
                <div class="strength-footer">
                    <a href="#" class="learn-more">
                        Our Process 
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.gallery-page {
    background-color: #f8f9fa;
}

.gallery-hero {
    background: linear-gradient(to right, #1a1a1a, #333);
    color: white;
    padding: 4rem 0;
}

.gallery-hero .lead {
    color: rgba(255, 255, 255, 0.8);
}

.gallery-grid {
    background: #f8f9fa;
}

.gallery-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.gallery-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

.gallery-image {
    position: relative;
    aspect-ratio: 4/3;
    overflow: hidden;
}

.gallery-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.gallery-card:hover .gallery-image img {
    transform: scale(1.1);
}

.gallery-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.9), rgba(0,0,0,0.4));
    opacity: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.gallery-card:hover .gallery-overlay {
    opacity: 1;
}

.overlay-content {
    text-align: center;
    color: white;
    padding: 2rem;
    transform: translateY(20px);
    transition: all 0.3s ease;
}

.gallery-card:hover .overlay-content {
    transform: translateY(0);
}

.gallery-title {
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

.gallery-excerpt {
    font-size: 0.95rem;
    margin-bottom: 1.5rem;
    opacity: 0.9;
}

.btn-light {
    padding: 0.8rem 1.5rem;
    font-weight: 500;
    border-radius: 50px;
    transition: all 0.3s ease;
}

.btn-light:hover {
    transform: translateX(5px);
}

@media (max-width: 768px) {
    .gallery-hero {
        padding: 3rem 0;
    }
    
    .gallery-title {
        font-size: 1.25rem;
    }
    
    .gallery-excerpt {
        font-size: 0.9rem;
    }
}
</style>
@endsection 
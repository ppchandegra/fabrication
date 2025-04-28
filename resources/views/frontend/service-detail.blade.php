@extends('layouts.frontend')

@section('title', $service->title ?? 'Service Details')

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div class="container">
        <h1>{{ $service->title }}</h1>
    </div>
</div>

<!-- Service Detail Section -->
<section class="service-detail py-4">
    <div class="container">
        <!-- Image and Description -->
        <div class="row mb-4">
            <div class="col-lg-6 mb-3 mb-lg-0">
                <div class="service-image">
                    <img src="{{ Storage::url($service->image) }}" alt="{{ $service->title }}" class="img-fluid rounded">
                </div>
                <div class="contact-container mt-4">
                    <div class="contact-grid">
                        <div class="contact-card">
                            <div class="icon-circle">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                ribda,rajkot,gujarat,india 360311
                            </div>
                        </div>
                        <div class="contact-card">
                            <div class="icon-circle">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                jalundrafebrication@gmail.com
                            </div>
                        </div>
                        <div class="contact-card">
                            <div class="icon-circle">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="contact-text">
                                +91 8320006307
                                +91 9265899004
                            </div>
                        </div>
                    </div>
                    <div class="cta-container mt-4">
                        <a href="{{ route('frontend.contact') }}" class="cta-button primary">
                            <span class="button-text">GET A QUOTE</span>
                            <span class="button-icon">→</span>
                        </a>
                        <a href="tel:+911234567890" class="cta-button secondary">
                            <span class="button-icon"><i class="fas fa-phone"></i></span>
                            <span class="button-text">CALL NOW</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-description">
                    <div class="content">
                        {!! $service->description !!}
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="why-choose-box">
                    <h2 class="section-title">
                        <span class="icon"><i class="fas fa-check-circle"></i></span>
                        Why Choose Jalundra Fabrication?
                    </h2>
                    <div class="features-grid">
                        <div class="feature-item">
                            <span class="check-icon">✓</span>
                            <div class="feature-content">
                                <h3>Custom Engineering</h3>
                                <p>Platforms designed specifically for your load requirements and operational needs.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <span class="check-icon">✓</span>
                            <div class="feature-content">
                                <h3>Heavy-Duty Materials</h3>
                                <p>Fabricated using high-quality MS steel, structural beams, and anti-corrosion coatings for long-term durability.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <span class="check-icon">✓</span>
                            <div class="feature-content">
                                <h3>Built-In Safety & Stability</h3>
                                <p>Engineered with features to ensure structural integrity, even under extreme loads.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <span class="check-icon">✓</span>
                            <div class="feature-content">
                                <h3>Complete Service</h3>
                                <p>From fabrication to installation, we handle every aspect of your project.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- Sub Services Slider -->
@if($service->subServices->count() > 0)
<section class="sub-services-slider">
    <div class="container">
        <h2>Related Services</h2>
        <div class="services-slider-container">
            <button class="slider-nav prev" aria-label="Previous slide">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="slider-nav next" aria-label="Next slide">
                <i class="fas fa-chevron-right"></i>
            </button>
            <div class="services-slider">
                @foreach($service->subServices as $subService)
                <div class="service-slide">
                    <div class="sub-service-card">
                        <div class="card-image">
                            <img src="{{ Storage::url($subService->image) }}" alt="{{ $subService->title }}" loading="lazy">
                        </div>
                        <div class="card-content">
                            <h3>{{ $subService->title }}</h3>
                            <p>{{ Str::limit(strip_tags($subService->description), 100) }}</p>
                            <a href="{{ route('frontend.sub-services.show', $subService->id) }}" class="read-more">Learn More →</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="slider-dots">
                @for($i = 0; $i < ceil($service->subServices->count() / 4); $i++)
                <button class="dot {{ $i === 0 ? 'active' : '' }}" data-index="{{ $i }}"></button>
                @endfor
            </div>
        </div>
    </div>
</section>
@endif
<style>
    .sub-services-slider {
        padding: 60px 0;
        background: #f5f5f5;
        position: relative;
    }
    
    .sub-services-slider .container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 15px;
    }
    
    .sub-services-slider h2 {
        font-size: 32px;
        margin-bottom: 40px;
        color: #222;
        text-align: center;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .services-slider-container {
        position: relative;
        overflow: hidden;
        padding: 20px 0;
    }
    
    .services-slider {
        display: flex;
        gap: 20px;
        padding: 10px 0;
        width: 100%;
        transition: transform 0.5s ease;
    }
    
    .service-slide {
        flex: 0 0 auto;
        width: calc(25% - 20px);
        min-width: 300px;
        transition: transform 0.3s ease;
    }
    
    .slider-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: white;
        border: none;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        cursor: pointer;
        z-index: 2;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }
    
    .slider-nav:hover {
        background: #2563eb;
        color: white;
    }
    
    .slider-nav.prev {
        left: 10px;
    }
    
    .slider-nav.next {
        right: 10px;
    }
    
    .slider-dots {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-top: 20px;
    }
    
    .slider-dots .dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #ccc;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .slider-dots .dot.active {
        background: #2563eb;
        transform: scale(1.2);
    }
    
    .service-slide:hover {
        transform: translateY(-5px);
    }
    
    .sub-service-card {
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        height: 100%;
    }
    
    .sub-service-card:hover {
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    }
    
    .card-image {
        height: 200px;
        overflow: hidden;
    }
    
    .card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
    
    .sub-service-card:hover .card-image img {
        transform: scale(1.05);
    }
    
    .card-content {
        padding: 20px;
        display: flex;
        flex-direction: column;
        height: calc(100% - 200px);
    }
    
    .card-content h3 {
        font-size: 1.25rem;
        margin-bottom: 10px;
        color: #222;
    }
    
    .card-content p {
        color: #666;
        margin-bottom: 15px;
        font-size: 0.9rem;
        line-height: 1.5;
        flex-grow: 1;
    }
    
    .read-more {
        display: inline-block;
        color: #2563eb;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
        margin-top: auto;
    }
    
    .read-more:hover {
        color: #1d4ed8;
        transform: translateX(5px);
    }
    
    @media (max-width: 1200px) {
        .service-slide {
            width: calc(33.333% - 20px);
        }
    }
    
    @media (max-width: 992px) {
        .service-slide {
            width: calc(50% - 20px);
        }
    }
    
    @media (max-width: 768px) {
        .service-slide {
            width: calc(100% - 20px);
        }
        
        .sub-services-slider h2 {
            font-size: 24px;
            margin-bottom: 30px;
        }
        
        .slider-nav {
            width: 30px;
            height: 30px;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('.services-slider');
    const slides = document.querySelectorAll('.service-slide');
    const dots = document.querySelectorAll('.slider-dots .dot');
    const prevBtn = document.querySelector('.slider-nav.prev');
    const nextBtn = document.querySelector('.slider-nav.next');
    
    let currentIndex = 0;
    let slideWidth = slides[0].offsetWidth + 20; // width + gap
    let slidesPerView = Math.floor(slider.offsetWidth / slideWidth);
    let totalSlides = slides.length;
    let autoSlideInterval;
    
    function updateSlider() {
        const offset = -currentIndex * slideWidth;
        slider.style.transform = `translateX(${offset}px)`;
        
        // Update dots
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === Math.floor(currentIndex / slidesPerView));
        });
        
        // Disable/enable navigation buttons
        prevBtn.disabled = currentIndex === 0;
        nextBtn.disabled = currentIndex >= totalSlides - slidesPerView;
    }
    
    function startAutoSlide() {
        autoSlideInterval = setInterval(() => {
            if (currentIndex < totalSlides - slidesPerView) {
                currentIndex++;
            } else {
                currentIndex = 0;
            }
            updateSlider();
        }, 5000);
    }
    
    function stopAutoSlide() {
        clearInterval(autoSlideInterval);
    }
    
    // Event listeners
    prevBtn.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateSlider();
        }
    });
    
    nextBtn.addEventListener('click', () => {
        if (currentIndex < totalSlides - slidesPerView) {
            currentIndex++;
            updateSlider();
        }
    });
    
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentIndex = index * slidesPerView;
            updateSlider();
        });
    });
    
    // Handle window resize
    window.addEventListener('resize', () => {
        slideWidth = slides[0].offsetWidth + 20;
        slidesPerView = Math.floor(slider.offsetWidth / slideWidth);
        updateSlider();
    });
    
    // Start auto-slide
    startAutoSlide();
    
    // Pause auto-slide on hover
    slider.addEventListener('mouseenter', stopAutoSlide);
    slider.addEventListener('mouseleave', startAutoSlide);
});
</script>

<style>
/* Page Header Styles */
.page-header {
    background: linear-gradient(rgba(44, 57, 85, 0.95), rgba(44, 57, 85, 0.95)), url('/images/header-bg.jpg');
    background-size: cover;
    background-position: center;
    padding: 50px 0;
    color: #fff;
    position: relative;
}

.page-header::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(to right, #3498db, #2c3955);
}

.breadcrumb {
    background: transparent;
    padding: 0;
    margin-bottom: 1rem;
}

.breadcrumb-item a {
    color: #3498db;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease;
}

.breadcrumb-item a:hover {
    color: #fff;
}

.breadcrumb-item.active {
    color: #fff;
    opacity: 0.8;
}

.page-header h1 {
    font-size: 2.8rem;
    font-weight: 700;
    margin: 0;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
}

/* Service Detail Styles */
.service-detail {
    background-color: #f8f9fa;
}

.service-image {
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 20px rgba(44, 57, 85, 0.1);
    margin-bottom: 0;
    position: relative;
}

.service-image::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, rgba(44, 57, 85, 0), rgba(44, 57, 85, 0.7));
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: 1;
    pointer-events: none;
}

.service-image:hover::before {
    opacity: 1;
}

.service-image img {
    width: 100%;
    height: 400px;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.service-image:hover img {
    transform: scale(1.05);
}

.contact-container {
    background: #f8f9fa;
    border-radius: 15px;
    padding: 25px;
    box-shadow: 0 10px 30px rgba(44, 57, 85, 0.08);
}

.contact-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 15px;
    margin-bottom: 20px;
}

.contact-card {
    background: #fff;
    padding: 15px;
    border-radius: 10px;
    text-align: center;
    transition: transform 0.3s ease;
}

.contact-card:hover {
    transform: translateY(-3px);
}

.icon-circle {
    width: 50px;
    height: 50px;
    background: #e8f5fe;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 12px;
}

.icon-circle i {
    color: #3498db;
    font-size: 20px;
}

.contact-text {
    color: #2c3955;
    font-size: 14px;
    line-height: 1.4;
    font-weight: 500;
}

.cta-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 15px;
}

.cta-button {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 15px 20px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    font-size: 14px;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
}

.cta-button.primary {
    background: linear-gradient(135deg, #3498db, #2980b9);
    color: #fff;
}

.cta-button.primary:hover {
    background: linear-gradient(135deg, #2980b9, #2472a4);
    color: #fff;
    text-decoration: none;
    transform: translateY(-2px);
}

.cta-button.secondary {
    background: #fff;
    color: #2c3955;
    border: 2px solid #e8f5fe;
}

.cta-button.secondary:hover {
    background: #e8f5fe;
    color: #3498db;
    text-decoration: none;
    transform: translateY(-2px);
}

.button-text {
    margin: 0 5px;
}

.button-icon {
    font-size: 16px;
    display: inline-block;
    transition: transform 0.3s ease;
}

.cta-button:hover .button-icon {
    transform: translateX(3px);
}

.service-description {
    background: #fff;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 10px 20px rgba(44, 57, 85, 0.1);
    height: 100%;
}

.service-description .content {
    color: #2c3955;
    line-height: 1.8;
    font-size: 1.05rem;
}

.service-stats {
    display: flex;
    justify-content: space-between;
    margin-top: 25px;
    padding: 20px;
    background: #2c3955;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(44, 57, 85, 0.15);
}

.stat-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 10px 15px;
    border-right: 1px solid rgba(255,255,255,0.1);
}

.stat-item:last-child {
    border-right: none;
}

.stat-item i {
    color: #3498db;
    font-size: 1.4rem;
}

.stat-item span {
    font-size: 1rem;
    color: #fff;
    font-weight: 500;
}

.service-cta {
    margin-top: 35px;
    display: flex;
    gap: 20px;
}

.btn {
    padding: 15px 30px;
    font-weight: 600;
    border-radius: 8px;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.btn-primary {
    background: #3498db;
    border-color: #3498db;
    color: #fff;
}

.btn-primary:hover {
    background: #2c3955;
    border-color: #2c3955;
    transform: translateY(-2px);
}

.btn-outline-primary {
    color: #2c3955;
    border: 2px solid #2c3955;
}

.btn-outline-primary:hover {
    background: #2c3955;
    color: #fff;
    transform: translateY(-2px);
}

/* Feature Box Styles */
.feature-box {
    background: #fff;
    border-radius: 15px;
    padding: 35px;
    height: 100%;
    box-shadow: 0 15px 30px rgba(44, 57, 85, 0.1);
    transition: all 0.3s ease;
    border: 1px solid rgba(44, 57, 85, 0.1);
}

.feature-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(44, 57, 85, 0.15);
}

.section-title {
    display: flex;
    align-items: center;
    font-size: 1.6rem;
    color: #2c3955;
    margin-bottom: 1.8rem;
    font-weight: 700;
    position: relative;
    padding-bottom: 15px;
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 50px;
    height: 3px;
    background: #3498db;
}

.section-title .icon {
    margin-right: 15px;
    font-size: 2rem;
    color: #3498db;
}

.feature-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.feature-list li {
    display: flex;
    align-items: flex-start;
    margin-bottom: 20px;
    color: #2c3955;
    line-height: 1.7;
    font-size: 1.05rem;
    padding: 15px;
    background: rgba(52, 152, 219, 0.05);
    border-radius: 8px;
    transition: all 0.3s ease;
}

.feature-list li:hover {
    background: rgba(52, 152, 219, 0.1);
    transform: translateX(5px);
}

.feature-list li:last-child {
    margin-bottom: 0;
}

.feature-list .check {
    flex-shrink: 0;
    margin-right: 15px;
    font-size: 1.3rem;
    color: #3498db;
}

/* Sub Service Card Styles */
.sub-services {
    margin-top: 0;
}

.sub-services h2 {
    color: #2c3955;
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 2rem;
    position: relative;
    padding-bottom: 15px;
}

.sub-services h2::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 60px;
    height: 3px;
    background: #3498db;
}

.sub-service-card {
    background: #fff;
    border: 1px solid rgba(44, 57, 85, 0.1);
    border-radius: 15px;
    overflow: hidden;
    transition: all 0.3s ease;
    height: 100%;
    box-shadow: 0 15px 30px rgba(44, 57, 85, 0.1);
}

.sub-service-card:hover {
    box-shadow: 0 20px 40px rgba(44, 57, 85, 0.15);
    transform: translateY(-5px);
}

.card-image {
    height: 220px;
    overflow: hidden;
    position: relative;
}

.card-image::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, transparent, rgba(44, 57, 85, 0.8));
    z-index: 1;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.card-image:hover::before {
    opacity: 1;
}

.card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.sub-service-card:hover .card-image img {
    transform: scale(1.1);
}

.card-content {
    padding: 20px;
}

.card-content h3 {
    font-size: 1.3rem;
    color: #2c3955;
    margin-bottom: 1rem;
    font-weight: 700;
}

.card-content p {
    color: #666;
    font-size: 1rem;
    margin-bottom: 1.2rem;
    line-height: 1.7;
}

.read-more {
    color: #3498db;
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    transition: all 0.3s ease;
}

.read-more::after {
    content: '→';
    margin-left: 5px;
    transition: transform 0.3s ease;
}

.read-more:hover {
    color: #2c3955;
    text-decoration: none;
}

.read-more:hover::after {
    transform: translateX(5px);
}

@media (max-width: 991px) {
    .service-image img {
        height: 350px;
    }
    
    .service-stats {
        flex-direction: column;
        gap: 15px;
    }
    
    .stat-item {
        border-right: none;
        border-bottom: 1px solid rgba(255,255,255,0.1);
        padding: 15px 0;
    }
    
    .stat-item:last-child {
        border-bottom: none;
    }
    
    .feature-box {
        margin-bottom: 30px;
    }
}

@media (max-width: 767px) {
    .page-header {
        padding: 40px 0;
    }
    
    .page-header h1 {
        font-size: 2.2rem;
    }
    
    .section-title {
        font-size: 1.4rem;
    }
    
    .cta-button {
        padding: 12px;
        font-size: 13px;
    }
    
    .feature-list li {
        font-size: 1rem;
        padding: 12px;
    }
}

.why-choose-box {
    background: #fff;
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0 15px 30px rgba(44, 57, 85, 0.1);
}

.why-choose-box .section-title {
    margin-bottom: 1.5rem;
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
}

.feature-item {
    background: #f8f9fa;
    padding: 20px;
    border-radius: 10px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    transition: all 0.3s ease;
}

.feature-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(44, 57, 85, 0.1);
}

.check-icon {
    background: #e8f5fe;
    color: #3498db;
    width: 28px;
    height: 28px;
    min-width: 28px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    margin-top: 3px;
}

.feature-content h3 {
    color: #2c3955;
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 10px;
}

.feature-content p {
    color: #666;
    font-size: 0.95rem;
    line-height: 1.6;
    margin: 0;
}

@media (max-width: 768px) {
    .page-header {
        padding: 40px 0;
    }
    
    .service-image img {
        height: 300px;
    }
    
    .service-detail {
        padding-top: 20px;
        padding-bottom: 20px;
    }
    
    .why-choose-box {
        padding: 20px;
    }
    
    .feature-item {
        padding: 15px;
    }
    
    .service-description {
        padding: 20px;
    }
    
    .contact-container {
        padding: 20px;
    }

    .contact-grid {
        grid-template-columns: 1fr;
        gap: 10px;
    }

    .contact-card {
        display: flex;
        align-items: center;
        text-align: left;
        padding: 12px 15px;
    }

    .icon-circle {
        width: 40px;
        height: 40px;
        margin: 0 15px 0 0;
    }

    .icon-circle i {
        font-size: 16px;
    }

    .cta-button {
        padding: 12px 15px;
        font-size: 13px;
    }
}
</style>

@endsection

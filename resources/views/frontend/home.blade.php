@extends('layouts.frontend')

@section('title', 'Home')

@section('content')

<!-- Add Google Fonts with preconnect for faster loading -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600&family=Lora:wght@400;500;600&family=Source+Sans+Pro:wght@300;400;600&display=swap" rel="stylesheet">

<section class="hero-section">
    <div class="video-container">
        <video autoplay loop muted playsinline class="hero-video" id="hero-video">
            <source src="{{ asset('storage/home/slider/1slider.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="overlay"></div>
    </div>
    <div class="hero-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <span class="hero-label text-white" data-aos="fade-down">Welcome to Excellence</span>
                    <h1 class="hero-title text-white" data-aos="fade-down" data-aos-delay="100">
                        <span class="text-gradient">Accuracy is our attitude</span><br>
                        <span class="text-stroke">Precision is our craft</span>
                    </h1>
                    <p class="hero-subtitle text-white" data-aos="fade-up" data-aos-delay="200">
                        <span class="highlight">Crafting Excellence</span> in Custom Metal Fabrication<br>
                        Delivering Precision Solutions for Industry Leaders
                    </p>
                    <div class="hero-buttons" data-aos="fade-up" data-aos-delay="400">
                        <a href="{{ route('frontend.contact') }}" class="btn btn-primary btn-lg">
                            <span class="btn-text">Start Your Project</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="#why-choose-us" class="btn btn-outline-light btn-lg">
                            <span class="btn-text">Discover More</span>
                            <i class="fas fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <div class="mouse">
                <div class="wheel"></div>
            </div>
            <div class="arrows">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</section>

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

<!-- Services Section -->
<section class="services-section">
    <div class="container">
        <div class="section-header text-center mb-4">
            <h2 class="section-title">
                Our <span class="text-accent">Services</span>
            </h2>
            <p class="section-subtitle">Comprehensive Solutions for Modern Industry Challenges</p>
        </div>

        <div class="services-grid">
            @foreach($services as $service)
                <div class="service-card">
                <div class="service-card-inner">
                    <div class="service-image">
                        <img src="{{ Storage::url($service->image) }}" alt="{{ $service->title }}" class="img-fluid">
                    </div>
                    <div class="service-content">
                        <h3>{{ $service->title }}</h3>
                        <p>{!! Str::limit(strip_tags($service->description), 100) !!}</p>
                        <a href="{{ route('frontend.services.show', $service->id) }}" class="read-more">
                            Learn More <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Horizontal Service Slider -->
<section class="service-slider-section py-5 bg-light">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 class="section-title">
                Featured <span class="text-accent">Services</span>
            </h2>
            <p class="section-subtitle">Explore Our Range of Specialized Solutions</p>
        </div>
        
        <div class="service-slider-container">
            <div class="service-slider">
                @foreach($services as $service)
                <div class="service-slide">
                    <div class="service-slide-inner">
                        <div class="service-slide-image">
                            <img src="{{ Storage::url($service->image) }}" alt="{{ $service->title }}" class="img-fluid">
                        </div>
                        <div class="service-slide-content">
                            <h3>{{ $service->title }}</h3>
                            <p>{!! Str::limit(strip_tags($service->description), 100) !!}</p>
                            <a href="{{ route('frontend.services.show', $service->id) }}" class="btn btn-primary">
                                Learn More <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="slider-nav prev"><i class="fas fa-chevron-left"></i></button>
            <button class="slider-nav next"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
</section>

<style>
/* Base Typography */
body {
    font-family: 'Source Sans Pro', -apple-system, BlinkMacSystemFont, sans-serif;
    color: #2D3748;
    line-height: 1.6;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

/* Enhanced Typography with Better Contrast */
h1, h2, h3 {
    font-family: 'Playfair Display', sans-serif;
    font-weight: 700;
    color: #1B3664;
    text-shadow: 0 1px 2px rgba(0,0,0,0.1);
}

.text-white {
    color: #FFFFFF !important;
    text-shadow: 0 2px 4px rgba(0,0,0,0.2);
}

.hero-label {
    font-family: 'Montserrat', sans-serif;
    font-size: 1.1rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 3px;
    text-shadow: 0 2px 4px rgba(0,0,0,0.3);
}

.hero-title {
    font-family: 'Playfair Display', serif;
    font-size: 4.5rem;
    font-weight: 700;
    line-height: 1.1;
    margin-bottom: 1.5rem;
    text-shadow: 0 2px 4px rgba(0,0,0,0.3);
}

.hero-subtitle {
    font-family: 'Lora', serif;
    font-size: 1.25rem;
    line-height: 1.8;
    font-weight: 500;
    text-shadow: 0 2px 4px rgba(0,0,0,0.3);
}

/* Video Background Fixes */
.hero-section {
    position: relative;
    height: 100vh;
    min-height: 600px;
    overflow: hidden;
    background-color: #000;
}

.video-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

.hero-video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 1;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(
        45deg,
        rgba(0,0,0,0.7) 0%,
        rgba(0,0,0,0.5) 50%,
        rgba(0,0,0,0.3) 100%
    );
    z-index: 2;
}

.hero-content {
    position: relative;
    z-index: 3;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

/* Text Gradient Effect */
.text-gradient {
    background: linear-gradient(45deg, #FFD700, #FFA500);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    text-fill-color: transparent;
    text-shadow: none;
    font-weight: 700;
}

.highlight {
    color: #09f;
    font-weight: 600;
}

/* Responsive Typography */
@media (max-width: 768px) {
    .hero-title {
        font-size: 2.5rem;
    }
    
    .hero-subtitle {
        font-size: 1.1rem;
    }
    
    .hero-label {
        font-size: 0.9rem;
    }
}

/* Fix for Mobile Video */
@media (max-width: 768px) {
    .hero-video {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
}

/* Animation Classes */
.text-focus-in {
    animation: text-focus-in 1s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
}

@keyframes text-focus-in {
    0% {
        filter: blur(12px);
        opacity: 0;
    }
    100% {
        filter: blur(0);
        opacity: 1;
    }
}

/* Scroll Indicator */
.scroll-indicator {
    position: absolute;
    bottom: 30px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 1rem;
}

.mouse {
    width: 30px;
    height: 50px;
    border: 2px solid white;
    border-radius: 15px;
    position: relative;
}

.wheel {
    width: 4px;
    height: 8px;
    background: white;
    position: absolute;
    top: 8px;
    left: 50%;
    transform: translateX(-50%);
    border-radius: 2px;
    animation: scroll 1.5s infinite;
}

.arrows {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 5px;
}

.arrows span {
    display: block;
    width: 10px;
    height: 10px;
    border-bottom: 2px solid white;
    border-right: 2px solid white;
    transform: rotate(45deg);
    animation: arrows 1.5s infinite;
}

.arrows span:nth-child(2) {
    animation-delay: 0.2s;
}

.arrows span:nth-child(3) {
    animation-delay: 0.4s;
}

/* Section Styles */
.section-padding {
    padding: 100px 0;
}

.title-underline {
    width: 80px;
    height: 4px;
    background: linear-gradient(45deg, #f06, #09f);
    margin: 0 auto 3rem;
    border-radius: 2px;
}

/* Feature Cards */
.feature-card {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    height: 100%;
}

.feature-card:hover {
    transform: translateY(-10px);
}

.feature-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(45deg, #f06, #09f);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
}

.feature-icon i {
    font-size: 2rem;
    color: white;
}

.feature-hover {
    position: absolute;
    bottom: -100%;
    left: 0;
    width: 100%;
    padding: 1rem;
    background: linear-gradient(45deg, #f06, #09f);
    transition: all 0.3s ease;
}

.feature-card:hover .feature-hover {
    bottom: 0;
}

/* Service Cards */
.service-card {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.service-card-inner {
    background: white;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    height: 100%;
    display: flex;
    flex-direction: column;
}

.service-image {
    position: relative;
    padding-top: 60%;
    overflow: hidden;
}

.service-image img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.service-content {
    padding: 1.5rem;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.service-content h3 {
    font-size: 1.25rem;
    font-weight: 600;
    color: #1a365d;
    margin-bottom: 0.75rem;
}

.service-content p {
    color: #4a5568;
    font-size: 0.95rem;
    line-height: 1.6;
    margin-bottom: 1rem;
    flex-grow: 1;
}

.read-more {
    display: inline-flex;
    align-items: center;
    color: #1a365d;
    font-weight: 500;
    text-decoration: none;
    transition: color 0.2s ease;
}

.read-more i {
    transition: transform 0.2s ease;
}

/* Hover Effects */
.service-card:hover {
    transform: translateY(-5px);
}

.service-card:hover .service-image img {
    transform: scale(1.05);
}

.service-card:hover .read-more {
    color: #4299e1;
}

.service-card:hover .read-more i {
    transform: translateX(5px);
}

/* Animations */
@keyframes scroll {
    0% { opacity: 1; transform: translateX(-50%) translateY(0); }
    100% { opacity: 0; transform: translateX(-50%) translateY(10px); }
}

@keyframes arrows {
    0% { opacity: 0; transform: rotate(45deg) translate(-5px, -5px); }
    50% { opacity: 1; }
    100% { opacity: 0; transform: rotate(45deg) translate(5px, 5px); }
}

/* Responsive Styles */
@media (max-width: 768px) {
    .hero-title {
        font-size: 2.5rem;
    }

    .hero-subtitle {
        font-size: 1rem;
    }

    .hero-buttons {
        flex-direction: column;
    }

    .section-padding {
        padding: 60px 0;
    }
}

/* Services Section Styles */
.services-section {
    padding: 2rem 0 4rem;
    background-color: #f8f9fa;
    position: relative;
}

.services-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 1px;
    background: linear-gradient(to right, transparent, rgba(0,0,0,0.1), transparent);
}

.section-header {
    margin-bottom: 2.5rem;
}

.section-badge {
    display: inline-block;
    padding: 0.5rem 1rem;
    background: rgba(26, 54, 93, 0.1);
    color: #1a365d;
    font-size: 0.875rem;
    font-weight: 600;
    border-radius: 30px;
    margin-bottom: 0.75rem;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.section-title {
    font-size: 2.25rem;
    font-weight: 700;
    color: #1a365d;
    margin-bottom: 0.75rem;
    position: relative;
}

.title-underline {
    width: 80px;
    height: 3px;
    background: linear-gradient(90deg, #1a365d 0%, #4299e1 100%);
    margin: 0.75rem auto;
}

.section-subtitle {
    color: #4a5568;
    font-size: 1.1rem;
    max-width: 600px;
    margin: 0.75rem auto 0;
}

/* Services Grid Layout */
.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
    max-width: 1200px;
    margin: 0 auto;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .services-section {
        padding: 1.5rem 0 3rem;
    }

    .section-header {
        margin-bottom: 2rem;
    }

    .section-title {
        font-size: 2rem;
    }

    .services-grid {
        gap: 1rem;
        padding: 0 1rem;
    }
}

@media (max-width: 576px) {
    .services-section {
        padding: 1rem 0 2.5rem;
    }

    .section-header {
        margin-bottom: 1.5rem;
    }
}

/* Strengths Section Styles */
.strengths-section {
    padding: 5rem 0;
    background: linear-gradient(to bottom, #f8fafc, #ffffff);
    position: relative;
}

.strengths-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 1px;
    background: linear-gradient(to right, transparent, rgba(0,0,0,0.1), transparent);
}

.text-accent {
    color: #2563eb;
    position: relative;
}

.text-accent::after {
    content: '';
    position: absolute;
    bottom: -4px;
    left: 0;
    width: 100%;
    height: 2px;
    background: #2563eb;
    transform: scaleX(0.7);
    transition: transform 0.3s ease;
}

/* Strengths Grid */
.strengths-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
    padding: 1rem;
}

/* Strength Card */
.strength-card {
    background: #ffffff;
    border-radius: 12px;
    padding: 2rem;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    position: relative;
    border: 1px solid rgba(0,0,0,0.1);
    box-shadow: 0 4px 6px rgba(0,0,0,0.05);
}

.strength-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 15px rgba(0,0,0,0.1);
    border-color: rgba(37,99,235,0.2);
}

.strength-icon {
    width: 64px;
    height: 64px;
    background: linear-gradient(135deg, #1a365d, #2563eb);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
    position: relative;
    overflow: hidden;
}

.strength-icon::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, transparent, rgba(255,255,255,0.2), transparent);
    transform: translateX(-100%);
    transition: transform 0.6s ease;
}

.strength-card:hover .strength-icon::after {
    transform: translateX(100%);
}

.strength-icon i {
    font-size: 1.75rem;
    color: #ffffff;
    z-index: 1;
}

.strength-content {
    flex-grow: 1;
}

.strength-content h3 {
    color: #1a365d;
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 1rem;
    font-family: 'Montserrat', sans-serif;
}

.strength-content p {
    color: #4b5563;
    font-size: 0.95rem;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

.strength-footer {
    margin-top: auto;
    padding-top: 1rem;
    border-top: 1px solid rgba(0,0,0,0.1);
}

.learn-more {
    display: inline-flex;
    align-items: center;
    color: #2563eb;
    font-weight: 500;
    text-decoration: none;
    font-size: 0.95rem;
    transition: all 0.3s ease;
}

.learn-more i {
    margin-left: 0.5rem;
    transition: transform 0.3s ease;
}

.strength-card:hover .learn-more {
    color: #1a365d;
}

.strength-card:hover .learn-more i {
    transform: translateX(5px);
}

@media (max-width: 768px) {
    .strengths-section {
        padding: 3rem 0;
    }

    .strengths-grid {
        gap: 1.5rem;
        padding: 0.5rem;
    }

    .strength-card {
        padding: 1.5rem;
    }

    .strength-icon {
        width: 56px;
        height: 56px;
    }

    .strength-content h3 {
        font-size: 1.1rem;
    }

    .strength-content p {
        font-size: 0.9rem;
    }
}

/* Service Slider Styles */
.service-slider-section {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    padding: 4rem 0;
}

.service-slider-container {
    position: relative;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
}

.service-slider {
    display: flex;
    overflow-x: auto;
    scroll-behavior: smooth;
    -webkit-overflow-scrolling: touch;
    scrollbar-width: none;
    -ms-overflow-style: none;
    padding: 1rem 0;
    gap: 1.5rem;
}

.service-slider::-webkit-scrollbar {
    display: none;
}

.service-slide {
    flex: 0 0 300px;
    scroll-snap-align: start;
}

.service-slide-inner {
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.service-slide-inner:hover {
    transform: translateY(-5px);
}

.service-slide-image {
    height: 200px;
    overflow: hidden;
}

.service-slide-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.service-slide-inner:hover .service-slide-image img {
    transform: scale(1.05);
}

.service-slide-content {
    padding: 1.5rem;
}

.service-slide-content h3 {
    font-size: 1.25rem;
    margin-bottom: 0.75rem;
    color: #1B3664;
}

.service-slide-content p {
    color: #666;
    margin-bottom: 1rem;
    font-size: 0.9rem;
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
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 10;
    transition: all 0.3s ease;
}

.slider-nav:hover {
    background: #1B3664;
    color: white;
}

.slider-nav.prev {
    left: 0;
}

.slider-nav.next {
    right: 0;
}

@media (max-width: 768px) {
    .service-slide {
        flex: 0 0 250px;
    }
    
    .slider-nav {
        display: none;
    }
}
</style>

<!-- Add AOS Library -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Video initialization
        const video = document.getElementById('hero-video');
        if (video) {
            // Force video to play
            video.play().catch(function(error) {
                console.log("Video play failed:", error);
                // Try to play again after a short delay
                setTimeout(() => {
                    video.play().catch(e => console.log("Second attempt failed:", e));
                }, 1000);
            });

            // Ensure video is visible
            video.style.opacity = '1';
            video.style.visibility = 'visible';
        }
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('.service-slider');
    const prevButton = document.querySelector('.slider-nav.prev');
    const nextButton = document.querySelector('.slider-nav.next');
    
    if (slider && prevButton && nextButton) {
        prevButton.addEventListener('click', () => {
            slider.scrollBy({
                left: -300,
                behavior: 'smooth'
            });
        });
        
        nextButton.addEventListener('click', () => {
            slider.scrollBy({
                left: 300,
                behavior: 'smooth'
            });
        });
    }
});
</script>
@endsection 
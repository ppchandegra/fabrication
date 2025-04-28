@extends('layouts.frontend')

@section('title', 'About Us - Jalundra Fabrication')

@section('content')

<!-- Hero Section -->
<section class="about-hero-section">
    <div class="hero-background">
        <img src="{{ asset('storage/about/hero-bg.avif') }}" alt="About Us Background" class="hero-bg-image">
        <div class="hero-overlay"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="about-hero-title">Jalundra Fabrication</h1>
                <p class="about-hero-subtitle">Crafting Excellence in Metal Fabrication Since 2012</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose-section section-padding">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title">Why Choose Jalundra Fabrication?</h2>
                <p class="section-subtitle">Your Trusted Partner in Metal Fabrication</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="feature-title">Expert Metal Fabrication</h3>
                    <p class="feature-text">Specialized in custom metal fabrication, sheet metal work, and precision engineering solutions for industrial applications.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3 class="feature-title">Advanced Equipment</h3>
                    <p class="feature-text">State-of-the-art machinery and tools for precise cutting, bending, and welding operations.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3 class="feature-title">Quality Assurance</h3>
                    <p class="feature-text">Rigorous quality control processes ensuring each project meets the highest industry standards.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="feature-title">Timely Delivery</h3>
                    <p class="feature-text">Committed to meeting project deadlines without compromising on quality.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="feature-title">Customer Satisfaction</h3>
                    <p class="feature-text">Dedicated to providing exceptional service and building long-term relationships with our clients.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Services Section -->
<section class="services-section section-padding bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="section-title">Our Services</h2>
                <p class="section-subtitle">Comprehensive Metal Fabrication Solutions</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3 class="service-title">Custom Fabrication</h3>
                    <p class="service-text">Tailored metal fabrication solutions for your specific needs.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-cut"></i>
                    </div>
                    <h3 class="service-title">Sheet Metal Work</h3>
                    <p class="service-text">Precision sheet metal fabrication and forming services.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <h3 class="service-title">Welding Services</h3>
                    <p class="service-text">Expert welding for various metals and applications.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-drafting-compass"></i>
                    </div>
                    <h3 class="service-title">Design & Engineering</h3>
                    <p class="service-text">Technical design and engineering support.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* About Page Styles */
.about-hero-section {
    position: relative;
    color: #fff;
    padding: 150px 0;
    text-align: center;
    overflow: hidden;
}

.hero-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
}

.hero-bg-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(27, 54, 100, 0.9) 0%, rgba(13, 31, 60, 0.9) 100%);
}

.about-hero-title {
    font-family: 'Playfair Display', serif;
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
    color: #FFD700;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

.about-hero-subtitle {
    font-family: 'Lora', serif;
    font-size: 1.25rem;
    opacity: 0.9;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
}

.section-padding {
    padding: 100px 0;
}

.section-title {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    font-weight: 700;
    color: #1B3664;
    margin-bottom: 1rem;
}

.section-subtitle {
    font-family: 'Lora', serif;
    font-size: 1.1rem;
    color: #4A5568;
    margin-bottom: 3rem;
}

.feature-card {
    background: #fff;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    height: 100%;
    transition: transform 0.3s ease;
}

.feature-card:hover {
    transform: translateY(-10px);
}

.feature-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(45deg, #1B3664, #0D1F3C);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
}

.feature-icon i {
    font-size: 1.5rem;
    color: #FFD700;
}

.feature-title {
    font-family: 'Playfair Display', serif;
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 1rem;
    color: #1B3664;
}

.feature-text {
    color: #4A5568;
    line-height: 1.8;
}

.service-card {
    background: #fff;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    height: 100%;
    transition: transform 0.3s ease;
}

.service-card:hover {
    transform: translateY(-10px);
}

.service-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(45deg, #1B3664, #0D1F3C);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
}

.service-icon i {
    font-size: 1.5rem;
    color: #FFD700;
}

.service-title {
    font-family: 'Playfair Display', serif;
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 1rem;
    color: #1B3664;
}

.service-text {
    color: #4A5568;
    line-height: 1.8;
}

@media (max-width: 768px) {
    .about-hero-section {
        padding: 100px 0;
    }
    
    .about-hero-title {
        font-size: 2.5rem;
    }
    
    .about-hero-subtitle {
        font-size: 1.1rem;
    }
    
    .section-title {
        font-size: 2rem;
    }
    
    .feature-card,
    .service-card {
        margin-bottom: 2rem;
    }
}
</style>
@endsection 
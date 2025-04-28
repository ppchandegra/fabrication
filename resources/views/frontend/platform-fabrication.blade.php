@extends('layouts.frontend')

@section('title', 'Heavy-Duty Platform Fabrication')

@section('content')
<div class="platform-fabrication">
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content" data-aos="fade-right">
                        <span class="service-badge">Industrial Solutions</span>
                        <h1 class="hero-title">Heavy-Duty Platform Fabrication</h1>
                        <p class="hero-description">
                            Engineered for maximum strength and reliability in demanding industrial environments
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image" data-aos="fade-left">
                        <img src="{{ asset('images/platform-main.jpg') }}" alt="Heavy-Duty Platform" class="img-fluid rounded-xl shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <!-- Overview Section -->
            <div class="content-section" data-aos="fade-up">
                <div class="section-header">
                    <h2>Expert Platform Solutions</h2>
                    <div class="section-line"></div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="overview-content">
                            <p class="lead-text">
                                At Jalundra Fabrication, we specialize in designing and fabricating heavy-duty platforms that set industry standards for quality, safety, and durability.
                            </p>
                            <div class="key-features">
                                <div class="feature-item">
                                    <i class="fas fa-cog"></i>
                                    <h4>Custom Engineering</h4>
                                    <p>Tailored designs based on your specific requirements and load specifications</p>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-shield-alt"></i>
                                    <h4>Safety First</h4>
                                    <p>Built-in safety features and compliance with industry standards</p>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-tools"></i>
                                    <h4>Superior Materials</h4>
                                    <p>High-grade steel and premium components for lasting durability</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="specs-sidebar">
                            <h3>Technical Specifications</h3>
                            <ul class="specs-list">
                                <li><strong>Load Capacity:</strong> Up to 10,000 kg</li>
                                <li><strong>Platform Types:</strong> Fixed, Mobile, Adjustable</li>
                                <li><strong>Materials:</strong> Industrial-grade Steel</li>
                                <li><strong>Surface Options:</strong> Anti-slip, Grated</li>
                                <li><strong>Safety Features:</strong> Railings, Gates</li>
                                <li><strong>Customization:</strong> Size, Height, Access</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Detailed Features -->
            <div class="features-section" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-drafting-compass"></i>
                            </div>
                            <h3>Custom Design Process</h3>
                            <ul class="feature-list">
                                <li>Detailed requirement analysis</li>
                                <li>3D modeling and visualization</li>
                                <li>Load calculation and testing</li>
                                <li>Material optimization</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-industry"></i>
                            </div>
                            <h3>Manufacturing Excellence</h3>
                            <ul class="feature-list">
                                <li>Precision welding techniques</li>
                                <li>Quality control at every stage</li>
                                <li>Surface treatment and finishing</li>
                                <li>Rigorous testing protocols</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Applications -->
            <div class="applications-section" data-aos="fade-up">
                <div class="section-header">
                    <h2>Industry Applications</h2>
                    <div class="section-line"></div>
                </div>
                <div class="application-grid">
                    <div class="application-item">
                        <img src="{{ asset('images/manufacturing.jpg') }}" alt="Manufacturing">
                        <h4>Manufacturing</h4>
                        <p>Equipment access and maintenance platforms</p>
                    </div>
                    <div class="application-item">
                        <img src="{{ asset('images/warehouse.jpg') }}" alt="Warehouse">
                        <h4>Warehouse</h4>
                        <p>Storage and loading platforms</p>
                    </div>
                    <div class="application-item">
                        <img src="{{ asset('images/construction.jpg') }}" alt="Construction">
                        <h4>Construction</h4>
                        <p>Temporary and permanent work platforms</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .platform-fabrication {
        background: #f8f9fa;
    }

    .hero-section {
        background: linear-gradient(135deg, #1B3664 0%, #2A4A8C 100%);
        padding: 100px 0;
        color: white;
        margin-bottom: 80px;
    }

    .service-badge {
        display: inline-block;
        background: rgba(255, 255, 255, 0.1);
        padding: 8px 20px;
        border-radius: 50px;
        font-size: 0.9rem;
        font-weight: 500;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .hero-title {
        font-family: 'Playfair Display', serif;
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 20px;
        line-height: 1.2;
    }

    .hero-description {
        font-size: 1.2rem;
        opacity: 0.9;
        margin-bottom: 30px;
        line-height: 1.6;
    }

    .hero-image img {
        border-radius: 20px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }

    .content-section {
        padding: 60px 0;
    }

    .section-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .section-header h2 {
        font-family: 'Playfair Display', serif;
        color: #1B3664;
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .section-line {
        width: 80px;
        height: 3px;
        background: linear-gradient(90deg, #1B3664, #2A4A8C);
        margin: 0 auto;
    }

    .lead-text {
        font-size: 1.2rem;
        color: #4A5568;
        line-height: 1.8;
        margin-bottom: 40px;
    }

    .key-features {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }

    .feature-item {
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }

    .feature-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    }

    .feature-item i {
        font-size: 2rem;
        color: #1B3664;
        margin-bottom: 20px;
    }

    .feature-item h4 {
        color: #1B3664;
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 15px;
    }

    .specs-sidebar {
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    }

    .specs-sidebar h3 {
        color: #1B3664;
        font-size: 1.4rem;
        font-weight: 600;
        margin-bottom: 20px;
    }

    .specs-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .specs-list li {
        padding: 12px 0;
        border-bottom: 1px solid #edf2f7;
        color: #4A5568;
    }

    .specs-list li:last-child {
        border-bottom: none;
    }

    .specs-list strong {
        color: #1B3664;
        font-weight: 600;
    }

    .feature-card {
        background: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        margin-bottom: 30px;
        transition: all 0.3s ease;
    }

    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    }

    .feature-icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #1B3664 0%, #2A4A8C 100%);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 25px;
    }

    .feature-icon i {
        font-size: 1.8rem;
        color: white;
    }

    .feature-card h3 {
        color: #1B3664;
        font-size: 1.3rem;
        font-weight: 600;
        margin-bottom: 20px;
    }

    .feature-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .feature-list li {
        padding: 8px 0;
        color: #4A5568;
        position: relative;
        padding-left: 25px;
    }

    .feature-list li:before {
        content: '✓';
        color: #1B3664;
        position: absolute;
        left: 0;
        font-weight: bold;
    }

    .application-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }

    .application-item {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }

    .application-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    }

    .application-item img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .application-item h4 {
        color: #1B3664;
        font-size: 1.2rem;
        font-weight: 600;
        margin: 20px;
        margin-bottom: 10px;
    }

    .application-item p {
        color: #4A5568;
        margin: 0 20px 20px;
    }

    @media (max-width: 768px) {
        .hero-section {
            padding: 60px 0;
        }

        .hero-title {
            font-size: 2.5rem;
        }

        .hero-description {
            font-size: 1.1rem;
        }

        .section-header h2 {
            font-size: 2rem;
        }

        .feature-card {
            padding: 30px;
        }
    }
</style>
@endsection 
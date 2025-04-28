@extends('layouts.frontend')

@section('title', 'Our Services')

@section('content')
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="text-center">Our Services</h1>
            <p class="text-center lead">Explore our comprehensive range of services</p>
        </div>
    </div>

        <div class="row">
            @foreach($services as $service)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if($service->image)
                        <img src="{{ asset($service->image) }}" class="card-img-top" alt="{{ $service->title }}" style="height: 250px; object-fit: cover;">
                    @else
                        <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 250px;">
                            <i class="fas fa-image text-muted" style="font-size: 3rem;"></i>
                        </div>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $service->title }}</h5>
                        <p class="card-text">{{ Str::limit($service->description, 150) }}</p>
                        <a href="{{ route('frontend.services.show', $service->id) }}" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

<!-- Related Services Section -->
<section class="related-services">
    <div class="services-bg-pattern"></div>
    <div class="container position-relative">
        <div class="section-header text-center">
            <span class="badge-custom">Our Expertise</span>
            <h2 class="section-title">Related Services</h2>
            <div class="section-description">
                Discover our comprehensive range of industrial solutions
            </div>
        </div>

        <div class="services-container">
            <!-- Jib Crane Service -->
            <div class="service-box" data-aos="fade-up" data-aos-delay="100">
                <div class="service-content">
                    <div class="service-icon">
                        <div class="icon-bg">
                            <i class="fas fa-crane"></i>
                </div>
            </div>
                    <h3 class="service-title">Jib Crane Solutions</h3>
                    <div class="service-description">
                        Expert fabrication and professional installation of jib cranes for your industrial needs.
                </div>
                    <div class="service-features">
                        <span class="feature-tag">Custom Design</span>
                        <span class="feature-tag">Installation</span>
                        <span class="feature-tag">Maintenance</span>
            </div>
                    <a href="{{ route('services.jib-crane') }}" class="btn-explore">
                        <span>Explore Service</span>
                        <svg class="arrow-icon" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Overhead Crane Service -->
            <div class="service-box" data-aos="fade-up" data-aos-delay="200">
                <div class="service-content">
                    <div class="service-icon">
                        <div class="icon-bg">
                            <i class="fas fa-industry"></i>
        </div>
    </div>
                    <h3 class="service-title">Overhead Crane Systems</h3>
                    <div class="service-description">
                        Specialized fabrication of overhead cranes designed for efficiency and reliability.
            </div>
                    <div class="service-features">
                        <span class="feature-tag">Industrial</span>
                        <span class="feature-tag">Heavy Duty</span>
                        <span class="feature-tag">Precision</span>
        </div>
                    <a href="{{ route('services.overhead-crane') }}" class="btn-explore">
                        <span>Explore Service</span>
                        <svg class="arrow-icon" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Crane Hoist Service -->
            <div class="service-box" data-aos="fade-up" data-aos-delay="300">
                <div class="service-content">
                    <div class="service-icon">
                        <div class="icon-bg">
                            <i class="fas fa-tools"></i>
                </div>
            </div>
                    <h3 class="service-title">Hoist Fitting Excellence</h3>
                    <div class="service-description">
                        Professional fitting and maintenance services for all types of crane hoists.
                </div>
                    <div class="service-features">
                        <span class="feature-tag">Expert Fitting</span>
                        <span class="feature-tag">Service</span>
                        <span class="feature-tag">Support</span>
            </div>
                    <a href="{{ route('services.crane-hoist') }}" class="btn-explore">
                        <span>Explore Service</span>
                        <svg class="arrow-icon" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <style>
        .related-services {
            position: relative;
            padding: 100px 0;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            overflow: hidden;
        }

        .services-bg-pattern {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: radial-gradient(#1B3664 1px, transparent 1px);
            background-size: 50px 50px;
            opacity: 0.05;
        }

        .section-header {
            position: relative;
            z-index: 1;
            margin-bottom: 60px;
        }

        .badge-custom {
            display: inline-block;
            padding: 8px 20px;
            background: rgba(27, 54, 100, 0.1);
            color: #1B3664;
            border-radius: 50px;
            font-family: 'Montserrat', sans-serif;
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 20px;
        }

        .section-title {
            color: #1B3664;
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .section-description {
            color: #4A5568;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto;
        }

        .services-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            position: relative;
            z-index: 1;
        }

        .service-box {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            position: relative;
        }

        .service-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .service-content {
            padding: 40px;
            position: relative;
        }

        .service-icon {
            margin-bottom: 30px;
        }

        .icon-bg {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #1B3664 0%, #2A4A8C 100%);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            transform: rotate(45deg);
            margin-bottom: 25px;
            transition: all 0.3s ease;
        }

        .icon-bg i {
            color: white;
            font-size: 2rem;
            transform: rotate(-45deg);
        }

        .service-box:hover .icon-bg {
            transform: rotate(90deg);
        }

        .service-title {
            color: #1B3664;
            font-family: 'Montserrat', sans-serif;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .service-description {
            color: #4A5568;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        .service-features {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 30px;
        }

        .feature-tag {
            background: rgba(27, 54, 100, 0.1);
            color: #1B3664;
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
        }

        .btn-explore {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 12px 25px;
            background: #1B3664;
            color: white;
            border-radius: 50px;
            text-decoration: none;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-explore:hover {
            background: #2A4A8C;
            transform: translateX(5px);
        }

        .arrow-icon {
            width: 20px;
            height: 20px;
            stroke: currentColor;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
            fill: none;
            transition: transform 0.3s ease;
        }

        .btn-explore:hover .arrow-icon {
            transform: translateX(5px);
        }

        @media (max-width: 768px) {
            .related-services {
                padding: 60px 0;
            }

            .section-title {
                font-size: 2.2rem;
            }

            .section-description {
                font-size: 1.1rem;
            }

            .services-container {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .service-content {
                padding: 30px;
            }

            .service-title {
                font-size: 1.3rem;
            }
        }
    </style>
</section>
@endsection 
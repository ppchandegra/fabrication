@extends('layouts.app')

@section('content')
<!-- Service Hero Section -->
<section class="service-hero py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6" data-aos="fade-right">
                <h1>{{ $service->name }}</h1>
                <p class="lead">{{ $service->excerpt }}</p>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <img src="{{ asset($service->image) }}" alt="{{ $service->name }}" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>

<!-- Service Details -->
<section class="service-details py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8" data-aos="fade-up">
                <div class="service-content">
                    {!! $service->description !!}
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-left">
                <div class="service-sidebar">
                    <div class="card">
                        <div class="card-body">
                            <h3>Service Features</h3>
                            <ul class="list-unstyled">
                                @foreach($service->features as $feature)
                                <li class="mb-2">
                                    <i class="fas fa-check text-primary"></i> {{ $feature }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    
                    <div class="card mt-4">
                        <div class="card-body">
                            <h3>Get a Quote</h3>
                            <p>Interested in this service? Contact us for a free quote.</p>
                            <a href="{{ route('contact') }}" class="btn btn-primary btn-block">Request Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Services -->
<section class="related-services py-5">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-12">
                <h2 data-aos="fade-up">Related Services</h2>
            </div>
        </div>
        <div class="row">
            @foreach($relatedServices as $relatedService)
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="service-card">
                    <img src="{{ asset($relatedService->image) }}" alt="{{ $relatedService->name }}" class="img-fluid">
                    <div class="service-info">
                        <h3>{{ $relatedService->name }}</h3>
                        <p>{{ $relatedService->excerpt }}</p>
                        <a href="{{ route('services.show', $relatedService->slug) }}" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section py-5 bg-primary text-white">
    <div class="container text-center">
        <h2 data-aos="fade-up">Ready to Get Started?</h2>
        <p data-aos="fade-up" data-aos-delay="100">Contact us today to discuss your project</p>
        <a href="{{ route('contact') }}" class="btn btn-light" data-aos="fade-up" data-aos-delay="200">Contact Us</a>
    </div>
</section>
@endsection 
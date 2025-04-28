@extends('layouts.frontend')

@section('title', 'Contact Us')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600&family=Lora:wght@400;500;600&family=Source+Sans+Pro:wght@300;400;600&display=swap" rel="stylesheet">

<style>
body {
    font-family: 'Source Sans Pro', sans-serif;
    color: #2D3748;
    line-height: 1.6;
}

h1, h2, h3 {
    font-family: 'Playfair Display', serif;
    font-weight: 600;
    color: #1B3664;
}

h4, h5, h6 {
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    color: #1B3664;
}

.display-4 {
    font-family: 'Playfair Display', serif;
    font-weight: 700;
    font-size: 3rem;
    letter-spacing: -0.02em;
    line-height: 1.2;
    margin-bottom: 1rem;
}

.lead {
    font-family: 'Lora', serif;
    font-weight: 400;
    font-size: 1.25rem;
    letter-spacing: 0.01em;
    line-height: 1.8;
    color: #4A5568;
}

.card-title {
    font-family: 'Montserrat', sans-serif;
    font-size: 2rem;
    font-weight: 600;
    margin-bottom: 1.5rem;
    color: #1B3664;
    letter-spacing: -0.01em;
}

.section-title {
    font-family: 'Playfair Display', serif;
    font-size: 1.75rem;
    font-weight: 600;
    color: #1B3664;
    margin-bottom: 1.5rem;
    position: relative;
    padding-bottom: 0.75rem;
}

.section-title::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 60px;
    height: 3px;
    background: #1B3664;
}

.highlight-item h6 {
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    font-size: 1.1rem;
    color: #1B3664;
    letter-spacing: 0.02em;
    margin-bottom: 0.75rem;
}

.highlight-item p {
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 1rem;
    line-height: 1.7;
    color: #4A5568;
    font-weight: 400;
}

.service-card h6 {
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    font-size: 1.1rem;
    margin: 0.75rem 0;
    color: #1B3664;
    letter-spacing: 0.01em;
}

.service-card p {
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 0.95rem;
    color: #4A5568;
    line-height: 1.6;
}

.contact-info {
    font-family: 'Source Sans Pro', sans-serif;
}

.contact-info p {
    font-size: 1.05rem;
    color: #2D3748;
    margin-bottom: 1rem;
    line-height: 1.6;
}

.contact-info i {
    color: #1B3664;
    width: 24px;
    text-align: center;
    margin-right: 10px;
}

.contact-info a {
    color: #1B3664;
    font-weight: 500;
    transition: all 0.3s ease;
    text-decoration: none;
    border-bottom: 1px solid transparent;
}

.contact-info a:hover {
    color: #C41230;
    border-bottom-color: #C41230;
}

.form-label {
    font-family: 'Montserrat', sans-serif;
    font-weight: 500;
    font-size: 0.95rem;
    color: #2D3748;
    margin-bottom: 0.5rem;
    letter-spacing: 0.02em;
}

.form-control {
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 1rem;
    padding: 0.875rem 1rem;
    border-radius: 8px;
    border: 1px solid #E2E8F0;
    transition: all 0.3s ease;
}

.form-control:focus {
    border-color: #1B3664;
    box-shadow: 0 0 0 0.2rem rgba(27, 54, 100, 0.15);
}

.form-check-label {
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 0.95rem;
    color: #4A5568;
}

.btn-primary {
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    letter-spacing: 0.05em;
    padding: 0.875rem 2.5rem;
    text-transform: uppercase;
    font-size: 0.9rem;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.btn-outline-primary {
    font-family: 'Montserrat', sans-serif;
    font-weight: 500;
    letter-spacing: 0.03em;
    padding: 0.75rem 1.5rem;
    font-size: 0.9rem;
    border-radius: 8px;
}

.alert {
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 1rem;
    border-radius: 8px;
    padding: 1rem 1.25rem;
}

.invalid-feedback {
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 0.875rem;
    color: #C41230;
    margin-top: 0.375rem;
}

.phone-numbers a {
    color: #1B3664;
    font-weight: 500;
    transition: all 0.3s ease;
    display: inline-block;
}

.phone-numbers a:hover {
    color: #C41230;
    transform: translateY(-2px);
}

@media (max-width: 768px) {
    .display-4 {
        font-size: 2.25rem;
    }
    .lead {
        font-size: 1.1rem;
    }
    .card-title {
        font-size: 1.75rem;
    }
    .section-title {
        font-size: 1.5rem;
    }
    .highlight-item h6,
    .service-card h6 {
        font-size: 1rem;
    }
}
</style>

<div class="container py-5">
    <div class="row">
        <div class="col-12 text-center mb-5">
            <h1 class="display-4 mb-3">Get in Touch</h1>
            <p class="lead">We're here to help bring your metal fabrication projects to life</p>
        </div>
    </div>

    <div class="row">
        <!-- Contact Form -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-lg">
                <div class="card-body p-4">
                    <h3 class="card-title mb-4">Send us a Message</h3>
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form action="{{ route('frontend.contact.store') }}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            <div class="invalid-feedback">
                                Please enter your full name.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <div class="invalid-feedback">
                                Please enter a valid email address.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="mobile" class="form-label">Mobile Number <span class="text-danger">*</span></label>
                            <input type="tel" class="form-control" id="mobile" name="mobile" required>
                            <div class="invalid-feedback">
                                Please enter your mobile number.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" id="address" name="address" rows="2"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                            <div class="invalid-feedback">
                                Please enter your message.
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="privacy_policy" name="privacy_policy" value="1" required>
                                <label class="form-check-label" for="privacy_policy">
                                    I agree to the privacy policy <span class="text-danger">*</span>
                                </label>
                                <div class="invalid-feedback">
                                    You must agree to the privacy policy.
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Company Details -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-lg h-100">
                <div class="card-body p-4">
                    <h3 class="card-title mb-4">Jalundra Fabrication</h3>
                    
                    <div class="mb-4">
                        <h5 class="mb-3">Contact Information</h5>
                        <p class="mb-2">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            Near Umiya Industrial Zone - 2, Ribda, Rajkot, Gujarat - 360311
                        </p>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fas fa-phone me-2"></i>
                            <div class="phone-numbers">
                                <a href="tel:+918320006307" class="text-decoration-none me-3">+91 83200 06307</a>
                                <a href="tel:+919265899004" class="text-decoration-none">+91 92658 99004</a>
                            </div>
                        </div>
                        <p class="mb-2">
                            <i class="fas fa-envelope me-2"></i>
                            <a href="mailto:jalundrafebrication@gmail.com" class="text-decoration-none">jalundrafebrication@gmail.com</a>
                        </p>
                        <a href="https://maps.google.com/?q=Near+Umiya+Industrial+Zone+-+2,+Ribda,+Rajkot,+Gujarat+-+360311" 
                           target="_blank" 
                           class="btn btn-outline-primary mt-2">
                            <i class="fas fa-directions me-2"></i>Get Directions
                        </a>
                    </div>

                    <div class="mb-4">
                        <h5 class="mb-3 text-primary">Why Choose Jalundra Fabrication?</h5>
                        <div class="service-highlights">
                            <div class="highlight-item mb-3">
                                <h6 class="mb-2"><i class="fas fa-industry me-2 text-primary"></i>Expert Metal Fabrication</h6>
                                <p>Specialized in custom metal fabrication, sheet metal work, and precision engineering solutions for industrial applications.</p>
                            </div>
                            
                            <div class="highlight-item mb-3">
                                <h6 class="mb-2"><i class="fas fa-tools me-2 text-primary"></i>Advanced Equipment</h6>
                                <p>State-of-the-art machinery and tools for precise cutting, bending, and welding operations.</p>
                            </div>

                            <div class="highlight-item mb-3">
                                <h6 class="mb-2"><i class="fas fa-certificate me-2 text-primary"></i>Quality Assurance</h6>
                                <p>Rigorous quality control processes ensuring each project meets the highest industry standards.</p>
                            </div>

                            <div class="highlight-item mb-3">
                                <h6 class="mb-2"><i class="fas fa-clock me-2 text-primary"></i>Timely Delivery</h6>
                                <p>Committed to meeting project deadlines without compromising on quality.</p>
                            </div>

                            <div class="highlight-item">
                                <h6 class="mb-2"><i class="fas fa-handshake me-2 text-primary"></i>Customer Satisfaction</h6>
                                <p>Dedicated to providing exceptional service and building long-term relationships with our clients.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h5 class="mb-3 text-primary">Our Services</h5>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="service-card p-3 bg-light rounded">
                                    <i class="fas fa-cog text-primary mb-2"></i>
                                    <h6>Custom Fabrication</h6>
                                    <p class="small mb-0">Tailored metal fabrication solutions for your specific needs.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-card p-3 bg-light rounded">
                                    <i class="fas fa-layer-group text-primary mb-2"></i>
                                    <h6>Sheet Metal Work</h6>
                                    <p class="small mb-0">Precision sheet metal fabrication and forming services.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-card p-3 bg-light rounded">
                                    <i class="fas fa-fire text-primary mb-2"></i>
                                    <h6>Welding Services</h6>
                                    <p class="small mb-0">Expert welding for various metals and applications.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-card p-3 bg-light rounded">
                                    <i class="fas fa-drafting-compass text-primary mb-2"></i>
                                    <h6>Design & Engineering</h6>
                                    <p class="small mb-0">Technical design and engineering support.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <style>
                        .highlight-item {
                            padding: 15px;
                            background: #f8f9fa;
                            border-radius: 8px;
                            transition: all 0.3s ease;
                        }
                        .highlight-item:hover {
                            transform: translateY(-3px);
                            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
                        }
                        .service-card {
                            transition: all 0.3s ease;
                            border: 1px solid rgba(0,0,0,0.1);
                        }
                        .service-card:hover {
                            transform: translateY(-3px);
                            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
                        }
                        .service-card i {
                            font-size: 24px;
                        }
                        .text-primary {
                            color: #1B3664 !important;
                        }
                    </style>

                    <div class="mt-4">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <img src="{{ asset('images/workshop1.jpg') }}" alt="Jalundra Fabrication Workshop" class="img-fluid rounded shadow-sm hover-zoom">
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('images/workshop2.jpg') }}" alt="Jalundra Fabrication Equipment" class="img-fluid rounded shadow-sm hover-zoom">
                            </div>
                        </div>
                    </div>

                    <style>
                        .hover-zoom {
                            transition: transform 0.3s ease;
                        }
                        .hover-zoom:hover {
                            transform: scale(1.05);
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        border: none;
        border-radius: 15px;
        transition: transform 0.3s ease;
    }
    .card:hover {
        transform: translateY(-5px);
    }
    .form-control {
        border-radius: 8px;
        padding: 10px;
    }
    .form-control:focus {
        box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
    }
    .btn-primary {
        padding: 10px 25px;
        border-radius: 8px;
        font-weight: 500;
    }
    .text-danger {
        color: #dc3545;
    }
</style>

<script>
// Bootstrap form validation
(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})()
</script>
@endsection 
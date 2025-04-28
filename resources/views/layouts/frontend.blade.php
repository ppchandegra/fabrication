<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Jalundra Fabrication</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #1B3664;
            --secondary-color: #C41230;
        }

        .top-bar {
            background: linear-gradient(135deg, #1a237e 0%, #0d47a1 100%);
            padding: 12px 0;
            color: white;
            font-size: 14px;
        }

        .top-info {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .info-item {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .info-item i {
            color: rgba(255, 255, 255, 0.8);
            font-size: 14px;
        }

        .info-item a {
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .info-item a:hover {
            color: rgba(255, 255, 255, 0.8);
        }

        .info-divider {
            width: 1px;
            height: 20px;
            background: rgba(255, 255, 255, 0.2);
        }

        .top-right {
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }

        .estimate-btn {
            background: linear-gradient(45deg, #C41230, #ff1744);
            color: white;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 50px;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            font-weight: 500;
            font-size: 15px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 15px rgba(196, 18, 48, 0.3);
            position: relative;
            overflow: hidden;
        }

        .estimate-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: 0.5s;
        }

        .estimate-btn:hover {
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(196, 18, 48, 0.4);
        }

        .estimate-btn:hover::before {
            left: 100%;
        }

        .estimate-btn i {
            font-size: 18px;
            transition: transform 0.3s ease;
        }

        .estimate-btn:hover i {
            transform: rotate(15deg);
        }

        .main-header {
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar {
            padding: 15px 0;
        }

        .logo-img {
            height: 60px;
            width: auto;
            transition: transform 0.3s;
        }

        .logo-img:hover {
            transform: scale(1.05);
        }

        .navbar-nav {
            gap: 10px;
        }

        .nav-link {
            color: #333 !important;
            font-weight: 500;
            padding: 10px 20px !important;
            border-radius: 5px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .nav-link i {
            font-size: 16px;
        }

        .nav-link:hover, .nav-link.active {
            color: #0d47a1 !important;
            background: rgba(13, 71, 161, 0.1);
        }

        .dropdown-menu {
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border-radius: 8px;
            padding: 10px;
            min-width: 220px;
        }

        .dropdown-item {
            padding: 10px 15px;
            border-radius: 5px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .dropdown-item i {
            font-size: 14px;
            color: #0d47a1;
        }

        .dropdown-item:hover {
            background: rgba(13, 71, 161, 0.1);
            color: #0d47a1;
            transform: translateX(5px);
        }

        .footer {
            background: #1a237e !important;
        }

        .footer h5 {
            color: white;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .footer ul li {
            margin-bottom: 10px;
        }

        .footer a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: all 0.3s;
        }

        .footer a:hover {
            color: white;
            padding-left: 5px;
        }

        .footer hr {
            border-color: rgba(255,255,255,0.1);
        }

        @media (max-width: 992px) {
            .top-info {
                justify-content: center;
                text-align: center;
                margin-bottom: 10px;
            }

            .top-right {
                justify-content: center;
            }

            .info-divider {
                display: none;
            }

            .info-item {
                width: 100%;
                justify-content: center;
                margin-bottom: 5px;
            }

            .navbar-collapse {
                background: white;
                padding: 15px;
                border-radius: 8px;
                box-shadow: 0 5px 15px rgba(0,0,0,0.1);
                margin-top: 15px;
            }

            .nav-link {
                padding: 12px 20px !important;
            }
        }

        @media (max-width: 576px) {
            .top-right {
                justify-content: center;
            }

            .estimate-btn {
                width: 100%;
                justify-content: center;
                padding: 12px 20px;
                font-size: 14px;
            }
        }

        .footer .contact-info li {
            display: flex;
            align-items: start;
        }

        .footer .contact-info i {
            margin-top: 4px;
            color: rgba(255,255,255,0.7);
            width: 20px;
        }

        .footer .contact-info a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: all 0.3s;
        }

        .footer .contact-info a:hover {
            color: white;
            padding-left: 0;
            text-decoration: underline;
        }

        /* Modern 3D Footer Styles */
        .footer-new {
            background: linear-gradient(135deg, #1a237e 0%, #0d47a1 100%);
            color: rgba(255, 255, 255, 0.8);
            position: relative;
            font-size: 15px;
            line-height: 1.8;
            position: relative;
            overflow: hidden;
        }

        .footer-new::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 100%;
            background: linear-gradient(45deg, rgba(255,255,255,0.1) 0%, transparent 100%);
            transform: skewY(-3deg);
            transform-origin: top right;
        }

        .footer-top {
            padding: 80px 0 50px;
            position: relative;
            perspective: 1000px;
        }

        .footer-widget {
            position: relative;
            transform-style: preserve-3d;
            transition: transform 0.3s ease;
        }

        .footer-widget:hover {
            transform: translateZ(20px);
        }

        .footer-logo {
            position: relative;
            perspective: 1000px;
        }

        .footer-logo img {
            max-height: 60px;
            filter: brightness(0) invert(1);
            opacity: 0.9;
            transform-style: preserve-3d;
            transition: all 0.3s ease;
        }

        .footer-logo:hover img {
            transform: translateZ(30px) rotateY(10deg);
        }

        .footer-about {
            margin: 20px 0;
            padding: 15px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            backdrop-filter: blur(10px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            transform: translateZ(10px);
            transition: all 0.3s ease;
        }

        .footer-about:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateZ(20px);
        }

        .footer-social {
            display: flex;
            gap: 15px;
            margin-top: 25px;
            perspective: 1000px;
        }

        .social-btn {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            color: white;
            font-size: 16px;
            transition: all 0.3s ease;
            transform-style: preserve-3d;
            position: relative;
        }

        .social-btn::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            transform: translateZ(-10px);
            filter: blur(5px);
        }

        .social-btn:hover {
            background: white;
            color: #0d47a1;
            transform: translateZ(20px) scale(1.1);
        }

        .footer-title {
            color: white;
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }

        .footer-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, #fff, transparent);
            border-radius: 3px;
        }

        .footer-links ul li {
            margin-bottom: 12px;
            transform-style: preserve-3d;
            perspective: 1000px;
        }

        .footer-links ul li a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            padding: 8px 15px;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(5px);
        }

        .footer-links ul li a i {
            font-size: 12px;
            margin-right: 10px;
            transition: all 0.3s ease;
        }

        .footer-links ul li a:hover {
            color: white;
            background: rgba(255, 255, 255, 0.1);
            transform: translateZ(15px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .footer-links ul li a:hover i {
            transform: translateX(5px) translateZ(20px);
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 25px;
            perspective: 1000px;
        }

        .contact-item {
            display: flex;
            gap: 15px;
            padding: 15px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            transform-style: preserve-3d;
        }

        .contact-item:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateZ(20px);
        }

        .icon-box {
            width: 45px;
            height: 45px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: all 0.3s ease;
            transform-style: preserve-3d;
        }

        .contact-item:hover .icon-box {
            transform: translateZ(25px) rotateY(15deg);
            background: white;
        }

        .contact-item:hover .icon-box i {
            color: #0d47a1;
        }

        .icon-box i {
            color: white;
            font-size: 18px;
            transition: all 0.3s ease;
        }

        .contact-item .content {
            transform-style: preserve-3d;
        }

        .contact-item .content h4 {
            color: white;
            font-size: 18px;
            margin-bottom: 5px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .contact-item:hover .content h4 {
            transform: translateZ(15px);
        }

        .contact-item .content a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .contact-item .content a:hover {
            color: white;
            transform: translateZ(10px);
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }

        .footer-bottom {
            background: rgba(0, 0, 0, 0.3);
            padding: 20px 0;
            font-size: 14px;
            position: relative;
            backdrop-filter: blur(10px);
        }

        .copyright {
            color: rgba(255, 255, 255, 0.7);
            transform-style: preserve-3d;
            transition: all 0.3s ease;
        }

        .copyright:hover {
            transform: translateZ(10px);
        }

        .copyright strong {
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }

        .footer-bottom-links {
            display: flex;
            gap: 20px;
            justify-content: flex-end;
            perspective: 1000px;
        }

        .footer-bottom-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s ease;
            padding: 5px 15px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.05);
        }

        .footer-bottom-links a:hover {
            color: white;
            background: rgba(255, 255, 255, 0.1);
            transform: translateZ(10px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        @media (max-width: 768px) {
            .footer-top {
                padding: 50px 0 20px;
            }

            .footer-widget {
                text-align: center;
                margin-bottom: 30px;
            }

            .footer-title::after {
                left: 50%;
                transform: translateX(-50%);
            }

            .footer-social {
                justify-content: center;
            }

            .contact-item {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .footer-bottom {
                text-align: center;
            }

            .footer-bottom-links {
                justify-content: center;
                margin-top: 15px;
                flex-wrap: wrap;
            }
        }
    </style>
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-7">
                    <div class="top-info">
                        <div class="info-item">
                            <i class="fas fa-phone-alt"></i>
                            <a href="tel:+918320006307">+91 83200 06307</a>
                        </div>
                        <div class="info-divider"></div>
                        <div class="info-item">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:jalundrafebrication@gmail.com">jalundrafebrication@gmail.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="top-right">
                        <a href="{{ route('frontend.contact') }}" class="estimate-btn">
                            <i class="fas fa-calculator"></i>
                            Request for Estimate
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header class="main-header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ route('frontend.home') }}">
                    <img src="{{ asset('storage/logo/Jalundra_Febrication-log.png') }}" alt="Jalundra Fabrication" class="logo-img">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('frontend.home') ? 'active' : '' }}" href="{{ route('frontend.home') }}">
                                <i class="fas fa-home"></i> Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('frontend.about') ? 'active' : '' }}" href="{{ route('frontend.about') }}">
                                <i class="fas fa-info-circle"></i> About Us
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="fas fa-cogs"></i> Services
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($services as $service)
                                <li>
                                    <a class="dropdown-item" href="{{ route('frontend.services.show', $service->id) }}">
                                        <i class="fas fa-check"></i> {{ $service->title }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('frontend.gallery') ? 'active' : '' }}" href="{{ route('frontend.gallery') }}">
                                <i class="fas fa-images"></i> Gallery
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('frontend.contact') ? 'active' : '' }}" href="{{ route('frontend.contact') }}">
                                <i class="fas fa-envelope"></i> Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer-new">
        <!-- Footer Top Section -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="footer-widget">
                            <div class="footer-logo mb-4">
                                <img src="{{ asset('storage/logo/Jalundra_Febrication-log.png') }}" alt="Jalundra Fabrication" class="img-fluid">
                            </div>
                            <p class="footer-about">
                                Jalundra Fabrication is your trusted partner in precision engineering and custom metal fabrication. We deliver excellence through innovation and expertise.
                            </p>
                            <div class="footer-social">
                                <a href="https://www.facebook.com/share/1AaN7BBq7Q/" class="social-btn" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/jalundrafabrication?igsh=MXJlZnhpanFxam5lZg==" class="social-btn" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="social-btn"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="social-btn"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="footer-widget ps-lg-5">
                            <h3 class="footer-title">Quick Links</h3>
                            <div class="footer-links">
                                <div class="row">
                                    <div class="col-6">
                                        <ul class="list-unstyled">
                                            <li><a href="{{ route('frontend.home') }}"><i class="fas fa-chevron-right"></i>Home</a></li>
                                            <li><a href="{{ route('frontend.services') }}"><i class="fas fa-chevron-right"></i>Services</a></li>
                                            <li><a href="{{ route('frontend.gallery') }}"><i class="fas fa-chevron-right"></i>Gallery</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <ul class="list-unstyled">
                                            <li><a href="{{ route('frontend.contact') }}"><i class="fas fa-chevron-right"></i>Contact</a></li>
                                            <li><a href="#about"><i class="fas fa-chevron-right"></i>About Us</a></li>
                                            <li><a href="#projects"><i class="fas fa-chevron-right"></i>Projects</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="footer-widget">
                            <h3 class="footer-title">Contact Info</h3>
                            <div class="contact-info">
                                <div class="contact-item">
                                    <div class="icon-box">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="content">
                                        <h4>Call Us</h4>
                                        <p>
                                            <a href="tel:+918320006307">+91 83200 06307</a><br>
                                            <a href="tel:+919265899004">+91 92658 99004</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <div class="icon-box">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <h4>Email Us</h4>
                                        <p><a href="mailto:jalundrafebrication@gmail.com">jalundrafebrication@gmail.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Section -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="copyright mb-0">
                            © {{ date('Y') }} <strong>Jalundra Fabrication</strong>. All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <div class="footer-bottom-links">
                            <a href="#">Privacy Policy</a>
                            <a href="#">Terms & Conditions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 
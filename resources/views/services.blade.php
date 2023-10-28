@extends('layouts.app')
@section('title', 'Services')
@section('site_desc', 'Kreative Realty Co is a leading, full-service real estate company dedicated to empowering individuals with innovative and creative programs aimed at increasing homeownership and enhancing property values. Our team comprises licensed professionals, including experienced real estate agents and skilled loan officers, who are well-equipped to provide the guidance and resources needed for success in the real estate market.')
@section('content')
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo -->
            <div class="logo-wrapper">
                <a class="logo" href="/"> <img
                        src="https://res.cloudinary.com/kreative-realty/image/upload/v1697911625/kreative/WhatsApp_Image_2023-10-14_at_23.39.09_2337615f_ae2xdo.jpg"
                        class="logo-img" alt=""> </a>
                {{-- <a class="logo" href="/"> <h2>THE CAPPA <span>Luxury Hotel</span></h2> </a> --}}
            </div>
            <!-- Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span
                    class="navbar-toggler-icon"><i class="ti-menu"></i></span> </button>
            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="/">Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="javascript:;" role="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Programs <i
                                class="ti-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="/programs/reimagine" class="dropdown-item"><span>Reimagine</span></a></li>
                            <li><a href="/programs/60-lease" class="dropdown-item"><span>60 Day Lease Option</span></a></li>
                            <li><a href="/programs/smart-steps" class="dropdown-item"><span>Smart Steps</span></a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="/homeownership-resorces">Homeownership Resources</a></li>
                    <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact-us">Contact Us</a></li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="javascript:;" role="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">More <i
                                class="ti-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="/testimonials" class="dropdown-item"><span>Testimonials</span></a></li>
                            <li><a href="/faqs" class="dropdown-item"><span>F.A.Qs</span></a></li>
                            <li><a href="/legal" class="dropdown-item"><span>Legal</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Slider -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4"
        data-background="https://res.cloudinary.com/kreative-realty/image/upload/v1698415097/kreative/chuttersnap-KWGhHl9gyNA-unsplash_luwhou.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90">
                    <h5>Kreative Realty Co</h5>
                    <h1>Our Services</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="facilties section-padding " >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        Kreative Realty Co offers comprehensive real estate solutions tailored to clients' unique needs.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <h5>3D Rendering of Renovations and Virtual Interior Design (Provided through Reimagine Program)</h5>
                        <p>As part of our Reimagine program, we offer 3D rendering services to help clients visualize and plan renovations. Our virtual interior design and 3d rendering services assist in creating a vision for your property transformation. These tools help you make informed decisions about your investment.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <h5>Stop Foreclosure Consulting                        </h5>
                        <p>For homeowners facing the risk of foreclosure, our Stop Foreclosure Consulting service provides expert guidance. We assist distressed homeowners in exploring options to keep their homes or facilitate a successful sale, providing solutions to prevent foreclosure.</p>                       
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <h5>Real Estate Consultant</h5>
                        <p>Our real estate consultants, who are licensed professionals, offer invaluable insights and information to help you make sound real estate decisions. Whether you're buying, selling, or investing, our consultants provide expert guidance tailored to your specific needs.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <h5>Financing Consulting</h5>
                        <p>Our financing consulting service connects you with finance professionals who provide tailored financial resources to assist with your purchase or refinance. You can access a range of loan products, including cash offer products, ITIN (Individual Taxpayer Identification Number) loans, bank statement loans, and loans for foreign nationals. These loan products are designed to support borrowers who may face challenges obtaining funding through traditional channels.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <br>
        <p style="font-size: 1.3em; text-align: center; float: center">
            These services provided by Kreative Realty Co aim to offer a comprehensive suite of solutions to address various aspects of real estate, from visualizing renovations to securing financing and preventing foreclosures. Each service is designed to meet the unique needs of our clients and support them in their real estate journey.
        </p>
    </section>  

    <section class="team section-padding bg-cream">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">Professionals</div>
                    <div class="section-title">Meet The Team</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="item">
                        <div class="img"> 
                            <img src="https://res.cloudinary.com/kreative-realty/image/upload/v1698416870/kreative/icon-6007530_640_rl0cen.webp" alt=""> 
                        </div>
                        <div class="info">
                            <h6>LaShantell Williams </h6>
                            <p>Licensee Jack White Real Estate, MLO-Tristar Finance, Founder of Kreative Realty Co </p>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

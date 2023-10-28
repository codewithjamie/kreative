@extends('layouts.app')
@section('title', 'Frequently Asked Questions')
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
                    <h1>F.A.Qs</h1>
                </div>
            </div>
        </div>
    </div>

    
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {{-- <div class="section-subtitle"><span>F.A.Qs</span></div> --}}
                    <div class="section-title">Frequently Asked Questions</div>
                    <p>Certainly, here are some frequently asked questions (FAQs) about your programs and services at Kreative Realty Co, along with suggested answers;                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="accordion-box clearfix">
                        <li class="accordion block">
                            <div class="acc-btn">What is the Reimagine program, and how can it benefit me?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        The Reimagine program is a unique concept that teaches individuals how to transform distressed properties into valuable assets through real estate investment. It benefits you by providing the knowledge and tools to increase property values, enhance communities, and build wealth through strategic property reimagining.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">How does the 60 Day Lease Option program work, and who is eligible?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">The 60 Day Lease Option program is designed for distressed homeowners. It allows them to offer a 60-day lease option with the potential for qualified buyers to purchase the property. Eligibility criteria include financial qualifications and a willingness to work with motivated buyers.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">What is the Smart Steps program, and who should participate?
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">The Smart Steps program is tailored for first-time homebuyers. It provides a step-by-step guide on navigating the complexities of buying or selling a home. Anyone considering their first real estate transaction or those seeking a clear path to homeownership should participate.</div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">Can you explain the 3D rendering and virtual interior design services provided through the Reimagine program?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Through the Reimagine program, we offer 3D rendering to help you visualize renovation plans and virtual interior design to create a vision for your property transformation. These tools enable you to make informed decisions about your investment and property upgrades.
                                    </div>
                                </div>
                            </div>
                        </li>                        
                        <li class="accordion block">
                            <div class="acc-btn">
                                What does your Stop Foreclosure Consulting service entail?
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        Our Stop Foreclosure Consulting service is designed to assist distressed homeowners who want to keep or sell their homes. We provide expert guidance and explore options to prevent foreclosure or facilitate a successful sale, ensuring homeowners have the support they need during challenging times.
                                    </div>
                                </div>
                            </div>
                        </li>                        
                        <li class="accordion block">
                            <div class="acc-btn">
                                How do your Real Estate Consultants assist clients?
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        Our licensed Real Estate Consultants offer valuable insights and information to help clients make informed real estate decisions. They provide guidance and expertise tailored to your specific needs, whether you're buying, selling, or investing in real estate.
                                    </div>
                                </div>
                            </div>
                        </li>                        
                        <li class="accordion block">
                            <div class="acc-btn">
                                What services are included in Financing Consulting, and who should consider using it?
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                        Financing Consulting connects clients with finance professionals who offer tailored financial resources. You can access a range of loan products, including cash offer products, ITIN loans, bank statement loans, and more. This service is ideal for borrowers who face challenges obtaining funding through traditional channels and need specialized financing solutions.                                    </div>
                                </div>
                            </div>
                        </li>                        
                    </ul>
                </div>
            </div>
        </div>
    </section>

    
@endsection

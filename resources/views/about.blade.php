@extends('layouts.app')
@section('title', 'About Kreative Realty Co')
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
                    <h1>About Us</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <div class="section-subtitle">Kreative Realty Co.</div>
                    <div class="section-title">Empowering Dreams, Enhancing Value</div>
                    <p>Kreative Realty Co is a leading, full-service real estate company dedicated to empowering individuals
                        with innovative and creative programs aimed at increasing homeownership and enhancing property
                        values. Our team comprises licensed professionals, including experienced real estate agents and
                        skilled loan officers, who are well-equipped to provide the guidance and resources needed for
                        success in the real estate market.
                    </p>
                    <p>
                        At Kreative Realty Co, we take pride in offering a diverse range of specialized programs designed to meet the unique needs of our clients:
                    </p>
                    <ul class="list-unstyled list">
                        <li><i class="ti-check"></i> <b>&nbsp; Reimagine: </b> Our Reimagine program is a visionary concept that teaches individuals how to transform distressed properties into valuable assets. It's a journey that not only revitalizes homes but also paves the way to building wealth through real estate investment.
                        </li>
                        <br>
                        <li><i class="ti-check"></i> <b>&nbsp; 60 Day Lease Option: </b> Tailored for homeowners struggling to sell their properties within a tight timeframe, our 60 Day Lease Option program provides an opportunity to offer a lease with an option to purchase to qualified buyers. This innovative approach helps distressed homeowners find the right solution. </li>
                        <br>
                        <li><i class="ti-check"></i> <b>&nbsp; Smart Steps: </b> Geared towards first-time homebuyers, our Smart Steps program provides a comprehensive, step-by-step guide on how to navigate the complexities of purchasing or selling a home for the very first time.</li>
                    </ul>
                    <br>
                    <p>Kreative Realty Co is committed to helping individuals realize their homeownership dreams and maximize the potential of their real estate investments. Our licensed professionals are here to guide you through the entire process, ensuring that you have the resources and knowledge needed to succeed in the real estate market.
                    </p>
                    <br>
                    <p>Discover how Kreative Realty Co can make your real estate aspirations a reality, whether you're a first-time buyer, a distressed homeowner, or an aspiring real estate investor. We're here to help you reimagine, strategize, and achieve your real estate goals.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="single-facility animate-box fadeInUp animated" data-animate-effect="fadeInUp">
                        <h5>Mission Statement </h5>
                        <p>At Kreative Realty Co, our mission is to empower individuals with the creative keys to homeownership and real estate success. We're committed to redefining real estate through innovative programs that not only enhance property values but also build wealth. Our dedicated team of licensed professionals guides our clients with expertise and unwavering support, ensuring they achieve their real estate goals.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 offset-md-1">
                    <div class="single-facility animate-box fadeInUp animated" data-animate-effect="fadeInUp">
                        <h5>Core Values</h5>
                        <p>
                            <ul class="list-unstyled list">
                                <li>
                                    <i class="ti-check"></i> <b>&nbsp;
                                    Integrity: We operate with the highest level of honesty and ethics. Trust is at the core of our relationships with clients, and we uphold it through transparent, principled practices.
                                </li>
                                <li>
                                    <i class="ti-check"></i> <b>&nbsp;
                                    Innovation: We embrace creative thinking and continually seek new ways to transform real estate, whether it's through visionary programs or the application of cutting-edge technology.
                                </li>
                                <li>
                                    <i class="ti-check"></i> <b>&nbsp;
                                    Empowerment: We believe in equipping our clients with the knowledge, resources, and opportunities they need to succeed. Empowering individuals in their real estate journey is our top priority.
                                </li>
                                <li>
                                    <i class="ti-check"></i> <b>&nbsp;
                                    Diversity and Inclusion: We celebrate diversity and strive for inclusivity in all aspects of our business. We welcome individuals from all backgrounds and walks of life, ensuring everyone has access to homeownership opportunities.
                                </li>
                                <li>
                                    <i class="ti-check"></i> <b>&nbsp;
                                    Professionalism: Our licensed professionals are dedicated to delivering the highest standards of service, expertise, and professionalism. We hold ourselves to rigorous standards to provide the best guidance and support.
                                </li>
                                <li>
                                    <i class="ti-check"></i> <b>&nbsp;
                                    Client-Centric Approach: Our clients are at the center of everything we do. We listen, understand their unique needs, and tailor our services to ensure their success.
                                </li>
                                <li>
                                    <i class="ti-check"></i> <b>&nbsp;
                                    Community Commitment: We are invested in the communities we serve. We actively participate in initiatives that support and enhance the neighborhoods where we operate.
                                </li>
                            </ul>
                        </p>
                    </div>
                </div>
                <div class="card pt-2 mt-2">
                    <div class="card-body">
                        <p>These values define the essence of Kreative Realty Co and guide our commitment to serving our clients and the real estate community with excellence, integrity, and innovation.</p>
                    </div>
                </div>
            </div>
        </div>
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

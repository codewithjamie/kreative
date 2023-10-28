@extends('layouts.app')
@section('title', 'Contact Us')
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
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </div>

    
    <section class="contact section-padding">
        <div class="container">
            <div class="row mb-90">
                <div class="col-md-6 mb-60">
                    <h3>Contact Us - Your Path to Real Estate Success</h3>
                    <p>
                        At Kreative Realty Co, we are committed to transforming distressed properties into valuable assets and helping individuals build wealth through real estate investment. Our innovative and creative programs, including the Reimagine program, the 60 Day Lease Option program, and the Smart Steps program, are designed to empower you on your real estate journey.                    </p>              
                    <p>
                        Our team is made up of licensed professionals, including experienced real estate agents and skilled loan officers, who are here to provide you with the guidance and resources you need for success in the real estate market.
                    </p>
                    <p>
                        Ready to get started? Have questions or need assistance? Contact us today, and let's take the first step towards achieving your real estate goals. Your success in homeownership and property value enhancement begins here.
                    </p>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-envelope"></span></div>
                        <div class="text">
                            <p>Email Info</p> <a href="mailto:info@kreativerealtyco.com">info@kreativerealtyco.com</a>
                        </div>
                    </div>                    
                </div>
                <div class="col-md-5 mb-30 offset-md-1">
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>                
                    @endif

                    <h3>Get in touch</h3>
                    <form method="post" action="{{ route('contact-us') }}">
                        @csrf
                       
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input name="name" type="text" placeholder="Your Name *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="email" type="email" placeholder="Your Email *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="phone" type="text" placeholder="Your Number *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="subject" type="text" placeholder="Subject *" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="butn-dark2"><span>Send Message</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Map Section -->
            <div class="row">
                <div class="col-md-12 map animate-box" data-animate-effect="fadeInUp">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1573147.7480448114!2d-74.84628175962355!3d41.04009641088412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25856139b3d33%3A0xb2739f33610a08ee!2s1616%20Broadway%2C%20New%20York%2C%20NY%2010019%2C%20Amerika%20Birle%C5%9Fik%20Devletleri!5e0!3m2!1str!2str!4v1646760525018!5m2!1str!2str" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection

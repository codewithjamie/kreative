@extends('layouts.app')
@section('title', 'Home')
@section('site_desc', 'Kreative Realty Co: Empowering Homeownership and Real Estate Success Discover Kreative Realty Co, a leading full-service real estate company, where innovation meets expertise. Our dedicated team of licensed professionals offers visionary programs designed to revitalize properties, provide flexible solutions, and guide first-time buyers. Experience your real estate aspirations with us.')
@section('content')
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo -->
            <div class="logo-wrapper">
                <a class="logo" href="/"> <img src="https://res.cloudinary.com/kreative-realty/image/upload/v1697911625/kreative/WhatsApp_Image_2023-10-14_at_23.39.09_2337615f_ae2xdo.jpg" class="logo-img" alt=""> </a>
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
                        <a class="nav-link active dropdown-toggle" href="/" >Home</a>
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
    <header class="header slider-fade">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            <div class="text-center item bg-img" data-overlay-dark="2" data-background="https://res.cloudinary.com/kreative-realty/image/upload/v1698407135/kreative/premium_photo-1672055504819-3c87b9865333_qlubpv.avif">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">                                
                                <h4>Discover the creative keys to homeownership with Kreative Realty Co. Let us guide you on the path to your perfect home.</h4>
                                <h1>Unlocking Your Dream Home</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center item bg-img" data-overlay-dark="2" data-background="https://res.cloudinary.com/kreative-realty/image/upload/v1698408149/kreative/photo-1606655151331-2b5e63510fab_zu08t8.avif">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">                               
                                <h4>Join us in redefining real estate. Our innovative programs and cutting-edge technology will transform your property and your future.</h4>
                                <h1>Innovative Real Estate Solutions</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="https://res.cloudinary.com/kreative-realty/image/upload/v1698408150/kreative/udayaditya-barua-9IJ-R0tyU5s-unsplash_pgl728.jpg">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <h4>At Kreative Realty Co, your real estate goals are our commitment. Trust our dedicated professionals to lead you to success.</h4>
                                <h1>Your Success, Our Mission</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- About -->
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">                    
                    <div class="section-subtitle">Kreative Realty Co.</div>
                    <div class="section-title">Empowering Dreams, Enhancing Value</div>
                    <p>Kreative Realty Co is a leading, full-service real estate company dedicated to empowering individuals with innovative and creative programs aimed at increasing homeownership and enhancing property values. Our team comprises licensed professionals, including experienced real estate agents and skilled loan officers, who are well-equipped to provide the guidance and resources needed for success in the real estate market.</p>                    
                    <!-- call -->
                    <div class="reservations">
                        <div class="butn-dark"> <a href="about"><span>Learn More</span></a> </div>
                    </div>
                </div>
                <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp">
                    <img src="https://res.cloudinary.com/kreative-realty/image/upload/v1697864436/kreative/paulina-milde-jachowska-_-b88sATOe0-unsplash_szvq0l.jpg" alt="" class="mt-90 mb-30">
                </div>
                <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp">
                    <img src="https://res.cloudinary.com/kreative-realty/image/upload/v1698407309/kreative/premium_photo-1670182502090-a5d58b24f25b_jmqvh4.avif" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="facilties section-padding " >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">Our Services</div>
                    <div class="section-title">
                        Kreative Realty Co offers comprehensive real estate solutions tailored to clients' unique needs.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <h5>3D Rendering of Renovations and Virtual Interior Design</h5>
                        <p>As part of our Reimagine program, we offer 3D rendering services to help clients visualize and plan renovations. 
                        </p>
                        <br>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <h5>Stop Foreclosure Consulting                        </h5>
                        <p>For homeowners facing the risk of foreclosure, our Stop Foreclosure Consulting service provides expert guidance. We assist distressed homeowners in exploring options to keep their homes or facilitate a successful sale, providing solutions to prevent foreclosure.</p>                       
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <h5>Real Estate Consultant</h5>
                        <p>Our real estate consultants, who are licensed professionals, offer invaluable insights and information to help you make sound real estate decisions. Whether you're buying, selling, or investing, our consultants provide expert guidance tailored to your specific needs.
                        </p>
                    </div>
                </div>
                {{-- <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <h5>Financing Consulting</h5>
                        <p>Our financing consulting service connects you with finance professionals who provide tailored financial resources to assist with your purchase or refinance. You can access a range of loan products, including cash offer products, ITIN (Individual Taxpayer Identification Number) loans, bank statement loans, and loans for foreign nationals. These loan products are designed to support borrowers who may face challenges obtaining funding through traditional channels.
                        </p>
                    </div>
                </div> --}}

                
                <div class="reservations">
                    <div class="butn-dark"> <a href="services"><span>Learn More</span></a> </div>
                </div>
            </div>
        </div>
    </section>    
    <section class="services section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">Our Programs</div>
                    <div class="section-title">
                        Unlocking Potential, Building Wealth: Your Path to Real Estate Success
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                    <div class="img left">
                        <a href="javascript:;"><img src="https://res.cloudinary.com/kreative-realty/image/upload/v1698411077/kreative/jan-jakub-nanista-UHyrjKPsshk-unsplash_uamu9x.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 p-0 bg-cream valign animate-box" data-animate-effect="fadeInRight">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Reimagine  Attract buyer/seller leads</h6>
                            </div>
                            <p>The Reimagine program is designed to help individuals understand how to transform distressed properties into valuable assets, all while building wealth through real estate investment. This application based program moves participants to take action one step at time. </p>
                            <div class="butn-dark"> <a href="programs/reimagine"><span>Learn More</span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 bg-cream p-0 order2 valign animate-box" data-animate-effect="fadeInLeft">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>60 Day Lease Option - Attract buyer/seller leads 
                                </h6>
                            </div>
                            <p>The 60 Day Lease Option program is designed to assist distressed homeowners who are finding it challenging to sell their properties within a short timeframe. This program provides an alternative solution by offering a lease option with the potential to purchase the property to qualified buyers.
                            </p>
                            <div class="butn-dark"> <a href="program/60-lease"><span>Learn More</span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                    <div class="img">
                        <a href="javascript:;"><img src="https://res.cloudinary.com/kreative-realty/image/upload/v1698411365/kreative/Renting-e1471429176447_ihesi0.jpg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                    <div class="img left">
                        <a href="javascript:;"><img src="https://res.cloudinary.com/kreative-realty/image/upload/v1698411709/kreative/1685112324-real-estate-investment-0523-s2094826540_sxr6vz.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 p-0 bg-cream valign animate-box" data-animate-effect="fadeInRight">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Smart Steps </h6>
                            </div>
                            <p>The Smart Steps program is tailored for first-time homebuyers and is designed to provide a comprehensive, step-by-step guide on how to navigate the complexities of purchasing or selling a home for the very first time. It puts power in the hands of first time home buyers to be equipped and ready for their home purchase. It allows them to take action step by step to become a homeowner. </p>
                            <div class="butn-dark"> <a href="program/smart-steps"><span>Learn More</span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="news section-padding bg-darkblack">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle"><span>KREATIVE REALTY CO. Blog</span></div>
                    <div class="section-title">Our News</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/news/1.jpg" alt="">
                                <div class="date">
                                    <a href="post"> <span>Dec</span> <i>02</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="news">Restaurant</a>
                                </span>
                                <h5><a href="post">Historic restaurant renovated</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/news/2.jpg" alt="">
                                <div class="date">
                                    <a href="post"> <span>Dec</span> <i>04</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="news">Spa</a>
                                </span>
                                <h5><a href="post">Benefits of Spa Treatments</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/news/3.jpg" alt="">
                                <div class="date">
                                    <a href="post"> <span>Dec</span> <i>06</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="news">Bathrooms</a>
                                </span>
                                <h5><a href="post">Hotel Bathroom Collections</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/news/4.jpg" alt="">
                                <div class="date">
                                    <a href="post"> <span>Dec</span> <i>08</i> </a>
                                </div>
                            </div>
                            <div class="con">
                                <span class="category">
                                    <a href="news">Health</a>
                                </span>
                                <h5><a href="post">Weight Loss with Fitness Health Club</a></h5>
                            </div>
                        </div>

                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/news/6.jpg" alt="">
                                <div class="date">
                                    <a href="post"> <span>Dec</span> <i>08</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="news">Design</a>
                                </span>
                                <h5><a href="post">Retro Lighting Design in The Hotels</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/news/5.jpg" alt="">
                                <div class="date">
                                    <a href="post"> <span>Dec</span> <i>08</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="news">Health</a>
                                </span>
                                <h5><a href="post">Benefits of Swimming for Your Health</a></h5>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding bg-cream">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle"><span>F.A.Qs</span></div>
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
                    </ul>
                </div>
                <div class="butn-dark"> <a href="faqs"><span>Learn More</span></a> </div>
            </div>
        </div>
    </section>
@endsection

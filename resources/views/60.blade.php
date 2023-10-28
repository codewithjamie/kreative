@extends('layouts.app')
@section('title', '60 Day Lease Option - Attract buyer/seller leads')
@section('site_desc', '60 Day Lease Option program is designed to assist distressed homeowners who are finding it challenging to sell their properties within a short timeframe. This program provides an alternative solution by offering a lease option with the potential to purchase the property to qualified buyers.')
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
                <h1>60 Day Lease Option</h1>
            </div>
        </div>
    </div>
</div>
<section class="about section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-30 animate-box" data-animate-effect="fadeInUp">
                <div class="section-subtitle">Kreative Realty Co.</div>
                <div class="section-title">60 Day Lease Option - Attract buyer/seller leads</div>
                <p>The 60 Day Lease Option program is designed to assist distressed homeowners who are finding it challenging to sell their properties within a short timeframe. This program provides an alternative solution by offering a lease option with the potential to purchase the property to qualified buyers.
                </p>               
                <ul class="list-styled list">
                    <h1>Components</h1>
                    <h3 style="text-transform: uppercase; font-weight: 600">Phase 1 </h3>
                    <li>
                        <i class="ti-check"></i>
                            <b> Program Introduction: </b> 
                        <p>
                            The program begins with an introduction to the 60 Day Lease Option concept, explaining how it provides distressed homeowners with a viable path to sell their properties.                        </p>                  
                    </li>
                    <br>
                    <li>
                        <i class="ti-check"></i> <b>Eligibility Criteria:      </b> 
                        <p>
                            Participants learn how to identify distressed properties that have potential for transformation. This includes understanding the criteria for selecting properties with maximum investment value.
                        </p>                  
                    </li>
                    <br>
                    <li>
                        <i class="ti-check"></i> <b>Property Evaluation: </b> 
                        <p>
                            Kreative Realty Co helps homeowners assess the current value of their property and understand its market potential.
                        </p>                  
                    </li>
                    <br>
                    <li>
                        <i class="ti-check"></i> <b>Marketing and Promotion: </b> 
                        <p>
                            The program covers marketing and promotional strategies to attract potential lease-option buyers
                                                </p>                  
                    </li>
                    <li>
                        <i class="ti-check"></i> <b>Lease Agreement: </b> 
                        <p>
                            Participants learn about the terms and conditions of the lease agreement, including the option to purchase the property within a specified timeframe.
                        </p>                    </li>
                    <li>
                        <i class="ti-check"></i> <b>Marketing and Promotion: </b> 
                        <p>
                            The program covers marketing and promotional strategies to attract potential lease-option buyers  
                                              </p>                  
                    </li>
                    <li>
                        <i class="ti-check"></i> <b>Financial Considerations: </b> 
                        <p>
                            The financial aspects of the program are discussed, including lease payments, option fees, and potential purchase prices.
                        </p>                  
                    </li>
                    <li>
                        <i class="ti-check"></i> <b>Legal Aspects: </b> 
                        <p>
                            Understanding the legal aspects of lease-option agreements, including tenant and landlord rights, is crucial.
                        </p>
                    </li>
                </ul>
                {{-- <ul class="list-unstyled list">
                    <h3 style="text-transform: uppercase; font-weight: 600">Phase 2 </h3>
                    <p>
                        Participants can graduate to phase two of the program and duplicate their applied learning for an investment project. Additional knowledge provided includes. 
                    </p>
                </ul> --}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="single-facility animate-box fadeInUp animated" data-animate-effect="fadeInUp">
                    <h3 style="text-transform: uppercase; font-weight: 600">Benefits </h3>
                </div>
            </div>
            <div class="col-md-12">
                <div class="single-facility animate-box fadeInUp animated" data-animate-effect="fadeInUp">                    
                    <ul class="list-unstyled list">
                        <li>
                            <i class="ti-info"></i> <b>
                            Distressed homeowners have an alternative to traditional selling methods, providing more time to find a suitable buyer.                            </li>
                        <li>
                            <i class="ti-info"></i> <b>
                            The program can potentially attract motivated buyers who are interested in homeownership but need additional time to secure financing.                        </li>
                        <li>
                            <i class="ti-info"></i> <b>
                            It can result in a win-win situation where homeowners have a potential exit strategy, and buyers have a path to homeownership.
                        </li>                            
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="single-facility animate-box fadeInUp animated" data-animate-effect="fadeInUp">
                    <h3 style="text-transform: uppercase; font-weight: 600">Who Should Participate </h3>
                </div>
            </div>
            <div class="col-md-12">
                <div class="single-facility animate-box fadeInUp animated" data-animate-effect="fadeInUp">                   
                    <ul class="list-unstyled list">
                        <li>
                            <i class="ti-info"></i> <b>
                                Distressed homeowners struggling to sell their properties quickly.                            </li>
                        <li>
                            <i class="ti-info"></i> <b>
                                Prospective buyers who want to explore a lease-option arrangement as a stepping stone to homeownership.                            </li>
                        <li>
                            <i class="ti-info"></i> <b>
                                Real estate professionals seeking a unique solution to help their clients buy or sell properties in challenging situations.
                            </li>                            
                    </ul>
                </div>
            </div>
        </div>
        <br>
        <p style="font-size: 1.3em; text-align: center; float: center">
            The 60 Day Lease Option program provided by Kreative Realty Co offers a flexible and innovative approach to real estate transactions, benefitting both distressed homeowners and aspiring buyers. It's a creative solution to bridge the gap between selling and buying in a time-sensitive manner. 
        </p>
    </div>
</section>
@endsection 
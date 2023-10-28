@extends('layouts.app')
@section('title', 'Smart Steps')
@section('site_desc', 'Smart Steps program is tailored for first-time homebuyers and is designed to provide a comprehensive, step-by-step guide on how to navigate the complexities of purchasing or selling a home for the very first time. It puts power in the hands of first time home buyers to be equipped and ready for their home purchase. It allows them to take action step by step to become a homeowner. ')
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
                <h1>Smart Steps</h1>
            </div>
        </div>
    </div>
</div>
<section class="about section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-30 animate-box" data-animate-effect="fadeInUp">
                <div class="section-subtitle">Kreative Realty Co.</div>
                <div class="section-title">Smart Steps - Attract buyer/seller leads</div>
                <p>
                    The Smart Steps program is tailored for first-time homebuyers and is designed to provide a comprehensive, step-by-step guide on how to navigate the complexities of purchasing or selling a home for the very first time. It puts power in the hands of first time home buyers to be equipped and ready for their home purchase. It allows them to take action step by step to become a homeowner. 
                </p>               
                <ul class="list-styled list">
                    <h1>Components</h1>
                    <h3 style="text-transform: uppercase; font-weight: 600">Phase 1 </h3>
                    <li>
                        <i class="ti-check"></i>
                            <b> Program Introduction: </b> 
                        <p>
                            The program begins with an introduction that outlines the primary objective: to assist first-time homebuyers through the entire process of buying or selling a home.
                        </p>                    </li>
                    <br>
                    <li>
                        <i class="ti-check"></i> <b>Homeownership Readiness:      </b> 
                        <p>
                            Participants assess their readiness for homeownership. They learn about factors like financial preparedness and lifestyle considerations.
                        </p>                  
                    </li>
                    <br>
                    <li>
                        <i class="ti-check"></i> <b>Market Evaluation: </b> 
                        <p>
                            Participants are empowered to stay educated about the local real estate market, including current trends, property types, and neighborhoods.
                        </p>                  
                    </li>
                    <br>
                    <li>
                        <i class="ti-check"></i> <b>Property Search: </b> 
                        <p>
                            This section focuses on effective property search strategies, including online resources, working with real estate agents, and attending open houses.
                        </p>                  
                    </li>
                    <li>
                        <i class="ti-check"></i> <b>Property Inspections: </b> 
                        <p>
                            The importance of property inspections and how to evaluate a property for potential issues is discussed.
                                                </p>                    </li>
                    <li>
                        <i class="ti-check"></i> <b>Making an Offer and Negotiation: </b> 
                        <p>
                            Participants learn the steps to make a competitive offer on a property and how to negotiate with sellers.
                                                                      </p>                  
                    </li>
                    <li>
                        <i class="ti-check"></i> <b>Contracts and Legalities: </b> 
                        <p>
                            An overview of contracts and legal aspects related to home buying, including contingencies and inspections, is provided.
                                                </p>                  
                    </li>
                    <li>
                        <i class="ti-check"></i> <b>Mortgage Financing: </b> 
                        <p>
                            Step by Step guide to working with a lender. Participants will learn everything they need to know with identifying loan products that suit their specific scenario. They will work with a lender and work through each step for pre-approval.
                                                </p>
                    </li>
                    <li>
                        <i class="ti-check"></i> <b>Mortgage Financing and Finalizing the Deal: </b> 
                        <p>
                            The program covers the closing process and finalizing the deal.
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
                                First-time homebuyers gain a comprehensive understanding of the entire home buying process.
                                <li>
                            <i class="ti-info"></i> <b>
                                The program equips participants with the knowledge and confidence to make informed decisions at each stage.
                                <li>
                            <i class="ti-info"></i> <b>
                                It simplifies the complex process of buying a home and reduces stress for new buyers.
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
                                First-time homebuyers looking for guidance and support throughout the process.
                        <li>
                            <i class="ti-info"></i> <b>
                                Anyone considering entering the real estate market for the first time and seeking a step-by-step approach.
                                <li>
                            {{-- <i class="ti-info"></i> <b>
                                Real estate professionals seeking a unique solution to help their clients buy or sell properties in challenging situations.
                            </li>                             --}}
                    </ul>
                </div>
            </div>
        </div>
        <br>
        <p style="font-size: 1.3em; text-align: center; float: center">
            The Smart Steps program offered by Kreative Realty Co empowers first-time homebuyers with the knowledge and tools they need to make well-informed decisions when buying a home. It's a valuable resource for those who want to embark on their homeownership journey with confidence and clarity.
        </p>
    </div>
</section>
@endsection 
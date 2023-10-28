@extends('layouts.app')
@section('title', 'Reimagine  Attract buyer/seller leads')
@section('site_desc', 'The Reimagine program is designed to help individuals understand how to transform distressed properties into valuable assets, all while building wealth through real estate investment. This application based program moves participants to take action one step at time.')
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
                <h1>Reimagine</h1>
            </div>
        </div>
    </div>
</div>
<section class="about section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-30 animate-box" data-animate-effect="fadeInUp">
                <div class="section-subtitle">Kreative Realty Co.</div>
                <div class="section-title">Reimagine Attract buyer/seller leads</div>
                <p>The Reimagine program is designed to help individuals understand how to transform distressed properties into valuable assets, all while building wealth through real estate investment. This application based program moves participants to take action one step at time. </p>               
                <ul class="list-styled list">
                    <h1>Components</h1>
                    <h3 style="text-transform: uppercase; font-weight: 600">Phase 1 </h3>
                    <li>
                        <i class="ti-check"></i>
                            <b> Concept Introduction: </b> 
                        <p>
                            The program begins with an introduction to the concept of reimagining distressed properties. It explains the potential of taking a property in disrepair and turning it into a profitable investment.    
                        </p>                  
                    </li>
                    <br>
                    <li>
                        <i class="ti-check"></i> <b>Property Selection:      </b> 
                        <p>
                            Participants learn how to identify distressed properties that have potential for transformation. This includes understanding the criteria for selecting properties with maximum investment value.
                        </p>                  
                    </li>
                    <br>
                    <li>
                        <i class="ti-check"></i> <b>Financing options: </b> 
                        <p>
                            Program provides access to lending products suitable for the distressed property participants have interest in and teaches them the ins and outs of qualifying
                        </p>                  
                    </li>
                    <br>
                    <li>
                        <i class="ti-check"></i> <b>Renovation Strategies: </b> 
                        <p>
                            The program provides insights into various renovation and improvement strategies. It covers topics such as cost-effective upgrades, property layout changes, and enhancing curb appeal.
                        </p>                  
                    </li>
                </ul>
                <ul class="list-unstyled list">
                    <h3 style="text-transform: uppercase; font-weight: 600">Phase 2 </h3>
                    <p>
                        Participants can graduate to phase two of the program and duplicate their applied learning for an investment project. Additional knowledge provided includes. 
                    </p>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="single-facility animate-box fadeInUp animated" data-animate-effect="fadeInUp">
                    <h3 style="text-transform: uppercase; font-weight: 600">Benefits </h3>
                </div>
            </div>
            <div class="col-md-12 offset-md-1">
                <div class="single-facility animate-box fadeInUp animated" data-animate-effect="fadeInUp">
                    {{-- <p> --}}
                        <ul class="list-unstyled list">
                            <li>
                                <i class="ti-close"></i> <b>
                                Participants in the Reimagine program gain the knowledge and confidence to turn distressed properties into their dream homes. 
                            </li>
                            <li>
                                <i class="ti-close"></i> <b>
                                They learn to increase property values, enhance neighborhoods, and contribute to their own wealth-building goals.
                            </li>
                            <li>
                                <i class="ti-close"></i> <b>
                                By reimagining properties, participants can learn to create a source of income through real estate investments.
                            </li>                            
                        </ul>
                    {{-- </p> --}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="single-facility animate-box fadeInUp animated" data-animate-effect="fadeInUp">
                    <h3 style="text-transform: uppercase; font-weight: 600">Who Should Participate </h3>
                </div>
            </div>
            <div class="col-md-12 offset-md-1">
                <div class="single-facility animate-box fadeInUp animated" data-animate-effect="fadeInUp">
                    <p>
                        <ul class="list-unstyled list">
                            <li>
                                <i class="ti-close"></i> <b>
                                Homebuyers and potential homebuyers who are aspiring real estate investors looking for innovative ways to build wealth.
                            </li>
                            <li>
                                <i class="ti-close"></i> <b>
                                Individuals interested in revitalizing distressed properties and contributing to community improvement.
                            </li>
                            <li>
                                <i class="ti-close"></i> <b>
                                Those seeking a creative approach to real estate that goes beyond traditional buying and selling
                            </li>                            
                        </ul>
                    </p>
                </div>
            </div>
        </div>
        <br>
        <p style="font-size: 1.3em; text-align: center; float: center">The Reimagine program offered by Kreative Realty Co equips participants with the skills and mindset to see potential in distressed properties and harness that potential for financial growth. It's a transformative journey that turns real estate novices into savvy investors and community builders.
        </p>
    </div>
</section>
@endsection
@extends('layouts.front')
@section('content')


        <!-- ── Page Hero ─────────────────────────────────────── -->
        <section class="page-hero">

            <div class="page-hero-bg" style="background-image: url('{{ asset('images/banner/4.png') }}');">
            </div>
            <div class="page-hero-overlay"></div>

            <div class="container">
                <div class="row">
                    <div class="col-12 hero-content">

                        <!-- Breadcrumb -->
                        <div class="page-breadcrumb" data-aos="fade-up">
                            <a href="{{ route('home') }}">Home</a>
                            <span class="sep">/</span>
                            <span class="current">Services</span>
                        </div>

                        <!-- H1 -->
                        <h1 class="page-hero-title" data-aos="fade-up" data-aos-delay="80">
                            End-to-End Export<br>Solutions from India
                        </h1>

                        <!-- Button + Subtitle side by side -->
                        <div class="hero-bottom-row" data-aos="fade-up" data-aos-delay="180">
                            <a href="{{ route('contact') }}" class="btn-accent flex-shrink-0">Get a Free Quote</a>
                            <p class="page-hero-subtitle">
                                Looking for premium towels, garment sourcing, or private label solutions? We connect
                                global buyers with trusted Indian manufacturers, offering quality assurance and seamless
                                worldwide export support.
                            </p>
                        </div>

                    </div>
                </div>
            </div>

        </section>


        <!-- ── Key Services Marquee Bar ─────────────────────────── -->
        <div class="key-services-marquee-section py-4">
            <div class="marquee-container">
                <div class="marquee-content">
                    <!-- Original Set -->
                    <div class="ks-marquee-item">
                        <i class="ri-building-2-line"></i>
                        <span>Manufacturer Sourcing</span>
                    </div>
                    <div class="ks-marquee-item">
                        <i class="ri-draft-line"></i>
                        <span>Product Development</span>
                    </div>
                    <div class="ks-marquee-item">
                        <i class="ri-shield-check-line"></i>
                        <span>Quality Inspection</span>
                    </div>
                    <div class="ks-marquee-item">
                        <i class="ri-file-paper-2-line"></i>
                        <span>Export Documentation</span>
                    </div>
                    <div class="ks-marquee-item">
                        <i class="ri-ship-line"></i>
                        <span>Shipment Coordination</span>
                    </div>
                    <div class="ks-marquee-item">
                        <i class="ri-global-line"></i>
                        <span>Global Logistics</span>
                    </div>

                    <!-- Duplicate Set for infinite scroll -->
                    <div class="ks-marquee-item">
                        <i class="ri-building-2-line"></i>
                        <span>Manufacturer Sourcing</span>
                    </div>
                    <div class="ks-marquee-item">
                        <i class="ri-draft-line"></i>
                        <span>Product Development</span>
                    </div>
                    <div class="ks-marquee-item">
                        <i class="ri-shield-check-line"></i>
                        <span>Quality Inspection</span>
                    </div>
                    <div class="ks-marquee-item">
                        <i class="ri-file-paper-2-line"></i>
                        <span>Export Documentation</span>
                    </div>
                    <div class="ks-marquee-item">
                        <i class="ri-ship-line"></i>
                        <span>Shipment Coordination</span>
                    </div>
                    <div class="ks-marquee-item">
                        <i class="ri-global-line"></i>
                        <span>Global Logistics</span>
                    </div>
                </div>
            </div>
        </div>


        <!-- ── Comprehensive Export Solutions ─────────────────── -->

        <section class="export-solutions-section" id="core-services">
            <div class="container">
                <!-- Heading -->
                <div class="text-center mb-5 pb-lg-2" data-aos="fade-up">
                    <p class="section-label d-inline-block text-uppercase mb-2">What We Offer</p>
                    <h2 class="section-heading mb-0">Comprehensive Export Solutions</h2>
                </div>

                <!-- Swiper Carousel -->
                <div class="swiper services-swiper py-2 pb-0" data-aos="fade-up" data-aos-delay="150">
                    <div class="swiper-wrapper">

                        <!-- 1. Garment Exports -->
                        <div class="swiper-slide h-auto">
                            <div class="export-solution-card">
                                <div class="es-hover-bg"
                                    style="background-image: url('https://images.unsplash.com/photo-1578575437130-527eed3abbec?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                                </div>
                                <div class="es-hover-overlay"></div>
                                <div class="es-initial-content">
                                    <div class="es-icon">
                                        <i class="ri-t-shirt-fill"></i>
                                    </div>
                                    <div>
                                        <h3 class="es-title">Garment Exports</h3>
                                        <p class="es-desc">Our primary expertise lies in exporting high-quality
                                            garments,
                                            showcasing the best of Indian garments craftsmanship.</p>
                                    </div>
                                </div>
                                <div class="es-hover-content">
                                    <a href="tel:+919004711558" class="btn-accent">Call Now</a>
                                </div>
                            </div>
                        </div>

                        <!-- 2. Custom Sourcing -->
                        <div class="swiper-slide h-auto">
                            <div class="export-solution-card">
                                <div class="es-hover-bg" style="background-image: url('{{ asset('images/img1.jpg') }}');">
                                </div>
                                <div class="es-hover-overlay"></div>
                                <div class="es-initial-content">
                                    <div class="es-icon">
                                        <i class="ri-shirt-fill"></i>
                                    </div>
                                    <div>
                                        <h3 class="es-title">Custom Sourcing</h3>
                                        <p class="es-desc">Leverage our extensive network to source any product made in
                                            India,
                                            tailored to your specific requirements.</p>
                                    </div>
                                </div>
                                <div class="es-hover-content">
                                    <a href="tel:+919004711558" class="btn-accent">Call Now</a>
                                </div>
                            </div>
                        </div>

                        <!-- 3. garments Specialties -->
                        <!-- <div class="swiper-slide h-auto">
                            <div class="export-solution-card">
                                <div class="es-hover-bg"
                                    style="background-image: url('https://images.unsplash.com/photo-1544816155-12df9643f363?w=600&q=80');">
                                </div>
                                <div class="es-hover-overlay"></div>
                                <div class="es-initial-content">
                                    <div class="es-icon">
                                        <i class="ri-award-fill"></i>
                                    </div>
                                    <div>
                                        <h3 class="es-title">garments Specialties</h3>
                                        <p class="es-desc">Beyond garments, we excel in exporting premium towels and
                                            other
                                            garments products.</p>
                                    </div>
                                </div>
                                <div class="es-hover-content">
                                    <a href="tel:+919004711558" class="btn-accent">Call Now</a>
                                </div>
                            </div>
                        </div> -->

                        <!-- 4. Brand Offerings -->
                        <div class="swiper-slide h-auto">
                            <div class="export-solution-card">
                                <div class="es-hover-bg" style="background-image: url('{{ asset('images/img2.png') }}');">
                                </div>
                                <div class="es-hover-overlay"></div>
                                <div class="es-initial-content">
                                    <div class="es-icon">
                                        <i class="ri-price-tag-3-fill"></i>
                                    </div>
                                    <div>
                                        <h3 class="es-title">Brand Offerings</h3>
                                        <p class="es-desc">Experience the quality of our in-house brands – Bananas Club
                                            and
                                            Turkey Wonders.</p>
                                    </div>
                                </div>
                                <div class="es-hover-content">
                                    <a href="tel:+919004711558" class="btn-accent">Call Now</a>
                                </div>
                            </div>
                        </div>

                        <!-- 5. Manufacturer Connections -->
                        <div class="swiper-slide h-auto">
                            <div class="export-solution-card">
                                <div class="es-hover-bg"
                                    style="background-image: url('https://plus.unsplash.com/premium_photo-1677695581626-2a75bdece138?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                                </div>
                                <div class="es-hover-overlay"></div>
                                <div class="es-initial-content">
                                    <div class="es-icon">
                                        <i class="ri-team-fill"></i>
                                    </div>
                                    <div>
                                        <h3 class="es-title">Manufacturer Connections</h3>
                                        <p class="es-desc">We connect international buyers with reliable Indian
                                            manufacturers,
                                            ensuring smooth business operations.</p>
                                    </div>
                                </div>
                                <div class="es-hover-content">
                                    <a href="tel:+919004711558" class="btn-accent">Call Now</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Swiper Pagination -->
                    <div class="swiper-pagination mt-4 position-relative"></div>
                </div>
            </div>
        </section>

        <!-- ── Work Process Timeline ──────────────────────────── -->
        <section class="process-section">
            <div class="container text-center">

                <!-- Heading -->
                <div class="mb-5 pb-lg-3" data-aos="fade-up">
                    <p class="section-label d-inline-block text-uppercase mb-2">Our Services</p>
                    <h2 class="section-heading mb-0">Our Export Process</h2>
                </div>

                <!-- Custom Alternating Timeline -->
                <div class="production-timeline-wrapper gs-scroll-enabled">
                    <div class="timeline-scroll-content">
                        <!-- Segmented Axis Line -->
                        <div class="timeline-axis-line">
                            <div class="timeline-axis-fill"></div>
                        </div>

                        <div class="timeline-container">

                            <!-- Step 1 (Top) -->
                            <div class="timeline-item type-top">
                                <div class="timeline-card-wrap">
                                    <span class="step-badge"><span class="bullet"></span>NO 1</span>
                                    <h3 class="step-card-title"><i class="ri-user-voice-line"></i> Buyer Meeting</h3>
                                    <p class="step-card-desc">Understand Buyer Requirements, Expectations, Timelines,
                                        And
                                        Product Specifications Clearly.</p>
                                    <div class="step-connector-line"></div>
                                </div>
                                <div class="timeline-node-container">
                                    <div class="timeline-node">
                                        <div class="node-inner"></div>
                                    </div>
                                </div>
                                <div class="timeline-spacer"></div>
                            </div>

                            <!-- Step 2 (Bottom) -->
                            <div class="timeline-item type-bottom">
                                <div class="timeline-spacer"></div>
                                <div class="timeline-node-container">
                                    <div class="timeline-node">
                                        <div class="node-inner"></div>
                                    </div>
                                </div>
                                <div class="timeline-card-wrap">
                                    <div class="step-connector-line"></div>
                                    <span class="step-badge"><span class="bullet"></span>NO 2</span>
                                    <h3 class="step-card-title"><i class="ri-map-pin-line"></i> Factory Visits with
                                        Buyer
                                    </h3>
                                    <p class="step-card-desc">Visit Trusted Sourcing Network Facilities Together To
                                        Evaluate
                                        Production
                                        Capabilities And Standards.</p>
                                </div>
                            </div>

                            <!-- Step 3 (Top) -->
                            <div class="timeline-item type-top">
                                <div class="timeline-card-wrap">
                                    <span class="step-badge"><span class="bullet"></span>NO 3</span>
                                    <h3 class="step-card-title"><i class="ri-building-4-line"></i> Factory Selection
                                    </h3>
                                    <p class="step-card-desc">Choose The Best Factory Based On Quality, Capacity, And
                                        Compliance.</p>
                                    <div class="step-connector-line"></div>
                                </div>
                                <div class="timeline-node-container">
                                    <div class="timeline-node">
                                        <div class="node-inner"></div>
                                    </div>
                                </div>
                                <div class="timeline-spacer"></div>
                            </div>

                            <!-- Step 4 (Bottom) -->
                            <div class="timeline-item type-bottom">
                                <div class="timeline-spacer"></div>
                                <div class="timeline-node-container">
                                    <div class="timeline-node">
                                        <div class="node-inner"></div>
                                    </div>
                                </div>
                                <div class="timeline-card-wrap">
                                    <div class="step-connector-line"></div>
                                    <span class="step-badge"><span class="bullet"></span>NO 4</span>
                                    <h3 class="step-card-title"><i class="ri-survey-line"></i> Purchase Order Planning
                                    </h3>
                                    <p class="step-card-desc">Finalize Purchase Orders, Quantities, Pricing, And
                                        Production
                                        Schedules Efficiently.</p>
                                </div>
                            </div>

                            <!-- Step 5 (Top) -->
                            <div class="timeline-item type-top">
                                <div class="timeline-card-wrap">
                                    <span class="step-badge"><span class="bullet"></span>NO 5</span>
                                    <h3 class="step-card-title"><i class="ri-checkbox-circle-line"></i> Production
                                        Approval
                                        Samples</h3>
                                    <p class="step-card-desc">Develop And Approve Samples Before Starting Full-Scale
                                        Trusted Sourcing Network Production.</p>
                                    <div class="step-connector-line"></div>
                                </div>
                                <div class="timeline-node-container">
                                    <div class="timeline-node">
                                        <div class="node-inner"></div>
                                    </div>
                                </div>
                                <div class="timeline-spacer"></div>
                            </div>

                            <!-- Step 6 (Bottom) -->
                            <div class="timeline-item type-bottom">
                                <div class="timeline-spacer"></div>
                                <div class="timeline-node-container">
                                    <div class="timeline-node">
                                        <div class="node-inner"></div>
                                    </div>
                                </div>
                                <div class="timeline-card-wrap">
                                    <div class="step-connector-line"></div>
                                    <span class="step-badge"><span class="bullet"></span>NO 6</span>
                                    <h3 class="step-card-title"><i class="ri-settings-line"></i> Production Start &amp;
                                        QC
                                    </h3>
                                    <p class="step-card-desc">Track production progress daily, ensuring strict adherence
                                        to
                                        approved sample standards.</p>
                                </div>
                            </div>

                            <!-- Step 7 (Top) -->
                            <div class="timeline-item type-top">
                                <div class="timeline-card-wrap">
                                    <span class="step-badge"><span class="bullet"></span>NO 7</span>
                                    <h3 class="step-card-title"><i class="ri-ship-line"></i> Export Documents &amp;
                                        Booking
                                    </h3>
                                    <p class="step-card-desc">Manage shipping bookings, custom documents, and
                                        certificate of
                                        origin clearance smoothly.</p>
                                    <div class="step-connector-line"></div>
                                </div>
                                <div class="timeline-node-container">
                                    <div class="timeline-node">
                                        <div class="node-inner"></div>
                                    </div>
                                </div>
                                <div class="timeline-spacer"></div>
                            </div>

                            <!-- Step 8 (Bottom) -->
                            <div class="timeline-item type-bottom">
                                <div class="timeline-spacer"></div>
                                <div class="timeline-node-container">
                                    <div class="timeline-node">
                                        <div class="node-inner"></div>
                                    </div>
                                </div>
                                <div class="timeline-card-wrap">
                                    <div class="step-connector-line"></div>
                                    <span class="step-badge"><span class="bullet"></span>NO 8</span>
                                    <h3 class="step-card-title"><i class="ri-customer-service-2-line"></i> After Sales
                                        &amp;
                                        Support</h3>
                                    <p class="step-card-desc">Coordinate secure shipping delivery and collect buyer
                                        feedback
                                        to maintain quality.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- ── Why Choose Balaji ──────────────────────────────── -->
        <section class="why-balaji-section">
            <div class="container">

                <div class="col-lg-8 mb-5" data-aos="fade-up">
                    <p class="section-label d-inline-block mb-2">Why Balaji</p>
                    <h2 class="section-heading mb-4">We Believe Every Buyer Should Have Their Own Office in India.
                    </h2>
                    <p class="section-body fs-4">Our mission is to be that Office</p>
                </div>

                <div class="row g-4" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4">
                        <div class="why-card mb-4">
                            <div class="card-hover-overlay"
                                style="background-image: url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=800&q=80');">
                            </div>
                            <div class="why-icon"><i class="ri-time-line"></i></div>
                            <div>
                                <h3 class="why-title">25+ Years of Industry Experience</h3>
                                <p class="why-desc">Serving global importers with reliable sourcing expertise built
                                    over decades of real-world operations.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="why-card">
                            <div class="card-hover-overlay"
                                style="background-image: url('https://images.unsplash.com/photo-1660980041852-230420b8f99f?q=80&w=880&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                            </div>
                            <div class="why-icon"><i class="ri-shield-check-fill"></i></div>
                            <div>
                                <h3 class="why-title">100+ Verified Trusted Sourcing Network Partners</h3>
                                <p class="why-desc">Strong supplier network across India ensuring no dependency
                                    on a single factory.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 d-none d-lg-block"></div>

                    <div class="col-lg-4 offset-lg-4">
                        <div class="why-card mb-4">
                            <div class="card-hover-overlay"
                                style="background-image: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=800&q=80');">
                            </div>
                            <div class="why-icon"><i class="ri-vip-diamond-fill"></i></div>
                            <div>
                                <h3 class="why-title">Strict Quality Control</h3>
                                <p class="why-desc">Every order undergoes multi-stage inspection, sample approvals,
                                    and lab testing before dispatch.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="why-card">
                            <div class="card-hover-overlay"
                                style="background-image: url('https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?w=800&q=80');">
                            </div>
                            <div class="why-icon"><i class="ri-global-line"></i></div>
                            <div>
                                <h3 class="why-title">Reliable Global Supply Chain</h3>
                                <p class="why-desc">Consistent quality, timely delivery, and dependable
                                    communication across GCC &amp; Africa markets.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ── Quality & Client Satisfaction ──────────────────── -->
        <section class="quality-clients-section  pt-0">
            <div class="container">

                <!-- 1. Priority Quality -->
                <div class="row align-items-center g-5 mb-5 pb-lg-3">
                    <!-- Left: Image with accent backdrop decoration -->
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="qc-image-wrapper">
                            <!-- <div class="qc-bg-decor"></div> -->
                            <img src="{{ asset('images/s-1.png') }}" alt="Priority Quality Fabric Rolls" class="qc-img img-fluid">
                        </div>
                    </div>
                    <!-- Right: Content -->
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="qc-content-block">
                            <h2 class="qc-heading">QUALITY CONTROL</h2>
                            <p class="qc-body">
                                At our company, <strong>Quality</strong> is the cornerstone of our garment
                                Trusted Sourcing Network and exporting services. We are committed to delivering products
                                that not only meet but exceed industry standards, ensuring that every garment
                                reflects our dedication to excellence. Our rigorous quality control processes
                                encompass every stage of production, from initial fabric selection to final
                                inspection. By prioritizing quality, we ensure that our clients receive durable,
                                stylish, and meticulously crafted garments that enhance their brand reputation
                                and satisfy their customers.
                            </p>
                            <a href="{{ route('contact') }}" class="btn-accent">Contact Us</a>
                        </div>
                    </div>
                </div>

                <!-- 2. Happy Clients -->
                <div class="row align-items-center g-5 pt-lg-3">
                    <!-- Left: Content -->
                    <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
                        <div class="qc-content-block">
                            <h2 class="qc-heading">HAPPY CLIENTS</h2>
                            <p class="qc-body">
                                At Balaji Garments, our greatest pride lies in the satisfaction of our clients.
                                We believe that delivering exceptional garments and services is the key to
                                building lasting relationships. Our dedication to quality, reliability, and
                                personalized service has earned us a reputation for excellence, reflected in
                                the positive feedback and repeat business from our valued clients.

                                <br>
                                <a href="https://www.instagram.com/p/DYW0FkcM5PR/?igsh=MWY1Y2RwMmo2b3FtOA%3D%3D"
                                    target="_blank" rel="noopener" class="happy-clients-insta-link my-3">
                                    <i class="ri-instagram-line"></i>
                                    See what our clients are saying on Instagram
                                </a>
                            </p>

                            <a href="{{ route('contact') }}" class="btn-accent">Contact Us</a>

                        </div>
                    </div>
                    <!-- Right: Offset Dual Images -->
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
                        <div class="dual-images-wrapper">
                            <div class="dual-image-left">
                                <img src="{{ asset('images/s-2.png') }}" alt="Garment Factory Production" class="img-fluid">
                            </div>
                            <div class="dual-image-right">
                                <img src="{{ asset('images/s-3.png') }}" alt="Sewing details thread spool" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- ── Industries We Serve ────────────────────────────── -->
        <section class="industries-section py-5">
            <div class="container">
                <div class="row align-items-center g-5">

                    <!-- Left: heading -->
                    <div class="col-lg-5" data-aos="fade-up">
                        <p class="section-label mb-2">Industries We Serve</p>
                        <h2 class="section-heading mb-3">Industries &amp; Buyers<br> We Serve</h2>
                        <p class="section-body mb-4">We understand the unique
                            requirements of every buyer category.</p>
                        <a href="{{ route('contact') }}" class="btn-accent">Start Sourcing Today</a>
                    </div>

                    <!-- Right: tags -->
                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                        <div class="industries-tags-wrap">
                            <!-- <span class="industry-tag">Retail Brands</span> -->
                            <span class="industry-tag">Importers</span>
                            <span class="industry-tag">Wholesalers</span>
                            <span class="industry-tag">Spa</span>
                            <span class="industry-tag">Salon</span>
                            <span class="industry-tag">Gym</span>
                            <span class="industry-tag">Hyper Markets</span>
                            <span class="industry-tag">Hospitality</span>
                            <span class="industry-tag">Retail Chain Stores</span>
                            <span class="industry-tag">Hotels &amp; Resorts</span>
                            <span class="industry-tag">Distributors</span>
                            <span class="industry-tag">Government Procurement</span>
                            <span class="industry-tag">Custom Prints</span>
                            <!-- <span class="industry-tag">Institutional Buyers</span> -->
                            <!-- <span class="industry-tag">E-commerce Brands</span> -->
                        </div>
                    </div>

                </div>
            </div>
        </section>

    
@endsection

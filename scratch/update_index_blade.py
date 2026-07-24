file_path = r"c:\Freelance\Balaji_Exports_Full\resources\views\front\index.blade.php"

new_content = """@extends('layouts.front')
@section('content')
    <!-- Hero Section with Swiper Background -->
    <section class="hero-section pt-5 ">
        <div class="d-none d-lg-block py-4"></div> <!-- Swiper Background + Content -->
        <div class="hero-swiper-container">
            <div class="swiper heroSwiper">
                <div class="swiper-wrapper">

                    <!-- Slide 1: Towels -->
                    <div class="swiper-slide">
                        <div class="hero-slide-bg" style="background-image: url('{{ asset('images/slider/1.jpg') }}');">
                        </div>
                        <div class="hero-overlay"></div>
                        <div class="hero-slide-content">
                            <div class="container">
                                <div class="row justify-content-center justify-content-lg-start mt-lg-5 pt-lg-5">
                                    <div class="col-lg-8 text-center text-lg-start text-white hero-content-col">
                                        <h1 class="display-3 fw-bold mb-4">Your Trusted Towel Export Partner from India</h1>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <p class="lead mb-5">Delivering soft, durable, and export-quality towels
                                                    through trusted manufacturer sourcing, strict quality standards, and
                                                    reliable global sourcing solutions.</p>
                                            </div>
                                        </div>

                                        <div>
                                            <a href="{{ route('listing') }}" class="btn-accent">View Collections</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2: Global Export Sourcing -->
                    <div class="swiper-slide">
                        <div class="hero-slide-bg" style="background-image: url('{{ asset('images/slider/4.jpg') }}');">
                        </div>
                        <div class="hero-overlay"></div>
                        <div class="hero-slide-content">
                            <div class="container">
                                <div class="row justify-content-center justify-content-lg-start mt-lg-5 pt-lg-5">
                                    <div class="col-lg-8 text-center text-lg-start text-white hero-content-col">
                                        <h1 class="display-3 fw-bold mb-4">Your Trusted Export & Sourcing Partner
                                            from India</h1>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <p class="lead mb-5">Helping importers source premium towels and
                                                    garments through trusted Indian manufacturers with complete
                                                    sourcing, quality inspection, production coordination, and
                                                    global export support.</p>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="{{ route('contact') }}" class="btn-accent">Enquiry Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3: Garments -->
                    <div class="swiper-slide">
                        <div class="hero-slide-bg" style="background-image: url('{{ asset('images/slider/2.jpg') }}');">
                        </div>
                        <div class="hero-overlay"></div>
                        <div class="hero-slide-content">
                            <div class="container">
                                <div class="row justify-content-center justify-content-lg-start mt-lg-5 pt-lg-5">
                                    <div class="col-lg-8 text-center text-lg-start text-white hero-content-col">
                                        <h1 class="display-3 fw-bold mb-4">Garment Export & Sourcing Services</h1>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <p class="lead mb-5">Source high-quality garments through our
                                                    trusted manufacturer sourcing network, backed by reliable
                                                    production,
                                                    quality assurance, and seamless export solutions worldwide.</p>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="{{ route('listing') }}#cat-garments" class="btn-accent">Explore Garments</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Pagination indicators -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- Client Logos Marquee -->
    <div class="section client-logos-section pt-5">
        <div class="marquee-container">
            <div class="marquee-content">
                <!-- Original Set -->
                <img src="{{ asset('images/logo/1.png') }}" alt="Logo 1" class="marquee-logo">
                <img src="{{ asset('images/logo/2.png') }}" alt="Logo 2" class="marquee-logo">
                <img src="{{ asset('images/logo/3.png') }}" alt="Logo 3" class="marquee-logo">
                <img src="{{ asset('images/logo/4.png') }}" alt="Logo 4" class="marquee-logo">
                <img src="{{ asset('images/logo/5.png') }}" alt="Logo 5" class="marquee-logo">
                <img src="{{ asset('images/logo/6.png') }}" alt="Logo 6" class="marquee-logo">
                <img src="{{ asset('images/logo/7.png') }}" alt="Logo 7" class="marquee-logo">
                <img src="{{ asset('images/logo/8.png') }}" alt="Logo 8" class="marquee-logo">

                <!-- Duplicate Set for seamless infinite scroll -->
                <img src="{{ asset('images/logo/1.png') }}" alt="Logo 1" class="marquee-logo">
                <img src="{{ asset('images/logo/2.png') }}" alt="Logo 2" class="marquee-logo">
                <img src="{{ asset('images/logo/3.png') }}" alt="Logo 3" class="marquee-logo">
                <img src="{{ asset('images/logo/4.png') }}" alt="Logo 4" class="marquee-logo">
                <img src="{{ asset('images/logo/5.png') }}" alt="Logo 5" class="marquee-logo">
                <img src="{{ asset('images/logo/6.png') }}" alt="Logo 6" class="marquee-logo">
                <img src="{{ asset('images/logo/7.png') }}" alt="Logo 7" class="marquee-logo">
                <img src="{{ asset('images/logo/8.png') }}" alt="Logo 8" class="marquee-logo">
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <div class="section about-section pt-0">
        <div class="container">
            <div class="row align-items-start mb-5 pb-lg-3">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
                    <p class="section-label">About Us</p>
                    <h2 class="section-heading">A Reliable Bridge between Indian Manufacturers and Global Importers</h2>
                </div>
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <p class="section-body lh-base mb-5">Founded on the principles of quality and reliability,
                        Balaji Exports has established itself as a leading merchant exporter from India. Our journey
                        began with a focus on garment exports, expanding to include premium towels and a diverse
                        range of high-quality garments goods.</p>
                    <a href="{{ route('about') }}" class="btn-accent">Know More</a>
                </div>
            </div>
            <div class="row g-0 stats-row" data-aos="fade-down" data-aos-delay="100">
                <div class="col-6 col-md-3">
                    <div class="stat-card ">
                        <div class="stat-icon"><i class="ri-ship-fill"></i></div>
                        <div class="pb-3">
                            <p class="stat-label">Successful Shipments</p>
                            <p class="stat-number"><span class="counter" data-target="500">0</span><span
                                    class="stat-suffix">+</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon"><i class="ri-user-star-fill"></i></div>
                        <div class="pb-3">
                            <p class="stat-label">Years of Experience</p>
                            <p class="stat-number"><span class="counter" data-target="25">0</span><span
                                    class="stat-suffix">+</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class=" stat-card">
                        <div class="stat-icon"><i class="ri-map-pin-2-fill"></i></div>
                        <div class="pb-3">
                            <p class="stat-label">Export Destinations</p>
                            <p class="stat-number"><span class="counter" data-target="25">0</span><span
                                    class="stat-suffix">+</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon"><i class="ri-award-fill"></i></div>

                        <div class="pb-3">
                            <p class="stat-label">No. Of Verified Manufacturers </p>
                            <p class="stat-number"><span class="counter" data-target="100">0</span><span
                                    class="stat-suffix">+</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service section -->
    <div class="section service-section" style="background-image: url('{{ asset('images/servicebg.png') }}');">
        <div class="container text-center">
            <div class="mb-5 pb-lg-3" data-aos="fade-up">
                <p class="section-label d-inline-block text-uppercase mb-2">Our Core Strength</p>
                <h2 class="section-heading mb-0">Products That Stand Out</h2>
            </div>

            <div class="row  justify-content-center">
                <div class="col-lg-10">
                    <!-- Hover Hint -->
                    <div class="hover-hint-wrap">
                        <div class="hover-hint" id="serviceHoverHint">
                            <span class="hint-cursor">🖱️</span>
                            Hover cards to explore
                            <span class="hint-dot"></span>
                        </div>
                    </div>
                    <div class="row g-4">
                        <!-- Card 1 -->
                        <div class=" col-md-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-card text-start">
                                <div class="card-hover-overlay"
                                    style="background-image: url('{{ asset('images/cat7/product1.jpg') }}');">
                                </div>
                                <div class="service-icon">
                                    <i class="ri-t-shirt-fill"></i>
                                </div>
                                <div>
                                    <h3 class="service-title">Garment Exports</h3>
                                    <p class="service-desc">Our primary expertise lies in exporting high-quality
                                        garments, showcasing the best of Indian garments craftsmanship.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-card text-start">
                                <div class="card-hover-overlay"
                                    style="background-image: url('{{ asset('images/cat6/product1.jpg') }}');">
                                </div>
                                <div class="service-icon">
                                    <i class="ri-box-3-fill"></i>
                                </div>
                                <div>
                                    <h3 class="service-title">Towels</h3>
                                    <p class="service-desc">We offer a premium range of towels crafted for diverse
                                        global hospitality retail and household needs. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="service-card text-start">
                                <div class="card-hover-overlay"
                                    style="background-image: url('https://images.unsplash.com/photo-1578575437130-527eed3abbec?q=80&w=1170&auto=format&fit=crop');">
                                </div>
                                <div class="service-icon">
                                    <i class="ri-export-fill"></i>
                                </div>
                                <div>
                                    <h3 class="service-title">End to End Exports Solution</h3>
                                    <p class="service-desc">From identifying reliable manufacturers to final
                                        delivery, we handle every step with precision and transparency.</p>
                                </div>
                            </div>
                        </div>


                    </div>


                </div>
            </div>
        </div>
    </div>

    <!-- inspection section -->
    <div class="section about-strengths-section bg-light">
        <div class="container">

            <!-- ROW 1: Heading left | Description right -->
            <div class="row g-4 mb-5 align-items-end">
                <div class="col-lg-6" data-aos="fade-up">
                    <p class="section-label">Quality Assurance</p>
                    <h2 class="section-heading mb-0">Inspection and Lab reports</h2>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <p class="section-body lh-base mb-4">
                        We enforce a rigorous quality control framework at every stage, ensuring unparalleled
                        consistency and strict adherence to your specifications.
                    </p>
                </div>
            </div>

            <!-- ROW 2: Image left | Strengths list right -->
            <div class="row g-lg-5 pt-lg-4 align-items-stretch">
                <div class="col-lg-6 d-flex" data-aos="fade-up">
                    <img src="{{ asset('images/quality-check.jpg') }}" alt="Quality Inspection" class="img-fluid rounded-3 w-100"
                        style="object-fit: cover; max-height: 700px;">
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="120">
                    <div class="strengths-list">

                        <div class="strength-item pt-lg-0" data-aos="fade-up" data-aos-delay="100">
                            <div class="strength-icon"><i class="ri-mail-send-fill" style="color: #EF3943;"></i>
                            </div>
                            <div>
                                <h3 class="strength-title mb-1 fs-5">Pre-production samples couriered for buyer
                                    approval</h3>
                                <p class="strength-desc mb-0">We send tangible prototypes directly to your office,
                                    ensuring the material, fit, and finish meet your exact standards before mass
                                    production begins.</p>
                            </div>
                        </div>

                        <div class="strength-item" data-aos="fade-up" data-aos-delay="150">
                            <div class="strength-icon"><i class="ri-settings-3-fill" style="color: #EF3943;"></i>
                            </div>
                            <div>
                                <h3 class="strength-title mb-1 fs-5">Bulk production starts only after sample
                                    confirmation</h3>
                                <p class="strength-desc mb-0">manufacturer sourcing is strictly placed on hold until
                                    we
                                    receive your written sign-off, eliminating any risk of miscommunication or
                                    deviations.</p>
                            </div>
                        </div>

                        <div class="strength-item" data-aos="fade-up" data-aos-delay="200">
                            <div class="strength-icon"><i class="ri-shield-check-fill" style="color: #EF3943;"></i>
                            </div>
                            <div>
                                <h3 class="strength-title mb-1 fs-5">Final production samples shared after
                                    inspection</h3>
                                <p class="strength-desc mb-0">Randomized pieces from the final batch are thoroughly
                                    evaluated and shared with you, verifying that the bulk output perfectly matches
                                    the approved prototype.</p>
                            </div>
                        </div>

                        <div class="strength-item no-border" data-aos="fade-up" data-aos-delay="250">
                            <div class="strength-icon"><i class="ri-ship-fill" style="color: #EF3943;"></i></div>
                            <div>
                                <h3 class="strength-title mb-1 fs-5">Shipment dispatched after buyer approval</h3>
                                <p class="strength-desc mb-0">Goods are loaded and dispatched only when you are 100%
                                    satisfied with the inspection reports and final samples, guaranteeing complete
                                    peace of mind.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- collection section -->
    <div class="section collection-section">
        <div class="container">
            <!-- Heading Row -->
            <div class="row align-items-end justify-content-between mb-5 pb-lg-3" data-aos="fade-up">
                <div class="col-md-6">
                    <p class="section-label">Our Collections</p>
                    <h2 class="section-heading mb-0">Seven categories, One Trusted Partner.</h2>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <a href="{{ route('listing') }}" class="btn-accent">See All Products</a>
                </div>
            </div>

            <!-- Cards Grid -->
            <!-- Cards Slider -->
            <div class="swiper collection-swiper py-2">
                <div class="swiper-wrapper">
                    <!-- Slide 1: Cotton Terry Towels -->
                    <div class="swiper-slide">
                        <a href="{{ route('listing') }}?category=cat-cotton-terry" class="collection-card">
                            <div class="card-img-wrapper">
                                <span class="card-tag">Towel collection</span>
                                <img src="{{ asset('images/cat1/product1.jpg') }}" alt="Cotton Terry Towels">
                                <div class="card-btn">
                                    <span>See the Product</span>
                                </div>
                            </div>
                            <h3 class="card-title">Cotton Terry Towels</h3>
                            <p class="section-body card-desc">100% Cotton Terry Towels Crafted For High Absorbency
                                And Long-Lasting Softness.</p>
                        </a>
                    </div>

                    <!-- Slide 2: Cotton & Polyester Mixed Towels -->
                    <div class="swiper-slide">
                        <a href="{{ route('listing') }}?category=cat-mixed" class="collection-card">
                            <div class="card-img-wrapper">
                                <span class="card-tag">Towel collection</span>
                                <img src="{{ asset('images/cat2/product1.jpg') }}" alt="Mixed Towels">
                                <div class="card-btn">
                                    <span>See the Product</span>
                                </div>
                            </div>
                            <h3 class="card-title">Mixed Towels</h3>
                            <p class="section-body card-desc">Durable poly-cotton blend towels ideal for
                                institutional bulk usage and regular washing.</p>
                        </a>
                    </div>

                    <!-- Slide 3: Multi-Stripe Towels -->
                    <div class="swiper-slide">
                        <a href="{{ route('listing') }}?category=cat-stripe" class="collection-card">
                            <div class="card-img-wrapper">
                                <span class="card-tag">Towel collection</span>
                                <img src="{{ asset('images/cat3/product1.jpg') }}" alt="Multi-Stripe Towels">
                                <div class="card-btn">
                                    <span>See the Product</span>
                                </div>
                            </div>
                            <h3 class="card-title">Multi-Stripe Towels</h3>
                            <p class="section-body card-desc">Stylish yarn-dyed multi-stripe towels crafted for
                                aesthetics and premium absorbency.</p>
                        </a>
                    </div>

                    <!-- Slide 4: Kitchen Towels -->
                    <div class="swiper-slide">
                        <a href="{{ route('listing') }}?category=cat-kitchen" class="collection-card">
                            <div class="card-img-wrapper">
                                <span class="card-tag">Towel collection</span>
                                <img src="{{ asset('images/cat4/product1.jpg') }}" alt="Kitchen Towels">
                                <div class="card-btn">
                                    <span>See the Product</span>
                                </div>
                            </div>
                            <h3 class="card-title">Kitchen Towels</h3>
                            <p class="section-body card-desc">High-utility lint-free kitchen towels perfect for
                                cleaning, drying, and general catering.</p>
                        </a>
                    </div>

                    <!-- Slide 5: Hotel Towels -->
                    <div class="swiper-slide">
                        <a href="{{ route('listing') }}?category=cat-hotel" class="collection-card">
                            <div class="card-img-wrapper">
                                <span class="card-tag">Towel collection</span>
                                <img src="{{ asset('images/cat5/product1.jpg') }}" alt="Hotel Towels">
                                <div class="card-btn">
                                    <span>See the Product</span>
                                </div>
                            </div>
                            <h3 class="card-title">Hotel Towels</h3>
                            <p class="section-body card-desc">Premium white hotel towels at 550 GSM — trusted by
                                luxury hospitality partners worldwide.</p>
                        </a>
                    </div>

                    <!-- Slide 6: Beach Towels -->
                    <div class="swiper-slide">
                        <a href="{{ route('listing') }}?category=cat-beach" class="collection-card">
                            <div class="card-img-wrapper">
                                <span class="card-tag">Towel collection</span>
                                <img src="{{ asset('images/cat6/product1.jpg') }}" alt="Beach Towels">
                                <div class="card-btn">
                                    <span>See the Product</span>
                                </div>
                            </div>
                            <h3 class="card-title">Beach Towels</h3>
                            <p class="section-body card-desc">Vibrant velour-finish striped beach towels designed
                                for outdoor leisure and sun loungers.</p>
                        </a>
                    </div>

                    <!-- Slide 7: Garments Collection -->
                    <div class="swiper-slide">
                        <a href="{{ route('listing') }}?category=cat-garments" class="collection-card">
                            <div class="card-img-wrapper">
                                <span class="card-tag">Garments Collection</span>
                                <img src="{{ asset('images/cat7/product1.jpg') }}" alt="Garments Collection">
                                <div class="card-btn">
                                    <span>See the Product</span>
                                </div>
                            </div>
                            <h3 class="card-title">Garments Collection</h3>
                            <p class="section-body card-desc">100% premium quality collar T-shirts, trousers, and
                                custom apparel for export markets.</p>
                        </a>
                    </div>
                </div>
                <!-- Pagination dots -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <!-- signature section -->
    <div class="section signature-section" style="background-image: url('{{ asset('images/home-video.jpg') }}');">
        <div class="container py-lg-5">
            <div class="row align-items-start py-5">
                <div class="col-lg-5 mb-5 mb-lg-0 pe-lg-4" data-aos="fade-up">
                    <div class="section-label-pill">Our Signature</div>
                    <h2 class="display-5 fw-medium mb-4 text-white">Efficient Process Designed For Lasting Results
                    </h2>
                    <p class="fs-6 text-white-50 mb-5">Founded on the principles of quality and reliability, Balaji
                        Exports has established itself as a leading merchant exporter from India. Our journey began
                        with a focus on garment exports, expanding to include premium towels and a diverse range of
                        high-quality garments goods.</p>
                    <a href="{{ route('about') }}" class="btn-accent">Explore Facility</a>
                </div>
                <div class="col-lg-7 ps-lg-5" data-aos="fade-left" data-aos-delay="150">
                    <div class="swiper reels-swiper pb-4">
                        <div class="swiper-wrapper">
                            <!-- Reel 1 -->
                            <div class="swiper-slide">
                                <a href="https://www.instagram.com/reel/DR_yxB3jAca/?igsh=MmcxODBkN2xrM3Nw"
                                    target="_blank" rel="noopener" class="d-block">
                                    <div class="video-container portrait-reel">
                                        <div class="reel-inner">
                                            <img src="{{ asset('images/videothumb/1.png') }}" alt="Instagram Reel 1">
                                            <div class="reel-overlay">
                                                <i class="ri-instagram-line"></i>
                                                <span>Watch on Instagram</span>
                                            </div>
                                        </div>
                                        <div class="play-btn">
                                            <i class="ri-play-fill"></i>
                                        </div>
                                        <div class="reel-caption">
                                            <i class="ri-instagram-line"></i>
                                            <span>balajigarment_exports</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Reel 2 -->
                            <div class="swiper-slide">
                                <a href="https://www.instagram.com/reel/DWgpB1DDFL0/?igsh=MWN0ZjI0bnRnbGt2cA=="
                                    target="_blank" rel="noopener" class="d-block">
                                    <div class="video-container portrait-reel">
                                        <div class="reel-inner">
                                            <img src="{{ asset('images/videothumb/2.png') }}" alt="Instagram Reel 2">
                                            <div class="reel-overlay">
                                                <i class="ri-instagram-line"></i>
                                                <span>Watch on Instagram</span>
                                            </div>
                                        </div>
                                        <div class="play-btn">
                                            <i class="ri-play-fill"></i>
                                        </div>
                                        <div class="reel-caption">
                                            <i class="ri-instagram-line"></i>
                                            <span>balajigarment_exports</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Reel 3 -->
                            <div class="swiper-slide">
                                <a href="https://www.instagram.com/reel/DV3sQLBjOWG/?igsh=MnZwMW4yNGdxdXBt"
                                    target="_blank" rel="noopener" class="d-block">
                                    <div class="video-container portrait-reel">
                                        <div class="reel-inner">
                                            <img src="{{ asset('images/videothumb/3.png') }}" alt="Instagram Reel 3">
                                            <div class="reel-overlay">
                                                <i class="ri-instagram-line"></i>
                                                <span>Watch on Instagram</span>
                                            </div>
                                        </div>
                                        <div class="play-btn">
                                            <i class="ri-play-fill"></i>
                                        </div>
                                        <div class="reel-caption">
                                            <i class="ri-instagram-line"></i>
                                            <span>balajigarment_exports</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Reel 4 -->
                            <div class="swiper-slide">
                                <a href="https://www.instagram.com/reel/DSNNeeDDJqe/?igsh=MWN3NWZ6dzRnc3dtOA=="
                                    target="_blank" rel="noopener" class="d-block">
                                    <div class="video-container portrait-reel">
                                        <div class="reel-inner">
                                            <img src="{{ asset('images/videothumb/4.png') }}" alt="Instagram Reel 4">
                                            <div class="reel-overlay">
                                                <i class="ri-instagram-line"></i>
                                                <span>Watch on Instagram</span>
                                            </div>
                                        </div>
                                        <div class="play-btn">
                                            <i class="ri-play-fill"></i>
                                        </div>
                                        <div class="reel-caption">
                                            <i class="ri-instagram-line"></i>
                                            <span>balajigarment_exports</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- process -->

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
                                <p class="step-card-desc">Understand Buyer Requirements, Expectations, Timelines, And
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
                                <h3 class="step-card-title"><i class="ri-map-pin-line"></i> Factory Visits with Buyer</h3>
                                <p class="step-card-desc">Visit manufacturer sourcing Facilities Together To Evaluate
                                    Production Capabilities And Standards.</p>
                            </div>
                        </div>

                        <!-- Step 3 (Top) -->
                        <div class="timeline-item type-top">
                            <div class="timeline-card-wrap">
                                <span class="step-badge"><span class="bullet"></span>NO 3</span>
                                <h3 class="step-card-title"><i class="ri-building-4-line"></i> Factory Selection</h3>
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
                                <h3 class="step-card-title"><i class="ri-survey-line"></i> Purchase Order Planning</h3>
                                <p class="step-card-desc">Finalize Purchase Orders, Quantities, Pricing, And
                                    Production Schedules Efficiently.</p>
                            </div>
                        </div>

                        <!-- Step 5 (Top) -->
                        <div class="timeline-item type-top">
                            <div class="timeline-card-wrap">
                                <span class="step-badge"><span class="bullet"></span>NO 5</span>
                                <h3 class="step-card-title"><i class="ri-checkbox-circle-line"></i> Production Approval Samples</h3>
                                <p class="step-card-desc">Develop And Approve Samples Before Starting Full-Scale
                                    Manufacturing Production.</p>
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
                                <h3 class="step-card-title"><i class="ri-settings-line"></i> Production Start &amp; QC
                                </h3>
                                <p class="step-card-desc">Track production progress daily, ensuring strict adherence to
                                    approved sample standards.</p>
                            </div>
                        </div>

                        <!-- Step 7 (Top) -->
                        <div class="timeline-item type-top">
                            <div class="timeline-card-wrap">
                                <span class="step-badge"><span class="bullet"></span>NO 7</span>
                                <h3 class="step-card-title"><i class="ri-ship-line"></i> Export Documents &amp; Booking
                                </h3>
                                <p class="step-card-desc">Manage shipping bookings, custom documents, and certificate of
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
                                <h3 class="step-card-title"><i class="ri-customer-service-2-line"></i> After Sales &amp; Support</h3>
                                <p class="step-card-desc">Coordinate secure shipping delivery and collect buyer feedback
                                    to maintain quality.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- why balaji section -->
    <div class="section why-balaji-section">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 mb-5" data-aos="fade-up">
                    <p class="section-label d-inline-block mb-2">Why Balaji</p>
                    <h2 class="section-heading mb-4">Every buyer deserves an office in India.</h2>
                </div>

            </div>
            <div class="row g-4" data-aos="fade-down" data-aos-delay="100">
                <!-- Hover Hint -->
                <div class="col-12">
                    <div class="hover-hint-wrap">
                        <div class="hover-hint" id="whyHoverHint">
                            <span class="hint-cursor">🖱️</span>
                            Hover cards to explore
                            <span class="hint-dot"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="why-card mb-4">
                        <div class="card-hover-overlay"
                            style="background-image: url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=800&q=80');">
                        </div>
                        <div class="why-icon">
                            <i class="ri-shield-check-fill"></i>
                        </div>
                        <div>
                            <h3 class="why-title">100+ Manufacturers</h3>
                            <p class="why-desc">Deep Supplier Network — No Dependency On A Single Factory.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="why-card">
                        <div class="card-hover-overlay"
                            style="background-image: url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=800&q=80');">
                        </div>
                        <div class="why-icon">
                            <i class="ri-ship-fill"></i>
                        </div>
                        <div>
                            <h3 class="why-title">End-To-End Execution</h3>
                            <p class="why-desc">Sourcing, Production, Documentation, Port And Shipping
                                Handled.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-none d-lg-block">

                </div>
                <div class="col-lg-4 offset-lg-4">
                    <div class="why-card mb-4">
                        <div class="card-hover-overlay"
                            style="background-image: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=800&q=80');">
                        </div>
                        <div class="why-icon">
                            <i class="ri-vip-diamond-fill"></i>
                        </div>
                        <div>
                            <h3 class="why-title">Strong Quality Control</h3>
                            <p class="why-desc">Inspection, Sample Approvals, And Lab Testing At Every
                                Stage.</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="why-card">
                        <div class="card-hover-overlay"
                            style="background-image: url('https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?w=800&q=80');">
                        </div>
                        <div class="why-icon">
                            <i class="ri-global-line"></i>
                        </div>
                        <div>
                            <h3 class="why-title">Reliable Global Supply</h3>
                            <p class="why-desc">Consistent Timelines And Buyer Satisfaction Across GCC &
                                Africa.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- testimonial -->

    <!-- testimonial section -->
    <div class="section testimonials-section">
        <div class="container">
            <!-- Header Row -->
            <div class="row align-items-center mb-5 pb-lg-3">
                <!-- Left: Stat -->
                <div class="col-lg-4 mb-4 mb-lg-0 testimonials-stat" data-aos="fade-up">
                    <p class="stat-big-number">250K<span class="stat-plus">+</span></p>
                    <div class="stat-trust-row">
                        <div class="trust-avatars">
                            <div class="trust-avatar" style="background-color:#9aa5b0;"></div>
                            <div class="trust-avatar" style="background-color:#5c6e7e;"></div>
                        </div>
                        <span class="trust-label">Trusted By Industry Leaders</span>
                    </div>
                </div>
                <!-- Right: Label + Heading -->
                <div class="col-lg-5 offset-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <p class="section-label mb-2">Testimonial</p>
                    <h2 class="section-heading mb-0">What Our Partners Say About Balaji</h2>
                </div>
            </div>

            <!-- Swiper Cards -->
            <div class="testimonials-swiper-wrapper">
                <div class="swiper testimonial-swiper">
                    <div class="swiper-wrapper">

                        <!-- Card 1 -->
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div>
                                    <div class="testimonial-stars">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </div>
                                    <p class="testimonial-quote">“Working with Balaji gave our team a stronger
                                        foundation for growth, engagement, and brand communication.”</p>
                                </div>
                                <div class="testimonial-author">
                                    <div class="author-avatar"></div>
                                    <div class="author-info">
                                        <p class="author-name">Rahul Mehata</p>
                                        <p class="author-title">CEO Of Kingdom Advisors</p>
                                    </div>
                                </div>
                                <span class="testimonial-quote-icon"><i class="ri-double-quotes-l"></i></span>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div>
                                    <div class="testimonial-stars">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </div>
                                    <p class="testimonial-quote">“The quality of their garments exceeded
                                        expectations. Delivery was on time and the documentation was flawless.”</p>
                                </div>
                                <div class="testimonial-author">
                                    <div class="author-avatar"></div>
                                    <div class="author-info">
                                        <p class="author-name">Ahmed Al-Rashid</p>
                                        <p class="author-title">Import Director, GCC Trade Co.</p>
                                    </div>
                                </div>
                                <span class="testimonial-quote-icon"><i class="ri-double-quotes-l"></i></span>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div>
                                    <div class="testimonial-stars">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-half-fill"></i>
                                    </div>
                                    <p class="testimonial-quote">“Reliable supplier with excellent quality control.
                                        They ensured every shipment met our standards before dispatch.”</p>
                                </div>
                                <div class="testimonial-author">
                                    <div class="author-avatar"></div>
                                    <div class="author-info">
                                        <p class="author-name">Sarah Williams</p>
                                        <p class="author-title">Procurement Head, Global Retail Ltd.</p>
                                    </div>
                                </div>
                                <span class="testimonial-quote-icon"><i class="ri-double-quotes-l"></i></span>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div>
                                    <div class="testimonial-stars">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                    </div>
                                    <p class="testimonial-quote">“Balaji's team handled our custom sourcing with
                                        precision. From sample to final shipment — completely seamless.”</p>
                                </div>
                                <div class="testimonial-author">
                                    <div class="author-avatar"></div>
                                    <div class="author-info">
                                        <p class="author-name">James Okonkwo</p>
                                        <p class="author-title">MD, West Africa Imports</p>
                                    </div>
                                </div>
                                <span class="testimonial-quote-icon"><i class="ri-double-quotes-l"></i></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
"""

with open(file_path, "w", encoding="utf-8") as f:
    f.write(new_content)
    
print("Updated index.blade.php successfully.")

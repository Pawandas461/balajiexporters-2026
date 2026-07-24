@extends('layouts.front')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/css/intlTelInput.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
@endsection
@section('content')
<!-- ── Page Hero ──────────────────────────────────────── -->
        <section class="page-hero product-page-hero">

            <div class="page-hero-bg" style="background-image: url('images/banner/2.png');">
            </div>
            <div class="page-hero-overlay"></div>

            <div class="container">
                <div class="row">
                    <div class="col-12 hero-content">

                        <div class="page-breadcrumb" data-aos="fade-up">
                            <a href="index.html">Home</a>
                            <span class="sep">/</span>
                            <span class="current">Products</span>
                        </div>

                        <h1 class="page-hero-title" data-aos="fade-up" data-aos-delay="80">
                            Seven Categories,<br>One Trusted Partner.
                        </h1>

                        <!-- Button + Subtitle side by side -->
                        <div class="hero-bottom-row" data-aos="fade-up" data-aos-delay="180">
                            <a href="contact.html" class="btn-accent flex-shrink-0">Request a Catalogue</a>
                            <p class="page-hero-subtitle">
                                From premium cotton towels and hotel linens to custom garments — explore our
                                complete export-ready product range sourced from India's finest manufacturers.
                            </p>
                        </div>

                    </div>
                </div>
            </div>

        </section>


        @if(session('success'))
            <div class="container mt-4">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif
        <!-- ── Sticky Category Filter ─────────────────────────── -->
        <div class="product-filter-bar py-lg-4 py-2">
            <div class="container">
                <ul class="filter-list mx-auto" id="filterList">
                    <li><button class="filter-btn is-active" data-target="cat-cotton-terry">Cotton Terry</button></li>
                    <li><button class="filter-btn" data-target="cat-mixed">Mixed Towels</button></li>
                    <li><button class="filter-btn" data-target="cat-stripe">Multi-Stripe</button></li>
                    <li><button class="filter-btn" data-target="cat-kitchen">Kitchen Towels</button></li>
                    <li><button class="filter-btn" data-target="cat-hotel">Hotel Towels</button></li>
                    <li><button class="filter-btn" data-target="cat-beach">Beach Towels</button></li>
                    <li><button class="filter-btn" data-target="cat-garments">Garments</button></li>
                </ul>
            </div>
        </div>

        <!-- ════════════════════════════════════════════════════ -->
        <!-- CATEGORY 1 — Cotton Terry Towels                    -->
        <!-- ════════════════════════════════════════════════════ -->
        <section class="product-cat-section" id="cat-cotton-terry">
            <div class="container">

                <!-- Category Header -->
                <div class="cat-header" data-aos="fade-up">
                    <div>
                        <div class="cat-meta">
                            <span class="cat-num">01</span>
                            <span class="cat-divider"></span>
                        </div>
                        <h2 class="cat-title">Cotton Terry Towels</h2>
                    </div>
                    <a href="#" class="cat-view-all" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                        Request Quotation <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

                <!-- 3 Product Cards -->
                <div class="row">

                    <!-- Card 1 — Towel Rose -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="80">
                        <a href="#" class="collection-card">
                            <div class="card-img-wrapper">
                                <span class="card-tag">Cotton Terry</span>
                                <img src="images/cat1/product1.jpg" alt="Towel Rose — Cotton Terry">
                                <div class="card-btn"><span>View Details</span></div>
                            </div>
                            <h3 class="card-title">Towel Rose</h3>
                            <p class="section-body card-desc">Luxurious, extra-thick cotton terry towels featuring a
                                premium border finish, exceptional softness, and maximum absorbency.</p>

                            <!-- Toggle Button -->
                            <button class="btn-specs-toggle" type="button">
                                <span>Show Specifications</span> <i class="ri-arrow-down-s-line"></i>
                            </button>

                            <!-- Spec Table -->
                            <div class="card-specs-table">
                                <div class="specs-header d-flex justify-content-between">
                                    <span>Category</span>
                                    <span>Size</span>
                                    <span>Weight</span>
                                    <span>GSM</span>
                                </div>
                                <div class="specs-row d-flex justify-content-between">
                                    <span>Face Towel</span>
                                    <span>33×33 cm</span>
                                    <span>60 g</span>
                                    <span>550</span>
                                </div>
                                <div class="specs-row d-flex justify-content-between">
                                    <span>Baby Towel</span>
                                    <span>33×50 cm</span>
                                    <span>83 g</span>
                                    <span>550</span>
                                </div>
                                <div class="specs-row d-flex justify-content-between">
                                    <span>Hand Towel</span>
                                    <span>50×90 cm</span>
                                    <span>250 g</span>
                                    <span>550</span>
                                </div>
                                <div class="specs-row d-flex justify-content-between">
                                    <span>Bath Towel</span>
                                    <span>70×140 cm</span>
                                    <span>550 g</span>
                                    <span>550</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Card 2 — Towel Eventx -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="160">
                        <a href="#" class="collection-card">
                            <div class="card-img-wrapper">
                                <span class="card-tag">Cotton Terry</span>
                                <img src="images/cat1/product2.jpg" alt="Towel Eventx — Cotton Terry">
                                <div class="card-btn"><span>View Details</span></div>
                            </div>
                            <h3 class="card-title">Towel Eventx</h3>
                            <p class="section-body card-desc">Vibrant, color-fast terry towels designed for
                                institutional durability, rapid absorbency, and heavy-duty wash cycles.</p>

                            <!-- Toggle Button -->
                            <button class="btn-specs-toggle" type="button">
                                <span>Show Specifications</span> <i class="ri-arrow-down-s-line"></i>
                            </button>

                            <!-- Spec Table -->
                            <div class="card-specs-table">
                                <div class="specs-header d-flex justify-content-between">
                                    <span>Category</span>
                                    <span>Size</span>
                                    <span>Weight</span>
                                    <span>GSM</span>
                                </div>
                                <div class="specs-row d-flex justify-content-between">
                                    <span>Face Towel</span>
                                    <span>33×33 cm</span>
                                    <span>60 g</span>
                                    <span>550</span>
                                </div>
                                <div class="specs-row d-flex justify-content-between">
                                    <span>Baby Towel</span>
                                    <span>33×50 cm</span>
                                    <span>83 g</span>
                                    <span>550</span>
                                </div>
                                <div class="specs-row d-flex justify-content-between">
                                    <span>Hand Towel</span>
                                    <span>50×90 cm</span>
                                    <span>250 g</span>
                                    <span>550</span>
                                </div>
                                <div class="specs-row d-flex justify-content-between">
                                    <span>Bath Towel</span>
                                    <span>70×140 cm</span>
                                    <span>550 g</span>
                                    <span>550</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Card 3 — Towel Brave -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="240">
                        <a href="#" class="collection-card">
                            <div class="card-img-wrapper">
                                <span class="card-tag">Cotton Terry</span>
                                <img src="images/cat1/product3.jpg" alt="Towel Brave — Cotton Terry">
                                <div class="card-btn"><span>View Details</span></div>
                            </div>
                            <h3 class="card-title">Towel Brave</h3>
                            <p class="section-body card-desc">Plush, high-density cotton terry face towels with a rich,
                                soft texture. Specially formulated for professional spa and salon use.</p>

                            <!-- Toggle Button -->
                            <button class="btn-specs-toggle" type="button">
                                <span>Show Specifications</span> <i class="ri-arrow-down-s-line"></i>
                            </button>

                            <!-- Spec Table -->
                            <div class="card-specs-table">
                                <div class="specs-header d-flex justify-content-between">
                                    <span>Category</span>
                                    <span>Size</span>
                                    <span>Weight</span>
                                    <span>GSM</span>
                                </div>
                                <div class="specs-row d-flex justify-content-between">
                                    <span>Face Towel</span>
                                    <span>33×33 cm</span>
                                    <span>60 g</span>
                                    <span>550</span>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <!-- ════════════════════════════════════════════════════ -->
        <!-- CATEGORY 2 — Cotton & Polyester Mixed Towels        -->
        <!-- ════════════════════════════════════════════════════ -->
        <section class="product-cat-section" id="cat-mixed">
            <div class="container">

                <div class="cat-header" data-aos="fade-up">
                    <div>
                        <div class="cat-meta">
                            <span class="cat-num">02</span>
                            <span class="cat-divider"></span>
                        </div>
                        <h2 class="cat-title">Cotton &amp; Polyester Mixed Towels</h2>
                    </div>
                    <a href="#" class="cat-view-all" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                        Request Quotation <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

                <div class="row">

                    <!-- Card 1 — Towel Waves -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="80">
                        <a href="#" class="collection-card">
                            <div class="card-img-wrapper">
                                <span class="card-tag">Mixed Blend</span>
                                <img src="images/cat2/product1.jpg" alt="Towel Waves — Mixed Blend">
                                <div class="card-btn"><span>View Details</span></div>
                            </div>
                            <h3 class="card-title">Towel Waves</h3>
                            <p class="section-body card-desc">Modern wave-patterned cotton-polyester blend towels
                                offering a unique quick-dry texture, vivid color retention, and daily reliability.</p>

                            <!-- Toggle Button -->
                            <button class="btn-specs-toggle" type="button">
                                <span>Show Specifications</span> <i class="ri-arrow-down-s-line"></i>
                            </button>

                            <!-- Spec Table -->
                            <div class="card-specs-table">
                                <div class="specs-header d-flex justify-content-between">
                                    <span>Category</span>
                                    <span>Size</span>
                                    <span>Weight</span>
                                    <span>GSM</span>
                                </div>
                                <div class="specs-row d-flex justify-content-between">
                                    <span>Bath Towel</span>
                                    <span>70×140 cm</span>
                                    <span>270 g</span>
                                    <span>276</span>
                                </div>
                                <div class="specs-row d-flex justify-content-between">
                                    <span>Hand Towel</span>
                                    <span>50×90 cm</span>
                                    <span>140 g</span>
                                    <span>311</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Card 2 — Dark Polo -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="160">
                        <a href="#" class="collection-card">
                            <div class="card-img-wrapper">
                                <span class="card-tag">Mixed Blend</span>
                                <img src="images/cat2/product2.jpg" alt="Dark Polo — Mixed Blend">
                                <div class="card-btn"><span>View Details</span></div>
                            </div>
                            <h3 class="card-title">Dark Polo</h3>
                            <p class="section-body card-desc">Sophisticated dark-striped poly-cotton blended towels.
                                Optimized for high durability, structural strength, and fast drying.</p>

                            <!-- Toggle Button -->
                            <button class="btn-specs-toggle" type="button">
                                <span>Show Specifications</span> <i class="ri-arrow-down-s-line"></i>
                            </button>

                            <!-- Spec Table -->
                            <div class="card-specs-table">
                                <div class="specs-header d-flex justify-content-between">
                                    <span>Category</span>
                                    <span>Size</span>
                                    <span>Weight</span>
                                    <span>GSM</span>
                                </div>
                                <div class="specs-row d-flex justify-content-between">
                                    <span>Bath Towel</span>
                                    <span>70×140 cm</span>
                                    <span>270 g</span>
                                    <span>276</span>
                                </div>
                                <div class="specs-row d-flex justify-content-between">
                                    <span>Hand Towel</span>
                                    <span>50×90 cm</span>
                                    <span>140 g</span>
                                    <span>311</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Card 3 — Dark Cabana -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="240">
                        <a href="#" class="collection-card">
                            <div class="card-img-wrapper">
                                <span class="card-tag">Mixed Blend</span>
                                <img src="images/cat2/product3.jpg" alt="Dark Cabana — Mixed Blend">
                                <div class="card-btn"><span>View Details</span></div>
                            </div>
                            <h3 class="card-title">Dark Cabana</h3>
                            <p class="section-body card-desc">Premium cabana-striped cotton-polyester mixed towels,
                                designed to resist pool chlorine and retain softness across commercial washing.</p>

                            <!-- Toggle Button -->
                            <button class="btn-specs-toggle" type="button">
                                <span>Show Specifications</span> <i class="ri-arrow-down-s-line"></i>
                            </button>

                            <!-- Spec Table -->
                            <div class="card-specs-table">
                                <div class="specs-header d-flex justify-content-between">
                                    <span>Category</span>
                                    <span>Size</span>
                                    <span>Weight</span>
                                    <span>GSM</span>
                                </div>
                                <div class="specs-row d-flex justify-content-between">
                                    <span>Bath Towel</span>
                                    <span>70×140 cm</span>
                                    <span>270 g</span>
                                    <span>276</span>
                                </div>
                                <div class="specs-row d-flex justify-content-between">
                                    <span>Hand Towel</span>
                                    <span>50×90 cm</span>
                                    <span>140 g</span>
                                    <span>311</span>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <!-- ════════════════════════════════════════════════════ -->
        <!-- CATEGORY 3 — Multi-Stripe Towels                   -->
        <!-- ════════════════════════════════════════════════════ -->
        <section class="product-cat-section" id="cat-stripe">
            <div class="container">

                <div class="cat-header" data-aos="fade-up">
                    <div>
                        <div class="cat-meta">
                            <span class="cat-num">03</span>
                            <span class="cat-divider"></span>
                        </div>
                        <h2 class="cat-title">Multi-Stripe Towels</h2>
                    </div>
                    <a href="#" class="cat-view-all" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                        Request Quotation <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
                <div class="row">
                    <!-- Card 1 — Apple Stripe -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="80">
                        <a href="#" class="collection-card">
                            <div class="card-img-wrapper">
                                <span class="card-tag">Multi-Stripe</span>
                                <img src="images/cat3/product1.jpg" alt="Apple Stripe — Multi-Stripe">
                                <div class="card-btn"><span>View Details</span></div>
                            </div>
                            <h3 class="card-title">Apple Stripe</h3>
                            <p class="section-body card-desc">Beautifully striped cotton towels featuring rich apple
                                tones, high absorbent weave, and excellent loop stability.</p>

                            <!-- Toggle Button -->
                            <button class="btn-specs-toggle" type="button">
                                <span>Show Specifications</span> <i class="ri-arrow-down-s-line"></i>
                            </button>

                            <!-- Spec Table -->
                            <div class="card-specs-table">
                                <div class="specs-header d-flex justify-content-between">
                                    <span>Category</span>
                                    <span>Size</span>
                                    <span>Weight</span>
                                    <span>GSM</span>
                                </div>
                                <div class="specs-row d-flex justify-content-between">
                                    <span>Bath Towel</span>
                                    <span>70×140 cm</span>
                                    <span>400 g</span>
                                    <span>410</span>
                                </div>
                                <div class="specs-row d-flex justify-content-between">
                                    <span>Hand Towel</span>
                                    <span>50×90 cm</span>
                                    <span>200 g</span>
                                    <span>440</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Card 2 — Jewels -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="160">
                        <a href="#" class="collection-card">
                            <div class="card-img-wrapper">
                                <span class="card-tag">Multi-Stripe</span>
                                <img src="images/cat3/product2.jpg" alt="Jewels — Multi-Stripe">
                                <div class="card-btn"><span>View Details</span></div>
                            </div>
                            <h3 class="card-title">Jewels</h3>
                            <p class="section-body card-desc">Vibrant stripe patterns resembling rich jewel colors.
                                Crafted with double-stitched edges for institutional longevity.</p>

                            <!-- Toggle Button -->
                            <button class="btn-specs-toggle" type="button">
                                <span>Show Specifications</span> <i class="ri-arrow-down-s-line"></i>
                            </button>

                            <!-- Spec Table -->
                            <div class="card-specs-table">
                                <div class="specs-header d-flex justify-content-between">
                                    <span>Category</span>
                                    <span>Size</span>
                                    <span>Weight</span>
                                    <span>GSM</span>
                                </div>
                                <div class="specs-row d-flex justify-content-between">
                                    <span>Bath Towel</span>
                                    <span>70×140 cm</span>
                                    <span>400 g</span>
                                    <span>410</span>
                                </div>
                                <div class="specs-row d-flex justify-content-between">
                                    <span>Hand Towel</span>
                                    <span>50×90 cm</span>
                                    <span>200 g</span>
                                    <span>440</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Card 3 — Candy Stripe -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="240">
                        <a href="#" class="collection-card">
                            <div class="card-img-wrapper">
                                <span class="card-tag">Multi-Stripe</span>
                                <img src="images/cat3/product3.jpg" alt="Candy Stripe — Multi-Stripe">
                                <div class="card-btn"><span>View Details</span></div>
                            </div>
                            <h3 class="card-title">Candy Stripe</h3>
                            <p class="section-body card-desc">Classic retro candy-striped towels with high-absorbency
                                cotton loops. Ideal for retail, bath, and beach resort use.</p>

                            <!-- Toggle Button -->
                            <button class="btn-specs-toggle" type="button">
                                <span>Show Specifications</span> <i class="ri-arrow-down-s-line"></i>
                            </button>

                            <!-- Spec Table -->
                            <div class="card-specs-table">
                                <div class="specs-header d-flex justify-content-between">
                                    <span>Category</span>
                                    <span>Size</span>
                                    <span>Weight</span>
                                    <span>GSM</span>
                                </div>
                                <div class="specs-row d-flex justify-content-between">
                                    <span>Bath Towel</span>
                                    <span>70×140 cm</span>
                                    <span>400 g</span>
                                    <span>410</span>
                                </div>
                                <div class="specs-row d-flex justify-content-between">
                                    <span>Hand Towel</span>
                                    <span>50×90 cm</span>
                                    <span>200 g</span>
                                    <span>440</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ════════════════════════════════════════════════════ -->
        <!-- CATEGORY 4 — Kitchen Towels                        -->
        <!-- ════════════════════════════════════════════════════ -->
        <section class="product-cat-section" id="cat-kitchen">
            <div class="container">

                <div class="cat-header" data-aos="fade-up">
                    <div>
                        <div class="cat-meta">
                            <span class="cat-num">04</span>
                            <span class="cat-divider"></span>
                        </div>
                        <h2 class="cat-title">Kitchen Towels</h2>
                    </div>
                    <a href="#" class="cat-view-all" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                        Request Quotation <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

                <div class="row ">

                    <!-- Card 1 — Kitchen Towel -->
                    <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="80">
                        <a href="#" class="collection-card">
                            <div class="card-img-wrapper">
                                <span class="card-tag">Kitchen</span>
                                <img src="images/cat4/product1.jpg" alt="Kitchen Towel">
                                <div class="card-btn"><span>View Details</span></div>
                            </div>
                            <h3 class="card-title">Kitchen Towel</h3>
                            <p class="section-body card-desc">Highly absorbent checks kitchen towels, built for
                                commercial catering, restaurant usage, and retail bundles.</p>

                            <!-- Toggle Button -->
                            <button class="btn-specs-toggle" type="button">
                                <span>Show Specifications</span> <i class="ri-arrow-down-s-line"></i>
                            </button>

                            <!-- Spec Table -->
                            <div class="card-specs-table">
                                <div class="specs-header d-flex justify-content-between">
                                    <span>Category</span>
                                    <span>Size</span>
                                    <span>Weight</span>
                                    <span>GSM</span>
                                </div>
                                <div class="specs-row d-flex justify-content-between">
                                    <span>Kitchen Towel</span>
                                    <span>38×64 cm</span>
                                    <span>60 g</span>
                                    <span>250</span>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <!-- ════════════════════════════════════════════════════ -->
        <!-- CATEGORY 5 — Hotel Towels                          -->
        <!-- ════════════════════════════════════════════════════ -->
        <section class="product-cat-section" id="cat-hotel">
            <div class="container">

                <div class="cat-header" data-aos="fade-up">
                    <div>
                        <div class="cat-meta">
                            <span class="cat-num">05</span>
                            <span class="cat-divider"></span>
                        </div>
                        <h2 class="cat-title">Hotel Towels</h2>
                    </div>
                    <a href="#" class="cat-view-all" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                        Request Quotation <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

                <div class="row">

                    <!-- Card 1 — Hotel Towel -->
                    <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="80">
                        <a href="#" class="collection-card">
                            <div class="card-img-wrapper">
                                <span class="card-tag">Hotel Grade</span>
                                <img src="images/cat5/product1.jpg" alt="Hotel Towel">
                                <div class="card-btn"><span>View Details</span></div>
                            </div>
                            <h3 class="card-title">Hotel Towel</h3>
                            <p class="section-body card-desc">Pristine white hotel towels featuring double-dobby
                                borders, high durability, and fast-drying loops for 5-star hospitality.</p>

                            <!-- Toggle Button -->
                            <button class="btn-specs-toggle" type="button">
                                <span>Show Specifications</span> <i class="ri-arrow-down-s-line"></i>
                            </button>

                            <!-- Spec Table -->
                            <div class="card-specs-table">
                                <div class="specs-header d-flex justify-content-between">
                                    <span>Category</span>
                                    <span>Size</span>
                                    <span>Weight</span>
                                    <span>GSM</span>
                                </div>
                                <div class="specs-row d-flex justify-content-between">
                                    <span>Face Towel</span>
                                    <span>33×33 cm</span>
                                    <span>60 g</span>
                                    <span>550</span>
                                </div>
                                <div class="specs-row d-flex justify-content-between">
                                    <span>Hand Towel</span>
                                    <span>50×90 cm</span>
                                    <span>250 g</span>
                                    <span>550</span>
                                </div>
                                <div class="specs-row d-flex justify-content-between">
                                    <span>Bath Towel</span>
                                    <span>70×140 cm</span>
                                    <span>540 g</span>
                                    <span>550</span>
                                </div>
                                <div class="specs-row d-flex justify-content-between">
                                    <span>Bath Sheet</span>
                                    <span>80×160 cm</span>
                                    <span>705 g</span>
                                    <span>550</span>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <!-- ════════════════════════════════════════════════════ -->
        <!-- CATEGORY 6 — Beach Towels                          -->
        <!-- ════════════════════════════════════════════════════ -->
        <section class="product-cat-section" id="cat-beach">
            <div class="container">

                <div class="cat-header" data-aos="fade-up">
                    <div>
                        <div class="cat-meta">
                            <span class="cat-num">06</span>
                            <span class="cat-divider"></span>
                        </div>
                        <h2 class="cat-title">Beach Towels</h2>
                    </div>
                    <a href="#" class="cat-view-all" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                        Request Quotation <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

                <div class="row">

                    <!-- Card 1 — Beach Towel -->
                    <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="80">
                        <a href="#" class="collection-card">
                            <div class="card-img-wrapper">
                                <span class="card-tag">Beach</span>
                                <img src="images/cat6/product1.jpg" alt="Beach Towel">
                                <div class="card-btn"><span>View Details</span></div>
                            </div>
                            <h3 class="card-title">Beach Towel</h3>
                            <p class="section-body card-desc">Extra-soft, lint-free beach towels with sand-resistant
                                weave, vibrant reactive dyed stripe prints, and maximum comfort.</p>

                            <!-- Toggle Button -->
                            <button class="btn-specs-toggle" type="button">
                                <span>Show Specifications</span> <i class="ri-arrow-down-s-line"></i>
                            </button>

                            <!-- Spec Table -->
                            <div class="card-specs-table">
                                <div class="specs-header d-flex justify-content-between">
                                    <span>Category</span>
                                    <span>Size</span>
                                    <span>Weight</span>
                                    <span>GSM</span>
                                </div>
                                <div class="specs-row d-flex justify-content-between">
                                    <span>Beach Towel</span>
                                    <span>70×140 cm</span>
                                    <span>400 g</span>
                                    <span>408</span>
                                </div>
                                <div class="specs-row d-flex justify-content-between">
                                    <span>Beach Towel</span>
                                    <span>80×160 cm</span>
                                    <span>525 g</span>
                                    <span>408</span>
                                </div>
                                <div class="specs-row d-flex justify-content-between">
                                    <span>Beach Towel</span>
                                    <span>90×170 cm</span>
                                    <span>625 g</span>
                                    <span>408</span>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <!-- ════════════════════════════════════════════════════ -->
        <!-- CATEGORY 7 — Garments Collection                   -->
        <!-- ════════════════════════════════════════════════════ -->
        <section class="product-cat-section" id="cat-garments">
            <div class="container">

                <div class="cat-header" data-aos="fade-up">
                    <div>
                        <div class="cat-meta">
                            <span class="cat-num">07</span>
                            <span class="cat-divider"></span>
                        </div>
                        <h2 class="cat-title">Garments Collection</h2>
                    </div>
                    <a href="#" class="cat-view-all" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                        Request Quotation <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

                <div class="row">

                    <!-- Card 1 — Collar T-Shirt -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="80">
                        <a href="#" class="collection-card">
                            <div class="card-img-wrapper">
                                <span class="card-tag">Garments</span>
                                <img src="images/cat7/product1.jpg" alt="Collar T-Shirt">
                                <div class="card-btn"><span>View Details</span></div>
                            </div>
                            <h3 class="card-title">Collar T-Shirt</h3>
                            <p class="section-body card-desc">Premium polo collar t-shirts, designed with breathable
                                pique cotton fabric, excellent color fastness, and tailored fit.</p>

                            <!-- Toggle Button -->
                            <button class="btn-specs-toggle" type="button">
                                <span>Show Specifications</span> <i class="ri-arrow-down-s-line"></i>
                            </button>

                            <!-- Spec Table -->
                            <div class="card-specs-table">
                                <div class="specs-header d-flex justify-content-between">
                                    <span>Sizes</span>
                                    <span>Colors</span>
                                    <span>Design</span>
                                </div>
                                <div class="specs-row d-flex justify-content-between">
                                    <span>M to 2XL</span>
                                    <span>6</span>
                                    <span>Plain & Printed</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Card 2 — Lurex Ladies Dress -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="160">
                        <a href="#" class="collection-card">
                            <div class="card-img-wrapper">
                                <span class="card-tag">Garments</span>
                                <img src="images/cat7/product2.jpg" alt="Lurex Ladies Dress">
                                <div class="card-btn"><span>View Details</span></div>
                            </div>
                            <h3 class="card-title">Lurex Ladies Dress</h3>
                            <p class="section-body card-desc">Elegant ladies dress in high-grade Lurex fabric, featuring
                                subtle metallic threads, soft drape, and comfortable inner lining.</p>

                            <!-- Toggle Button -->
                            <button class="btn-specs-toggle" type="button">
                                <span>Show Specifications</span> <i class="ri-arrow-down-s-line"></i>
                            </button>

                            <!-- Spec Table -->
                            <div class="card-specs-table">
                                <div class="specs-header d-flex justify-content-between">
                                    <span>Sizes</span>
                                    <span>Colors</span>
                                    <span>Design</span>
                                </div>
                                <div class="specs-row d-flex justify-content-between">
                                    <span>M to 2XL</span>
                                    <span>3</span>
                                    <span>Multiple</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Card 3 — Trousers -->
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="240">
                        <a href="#" class="collection-card">
                            <div class="card-img-wrapper">
                                <span class="card-tag">Garments</span>
                                <img src="images/cat7/product3.jpg" alt="Trousers">
                                <div class="card-btn"><span>View Details</span></div>
                            </div>
                            <h3 class="card-title">Trousers</h3>
                            <p class="section-body card-desc">Expertly tailored formal and semi-formal trousers,
                                featuring premium plain texture, durable crease resistance, and rich color dye.</p>

                            <!-- Toggle Button -->
                            <button class="btn-specs-toggle" type="button">
                                <span>Show Specifications</span> <i class="ri-arrow-down-s-line"></i>
                            </button>

                            <!-- Spec Table -->
                            <div class="card-specs-table">
                                <div class="specs-header d-flex justify-content-between">
                                    <span>Sizes</span>
                                    <span>Colors</span>
                                    <span>Design</span>
                                </div>
                                <div class="specs-row d-flex justify-content-between">
                                    <span>30 to 38</span>
                                    <span>6</span>
                                    <span>Premium Plain</span>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>

    </main>

    

@endsection

@section('js')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/intlTelInput.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
<!-- Products page filter scroll logic -->
    <script>
        // Smooth scroll for category filter buttons
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                // Update active state
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('is-active'));
                btn.classList.add('is-active');
                // Scroll to target section
                const target = document.getElementById(btn.dataset.target);
                if (target) {
                    const offset = 140; // navbar + filter bar height
                    const top = target.getBoundingClientRect().top + window.scrollY - offset;
                    window.scrollTo({ top, behavior: 'smooth' });
                }
            });
        });

        // Highlight active filter based on scroll position
        const sections = document.querySelectorAll('.product-cat-section');
        const filterBtns = document.querySelectorAll('.filter-btn');
        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(sec => {
                const top = sec.getBoundingClientRect().top;
                if (top < 200) current = sec.id;
            });
            filterBtns.forEach(btn => {
                btn.classList.toggle('is-active', btn.dataset.target === current);
            });
        }, { passive: true });

        // Enquiry Modal Form Logic
        document.addEventListener('DOMContentLoaded', () => {
            const phoneInputEl = document.querySelector("#modal-phone");
            const countrySelectEl = document.querySelector("#modal-country");

            // Initialize intl-tel-input
            let iti = null;
            if (phoneInputEl) {
                iti = window.intlTelInput(phoneInputEl, {
                    initialCountry: "auto",
                    geoIpLookup: callback => {
                        fetch("https://ipapi.co/json")
                            .then(res => res.json())
                            .then(data => callback(data.country_code))
                            .catch(() => callback("in")); // Fallback to India
                    },
                    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/utils.js"
                });
            }

            // Country list for Choices.js dropdown populating
            const countryList = @json($countries->map(fn($c) => ['name' => ucwords(strtolower($c->country)), 'code' => $c->iso])->values()->all());

            let choicesInstance = null;
            if (countrySelectEl) {
                countryList.forEach(country => {
                    const opt = document.createElement("option");
                    opt.value = country.name;
                    opt.textContent = country.name;
                    countrySelectEl.appendChild(opt);
                });

                // Initialize Choices.js
                choicesInstance = new Choices(countrySelectEl, {
                    searchEnabled: true,
                    itemSelectText: '',
                    shouldSort: false,
                    placeholder: true,
                    placeholderValue: "Select your country"
                });
            }

            // Sync phone flag with country selector when country changes
            countrySelectEl?.addEventListener('change', (e) => {
                const selectedCountryName = e.target.value;
                const match = countryList.find(c => c.name === selectedCountryName);
                if (match && iti) {
                    iti.setCountry(match.code.toLowerCase());
                }
            });

            // Sync country selector with phone flag when flag changes
            phoneInputEl?.addEventListener('countrychange', () => {
                if (iti && choicesInstance) {
                    const countryData = iti.getSelectedCountryData();
                    if (countryData && countryData.iso2) {
                        const match = countryList.find(c => c.code.toLowerCase() === countryData.iso2.toLowerCase());
                        if (match) {
                            choicesInstance.setChoiceByValue(match.name);
                        }
                    }
                }
            });

            // Map product category section titles to checkbox values
            const categoryMap = {
                "Cotton Terry Towels": "Cotton Terry Towels",
                "Cotton & Polyester Mixed Towels": "Mixed Towels",
                "Multi-Stripe Towels": "Multi-Stripe Towels",
                "Kitchen Towels": "Kitchen Towels",
                "Hotel Towels": "Hotel Towels",
                "Beach Towels": "Beach Towels",
                "Garments Collection": "Garments"
            };

            // Intercept click on Enquirey Now buttons to check the correct checkbox card
            document.querySelectorAll('.cat-view-all').forEach(btn => {
                btn.addEventListener('click', () => {
                    const section = btn.closest('.product-cat-section');
                    if (section) {
                        const titleEl = section.querySelector('.cat-title');
                        if (titleEl) {
                            const catTitle = titleEl.textContent.trim();
                            const mappedValue = categoryMap[catTitle] || catTitle;

                            // Reset checkboxes
                            document.querySelectorAll('#modalExportForm input[name="categories[]"]').forEach(cb => {
                                cb.checked = false;
                                const wrapper = cb.closest('.col-sm-6');
                                if (wrapper) {
                                    wrapper.style.setProperty('display', 'none', 'important');
                                }
                            });

                            // Select the targeted category
                            const matchCheckbox = Array.from(document.querySelectorAll('#modalExportForm input[name="categories[]"]'))
                                .find(cb => cb.value.toLowerCase() === mappedValue.toLowerCase());
                            if (matchCheckbox) {
                                matchCheckbox.checked = true;
                                const wrapper = matchCheckbox.closest('.col-sm-6');
                                if (wrapper) {
                                    wrapper.style.setProperty('display', 'block', 'important');
                                }
                            }
                        }
                    }
                });
            });

            // Submit logic
            const form = document.getElementById("modalExportForm");
            form?.addEventListener('submit', (e) => {
                const checkedCats = [];
                document.querySelectorAll('#modalExportForm input[name="categories[]"]:checked').forEach(cb => {
                    checkedCats.push(cb.value);
                });

                if (checkedCats.length === 0) {
                    e.preventDefault();
                    alert("Please select at least one product category of interest.");
                    return;
                }
            });
        });
    </script>

    <!-- Floating Brochure Notice Popup -->
    <div class="brochure-popup" id="brochurePopup">
        <button class="brochure-popup-close" id="closeBrochurePopup" aria-label="Close popup">
            <i class="ri-close-line"></i>
        </button>
        <div class="brochure-popup-content">
            <div class="brochure-popup-icon">
                <i class="ri-file-text-line"></i>
            </div>
            <div>
                <h4 class="brochure-popup-title">Download Complete Product Catalogue</h4>
                <p class="brochure-popup-text">We have displayed only our primary collections here. To explore all of
                    our product specifications, GSM, sizes, colours, OEM and private label options, please download our
                    full product brochure.</p>

            </div>
        </div>
    </div>

    <!-- Enquiry Modal -->
    <div class="modal fade enquiry-modal" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content border-0">
                <div class="modal-header border-0 pb-0">
                    <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ri-close-line"></i>
                    </button>
                </div>
                <div class="modal-body p-4 p-md-5 pt-0">
                    <div class="contact-form-wrapper border-0 shadow-none p-0">
                        <h3 class="form-title mb-2" id="enquiryModalLabel">Request a Quote</h3>
                        <p class="form-subtitle mb-4">Complete the fields below to request details, custom
                            specifications, or a product brochure.</p>

                        <form method="POST" action="{{ route('contactPost') }}" class="contact-form" id="modalExportForm">
                            @csrf
                            <input type="hidden" name="source" value="listing_page">
                            <div class="row g-4">

                                <!-- Name Field -->
                                <div class="col-md-6">
                                    <div class="form-group-custom">
                                        <label for="modal-name" class="form-label-custom">Full Name</label>
                                        <input type="text" id="modal-name" name="name" class="form-control-custom"
                                            placeholder="e.g. John Doe" required>
                                    </div>
                                </div>

                                <!-- Email Field -->
                                <div class="col-md-6">
                                    <div class="form-group-custom">
                                        <label for="modal-email" class="form-label-custom">Corporate Email</label>
                                        <input type="email" id="modal-email" name="email" class="form-control-custom"
                                            placeholder="e.g. name@company.com" required>
                                    </div>
                                </div>

                                <!-- Phone Field (using intl-tel-input) -->
                                <div class="col-md-6">
                                    <div class="form-group-custom">
                                        <label for="modal-phone" class="form-label-custom">Phone Number</label>
                                        <input type="tel" id="modal-phone" name="phone" class="form-control-custom w-100" required>
                                    </div>
                                </div>

                                <!-- Country Dropdown -->
                                <div class="col-md-6">
                                    <div class="form-group-custom">
                                        <label for="modal-country" class="form-label-custom">Country</label>
                                        <select id="modal-country" name="country" class="form-select-custom" required>
                                            <option value="" disabled selected>Select your country</option>
                                            <!-- Populated dynamically via JS -->
                                        </select>
                                    </div>
                                </div>

                                <!-- Business Profile Dropdown -->
                                <div class="col-md-6">
                                    <div class="form-group-custom">
                                        <label for="modal-businessType" class="form-label-custom">Business
                                            Profile</label>
                                        <select id="modal-businessType" name="business_type" class="form-select-custom" required>
                                            <option value="" disabled selected>Select business profile...</option>
                                            <option value="Importer">Importer</option>
                                            <option value="Distributor">Distributor</option>
                                            <option value="Wholesaler">Wholesaler</option>
                                            <option value="Retail Chain">Retail Chain</option>
                                            <option value="Buying House">Buying House</option>
                                            <option value="Hotel">Hotel</option>
                                            <option value="Brand Owner">Brand Owner</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Estimated Order Quantity Field -->
                                <div class="col-md-6">
                                    <div class="form-group-custom">
                                        <label for="modal-orderQuantity" class="form-label-custom">Estimated Order
                                            Quantity</label>
                                        <select id="modal-orderQuantity" name="order_quantity" class="form-select-custom" required>
                                            <option value="" disabled selected>Select estimated order...</option>
                                            <option value="Sample Order">Sample Order</option>
                                            <option value="20ft Container">20ft Container</option>
                                            <option value="40ft Container">40ft Container</option>
                                            <option value="Multiple Containers">Multiple Containers</option>
                                            <option value="LCL / Trial Order">LCL / Trial Order</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Categories checkboxes (7 Categories) -->
                                <div class="col-12">
                                    <div class="form-group-custom">
                                        <label class="form-label-custom mb-3">Product Categories of Interest:</label>
                                        <div class="row g-2">

                                            <div class="col-sm-6">
                                                <label class="checkbox-card-label">
                                                    <input type="checkbox" name="categories[]" value="Cotton Terry Towels"
                                                        class="checkbox-card-input">
                                                    <span class="checkbox-card-content">
                                                        <span class="checkbox-card-icon"><i
                                                                class="ri-check-line"></i></span>
                                                        <span class="checkbox-card-text">Cotton Terry Towels</span>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="col-sm-6">
                                                <label class="checkbox-card-label">
                                                    <input type="checkbox" name="categories[]" value="Mixed Towels"
                                                        class="checkbox-card-input">
                                                    <span class="checkbox-card-content">
                                                        <span class="checkbox-card-icon"><i
                                                                class="ri-check-line"></i></span>
                                                        <span class="checkbox-card-text">Mixed Towels</span>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="col-sm-6">
                                                <label class="checkbox-card-label">
                                                    <input type="checkbox" name="categories[]" value="Multi-Stripe Towels"
                                                        class="checkbox-card-input">
                                                    <span class="checkbox-card-content">
                                                        <span class="checkbox-card-icon"><i
                                                                class="ri-check-line"></i></span>
                                                        <span class="checkbox-card-text">Multi-Stripe Towels</span>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="col-sm-6">
                                                <label class="checkbox-card-label">
                                                    <input type="checkbox" name="categories[]" value="Kitchen Towels"
                                                        class="checkbox-card-input">
                                                    <span class="checkbox-card-content">
                                                        <span class="checkbox-card-icon"><i
                                                                class="ri-check-line"></i></span>
                                                        <span class="checkbox-card-text">Kitchen Towels</span>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="col-sm-6">
                                                <label class="checkbox-card-label">
                                                    <input type="checkbox" name="categories[]" value="Hotel Towels"
                                                        class="checkbox-card-input">
                                                    <span class="checkbox-card-content">
                                                        <span class="checkbox-card-icon"><i
                                                                class="ri-check-line"></i></span>
                                                        <span class="checkbox-card-text">Hotel Towels</span>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="col-sm-6">
                                                <label class="checkbox-card-label">
                                                    <input type="checkbox" name="categories[]" value="Beach Towels"
                                                        class="checkbox-card-input">
                                                    <span class="checkbox-card-content">
                                                        <span class="checkbox-card-icon"><i
                                                                class="ri-check-line"></i></span>
                                                        <span class="checkbox-card-text">Beach Towels</span>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="col-sm-6">
                                                <label class="checkbox-card-label">
                                                    <input type="checkbox" name="categories[]" value="Garments"
                                                        class="checkbox-card-input">
                                                    <span class="checkbox-card-content">
                                                        <span class="checkbox-card-icon"><i
                                                                class="ri-check-line"></i></span>
                                                        <span class="checkbox-card-text">Garments Collection</span>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="col-sm-6">
                                                <label class="checkbox-card-label">
                                                    <input type="checkbox" name="categories[]" value="All Products"
                                                        class="checkbox-card-input">
                                                    <span class="checkbox-card-content">
                                                        <span class="checkbox-card-icon"><i
                                                                class="ri-check-line"></i></span>
                                                        <span class="checkbox-card-text">All Products</span>
                                                    </span>
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- Message Field -->
                                <div class="col-12">
                                    <div class="form-group-custom">
                                        <label for="modal-message" class="form-label-custom">Message / Custom
                                            Requirements</label>
                                        <textarea id="modal-message" name="message" rows="4" class="form-control-custom"
                                            placeholder="Please specify target volume, sizes, custom GSM, or design requirements..."
                                            required></textarea>
                                    </div>
                                </div>

                                <!-- Google ReCaptcha -->
                                <div class="col-12">
                                    <div class="mb-3">
                                        <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12 mt-4 text-center">
                                    <button type="submit" class="btn-accent px-5 py-2.5 mb-3"
                                        style="font-size: 0.95rem;">Send Export Enquiry</button>
                                    <div>
                                        <span class="form-response-note">
                                            <i class="ri-time-line"></i> We respond to all business enquiries within 24
                                            working hours.
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ── Floating Action Buttons ───────────────────────── -->
    <div class="floating-actions">
        <a href="images/pdf/brochure.pdf" download class="floating-btn brochure-btn" id="downloadBrochureBtn"
            title="Download Brochure">
            <i class="ri-download-2-line"></i>
            <span>Catalouge</span>
        </a>
        <a href="https://wa.me/919004711558" target="_blank" rel="noopener" class="floating-btn whatsapp-btn"
            id="whatsappFloatBtn" title="Chat on WhatsApp">
            <i class="ri-whatsapp-line"></i>
        </a>
    </div>


@endsection

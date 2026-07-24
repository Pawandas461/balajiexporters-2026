@extends('layouts.front')
@section('content')
<!-- ── Page Hero ──────────────────────────────────────── -->
        <section class="page-hero product-page-hero">

            <div class="page-hero-bg" style="background-image: url('{{ asset('images/banner/2.png') }}');">
            </div>
            <div class="page-hero-overlay"></div>

            <div class="container">
                <div class="row">
                    <div class="col-12 hero-content">

                        <div class="page-breadcrumb" data-aos="fade-up">
                            <a href="{{ route('home') }}">Home</a>
                            <span class="sep">/</span>
                            <span class="current">Products</span>
                        </div>

                        <h1 class="page-hero-title" data-aos="fade-up" data-aos-delay="80">
                            Seven Categories,<br>One Trusted Partner.
                        </h1>

                        <!-- Button + Subtitle side by side -->
                        <div class="hero-bottom-row" data-aos="fade-up" data-aos-delay="180">
                            <a href="{{ route('contact') }}" class="btn-accent flex-shrink-0">Request a Catalogue</a>
                            <p class="page-hero-subtitle">
                                From premium cotton towels and hotel linens to custom garments — explore our
                                complete export-ready product range sourced from India's finest manufacturers.
                            </p>
                        </div>

                    </div>
                </div>
            </div>

        </section>


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
                                <img src="{{ asset('images/cat1/product1.jpg') }}" alt="Towel Rose — Cotton Terry">
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
                                <img src="{{ asset('images/cat1/product2.jpg') }}" alt="Towel Eventx — Cotton Terry">
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
                                <img src="{{ asset('images/cat1/product3.jpg') }}" alt="Towel Brave — Cotton Terry">
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
                                <img src="{{ asset('images/cat2/product1.jpg') }}" alt="Towel Waves — Mixed Blend">
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
                                <img src="{{ asset('images/cat2/product2.jpg') }}" alt="Dark Polo — Mixed Blend">
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
                                <img src="{{ asset('images/cat2/product3.jpg') }}" alt="Dark Cabana — Mixed Blend">
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
                                <img src="{{ asset('images/cat3/product1.jpg') }}" alt="Apple Stripe — Multi-Stripe">
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
                                <img src="{{ asset('images/cat3/product2.jpg') }}" alt="Jewels — Multi-Stripe">
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
                                <img src="{{ asset('images/cat3/product3.jpg') }}" alt="Candy Stripe — Multi-Stripe">
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
                                <img src="{{ asset('images/cat4/product1.jpg') }}" alt="Kitchen Towel">
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
                                <img src="{{ asset('images/cat5/product1.jpg') }}" alt="Hotel Towel">
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
                                <img src="{{ asset('images/cat6/product1.jpg') }}" alt="Beach Towel">
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
                                <img src="{{ asset('images/cat7/product1.jpg') }}" alt="Collar T-Shirt">
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
                                <img src="{{ asset('images/cat7/product2.jpg') }}" alt="Lurex Ladies Dress">
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
                                <img src="{{ asset('images/cat7/product3.jpg') }}" alt="Trousers">
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
@endsection

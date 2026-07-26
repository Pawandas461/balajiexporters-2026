<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Balaji Garments — Delivering quality, consistency and trust with internationally accepted manufacturer sourcing standards.">
    <meta name="keywords"
        content="Balaji Garments, garments export, towels, garments, Indian manufacturers, quality fabrics">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.balajiexporter.com/">
    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Balaji Garments – Premium Garments Exporter">
    <meta property="og:description"
        content="Balaji Garments provides high‑quality towels and garments sourced from India with over 25 years of experience.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.balajiexporter.com/">
    <meta property="og:image" content="https://www.balajiexporter.com/images/og-image.jpg">
    <meta property="og:site_name" content="Balaji Garments">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Balaji Garments – Premium garments Exporter">
    <meta name="twitter:description"
        content="Balaji Garments provides high‑quality towels and garments sourced from India with over 25 years of experience.">
    <meta name="twitter:image" content="https://www.balajiexporter.com/images/og-image.jpg">
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Balaji Garments",
      "url": "https://www.balajiexporter.com",
      "logo": "https://www.balajiexporter.com/images/logo.png",
      "sameAs": [
        "https://www.facebook.com/balajiexporter25/",
        "https://www.instagram.com/balajigarment_exports/"
      ],
      "contactPoint": [{
        "@type": "ContactPoint",
        "telephone": "+91 9004711558",
        "contactType": "Customer Service"
      }]
    }
    </script>
    <title>Balaji Garments – Premium Garments Exporter</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Remix Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.9.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- Swiper CSS (CDN) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- AOS CSS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    @yield('css')
</head>

<body class="@yield('body_class')">

    <header class="site-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <!-- Logo -->
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="Balaji Garments" class="navbar-logo">
                </a>

                <!-- Mobile Toggle -->
                <button class="navbar-toggler border-0 shadow-none d-lg-none" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <i class="ri-menu-3-line"></i>
                </button>

                <!-- Desktop Menu -->
                <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('listing') ? 'active' : '' }}" href="{{ route('listing') }}">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                        </li>
                        <li class="nav-item ms-lg-3">
                            <a class="btn-accent" href="{{ route('contact') }}">Enquiry Now</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- Offcanvas Mobile Nav -->
    <div class="offcanvas offcanvas-end mobile-nav" tabindex="-1" id="offcanvasNavbar">
        <div class="offcanvas-header px-4 pt-4 pb-3">
            <a href="index.html" class="offcanvas-brand text-decoration-none">Balaji Garments</a>
            <button type="button" class="mobile-nav-close" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="ri-close-line"></i>
            </button>
        </div>
        <div class="offcanvas-body px-4 pt-2 pb-4">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('listing') ? 'active' : '' }}" href="{{ route('listing') }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
            <a class="btn-accent" href="{{ route('contact') }}">Enquiry Now</a>
        </div>
    </div>

    <main>
        @yield('content')

    </main>

    <!-- ── Final CTA ───────────────────────────────────────────── -->
    <section class="final-cta-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
                    <h2 class="cta-heading">Ready to Source<br>From India?</h2>
                </div>
                <div class="col-lg-5 offset-lg-1 cta-text-wrapper" data-aos="fade-up" data-aos-delay="150">
                    <p class="cta-text">Tell us your product requirements and we'll connect you with the right
                        manufacturer, manage the entire process, and deliver quality goods to your door.</p>
                    <div>
                        <a href="{{ route('contact') }}" class="btn-accent">Send an Enquiry</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Footer ──────────────────────────────────────────────── -->
    <footer class="main-footer-wrap">
        <div class="main-footer py-0">
            <div class="container">
                <div class="row justify-content-between py-5 g-4">

                    <!-- Brand info -->
                    <div class="col-lg-4 mb-4 mb-lg-0" data-aos="fade-up">
                        <h3 class="footer-brand">Balaji Garments</h3>
                        <p class="footer-desc">Founded On The Principles Of Quality And Reliability, Balaji Exports Has
                            Established Itself As A Leading Merchant Exporter From India.</p>

                        <div class="footer-contact-info">
                            <p><i class="ri-map-pin-2-line"></i> 1411, Signature Business Park, Chembur, Mumbai,
                                Maharashtra</p>
                            <p><i class="ri-phone-line"></i> <a href="tel:+919004711558">+919004711558</a></p>
                            <p><i class="ri-mail-line"></i> <a
                                    href="mailto:mahesh@balajiexporter.com">mahesh@balajiexporter.com</a></p>
                        </div>

                        <div class="footer-socials pt-4">
                            <a href="https://www.facebook.com/balajigarments25" target="_blank" rel="noopener"><i
                                    class="ri-facebook-fill"></i></a>
                            <span class="social-divider">|</span>
                            <a href="https://www.instagram.com/balajigarment_exports/" target="_blank" rel="noopener"><i
                                    class="ri-instagram-line"></i></a>
                            <span class="social-divider">|</span>
                            <a href="https://www.linkedin.com/company/balaji-garmentsindia/" target="_blank"
                                rel="noopener"><i class="ri-linkedin-line"></i></a>
                        </div>
                    </div>

                    <!-- Links -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="150">
                        <div class="row g-4">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <h3 class="footer-title">Navigation</h3>
                                <ul class="footer-links">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('about') }}">About</a></li>
                                    <li><a href="{{ route('services') }}">Services</a></li>
                                    <li><a href="{{ route('listing') }}">Products</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <h3 class="footer-title">Utility Page</h3>
                                <ul class="footer-links">
                                    <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom text-center pb-5 mb-5">
            <div class="container">
                <p class="copyright-text">Copyright &copy; 2026 &ndash; Balaji Garments &ndash; All Rights Reserved</p>
            </div>
            <div class="footer-watermark">Balaji Garments</div>
        </div>
    </footer>

    <!-- WhatsApp Enquiry Modal -->
<div class="modal fade" id="whatsappModal" tabindex="-1" aria-labelledby="whatsappModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="whatsappModalLabel">
                    <i class="ri-whatsapp-fill me-2"></i>Enquire via WhatsApp
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="whatsappForm">
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label fw-semibold">Full Name *</label>
                            <input type="text" name="name" class="form-control" required placeholder="John Doe">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label fw-semibold">Email *</label>
                            <input type="email" name="email" class="form-control" required placeholder="john@example.com">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label fw-semibold">Phone *</label>
                            <input type="text" name="phone" class="form-control" required placeholder="+91 98765 43210">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label fw-semibold">Location / City *</label>
                            <input type="text" name="location" class="form-control" required placeholder="Kolkata">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label fw-semibold">Country *</label>
                            <input type="text" name="country" class="form-control" required placeholder="India">
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Subject *</label>
                            <input type="text" name="subject" class="form-control" required placeholder="Export requirements, pricing...">
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Message *</label>
                            <textarea name="message" class="form-control" rows="4" required placeholder="Type your specific enquiry here..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" id="whatsappSubmitBtn" class="btn btn-success px-4">
                        Start Chat <i class="ri-arrow-right-line ms-1"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

    @if (Session::has('global'))
        <script>
            $(document).ready(function() {
                new Noty({
                    @if (Session::get('type') == 'warning')
                        type: 'warning',
                    @elseif (Session::get('type') == 'danger')
                        type: 'error',
                    @elseif (Session::get('type') == 'success')
                        type: 'success',
                    @else
                        type: 'info',
                    @endif
                    theme: 'sunset',
                    layout: 'bottomCenter',
                    text: '{{ Session::get('global') }}',
                    timeout: 1000
                }).show();
            });
        </script>
    @endif

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="{{ asset('js/notify.min.js') }}"></script>

    <!-- Bootstrap JS (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Swiper JS (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- AOS JS (Animate On Scroll) -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <!-- GSAP for scroll animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/main.js') }}"></script>

    @yield('js')

    <script>
    $(document).ready(function() {
        $("#whatsappForm").on("submit", function(e) {
            e.preventDefault();

            let $form = $(this);
            let $btn = $("#whatsappSubmitBtn");

            // Prevent duplicate request submission spam
            if ($btn.prop("disabled")) {
                return;
            }

            // Visual loading state indicators
            let originalText = $btn.html();
            $btn.prop("disabled", true).html('<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Connecting...');

            // Dynamically gather values from form input targets
            let formData = {
                _token: "{{ csrf_token() }}",
                name: $form.find('input[name="name"]').val(),
                email: $form.find('input[name="email"]').val(),
                phone: $form.find('input[name="phone"]').val(),
                location: $form.find('input[name="location"]').val(),
                country: $form.find('input[name="country"]').val(),
                subject: $form.find('input[name="subject"]').val(),
                message: $form.find('textarea[name="message"]').val()
            };

            $.post("{{ route('whatsapp') }}", formData)
                .done(function(response) {
                    if (response.status && response.url) {
                        // Reset form fields and dismiss the modal layout window
                        $form[0].reset();
                        $('#whatsappModal').modal('hide');
                        
                        // Open the generated WhatsApp link structure context directly
                        window.open(response.url, '_blank');
                    }
                })
                .fail(function(xhr) {
                    console.error("Submission error details:", xhr.responseText);
                    alert("Something went wrong while processing your enquiry. Please check form constraints and try again.");
                })
                .always(function() {
                    // Restore active interactive button component properties
                    $btn.prop("disabled", false).html(originalText);
                });
        });
    });
</script>

    <!-- ── Floating Action Buttons ───────────────────────── -->
    <div class="floating-actions">
        <a href="{{ asset('images/pdf/brochure.pdf') }}" download class="floating-btn brochure-btn" id="downloadBrochureBtn"
            title="Download Brochure">
            <i class="ri-download-2-line"></i>
            <span>Catalouge</span>
        </a>
        <a href="#" id="whatsapp" data-bs-toggle="modal" data-bs-target="#whatsappModal" target="_blank" rel="noopener" class="floating-btn whatsapp-btn"
            id="whatsappFloatBtn" title="Chat on WhatsApp">
            <i class="ri-whatsapp-line"></i>
        </a>
    </div>

</body>

</html>

import re

layout_path = r"c:\Freelance\Balaji_Exports_Full\resources\views\layouts\front.blade.php"
with open(layout_path, "r", encoding="utf-8") as f:
    content = f.read()

# 1. Update active states in Navbar (Desktop)
# Instead of regex, I'll just do simple string replacements for the nav items.
old_nav = """
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('services') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('listing') }}">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>
"""
new_nav = """
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
"""
content = content.replace(old_nav.strip(), new_nav.strip())

# Update active states in Mobile Nav
old_mobile_nav = """
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('services') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('listing') }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
"""
new_mobile_nav = """
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
"""
content = content.replace(old_mobile_nav.strip(), new_mobile_nav.strip())

# Update Final CTA and Footer
cta_footer_regex = r"<!-- Final CTA Section -->.*?</footer>"
new_cta_footer = """<!-- ── Final CTA ───────────────────────────────────────────── -->
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
                            <a href="https://www.facebook.com/balajiexporter25/" target="_blank" rel="noopener"><i
                                    class="ri-facebook-fill"></i></a>
                            <span class="social-divider">|</span>
                            <a href="https://www.instagram.com/balajigarment_exports/" target="_blank" rel="noopener"><i
                                    class="ri-instagram-line"></i></a>
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
                                    <li><a href="#">Privacy Policy</a></li>
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
    </footer>"""
content = re.sub(cta_footer_regex, new_cta_footer, content, flags=re.DOTALL)


# Add floating actions before </body>
floating_actions = """    <!-- ── Floating Action Buttons ───────────────────────── -->
    <div class="floating-actions">
        <a href="{{ asset('images/pdf/brochure.pdf') }}" download class="floating-btn brochure-btn" id="downloadBrochureBtn"
            title="Download Brochure">
            <i class="ri-download-2-line"></i>
            <span>Catalouge</span>
        </a>
        <a href="https://wa.me/919004711558" target="_blank" rel="noopener" class="floating-btn whatsapp-btn"
            id="whatsappFloatBtn" title="Chat on WhatsApp">
            <i class="ri-whatsapp-line"></i>
        </a>
    </div>

</body>"""
content = content.replace("</body>", floating_actions)

with open(layout_path, "w", encoding="utf-8") as f:
    f.write(content)
print("Updated layouts/front.blade.php successfully.")

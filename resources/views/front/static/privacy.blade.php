@extends('layouts.front')

@section('css')
<style>

        /* ── Privacy Page Specific Styles ─────────────────────── */
        .privacy-hero {
            background: linear-gradient(135deg, var(--primary-color, #06192C) 0%, #0d2d4d 60%, #06192C 100%);
            padding: 100px 0 60px;
            position: relative;
            overflow: hidden;
        }

        .privacy-hero::after {
            content: '';
            position: absolute;
            right: -60px;
            top: -60px;
            width: 380px;
            height: 380px;
            border-radius: 50%;
            background: rgba(239, 57, 67, 0.06);
            pointer-events: none;
        }

        .privacy-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(239, 57, 67, 0.12);
            border: 1px solid rgba(239, 57, 67, 0.3);
            color: #EF3943;
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            padding: 6px 16px;
            border-radius: 30px;
            margin-bottom: 20px;
        }

        .privacy-hero h1 {
            font-size: clamp(2rem, 5vw, 3.2rem);
            font-weight: 800;
            color: #fff;
            line-height: 1.15;
            margin-bottom: 16px;
        }

        .privacy-hero h1 span {
            color: #EF3943;
        }

        .privacy-hero p {
            color: rgba(255, 255, 255, 0.65);
            font-size: 1rem;
            max-width: 520px;
        }

        .privacy-meta {
            margin-top: 28px;
            display: flex;
            align-items: center;
            gap: 24px;
            flex-wrap: wrap;
        }

        .privacy-meta-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.82rem;
            color: rgba(255, 255, 255, 0.5);
        }

        .privacy-meta-item i {
            color: #EF3943;
            font-size: 1rem;
        }

        /* ── TOC Sidebar ──────────────────────────────────────── */
        .privacy-body {
            padding: 64px 0 80px;
        }

        .privacy-toc {
            position: sticky;
            top: 90px;
            background: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 24px;
        }

        .privacy-toc h4 {
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: #6b7280;
            margin-bottom: 14px;
        }

        .toc-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .toc-list a {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.84rem;
            color: #374151;
            text-decoration: none;
            padding: 6px 8px;
            border-radius: 6px;
            font-weight: 500;
            transition: all 0.18s;
            line-height: 1.4;
        }

        .toc-list a::before {
            content: '';
            width: 5px;
            height: 5px;
            background: #EF3943;
            border-radius: 50%;
            flex-shrink: 0;
        }

        .toc-list a:hover {
            background: #fff;
            color: #EF3943;
        }

        /* ── Policy Content ───────────────────────────────────── */
        .policy-section {
            margin-bottom: 48px;
            scroll-margin-top: 100px;
        }

        .policy-section-number {
            display: inline-block;
            background: #EF3943;
            color: #fff;
            font-size: 0.7rem;
            font-weight: 700;
            padding: 3px 10px;
            border-radius: 20px;
            margin-bottom: 10px;
            letter-spacing: 0.08em;
        }

        .policy-section h2 {
            font-size: 1.4rem;
            font-weight: 800;
            color: #06192C;
            margin-bottom: 14px;
            line-height: 1.25;
        }

        .policy-section p {
            color: #374151;
            font-size: 0.94rem;
            line-height: 1.8;
            margin-bottom: 14px;
        }

        .policy-section ul,
        .policy-section ol {
            padding-left: 0;
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 8px;
            margin-bottom: 16px;
        }

        .policy-section li {
            color: #374151;
            font-size: 0.94rem;
            line-height: 1.7;
            padding-left: 22px;
            position: relative;
        }

        .policy-section li::before {
            content: '';
            position: absolute;
            left: 0;
            top: 10px;
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #EF3943;
        }

        .policy-section a {
            color: #EF3943;
            text-decoration: underline;
            text-underline-offset: 2px;
        }

        .policy-section a:hover {
            color: #d42e38;
        }

        .policy-divider {
            border: none;
            border-top: 1px solid #e5e7eb;
            margin: 48px 0;
        }

        .policy-highlight-box {
            background: #fff8f8;
            border-left: 4px solid #EF3943;
            border-radius: 0 8px 8px 0;
            padding: 16px 20px;
            margin: 20px 0;
        }

        .policy-highlight-box p {
            margin: 0;
            font-size: 0.9rem;
            color: #374151;
        }

        .policy-contact-card {
            background: linear-gradient(135deg, #06192C, #0d2d4d);
            border-radius: 14px;
            padding: 32px;
            margin-top: 40px;
            color: #fff;
        }

        .policy-contact-card h3 {
            font-size: 1.2rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: 10px;
        }

        .policy-contact-card p {
            color: rgba(255, 255, 255, 0.65);
            font-size: 0.88rem;
            margin-bottom: 18px;
        }

        .policy-contact-card a {
            color: #EF3943;
            text-decoration: none;
            font-weight: 600;
        }

        .policy-contact-card a:hover {
            text-decoration: underline;
        }

        .policy-contact-list {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .policy-contact-item {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.88rem;
            color: rgba(255, 255, 255, 0.7);
        }

        .policy-contact-item i {
            color: #EF3943;
            font-size: 1.05rem;
            flex-shrink: 0;
            margin-top: 1px;
        }

        @media (max-width: 991px) {
            .privacy-toc {
                position: static;
                margin-bottom: 32px;
            }
        }
    
</style>
@endsection

@section('content')


        <!-- ── Hero ────────────────────────────────────────────── -->
        <section class="page-hero justify-content-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6" data-aos="fade-up">

                        <h1 class="text-white display-3 fw-bold">Privacy <span>Policy</span></h1>
                        <p class="text-white">Your privacy matters to us. This page explains exactly what data we
                            collect, why we collect
                            it, and how we keep it safe.</p>

                    </div>
                </div>
            </div>
        </section>

        <!-- ── Body ─────────────────────────────────────────────── -->
        <section class="privacy-body">
            <div class="container">
                <div class="row g-5">

                    <!-- Table of Contents -->
                    <div class="col-lg-3 order-lg-2" data-aos="fade-left">
                        <div class="privacy-toc">
                            <h4>Table of Contents</h4>
                            <ul class="toc-list">
                                <li><a href="#section-1">Who We Are</a></li>
                                <li><a href="#section-2">Information We Collect</a></li>
                                <li><a href="#section-3">How We Use Your Information</a></li>
                                <li><a href="#section-4">Legal Basis for Processing</a></li>
                                <li><a href="#section-5">Information Sharing</a></li>
                                <li><a href="#section-6">Cookies & Tracking</a></li>
                                <li><a href="#section-7">Data Retention</a></li>
                                <li><a href="#section-8">Your Rights</a></li>
                                <li><a href="#section-9">Data Security</a></li>
                                <li><a href="#section-10">Third-Party Links</a></li>
                                <li><a href="#section-11">Children's Privacy</a></li>
                                <li><a href="#section-12">Changes to This Policy</a></li>
                                <li><a href="#section-13">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Policy Content -->
                    <div class="col-lg-9 order-lg-1" data-aos="fade-up">

                        <div class="policy-highlight-box">
                            <p>
                                <strong>In summary:</strong> Balaji Garments collects your contact details and inquiry
                                information only when you voluntarily submit them through our website. We do not sell
                                your data. We use your information solely to respond to your business inquiries and
                                improve our services.
                            </p>
                        </div>

                        <hr class="policy-divider">

                        <!-- 1 -->
                        <div class="policy-section" id="section-1">
                            <span class="policy-section-number">01</span>
                            <h2>Who We Are</h2>
                            <p>
                                Balaji Garments ("we", "our", or "us") is a merchant garment exporter based in India,
                                specialising in high-quality garments, towels and textile products sourced from leading
                                Indian manufacturers. Our registered business address is:
                            </p>
                            <p>
                                <strong>Balaji Garments</strong><br>
                                1411, Signature Business Park, Chembur, Mumbai,
                                Maharashtra<br>
                                Email: <a href="mailto:mahesh@balajiexporter.com">mahesh@balajiexporter.com</a><br>
                                Phone: <a href="tel:+919004711558">+919004711558</a>
                            </p>
                            <p>
                                This Privacy Policy applies to the website at
                                <a href="https://www.balajiexporter.com" target="_blank"
                                    rel="noopener">www.balajiexporter.com</a>
                                and any other online platforms operated by us.
                            </p>
                        </div>

                        <hr class="policy-divider">

                        <!-- 2 -->
                        <div class="policy-section" id="section-2">
                            <span class="policy-section-number">02</span>
                            <h2>Information We Collect</h2>
                            <p>We collect information in two ways — information you give us voluntarily, and
                                information collected automatically when you browse our website.</p>

                            <p><strong>Information you provide directly:</strong></p>
                            <ul>
                                <li>Full name and business / company name</li>
                                <li>Email address and phone number</li>
                                <li>Country of residence or business operation</li>
                                <li>Business type (Retailer, Wholesaler, Importer, etc.)</li>
                                <li>Product categories of interest</li>
                                <li>Inquiry details and messages submitted through our contact forms</li>
                            </ul>

                            <p><strong>Information collected automatically:</strong></p>
                            <ul>
                                <li>IP address and approximate geographic location</li>
                                <li>Browser type, version, and operating system</li>
                                <li>Pages visited, time spent, and referring URLs</li>
                                <li>Device type (desktop, mobile, tablet)</li>
                            </ul>
                            <p>We do <strong>not</strong> collect any sensitive personal information such as financial
                                details, passport numbers, or health-related data.</p>
                        </div>

                        <hr class="policy-divider">

                        <!-- 3 -->
                        <div class="policy-section" id="section-3">
                            <span class="policy-section-number">03</span>
                            <h2>How We Use Your Information</h2>
                            <p>We use the personal information we collect for the following business purposes:</p>
                            <ul>
                                <li>To respond to your product inquiries and sourcing requests</li>
                                <li>To send you product catalogues, quotations, or samples upon request</li>
                                <li>To communicate information about our services, updates, and new product ranges</li>
                                <li>To process and manage business transactions with you</li>
                                <li>To improve our website content, navigation, and user experience</li>
                                <li>To comply with applicable laws and regulations</li>
                                <li>To detect and prevent fraudulent or unlawful activity</li>
                            </ul>
                            <p>We will never use your information for automated decision-making or profiling without
                                your explicit consent.</p>
                        </div>

                        <hr class="policy-divider">

                        <!-- 4 -->
                        <div class="policy-section" id="section-4">
                            <span class="policy-section-number">04</span>
                            <h2>Legal Basis for Processing</h2>
                            <p>We process your personal data on one or more of the following lawful bases:</p>
                            <ul>
                                <li><strong>Contractual necessity</strong> — to fulfil your business inquiry or order
                                </li>
                                <li><strong>Legitimate interests</strong> — to operate, improve and protect our
                                    business and services</li>
                                <li><strong>Consent</strong> — where you have specifically opted in to receive
                                    marketing or newsletter communications</li>
                                <li><strong>Legal obligation</strong> — to comply with applicable Indian or
                                    international laws</li>
                            </ul>
                        </div>

                        <hr class="policy-divider">

                        <!-- 5 -->
                        <div class="policy-section" id="section-5">
                            <span class="policy-section-number">05</span>
                            <h2>Information Sharing &amp; Disclosure</h2>
                            <p>We value your privacy and do not sell, rent, or trade your personal information to
                                third parties for their own marketing purposes. We may share your data only in the
                                following limited circumstances:</p>
                            <ul>
                                <li><strong>Trusted service providers:</strong> Email service providers (e.g. Brevo /
                                    Sendinblue) for transactional emails, and web hosting providers — bound by strict
                                    data processing agreements.</li>
                                <li><strong>Business partners:</strong> Verified manufacturers units and logistic
                                    partners,
                                    only to the extent necessary to fulfil your order or inquiry.</li>
                                <li><strong>Legal requirements:</strong> When required by law, court order, or
                                    government authority.</li>
                                <li><strong>Business transfers:</strong> In the event of a merger, acquisition, or
                                    sale of assets, your data may be transferred as part of that transaction, with the
                                    same privacy protections applying.</li>
                            </ul>
                        </div>

                        <hr class="policy-divider">

                        <!-- 6 -->
                        <div class="policy-section" id="section-6">
                            <span class="policy-section-number">06</span>
                            <h2>Cookies &amp; Tracking Technologies</h2>
                            <p>Our website uses cookies and similar technologies to enhance your browsing experience
                                and collect analytical data.</p>

                            <p><strong>Types of cookies we use:</strong></p>
                            <ul>
                                <li><strong>Essential cookies</strong> — required for the website to function
                                    correctly (e.g. session management).</li>
                                <li><strong>Analytics cookies</strong> — help us understand how visitors interact with
                                    our website (e.g. pages visited, bounce rates). We may use Google Analytics for
                                    this purpose.</li>
                                <li><strong>Preference cookies</strong> — remember your settings and preferences for
                                    a better user experience.</li>
                            </ul>

                            <p>You can control or disable cookies through your browser settings at any time. Note
                                that disabling cookies may affect the functionality of some parts of our website. We
                                do not use third-party advertising or tracking cookies.</p>
                        </div>

                        <hr class="policy-divider">

                        <!-- 7 -->
                        <div class="policy-section" id="section-7">
                            <span class="policy-section-number">07</span>
                            <h2>Data Retention</h2>
                            <p>We retain your personal information only for as long as necessary to fulfil the
                                purposes outlined in this policy, or as required by applicable law.</p>
                            <ul>
                                <li><strong>Inquiry data</strong> — retained for up to 3 years from the date of last
                                    contact, to facilitate ongoing business relationships.</li>
                                <li><strong>Transaction records</strong> — retained for 7 years in accordance with
                                    Indian taxation and accounting regulations (GST Act).</li>
                                <li><strong>Analytics data</strong> — anonymised and retained for up to 26 months
                                    (standard Google Analytics retention period).</li>
                            </ul>
                            <p>When data is no longer required, we securely delete or anonymise it.</p>
                        </div>

                        <hr class="policy-divider">

                        <!-- 8 -->
                        <div class="policy-section" id="section-8">
                            <span class="policy-section-number">08</span>
                            <h2>Your Rights</h2>
                            <p>Depending on your location, you may have the following rights regarding your personal
                                data:</p>
                            <ul>
                                <li><strong>Right to access</strong> — request a copy of the personal data we hold
                                    about you.</li>
                                <li><strong>Right to rectification</strong> — ask us to correct inaccurate or
                                    incomplete data.</li>
                                <li><strong>Right to erasure</strong> — request deletion of your personal data,
                                    subject to legal retention obligations.</li>
                                <li><strong>Right to restrict processing</strong> — ask us to limit how we use your
                                    data in certain circumstances.</li>
                                <li><strong>Right to data portability</strong> — receive your data in a structured,
                                    machine-readable format.</li>
                                <li><strong>Right to object</strong> — object to processing based on legitimate
                                    interests or for direct marketing purposes.</li>
                                <li><strong>Right to withdraw consent</strong> — where processing is based on
                                    consent, you may withdraw it at any time without affecting prior processing.</li>
                            </ul>
                            <p>To exercise any of these rights, please contact us at
                                <a href="mailto:mahesh@balajiexporter.com">mahesh@balajiexporter.com</a>. We will
                                respond within 30 days.
                            </p>
                        </div>

                        <hr class="policy-divider">

                        <!-- 9 -->
                        <div class="policy-section" id="section-9">
                            <span class="policy-section-number">09</span>
                            <h2>Data Security</h2>
                            <p>We take reasonable technical and organisational measures to protect your personal data
                                against unauthorised access, loss, or disclosure. These include:</p>
                            <ul>
                                <li>HTTPS encryption for all data transmitted through our website</li>
                                <li>Access control and password-protected internal systems</li>
                                <li>Secure server infrastructure hosted by trusted providers</li>
                                <li>Regular security reviews and software updates</li>
                            </ul>
                            <p>While we take every precaution, no method of data transmission over the internet is
                                100% secure. In the unlikely event of a data breach that affects your rights, we will
                                notify you as required by applicable law.</p>
                        </div>

                        <hr class="policy-divider">

                        <!-- 10 -->
                        <div class="policy-section" id="section-10">
                            <span class="policy-section-number">10</span>
                            <h2>Third-Party Links</h2>
                            <p>Our website may contain links to third-party websites such as social media platforms
                                (Facebook, Instagram) or external resources. These sites have their own privacy
                                policies, and we are not responsible for their content or how they handle your data.
                            </p>
                            <p>We recommend reviewing the privacy policy of any third-party site you visit through
                                links on our website.</p>
                        </div>

                        <hr class="policy-divider">

                        <!-- 11 -->
                        <div class="policy-section" id="section-11">
                            <span class="policy-section-number">11</span>
                            <h2>Children's Privacy</h2>
                            <p>Our website and services are directed exclusively at business professionals and are
                                not intended for individuals under the age of 18. We do not knowingly collect personal
                                information from minors.</p>
                            <p>If you believe that a minor has submitted personal information through our website,
                                please contact us immediately and we will take steps to delete that information.</p>
                        </div>

                        <hr class="policy-divider">

                        <!-- 12 -->
                        <div class="policy-section" id="section-12">
                            <span class="policy-section-number">12</span>
                            <h2>Changes to This Policy</h2>
                            <p>We may update this Privacy Policy from time to time to reflect changes in our
                                practices, technology, or legal requirements. When we do:</p>
                            <ul>
                                <li>The "Last Updated" date at the top of this page will be revised.</li>
                                <li>If the changes are significant, we will notify you via email (if you are a
                                    registered contact) or by placing a prominent notice on our website.</li>
                            </ul>
                            <p>We encourage you to review this page periodically to stay informed about how we
                                protect your information. Continued use of our website after changes are published
                                constitutes your acceptance of those changes.</p>
                        </div>

                        <hr class="policy-divider">

                        <!-- 13 -->
                        <div class="policy-section" id="section-13">
                            <span class="policy-section-number">13</span>
                            <h2>Contact Us</h2>
                            <p>If you have any questions, concerns, or requests regarding this Privacy Policy or how
                                we handle your personal data, please reach out to us through any of the channels
                                below. We are committed to addressing your concerns promptly and transparently.</p>

                            <div class="policy-contact-card">
                                <h3>Get in Touch</h3>
                                <p>Our team typically responds within 1–2 business days.</p>
                                <div class="policy-contact-list">
                                    <div class="policy-contact-item">
                                        <i class="ri-building-line"></i>
                                        <span>1411, Signature Business Park, Chembur, Mumbai, Maharashtra</span>
                                    </div>
                                    <div class="policy-contact-item">
                                        <i class="ri-mail-line"></i>
                                        <span>
                                            <a href="mailto:mahesh@balajiexporter.com">mahesh@balajiexporter.com</a>
                                        </span>
                                    </div>
                                    <div class="policy-contact-item ">
                                        <i class="ri-phone-line"></i>
                                        <span>
                                            <a href="tel:+919004711558">+91 77000 33157</a>
                                        </span>
                                    </div>
                                    <div class="policy-contact-item">
                                        <i class="ri-whatsapp-line"></i>
                                        <span>
                                            <a href="https://wa.me/919004711558" target="_blank"
                                                rel="noopener">WhatsApp: +91 90047 11558</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /col -->
                </div>
            </div>
        </section>

    
@endsection

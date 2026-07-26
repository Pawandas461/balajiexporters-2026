@extends('layouts.front')

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/css/intlTelInput.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
@endsection

@section('content')
    <!-- ── Page Hero ──────────────────────────────────────── -->
    <section class="page-hero contact-page-hero">
        <div class="page-hero-bg" style="background-image: url('{{ asset('images/banner/3.png') }}');">
        </div>
        <div class="page-hero-overlay"></div>

        <div class="container">
            <div class="row">
                <div class="col-12 hero-content">
                    <div class="page-breadcrumb" data-aos="fade-up">
                        <a href="{{ route('home') }}">Home</a>
                        <span class="sep">/</span>
                        <span class="current">Contact</span>
                    </div>
                    <h1 class="page-hero-title" data-aos="fade-up" data-aos-delay="80">
                        Let's Build Your Next<br>Export Success Together
                    </h1>
                    <div class="hero-bottom-row" data-aos="fade-up" data-aos-delay="180">
                        <a href="#contact-grid-section" class="btn-accent flex-shrink-0">Send an Enquiry</a>
                        <p class="page-hero-subtitle">
                            Have questions about our products, customization parameters, or shipping logistics?
                            Reach out directly or complete the bulk sourcing form below to speak to an export
                            specialist.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Contact Main Grid Section ────────────────────────── -->
    <section class="contact-main-section py-5" id="contact-grid-section">
        <div class="container py-lg-4">
            <div class="row g-5">

                <!-- Column 1: Contact details -->
                <div class="col-lg-5" data-aos="fade-up">
                    <div class="pe-lg-4">
                        <p class="section-label mb-2">Contact Details</p>
                        <h2 class="section-heading mb-4">Let's Discuss Your<br>Sourcing Needs</h2>
                        <p class="section-body mb-5">
                            Whether you are looking to request samples, customize a product line, or establish a
                            contract manufacturing partner, our B2B export desk is ready to support your business.
                        </p>

                        <!-- Contact Details Cards -->
                        <div class="contact-info-list d-flex flex-column gap-4">

                            <!-- Card 1: Phone -->
                            <div class="contact-info-card d-flex align-items-start gap-3">
                                <div class="info-card-icon">
                                    <i class="ri-phone-fill"></i>
                                </div>
                                <div>
                                    <h4 class="info-card-title">Call Us Today</h4>
                                    <a href="tel:+919004711558" class="info-card-link">+91-9004711558</a>
                                </div>
                            </div>
                            <!-- Card 2: Email -->
                            <div class="contact-info-card d-flex align-items-start gap-3">
                                <div class="info-card-icon">
                                    <i class="ri-mail-fill"></i>
                                </div>
                                <div>
                                    <h4 class="info-card-title">Send a Message</h4>
                                    <a href="mailto:mahesh@balajiexporter.com"
                                        class="info-card-link">mahesh@balajiexporter.com</a>
                                </div>
                            </div>

                            <!-- Card 3: Address -->
                            <div class="contact-info-card d-flex align-items-start gap-3">
                                <div class="info-card-icon">
                                    <i class="ri-map-pin-fill"></i>
                                </div>
                                <div>
                                    <h4 class="info-card-title">Address</h4>
                                    <a href="https://maps.app.goo.gl/SsMFm1AYNbi9aZwR9" target="_blank"
                                        class="info-card-link mb-0">
                                        1411, Signature Business Park, K.A,<br>
                                        Gaikwad Marg, Postal Colony, Chembur,<br>
                                        Mumbai, Maharashtra
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Column 2: Contact Form -->
                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="150">
                    <div class="contact-form-wrapper p-4 p-md-5">
                        <h3 class="form-title mb-2">Request a Quote</h3>
                        <p class="form-subtitle mb-4">Complete the fields below to request details, custom
                            specifications, or a product brochure.</p>

                        <form class="contact-form" id="exportContactForm" method="POST"
                            action="{{ route('contactPost') }}">
                            @csrf
                            @if (session('success'))
                                <div class="col-12">
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                </div>
                            @endif
                            @if (session('warning'))
                                <div class="col-12">
                                    <div class="alert alert-warning">{{ session('warning') }}</div>
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="col-12">
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                            <div class="row g-4">

                                <!-- Name Field -->
                                <div class="col-md-6">
                                    <div class="form-group-custom">
                                        <label for="name" class="form-label-custom">Full Name</label>
                                        <input type="text" id="name" class="form-control-custom"
                                            placeholder="e.g. John Doe" required name="name" value="{{ old('name') }}"
                                            required>
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Email Field -->
                                <div class="col-md-6">
                                    <div class="form-group-custom">
                                        <label for="email" class="form-label-custom">Corporate Email</label>
                                        <input type="email" id="email" class="form-control-custom"
                                            placeholder="e.g. name@company.com" required name="email"
                                            value="{{ old('email') }}" required>
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Phone Field (using intl-tel-input) -->
                                <div class="col-md-6">
                                    <div class="form-group-custom">
                                        <label for="phone" class="form-label-custom">Phone Number</label>
                                        <input type="tel" id="phone" class="form-control-custom w-100" required
                                            name="phone" value="{{ old('phone') }}" required>
                                        @error('phone')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Country Dropdown -->
                                <div class="col-md-6">
                                    <div class="form-group-custom">
                                        <label for="country" class="form-label-custom">Country</label>
                                        <select name="country" id="country" class="form-select-custom" required>
                                            <option value="" disabled selected>Select your country</option>
                                        </select>
                                        <input type="hidden" id="old_country" value="{{ old('country') }}">
                                        @error('country')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Business Profile Dropdown -->
                                <div class="col-md-6">
                                    <div class="form-group-custom">
                                        <label for="businessType" class="form-label-custom">Business Profile</label>
                                        <select id="businessType" name="business_type" class="form-select-custom"
                                            required>
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
                                        <label for="orderQuantity" class="form-label-custom">Estimated Order
                                            Quantity</label>
                                        <select id="orderQuantity" name="order_quantity" class="form-select-custom"
                                            required>
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
                                        <label class="form-label-custom mb-3">Product Categories of
                                            Interest:</label>
                                        <div class="row g-2">

                                            <div class="col-sm-6">
                                                <label class="checkbox-card-label">
                                                    <input type="checkbox" name="categories[]"
                                                        value="Cotton Terry Towels" class="checkbox-card-input">
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
                                                    <input type="checkbox" name="categories[]"
                                                        value="Multi-Stripe Towels" class="checkbox-card-input">
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
                                        <label for="message" class="form-label-custom">Message / Custom
                                            Requirements</label>
                                        <textarea id="message" name="message" rows="4" class="form-control-custom"
                                            placeholder="Please specify target volume, sizes, custom GSM, or design requirements..." required>{{ old('message') }}</textarea>
                                        @error('message')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Submit Button -->

                                <input type="hidden" name="source" value="contact_page">
                                <!-- Google ReCaptcha -->
                                <div class="col-12">
                                    <div class="mb-3">
                                        <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                                        @error('g-recaptcha-response')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mt-4 text-center">
                                    <button type="submit" class="btn-accent px-5 py-2.5 mb-3"
                                        style="font-size: 0.95rem;">Send Export Enquiry</button>
                                    <div>
                                        <span class="form-response-note">
                                            <i class="ri-time-line"></i> We respond to all business enquiries within
                                            24 working hours.
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/intlTelInput.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const phoneInputEl = document.querySelector("#phone");
            const countrySelectEl = document.querySelector("#country");

            let iti = null;
            let choicesInstance = null;
            if (phoneInputEl) {
                iti = window.intlTelInput(phoneInputEl, {
                    initialCountry: "auto",
                    geoIpLookup: callback => {
                        fetch("https://ipapi.co/json")
                            .then(res => res.json())
                            .then(data => callback(data.country_code))
                            .catch(() => callback("in"));
                    },
                    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/utils.js"
                });
            }

            const countryList = @json($countries->map(fn($c) => ['name' => ucwords(strtolower($c->country)), 'code' => $c->iso])->values()->all());

            if (countrySelectEl) {
                countryList.forEach(country => {
                    const opt = document.createElement("option");
                    opt.value = country.name;
                    opt.textContent = country.name;
                    countrySelectEl.appendChild(opt);
                });

                choicesInstance = new Choices(countrySelectEl, {
                    searchEnabled: true,
                    itemSelectText: '',
                    shouldSort: false,
                    placeholder: true,
                    placeholderValue: "Select your country"
                });
            }

            countrySelectEl?.addEventListener('change', (e) => {
                const selectedCountryName = e.target.value;
                const match = countryList.find(c => c.name === selectedCountryName);
                if (match && iti) {
                    iti.setCountry(match.code.toLowerCase());
                }
            });

            phoneInputEl?.addEventListener('countrychange', () => {
                if (iti && choicesInstance) {
                    const countryData = iti.getSelectedCountryData();
                    if (countryData && countryData.iso2) {
                        const match = countryList.find(c => c.code.toLowerCase() === countryData.iso2
                            .toLowerCase());
                        if (match) {
                            choicesInstance.setChoiceByValue(match.name);
                        }
                    }
                }
            });

            const form = document.getElementById("exportContactForm");
            form?.addEventListener('submit', (e) => {
                const checkedCats = [];
                document.querySelectorAll('input[name="categories[]"]:checked').forEach(cb => {
                    checkedCats.push(cb.value);
                });

                if (checkedCats.length === 0) {
                    e.preventDefault();
                    alert("Please select at least one product category of interest.");
                    return;
                }
            });

            const oldCountry = document.getElementById('old_country')?.value;
            if (oldCountry && choicesInstance) {
                choicesInstance.setChoiceByValue(oldCountry);
                const match = countryList.find(c => c.name === oldCountry);
                if (match && iti) {
                    iti.setCountry(match.code.toLowerCase());
                }
            }
        });
    </script>
@endsection

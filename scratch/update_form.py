import re

path = r"c:\Freelance\Balaji_Exports_Full\resources\views\front\static\contact.blade.php"
with open(path, 'r', encoding='utf-8') as f:
    content = f.read()

# Replace the form
form_start_pattern = r'<form action="#" class="contact-form" id="exportContactForm">'
form_end_pattern = r'</form>'

new_form = """<form action="{{ route('contactPost') }}" method="POST" class="contact-form" id="exportContactForm">
                            @csrf
                            <div class="row g-4">

                                <!-- Name Field -->
                                <div class="col-md-6">
                                    <div class="form-group-custom">
                                        <label for="name" class="form-label-custom">Full Name</label>
                                        <input type="text" id="name" name="name" class="form-control-custom"
                                            placeholder="e.g. John Doe" value="{{ old('name') }}" required>
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Email Field -->
                                <div class="col-md-6">
                                    <div class="form-group-custom">
                                        <label for="email" class="form-label-custom">Corporate Email</label>
                                        <input type="email" id="email" name="email" class="form-control-custom"
                                            placeholder="e.g. name@company.com" value="{{ old('email') }}" required>
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Phone Field (using intl-tel-input) -->
                                <div class="col-md-6">
                                    <div class="form-group-custom">
                                        <label for="phone" class="form-label-custom">Phone Number</label>
                                        <input type="tel" id="phone" name="phone" class="form-control-custom w-100" value="{{ old('phone') }}" required>
                                        @error('phone')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Country Dropdown -->
                                <div class="col-md-6">
                                    <div class="form-group-custom">
                                        <label for="country" class="form-label-custom">Country</label>
                                        <select id="country" name="country" class="form-select-custom" required>
                                            <option value="" disabled selected>Select your country</option>
                                        </select>
                                        <input type="hidden" id="old_country" value="{{ old('country') }}">
                                        @error('country')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Customer Details / Business Type -->
                                <div class="col-12">
                                    <div class="form-group-custom">
                                        <label for="businessType" class="form-label-custom">I am a / we are:</label>
                                        <select id="businessType" name="business_type" class="form-select-custom" required>
                                            <option value="" disabled {{ old('business_type') ? '' : 'selected' }}>Choose business profile...</option>
                                            <option value="Importer" {{ old('business_type') == 'Importer' ? 'selected' : '' }}>Merchant Importer / Distributor</option>
                                            <option value="Wholesaler" {{ old('business_type') == 'Wholesaler' ? 'selected' : '' }}>Wholesaler / Trader</option>
                                            <option value="Retailer" {{ old('business_type') == 'Retailer' ? 'selected' : '' }}>Retail Store / E-commerce Brand</option>
                                            <option value="Hospitality" {{ old('business_type') == 'Hospitality' ? 'selected' : '' }}>Hotel / Resort / Institutional Buyer</option>
                                            <option value="GarmentOEM" {{ old('business_type') == 'GarmentOEM' ? 'selected' : '' }}>Garment Brand / OEM Client</option>
                                            <option value="Other" {{ old('business_type') == 'Other' ? 'selected' : '' }}>Other / General Inquiry</option>
                                        </select>
                                        @error('business_type')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Categories checkboxes -->
                                <div class="col-12">
                                    <div class="form-group-custom">
                                        <label class="form-label-custom mb-3">Product Categories of Interest:</label>
                                        <div class="row g-2">
                                            @php $oldCategories = old('categories', []); @endphp
                                            @foreach(['Cotton Terry Towels', 'Mixed Towels', 'Multi-Stripe Towels', 'Kitchen Towels', 'Hotel Towels', 'Beach Towels', 'Garments', 'All Products'] as $cat)
                                            <div class="col-sm-6">
                                                <label class="checkbox-card-label">
                                                    <input type="checkbox" name="categories[]" value="{{ $cat }}" class="checkbox-card-input" {{ in_array($cat, $oldCategories) ? 'checked' : '' }}>
                                                    <span class="checkbox-card-content">
                                                        <span class="checkbox-card-icon"><i class="ri-check-line"></i></span>
                                                        <span class="checkbox-card-text">{{ $cat == 'Garments' ? 'Garments Collection' : $cat }}</span>
                                                    </span>
                                                </label>
                                            </div>
                                            @endforeach
                                        </div>
                                        @error('categories')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Message Field -->
                                <div class="col-12">
                                    <div class="form-group-custom">
                                        <label for="message" class="form-label-custom">Message / Custom Requirements</label>
                                        <textarea id="message" name="message" rows="4" class="form-control-custom"
                                            placeholder="Please specify target volume, sizes, custom GSM, or design requirements..." required>{{ old('message') }}</textarea>
                                        @error('message')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Google ReCaptcha -->
                                <div class="col-12">
                                    <div class="mb-3">
                                        <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                                        @error('g-recaptcha-response')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12 mt-4 d-flex justify-content-center">
                                    <button type="submit" class="btn-accent px-5 py-2.5" style="font-size: 0.95rem;">Send Export Enquiry</button>
                                </div>

                            </div>
                        </form>"""

start_idx = content.find('<form action="#" class="contact-form" id="exportContactForm">')
end_idx = content.find('</form>', start_idx) + len('</form>')
content = content[:start_idx] + new_form + content[end_idx:]

# Remove JS submit handler
js_start = content.find('const form = document.getElementById("exportContactForm");')
js_end = content.find('});', content.find('});', js_start) + 3) + 3
# Also add code to select old country
country_script = """const oldCountry = document.getElementById('old_country')?.value;
            if (oldCountry && choicesInstance) {
                choicesInstance.setChoiceByValue(oldCountry);
                const match = countryList.find(c => c.name === oldCountry);
                if (match && iti) {
                    iti.setCountry(match.code.toLowerCase());
                }
            }"""

content = content[:js_start] + country_script + "\n" + content[js_end:]

# Add success message at the top of the form wrapper
success_alert = """
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
"""
wrapper_start = content.find('<h3 class="form-title mb-2">Request a Quote</h3>')
content = content[:wrapper_start] + success_alert + content[wrapper_start:]

with open(path, 'w', encoding='utf-8') as f:
    f.write(content)
print("Updated form successfully")

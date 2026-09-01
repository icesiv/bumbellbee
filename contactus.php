<?php include "layouts/header.php"; ?>

<!-- Custom Contact Us Styles -->
<link rel="stylesheet" href="./css/contact.css">

<div class="contact-page-wrapper">
    <div class="container">

        <!-- Hero Header -->
        <div class="contact-hero">
            <div class="badge-pill-custom">
                <i class="fas fa-headset"></i> Customer Support &amp; Help Desk (Office Hours: Sat – Thu, 9 AM – 6 PM)
            </div>
            <h1>Get in Touch with Bumbellbee</h1>
            <p class="lead-text">
                Have questions about our HD cable television packages, Set-Top Box setup, billing inquiries, or need
                technician assistance? Reach out to us during office hours — we are always here to help.
            </p>
        </div>

        <!-- 3 Quick Contact Channels -->
        <div class="row mb-5">
            <!-- Channel 1: Hotline -->
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="quick-channel-card">
                    <div class="channel-icon-header">
                        <div class="channel-icon-box icon-phone">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <span class="status-badge-live">
                            <span class="pulse-dot"></span> Sat – Thu: 9 AM – 6 PM
                        </span>
                    </div>
                    <div class="channel-title">Customer Care Hotline</div>
                    <div class="channel-value">
                        <a href="tel:09678300700">09 678 300700</a>
                    </div>
                    <p class="channel-desc">
                        Call during office hours for instant bill activation, fast technician dispatch, or channel
                        troubleshooting.
                    </p>
                </div>
            </div>

            <!-- Channel 2: Email -->
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="quick-channel-card">
                    <div class="channel-icon-header">
                        <div class="channel-icon-box icon-email">
                            <i class="far fa-envelope"></i>
                        </div>
                    </div>
                    <div class="channel-title">Email Inquiries</div>
                    <div class="channel-value">
                        <a href="mailto:care@bumbellbee.com">care@bumbellbee.com</a>
                    </div>
                    <p class="channel-desc">
                        For corporate partnerships, feedback, formal billing queries, and official communication.
                    </p>
                </div>
            </div>

            <!-- Channel 3: Corporate Concern -->
            <div class="col-lg-4 col-md-12">
                <div class="quick-channel-card">
                    <div class="channel-icon-header">
                        <img src="./img/abg_logo.png" alt="Anvir Bashundhara Group" style="height: 38px; width: auto; object-fit: contain;" onerror="this.src='https://www.abgbashundhara.com/wp-content/uploads/2026/03/14.03-ABG-Full-3D-Final-Logo-scaled.png'">
                    </div>
                    <div class="channel-title">Anvir Bashundhara Group Concern</div>
                    <div class="channel-value" style="font-size: 14px; color: #0f172a;">
                        <a href="https://www.abgbashundhara.com/" target="_blank" rel="noopener noreferrer"
                            style="color:#f44616;">
                            Anvir Bashundhara Group <i class="fas fa-external-link-alt" style="font-size:11px;"></i>
                        </a>
                    </div>
                    <p class="channel-desc">
                        ABG Tower, Plot# 440, 441 &amp; 442, Road – 18, Block# A, Bashundhara R/A, Dhaka-1229.
                    </p>
                </div>
            </div>
        </div>

        <!-- Main Section: Form & Office Location -->
        <div class="row">
            <!-- Left Column: Office & Map -->
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="contact-info-card">
                    <h3 class="form-header-title">
                        <i class="fas fa-map-marker-alt text-danger"></i> Head Office
                    </h3>
                    <p class="form-header-subtitle">Visit our corporate headquarters for direct inquiries.</p>

                    <div class="office-details-box">
                        <div class="office-details-title">
                            <i class="fas fa-landmark text-primary"></i> Bumbellbee Limited
                        </div>
                        <p class="office-address-text">
                            ABG Tower<br>
                            Plot# 440, 441 &amp; 442, Road – 18, Block# A<br>
                            Bashundhara R/A, Dhaka-1229, Bangladesh
                        </p>
                        <div class="office-hours-badge">
                            <i class="far fa-clock"></i> Office: Sat – Thu (9:00 AM – 6:00 PM)
                        </div>
                    </div>

                    <!-- Interactive Google Map Embed -->
                    <div class="map-embed-wrapper mb-2">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.1557022067756!2d90.423142!3d23.812829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c64b7323cf8b%3A0xd112f3827062925d!2sBumbellbee%20Limited!5e0!3m2!1sen!2sbd!4v1700000000000!5m2!1sen!2sbd"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            title="Bumbellbee Limited Location Map">
                        </iframe>
                    </div>
                    <a href="https://maps.app.goo.gl/MdeSnddhrq7j9Tob9" target="_blank" rel="noopener noreferrer"
                        class="btn btn-sm btn-outline-secondary w-100 mt-2"
                        style="border-radius: 10px; font-size: 12px; font-weight: 600;">
                        <i class="fas fa-directions text-danger"></i> Get Directions on Google Maps
                    </a>
                </div>
            </div>

            <!-- Right Column: Interactive Contact Form -->
            <div class="col-lg-7">
                <div class="contact-form-card">
                    <h3 class="form-header-title">
                        <i class="fas fa-paper-plane text-danger"></i> Send Us a Message
                    </h3>
                    <p class="form-header-subtitle">
                        Fill out the form below and our customer support team will get back to you promptly.
                    </p>

                    <form id="bumbellbeeContactForm" onsubmit="handleContactSubmit(event)">
                        <!-- Department / Inquiry Type -->
                        <div class="modern-form-group">
                            <label class="modern-form-label" for="inquiryType">Inquiry Type / Department</label>
                            <div class="modern-input-wrapper">
                                <select class="modern-form-control" id="inquiryType" required>
                                    <option value="" disabled selected>Select reason for contact...</option>
                                    <option value="new_connection">Request New HD Connection</option>
                                    <option value="billing">Billing &amp; Payment Support</option>
                                    <option value="technician">Free Fast Technician Support</option>
                                    <option value="package">Package Upgrade / Modification</option>
                                    <option value="general">General Inquiry / Feedback</option>
                                </select>
                                <i class="fas fa-list-alt modern-input-icon"></i>
                            </div>
                        </div>

                        <!-- Name & Phone Row -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="modern-form-group">
                                    <label class="modern-form-label" for="userName">Full Name *</label>
                                    <div class="modern-input-wrapper">
                                        <input type="text" class="modern-form-control" id="userName"
                                            placeholder="Your Full Name" required>
                                        <i class="fas fa-user modern-input-icon"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modern-form-group">
                                    <label class="modern-form-label" for="userPhone">Phone Number *</label>
                                    <div class="modern-input-wrapper">
                                        <input type="tel" class="modern-form-control" id="userPhone"
                                            placeholder="017XX-XXXXXX" required>
                                        <i class="fas fa-phone-alt modern-input-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Email & Subscriber ID Row -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="modern-form-group">
                                    <label class="modern-form-label" for="userEmail">Email Address</label>
                                    <div class="modern-input-wrapper">
                                        <input type="email" class="modern-form-control" id="userEmail"
                                            placeholder="name@example.com">
                                        <i class="far fa-envelope modern-input-icon"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modern-form-group">
                                    <label class="modern-form-label" for="subscriberId">Subscriber ID (If
                                        Existing)</label>
                                    <div class="modern-input-wrapper">
                                        <input type="text" class="modern-form-control" id="subscriberId"
                                            placeholder="e.g. BBB-10492">
                                        <i class="fas fa-id-card modern-input-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="modern-form-group">
                            <label class="modern-form-label" for="userMessage">Your Message / Address *</label>
                            <div class="modern-input-wrapper">
                                <textarea class="modern-form-control" id="userMessage"
                                    placeholder="Please describe your query, service address, or request..."
                                    required></textarea>
                                <i class="fas fa-comment-alt modern-input-icon" style="top: 14px;"></i>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn-submit-contact" id="submitBtn">
                            <i class="fas fa-paper-plane"></i> Send Message
                        </button>

                        <div class="form-privacy-note">
                            <i class="fas fa-shield-alt text-success"></i> Your contact information is kept strictly
                            private and safe.
                        </div>

                        <!-- Success Alert Message -->
                        <div id="formSuccessMessage" class="alert alert-success mt-3"
                            style="display: none; border-radius: 12px;">
                            <i class="fas fa-check-circle"></i> <strong>Thank you!</strong> Your message has been
                            received. Our team will contact you shortly.
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    function handleContactSubmit(e) {
        e.preventDefault();
        const btn = document.getElementById('submitBtn');
        const successMsg = document.getElementById('formSuccessMessage');

        btn.disabled = true;
        btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending Message...';

        setTimeout(() => {
            btn.disabled = false;
            btn.innerHTML = '<i class="fas fa-check"></i> Message Sent!';
            btn.style.background = '#10b981';
            successMsg.style.display = 'block';
            document.getElementById('bumbellbeeContactForm').reset();

            setTimeout(() => {
                btn.innerHTML = '<i class="fas fa-paper-plane"></i> Send Message';
                btn.style.background = '';
            }, 4000);
        }, 800);
    }
</script>

<?php include "layouts/footer.php"; ?>
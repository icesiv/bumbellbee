<?php 
require_once __DIR__ . '/includes/seo.php';
$pageSeo = getSeoConfig('home');
include "layouts/header.php"; 
?>

<!-- 1. Modern Hero Section -->
<section class="home-hero-section">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Column: Content & CTAs -->
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="badge-pill-custom">
                    <i class="fas fa-satellite-dish"></i> Next-Gen Cable TV &amp; 4K HD Broadcasting
                </div>
                <h1 class="home-hero-title">
                    Crystal-Clear <span class="highlight-text">HD Entertainment</span> For Your Home
                </h1>
                <p class="home-hero-desc">
                    Experience uncompromised visual clarity, dynamic surround audio, and ultra-stable fiber transmission with Bumbellbee's smart digital Set-Top Box. A proud sister concern of <strong>Anvir Bashundhara Group</strong>.
                </p>

                <div class="hero-cta-group">
                    <a href="packages" class="btn-hero-primary">
                        <i class="fas fa-tv"></i> Explore Packages
                    </a>
                    <a href="payment" class="btn-hero-secondary">
                        <i class="fas fa-credit-card"></i> Pay Monthly Bill
                    </a>
                </div>

                <div class="hero-trust-list">
                    <div class="hero-trust-item">
                        <i class="fas fa-check-circle"></i> 100+ Full HD Channels
                    </div>
                    <div class="hero-trust-item">
                        <i class="fas fa-check-circle"></i> Fast Support
                    </div>
                    <div class="hero-trust-item">
                        <i class="fas fa-check-circle"></i> Instant Bill Pay
                    </div>
                </div>
            </div>

            <!-- Right Column: Visual Media Showcase -->
            <div class="col-lg-6">
                <div class="hero-media-wrapper">
                    <img src="./img/about_hero.jpg" alt="Bumbellbee 4K HD Living Room Entertainment" class="hero-media-img" fetchpriority="high" decoding="async">
                    <div class="hero-floating-badge">
                        <i class="fas fa-broadcast-tower"></i>
                        <div>
                            <strong>Ultra HD Broadcasting</strong>
                            <div style="font-size:11px; opacity:0.8;">Dolby Audio &amp; EPG Program Guide</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. Customer Facilities & Core Features -->
<section class="facilities-section">
    <div class="container">
        <div class="section-header-center">
            <span class="section-subtitle">Customer Facilities</span>
            <h2>Why Households Choose Bumbellbee</h2>
            <p>We deliver superior technology, transparent billing, and dedicated customer service for an effortless home television experience.</p>
        </div>

        <div class="row">
            <!-- Facility 1: Online Payment -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="facility-card">
                    <div class="facility-icon-box icon-box-orange">
                        <i class="fas fa-wallet"></i>
                    </div>
                    <h3>Online Instant Payment</h3>
                    <p>
                        Easily settle your monthly subscription bill digitally through bKash, Nagad, Pocket mobile wallet, direct bank deposit, or credit/debit cards with instant activation.
                    </p>
                    <a href="payment" class="facility-link">
                        Payment Methods <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Facility 2: Fast Service -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="facility-card">
                    <div class="facility-icon-box icon-box-blue">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Fast Technician Service</h3>
                    <p>
                        Experience the swiftness of our free technician service. Our skilled technicians resolve technical issues and handle installations promptly during office hours.
                    </p>
                    <a href="contact-us" class="facility-link">
                        Get Support <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Facility 3: 100+ HD Channels -->
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="facility-card">
                    <div class="facility-icon-box icon-box-green">
                        <i class="fas fa-film"></i>
                    </div>
                    <h3>100+ Full HD Channels</h3>
                    <p>
                        Indulge in an expansive world of entertainment with over 100+ high-definition channels spanning live sports leagues, international blockbusters, news, and kids entertainment.
                    </p>
                    <a href="packages" class="facility-link">
                        View Channel Lineup <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. Packages Preview Section -->
<section class="home-packages-section">
    <div class="container">
        <div class="section-header-center">
            <span class="section-subtitle">Our Packages</span>
            <h2>Flexible Channel Plans for Every Household</h2>
            <p>Select a plan tailored for your family's viewing preferences, with uncompressed digital signal and full EPG support.</p>
        </div>

        <div class="row justify-content-center">
            <!-- Standard Plan Preview -->
            <div class="col-lg-5 col-md-6 mb-4">
                <div class="facility-card" style="background:#ffffff; border:2px solid #e2e8f0;">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="badge-pill-custom mb-0">Popular Choice</span>
                        <span style="font-size:12px; font-weight:700; color:#0284c7;">220+ Channels</span>
                    </div>
                    <h3>STANDARD PACKAGE</h3>
                    <div class="d-flex align-items-baseline mb-3">
                        <span style="font-size:24px; font-weight:700; color:#f44616;">৳</span>
                        <span style="font-size:40px; font-weight:900; color:#0f172a; margin:0 4px;">400</span>
                        <span style="font-size:13px; color:#64748b; font-weight:600;">/ month + VAT</span>
                    </div>
                    <p>
                        Includes all major Bangladeshi national &amp; satellite channels, 24/7 live news, entertainment, music, and standard sports.
                    </p>
                    <a href="packages" class="btn-hero-secondary text-center w-100 justify-content-center mt-auto">
                        <i class="fas fa-list-ul"></i> Explore Standard Lineup
                    </a>
                </div>
            </div>

            <!-- Premium Plan Preview -->
            <div class="col-lg-5 col-md-6 mb-4">
                <div class="facility-card" style="background:#ffffff; border:2px solid #f44616; box-shadow:0 16px 36px rgba(244, 70, 22, 0.1);">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="badge-pill-custom mb-0" style="background:#f44616; color:#ffffff;">★ Best Value</span>
                        <span style="font-size:12px; font-weight:700; color:#b45309; background:#fef3c7; padding:4px 10px; border-radius:10px;">290+ Channels</span>
                    </div>
                    <h3>PREMIUM PACKAGE</h3>
                    <div class="d-flex align-items-baseline mb-3">
                        <span style="font-size:24px; font-weight:700; color:#f44616;">৳</span>
                        <span style="font-size:40px; font-weight:900; color:#0f172a; margin:0 4px;">600</span>
                        <span style="font-size:13px; color:#64748b; font-weight:600;">/ month + VAT</span>
                    </div>
                    <p>
                        All 100+ Full HD channels, live international sports (T Sports HD, Star Sports), blockbuster movies, Discovery HD, and Nat Geo.
                    </p>
                    <a href="packages" class="btn-hero-primary text-center w-100 justify-content-center mt-auto">
                        <i class="fas fa-crown"></i> Explore Premium Lineup
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Corporate Backing & Trust Strip -->
<section class="corporate-backing-strip">
    <div class="container">
        <div class="backing-box">
            <div class="d-flex align-items-center flex-wrap">
                <a href="https://www.abgbashundhara.com/" target="_blank" rel="noopener noreferrer" class="mr-3 mb-2 mb-sm-0">
                    <img src="./img/abg_logo.png" alt="Anvir Bashundhara Group Logo" style="height: 52px; width: auto; object-fit: contain;" loading="lazy" decoding="async" onerror="this.src='https://www.abgbashundhara.com/wp-content/uploads/2026/03/14.03-ABG-Full-3D-Final-Logo-scaled.png'">
                </a>
                <div class="backing-title">
                    <h4>A Sister Concern of Anvir Bashundhara Group</h4>
                    <p>Backed by nationwide digital infrastructure, 35+ years of corporate trust, and enterprise excellence.</p>
                </div>
            </div>
            <a href="https://www.abgbashundhara.com/" target="_blank" rel="noopener noreferrer" class="btn btn-outline-danger" style="border-radius:12px; font-weight:700; font-size:13.5px; padding:10px 20px;">
                Visit Anvir Bashundhara Group <i class="fas fa-external-link-alt" style="font-size:11px;"></i>
            </a>
        </div>
    </div>
</section>

<!-- 5. Bottom Call to Action Strip -->
<section class="container mb-5">
    <div class="home-cta-strip">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <div class="cta-strip-content">
                    <h3>Ready to upgrade your home viewing experience?</h3>
                    <p>Get your Bumbellbee HD Set-Top Box connection set up quickly with our dedicated technician team.</p>
                </div>
            </div>
            <div class="col-lg-4 text-lg-right">
                <a href="tel:09678300700" class="btn-hero-primary mr-2 mb-2 d-inline-flex">
                    <i class="fas fa-phone-alt"></i> 09 678 300700
                </a>
                <a href="contact-us" class="btn btn-outline-light mb-2 d-inline-flex" style="border-radius:12px; padding:12px 20px; font-weight:700;">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'layouts/footer.php'; ?>
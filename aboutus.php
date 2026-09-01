<?php
require_once __DIR__ . '/includes/seo.php';
$pageSeo = getSeoConfig('about');
include "layouts/header.php";
?>

<!-- Custom About Us Page Styles -->
<link rel="stylesheet" href="./css/about.css">

<div class="about-page-wrapper">
    <div class="container">

        <!-- Hero Header -->
        <div class="about-hero">
            <h1>Empowering Households with Crystal-Clear Digital Entertainment</h1>
        </div>

        <!-- Section 1: Who We Are & Technology (Full Card Background Showcase) -->
        <div class="about-section-card who-we-are-card">
            <div class="row align-items-center">
                <!-- Left Column: Story & Narrative -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <span class="badge-pill-custom">
                        <i class="fas fa-bullseye"></i> Who We Are
                    </span>
                    <h2 class="section-title">
                        Revolutionizing <span class="highlight-orange">Digital Cable TV</span> in Bangladesh
                    </h2>
                    <p class="about-p">
                        <strong>Bumbellbee Limited</strong> is a forward-thinking digital media and telecommunications
                        service firm dedicated to bringing pristine, uninterrupted television entertainment directly to
                        your living room.
                    </p>
                    <p class="about-p">
                        As a proud member of <strong><a href="https://www.abgbashundhara.com/" target="_blank"
                                rel="noopener noreferrer" class="red-text font-weight-bold">Anvir Bashundhara
                                Group</a></strong>, we harness high-capacity fiber-optic transmission lines,
                        state-of-the-art broadcast encoders, and dedicated local technician hubs to provide an unmatched
                        viewing experience.
                    </p>
                </div>

                <!-- Right Column: 4 Frosted Glass Feature Cards -->
                <div class="col-lg-6">
                    <div class="who-feature-grid">
                        <div class="who-feature-item">
                            <div class="who-feature-icon icon-hd">
                                <i class="fas fa-tv"></i>
                            </div>
                            <div>
                                <h3>1080p &amp; 4K HD Quality</h3>
                                <p>Uncompressed digital feed with rich color fidelity and deep contrast.</p>
                            </div>
                        </div>

                        <div class="who-feature-item">
                            <div class="who-feature-icon icon-network">
                                <i class="fas fa-project-diagram"></i>
                            </div>
                            <div>
                                <h3>Fiber-Optic Backbone</h3>
                                <p>Weather-resilient digital transmission ensuring 99.9% uptime.</p>
                            </div>
                        </div>

                        <div class="who-feature-item">
                            <div class="who-feature-icon icon-epg">
                                <i class="fas fa-list-alt"></i>
                            </div>
                            <div>
                                <h3>Smart EPG Guide</h3>
                                <p>7-day electronic program guide with parental controls.</p>
                            </div>
                        </div>

                        <div class="who-feature-item">
                            <div class="who-feature-icon icon-support">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div>
                                <h3>Fast On-Site Support</h3>
                                <p>Prompt doorstep service from certified technicians during office hours.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 2: Core Pillars (4 Feature Cards) -->
        <div class="mb-5">
            <div class="text-center mb-4">
                <span class="section-tag">Our Core Pillars</span>
                <h2 class="section-title">Why Families &amp; Businesses Choose Bumbellbee</h2>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="pillar-card">
                        <div class="pillar-icon-box">
                            <i class="fas fa-film"></i>
                        </div>
                        <h3 class="pillar-title">100+ HD Channels</h3>
                        <p class="pillar-desc">
                            Extensive coverage of sports, news, documentaries, movies, and family entertainment in
                            uncompromised digital quality.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="pillar-card">
                        <div class="pillar-icon-box">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h3 class="pillar-title">Fast Support</h3>
                        <p class="pillar-desc">
                            Our skilled technicians respond swiftly to ensure minimal downtime and rapid installation
                            across all service zones.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="pillar-card">
                        <div class="pillar-icon-box">
                            <i class="fas fa-microchip"></i>
                        </div>
                        <h3 class="pillar-title">Smart HD Set-Top Box</h3>
                        <p class="pillar-desc">
                            Engineered for stable decoding, fast channel switching, parent control, and seamless
                            compatibility with modern smart displays.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="pillar-card">
                        <div class="pillar-icon-box">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="pillar-title">Bashundhara Trust</h3>
                        <p class="pillar-desc">
                            Backed by the visionary leadership and infrastructural strength of one of Bangladesh's
                            premier industrial conglomerates.
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <!-- Section 4: Leadership & Vision -->
        <div class="about-section-card">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between align-items-center flex-wrap mb-2">
                        <span class="section-tag">Visionary Leadership</span>
                        <a href="https://www.abgbashundhara.com/" target="_blank" rel="noopener noreferrer">
                            <img src="./img/abg_logo.png" alt="ABG Bashundhara Logo"
                                style="height: 44px; width: auto; object-fit: contain;" loading="lazy" decoding="async"
                                onerror="this.src='https://www.abgbashundhara.com/wp-content/uploads/2026/03/14.03-ABG-Full-3D-Final-Logo-scaled.png'">
                        </a>
                    </div>
                    <h2 class="section-title">Pioneering Progress and Economic Empowerment</h2>
                    <p class="about-p">
                        Managing Director of Bashundhara Group, <strong class="text-danger">Sayem Sobhan Anvir</strong>,
                        is a visionary and entrepreneur par excellence. Taking over leadership of the group on
                        <strong>September 16, 2001</strong>, he brought a transformative vision of building an
                        economically empowered and self-reliant Bangladesh.
                    </p>
                    <p class="about-p">
                        Under his dynamic stewardship, Bashundhara Group has grown into one of the largest and most
                        respected industrial conglomerates in the nation, encompassing over <strong>20 major business
                            enterprises</strong> and establishing a remarkable global footprint across diverse
                        industries.
                    </p>

                    <div class="leadership-quote-card">
                        <p class="leadership-quote-text">
                            "With a commitment to innovation, quality, and nation-building, we continuously strive to
                            empower our people and enrich lives through superior technology, connectivity, and
                            infrastructure."
                        </p>
                        <div class="leadership-meta">
                            <div class="leadership-avatar-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div>
                                <h3 class="leadership-name" style="font-size: 16px; margin-bottom: 2px;">Sayem Sobhan
                                    Anvir</h3>
                                <span class="leadership-title">Chairman, Anvir Bashundhara Group</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 5: Call to Action Banner -->
        <div class="about-cta-banner">
            <div class="about-cta-content">
                <h3 style="font-size: 22px; font-weight: 800; margin-bottom: 6px;">Ready to Experience Premium HD
                    Entertainment?</h3>
                <p>
                    Discover our flexible channel packages or explore instant payment options for seamless activation.
                </p>
            </div>
            <div class="about-cta-buttons">
                <a href="packages" class="about-cta-btn-primary">
                    <i class="fas fa-tv"></i> View Packages
                </a>
                <a href="payment" class="about-cta-btn-secondary">
                    <i class="fas fa-credit-card"></i> Payment Options
                </a>
                <a href="contact-us" class="about-cta-btn-secondary">
                    <i class="fas fa-phone-alt"></i> Contact Support
                </a>
            </div>
        </div>

    </div>
</div>

<?php include "layouts/footer.php"; ?>
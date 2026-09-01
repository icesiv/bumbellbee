<?php include 'layouts/header.php'; ?>

<!-- Custom Payment Page Styles -->
<link rel="stylesheet" href="./css/payment.css">

<div class="payment-page-wrapper">
    <div class="container">

        <!-- Navigation Filter Pills -->
        <div class="payment-nav-pills">
            <button class="payment-nav-btn active" data-filter="all">
                <i class="fas fa-th-large"></i> All Methods
            </button>
            <button class="payment-nav-btn" data-filter="mfs">
                <i class="fas fa-mobile-alt"></i> Mobile Banking
            </button>
            <button class="payment-nav-btn" data-filter="bank">
                <i class="fas fa-university"></i> Bank Accounts
            </button>
            <button class="payment-nav-btn" data-filter="guides">
                <i class="fas fa-images"></i> Visual Guides
            </button>
        </div>

        <!-- 1. Mobile Banking Section -->
        <div class="payment-category-block" id="section-mfs">
            <div class="method-section-title">
                <i class="fas fa-mobile-alt"></i> Mobile Banking (MFS)
            </div>
            <div class="row">
                <!-- bKash Card -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="pay-card">
                        <div class="pay-card-header">
                            <div class="pay-brand-info">
                                <div class="pay-brand-icon brand-bkash">
                                    <i class="fas fa-wallet"></i>
                                </div>
                                <div class="pay-brand-title">
                                    <h3>bKash</h3>
                                    <span>Merchant Payment</span>
                                </div>
                            </div>
                            <span class="pay-type-badge">Instant</span>
                        </div>
                        <div class="pay-card-body">
                            <ul class="pay-steps-list">
                                <li>
                                    <span class="pay-step-number">1</span>
                                    Open <strong>bKash App</strong> or dial <strong>*247#</strong>
                                </li>
                                <li>
                                    <span class="pay-step-number">2</span>
                                    Select <strong>"Make Payment"</strong> option
                                </li>
                                <li>
                                    <span class="pay-step-number">3</span>
                                    Enter <strong>Bumbellbee Merchant / Account</strong>
                                </li>
                                <li>
                                    <span class="pay-step-number">4</span>
                                    Enter your <strong>Customer ID</strong> as Reference
                                </li>
                                <li>
                                    <span class="pay-step-number">5</span>
                                    Enter PIN to confirm and save <strong>TrxID</strong>
                                </li>
                            </ul>
                            <button class="btn-guide-action"
                                onclick="openGuideModal('./img/bkash_o.jpg', 'bKash Payment Guide')">
                                <i class="fas fa-eye"></i> View bKash Step Guide
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Nagad Card -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="pay-card">
                        <div class="pay-card-header">
                            <div class="pay-brand-info">
                                <div class="pay-brand-icon brand-nagad">
                                    <i class="fas fa-coins"></i>
                                </div>
                                <div class="pay-brand-title">
                                    <h3>Nagad</h3>
                                    <span>Merchant / Bill Pay</span>
                                </div>
                            </div>
                            <span class="pay-type-badge">Instant</span>
                        </div>
                        <div class="pay-card-body">
                            <ul class="pay-steps-list">
                                <li>
                                    <span class="pay-step-number">1</span>
                                    Open <strong>Nagad App</strong> or dial <strong>*167#</strong>
                                </li>
                                <li>
                                    <span class="pay-step-number">2</span>
                                    Select <strong>"Merchant Pay"</strong> or <strong>"Bill Pay"</strong>
                                </li>
                                <li>
                                    <span class="pay-step-number">3</span>
                                    Enter Bumbellbee Merchant Number
                                </li>
                                <li>
                                    <span class="pay-step-number">4</span>
                                    Enter Amount &amp; your <strong>Subscriber ID</strong>
                                </li>
                                <li>
                                    <span class="pay-step-number">5</span>
                                    Enter your 4-digit PIN to complete
                                </li>
                            </ul>
                            <a href="#support-banner" class="btn-guide-action">
                                <i class="fas fa-info-circle"></i> Need Help with Nagad?
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Pocket Card -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="pay-card">
                        <div class="pay-card-header">
                            <div class="pay-brand-info">
                                <div class="pay-brand-icon brand-pocket">
                                    <i class="fas fa-mobile"></i>
                                </div>
                                <div class="pay-brand-title">
                                    <h3>Pocket</h3>
                                    <span>Mobile Wallet</span>
                                </div>
                            </div>
                            <span class="pay-type-badge">Fast</span>
                        </div>
                        <div class="pay-card-body">
                            <ul class="pay-steps-list">
                                <li>
                                    <span class="pay-step-number">1</span>
                                    Open the <strong>Pocket App</strong> on your device
                                </li>
                                <li>
                                    <span class="pay-step-number">2</span>
                                    Go to <strong>Payment / Bill Pay</strong>
                                </li>
                                <li>
                                    <span class="pay-step-number">3</span>
                                    Choose <strong>Bumbellbee Ltd.</strong>
                                </li>
                                <li>
                                    <span class="pay-step-number">4</span>
                                    Enter Bill Details &amp; confirm with PIN
                                </li>
                            </ul>
                            <button class="btn-guide-action"
                                onclick="openGuideModal('./img/pocket.jpg', 'Pocket Payment Guide')">
                                <i class="fas fa-eye"></i> View Pocket Step Guide
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. Bank Transfer Section -->
        <div class="payment-category-block" id="section-bank">
            <div class="method-section-title">
                <i class="fas fa-university"></i> Bank Transfer &amp; Deposit
            </div>
            <div class="row">
                <!-- Southeast Bank -->
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="pay-card">
                        <div class="pay-card-header">
                            <div class="pay-brand-info">
                                <div class="pay-brand-icon brand-bank-se">
                                    <i class="fas fa-building"></i>
                                </div>
                                <div class="pay-brand-title">
                                    <h3>Southeast Bank Limited</h3>
                                    <span>Bashundhara Branch</span>
                                </div>
                            </div>
                            <span class="pay-type-badge">Bank Deposit</span>
                        </div>
                        <div class="pay-card-body">
                            <div class="bank-info-box">
                                <div class="bank-info-row">
                                    <span class="bank-info-label">Account Name</span>
                                    <span class="bank-info-value">
                                        Bumbellbee Ltd.
                                        <button class="btn-copy-mini"
                                            onclick="copyToClipboard('Bumbellbee Ltd.', this)">
                                            <i class="far fa-copy"></i> Copy
                                        </button>
                                    </span>
                                </div>
                                <div class="bank-info-row">
                                    <span class="bank-info-label">Bank Name</span>
                                    <span class="bank-info-value">Southeast Bank</span>
                                </div>
                                <div class="bank-info-row">
                                    <span class="bank-info-label">Branch</span>
                                    <span class="bank-info-value">Bashundhara Branch</span>
                                </div>
                                <div class="bank-info-row">
                                    <span class="bank-info-label">Deposit Note</span>
                                    <span class="bank-info-value text-muted" style="font-size:12px;">Use Subscriber ID
                                        in Remarks</span>
                                </div>
                            </div>
                            <p style="font-size: 13px; color: #64748b; margin-bottom: 16px;">
                                <i class="fas fa-info-circle text-primary"></i> After depositing/NPSB transfer, please
                                keep your deposit slip or transaction receipt for verification.
                            </p>

                        </div>
                    </div>
                </div>

                <!-- Social Islami Bank Limited -->
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="pay-card">
                        <div class="pay-card-header">
                            <div class="pay-brand-info">
                                <div class="pay-brand-icon brand-bank-sibl">
                                    <i class="fas fa-landmark"></i>
                                </div>
                                <div class="pay-brand-title">
                                    <h3>Social Islami Bank Limited (SIBL)</h3>
                                    <span>Bashundhara Branch</span>
                                </div>
                            </div>
                            <span class="pay-type-badge">Bank Deposit</span>
                        </div>
                        <div class="pay-card-body">
                            <div class="bank-info-box">
                                <div class="bank-info-row">
                                    <span class="bank-info-label">Account Name</span>
                                    <span class="bank-info-value">
                                        Bumbellbee Ltd.
                                        <button class="btn-copy-mini"
                                            onclick="copyToClipboard('Bumbellbee Ltd.', this)">
                                            <i class="far fa-copy"></i> Copy
                                        </button>
                                    </span>
                                </div>
                                <div class="bank-info-row">
                                    <span class="bank-info-label">Bank Name</span>
                                    <span class="bank-info-value">Social Islami Bank (SIBL)</span>
                                </div>
                                <div class="bank-info-row">
                                    <span class="bank-info-label">Branch</span>
                                    <span class="bank-info-value">Bashundhara Branch</span>
                                </div>
                                <div class="bank-info-row">
                                    <span class="bank-info-label">Deposit Note</span>
                                    <span class="bank-info-value text-muted" style="font-size:12px;">Use Subscriber ID
                                        in Remarks</span>
                                </div>
                            </div>
                            <p style="font-size: 13px; color: #64748b; margin-bottom: 16px;">
                                <i class="fas fa-info-circle text-primary"></i> Transfer via BEFTN/NPSB/i-Banking or
                                direct branch deposit.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. Visual Step-by-Step Guides Section -->
        <div class="visual-guides-card payment-category-block" id="section-guides">
            <div class="method-section-title">
                <i class="fas fa-images"></i> Visual Step-by-Step Payment Guides
            </div>
            <p style="color: #64748b; font-size: 14px; margin-bottom: 20px;">
                Follow our pictorial guide to complete your payment smoothly on mobile banking apps.
            </p>

            <div class="guide-tabs">
                <button class="guide-tab-btn active" onclick="switchGuide('bkash', this)">
                    <i class="fas fa-wallet"></i> bKash Payment Guide
                </button>
                <button class="guide-tab-btn" onclick="switchGuide('pocket', this)">
                    <i class="fas fa-mobile"></i> Pocket Payment Guide
                </button>
            </div>

            <!-- bKash Preview -->
            <div id="guide-tab-bkash" class="guide-image-container">
                <img src="./img/bkash_o.jpg" alt="bKash Payment Guide" class="guide-preview-img"
                    onclick="openGuideModal('./img/bkash_o.jpg', 'bKash Payment Guide')">
                <div class="zoom-hint">
                    <i class="fas fa-search-plus"></i> Click image to enlarge full screen
                </div>
            </div>

            <!-- Pocket Preview -->
            <div id="guide-tab-pocket" class="guide-image-container" style="display: none;">
                <img src="./img/pocket.jpg" alt="Pocket Payment Guide" class="guide-preview-img"
                    onclick="openGuideModal('./img/pocket.jpg', 'Pocket Payment Guide')">
                <div class="zoom-hint">
                    <i class="fas fa-search-plus"></i> Click image to enlarge full screen
                </div>
            </div>
        </div>

        <!-- 5. Support & Assistance Banner -->
        <div class="payment-support-banner" id="support-banner">
            <div class="support-banner-content">
                <h3>Need Help with your Payment?</h3>
                <p>
                    Our support team is available during office hours (Sat – Thu, 9 AM – 6 PM) to assist with your
                    billing inquiries, reactivations, or transaction verification.
                </p>
            </div>
            <div class="support-cta-box">
                <a href="tel:09678300700" class="support-phone-btn">
                    <i class="fas fa-phone-alt"></i> 09 678 300700
                </a>
                <a href="contact-us" class="btn btn-outline-light"
                    style="border-radius: 12px; padding: 12px 20px; font-weight: 600; font-size: 14px;">
                    <i class="fas fa-envelope"></i> Contact Us
                </a>
            </div>
        </div>

    </div>
</div>

<!-- Modal Lightbox for Guide Images -->
<div id="guideModal" class="guide-modal" onclick="closeGuideModal(event)">
    <div class="guide-modal-content" onclick="event.stopPropagation()">
        <button class="guide-modal-close" onclick="closeGuideModal()">&times;</button>
        <img id="modalImg" src="" alt="Payment Guide" class="guide-modal-img">
    </div>
</div>

<!-- Interactive JavaScript -->
<script>
    // Copy to Clipboard with temporary button tooltip feedback
    function copyToClipboard(text, btnElement) {
        if (navigator.clipboard && window.isSecureContext) {
            navigator.clipboard.writeText(text).then(() => {
                showCopyFeedback(btnElement);
            });
        } else {
            // Fallback for non-https or older browsers
            let tempInput = document.createElement("input");
            tempInput.value = text;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand("copy");
            document.body.removeChild(tempInput);
            showCopyFeedback(btnElement);
        }
    }

    function showCopyFeedback(btn) {
        let originalText = btn.innerHTML;
        btn.innerHTML = '<i class="fas fa-check text-success"></i> Copied!';
        btn.style.borderColor = '#10b981';
        setTimeout(() => {
            btn.innerHTML = originalText;
            btn.style.borderColor = '';
        }, 2000);
    }

    // Switch between visual guide tabs
    function switchGuide(type, btn) {
        document.querySelectorAll('.guide-tab-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        document.getElementById('guide-tab-bkash').style.display = type === 'bkash' ? 'block' : 'none';
        document.getElementById('guide-tab-pocket').style.display = type === 'pocket' ? 'block' : 'none';
    }

    // Guide Modal Lightbox
    function openGuideModal(imgSrc, title) {
        const modal = document.getElementById('guideModal');
        const modalImg = document.getElementById('modalImg');
        modalImg.src = imgSrc;
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeGuideModal() {
        const modal = document.getElementById('guideModal');
        modal.classList.remove('active');
        document.body.style.overflow = 'auto';
    }

    // ESC key closes modal
    document.addEventListener('keydown', function (event) {
        if (event.key === "Escape") {
            closeGuideModal();
        }
    });

    // Category Filtering
    document.addEventListener('DOMContentLoaded', function () {
        const filterBtns = document.querySelectorAll('.payment-nav-btn');
        const sections = {
            'mfs': document.getElementById('section-mfs'),
            'bank': document.getElementById('section-bank'),
            'card': document.getElementById('section-card'),
            'guides': document.getElementById('section-guides')
        };

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                filterBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                this.scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });

                const filter = this.getAttribute('data-filter');

                if (filter === 'all') {
                    Object.values(sections).forEach(sec => {
                        if (sec) sec.style.display = 'block';
                    });
                } else {
                    Object.entries(sections).forEach(([key, sec]) => {
                        if (sec) {
                            sec.style.display = (key === filter) ? 'block' : 'none';
                        }
                    });
                    if (sections[filter]) {
                        sections[filter].scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                }
            });
        });
    });
</script>

<?php include "layouts/footer.php"; ?>
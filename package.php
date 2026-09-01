<?php include "layouts/header.php"; ?>

<!-- Custom Package & Channel Explorer Styles -->
<link rel="stylesheet" href="./css/package.css">

<div class="package-page-wrapper">
    <div class="container">

        <!-- Hero Header -->
        <div class="package-hero">
            <div class="badge-pill-custom">
                <i class="fas fa-tv"></i> Digital HD Television Packages
            </div>
            <h1>Choose Your Ideal Cable TV Package</h1>
            <p class="lead-text">
                Experience crystal-clear high definition broadcast, dynamic surround sound, and uncompressed fiber
                signal stability with Bumbellbee's digital HD Set-Top Box packages.
            </p>
        </div>

        <!-- 1. Package Tier Comparison Grid -->
        <div class="packages-tier-grid">
            <!-- Standard Package -->
            <div class="tier-card active-tier" id="tier-standard"
                onclick="selectPackage('standard', 'data/AKASH.json', this)">
                <span class="tier-badge">Popular Choice</span>
                <div class="tier-header">
                    <h3 class="tier-title">STANDARD PACKAGE</h3>
                    <div class="tier-price-box">
                        <span class="tier-currency">৳</span>
                        <span class="tier-price">400</span>
                        <span class="tier-price-period">/ Month + VAT</span>
                    </div>
                </div>
                <div class="tier-channels-pill">
                    <i class="fas fa-layer-group"></i> 220+ Digital Channels
                </div>
                <ul class="tier-features">
                    <li><i class="fas fa-check-circle"></i> All Major Bangladeshi National &amp; Satellite Channels</li>
                    <li><i class="fas fa-check-circle"></i> 24/7 Live News &amp; Current Affairs Channels</li>
                    <li><i class="fas fa-check-circle"></i> Popular Entertainment, Drama &amp; Music</li>
                    <li><i class="fas fa-check-circle"></i> Standard Sports &amp; Kids Entertainment</li>
                    <li><i class="fas fa-check-circle"></i> Smart Electronic Program Guide (EPG)</li>
                </ul>
                <button class="btn-select-tier">
                    <i class="fas fa-list-ul"></i> Explore Standard Lineup
                </button>
            </div>

            <!-- Premium Package -->
            <div class="tier-card featured-tier" id="tier-premium"
                onclick="selectPackage('premium', 'data/PREMIUM.json', this)">
                <span class="tier-badge" style="background:#f44616; color:#fff;">★ Best Value</span>
                <div class="tier-header">
                    <h3 class="tier-title">PREMIUM PACKAGE</h3>
                    <div class="tier-price-box">
                        <span class="tier-currency">৳</span>
                        <span class="tier-price">600</span>
                        <span class="tier-price-period">/ Month + VAT</span>
                    </div>
                </div>
                <div class="tier-channels-pill" style="background:#fef3c7; color:#b45309;">
                    <i class="fas fa-crown"></i> 290+ Channels (Full HD Lineup)
                </div>
                <ul class="tier-features">
                    <li><i class="fas fa-check-circle"></i> <strong>Includes all 100+ Full HD Channels</strong></li>
                    <li><i class="fas fa-check-circle"></i> Live International Sports (T Sports HD, Star Sports, Sony
                        Sports)</li>
                    <li><i class="fas fa-check-circle"></i> Premium Blockbuster Movies (Star Movies, Sony MAX, Zee
                        Cinema)</li>
                    <li><i class="fas fa-check-circle"></i> Global Infotainment (Discovery HD, Nat Geo, Animal Planet)
                    </li>
                    <li><i class="fas fa-check-circle"></i> Uncompressed HD Picture &amp; Dolby Audio Clarity</li>
                </ul>
                <button class="btn-select-tier">
                    <i class="fas fa-list-ul"></i> Explore Premium Lineup
                </button>
            </div>
        </div>

        <!-- 2. Add-on Packs Quick Switcher -->
        <div class="addon-pills-row">
            <span
                style="font-size: 13px; font-weight:700; color:#475569; display:flex; align-items:center; margin-right:8px;">
                <i class="fas fa-filter text-danger" style="margin-right:6px;"></i> Quick Lineup View:
            </span>
            <button class="addon-pill-btn active" id="btn-pack-akash"
                onclick="loadPackageData('data/AKASH.json', 'Standard Package', this)">
                <i class="fas fa-layer-group"></i> Standard (220+)
            </button>
            <button class="addon-pill-btn" id="btn-pack-premium"
                onclick="loadPackageData('data/PREMIUM.json', 'Premium Package', this)">
                <i class="fas fa-crown"></i> Premium (290+)
            </button>
            <button class="addon-pill-btn" onclick="loadPackageData('data/HD.json', 'HD Channels Special', this)">
                <i class="fas fa-tv"></i> HD Channels
            </button>
            <button class="addon-pill-btn" onclick="loadPackageData('data/Sports.json', 'Sports Bouquet', this)">
                <i class="fas fa-futbol"></i> Sports Special
            </button>
            <button class="addon-pill-btn"
                onclick="loadPackageData('data/HindiMastii.json', 'Hindi Entertainment', this)">
                <i class="fas fa-film"></i> Hindi Mastii
            </button>
            <button class="addon-pill-btn"
                onclick="loadPackageData('data/EnglishThrill.json', 'English Thrill & Movies', this)">
                <i class="fas fa-video"></i> English Thrill
            </button>
        </div>

        <!-- 3. Channel Explorer Container -->
        <div class="channel-explorer-card" id="channel-explorer">
            <div class="explorer-header">
                <div class="explorer-title">
                    <h3 id="currentPackTitle">Standard Package Channel Lineup</h3>
                    <p id="currentPackSubtitle">Browse all supported channels with official logos, SIDs, and categories.
                    </p>
                </div>

                <div class="explorer-controls">

                    <!-- View Switcher -->
                    <div class="view-switch-group">
                        <button class="view-btn active" id="viewBtnGrid" onclick="switchViewMode('grid')">
                            <i class="fas fa-th-large"></i> Grid
                        </button>
                        <button class="view-btn" id="viewBtnTable" onclick="switchViewMode('table')">
                            <i class="fas fa-list"></i> Table
                        </button>
                    </div>
                </div>
            </div>

            <!-- Category Filter Bar -->
            <div class="category-filter-bar" id="categoryFilterBar">
                <button class="cat-pill active" onclick="filterByCategory('all', this)">All Channels</button>
                <button class="cat-pill" onclick="filterByCategory('bangladeshi', this)">Bangladeshi</button>
                <button class="cat-pill" onclick="filterByCategory('news', this)">News</button>
                <button class="cat-pill" onclick="filterByCategory('sports', this)">Sports</button>
                <button class="cat-pill" onclick="filterByCategory('movies', this)">Movies</button>
                <button class="cat-pill" onclick="filterByCategory('gec', this)">Entertainment (GEC)</button>
                <button class="cat-pill" onclick="filterByCategory('hd', this)">HD Channels</button>
                <button class="cat-pill" onclick="filterByCategory('infotainment', this)">Infotainment</button>
                <button class="cat-pill" onclick="filterByCategory('kids', this)">Kids</button>
                <button class="cat-pill" onclick="filterByCategory('music', this)">Music</button>
            </div>

            <!-- Channels Counter Info -->
            <div class="channel-counter-info">
                <span id="channelCountDisplay"><i class="fas fa-spinner fa-spin"></i> Loading channels...</span>
                <span style="font-size: 12px; color: #94a3b8;"><i class="fas fa-info-circle"></i> Logos powered by IPTV
                    TV Database</span>
            </div>

            <!-- Channels Grid View -->
            <div class="channels-grid-container" id="channelsGridContainer">
                <!-- Dynamically Rendered via JS -->
            </div>

            <!-- Channels Table View -->
            <div class="channels-table-wrapper" id="channelsTableWrapper">
                <table class="table-custom-channels">
                    <thead>
                        <tr>
                            <th style="width: 80px;">SID</th>
                            <th style="width: 60px;">Logo</th>
                            <th>Channel Name</th>
                            <th>Category</th>
                            <th style="width: 100px; text-align:center;">Quality</th>
                        </tr>
                    </thead>
                    <tbody id="channelsTableBody">
                        <!-- Dynamically Rendered via JS -->
                    </tbody>
                </table>
            </div>

            <!-- No Results Message -->
            <div id="noResultsMsg" style="display: none; text-align: center; padding: 40px; color: #64748b;">
                <i class="fas fa-search"
                    style="font-size: 32px; color: #cbd5e1; margin-bottom: 12px; display:block;"></i>
                <h5>No channels found</h5>
                <p>Try searching with a different channel name or select "All Channels".</p>
            </div>

            <!-- Pagination Wrapper -->
            <div class="channels-pagination-wrapper" id="channelsPaginationWrapper">
                <div class="page-size-wrap">
                    <span>Show</span>
                    <select class="page-size-select" id="pageSizeSelect" onchange="handlePageSizeChange(this.value)">
                        <option value="24" selected>24 channels</option>
                        <option value="48">48 channels</option>
                        <option value="96">96 channels</option>
                        <option value="all">All channels</option>
                    </select>
                    <span>per page</span>
                </div>

                <div class="pagination-controls-row" id="paginationControls">
                    <!-- Dynamically Generated Pagination Buttons -->
                </div>

                <div class="pagination-info-box" id="paginationSummary">
                    <!-- Showing 1 to 24 of 220 -->
                </div>
            </div>

        </div>

    </div>
</div>

<!-- Interactive Package & Logo Loader JS -->
<script>
    let channelLogosMap = {};
    let currentRawData = [];
    let activeCategory = 'all';
    let searchQuery = '';
    let currentViewMode = 'grid';
    let currentPage = 1;
    let pageSize = 24;

    // Initialize Logos and Default Package Data
    document.addEventListener('DOMContentLoaded', async function () {
        try {
            // Load channel logos dataset
            const logoRes = await fetch('data/channel_logos.json');
            if (logoRes.ok) {
                channelLogosMap = await logoRes.json();
            }
        } catch (e) {
            console.warn('Channel logos map load fallback:', e);
        }

        // Load initial standard package
        loadPackageData('data/AKASH.json', 'Standard Package');
    });

    // Tier card selector
    function selectPackage(tier, dataSource, cardEl) {
        document.querySelectorAll('.tier-card').forEach(c => c.classList.remove('active-tier'));
        if (cardEl) cardEl.classList.add('active-tier');

        const title = tier === 'premium' ? 'Premium Package' : 'Standard Package';
        currentPage = 1;
        loadPackageData(dataSource, title);

        document.getElementById('channel-explorer').scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    // Load package data from JSON source
    async function loadPackageData(sourceUrl, title, btnElement) {
        if (btnElement) {
            document.querySelectorAll('.addon-pill-btn').forEach(b => b.classList.remove('active'));
            btnElement.classList.add('active');
        }

        if (title) {
            document.getElementById('currentPackTitle').textContent = `${title} Lineup`;
        }

        document.getElementById('channelCountDisplay').innerHTML = '<i class="fas fa-spinner fa-spin"></i> Loading channels...';
        currentPage = 1;

        try {
            const res = await fetch(sourceUrl);
            const json = await res.json();
            currentRawData = json.data || [];
            renderChannels();
        } catch (e) {
            console.error('Error loading package JSON:', e);
            document.getElementById('channelCountDisplay').textContent = 'Error loading channels.';
        }
    }

    // Helper to normalize and get logo
    function getChannelLogo(channelName) {
        if (channelLogosMap[channelName]) {
            return channelLogosMap[channelName];
        }

        // Fuzzy lookup in logos map
        const clean = channelName.toLowerCase().replace(/\b(hd|world|tv|select|asia|india|bangla|national)\b/g, '').replace(/[^a-z0-9]/g, '');
        for (let key in channelLogosMap) {
            const kClean = key.toLowerCase().replace(/\b(hd|world|tv|select|asia|india|bangla|national)\b/g, '').replace(/[^a-z0-9]/g, '');
            if (kClean === clean || (clean.length >= 4 && kClean.includes(clean))) {
                return channelLogosMap[key];
            }
        }

        return null;
    }

    // Helper to get initials fallback
    function getInitials(name) {
        return name.split(' ').map(w => w[0]).filter(Boolean).slice(0, 2).join('').toUpperCase() || 'TV';
    }

    // Render channel cards and table rows with pagination
    function renderChannels(shouldScroll = false) {
        const gridContainer = document.getElementById('channelsGridContainer');
        const tableBody = document.getElementById('channelsTableBody');
        const noResults = document.getElementById('noResultsMsg');
        const paginationWrapper = document.getElementById('channelsPaginationWrapper');

        gridContainer.innerHTML = '';
        tableBody.innerHTML = '';

        const filtered = currentRawData.filter(item => {
            if (!Array.isArray(item) || item.length < 3) return false;
            const name = String(item[0]);
            const sid = String(item[1]);
            const cat = String(item[2]);

            // Search Query Filter
            if (searchQuery) {
                const q = searchQuery.toLowerCase();
                const matchName = name.toLowerCase().includes(q);
                const matchSid = sid.toLowerCase().includes(q);
                const matchCat = cat.toLowerCase().includes(q);
                if (!matchName && !matchSid && !matchCat) return false;
            }

            // Category Filter
            if (activeCategory !== 'all') {
                const catLower = cat.toLowerCase();
                const nameLower = name.toLowerCase();

                if (activeCategory === 'hd') {
                    return nameLower.includes('hd') || catLower.includes('hd');
                } else if (activeCategory === 'bangladeshi') {
                    return catLower.includes('bangla') || catLower.includes('bangladeshi');
                } else if (activeCategory === 'news') {
                    return catLower.includes('news');
                } else if (activeCategory === 'sports') {
                    return catLower.includes('sport');
                } else if (activeCategory === 'movies') {
                    return catLower.includes('movie') || catLower.includes('cinema');
                } else if (activeCategory === 'gec') {
                    return catLower.includes('gec') || catLower.includes('general') || catLower.includes('entertainment');
                } else if (activeCategory === 'infotainment') {
                    return catLower.includes('info') || catLower.includes('discovery') || catLower.includes('doc');
                } else if (activeCategory === 'kids') {
                    return catLower.includes('kid') || catLower.includes('cartoon');
                } else if (activeCategory === 'music') {
                    return catLower.includes('music') || catLower.includes('gaan');
                } else {
                    return catLower.includes(activeCategory);
                }
            }

            return true;
        });

        const totalItems = filtered.length;
        document.getElementById('channelCountDisplay').innerHTML = `Total <strong>${totalItems}</strong> channels available`;

        if (totalItems === 0) {
            noResults.style.display = 'block';
            paginationWrapper.style.display = 'none';
            return;
        } else {
            noResults.style.display = 'none';
            paginationWrapper.style.display = 'flex';
        }

        // Pagination calculations
        const effectivePageSize = (pageSize === 'all') ? totalItems : parseInt(pageSize);
        const totalPages = Math.max(1, Math.ceil(totalItems / effectivePageSize));
        if (currentPage > totalPages) currentPage = totalPages;

        const startIndex = (pageSize === 'all') ? 0 : (currentPage - 1) * effectivePageSize;
        const endIndex = (pageSize === 'all') ? totalItems : Math.min(startIndex + effectivePageSize, totalItems);
        const pagedData = filtered.slice(startIndex, endIndex);

        // Update Summary Text
        document.getElementById('paginationSummary').innerHTML = `Showing <strong>${startIndex + 1}</strong> - <strong>${endIndex}</strong> of <strong>${totalItems}</strong> channels`;

        // Render Paged Data
        pagedData.forEach(item => {
            const name = String(item[0]);
            const sid = String(item[1]);
            const cat = String(item[2]);
            const isHD = name.toUpperCase().includes('HD');
            const logoUrl = getChannelLogo(name);
            const initials = getInitials(name);

            // 1. Grid Card
            const card = document.createElement('div');
            card.className = 'channel-card-item';

            let logoHtml = '';
            if (logoUrl) {
                logoHtml = `<img src="${logoUrl}" alt="${name}" class="channel-logo-img" loading="lazy" onerror="this.outerHTML='<div class=\\'channel-logo-fallback\\'>${initials}</div>'">`;
            } else {
                logoHtml = `<div class="channel-logo-fallback">${initials}</div>`;
            }

            card.innerHTML = `
                <span class="channel-sid-badge">#${sid}</span>
                ${isHD ? '<span class="channel-hd-badge">HD</span>' : ''}
                <div class="channel-logo-wrap">
                    ${logoHtml}
                </div>
                <div class="channel-card-name" title="${name}">${name}</div>
                <span class="channel-card-category">${cat}</span>
            `;
            gridContainer.appendChild(card);

            // 2. Table Row
            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td><strong style="color:#0f172a;">#${sid}</strong></td>
                <td>
                    ${logoUrl ?
                    `<img src="${logoUrl}" alt="${name}" class="table-channel-logo" loading="lazy" onerror="this.style.display='none'">` :
                    `<span class="badge badge-light border">${initials}</span>`}
                </td>
                <td><strong>${name}</strong></td>
                <td><span class="badge badge-light" style="font-size:12px; font-weight:600;">${cat}</span></td>
                <td style="text-align:center;">
                    ${isHD ? '<span class="badge badge-danger px-2 py-1" style="font-weight:700;">HD</span>' : '<span class="text-muted" style="font-size:12px;">SD</span>'}
                </td>
            `;
            tableBody.appendChild(tr);
        });

        // Render Pagination Controls
        renderPaginationControls(totalPages);

        if (shouldScroll) {
            document.getElementById('channel-explorer').scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }

    // Generate smart pagination buttons
    function renderPaginationControls(totalPages) {
        const controlsContainer = document.getElementById('paginationControls');
        controlsContainer.innerHTML = '';

        if (totalPages <= 1) {
            return;
        }

        // Previous Button
        const prevBtn = document.createElement('button');
        prevBtn.className = 'pagination-btn';
        prevBtn.innerHTML = '<i class="fas fa-chevron-left"></i>';
        prevBtn.disabled = currentPage === 1;
        prevBtn.onclick = () => goToPage(currentPage - 1);
        controlsContainer.appendChild(prevBtn);

        // Page Number Algorithm with Smart Ellipsis
        const delta = 2;
        const range = [];
        for (let i = Math.max(2, currentPage - delta); i <= Math.min(totalPages - 1, currentPage + delta); i++) {
            range.push(i);
        }

        // Always show Page 1
        const firstBtn = document.createElement('button');
        firstBtn.className = `pagination-btn ${currentPage === 1 ? 'active' : ''}`;
        firstBtn.textContent = '1';
        firstBtn.onclick = () => goToPage(1);
        controlsContainer.appendChild(firstBtn);

        // Left Ellipsis
        if (currentPage - delta > 2) {
            const ellipsis = document.createElement('span');
            ellipsis.className = 'pagination-ellipsis';
            ellipsis.textContent = '...';
            controlsContainer.appendChild(ellipsis);
        }

        // Middle Pages
        range.forEach(p => {
            const pageBtn = document.createElement('button');
            pageBtn.className = `pagination-btn ${currentPage === p ? 'active' : ''}`;
            pageBtn.textContent = p;
            pageBtn.onclick = () => goToPage(p);
            controlsContainer.appendChild(pageBtn);
        });

        // Right Ellipsis
        if (currentPage + delta < totalPages - 1) {
            const ellipsis = document.createElement('span');
            ellipsis.className = 'pagination-ellipsis';
            ellipsis.textContent = '...';
            controlsContainer.appendChild(ellipsis);
        }

        // Always show Last Page
        if (totalPages > 1) {
            const lastBtn = document.createElement('button');
            lastBtn.className = `pagination-btn ${currentPage === totalPages ? 'active' : ''}`;
            lastBtn.textContent = totalPages;
            lastBtn.onclick = () => goToPage(totalPages);
            controlsContainer.appendChild(lastBtn);
        }

        // Next Button
        const nextBtn = document.createElement('button');
        nextBtn.className = 'pagination-btn';
        nextBtn.innerHTML = '<i class="fas fa-chevron-right"></i>';
        nextBtn.disabled = currentPage === totalPages;
        nextBtn.onclick = () => goToPage(currentPage + 1);
        controlsContainer.appendChild(nextBtn);
    }

    // Go to specific page
    function goToPage(page) {
        currentPage = page;
        renderChannels(true);
    }

    // Page size dropdown change
    function handlePageSizeChange(val) {
        pageSize = val;
        currentPage = 1;
        renderChannels(true);
    }

    // Category filter click
    function filterByCategory(cat, btn) {
        document.querySelectorAll('.cat-pill').forEach(p => p.classList.remove('active'));
        if (btn) btn.classList.add('active');
        activeCategory = cat;
        currentPage = 1;
        renderChannels();
    }

    // Search input handler
    function handleChannelSearch() {
        const searchInput = document.getElementById('channelSearchInput');
        searchQuery = searchInput ? searchInput.value.trim() : '';
        currentPage = 1;
        renderChannels();
    }

    // Switch between Grid and Table views
    function switchViewMode(mode) {
        currentViewMode = mode;
        const gridBtn = document.getElementById('viewBtnGrid');
        const tableBtn = document.getElementById('viewBtnTable');
        const gridContainer = document.getElementById('channelsGridContainer');
        const tableWrapper = document.getElementById('channelsTableWrapper');

        if (mode === 'grid') {
            gridBtn.classList.add('active');
            tableBtn.classList.remove('active');
            gridContainer.style.display = 'grid';
            tableWrapper.style.display = 'none';
        } else {
            tableBtn.classList.add('active');
            gridBtn.classList.remove('active');
            gridContainer.style.display = 'none';
            tableWrapper.style.display = 'block';
        }
    }
</script>

<?php include "layouts/footer.php"; ?>
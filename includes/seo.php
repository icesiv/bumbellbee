<?php
/**
 * SEO Configuration and Meta Helper for Bumbellbee Ltd.
 */

if (!function_exists('getSeoConfig')) {
    function getSeoBaseUrl(): string {
        $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'https'; // Default to https for SEO
        $host = $_SERVER['HTTP_HOST'] ?? 'bumbellbee.com';
        
        // In production, keep bumbellbee.com as canonical domain
        if (strpos($host, 'localhost') === false && strpos($host, '.test') === false && strpos($host, '127.0.0.1') === false) {
            return 'https://bumbellbee.com';
        }
        
        return $scheme . '://' . $host;
    }

    function getSeoConfig(string $pageKey = ''): array {
        $baseUrl = getSeoBaseUrl();
        $productionBaseUrl = 'https://bumbellbee.com';

        $pages = [
            'home' => [
                'title' => 'Bumbellbee Ltd. - Digital HD Television & Cable Network in Bangladesh',
                'description' => 'Experience crystal-clear 1080p and 4K digital cable TV with Bumbellbee HD Set-Top Box. 100+ Full HD channels, fiber stability, and instant bill payment. A sister concern of Anvir Bashundhara Group.',
                'keywords' => 'Bumbellbee, cable TV Bangladesh, HD cable television, digital set top box, Bashundhara cable TV, ABG Bashundhara, HD TV channels Dhaka, digital TV provider',
                'canonical' => $baseUrl . '/',
                'ogType' => 'website',
                'ogImage' => $baseUrl . '/img/about_hero.jpg',
                'breadcrumbs' => [
                    ['name' => 'Home', 'url' => $baseUrl . '/']
                ],
                'schemas' => [
                    [
                        '@context' => 'https://schema.org',
                        '@type' => 'WebSite',
                        '@id' => $productionBaseUrl . '/#website',
                        'url' => $productionBaseUrl . '/',
                        'name' => 'Bumbellbee Limited',
                        'description' => 'Digital HD Television & Cable Network Provider in Bangladesh',
                        'publisher' => [
                            '@id' => $productionBaseUrl . '/#organization'
                        ],
                        'inLanguage' => 'en-US'
                    ],
                    [
                        '@context' => 'https://schema.org',
                        '@type' => 'Organization',
                        '@id' => $productionBaseUrl . '/#organization',
                        'name' => 'Bumbellbee Limited',
                        'alternateName' => 'Bumbellbee Ltd.',
                        'url' => $productionBaseUrl . '/',
                        'logo' => [
                            '@type' => 'ImageObject',
                            'url' => $productionBaseUrl . '/img/logo.png',
                            'caption' => 'Bumbellbee Limited Logo'
                        ],
                        'image' => $productionBaseUrl . '/img/about_hero.jpg',
                        'description' => 'Premier digital media and cable service provider in Bangladesh, a proud sister concern of Anvir Bashundhara Group.',
                        'telephone' => '+8809678300700',
                        'email' => 'care@bumbellbee.com',
                        'address' => [
                            '@type' => 'PostalAddress',
                            'streetAddress' => 'ABG Tower, Plot# 440, 441 & 442, Road – 18, Block# A, Bashundhara R/A',
                            'addressLocality' => 'Dhaka',
                            'postalCode' => '1229',
                            'addressCountry' => 'BD'
                        ],
                        'parentOrganization' => [
                            '@type' => 'Organization',
                            'name' => 'Anvir Bashundhara Group',
                            'url' => 'https://www.abgbashundhara.com/'
                        ],
                        'sameAs' => [
                            'https://www.facebook.com/bumbellbeelimited',
                            'https://www.linkedin.com/in/bumbellbee-ltd-1b76511b5/'
                        ]
                    ],
                    [
                        '@context' => 'https://schema.org',
                        '@type' => 'Service',
                        '@id' => $productionBaseUrl . '/#service-cable-tv',
                        'name' => 'Digital HD Cable Television Broadcasting',
                        'serviceType' => 'Cable Television & Media Broadcast',
                        'provider' => [
                            '@id' => $productionBaseUrl . '/#organization'
                        ],
                        'areaServed' => [
                            '@type' => 'AdministrativeArea',
                            'name' => 'Dhaka, Bangladesh'
                        ],
                        'description' => 'High-definition digital cable broadcasting with 100+ Full HD channels, Dolby audio, electronic program guide (EPG), and fast technician service.'
                    ]
                ]
            ],
            'packages' => [
                'title' => 'Digital HD Cable TV Packages & Channel Lineup | Bumbellbee Ltd.',
                'description' => 'Explore Bumbellbee cable TV packages starting at ৳400/month. View 290+ digital channels, 100+ Full HD channels including sports, news, movies, and infotainment.',
                'keywords' => 'Bumbellbee packages, cable TV channel lineup, standard package 400 BDT, premium package 600 BDT, HD TV channels list, sports channels Bangladesh, live news TV',
                'canonical' => $baseUrl . '/packages',
                'ogType' => 'website',
                'ogImage' => $baseUrl . '/img/about_hero.jpg',
                'breadcrumbs' => [
                    ['name' => 'Home', 'url' => $baseUrl . '/'],
                    ['name' => 'Packages', 'url' => $baseUrl . '/packages']
                ],
                'schemas' => [
                    [
                        '@context' => 'https://schema.org',
                        '@type' => 'OfferCatalog',
                        'name' => 'Bumbellbee Cable Television Subscription Packages',
                        'itemListElement' => [
                            [
                                '@type' => 'Product',
                                'name' => 'Bumbellbee Standard Package',
                                'description' => 'Standard cable television package with 220+ digital channels, all major Bangladeshi national & satellite channels, 24/7 live news, entertainment, and smart EPG.',
                                'brand' => [
                                    '@type' => 'Brand',
                                    'name' => 'Bumbellbee'
                                ],
                                'offers' => [
                                    '@type' => 'Offer',
                                    'price' => '400',
                                    'priceCurrency' => 'BDT',
                                    'availability' => 'https://schema.org/InStock',
                                    'url' => $productionBaseUrl . '/packages',
                                    'priceValidUntil' => date('Y') . '-12-31'
                                ]
                            ],
                            [
                                '@type' => 'Product',
                                'name' => 'Bumbellbee Premium Package',
                                'description' => 'Premium cable television package featuring 290+ digital channels including 100+ Full HD channels, live sports (T Sports HD, Star Sports), movies, and Discovery HD.',
                                'brand' => [
                                    '@type' => 'Brand',
                                    'name' => 'Bumbellbee'
                                ],
                                'offers' => [
                                    '@type' => 'Offer',
                                    'price' => '600',
                                    'priceCurrency' => 'BDT',
                                    'availability' => 'https://schema.org/InStock',
                                    'url' => $productionBaseUrl . '/packages',
                                    'priceValidUntil' => date('Y') . '-12-31'
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'payment' => [
                'title' => 'Pay Cable TV Bill Online - bKash, Nagad, Pocket & Bank | Bumbellbee',
                'description' => 'Conveniently pay your Bumbellbee monthly cable TV bill via bKash, Nagad, Pocket wallet, Southeast Bank, or SIBL. Instant account activation and step-by-step guides.',
                'keywords' => 'Bumbellbee bill payment, bKash cable bill, Nagad cable pay, Pocket wallet Bumbellbee, Southeast Bank deposit, SIBL bill payment, pay TV bill online Dhaka',
                'canonical' => $baseUrl . '/payment',
                'ogType' => 'website',
                'ogImage' => $baseUrl . '/img/bkash_o.jpg',
                'breadcrumbs' => [
                    ['name' => 'Home', 'url' => $baseUrl . '/'],
                    ['name' => 'Payment', 'url' => $baseUrl . '/payment']
                ],
                'schemas' => [
                    [
                        '@context' => 'https://schema.org',
                        '@type' => 'HowTo',
                        'name' => 'How to Pay Bumbellbee Cable TV Bill via bKash',
                        'description' => 'Step-by-step guide to paying your monthly Bumbellbee cable subscription using the bKash App or USSD *247#.',
                        'step' => [
                            [
                                '@type' => 'HowToStep',
                                'position' => 1,
                                'name' => 'Open bKash',
                                'text' => 'Open the bKash App or dial *247# on your mobile device.'
                            ],
                            [
                                '@type' => 'HowToStep',
                                'position' => 2,
                                'name' => 'Make Payment',
                                'text' => 'Select the Make Payment option.'
                            ],
                            [
                                '@type' => 'HowToStep',
                                'position' => 3,
                                'name' => 'Enter Merchant Details',
                                'text' => 'Enter the Bumbellbee Merchant / Account number.'
                            ],
                            [
                                '@type' => 'HowToStep',
                                'position' => 4,
                                'name' => 'Add Customer ID',
                                'text' => 'Enter your Customer ID as Reference.'
                            ],
                            [
                                '@type' => 'HowToStep',
                                'position' => 5,
                                'name' => 'Confirm Payment',
                                'text' => 'Enter your PIN to confirm payment and save the TrxID receipt.'
                            ]
                        ]
                    ],
                    [
                        '@context' => 'https://schema.org',
                        '@type' => 'FAQPage',
                        'mainEntity' => [
                            [
                                '@type' => 'Question',
                                'name' => 'What digital payment methods are accepted for Bumbellbee cable bills?',
                                'acceptedAnswer' => [
                                    '@type' => 'Answer',
                                    'text' => 'Bumbellbee accepts bKash, Nagad, Pocket mobile wallet, and direct bank deposits through Southeast Bank and Social Islami Bank Limited (SIBL).'
                                ]
                            ],
                            [
                                '@type' => 'Question',
                                'name' => 'How fast is my cable connection activated after payment?',
                                'acceptedAnswer' => [
                                    '@type' => 'Answer',
                                    'text' => 'Payments made via bKash, Nagad, or Pocket wallet are activated almost instantaneously upon entering your correct Subscriber ID.'
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'about' => [
                'title' => 'About Us - Digital Television & Media | Bumbellbee Ltd.',
                'description' => 'Learn about Bumbellbee Limited, a sister concern of Anvir Bashundhara Group under the leadership of Sayem Sobhan Anvir. Delivering cutting-edge HD cable TV across Dhaka.',
                'keywords' => 'About Bumbellbee, Anvir Bashundhara Group cable TV, Sayem Sobhan Anvir, digital media company Bangladesh, fiber optic television network',
                'canonical' => $baseUrl . '/about-us',
                'ogType' => 'article',
                'ogImage' => $baseUrl . '/img/about_hero.jpg',
                'breadcrumbs' => [
                    ['name' => 'Home', 'url' => $baseUrl . '/'],
                    ['name' => 'About Us', 'url' => $baseUrl . '/about-us']
                ],
                'schemas' => [
                    [
                        '@context' => 'https://schema.org',
                        '@type' => 'AboutPage',
                        '@id' => $productionBaseUrl . '/about-us#webpage',
                        'url' => $productionBaseUrl . '/about-us',
                        'name' => 'About Bumbellbee Limited',
                        'description' => 'Empowering households with crystal-clear digital entertainment and cutting-edge HD Set-Top Box technology.',
                        'mainEntity' => [
                            '@id' => $productionBaseUrl . '/#organization'
                        ]
                    ]
                ]
            ],
            'contact' => [
                'title' => 'Contact Us - Office Address, Hotline & Support | Bumbellbee Ltd.',
                'description' => 'Contact Bumbellbee customer care hotline at 09 678 300700 or visit our head office at ABG Tower, Bashundhara R/A, Dhaka. Fast technician service and friendly support.',
                'keywords' => 'Bumbellbee contact, customer care hotline 09678300700, ABG Tower Bashundhara, cable TV technician Dhaka, Bumbellbee office address',
                'canonical' => $baseUrl . '/contact-us',
                'ogType' => 'website',
                'ogImage' => $baseUrl . '/img/about_hero.jpg',
                'breadcrumbs' => [
                    ['name' => 'Home', 'url' => $baseUrl . '/'],
                    ['name' => 'Contact Us', 'url' => $baseUrl . '/contact-us']
                ],
                'schemas' => [
                    [
                        '@context' => 'https://schema.org',
                        '@type' => 'ContactPage',
                        '@id' => $productionBaseUrl . '/contact-us#webpage',
                        'url' => $productionBaseUrl . '/contact-us',
                        'name' => 'Contact Bumbellbee Limited',
                        'description' => 'Customer support desk and head office contact information for Bumbellbee Limited.'
                    ],
                    [
                        '@context' => 'https://schema.org',
                        '@type' => 'LocalBusiness',
                        '@id' => $productionBaseUrl . '/#localbusiness',
                        'name' => 'Bumbellbee Limited',
                        'image' => $productionBaseUrl . '/img/about_hero.jpg',
                        'telephone' => '+8809678300700',
                        'email' => 'care@bumbellbee.com',
                        'url' => $productionBaseUrl . '/',
                        'address' => [
                            '@type' => 'PostalAddress',
                            'streetAddress' => 'ABG Tower, Plot# 440, 441 & 442, Road – 18, Block# A, Bashundhara R/A',
                            'addressLocality' => 'Dhaka',
                            'postalCode' => '1229',
                            'addressCountry' => 'BD'
                        ],
                        'geo' => [
                            '@type' => 'GeoCoordinates',
                            'latitude' => 23.812829,
                            'longitude' => 90.423142
                        ],
                        'openingHoursSpecification' => [
                            [
                                '@type' => 'OpeningHoursSpecification',
                                'dayOfWeek' => ['Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday'],
                                'opens' => '09:00',
                                'closes' => '18:00'
                            ]
                        ],
                        'priceRange' => '৳400 - ৳600'
                    ]
                ]
            ]
        ];

        // Auto-detect page key from URI or script if not provided
        if (empty($pageKey)) {
            $uri = trim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH), '/');
            $script = basename($_SERVER['SCRIPT_NAME'] ?? '');
            
            if (empty($uri) || $uri === 'home' || $script === 'index.php') {
                $pageKey = 'home';
            } elseif (strpos($uri, 'package') !== false || $script === 'package.php') {
                $pageKey = 'packages';
            } elseif (strpos($uri, 'payment') !== false || $script === 'payment.php') {
                $pageKey = 'payment';
            } elseif (strpos($uri, 'about') !== false || $script === 'aboutus.php') {
                $pageKey = 'about';
            } elseif (strpos($uri, 'contact') !== false || $script === 'contactus.php') {
                $pageKey = 'contact';
            } else {
                $pageKey = 'home';
            }
        }

        $config = $pages[$pageKey] ?? $pages['home'];

        // Automatically build BreadcrumbList schema if breadcrumbs exist
        if (!empty($config['breadcrumbs'])) {
            $breadcrumbItems = [];
            foreach ($config['breadcrumbs'] as $idx => $crumb) {
                $breadcrumbItems[] = [
                    '@type' => 'ListItem',
                    'position' => $idx + 1,
                    'name' => $crumb['name'],
                    'item' => $crumb['url']
                ];
            }
            $config['schemas'][] = [
                '@context' => 'https://schema.org',
                '@type' => 'BreadcrumbList',
                'itemListElement' => $breadcrumbItems
            ];
        }

        return $config;
    }

    function renderSeoHead(array $seoData = []): void {
        $seo = !empty($seoData) ? $seoData : getSeoConfig();
        $title = htmlspecialchars($seo['title'] ?? 'Bumbellbee Ltd. - Digital HD Television');
        $desc = htmlspecialchars($seo['description'] ?? '');
        $keywords = htmlspecialchars($seo['keywords'] ?? '');
        $canonical = htmlspecialchars($seo['canonical'] ?? 'https://bumbellbee.com/');
        $ogType = htmlspecialchars($seo['ogType'] ?? 'website');
        $ogImage = htmlspecialchars($seo['ogImage'] ?? 'https://bumbellbee.com/img/about_hero.jpg');
        $siteName = 'Bumbellbee Limited';
        ?>
    <!-- Primary Meta Tags -->
    <title><?= $title ?></title>
    <meta name="title" content="<?= $title ?>">
    <meta name="description" content="<?= $desc ?>">
    <?php if ($keywords): ?>
    <meta name="keywords" content="<?= $keywords ?>">
    <?php endif; ?>
    <meta name="author" content="Bumbellbee Limited">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

    <!-- Canonical URL -->
    <link rel="canonical" href="<?= $canonical ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="<?= $ogType ?>">
    <meta property="og:url" content="<?= $canonical ?>">
    <meta property="og:title" content="<?= $title ?>">
    <meta property="og:description" content="<?= $desc ?>">
    <meta property="og:image" content="<?= $ogImage ?>">
    <meta property="og:site_name" content="<?= $siteName ?>">
    <meta property="og:locale" content="en_US">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?= $canonical ?>">
    <meta name="twitter:title" content="<?= $title ?>">
    <meta name="twitter:description" content="<?= $desc ?>">
    <meta name="twitter:image" content="<?= $ogImage ?>">

    <!-- Favicon & Icons -->
    <link rel="icon" type="image/x-icon" href="./favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon.png">
    <link rel="apple-touch-icon" href="./img/favicon.png">

    <!-- Structured Data (JSON-LD) -->
    <?php if (!empty($seo['schemas'])): ?>
    <?php foreach ($seo['schemas'] as $schema): ?>
    <script type="application/ld+json">
<?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
    </script>
    <?php endforeach; ?>
    <?php endif; ?>
<?php
    }
}

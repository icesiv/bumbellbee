<?php
/**
 * Dynamic XML Sitemap Generator for Bumbellbee Ltd.
 */

require_once __DIR__ . '/includes/seo.php';

$baseUrl = 'https://bumbellbee.com'; // Canonical production domain

$routes = [
    [
        'loc' => $baseUrl . '/',
        'file' => __DIR__ . '/index.php',
        'changefreq' => 'weekly',
        'priority' => '1.0'
    ],
    [
        'loc' => $baseUrl . '/packages',
        'file' => __DIR__ . '/package.php',
        'changefreq' => 'weekly',
        'priority' => '0.9'
    ],
    [
        'loc' => $baseUrl . '/payment',
        'file' => __DIR__ . '/payment.php',
        'changefreq' => 'monthly',
        'priority' => '0.8'
    ],
    [
        'loc' => $baseUrl . '/about-us',
        'file' => __DIR__ . '/aboutus.php',
        'changefreq' => 'monthly',
        'priority' => '0.8'
    ],
    [
        'loc' => $baseUrl . '/contact-us',
        'file' => __DIR__ . '/contactus.php',
        'changefreq' => 'monthly',
        'priority' => '0.8'
    ],
];

// Generate XML content
$xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"' . "\n";
$xml .= '        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"' . "\n";
$xml .= '        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . "\n";

foreach ($routes as $route) {
    $lastmod = (file_exists($route['file'])) 
        ? date('Y-m-d', filemtime($route['file'])) 
        : date('Y-m-d');
        
    $xml .= "  <url>\n";
    $xml .= "    <loc>" . htmlspecialchars($route['loc']) . "</loc>\n";
    $xml .= "    <lastmod>" . $lastmod . "</lastmod>\n";
    $xml .= "    <changefreq>" . $route['changefreq'] . "</changefreq>\n";
    $xml .= "    <priority>" . $route['priority'] . "</priority>\n";
    $xml .= "  </url>\n";
}

$xml .= '</urlset>';

// If run from CLI with --save or save parameter, save to sitemap.xml
if (php_sapi_name() === 'cli' && isset($argv[1]) && $argv[1] === '--save') {
    file_put_contents(__DIR__ . '/sitemap.xml', $xml);
    echo "sitemap.xml generated successfully.\n";
    exit(0);
}

// If accessed via web request, output XML headers and body
if (!headers_sent()) {
    header('Content-Type: application/xml; charset=utf-8');
    header('X-Robots-Tag: noindex');
}

echo $xml;

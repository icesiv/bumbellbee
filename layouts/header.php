<?php
require_once __DIR__ . '/../includes/seo.php';

$currentUri = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
$currentScript = $_SERVER['SCRIPT_NAME'] ?? '';

if (!function_exists('isNavActive')) {
    function isNavActive($pageKey, $currentUri, $currentScript) {
        $trimmed = trim($currentUri, '/');
        if ($pageKey === 'home') {
            return ($trimmed === '' || $trimmed === 'home' || $trimmed === 'index.php');
        }
        if ($pageKey === 'packages') {
            return (strpos($trimmed, 'package') !== false);
        }
        if ($pageKey === 'payment') {
            return (strpos($trimmed, 'payment') !== false);
        }
        if ($pageKey === 'about') {
            return (strpos($trimmed, 'about') !== false);
        }
        if ($pageKey === 'contact') {
            return (strpos($trimmed, 'contact') !== false);
        }
        return false;
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php renderSeoHead($pageSeo ?? []); ?>

    <!-- CSS -->
    <link rel="stylesheet" href="./dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./dist/css/all.css"> <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="./dist/datatables.min.css" />
</head>

<body>

    <!-- Modern Redesigned Header & Navigation -->
    <header class="site-header fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light py-2 px-0">
                <!-- Brand Logo -->
                <a class="navbar-brand logo-brand" href="home">
                    <img src="./img/logo.png" alt="Bumbellbee Ltd. Logo" class="brand-img">
                </a>

                <!-- Mobile Hamburger Toggler -->
                <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar"
                    aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navigation Menu Links -->
                <div class="collapse navbar-collapse" id="mainNavbar">
                    <ul class="navbar-nav mx-auto nav-list-modern">
                        <li class="nav-item">
                            <a class="nav-link <?php if(isNavActive('home', $currentUri, $currentScript)) { ?> active <?php } ?>"
                                href="home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(isNavActive('packages', $currentUri, $currentScript)) { ?> active <?php } ?>"
                                href="packages">Packages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(isNavActive('payment', $currentUri, $currentScript)) { ?> active <?php } ?>"
                                href="payment">Payment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(isNavActive('about', $currentUri, $currentScript)) { ?> active <?php } ?>"
                                href="about-us">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(isNavActive('contact', $currentUri, $currentScript)) { ?> active <?php } ?>"
                                href="contact-us">Contacts</a>
                        </li>
                    </ul>

                    <!-- Header Right CTA & Hotline -->
                    <div class="header-right-actions d-flex align-items-center">
                        <a href="tel:09678300700" class="nav-helpline" title="Customer Care Hotline">
                            <div class="helpline-icon-wrap">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="helpline-text-wrap">
                                <span class="helpline-label">Support</span>
                                <span class="helpline-number">09 678 300700</span>
                            </div>
                        </a>
                        <a href="payment" class="btn-nav-pay">
                            <i class="fas fa-credit-card"></i> Pay Bill
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
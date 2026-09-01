<?php

use Valet\Drivers\ValetDriver;

class LocalValetDriver extends ValetDriver
{
    /**
     * Determine if the driver serves the request.
     */
    public function serves(string $sitePath, string $siteName, string $uri): bool
    {
        return true;
    }

    /**
     * Determine if the incoming request is for a static file.
     */
    public function isStaticFile(string $sitePath, string $siteName, string $uri)
    {
        if (file_exists($staticFilePath = $sitePath . $uri) && is_file($staticFilePath)) {
            return $staticFilePath;
        }

        return false;
    }

    /**
     * Get the fully resolved path to the application's front controller.
     */
    public function frontControllerPath(string $sitePath, string $siteName, string $uri): ?string
    {
        $routes = [
            '/' => '/index.php',
            '/home' => '/index.php',
            '/packages' => '/package.php',
            '/package' => '/package.php',
            '/payment' => '/payment.php',
            '/payments' => '/payment.php',
            '/about-us' => '/aboutus.php',
            '/about' => '/aboutus.php',
            '/aboutus' => '/aboutus.php',
            '/contact-us' => '/contactus.php',
            '/contact' => '/contactus.php',
            '/contacts' => '/contactus.php',
            '/contactus' => '/contactus.php',
            '/sitemap.xml' => '/sitemap.php',
        ];

        $cleanUri = parse_url($uri, PHP_URL_PATH);
        $trimmedUri = rtrim($cleanUri, '/');
        if (empty($trimmedUri)) {
            $trimmedUri = '/';
        }

        if (isset($routes[$trimmedUri])) {
            return $sitePath . $routes[$trimmedUri];
        }

        // Direct .php file check
        if (file_exists($phpFile = $sitePath . $trimmedUri . '.php')) {
            return $phpFile;
        }

        if (file_exists($directFile = $sitePath . $cleanUri) && is_file($directFile)) {
            return $directFile;
        }

        return $sitePath . '/index.php';
    }
}

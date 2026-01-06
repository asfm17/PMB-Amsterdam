<?php

use Illuminate\Foundation\Application;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Serve a lightweight static homepage for the root path to present a red/white modern careers page.
$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
if ($uri === '/' || $uri === '/index.php') {
    // Uitgebreide homepage met meer content-secties.
    echo <<<'HTML'
<!doctype html>
<html lang="nl">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>PMB Amsterdam — Werken bij Project Management Bureau</title>
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/werkenbij.css">
</head>
<body>

<!-- Header -->
<header>
  <div class="header-content">
    <img class="brand-logo" src="/img/logo-gemeente-amsterdam.jpg" alt="Gemeente Amsterdam Logo">
    <nav>
      <a class="nav-topics" href="/">Home</a>
      <a class="nav-topics" href="/werkenbij.php">Werken Bij</a>
      <a class="nav-topics" href="/contact.php">Contact</a>
      <a class="nav-topics" href="/projects.php">Opdrachten/Projecten</a>
      <a class="nav-topics" href="/expertise.php">Expertise</a>
    </nav>
  </div>
</header>

<!-- Hero Section -->
<section class="hero">
  <div class="hero-content">
    <h1>Word onderdeel van PMB Amsterdam</h1>
    <p class="lead">Projectmanagementpersoneel Gezocht</p>
    <div class="cta">
      <a class="btn" href="mailto:hr@pmb-amsterdam.nl?subject=Sollicitatie%20-%20Werken%20bij%20PMB%20Amsterdam">🎯 Solliciteer nu</a>
      <a class="btn btn-secondary" href="#vacatures">Bekijk vacatures</a>
    </div>
  </div>
</section>

<!-- Over Ons Section -->
<section id="over-ons">
  <div class="container">
    <h2>Over PMB Amsterdam</h2>
    <div class="about-grid">
      <div class="about-text">
        <p><strong>Sinds 2010 helpen wij bedrijven met complexe projecten in:</strong></p>
        <ul class="keywords">
          <li>Bouw & Infrastructuur</li>
          <li>IT & Digitalisering</li>
          <li>Logistiek</li>
          <li>Organisatieontwikkeling</li>
        </ul>
      </div>
      <div>
        <h3>Waarom werken bij PMB?</h3>
        <ul class="features">
          <li><strong>Competitief salaris</strong></li>
          <li><strong>Ontwikkelbudget</strong> — €1.500/jaar</li>
          <li><strong>Flexibele werktijden</strong></li>
          <li><strong>Platte hiërarchie</strong></li>
          <li><strong>Groei & Perspectief</strong></li>
          <li><strong>Moderne werkculuur</strong></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<div class="divider"></div>

<!-- Footer -->
<footer>
  <div style="max-width: 1024px; margin: 0 auto;">
    <p>&copy; 2024 Project Management Bureau Amsterdam. Alle rechten voorbehouden.</p>
    <p>
      <a href="#privacy">Privacybeleid</a> · 
      <a href="#terms">Gebruiksvoorwaarden</a> · 
      <a href="#cookies">Cookies</a>
    </p>
    <p style="font-size: 12px; margin-top: 12px;">Made with ❤️ for great teams</p>
  </div>
</footer>

</body>
</html>
HTML;
    exit;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';


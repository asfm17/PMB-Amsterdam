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
<title>PMB Amsterdam — Project Management Bureau</title>
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/werkenbij.css">
<style>
  .photo-canvas{border:1px dashed #bbb;background:#f8f8f8;display:block;width:100%;max-width:420px;height:260px;margin:8px 0}
  .cards{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:18px}
  .hero-strap{max-width:900px;margin:0 auto;text-align:center;padding:36px 16px}
  .section{padding:36px 16px}
  .container{max-width:1100px;margin:0 auto}
</style>
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

<!-- Hero -->
<section class="hero1">
  <div class="hero-strap">
    <h1>Word onderdeel van PMB Amsterdam</h1>
    <div class="cta">
      <a class="btn" href="/werkenbij.php">Bekijk vacatures</a>
      <a class="btn" href="/projects.php">Onze projecten</a>
    </div>
  </div>
</section>

<!-- Wat we doen -->
<section class="section">
  <div class="container">
    <h2>Wat we doen</h2>
    <p>PMB Amsterdam is een gespecialiseerd projectmanagementbureau. We bieden advies en uitvoering voor alle fases van het project: van initiatie en planvorming tot uitvoering en afronding. Onze kernactiviteiten:</p>
    <div class="cards">
      <div class="card">
        <h3>Projectmanagement</h3>
        <p>Coördinatie, risicomanagement, planning en stakeholdermanagement voor projecten in de publieke en private sector.</p>
      </div>
      <div class="card">
        <h3>Programmamanagement</h3>
        <p>Structuur en governance voor meerdere samenhangende projecten, met focus op resultaat en tijdige oplevering.</p>
      </div>
      <div class="card">
        <h3>Advisering & Training</h3>
        <p>Op maat gemaakte trainingen en begeleiding om uw organisatie projectrijp te maken.</p>
      </div>
    </div>
  </div>
</section>

<!-- Projects / Impact -->
<section class="section" style="background:#fbfbfb">
  <div class="container">
    <h2>Projecten & impact</h2>
    <p>We werken regelmatig samen met gemeentelijke diensten, bouwbedrijven en IT-partners. Voorbeelden van resultaten zijn tijdige oplevering van infrastructuur, digitaliseringsprojecten die processen versimpelen, en verandertrajecten die organisatiekracht vergroten.</p>
    <div class="cards">
      <div class="card"><h4>Infrastructuurprogramma</h4><p>Coördinatie van meerdere civiele projecten in Amsterdam-Zuid.</p></div>
      <div class="card"><h4>Digitaal dossier</h4><p>Implementatie van een digitaal projectdossier voor betere samenwerking.</p></div>
      <div class="card"><h4>Procesoptimalisatie</h4><p>Verbetering van interne werkprocessen met meetbare tijdsbesparing.</p></div>
    </div>
  </div>
</section>

<!-- Call to action -->
<section class="section">
  <div class="container" style="text-align:center">
    <h2>Klaar om samen te werken?</h2>
    <p>Neem contact op voor een kennismaking. We bekijken samen welke aanpak het beste bij uw vraag past.</p>
    <a class="btn" href="mailto:hr@pmb-amsterdam.nl?subject=Interesse%20PMB%20Amsterdam">Contact opnemen</a>
  </div>
</section>

<!-- Footer -->
<footer>
  <div style="max-width: 1100px; margin: 0 auto; padding:22px 0">
    <p>&copy; 2024 Project Management Bureau Amsterdam. Alle rechten voorbehouden.</p>
    <p>
      <a href="#privacy">Privacybeleid</a> · 
      <a href="#terms">Gebruiksvoorwaarden</a> · 
      <a href="#cookies">Cookies</a>
    </p>
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


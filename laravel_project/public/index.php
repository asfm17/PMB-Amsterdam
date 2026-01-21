<?php

//temp debug

// ini_set('display_errors', 1);
//  error_reporting(E_ALL);
// require __DIR__.'/../vendor/autoload.php';
//  echo "AUTOLOAD OK";
//   exit;


use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

require __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';

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
<title>Home — PMB Amsterdam</title>
<link rel="stylesheet" href="/css/style.css">
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
      <a class="nav-topics" href="/werkenbij.php">Werken</a>
      <a class="nav-topics" href="/contact.php">Contact</a>
      <a class="nav-topics" href="/projects.php">Opdrachten/Projecten</a>
      <a class="nav-topics" href="/expertise.php">Expertise</a>
      <a class="nav-topics" href="/projectmanagement.php">Projectmanagement</a>
      <a class="nav-topics" href="/publicaties.php">Publicaties</a>
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
    <h2>Over ons</h2>
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

<!-- Insert two photos side-by-side between sections -->
<section class="section" style="padding:24px 16px; background:transparent">
  <div class="container photo-gallery">
    <img src="/img/bureau.jpg" alt="Bureau">
    <img src="/img/projectmanagement_bureau_cover.jpg" alt="Project Management Bureau">
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

<section id="contact">
  <div class="container" style="text-align: center;">
    <h2>Klaar om mee te doen?</h2>
    <p style="color: #666; font-size: 18px; max-width: 600px; margin: 20px auto;">Stuur ons je CV en motivatiebrief. Wij kijken ernaar uit om je te leren kennen!</p>
    
    <div class="cta" style="justify-content: center;">
      <a class="btn" href="/contact.php">Solliciteer nu</a>
      <a class="btn" href="tel:+31203030303"> Bel ons: +31 (0)20 303 0303</a>
    </div>

    <div style="margin-top: 40px; padding: 20px; background: var(--light-gray); border-radius: 10px;">
      <p style="margin: 0 0 12px;"><strong>PMB Amsterdam</strong></p>
      <p style="margin: 0; color: #666;">
        <img src="/img/location.jpg" alt="Location" style="height:20px;margin-right:8px;vertical-align:middle;"> Weesperstraat 432 | 1018 DN Amsterdam<br>
        <img src="/img/mail.jpg" alt="Mail" style="height:20px;margin-right:8px;vertical-align:middle;"> hr@pmb-amsterdam.nl<br>
        <img src="/img/call.jpg" alt="Call" style="height:20px;margin-right:8px;vertical-align:middle;"> +31 (0)20 303 0303<br>
        <img src="/img/red.jpg" alt="Call" style="height:20px;margin-right:8px;vertical-align:middle;"> www.pmb-amsterdam.nl
      </p>
    </div>
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


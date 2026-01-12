<?php

use Illuminate\Foundation\Application;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Serve a lightweight static homepage for the root path to present a red/white modern careers page.
// Always render this page when visited directly.
echo <<<'HTML'
<!doctype html>
<html lang="nl">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Contact — PMB Amsterdam</title>
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/contact.css">
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

<main>
  <!-- Hero Section -->
  <section class="contact-hero">
    <h1>Laten we samen iets bereiken</h1>
    <p>Neem contact met ons op en ontdek hoe PMB Amsterdam jouw project naar het volgende niveau kan tillen.</p>
  </section>

  <section class="container contact-section">
    <h1>Contact</h1>
    
    <div class="contact-grid">
      <div class="contact-info">
        <h3>Rechtstreeks bereikbaar</h3>
        <p>
          <strong>Telefoon:</strong><br>
          <a href="tel:+31203030303">+31 (0)20 303 0303</a>
        </p>
        
        <p>
          <strong>E-mail:</strong><br>
          <a href="mailto:contact@pmb-amsterdam.nl">contact@pmb-amsterdam.nl</a>
        </p>

        <p>
          <strong>Adres:</strong><br>
          Project Management Bureau Amsterdam<br>
          Burgermeester de Vlugtlaan 1<br>
          1068 ZN Amsterdam
        </p>

        <p style="margin-top: 30px; padding-top: 20px; border-top: 1px solid var(--border-gray); font-size: 14px; color: #666;">
          <strong>Bereikbaar:</strong> Ma - Vr van 09:00 tot 17:00
        </p>
      </div>

      <div class="contact-form">
        <div class="form-tabs">
          <button class="form-tab active" onclick="switchForm('contact', event)">Bericht</button>
          <button class="form-tab" onclick="switchForm('apply', event)">Sollicitatie</button>
        </div>

        <!-- Contact Form Section -->
        <div id="contact-section" class="form-section active">
          <h2>Stuur ons een bericht</h2>
          <form method="POST" action="/contact.php">
            <div class="form-group">
              <label for="name">Naam</label>
              <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
              <label for="email">E-mailadres</label>
              <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
              <label for="subject">Onderwerp</label>
              <input type="text" id="subject" name="subject" placeholder="Waar gaat het over?" required>
            </div>

            <div class="form-group">
              <label for="message">Bericht</label>
              <textarea id="message" name="message" placeholder="Typ hier je bericht..." required></textarea>
            </div>

            <button type="submit" class="form-submit">Versturen</button>
          </form>
        </div>

        <!-- Sollicitatie Form Section -->
        <div id="apply-section" class="form-section">
          <h2>Solliciteer nu</h2>
          <form method="POST" action="/contact.php">
            <input type="hidden" name="form_type" value="sollicitatie">
            
            <div class="form-group">
              <label for="apply-name">Naam</label>
              <input type="text" id="apply-name" name="name" required>
            </div>

            <div class="form-group">
              <label for="apply-email">E-mailadres</label>
              <input type="email" id="apply-email" name="email" required>
            </div>

            <div class="form-group">
              <label for="apply-phone">Telefoonnummer</label>
              <input type="tel" id="apply-phone" name="phone" required>
            </div>

            <div class="form-group">
              <label for="apply-position">Welke vacature interesseert jou?</label>
              <input type="text" id="apply-position" name="position" placeholder="Bijv. Senior Projectmanager" required>
            </div>

            <div class="form-group">
              <label for="apply-message">Waarom ben jij de juiste kandidaat?</label>
              <textarea id="apply-message" name="message" placeholder="Vertel ons iets over jezelf en je ervaring..." required></textarea>
            </div>

            <button type="submit" class="form-submit">Versturen</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>

<footer>
  <div class="container">
    <p>&copy; 2024 Project Management Bureau Amsterdam.</p>
  </div>
</footer>

<script>
function switchForm(formType, event) {
  if (event) event.preventDefault();
  
  // Hide all sections
  document.getElementById('contact-section').classList.remove('active');
  document.getElementById('apply-section').classList.remove('active');
  
  // Remove active class from all tabs
  document.querySelectorAll('.form-tab').forEach(tab => {
    tab.classList.remove('active');
  });
  
  // Show selected section
  if (formType === 'contact') {
    document.getElementById('contact-section').classList.add('active');
    // Focus on message field in contact form
    setTimeout(() => {
      document.getElementById('message').focus();
    }, 100);
  } else if (formType === 'apply') {
    document.getElementById('apply-section').classList.add('active');
    // Focus on name field in apply form
    setTimeout(() => {
      document.getElementById('apply-name').focus();
    }, 100);
  }
  
  // Set active tab
  document.querySelectorAll('.form-tab').forEach((tab, index) => {
    if ((formType === 'contact' && index === 0) || (formType === 'apply' && index === 1)) {
      tab.classList.add('active');
    }
  });
}

// Check URL parameter on page load
document.addEventListener('DOMContentLoaded', function() {
  const urlParams = new URLSearchParams(window.location.search);
  const isApply = urlParams.get('apply');
  const jobTitle = urlParams.get('job');
  
  if (isApply === '1') {
    // Switch to apply form
    switchForm('apply');
    
    // Pre-fill job title if provided
    if (jobTitle) {
      document.getElementById('apply-position').value = decodeURIComponent(jobTitle);
    }
    
    // Focus on name field
    setTimeout(() => {
      document.getElementById('apply-name').focus();
    }, 150);
    
    // Scroll down 150px
    setTimeout(() => {
      window.scrollBy({ top: 150, behavior: 'smooth' });
    }, 200);
  }
});
</script>

</body>
</html>
HTML;
exit;
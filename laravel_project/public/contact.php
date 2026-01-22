<?php

use Illuminate\Foundation\Application;

define('LARAVEL_START', microtime(true));

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

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

<header>
  <div class="header-content">
    <img class="brand-logo" src="/img/logo-gemeente-amsterdam.jpg" alt="Gemeente Amsterdam Logo">
    <nav>
      <a class="nav-topics" href="/">Home</a>
            <a class="nav-topics" href="/werkenbij.php">Werken</a>
            <a class="nav-topics" href="/contact.php">Contact</a>
            <a class="nav-topics active" href="/projects.php">Opdrachten/Projecten</a>
            <a class="nav-topics" href="/expertise.php">Expertise</a>
            <a class="nav-topics" href="/projectmanagement.php">Projectmanagement</a>
            <a class="nav-topics" href="/publicaties.php">Publicaties</a>
    </nav>
  </div>
</header>

<main>

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
          <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2436.423995380947!2d4.9067104!3d52.3627315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNTLCsDIxJzQ1LjgiTiA0wrA1NCcyNC4yIkU!5e0!3m2!1snl!2snl!4v1768231984239!5m2!1snl!2snl" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </p>
      </div>

      <div class="contact-form">
        <div class="form-tabs">
          <button class="form-tab active" onclick="switchForm('contact', event)">Bericht</button>
          <button class="form-tab" onclick="switchForm('apply', event)">Sollicitatie</button>
        </div>

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
  
  document.getElementById('contact-section').classList.remove('active');
  document.getElementById('apply-section').classList.remove('active');
  
  document.querySelectorAll('.form-tab').forEach(tab => {
    tab.classList.remove('active');
  });
  
  if (formType === 'contact') {
    document.getElementById('contact-section').classList.add('active');
    setTimeout(() => {
      document.getElementById('message').focus();
    }, 100);
  } else if (formType === 'apply') {
    document.getElementById('apply-section').classList.add('active');
    setTimeout(() => {
      document.getElementById('apply-name').focus();
    }, 100);
  }
  
  document.querySelectorAll('.form-tab').forEach((tab, index) => {
    if ((formType === 'contact' && index === 0) || (formType === 'apply' && index === 1)) {
      tab.classList.add('active');
    }
  });
}

document.addEventListener('DOMContentLoaded', function() {
  const urlParams = new URLSearchParams(window.location.search);
  const isApply = urlParams.get('apply');
  const jobTitle = urlParams.get('job');
  
  if (isApply === '1') {
    switchForm('apply');
    
    if (jobTitle) {
      document.getElementById('apply-position').value = decodeURIComponent(jobTitle);
    }
  
    setTimeout(() => {
      document.getElementById('apply-name').focus();
    }, 150);
    
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
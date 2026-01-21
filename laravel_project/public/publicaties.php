<?php
// publicaties.php
?>
<!doctype html>
<html lang="nl">
<head>
  <meta charset="utf-8">
  <title>Publicaties — PMB Amsterdam</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/publicaties.css">
</head>

<body>

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
      <a class="nav-topics nav-active" href="/publicaties.php">Publicaties</a>
    </nav>
  </div>
</header>

<!-- HERO -->
<section class="pub-hero">
  <div class="pub-hero-inner">
    <h1>Publicaties</h1>
    <p>
      Inzichten, updates en korte artikelen over project- en programmasturing.
      Overzichtelijk, praktisch en direct toepasbaar.
    </p>

    <div class="pub-actions">
      <a class="btn" href="/contact.php">Vragen? Neem contact op</a>
      <a class="btn btn-outline" href="/expertise.php">Bekijk expertise</a>
    </div>
  </div>
</section>

<!-- CONTENT -->
<section class="pub-section">
  <div class="container">
    <div class="pub-head">
      <div>
        <h2>Laatste publicaties</h2>
      </div>

      <!-- Visuele filter (nog zonder JS) -->
      <div class="pub-filters" aria-label="Filters">
        <span class="pub-pill pub-pill-active" data-filter="all">Alles</span>
        <span class="pub-pill" data-filter="Nieuws">Nieuws</span>
        <span class="pub-pill" data-filter="Artikel">Artikel</span>
        <span class="pub-pill" data-filter="Rapport">Rapport</span>
      </div>
    </div>

    <div class="pub-grid" id="pub-grid">
      <article class="pub-card">
        <div class="pub-meta">
          <span class="pub-tag">Nieuws</span>
          <span class="pub-date">Jan 2026</span>
        </div>
        <h3>Meer grip op voortgang: werken met weekrapportages</h3>
        <p>Een korte aanpak om voortgang, risico’s en acties wekelijks helder te houden voor team en opdrachtgever.</p>
        <a class="pub-link" href="#">Lees meer</a>
      </article>

      <article class="pub-card">
        <div class="pub-meta">
          <span class="pub-tag">Artikel</span>
          <span class="pub-date">Dec 2025</span>
        </div>
        <h3>Stakeholdermanagement in een complexe omgeving</h3>
        <p>Hoe je belangen en invloed in kaart brengt en voorkomt dat besluiten stilvallen door onduidelijkheid.</p>
        <a class="pub-link" href="#">Lees meer</a>
      </article>

      <article class="pub-card">
        <div class="pub-meta">
          <span class="pub-tag">Rapport</span>
          <span class="pub-date">Nov 2025</span>
        </div>
        <h3>Projectscan: van chaos naar structuur in 2 weken</h3>
        <p>Een praktische checklist voor scope, planning, governance en risico’s — als startpunt voor verbetering.</p>
        <a class="pub-link" href="#">Download</a>
      </article>

      <article class="pub-card">
        <div class="pub-meta">
          <span class="pub-tag">Artikel</span>
          <span class="pub-date">Okt 2025</span>
        </div>
        <h3>Scope creep voorkomen zonder “nee” te zeggen</h3>
        <p>Tips om wensen te managen, keuzes transparant te maken en impact zichtbaar te houden.</p>
        <a class="pub-link" href="#">Lees meer</a>
      </article>

      <article class="pub-card">
        <div class="pub-meta">
          <span class="pub-tag">Nieuws</span>
          <span class="pub-date">Sep 2025</span>
        </div>
        <h3>Van project naar programma: wanneer schaal je op?</h3>
        <p>Wanneer één project niet genoeg is, en hoe je governance en prioriteiten centraal organiseert.</p>
        <a class="pub-link" href="#">Lees meer</a>
      </article>

      <article class="pub-card">
        <div class="pub-meta">
          <span class="pub-tag">Rapport</span>
          <span class="pub-date">Aug 2025</span>
        </div>
        <h3>KPI’s die werken: meten zonder micro-managen</h3>
        <p>Voorbeelden van KPI’s die sturen op resultaat én ruimte laten voor teams om te leveren.</p>
        <a class="pub-link" href="#">Download</a>
      </article>
    </div>

    <div class="pub-cta">
      <div class="pub-cta-box">
        <h2>Op zoek naar advies of begeleiding?</h2>
        <p class="muted">
          We denken graag mee over projectaanpak, planning en rapportage.
          Een korte intake is genoeg om richting te geven.
        </p>
        <div class="pub-actions pub-actions-center">
          <a class="btn" href="/contact.php">Contact opnemen</a>
          <a class="btn btn-outline-dark" href="/projectmanagement.php">Projectmanagement</a>
        </div>
      </div>
    </div>

  </div>
</section>

<footer>
  <div class="footer-inner">
    <p>&copy; 2024 Project Management Bureau Amsterdam. Alle rechten voorbehouden.</p>
    <p>
      <a href="#privacy">Privacybeleid</a> ·
      <a href="#terms">Gebruiksvoorwaarden</a> ·
      <a href="#cookies">Cookies</a>
    </p>
  </div>
</footer>

<script>
  document.querySelectorAll('.pub-pill').forEach(pill => {
    pill.addEventListener('click', function() {
      const filterValue = this.getAttribute('data-filter');
      
      // Update active pill
      document.querySelectorAll('.pub-pill').forEach(p => p.classList.remove('pub-pill-active'));
      this.classList.add('pub-pill-active');
      
      // Filter cards
      document.querySelectorAll('.pub-card').forEach(card => {
        const tagElement = card.querySelector('.pub-tag');
        const tagValue = tagElement ? tagElement.textContent : '';
        
        if (filterValue === 'all' || tagValue === filterValue) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });
</script>

</body>
</html>

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
<title>Werken bij — PMB Amsterdam</title>
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

<main>
  <!-- Hero Section -->
<section class="hero2">
  <div class="hero-content2">
    <h1>Open Vacatures</h1>
    <p class="lead">Sluit je aan bij ons team!</p>
    <div class="cta">
      <a class="btn" href="mailto:hr@pmb-amsterdam.nl?subject=Sollicitatie%20-%20Werken%20bij%20PMB%20Amsterdam">Solliciteer nu</a>
      <a class="btn" href="#vacatures">Bekijk vacatures</a>
    </div>
  </div>
  </section>

  <div id="vacatures" class="vacatures-grid">
      <div class="vacancy-card">
        <span class="vacancy-label">FULL-TIME</span>
        <h3>Senior Projectmanager</h3>
        <div class="vacancy-meta">
          <span><img src="/img/location.jpg" alt="Locatie" style="width:16px;height:auto;vertical-align:middle;margin-right:6px;"> Amsterdam</span>
          <span><img src="/img/euro.jpg" alt="€" style="width:16px;height:auto;vertical-align:middle;margin-right:6px;"> €4.200 - €5.500</span>
        </div>
        <p>Leid complexe, multi-disciplinaire projecten met budgetten tot €5M. Jij hebt 5+ jaar ervaring en bent klaar voor een leidinggevende rol. Perfekt voor iemand die sterke organisatorische skills combineert met empathie.</p>
        <div style="margin-top: 16px;">
          <a class="btn-card" href="mailto:hr@pmb-amsterdam.nl?subject=Sollicitatie%20Senior%20Projectmanager">Solliciteer</a>
        </div>
      </div>

      <div class="vacancy-card">
        <span class="vacancy-label">FULL-TIME</span>
        <h3>Junior Projectmanager</h3>
        <div class="vacancy-meta">
          <span><img src="/img/location.jpg" alt="Locatie" style="width:16px;height:auto;vertical-align:middle;margin-right:6px;"> Amsterdam</span>
          <span><img src="/img/euro.jpg" alt="€" style="width:16px;height:auto;vertical-align:middle;margin-right:6px;"> €2.400 - €3.200</span>
        </div>
        <p>Start je carrière onder begeleiding van senior staff. Je volgt projecten van begin tot einde, ondersteunt in planning en communicatie. Ideaal voor HBO-afgestudeerden met interesse in projectmanagement.</p>
        <div style="margin-top: 16px;">
          <a class="btn-card" href="mailto:hr@pmb-amsterdam.nl?subject=Sollicitatie%20Junior%20Projectmanager">Solliciteer</a>
        </div>
      </div>

      <div class="vacancy-card">
        <span class="vacancy-label">FULL-TIME</span>
        <h3>Planning & Scheduling Specialist</h3>
        <div class="vacancy-meta">
          <span><img src="/img/location.jpg" alt="Locatie" style="width:16px;height:auto;vertical-align:middle;margin-right:6px;"> Amsterdam</span>
          <span><img src="/img/euro.jpg" alt="€" style="width:16px;height:auto;vertical-align:middle;margin-right:6px;"> €2.800 - €3.800</span>
        </div>
        <p>Creëer en beheer planning voor grote projecten. Je bent expert in tools als MS Project en Smartsheet. Logisch denken, detailgerichtheid en communicatieve skills zijn essentieel.</p>
        <div style="margin-top: 16px;">
          <a class="btn-card" href="mailto:hr@pmb-amsterdam.nl?subject=Sollicitatie%20Planning%20Specialist">Solliciteer</a>
        </div>
      </div>

      <div class="vacancy-card">
        <span class="vacancy-label">PART-TIME</span>
        <h3>Junior Planner</h3>
        <div class="vacancy-meta">
          <span><img src="/img/location.jpg" alt="Locatie" style="width:16px;height:auto;vertical-align:middle;margin-right:6px;"> Amsterdam</span>
          <span><img src="/img/euro.jpg" alt="€" style="width:16px;height:auto;vertical-align:middle;margin-right:6px;"> €2.000 - €2.600</span>
        </div>
        <p>Perfect voor studerenden of professionals die flexibel werken. Je ondersteunt in planning, data-invoer en rapportage. Minimaal 16 uur per week. Goede gelegenheid om ervaring op te doen.</p>
        <div style="margin-top: 16px;">
          <a class="btn-card" href="mailto:hr@pmb-amsterdam.nl?subject=Sollicitatie%20Junior%20Planner">Solliciteer</a>
        </div>
      </div>

      <div class="vacancy-card">
        <span class="vacancy-label">FULL-TIME</span>
        <h3>Projectmanagement Consultant</h3>
        <div class="vacancy-meta">
          <span><img src="/img/location.jpg" alt="Locatie" style="width:16px;height:auto;vertical-align:middle;margin-right:6px;"> Amsterdam</span>
          <span><img src="/img/euro.jpg" alt="€" style="width:16px;height:auto;vertical-align:middle;margin-right:6px;"> €3.500 - €4.800</span>
        </div>
        <p>Adviseer klanten over projectmanagement-methodieken en best practices. Jij bent experienced in Scrum, Waterfall en Hybrid-methoden. Travel naar klanten: 30-40% van je tijd.</p>
        <div style="margin-top: 16px;">
          <a class="btn-card" href="mailto:hr@pmb-amsterdam.nl?subject=Sollicitatie%20PM%20Consultant">Solliciteer</a>
        </div>
      </div>

      <div class="vacancy-card">
        <span class="vacancy-label">FULL-TIME</span>
        <h3>RPA & Automation Specialist</h3>
        <div class="vacancy-meta">
          <span><img src="/img/location.jpg" alt="Locatie" style="width:16px;height:auto;vertical-align:middle;margin-right:6px;"> Amsterdam</span>
          <span><img src="/img/euro.jpg" alt="€" style="width:16px;height:auto;vertical-align:middle;margin-right:6px;"> €3.200 - €4.400</span>
        </div>
        <p>Optimaliseer projectmanagement-processen via automatisering. Jij hebt ervaring met RPA-tools, Power Automate en process mining. Je helpt teams efficiënter te werken.</p>
        <div style="margin-top: 16px;">
          <a class="btn-card" href="mailto:hr@pmb-amsterdam.nl?subject=Sollicitatie%20RPA%20Specialist">Solliciteer</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Contact Section -->
<section id="contact">
  <div class="container" style="text-align: center;">
    <h2>Klaar om mee te doen?</h2>
    <p style="color: #666; font-size: 18px; max-width: 600px; margin: 20px auto;">Stuur ons je CV en motivatiebrief. Wij kijken ernaar uit om je te leren kennen!</p>
    
    <div class="cta" style="justify-content: center;">
      <a class="btn" href="mailto:hr@pmb-amsterdam.nl?subject=Sollicitatie%20-%20Werken%20bij%20PMB%20Amsterdam">📧 Solliciteer nu</a>
      <a class="btn btn-secondary" href="tel:+31203030303">☎️ Bel ons: +31 (0)20 303 0303</a>
    </div>

    <div style="margin-top: 40px; padding: 20px; background: var(--light-gray); border-radius: 10px;">
      <p style="margin: 0 0 12px;"><strong>PMB Amsterdam</strong></p>
      <p style="margin: 0; color: #666;">
        Weesperstraat 432 | 1018 DN Amsterdam<br>
        📧 hr@pmb-amsterdam.nl<br>
        ☎️ +31 (0)20 303 0303<br>
        🌐 www.pmb-amsterdam.nl
      </p>
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
document.addEventListener('DOMContentLoaded', function(){
  document.querySelectorAll('a[href="#vacatures"]').forEach(function(a){
    a.addEventListener('click', function(e){
      e.preventDefault();
      var el = document.getElementById('vacatures');
      if (!el) return;
      var y = el.getBoundingClientRect().top + window.pageYOffset - 200;
      window.scrollTo({ top: y, behavior: 'smooth' });
    });
  });
});
</script>
</body>
</html>
HTML;
exit;
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
<title>Expertise — PMB Amsterdam</title>
<link rel="stylesheet" href="/css/expertise.css">
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
  <div class="team-container">
    <div class="team-card">
        <div class="team-photo">
            <img src="images/sophie.jpg" alt="Sophie van Dijk">
        </div>
        <div class="team-info">
            <h2>Sophie van Dijk</h2>
            <h3>Projectmanager</h3>
            <p>Sophie zorgt dat elk project soepel en op tijd verloopt.</p>
        </div>
    </div>

    <div class="team-card">
        <div class="team-photo">
            <img src="images/jeroen.jpg" alt="Jeroen Bakker">
        </div>
        <div class="team-info">
            <h2>Jeroen Bakker</h2>
            <h3>Scrum Master</h3>
            <p>Jeroen begeleidt teams naar maximale efficiëntie en samenwerking.</p>
        </div>
    </div>

    <div class="team-card">
        <div class="team-photo">
            <img src="images/anika.jpg" alt="Anika de Vries">
        </div>
        <div class="team-info">
            <h2>Anika de Vries</h2>
            <h3>Business Analyst</h3>
            <p>Anika analyseert processen en adviseert strategische verbeteringen.</p>
        </div>
    </div>

    <div class="team-card">
        <div class="team-photo">
            <img src="images/tom.jpg" alt="Tom van Leeuwen">
        </div>
        <div class="team-info">
            <h2>Tom van Leeuwen</h2>
            <h3>Planner</h3>
            <p>Tom zorgt dat alle deadlines overzichtelijk en haalbaar zijn.</p>
        </div>
    </div>

    <div class="team-card">
        <div class="team-photo">
            <img src="images/lotte.jpg" alt="Lotte Janssen">
        </div>
        <div class="team-info">
            <h2>Lotte Janssen</h2>
            <h3>Client Relations</h3>
            <p>Lotte onderhoudt de beste relaties met onze klanten.</p>
        </div>
    </div>
</div>

</main>

<footer>
  <div class="container">
    <p>&copy; 2024 Project Management Bureau Amsterdam.</p>
  </div>
</footer>

</body>
</html>
HTML;
exit;
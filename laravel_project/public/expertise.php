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
<link rel="stylesheet" href="/css/style.css">
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
  <section class="container">
    <h1>Expertise</h1>
    <p>Wij specialiseren ons in projectmanagement, planning en uitvoering voor stedelijke projecten en infrastructuur.</p>
  </section>
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
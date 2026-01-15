<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>PMB Amsterdam — Word onderdeel van ons team</title>
    <style>
        :root{--red:#c62828;--dark:#8b0000;--white:#fff;--muted:#f8f8f8}
        *{box-sizing:border-box}
        body{font-family:system-ui,-apple-system,Segoe UI,Roboto,'Helvetica Neue',Arial;line-height:1.5;margin:0;color:#222}
        header{background:var(--red);color:var(--white)}
        .container{max-width:1100px;margin:0 auto;padding:1rem}
        .nav{display:flex;align-items:center;justify-content:space-between}
        .brand{font-weight:700;font-size:1.25rem;display:flex;align-items:center;gap:0.75rem}
        .brand img{height:50px;width:auto}
        nav a{color:var(--white);text-decoration:none;margin-left:1rem;font-weight:600}
        .hero{padding:4rem 0;display:grid;grid-template-columns:1fr;gap:1.5rem;align-items:center}
        .hero .eyebrow{background:var(--white);color:var(--red);display:inline-block;padding:0.25rem .75rem;border-radius:999px;font-weight:700}
        .hero h1{font-size:2rem;margin:.5rem 0;color:var(--white)}
        .hero p{color:rgba(255,255,255,0.95);max-width:60ch}
        .btn{display:inline-block;background:var(--white);color:var(--red);padding:.75rem 1.25rem;border-radius:8px;font-weight:700;text-decoration:none}
        main{background:var(--muted);padding:2rem 0}
        .grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:1rem}
        .card{background:var(--white);padding:1rem;border-radius:8px;box-shadow:0 2px 6px rgba(0,0,0,0.06)}
        .vacancy{border-left:4px solid var(--red)}
        footer{background:#111;color:#fff;padding:1rem 0;text-align:center}
        @media(min-width:768px){.hero{grid-template-columns:1fr 420px}.hero h1{font-size:2.5rem}}
    </style>
</head>
<body>
    <header>
        <div class="container nav">
            <div class="brand">
                <img src="{{ asset('logo-gemeente-amsterdam.jpg') }}" alt="Gemeente Amsterdam Logo">
                PMB Amsterdam
            </div>
            <nav>
                <a href="#">Home</a>
                <a href="#vacatures">Vacatures</a>
                <a href="#over">Over ons</a>
                <a href="#contact">Contact</a>
            </nav>
        </div>
    </header>

    <section class="container hero">
        <div>
            <div class="eyebrow">We nemen aan</div>
            <h1>Word onderdeel van PMB Amsterdam — we zoeken talent</h1>
            <p><a class="btn" href="/about">Over ons</a></p>
            <p><a class="btn" href="/vacancies">Openstaande vacatures</a></p>
            <p><a class="btn" href="/apply">Solliciteer nu</a></p>
        </div>
        <div>
            <div class="card" style="text-align:center">
                <h3>Snelle sollicitatie</h3>
                <p>Stuur je CV en korte motivatie — we nemen binnen 5 werkdagen contact op.</p>
                <a class="btn" href="#contact">Stuur je CV</a>
            </div>
        </div>
    </section>

    <main>
        <div class="container">
            <section id="vacatures">
                <h2>Openstaande vacatures</h2>
                <div class="grid">
                    <article class="card vacancy">
                        <h3>Junior Projectmanager</h3>
                        <p>Kennis van planning en stakeholdermanagement. 0–2 jaar ervaring.</p>
                        <p><strong>Locatie:</strong> Amsterdam</p>
                        <p><a class="btn" href="#contact">Solliciteer</a></p>
                    </article>
                    <article class="card vacancy">
                        <h3>Planner / Coördinator</h3>
                        <p>Sterk organisatorisch vermogen en ervaring met roosters en planningstools.</p>
                        <p><strong>Locatie:</strong> Amsterdam</p>
                        <p><a class="btn" href="#contact">Solliciteer</a></p>
                    </article>
                    <article class="card">
                        <h3>Stage Projectmanagement</h3>
                        <p>Praktijkstage voor HBO/WO studenten — leer in de praktijk en werk mee aan echte projecten.</p>
                        <p><a class="btn" href="#contact">Meer info</a></p>
                    </article>
                </div>
            </section>

            <section id="over" style="margin-top:2rem">
                <h2>Waarom werken bij ons?</h2>
                <div class="grid">
                    <div class="card">
                        <h4>Impact</h4>
                        <p>Je werkt aan zichtbare projecten in Amsterdam met concrete resultaten voor bewoners.</p>
                    </div>
                    <div class="card">
                        <h4>Ontwikkeling</h4>
                        <p>Coaching, trainingen en doorgroeimogelijkheden staan centraal.</p>
                    </div>
                    <div class="card">
                        <h4>Team</h4>
                        <p>Kleinschalige teams met korte lijnen en veel verantwoordelijkheid.</p>
                    </div>
                </div>
            </section>

            <section id="contact" style="margin-top:2rem">
                @if (session('success'))
    <div class="card" style="border-left:4px solid #2e7d32;">
        {{ session('success') }}
    </div>
@endif
                <h2>Interesse? Neem contact op</h2>
                <form class="card" method="POST" action="/contact">
    @csrf

    <label>
        Naam<br>
        <input type="text" name="name" required>
    </label>

    <label>
        E-mail<br>
        <input type="email" name="email" required>
    </label>

    <label>
        Bericht<br>
        <textarea name="message"></textarea>
    </label>

    <button type="submit">Verstuur</button>
</form>
            </section>
        </div>  
    </main>

    <footer>
        <div class="container">© {{ date('Y') }} PMB Amsterdam — Samen werken aan betere projecten</div>
    </footer>
</body>
</html>

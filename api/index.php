<?php
// index.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FS204 | Suivi pédagogique</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f7fb;
            color: #1f2937;
        }

        header {
            background: #111827;
            color: white;
            padding: 18px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 22px;
            font-weight: bold;
        }

        .logo span {
            color: #38bdf8;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin-left: 25px;
            font-size: 14px;
        }

        nav a:hover {
            color: #38bdf8;
        }

        .hero {
            min-height: 430px;
            padding: 80px 7%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 50px;
            background: linear-gradient(135deg, #111827, #1e3a5f);
            color: white;
        }

        .hero-content {
            max-width: 650px;
        }

        .badge {
            display: inline-block;
            background: #38bdf8;
            color: #0f172a;
            padding: 7px 14px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .hero h1 {
            font-size: 46px;
            margin-bottom: 18px;
        }

        .hero h1 span {
            color: #38bdf8;
        }

        .hero p {
            font-size: 18px;
            line-height: 1.7;
            color: #dbeafe;
        }

        .hero-card {
            background: rgba(255,255,255,0.1);
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 20px;
            padding: 30px;
            width: 280px;
            text-align: center;
        }

        .hero-card .icon {
            font-size: 55px;
            margin-bottom: 15px;
        }

        .hero-card h3 {
            margin-bottom: 10px;
        }

        .hero-card p {
            font-size: 14px;
        }

        .container {
            width: 86%;
            max-width: 1200px;
            margin: 50px auto;
        }

        .section-title {
            text-align: center;
            margin-bottom: 35px;
        }

        .section-title h2 {
            font-size: 30px;
            margin-bottom: 10px;
        }

        .section-title p {
            color: #6b7280;
        }

        .modules {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .card {
            background: white;
            padding: 28px;
            border-radius: 16px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.06);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.10);
        }

        .card-icon {
            font-size: 35px;
            margin-bottom: 15px;
        }

        .card h3 {
            margin-bottom: 10px;
        }

        .card p {
            color: #6b7280;
            line-height: 1.6;
            font-size: 14px;
        }

        .card a {
            display: inline-block;
            margin-top: 18px;
            color: #0284c7;
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
        }

        .portfolio {
            background: #eaf4fb;
            padding: 55px 0;
        }

        .steps {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .step {
            text-align: center;
            padding: 25px;
        }

        .number {
            width: 45px;
            height: 45px;
            line-height: 45px;
            margin: auto auto 15px;
            border-radius: 50%;
            background: #0284c7;
            color: white;
            font-weight: bold;
        }

        footer {
            background: #111827;
            color: #9ca3af;
            text-align: center;
            padding: 25px;
            font-size: 13px;
        }

        @media (max-width: 900px) {
            .modules,
            .steps {
                grid-template-columns: repeat(2, 1fr);
            }

            .hero {
                flex-direction: column;
                text-align: center;
            }
        }

        @media (max-width: 600px) {
            nav {
                display: none;
            }

            .modules,
            .steps {
                grid-template-columns: 1fr;
            }

            .hero h1 {
                font-size: 34px;
            }
        }
    </style>
</head>

<body>

<header>
    <div class="logo">
        FS<span>204</span>
    </div>

    <nav>
        <a href="index.php">Accueil</a>
        <a href="#modules">Modules</a>
        <a href="#portfolio">Portfolio</a>
        <a href="#contact">Contact</a>
    </nav>
</header>


<section class="hero">

    <div class="hero-content">

        <span class="badge">SUIVI PÉDAGOGIQUE</span>

        <h1>
            Portfolio <span>FS204</span>
        </h1>

        <p>
            Plateforme dédiée au suivi pédagogique des stagiaires
            en formation Full Stack. Retrouvez les cours, travaux pratiques,
            projets, ressources et productions réalisées durant la formation.
        </p>

    </div>

    <div class="hero-card">

        <div class="icon">💻</div>

        <h3>Formation Full Stack</h3>

        <p>
            Apprendre, pratiquer, réaliser et présenter
            des projets web professionnels.
        </p>

    </div>

</section>


<section class="container" id="modules">

    <div class="section-title">

        <h2>Ressources pédagogiques</h2>

        <p>
            Accédez aux différentes ressources et activités du module.
        </p>

    </div>


    <div class="modules">

        <div class="card">

            <div class="card-icon">📚</div>

            <h3>Cours</h3>

            <p>
                Supports de cours, notions essentielles,
                méthodes et concepts à maîtriser.
            </p>

            <a href="cours/">Consulter les cours →</a>

        </div>


        <div class="card">

            <div class="card-icon">🧪</div>

            <h3>Travaux pratiques</h3>

            <p>
                Exercices et activités permettant de mettre
                en pratique les notions étudiées.
            </p>

            <a href="tp/">Voir les TP →</a>

        </div>


        <div class="card">

            <div class="card-icon">🚀</div>

            <h3>Projets</h3>

            <p>
                Mini-projets et projets permettant de mobiliser
                les compétences acquises.
            </p>

            <a href="projets/">Voir les projets →</a>

        </div>


        <div class="card">

            <div class="card-icon">📄</div>

            <h3>Énoncés</h3>

            <p>
                Retrouvez les énoncés des activités et projets
                sous forme de documents téléchargeables.
            </p>

            <a href="documents/">Télécharger →</a>

        </div>


        <div class="card">

            <div class="card-icon">👨‍💻</div>

            <h3>Portfolio stagiaire</h3>

            <p>
                Présentation des réalisations, compétences,
                projets et productions de chaque stagiaire.
            </p>

            <a href="stagiaires/">Accéder aux portfolios →</a>

        </div>


        <div class="card">

            <div class="card-icon">📊</div>

            <h3>Suivi pédagogique</h3>

            <p>
                Suivi de la progression, des compétences
                développées et des réalisations.
            </p>

            <a href="suivi/">Consulter le suivi →</a>

        </div>

    </div>

</section>


<section class="portfolio" id="portfolio">

    <div class="container">

        <div class="section-title">

            <h2>Construire son portfolio</h2>

            <p>
                Une démarche progressive pour valoriser les compétences acquises.
            </p>

            <img src="/images/azeggouar.png" alt="">

        </div>


        <div class="steps">

            <div class="step">

                <div class="number">1</div>

                <h3>Apprendre</h3>

                <p>
                    Acquérir les concepts et méthodes.
                </p>

            </div>


            <div class="step">

                <div class="number">2</div>

                <h3>Pratiquer</h3>

                <p>
                    Réaliser des exercices et TP.
                </p>

            </div>


            <div class="step">

                <div class="number">3</div>

                <h3>Produire</h3>

                <p>
                    Développer des projets concrets.
                </p>

            </div>


            <div class="step">

                <div class="number">4</div>

                <h3>Valoriser</h3>

                <p>
                    Présenter les réalisations dans son portfolio.
                </p>

            </div>

        </div>

    </div>

</section>


<footer id="contact">

    <p>
        FS204 — Suivi pédagogique | Formation Full Stack
    </p>

</footer>

</body>
</html>
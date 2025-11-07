<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genesis - Brochure</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'DejaVu Sans', sans-serif;
            line-height: 1.6;
            color: #1f2937;
        }

        .page {
            page-break-after: always;
        }

        .cover {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 100px 60px;
            text-align: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .cover h1 {
            font-size: 72px;
            font-weight: bold;
            margin-bottom: 30px;
            letter-spacing: 2px;
        }

        .cover .tagline {
            font-size: 28px;
            margin-bottom: 20px;
            opacity: 0.95;
        }

        .cover .subtitle {
            font-size: 18px;
            opacity: 0.85;
            max-width: 600px;
            margin: 0 auto;
        }

        .cover .year {
            margin-top: 60px;
            font-size: 20px;
            opacity: 0.8;
        }

        .content {
            padding: 60px;
        }

        h2 {
            color: #667eea;
            font-size: 36px;
            margin-bottom: 20px;
            border-bottom: 4px solid #667eea;
            padding-bottom: 10px;
        }

        h3 {
            color: #764ba2;
            font-size: 24px;
            margin-top: 30px;
            margin-bottom: 15px;
        }

        p {
            margin-bottom: 15px;
            text-align: justify;
            font-size: 14px;
        }

        .stats {
            display: table;
            width: 100%;
            margin: 40px 0;
        }

        .stat {
            display: table-cell;
            text-align: center;
            padding: 20px;
            background: #f3f4f6;
            border-radius: 10px;
            width: 25%;
        }

        .stat .number {
            font-size: 48px;
            font-weight: bold;
            color: #667eea;
            margin-bottom: 5px;
        }

        .stat .label {
            font-size: 12px;
            color: #6b7280;
            text-transform: uppercase;
        }

        .services-grid {
            margin-top: 30px;
        }

        .service-item {
            margin-bottom: 30px;
            padding: 20px;
            background: #f9fafb;
            border-left: 5px solid #667eea;
            border-radius: 8px;
        }

        .service-item h4 {
            color: #667eea;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .service-item p {
            margin-bottom: 10px;
            font-size: 13px;
        }

        .features {
            list-style: none;
            padding-left: 0;
        }

        .features li {
            padding: 8px 0;
            padding-left: 30px;
            position: relative;
            font-size: 13px;
        }

        .features li:before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #10b981;
            font-weight: bold;
            font-size: 16px;
        }

        .values {
            display: table;
            width: 100%;
            margin-top: 30px;
        }

        .value {
            display: table-cell;
            padding: 20px;
            width: 33.33%;
            text-align: center;
        }

        .value h4 {
            color: #667eea;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .value p {
            font-size: 12px;
            text-align: center;
        }

        .footer {
            position: fixed;
            bottom: 30px;
            left: 60px;
            right: 60px;
            text-align: center;
            font-size: 11px;
            color: #6b7280;
            border-top: 1px solid #e5e7eb;
            padding-top: 15px;
        }

        .contact-info {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 40px;
            border-radius: 10px;
            margin-top: 30px;
        }

        .contact-info h3 {
            color: white;
            margin-top: 0;
        }

        .contact-info p {
            margin-bottom: 8px;
            text-align: left;
        }

        .page-number {
            position: fixed;
            bottom: 20px;
            right: 60px;
            font-size: 11px;
            color: #9ca3af;
        }
    </style>
</head>
<body>
    <!-- Page de couverture -->
    <div class="page cover">
        <h1>GENESIS</h1>
        <div class="tagline">Votre partenaire de confiance</div>
        <div class="subtitle">
            Solutions digitales innovantes pour transformer votre entreprise
        </div>
        <div class="year">Depuis 2020</div>
    </div>

    <!-- Page 2: À propos -->
    <div class="page content">
        <h2>À propos de Genesis</h2>

        <p>
            Fondée en 2020, Genesis est née de la passion de créer des solutions digitales innovantes.
            Notre mission est d'accompagner les entreprises dans leur transformation numérique en offrant
            des services de haute qualité et un support exceptionnel.
        </p>

        <p>
            Nous croyons en l'innovation, la collaboration et l'excellence. Chaque projet est une opportunité
            de repousser les limites et de créer quelque chose d'extraordinaire.
        </p>

        <div class="stats">
            <div class="stat">
                <div class="number">150+</div>
                <div class="label">Projets réalisés</div>
            </div>
            <div class="stat" style="margin-left: 10px;">
                <div class="number">98%</div>
                <div class="label">Clients satisfaits</div>
            </div>
            <div class="stat" style="margin-left: 10px;">
                <div class="number">25+</div>
                <div class="label">Experts passionnés</div>
            </div>
            <div class="stat" style="margin-left: 10px;">
                <div class="number">10+</div>
                <div class="label">Années d'expérience</div>
            </div>
        </div>

        <h3>Nos Valeurs</h3>

        <div class="values">
            <div class="value">
                <h4>Innovation</h4>
                <p>Nous adoptons les dernières technologies et méthodologies pour créer des solutions d'avant-garde.</p>
            </div>
            <div class="value">
                <h4>Collaboration</h4>
                <p>Nous travaillons main dans la main avec nos clients pour garantir leur succès.</p>
            </div>
            <div class="value">
                <h4>Excellence</h4>
                <p>Nous visons l'excellence dans chaque aspect de notre travail.</p>
            </div>
        </div>

        <div class="footer">
            Genesis Entreprises - Votre partenaire pour l'innovation digitale
        </div>
        <div class="page-number">Page 1</div>
    </div>

    <!-- Page 3: Services (Partie 1) -->
    <div class="page content">
        <h2>Nos Services</h2>

        <p>
            Genesis offre une gamme complète de services digitaux pour accompagner votre entreprise
            dans sa transformation numérique. De la conception à la réalisation, nous sommes là à chaque étape.
        </p>

        <div class="services-grid">
            @foreach($services->take(3) as $service)
            <div class="service-item">
                <h4>{{ $service->title }}</h4>
                <p>{{ $service->description }}</p>
                @if($service->features && count($service->features) > 0)
                <ul class="features">
                    @foreach(array_slice($service->features, 0, 4) as $feature)
                    <li>{{ $feature }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            @endforeach
        </div>

        <div class="footer">
            Genesis Entreprises - Votre partenaire pour l'innovation digitale
        </div>
        <div class="page-number">Page 2</div>
    </div>

    <!-- Page 4: Services (Partie 2) -->
    <div class="page content">
        <h2>Nos Services (suite)</h2>

        <div class="services-grid">
            @foreach($services->skip(3) as $service)
            <div class="service-item">
                <h4>{{ $service->title }}</h4>
                <p>{{ $service->description }}</p>
                @if($service->features && count($service->features) > 0)
                <ul class="features">
                    @foreach(array_slice($service->features, 0, 4) as $feature)
                    <li>{{ $feature }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            @endforeach
        </div>

        <div class="footer">
            Genesis Entreprises - Votre partenaire pour l'innovation digitale
        </div>
        <div class="page-number">Page 3</div>
    </div>

    <!-- Page 5: Contact -->
    <div class="page content">
        <h2>Contactez-nous</h2>

        <p>
            Prêt à démarrer votre projet ? Notre équipe d'experts est là pour vous accompagner
            et transformer vos idées en solutions digitales performantes.
        </p>

        <div class="contact-info">
            <h3>Genesis Entreprises</h3>
            <p><strong>Adresse:</strong> Kinshasa, République Démocratique du Congo</p>
            <p><strong>Email:</strong> infos@genesisentreprise.com</p>
            <p><strong>Téléphone:</strong> +243 840 812 172</p>
            <p><strong>Site Web:</strong> www.genesis-entreprises.com</p>
        </div>

        <h3 style="margin-top: 40px;">Pourquoi choisir Genesis ?</h3>

        <ul class="features">
            <li>Équipe d'experts passionnés et expérimentés</li>
            <li>Solutions sur mesure adaptées à vos besoins</li>
            <li>Accompagnement personnalisé tout au long du projet</li>
            <li>Technologies de pointe et méthodologies agiles</li>
            <li>Support technique réactif et efficace</li>
            <li>Rapport qualité-prix compétitif</li>
            <li>Respect des délais et du budget</li>
            <li>Approche collaborative et transparente</li>
        </ul>

        <p style="margin-top: 40px; text-align: center; font-style: italic; color: #667eea;">
            "Ensemble, transformons vos idées en réalité digitale"
        </p>

        <div class="footer">
            Genesis Entreprises - Votre partenaire pour l'innovation digitale
        </div>
        <div class="page-number">Page 4</div>
    </div>
</body>
</html>

<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            // VIDÉOGRAPHIE
            [
                'title' => 'Film Corporatif - Banque BCDC',
                'slug' => 'film-corporatif-bcdc',
                'category' => 'videographie',
                'description' => 'Production d\'un film institutionnel premium pour la BCDC présentant leurs services bancaires et leur vision moderne du secteur financier congolais.',
                'long_description' => "Genesis Entreprises a été mandatée par la Banque Commerciale du Congo (BCDC) pour créer un film corporatif haut de gamme destiné à renforcer leur image de marque et présenter leurs innovations technologiques.\n\nLe projet comprenait l'écriture du scénario, la direction artistique, les prises de vue en 4K dans plusieurs agences à Kinshasa et Lubumbashi, ainsi qu'une post-production soignée avec étalonnage professionnel et animation graphique.\n\nNous avons capturé l'essence de la modernité bancaire congolaise en mettant en avant les équipes, les technologies de pointe et l'engagement client de la BCDC. Le film de 8 minutes alterne interviews de dirigeants, séquences lifestyle des clients et plans aériens spectaculaires par drone des infrastructures bancaires.\n\nLe résultat final a dépassé les attentes du client avec une production cinématographique qui positionne la BCDC comme leader innovant du secteur financier en RDC.",
                'client' => 'BCDC - Banque Commerciale du Congo',
                'duration' => '3 mois',
                'year' => '2024',
                'technologies' => ['Sony FX6', 'DJI Inspire 3', 'DaVinci Resolve', 'After Effects', 'Adobe Audition'],
                'results' => [
                    'Plus de 500K vues sur les réseaux sociaux',
                    'Diffusion sur RTNC et Top Congo FM',
                    'Augmentation de 35% de la notoriété de marque',
                    'Prix du meilleur film corporate aux Kinshasa Media Awards 2024',
                ],
                'image_url' => null,
                'status' => 'published',
                'featured' => true,
                'color' => 'rose',
            ],
            [
                'title' => 'Spot Publicitaire - Vodacom 5G',
                'slug' => 'spot-publicitaire-vodacom-5g',
                'category' => 'videographie',
                'description' => 'Création d\'une campagne publicitaire dynamique pour le lancement de la 5G par Vodacom RDC avec effets visuels spectaculaires.',
                'long_description' => "Pour accompagner le lancement historique de la 5G en République Démocratique du Congo, Vodacom a fait confiance à Genesis Entreprises pour créer une campagne publicitaire mémorable qui marque les esprits.\n\nNous avons conçu trois spots de 30 secondes mettant en scène la vitesse fulgurante de la 5G à travers des situations du quotidien des Kinois : streaming sans interruption, gaming en ligne fluide, visioconférences cristallines. La direction artistique moderne et énergique reflète la jeunesse et le dynamisme de la population congolaise.\n\nLes prises de vue ont été réalisées dans plusieurs quartiers emblématiques de Kinshasa avec des acteurs locaux. Nous avons intégré des effets visuels de pointe pour visualiser la vitesse de connexion et créer un univers futuriste tout en restant ancré dans la réalité congolaise.\n\nLa post-production incluait motion design, sound design immersif et adaptation multi-formats pour TV, cinéma, réseaux sociaux et panneaux digitaux urbains.",
                'client' => 'Vodacom RDC',
                'duration' => '2 mois',
                'year' => '2024',
                'technologies' => ['RED Komodo 6K', 'Cinema4D', 'After Effects', 'Premiere Pro', 'Avid Pro Tools'],
                'results' => [
                    'Campagne diffusée sur 15 chaînes TV nationales',
                    '2M+ vues combinées sur YouTube et Facebook',
                    'Augmentation de 60% des souscriptions 5G le premier mois',
                    'Campagne primée "Meilleure Pub Télé 2024" par l\'ARPTC',
                ],
                'image_url' => null,
                'status' => 'published',
                'featured' => true,
                'color' => 'rose',
            ],

            // GRAPHIC DESIGN
            [
                'title' => 'Identité Visuelle - Hôtel Pullman Kinshasa',
                'slug' => 'identite-visuelle-pullman-kinshasa',
                'category' => 'design',
                'description' => 'Refonte complète de l\'identité visuelle de l\'Hôtel Pullman incluant logo, charte graphique et supports de communication.',
                'long_description' => "Le prestigieux Hôtel Pullman Kinshasa Grand Hôtel a mandaté Genesis Entreprises pour moderniser son identité visuelle tout en préservant son héritage d'excellence et de luxe depuis 1958.\n\nNotre équipe design a mené un travail approfondi de recherche sur l'histoire de l'établissement, les attentes de la clientèle internationale et les tendances du luxury hospitality. Le nouveau logo allie élégance intemporelle et modernité, avec une typographie sur-mesure inspirée de l'architecture Art Déco de l'hôtel.\n\nLa charte graphique complète inclut : palettes de couleurs sophistiquées (or, noir profond, blanc crème), typographies primaires et secondaires, iconographie custom, traitement photographique signature, et guidelines d'application sur tous supports.\n\nNous avons décliné l'identité sur plus de 50 supports : cartes de visite, papeterie, signalétique intérieure, menus restaurants, brochures chambres, site web, réseaux sociaux, uniformes du personnel, packaging amenities, et supports événementiels.\n\nLe résultat positionne le Pullman comme référence du luxe contemporain à Kinshasa.",
                'client' => 'Pullman Kinshasa Grand Hôtel',
                'duration' => '4 mois',
                'year' => '2024',
                'technologies' => ['Adobe Illustrator', 'Adobe InDesign', 'Photoshop', 'Figma', 'Adobe XD'],
                'results' => [
                    'Reconnaissance immédiate de la nouvelle identité',
                    'Augmentation de 45% de l\'engagement sur réseaux sociaux',
                    'Prix "Best Rebranding" aux Africa Hospitality Awards',
                    'Satisfaction client : 98%',
                ],
                'image_url' => null,
                'status' => 'published',
                'featured' => true,
                'color' => 'amber',
            ],
            [
                'title' => 'Packaging Premium - Bracongo',
                'slug' => 'packaging-premium-bracongo',
                'category' => 'design',
                'description' => 'Design de packaging premium pour la nouvelle gamme de boissons haut de gamme de Bracongo.',
                'long_description' => "Bracongo, leader congolais des boissons, nous a confié la création du packaging pour leur nouvelle gamme premium ciblant le segment luxe du marché.\n\nNotre démarche créative a débuté par une étude approfondie du positionnement souhaité : élégance, authenticité africaine, qualité supérieure. Nous avons exploré des dizaines de pistes créatives avant de converger vers un concept alliant motifs traditionnels congolais stylisés et finitions premium (dorure à chaud, vernis sélectif, embossage).\n\nLe packaging final raconte une histoire : chaque variante de la gamme met en avant un élément culturel congolais (fleuve Congo, forêt équatoriale, art Kuba, musique rumba) à travers des illustrations originales créées par nos graphistes. La palette de couleurs sophistiquées (bleu profond, or, vert émeraude) évoque le raffinement.\n\nNous avons produit les maquettes 3D réalistes, les fichiers print-ready avec gestion colorimétrique précise, et accompagné le client jusqu'à la production des premiers tirages. Le packaging se distingue immédiatement en rayon et a contribué au succès commercial de la gamme.",
                'client' => 'Brasseries du Congo (Bracongo)',
                'duration' => '3 mois',
                'year' => '2024',
                'technologies' => ['Adobe Illustrator', 'Photoshop', 'Cinema 4D', 'KeyShot', 'Adobe Dimension'],
                'results' => [
                    'Augmentation de 80% des ventes de la gamme premium',
                    'Reconnaissance de la qualité perçue du produit',
                    'Shortlisté aux Pentawards (Packaging Design Awards)',
                    'Expansion de la gamme suite au succès',
                ],
                'image_url' => null,
                'status' => 'published',
                'featured' => true,
                'color' => 'amber',
            ],

            // PHOTOGRAPHIE
            [
                'title' => 'Photographie Corporate - Total Energies',
                'slug' => 'photographie-corporate-total-energies',
                'category' => 'photographie',
                'description' => 'Reportage photographique professionnel des installations et équipes de Total Energies en RDC pour leur rapport annuel.',
                'long_description' => "Total Energies RDC nous a mandatés pour réaliser un reportage photographique exhaustif de leurs opérations en République Démocratique du Congo destiné à leur rapport annuel et leurs communications institutionnelles.\n\nLe projet s'est déroulé sur 6 semaines dans 12 sites différents : stations-service à Kinshasa et provinces, dépôts pétroliers, installations techniques, bureaux, et projets sociaux. Notre équipe de photographes professionnels a capturé plus de 5000 images couvrant tous les aspects des activités de l'entreprise.\n\nNous avons privilégié un style photographique corporate moderne : lumière naturelle maîtrisée, compositions dynamiques, mise en valeur des équipes dans leur environnement de travail, et attention particulière aux détails techniques. Les prises de vue incluaient portraits formels des dirigeants, photos d'équipes, installations industrielles, et reportage lifestyle des clients.\n\nLa post-production rigoureuse (retouche professionnelle, harmonisation colorimétrique, optimisation pour print et web) a livré 300 images finales parfaitement adaptées aux besoins de communication de Total Energies. Le livrable incluait un catalogue organisé par thématiques avec métadonnées complètes.",
                'client' => 'Total Energies RDC',
                'duration' => '2 mois',
                'year' => '2024',
                'technologies' => ['Canon EOS R5', 'Sony A7R V', 'Profoto B10', 'Capture One', 'Photoshop'],
                'results' => [
                    'Plus de 5000 photos capturées, 300 sélectionnées',
                    'Rapport annuel primé pour sa qualité visuelle',
                    'Images réutilisées sur 3 ans dans les communications',
                    'Contrat renouvelé pour 2025',
                ],
                'image_url' => null,
                'status' => 'published',
                'featured' => true,
                'color' => 'emerald',
            ],
            [
                'title' => 'Shooting Produits - Kimbondo Market',
                'slug' => 'shooting-produits-kimbondo-market',
                'category' => 'photographie',
                'description' => 'Photographie de produits e-commerce pour la nouvelle plateforme Kimbondo Market, marketplace congolaise innovante.',
                'long_description' => "Kimbondo Market, nouvelle marketplace congolaise ambitieuse, nous a confié la mission de photographier leur catalogue initial de plus de 500 produits pour leur lancement digital.\n\nNous avons installé un studio photo temporaire dans leurs entrepôts à Kinshasa pour optimiser la logistique. Chaque produit a été photographié selon un protocole strict garantissant la cohérence visuelle : fond blanc neutre, éclairage three-point standardisé, angles multiples (face, profil, détails), et variations avec packshot et mise en situation lifestyle.\n\nNotre workflow optimisé permettait de traiter jusqu'à 100 produits par jour tout en maintenant la qualité professionnelle requise pour l'e-commerce. Chaque image passait par un processus de post-production automatisé (détourage, correction colorimétrique, redimensionnement multi-formats) puis par un contrôle qualité manuel.\n\nLes livrables incluaient pour chaque produit : 5 à 8 photos haute résolution, versions optimisées web (différentes tailles), fichiers nommés selon la nomenclature du client, et métadonnées intégrées. Cette bibliothèque photographique professionnelle a contribué significativement au succès du lancement de la plateforme.",
                'client' => 'Kimbondo Market',
                'duration' => '6 semaines',
                'year' => '2024',
                'technologies' => ['Sony A7 IV', 'Godox AD600', 'Light Tent', 'Capture One', 'Photoshop Automation'],
                'results' => [
                    'Plus de 500 produits photographiés',
                    'Augmentation de 40% du taux de conversion produit',
                    'Réduction de 65% des retours (grâce aux photos détaillées)',
                    'Template photo réutilisé pour nouveaux produits',
                ],
                'image_url' => null,
                'status' => 'published',
                'featured' => false,
                'color' => 'emerald',
            ],

            // ARCHITECTURE
            [
                'title' => 'Conception Architecturale - Cité du Fleuve Phase 3',
                'slug' => 'conception-architecturale-cite-fleuve-phase-3',
                'category' => 'architecture',
                'description' => 'Plans architecturaux complets pour un complexe résidentiel de standing dans la prestigieuse Cité du Fleuve à Kinshasa.',
                'long_description' => "Genesis Entreprises a été sélectionnée pour concevoir les plans architecturaux d'un nouveau complexe résidentiel premium dans la Phase 3 de la Cité du Fleuve, projet emblématique de Kinshasa.\n\nLe programme comprenait : 6 immeubles de 8 étages (120 appartements), infrastructures communes (piscine, club house, aires de jeux), parkings souterrains, et aménagements paysagers. Notre approche architecturale a privilégié l'intégration harmonieuse dans l'environnement, l'optimisation des vues sur le fleuve Congo, et le confort climatique adapté au climat équatorial.\n\nNous avons développé l'ensemble de la documentation technique : plans d'architecte, coupes, façades, plans techniques (structure, électricité, plomberie, climatisation), modélisation BIM complète, et rendus 3D photoréalistes. Les plans respectent les normes congolaises et internationales de construction, intégrant les meilleures pratiques en matière d'efficacité énergétique et de durabilité.\n\nLe design contemporain allie élégance, fonctionnalité et respect de l'environnement, avec des espaces généreux baignés de lumière naturelle, des matériaux nobles et des finitions haut de gamme. Le projet a reçu toutes les autorisations administratives et est actuellement en phase de construction.",
                'client' => 'Cité du Fleuve Development',
                'duration' => '8 mois',
                'year' => '2024',
                'technologies' => ['AutoCAD', 'Revit BIM', '3ds Max', 'V-Ray', 'Lumion'],
                'results' => [
                    '120 appartements premium conçus',
                    '100% des unités pré-vendues avant construction',
                    'Certification Green Building en cours',
                    'Prix "Best Residential Design" aux Kinshasa Architecture Awards',
                ],
                'image_url' => null,
                'status' => 'published',
                'featured' => true,
                'color' => 'sky',
            ],
            [
                'title' => 'Rénovation Hôtel Memling - Plans et Supervision',
                'slug' => 'renovation-hotel-memling',
                'category' => 'architecture',
                'description' => 'Direction architecturale de la rénovation complète de l\'iconique Hôtel Memling, joyau du patrimoine architectural kinois.',
                'long_description' => "L'Hôtel Memling, institution kinoise depuis 1967, nécessitait une rénovation complète pour retrouver sa splendeur tout en l'adaptant aux standards internationaux modernes. Genesis Entreprises a assuré la maîtrise d'œuvre architecturale de ce projet patrimonial sensible.\n\nNotre mission incluait : relevés d'état des lieux exhaustifs, diagnostic structurel, conception des plans de rénovation respectant l'architecture originale Art Déco, intégration des normes hôtelières contemporaines (accessibilité, sécurité incendie, efficacité énergétique), et supervision de chantier.\n\nLe défi était de taille : moderniser 150 chambres, restaurants, espaces publics et infrastructures techniques sans dénaturer l'identité architecturale historique. Nous avons préservé les éléments patrimoniaux remarquables (façade, grand escalier, lustres d'époque) tout en créant des espaces fonctionnels et confortables répondant aux attentes des voyageurs internationaux.\n\nLa rénovation a intégré des technologies modernes (domotique, climatisation performante, insonorisation avancée) de manière discrète. Notre équipe a coordonné 12 corps de métier durant 18 mois de chantier, garantissant qualité d'exécution et respect des délais.",
                'client' => 'Hôtel Memling',
                'duration' => '18 mois',
                'year' => '2023-2024',
                'technologies' => ['AutoCAD', 'Revit', 'SketchUp', 'Enscape', 'MS Project'],
                'results' => [
                    'Rénovation complète de 150 chambres',
                    'Classement 5 étoiles maintenu',
                    'Réduction de 35% de la consommation énergétique',
                    'Prix "Heritage Renovation Excellence" 2024',
                ],
                'image_url' => null,
                'status' => 'published',
                'featured' => true,
                'color' => 'sky',
            ],

            // CONCEPTION DE LOGICIELS
            [
                'title' => 'ERP Industriel - Bralima',
                'slug' => 'erp-industriel-bralima',
                'category' => 'logiciels',
                'description' => 'Développement sur-mesure d\'un système ERP complet pour la gestion industrielle de Bralima (groupe Heineken).',
                'long_description' => "Bralima, fleuron de l'industrie brassicole congolaise (groupe Heineken), nous a confié le développement d'un système ERP sur-mesure pour digitaliser l'ensemble de leurs processus industriels et commerciaux.\n\nLe système développé couvre : gestion de production (planification, suivi temps réel, contrôle qualité), gestion supply chain (approvisionnement, stocks multi-sites, distribution), gestion commerciale (ventes, facturation, CRM), comptabilité et finance, ressources humaines, et business intelligence avec tableaux de bord décisionnels.\n\nNotre équipe de 12 développeurs a utilisé une architecture moderne microservices garantissant scalabilité et résilience. L'interface utilisateur intuitive a été conçue pour les spécificités du terrain africain (connexion internet variable, multilinguisme français/lingala, tablettes robustes pour entrepôts).\n\nL'ERP s'intègre avec les équipements industriels (API temps réel), les systèmes bancaires (paiements automatisés), et consolide les données de 8 sites de production à travers la RDC. Nous assurons la maintenance évolutive, le support utilisateurs 24/7 et la formation continue des équipes.\n\nLe projet a été livré en phases successives sur 14 mois avec des mises en production progressives minimisant les risques opérationnels.",
                'client' => 'Bralima (Groupe Heineken)',
                'duration' => '14 mois',
                'year' => '2023-2024',
                'technologies' => ['Laravel', 'Vue.js', 'PostgreSQL', 'Redis', 'Docker', 'Kubernetes'],
                'results' => [
                    'Digitalisation complète de 8 sites de production',
                    'Réduction de 50% des erreurs de stock',
                    'Gain de productivité de 35% sur les processus admin',
                    'ROI atteint en 18 mois',
                ],
                'image_url' => null,
                'status' => 'published',
                'featured' => true,
                'color' => 'indigo',
            ],
            [
                'title' => 'Plateforme Banking - Rawbank Mobile',
                'slug' => 'plateforme-banking-rawbank-mobile',
                'category' => 'logiciels',
                'description' => 'Développement de l\'application mobile banking nouvelle génération pour Rawbank avec fonctionnalités innovantes.',
                'long_description' => "Rawbank, première banque privée de RDC, nous a mandatés pour développer la nouvelle version de leur application mobile banking destinée à révolutionner l'expérience bancaire digitale congolaise.\n\nL'application développée offre l'ensemble des services bancaires : consultation de comptes en temps réel, virements instantanés (internes et RTGS), paiements de factures, recharges téléphoniques, demandes de crédit, gestion de cartes, et service client intégré. L'interface ultra-intuitive permet même aux utilisateurs peu familiers du digital d'effectuer leurs opérations en toute autonomie.\n\nLa sécurité était prioritaire : authentification biométrique (empreinte, reconnaissance faciale), chiffrement de bout en bout, détection de fraude par IA, et conformité totale aux normes bancaires internationales (PCI-DSS). Le système de notifications intelligentes alerte les clients en temps réel de toute activité sur leurs comptes.\n\nNous avons particulièrement soigné l'expérience utilisateur avec un design moderne et épuré, des animations fluides, un mode hors-ligne intelligent, et une performance optimale même sur connexions 3G. L'app est disponible sur iOS et Android avec une base de code partagée (React Native) facilitant les mises à jour.\n\nLe back-end robuste s'interface avec le core banking via APIs sécurisées et gère des millions de transactions mensuelles avec une disponibilité de 99.9%.",
                'client' => 'Rawbank',
                'duration' => '10 mois',
                'year' => '2024',
                'technologies' => ['React Native', 'Node.js', 'MongoDB', 'Redis', 'AWS', 'TensorFlow'],
                'results' => [
                    'Plus de 500K téléchargements en 4 mois',
                    '70% des transactions bancaires migrent sur mobile',
                    'Note App Store : 4.6/5',
                    'Réduction de 60% de l\'affluence en agence',
                ],
                'image_url' => null,
                'status' => 'published',
                'featured' => true,
                'color' => 'indigo',
            ],

            // INTÉGRATION DE PROGICIELS
            // INTÉGRATION DE PROGICIELS
            [
                'title' => 'Déploiement SAP S/4HANA - Gécamines',
                'slug' => 'deploiement-sap-gecamines',
                'category' => 'integration',
                'description' => 'Intégration et déploiement complet de SAP S/4HANA pour la Gécamines, géant minier congolais.',
                'long_description' => "La Gécamines, entreprise publique minière stratégique de la RDC, nous a confié l'intégration de SAP S/4HANA pour moderniser l'ensemble de son système d'information et optimiser ses opérations minières.\n\nLe projet d'envergure couvrait tous les modules SAP : Finance (FI/CO), Contrôle de gestion, Achats (MM), Ventes (SD), Production (PP), Maintenance (PM), Ressources Humaines (HR), et Business Intelligence (BW). Notre équipe de consultants certifiés SAP a adapté la solution aux spécificités de l'industrie minière congolaise et aux processus métiers de la Gécamines.\n\nLa phase d'analyse a duré 3 mois avec mapping détaillé des processus existants, identification des besoins de customisation, et définition de la roadmap d'implémentation. Nous avons ensuite configuré SAP, développé les extensions spécifiques, migré les données historiques (20 ans d'archives), et formé plus de 300 utilisateurs.\n\nL'intégration incluait la connexion avec les systèmes opérationnels miniers (SCADA, systèmes de pesage, contrôle qualité laboratoire), permettant une vision consolidée temps réel de toute la chaîne de valeur. La solution déployée sur infrastructure cloud AWS garantit disponibilité et performance même dans les sites miniers éloignés.\n\nNous assurons le support post-déploiement, les optimisations continues et l'accompagnement au changement des équipes.",
                'client' => 'Gécamines',
                'duration' => '24 mois',
                'year' => '2022-2024',
                'technologies' => ['SAP S/4HANA', 'SAP Fiori', 'AWS', 'SAP BW/4HANA', 'SAP ABAP'],
                'results' => [
                    'Digitalisation complète de 300+ processus métiers',
                    'Réduction de 40% des délais de clôture comptable',
                    'Visibilité temps réel sur toutes les opérations',
                    'Formation de 300+ utilisateurs avec 95% de satisfaction',
                ],
                'image_url' => null,
                'status' => 'published',
                'featured' => true,
                'color' => 'purple',
            ],
            [
                'title' => 'Migration Odoo ERP - Groupe Rawji',
                'slug' => 'migration-odoo-groupe-rawji',
                'category' => 'integration',
                'description' => 'Migration et intégration d\'Odoo ERP pour le Groupe Rawji avec modules customisés pour la distribution et l\'import.',
                'long_description' => "Le Groupe Rawji, conglomérat majeur de distribution et import en RDC, avait besoin de remplacer leur système ERP vieillissant par une solution moderne, flexible et évolutive. Genesis Entreprises a piloté la migration complète vers Odoo ERP.\n\nNous avons déployé les modules Odoo suivants : Ventes, CRM, Achats, Inventaire multi-dépôts, Comptabilité, Facturation, Points de Vente (multiples magasins), Ressources Humaines, et Gestion de Projet. L'approche modulaire d'Odoo permettait d'activer progressivement les fonctionnalités selon les priorités business.\n\nNotre équipe a développé des customisations spécifiques : gestion des conteneurs import (tracking depuis port jusqu'à dédouanement et livraison), calcul automatique des coûts d'import incluant douanes et taxes congolaises, gestion des licences d'importation, et intégrations avec les systèmes douaniers électroniques (ASYCUDA).\n\nLa migration des données depuis l'ancien système a nécessité un travail minutieux d'extraction, nettoyage et transformation pour garantir la qualité des données dans Odoo. Nous avons migré 10 ans d'historique commercial, 50 000+ références produits, et 8 000+ clients.\n\nLa formation des 80 utilisateurs a été organisée par rôle avec des sessions pratiques sur environnement de test. Le déploiement s'est fait en mode Big Bang le weekend pour minimiser l'impact opérationnel.",
                'client' => 'Groupe Rawji',
                'duration' => '7 mois',
                'year' => '2024',
                'technologies' => ['Odoo 17', 'PostgreSQL', 'Python', 'Docker', 'Nginx'],
                'results' => [
                    'Migration réussie de 10 ans de données historiques',
                    '80 utilisateurs formés et opérationnels',
                    'Réduction de 55% du temps de traitement des commandes',
                    'Économie annuelle de 150K USD vs ancien ERP',
                ],
                'image_url' => null,
                'status' => 'published',
                'featured' => true,
                'color' => 'purple',
            ],
        ];

        foreach ($projects as $projectData) {
            Project::create($projectData);
        }
    }
}

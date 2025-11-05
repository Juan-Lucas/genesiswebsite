<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Vidéographie',
                'slug' => 'videographie',
                'description' => 'Production de contenus vidéo professionnels pour valoriser votre marque et captiver votre audience.',
                'content' => "Donnez vie à vos idées avec des vidéos professionnelles qui marquent les esprits. De la conception au montage final, nous créons des contenus vidéo percutants qui racontent votre histoire.\n\nNotre équipe de vidéastes et motion designers maîtrise tous les aspects de la production vidéo : vidéos corporate, publicités, clips promotionnels, documentaires, et contenus pour les réseaux sociaux.\n\nNous utilisons du matériel professionnel de dernière génération (caméras 4K/8K, drones, stabilisateurs) et des techniques de post-production avancées pour garantir un rendu exceptionnel.\n\nQue ce soit pour une campagne marketing, un événement d'entreprise, un lancement de produit ou du contenu pour vos réseaux sociaux, nous adaptons notre approche créative à vos objectifs.\n\nDu storyboard à la livraison finale, nous vous accompagnons à chaque étape pour créer des vidéos qui génèrent de l'engagement et convertissent votre audience.",
                'features' => [
                    'Vidéos corporate et institutionnelles',
                    'Spots publicitaires et commerciaux',
                    'Vidéos événementielles et reportages',
                    'Contenus pour réseaux sociaux',
                    'Vidéos produits et tutoriels',
                    'Motion design et animations 2D/3D',
                    'Prises de vues aériennes par drone',
                    'Post-production et étalonnage professionnel'
                ],
                'icon' => '<svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>',
                'color' => 'rose',
                'published_at' => now(),
            ],
            [
                'title' => 'Graphic Design',
                'slug' => 'graphic-design',
                'description' => 'Création d\'identités visuelles fortes et de supports graphiques impactants pour votre communication.',
                'content' => "Forgez une identité visuelle unique qui vous démarque de la concurrence. Nos designers graphiques créent des visuels percutants qui reflètent parfaitement votre ADN de marque.\n\nDe la conception de votre logo à la création de chartes graphiques complètes, nous développons une identité cohérente sur tous vos supports de communication.\n\nNous concevons tous types de supports graphiques : brochures, flyers, affiches, cartes de visite, packaging, bannières web, publications pour réseaux sociaux et bien plus encore.\n\nNotre approche créative combine tendances design actuelles et intemporalité pour garantir que votre image de marque reste pertinente et mémorable dans le temps.\n\nChaque projet est unique : nous prenons le temps de comprendre votre univers, vos valeurs et vos objectifs pour créer des designs qui résonnent avec votre audience cible.\n\nNous livrons tous vos fichiers dans les formats adaptés à chaque usage (print, web, réseaux sociaux) avec une charte graphique détaillée pour garantir la cohérence de votre communication.",
                'features' => [
                    'Identité visuelle et branding',
                    'Logos et chartes graphiques',
                    'Supports print (brochures, flyers, affiches)',
                    'Packaging et étiquetage',
                    'Design pour réseaux sociaux',
                    'Infographies et illustrations',
                    'Templates et présentations',
                    'Déclinaisons et adaptations multi-supports'
                ],
                'icon' => '<svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/></svg>',
                'color' => 'amber',
                'published_at' => now(),
            ],
            [
                'title' => 'Photography',
                'slug' => 'photography',
                'description' => 'Photographies professionnelles pour sublimer votre image et créer des visuels authentiques.',
                'content' => "Capturez l'essence de votre marque avec des photographies professionnelles qui racontent votre histoire. Nos photographes experts créent des images authentiques qui valorisent votre identité.\n\nNous couvrons tous les besoins en photographie professionnelle : corporate, événementiel, produits, architecture, portraits, reportages et contenus pour réseaux sociaux.\n\nNotre approche combine technique photographique maîtrisée et sensibilité artistique pour créer des images qui transmettent les bonnes émotions et véhiculent vos messages.\n\nNous utilisons du matériel professionnel haut de gamme et maîtrisons toutes les techniques d'éclairage (studio, lumière naturelle, flash) pour un rendu optimal en toute circonstance.\n\nChaque shooting est soigneusement préparé : repérage des lieux, définition de la direction artistique, sélection des prises de vues et retouches professionnelles pour un résultat impeccable.\n\nNous livrons vos photos dans les formats et résolutions adaptés à vos usages (web, print, réseaux sociaux) avec des retouches professionnelles qui subliment chaque image.",
                'features' => [
                    'Photographie corporate et portraits',
                    'Photos événementielles et reportages',
                    'Photographie de produits et packshots',
                    'Photos d\'architecture et immobilier',
                    'Shooting pour réseaux sociaux',
                    'Photographie culinaire et lifestyle',
                    'Retouches et post-production',
                    'Séances en studio ou sur site'
                ],
                'icon' => '<svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/></svg>',
                'color' => 'emerald',
                'published_at' => now(),
            ],
            [
                'title' => 'Architecture',
                'slug' => 'architecture',
                'description' => 'Conception architecturale et design d\'espaces créatifs, fonctionnels et esthétiques.',
                'content' => "Créez des espaces qui inspirent et fonctionnent parfaitement. Nos architectes conçoivent des projets qui allient esthétique, fonctionnalité et durabilité.\n\nNous accompagnons vos projets de construction et de rénovation de A à Z : études de faisabilité, conception architecturale, permis de construire, suivi de chantier et réception des travaux.\n\nNotre approche intègre les dernières innovations en matière de design d'espace, d'efficacité énergétique et de matériaux durables pour créer des bâtiments performants et respectueux de l'environnement.\n\nQue ce soit pour des espaces résidentiels, commerciaux, bureaux ou établissements publics, nous créons des lieux de vie et de travail qui répondent parfaitement à vos besoins et contraintes.\n\nNous utilisons les outils de modélisation 3D et BIM (Building Information Modeling) pour vous permettre de visualiser votre projet avant sa réalisation et optimiser chaque détail.\n\nDu concept initial aux plans d'exécution, nous coordonnons l'ensemble des intervenants (bureaux d'études, entreprises) pour garantir la réussite de votre projet architectural.",
                'features' => [
                    'Conception architecturale complète',
                    'Plans et permis de construire',
                    'Rénovation et réhabilitation',
                    'Architecture d\'intérieur',
                    'Modélisation 3D et BIM',
                    'Études de faisabilité',
                    'Suivi et coordination de chantier',
                    'Architecture éco-responsable'
                ],
                'icon' => '<svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>',
                'color' => 'sky',
                'published_at' => now(),
            ],
            [
                'title' => 'Conception de Logiciels',
                'slug' => 'conception-logiciels',
                'description' => 'Développement de solutions logicielles sur mesure, performantes et évolutives pour votre entreprise.',
                'content' => "Transformez vos processus métiers avec des logiciels sur mesure parfaitement adaptés à vos besoins. Nous concevons des applications qui optimisent votre productivité et accélèrent votre croissance.\n\nNotre expertise couvre le développement de logiciels desktop, web et mobile avec les technologies les plus modernes : .NET, Java, Python, Laravel, React, Vue.js et bien d'autres.\n\nNous adoptons une méthodologie agile qui garantit flexibilité et transparence tout au long du projet. Vous êtes impliqué à chaque sprint avec des démonstrations régulières et des ajustements continus.\n\nQue vous ayez besoin d'un ERP, CRM, logiciel de gestion, application métier ou solution SaaS, nous développons des outils qui s'intègrent parfaitement à votre écosystème existant.\n\nLa qualité est au cœur de notre processus : architecture scalable, code propre, tests automatisés, sécurité renforcée et documentation complète sont systématiquement intégrés.\n\nNous ne nous contentons pas de développer : nous vous accompagnons dans la définition fonctionnelle, la formation des utilisateurs et la maintenance évolutive de votre solution.",
                'features' => [
                    'Applications web sur mesure',
                    'Logiciels desktop multiplateforme',
                    'Solutions SaaS et cloud',
                    'ERP, CRM et outils de gestion',
                    'Applications métier spécifiques',
                    'APIs et microservices',
                    'Intégrations systèmes existants',
                    'Maintenance et support technique'
                ],
                'icon' => '<svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>',
                'color' => 'indigo',
                'published_at' => now(),
            ],
            [
                'title' => 'Intégration de Progiciels',
                'slug' => 'integration-progiciels',
                'description' => 'Déploiement et intégration de progiciels métiers pour optimiser vos processus d\'entreprise.',
                'content' => "Optimisez vos processus d'entreprise avec des progiciels professionnels parfaitement intégrés à votre environnement. Nous vous accompagnons dans le choix, le déploiement et la personnalisation de solutions logicielles éprouvées.\n\nNotre expertise couvre l'intégration de progiciels de gestion (ERP), CRM, solutions RH, comptabilité, e-commerce et bien d'autres domaines métiers.\n\nNous travaillons avec les leaders du marché : SAP, Microsoft Dynamics, Odoo, Salesforce, et proposons également des solutions open-source performantes et économiques.\n\nNotre méthodologie garantit une adoption réussie : analyse de vos besoins, paramétrage du progiciel, développements spécifiques si nécessaires, migration des données, formation des utilisateurs et support post-déploiement.\n\nNous ne nous contentons pas d'installer : nous adaptons chaque progiciel à vos processus spécifiques et assurons une intégration fluide avec vos systèmes existants (ERP, outils métier, bases de données).\n\nNotre objectif est de vous permettre de tirer le maximum de valeur de votre investissement logiciel avec une solution qui évolue avec votre entreprise.",
                'features' => [
                    'Audit et choix de progiciels',
                    'Déploiement et paramétrage',
                    'Personnalisation et développements',
                    'Migration de données sécurisée',
                    'Intégration avec SI existant',
                    'Formation des utilisateurs',
                    'Support et maintenance',
                    'Accompagnement au changement'
                ],
                'icon' => '<svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/></svg>',
                'color' => 'purple',
                'published_at' => now(),
            ],
        ];

        foreach ($services as $serviceData) {
            Service::create($serviceData);
        }
    }
}

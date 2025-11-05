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
                'order' => 1,
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
                    'Post-production et étalonnage professionnel',
                ],
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />',
                'color' => 'rose',
                'published_at' => now(),
            ],
            [
                'order' => 2,
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
                    'Déclinaisons et adaptations multi-supports',
                ],
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42" />',
                'color' => 'amber',
                'published_at' => now(),
            ],
            [
                'order' => 3,
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
                    'Séances en studio ou sur site',
                ],
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />',
                'color' => 'emerald',
                'published_at' => now(),
            ],
            [
                'order' => 4,
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
                    'Architecture éco-responsable',
                ],
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />',
                'color' => 'sky',
                'published_at' => now(),
            ],
            [
                'order' => 5,
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
                    'Maintenance et support technique',
                ],
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />',
                'color' => 'indigo',
                'published_at' => now(),
            ],
            [
                'order' => 6,
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
                    'Accompagnement au changement',
                ],
                'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008z" />',
                'color' => 'purple',
                'published_at' => now(),
            ],
        ];

        foreach ($services as $serviceData) {
            Service::create($serviceData);
        }
    }
}

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
                'title' => 'Développement Web',
                'slug' => 'developpement-web',
                'description' => 'Créez des applications web modernes, performantes et évolutives avec les dernières technologies.',
                'content' => "Nous concevons et développons des applications web sur mesure qui répondent parfaitement à vos besoins business. Notre expertise couvre l'ensemble du cycle de développement, de la conception à la mise en production.\n\nNos solutions web sont construites avec les frameworks et technologies les plus modernes du marché : Laravel pour le backend, React et Vue.js pour le frontend, et des architectures scalables qui évoluent avec votre croissance.\n\nQue vous ayez besoin d'un site vitrine, d'une plateforme e-commerce, d'un SaaS ou d'une application métier complexe, notre équipe transforme votre vision en réalité digitale.\n\nNous adoptons une approche agile qui garantit transparence et flexibilité tout au long du projet. Vous êtes impliqué à chaque étape, avec des livraisons régulières et des retours d'expérience continus.\n\nLa qualité est au cœur de notre processus : tests automatisés, revues de code, optimisation des performances et sécurité renforcée sont systématiquement intégrés.",
                'features' => [
                    'Sites web responsive et mobile-first',
                    'Applications web progressives (PWA)',
                    'Plateformes e-commerce Shopify/WooCommerce',
                    'Applications SaaS multi-tenant',
                    'CMS personnalisés',
                    'API REST et GraphQL',
                    'Intégrations tierces',
                    'SEO et performance optimisés'
                ],
                'icon' => '<svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>',
                'color' => 'sky',
                'published_at' => now(),
            ],
            [
                'title' => 'Applications Mobile',
                'slug' => 'applications-mobile',
                'description' => 'Développement d\'applications iOS et Android natives ou cross-platform pour atteindre votre audience partout.',
                'content' => "Touchéz vos utilisateurs où qu'ils soient avec des applications mobiles natives et cross-platform performantes. Notre expertise en développement mobile couvre iOS, Android et les solutions hybrides.\n\nNous utilisons React Native et Flutter pour créer des applications cross-platform qui offrent une expérience native sur iOS et Android tout en optimisant vos coûts et délais de développement.\n\nPour les projets nécessitant des performances maximales ou l'accès à des fonctionnalités spécifiques, nous développons également des applications natives en Swift/SwiftUI pour iOS et Kotlin pour Android.\n\nNos applications mobiles sont conçues avec une attention particulière portée à l'UX, la performance, la sécurité et l'intégration avec vos systèmes existants.\n\nDe la conception à la publication sur les stores, en passant par les tests et la maintenance, nous vous accompagnons à chaque étape de votre projet mobile.",
                'features' => [
                    'Applications iOS natives (Swift/SwiftUI)',
                    'Applications Android natives (Kotlin)',
                    'Apps cross-platform (React Native, Flutter)',
                    'Design UI/UX mobile-first',
                    'Intégration API et services backend',
                    'Notifications push',
                    'Paiement in-app',
                    'Publication sur App Store et Play Store'
                ],
                'icon' => '<svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>',
                'color' => 'cyan',
                'published_at' => now(),
            ],
            [
                'title' => 'Solutions Cloud',
                'slug' => 'solutions-cloud',
                'description' => 'Infrastructure cloud, hébergement, migration et optimisation pour une scalabilité et sécurité maximales.',
                'content' => "Modernisez votre infrastructure IT avec des solutions cloud scalables, sécurisées et optimisées. Nous vous accompagnons dans votre transformation cloud de A à Z.\n\nNotre expertise couvre les principaux fournisseurs cloud (AWS, Google Cloud, Azure) et nous vous aidons à choisir la solution la plus adaptée à vos besoins techniques et budgétaires.\n\nQue vous souhaitiez migrer vers le cloud, optimiser vos coûts existants ou mettre en place une architecture cloud-native, notre équipe d'experts vous guide.\n\nNous concevons des architectures résilientes, hautement disponibles et auto-scalables qui s'adaptent automatiquement à votre charge de travail.\n\nLa sécurité est notre priorité : chiffrement des données, gestion des identités, sauvegardes automatiques et conformité réglementaire sont intégrés dès la conception.\n\nNous mettons en place des pipelines CI/CD pour automatiser vos déploiements et garantir une livraison continue de qualité.",
                'features' => [
                    'Migration cloud (AWS, Azure, GCP)',
                    'Architecture cloud-native',
                    'Infrastructure as Code (Terraform)',
                    'Kubernetes et orchestration',
                    'CI/CD et DevOps',
                    'Monitoring et observabilité',
                    'Optimisation des coûts cloud',
                    'Sécurité et conformité'
                ],
                'icon' => '<svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/></svg>',
                'color' => 'indigo',
                'published_at' => now(),
            ],
            [
                'title' => 'Consulting IT',
                'slug' => 'consulting-it',
                'description' => 'Audit, conseil stratégique et accompagnement pour optimiser votre transformation digitale.',
                'content' => "Bénéficiez de l'expertise de nos consultants pour définir et mettre en œuvre votre stratégie digitale. Nous vous accompagnons dans vos décisions technologiques et organisationnelles.\n\nNotre approche consulting combine vision stratégique et expertise technique pour vous aider à prendre les meilleures décisions pour votre business.\n\nNous réalisons des audits complets de votre infrastructure, de vos applications et de vos processus pour identifier les opportunités d'amélioration et les risques potentiels.\n\nNos consultants vous aident à définir votre roadmap technologique, à choisir les bons outils et à mettre en place les bonnes pratiques de développement et d'organisation.\n\nNous accompagnons également vos équipes dans la montée en compétences sur les nouvelles technologies et méthodologies.\n\nDe l'audit initial à l'implémentation des recommandations, nous restons à vos côtés pour garantir le succès de votre transformation digitale.",
                'features' => [
                    'Audit technique et organisationnel',
                    'Définition de roadmap technologique',
                    'Choix d\'architecture et de stack',
                    'Revue de code et best practices',
                    'Optimisation de performance',
                    'Sécurité et conformité RGPD',
                    'Formation des équipes',
                    'Accompagnement agile et DevOps'
                ],
                'icon' => '<svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>',
                'color' => 'purple',
                'published_at' => now(),
            ],
        ];

        foreach ($services as $serviceData) {
            Service::create($serviceData);
        }
    }
}

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
            [
                'title' => 'ShopHub',
                'slug' => 'shophub',
                'category' => 'e-commerce',
                'description' => 'Plateforme e-commerce complète avec gestion de stock avancée, paiements sécurisés multi-devises et tableau de bord analytique en temps réel.',
                'long_description' => "ShopHub est une solution e-commerce complète et moderne conçue pour les entreprises qui souhaitent développer leur présence en ligne. Cette plateforme offre une expérience utilisateur fluide et intuitive, permettant aux clients de naviguer facilement à travers les produits, de gérer leur panier et de finaliser leurs achats en toute sécurité.\n\nLa plateforme intègre un système de gestion de stock sophistiqué qui permet aux administrateurs de suivre en temps réel les niveaux d'inventaire, de recevoir des alertes automatiques pour les réapprovisionnements et de gérer efficacement les variations de produits. Le tableau de bord analytique fournit des insights précieux sur les performances des ventes, le comportement des clients et les tendances du marché.\n\nAvec la prise en charge de plusieurs devises et méthodes de paiement sécurisées via Stripe, ShopHub permet aux entreprises de vendre à l'international tout en garantissant la sécurité des transactions. L'interface d'administration intuitive facilite la gestion quotidienne des commandes, des clients et du catalogue produits.",
                'client' => 'RetailCorp International',
                'duration' => '6 mois',
                'year' => '2024',
                'technologies' => ['Laravel', 'Vue.js', 'Stripe', 'PostgreSQL', 'Redis'],
                'results' => [
                    'Augmentation de 150% des ventes en ligne',
                    'Réduction de 40% du temps de traitement des commandes',
                    'Taux de conversion de 3.2% (moyenne secteur: 2.1%)',
                    'Note client moyenne: 4.8/5',
                ],
                'image_url' => null,
                'status' => 'published',
                'featured' => true,
                'color' => 'sky',
            ],
            [
                'title' => 'FitTracker',
                'slug' => 'fittracker',
                'category' => 'mobile',
                'description' => 'Application mobile de suivi fitness avec intégration IA pour recommandations personnalisées et coaching adaptatif.',
                'long_description' => "FitTracker révolutionne le suivi de la forme physique en combinant une interface mobile intuitive avec des algorithmes d'intelligence artificielle avancés. Cette application accompagne les utilisateurs dans leur parcours de remise en forme en proposant des programmes d'entraînement personnalisés basés sur leurs objectifs, leur niveau et leur progression.\n\nL'IA intégrée analyse en continu les performances de l'utilisateur, ajuste automatiquement les recommandations d'exercices et fournit des conseils personnalisés pour optimiser les résultats. Le système de coaching adaptatif apprend des habitudes et préférences de chaque utilisateur pour créer une expérience véritablement sur mesure.\n\nAvec des fonctionnalités de suivi détaillé (calories, distance, fréquence cardiaque), des graphiques de progression visuels et une communauté sociale intégrée, FitTracker motive les utilisateurs à rester actifs et à atteindre leurs objectifs de santé. La synchronisation cloud permet aux utilisateurs d'accéder à leurs données sur tous leurs appareils.",
                'client' => 'FitLife Solutions',
                'duration' => '8 mois',
                'year' => '2024',
                'technologies' => ['React Native', 'Node.js', 'TensorFlow', 'MongoDB', 'AWS'],
                'results' => [
                    '500K+ téléchargements en 3 mois',
                    'Taux de rétention de 68% (moyenne secteur: 42%)',
                    'Note App Store: 4.7/5',
                    'Engagement quotidien moyen: 25 minutes',
                ],
                'image_url' => null,
                'status' => 'published',
                'featured' => true,
                'color' => 'cyan',
            ],
            [
                'title' => 'CloudSync Pro',
                'slug' => 'cloudsync-pro',
                'category' => 'cloud',
                'description' => 'Solution de synchronisation cloud sécurisée pour entreprises avec chiffrement de bout en bout et haute disponibilité.',
                'long_description' => "CloudSync Pro est une solution de synchronisation cloud enterprise-grade conçue pour les organisations qui exigent le plus haut niveau de sécurité et de fiabilité pour leurs données critiques. La plateforme offre un chiffrement de bout en bout garantissant que seuls les utilisateurs autorisés peuvent accéder aux fichiers, même en cas de violation de serveur.\n\nAvec une architecture distribuée basée sur AWS, CloudSync Pro garantit une disponibilité de 99.99% et permet une synchronisation ultra-rapide des fichiers quelle que soit leur taille. Le système de versioning automatique conserve l'historique complet des modifications, permettant aux équipes de revenir à n'importe quelle version antérieure en un clic.\n\nLa plateforme s'intègre parfaitement aux workflows existants grâce à des APIs robustes et des connecteurs pour les principales applications professionnelles. Les administrateurs disposent d'un contrôle granulaire sur les permissions, peuvent auditer toutes les activités et gérer efficacement l'allocation de stockage entre les équipes. Des fonctionnalités avancées de collaboration permettent aux équipes de travailler simultanément sur les mêmes documents en temps réel.",
                'client' => 'TechCorp Enterprise',
                'duration' => '10 mois',
                'year' => '2023',
                'technologies' => ['AWS', 'Python', 'Docker', 'Kubernetes', 'PostgreSQL'],
                'results' => [
                    '99.99% de disponibilité sur 12 mois',
                    'Zéro faille de sécurité détectée',
                    '10 To+ de données synchronisées quotidiennement',
                    'Économie de 35% sur les coûts cloud vs concurrent',
                ],
                'image_url' => null,
                'status' => 'published',
                'featured' => true,
                'color' => 'emerald',
            ],
            [
                'title' => 'EduLearn',
                'slug' => 'edulearn',
                'category' => 'education',
                'description' => 'Plateforme d\'apprentissage en ligne avec cours interactifs, quiz gamifiés et suivi de progression détaillé.',
                'long_description' => "EduLearn transforme l'éducation en ligne en proposant une plateforme d'apprentissage moderne, interactive et engageante. Conçue pour les écoles, universités et organismes de formation, la plateforme permet aux instructeurs de créer facilement des cours multimédia riches incluant vidéos, documents, exercices interactifs et évaluations.\n\nLe système de gamification intégré motive les apprenants grâce à des points, badges et classements tout en rendant l'apprentissage plus ludique et stimulant. Les quiz interactifs avec feedback instantané aident les étudiants à identifier leurs points forts et axes d'amélioration.\n\nLes instructeurs bénéficient d'outils analytiques puissants pour suivre la progression individuelle et collective, identifier les étudiants en difficulté et adapter leur enseignement en conséquence. La plateforme supporte les classes virtuelles en direct, les forums de discussion et les espaces de collaboration, créant une véritable communauté d'apprentissage. L'interface responsive permet aux étudiants d'apprendre à leur rythme, sur n'importe quel appareil.",
                'client' => 'AcademyNext',
                'duration' => '7 mois',
                'year' => '2023',
                'technologies' => ['Next.js', 'PostgreSQL', 'Tailwind', 'WebRTC', 'Redis'],
                'results' => [
                    '15K+ étudiants actifs',
                    'Taux de complétion des cours: 78%',
                    'Satisfaction instructeurs: 92%',
                    'Réduction de 50% du temps administratif',
                ],
                'image_url' => null,
                'status' => 'published',
                'featured' => false,
                'color' => 'amber',
            ],
            [
                'title' => 'TaskMaster',
                'slug' => 'taskmaster',
                'category' => 'saas',
                'description' => 'Outil de gestion de projets avec collaboration en temps réel, intégrations multiples et automatisations avancées.',
                'long_description' => "TaskMaster est un outil de gestion de projets nouvelle génération qui combine puissance et simplicité pour aider les équipes à rester organisées et productives. La plateforme offre une vue complète de tous les projets avec des tableaux Kanban personnalisables, des diagrammes de Gantt et des listes de tâches intelligentes.\n\nLa collaboration en temps réel est au cœur de TaskMaster : les membres de l'équipe peuvent commenter, mentionner des collègues, partager des fichiers et voir instantanément les mises à jour effectuées par d'autres. Le système de notifications intelligent garde tout le monde informé sans être intrusif.\n\nLes automatisations avancées permettent de créer des workflows personnalisés qui exécutent automatiquement des actions basées sur des déclencheurs spécifiques, économisant ainsi un temps précieux sur les tâches répétitives. TaskMaster s'intègre avec plus de 50 applications tierces populaires (Slack, GitHub, Google Drive, etc.), créant un hub central pour toute la gestion de projet.\n\nLes rapports et tableaux de bord en temps réel fournissent une visibilité complète sur l'avancement des projets, la charge de travail des équipes et les goulots d'étranglement potentiels. Les templates de projet réutilisables accélèrent le démarrage de nouveaux projets.",
                'client' => 'ProductiveLabs',
                'duration' => '9 mois',
                'year' => '2023',
                'technologies' => ['Laravel', 'Livewire', 'Redis', 'MySQL', 'Pusher'],
                'results' => [
                    'Augmentation de 45% de la productivité des équipes',
                    '2K+ entreprises clientes',
                    'Réduction de 60% des réunions projet',
                    'ROI moyen client: 320% sur 12 mois',
                ],
                'image_url' => null,
                'status' => 'published',
                'featured' => false,
                'color' => 'pink',
            ],
            [
                'title' => 'DataViz Pro',
                'slug' => 'dataviz-pro',
                'category' => 'analytics',
                'description' => 'Dashboard analytique avancé avec visualisations interactives, rapports personnalisables et prédictions intelligentes.',
                'long_description' => "DataViz Pro transforme les données complexes en insights visuels compréhensibles et actionnables. Cette plateforme d'analyse avancée permet aux entreprises de créer des tableaux de bord personnalisés combinant des dizaines de sources de données différentes en une vue unifiée.\n\nLes visualisations interactives incluent des graphiques dynamiques, des cartes thermiques, des diagrammes de flux et bien plus, permettant aux utilisateurs d'explorer leurs données sous tous les angles. Le système de drill-down intelligent permet de passer des vues d'ensemble aux détails les plus fins en quelques clics.\n\nLes algorithmes de machine learning intégrés analysent automatiquement les tendances historiques et génèrent des prédictions précises pour aider à la planification stratégique. Les alertes intelligentes notifient les utilisateurs lorsque des anomalies sont détectées ou que des seuils critiques sont atteints.\n\nDataViz Pro offre des capacités de reporting avancées avec génération automatique de rapports programmés, export dans multiples formats et partage sécurisé avec les parties prenantes. L'interface drag-and-drop intuitive permet aux utilisateurs non techniques de créer des visualisations sophistiquées sans écrire une ligne de code. La plateforme supporte le traitement de millions de points de données en temps réel avec des performances optimales.",
                'client' => 'DataInsights Corp',
                'duration' => '5 mois',
                'year' => '2024',
                'technologies' => ['React', 'D3.js', 'MongoDB', 'Python', 'Apache Spark'],
                'results' => [
                    'Temps d\'analyse réduit de 70%',
                    'Traitement de 5M+ points de données/seconde',
                    'Précision prédictive: 91%',
                    'Adoption par 85% des départements clients',
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

<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get or create a user for the articles
        $author = User::first();

        if (!$author) {
            $author = User::create([
                'name' => 'Genesis Team',
                'email' => 'team@genesis.com',
                'password' => bcrypt('password'),
            ]);
        }

        $articles = [
            [
                'title' => 'Les tendances du développement web en 2025',
                'slug' => 'tendances-developpement-web-2025',
                'excerpt' => 'Découvrez les technologies et pratiques qui transforment le développement web cette année.',
                'content' => "Le développement web évolue constamment, et 2025 n'échappe pas à la règle. Voici les principales tendances qui façonnent notre industrie :\n\nL'Intelligence Artificielle s'intègre désormais dans tous les aspects du développement. Les outils d'IA comme GitHub Copilot révolutionnent la façon dont nous codons, en suggérant du code intelligent et en automatisant les tâches répétitives.\n\nLes frameworks JavaScript continuent d'évoluer. Next.js 15 et React 19 apportent des améliorations significatives en termes de performance et d'expérience développeur. Les Server Components deviennent la norme pour les applications modernes.\n\nLe Web Assembly gagne en popularité, permettant d'exécuter du code haute performance directement dans le navigateur. Cette technologie ouvre de nouvelles possibilités pour les applications web complexes.\n\nLa sécurité reste une priorité absolue. Les développeurs adoptent des pratiques de sécurité dès la conception (Security by Design) et utilisent des outils automatisés pour détecter les vulnérabilités.\n\nEnfin, l'accessibilité n'est plus une option mais une nécessité. Les frameworks modernes intègrent des fonctionnalités d'accessibilité par défaut, facilitant la création d'applications inclusives.",
                'category' => 'développement',
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => 'React vs Vue.js : Quel framework choisir en 2025 ?',
                'slug' => 'react-vs-vuejs-2025',
                'excerpt' => 'Une comparaison approfondie des deux frameworks JavaScript les plus populaires.',
                'content' => "Le choix entre React et Vue.js reste l'une des questions les plus fréquentes dans la communauté du développement web. Voici notre analyse comparative :\n\nReact, développé par Meta, domine le marché avec une communauté massive et un écosystème riche. Sa flexibilité permet de construire des applications de toutes tailles. Avec React 19, les Server Components et les améliorations de performance rendent le framework encore plus puissant.\n\nVue.js se distingue par sa courbe d'apprentissage douce et sa documentation exceptionnelle. Vue 3 avec Composition API offre une expérience développeur remarquable. Le framework est particulièrement apprécié pour les projets de taille moyenne.\n\nEn termes de performance, les deux frameworks sont excellents. React excelle dans les applications complexes avec beaucoup d'interactions, tandis que Vue brille dans les projets nécessitant une mise en route rapide.\n\nPour l'écosystème, React bénéficie de Next.js pour le SSR, tandis que Vue a Nuxt.js. Les deux solutions sont matures et production-ready.\n\nLe choix dépend finalement de vos besoins : React pour les grandes applications d'entreprise, Vue pour une productivité rapide et un code élégant.",
                'category' => 'développement',
                'published_at' => now()->subDays(12),
            ],
            [
                'title' => 'Optimiser les performances de votre application Laravel',
                'slug' => 'optimiser-performances-laravel',
                'excerpt' => 'Techniques et bonnes pratiques pour accélérer vos applications Laravel.',
                'content' => "Laravel est un framework puissant, mais une mauvaise configuration peut impacter les performances. Voici nos conseils d'optimisation :\n\nLe caching est votre meilleur ami. Utilisez Redis pour le cache d'application, les sessions et les queues. Laravel offre une API de cache élégante qui facilite l'implémentation.\n\nOptimisez vos requêtes Eloquent. Utilisez eager loading pour éviter le problème N+1, et envisagez les query scopes pour la réutilisabilité. Les index de base de données sont cruciaux pour les performances.\n\nLe compilation des assets avec Vite est significativement plus rapide que Webpack. Laravel 11 utilise Vite par défaut, profitez-en pour optimiser vos assets.\n\nLes queues permettent de déporter les tâches lourdes. Envoi d'emails, traitement d'images, génération de rapports : déléguez ces tâches à des workers en arrière-plan.\n\nUtilisez Octane pour des performances extrêmes. En gardant l'application en mémoire entre les requêtes, Octane peut multiplier les performances par 4 ou plus.\n\nEnfin, pensez au CDN pour les assets statiques et à l'optimisation des images avec des formats modernes comme WebP.",
                'category' => 'performance',
                'published_at' => now()->subDays(18),
            ],
            [
                'title' => 'Architecture Microservices : Guide complet',
                'slug' => 'architecture-microservices-guide',
                'excerpt' => 'Tout ce que vous devez savoir sur l\'architecture microservices moderne.',
                'content' => "Les microservices ont révolutionné le développement d'applications d'entreprise. Découvrez comment les implémenter efficacement :\n\nL'architecture microservices divise une application en services indépendants, chacun responsable d'une fonctionnalité spécifique. Cette approche offre une scalabilité horizontale et une maintenance facilitée.\n\nLes avantages sont nombreux : déploiement indépendant, choix technologique flexible par service, isolation des pannes, et facilité de mise à l'échelle. Chaque équipe peut travailler sur son service sans impacter les autres.\n\nMais attention aux défis : la complexité réseau augmente, la gestion des transactions distribuées est délicate, et le monitoring devient crucial. Utilisez des outils comme Kubernetes pour l'orchestration.\n\nLa communication entre services peut se faire via REST, gRPC, ou des message brokers comme RabbitMQ. Choisissez selon vos besoins de latence et de fiabilité.\n\nL'API Gateway est essentiel pour gérer les requêtes externes. Elle route les appels, gère l'authentification, et peut implémenter du rate limiting.\n\nCommencez petit : ne migrez pas tout d'un coup. Identifiez les services critiques et commencez par les découpler progressivement.",
                'category' => 'architecture',
                'published_at' => now()->subDays(25),
            ],
            [
                'title' => 'Sécuriser vos API REST : Best Practices 2025',
                'slug' => 'securiser-api-rest-2025',
                'excerpt' => 'Les meilleures pratiques pour protéger vos API contre les menaces modernes.',
                'content' => "La sécurité des API est plus cruciale que jamais. Voici les pratiques essentielles à implémenter :\n\nL'authentification JWT reste la norme, mais attention à la gestion des tokens. Utilisez des refresh tokens, implémentez la rotation des tokens, et stockez-les de manière sécurisée côté client.\n\nLe rate limiting protège contre les abus et les attaques DDoS. Implémentez des limites par IP et par utilisateur. Redis est parfait pour gérer ces compteurs de manière performante.\n\nLa validation des données est primordiale. Ne faites jamais confiance aux données entrantes. Utilisez des bibliothèques de validation robustes et validez à chaque niveau.\n\nHTTPS est obligatoire, mais ce n'est que le début. Implémentez CORS correctement, utilisez des headers de sécurité (CSP, X-Frame-Options), et configurez HSTS.\n\nLe logging et monitoring permettent de détecter les comportements suspects. Loggez les tentatives d'accès, les erreurs d'authentification, et mettez en place des alertes.\n\nEnfin, gardez vos dépendances à jour. Les vulnérabilités sont souvent découvertes dans les bibliothèques tierces. Automatisez les mises à jour de sécurité.",
                'category' => 'sécurité',
                'published_at' => now()->subDays(30),
            ],
            [
                'title' => 'DevOps et CI/CD : Automatiser vos déploiements',
                'slug' => 'devops-cicd-automatisation',
                'excerpt' => 'Comment mettre en place un pipeline CI/CD efficace pour vos projets.',
                'content' => "L'automatisation des déploiements est devenue indispensable. Voici comment construire un pipeline CI/CD moderne :\n\nGitHub Actions ou GitLab CI sont d'excellents choix pour débuter. Ils s'intègrent naturellement avec votre code et offrent une configuration simple en YAML.\n\nLe pipeline typique comprend plusieurs étapes : build, tests unitaires, tests d'intégration, analyse de code, et déploiement. Chaque étape doit pouvoir échouer indépendamment.\n\nLes tests automatisés sont la fondation du CI/CD. Visez au moins 80% de couverture de code. Les tests doivent être rapides : optimisez-les pour ne pas ralentir le pipeline.\n\nLe déploiement progressif (rolling deployment) minimise les risques. Déployez d'abord sur un petit pourcentage de serveurs, vérifiez les métriques, puis continuez.\n\nLes environnements de staging identiques à la production sont essentiels. Utilisez Docker pour garantir la cohérence entre tous les environnements.\n\nLe rollback automatique en cas d'erreur est crucial. Configurez des health checks qui déclenchent un retour à la version précédente si nécessaire.\n\nEnfin, documentez votre pipeline. L'équipe doit comprendre chaque étape et savoir comment intervenir en cas de problème.",
                'category' => 'devops',
                'published_at' => now()->subDays(40),
            ],
        ];

        foreach ($articles as $articleData) {
            Article::create([
                ...$articleData,
                'author_id' => $author->id,
            ]);
        }
    }
}

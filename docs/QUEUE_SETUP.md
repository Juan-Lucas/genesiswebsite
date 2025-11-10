# Configuration des Queues Laravel

Ce guide explique comment configurer et utiliser le système de queues dans le projet GENESIS.

---

## 📋 Configuration Actuelle

### Driver Actuel : **Database**

Le projet utilise actuellement la **base de données SQLite** comme driver de queue. C'est parfait pour le développement et les sites à trafic modéré.

**Configuration dans `.env` :**
```env
QUEUE_CONNECTION=database
CACHE_STORE=database
```

**Avantages :**
- ✅ Aucun service externe requis
- ✅ Fonctionne immédiatement sur tous les environnements
- ✅ Parfait pour le développement et les petits projets
- ✅ Pas de configuration complexe

**Limitations :**
- ⚠️ Moins performant que Redis pour un trafic élevé (>1000 jobs/min)
- ⚠️ Pas de dashboard de monitoring intégré

---

## 🚀 Utilisation des Queues

### 1. Lancer le Worker

**Pour le développement (s'arrête quand la queue est vide) :**
```bash
php artisan queue:work --stop-when-empty
```

**Pour la production (tourne en continu) :**
```bash
php artisan queue:work --tries=3 --backoff=60
```

**Options importantes :**
- `--tries=3` : 3 tentatives en cas d'échec
- `--backoff=60` : Attendre 60 secondes entre chaque tentative
- `--stop-when-empty` : S'arrêter quand la queue est vide (dev uniquement)
- `--timeout=60` : Temps maximum pour exécuter un job (en secondes)

### 2. Tester l'Envoi d'Email

```bash
php artisan tinker
```

Puis dans Tinker :
```php
App\Jobs\SendContactEmail::dispatch([
    'name' => 'Test User',
    'email' => 'test@example.com',
    'subject' => 'Test Queue',
    'message' => 'Testing queue system',
    'phone' => ''
]);
```

### 3. Surveiller la Queue

**Voir les jobs en attente :**
```bash
php artisan queue:monitor database
```

**Voir les jobs échoués :**
```bash
php artisan queue:failed
```

**Réessayer un job échoué :**
```bash
php artisan queue:retry {id}
```

**Réessayer tous les jobs échoués :**
```bash
php artisan queue:retry all
```

**Supprimer les jobs échoués :**
```bash
php artisan queue:flush
```

---

## ⚡ Migration vers Redis (Production Recommandée)

Pour des performances optimales en production avec un trafic élevé, migrez vers Redis.

### Étape 1 : Installer Redis

**Windows (avec Chocolatey) :**
```powershell
choco install redis-64
```

**Windows (avec WSL) :**
```bash
sudo apt update
sudo apt install redis-server
sudo service redis-server start
```

**Linux :**
```bash
sudo apt update
sudo apt install redis-server
sudo systemctl start redis
```

**macOS :**
```bash
brew install redis
brew services start redis
```

**Docker :**
```bash
docker run -d -p 6379:6379 redis:alpine
```

### Étape 2 : Installer l'Extension PHP Redis

**Windows (XAMPP/WAMP) :**
1. Télécharger `php_redis.dll` depuis [PECL](https://pecl.php.net/package/redis)
2. Copier dans `php/ext/`
3. Ajouter dans `php.ini` : `extension=redis`
4. Redémarrer Apache/Nginx

**Linux/macOS :**
```bash
sudo pecl install redis
echo "extension=redis.so" | sudo tee -a /etc/php/8.3/cli/php.ini
```

### Étape 3 : Configurer Laravel

**Modifier `.env` :**
```env
# Queue avec Redis
QUEUE_CONNECTION=redis

# Cache avec Redis
CACHE_STORE=redis
CACHE_PREFIX=genesis_cache

# Configuration Redis
REDIS_CLIENT=phpredis
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379
```

### Étape 4 : Tester Redis

```bash
# Vérifier si Redis fonctionne
php artisan tinker
```

Dans Tinker :
```php
Redis::connection()->ping(); // Doit retourner "+PONG"
```

### Étape 5 : Redémarrer le Worker

```bash
php artisan queue:restart
php artisan queue:work redis --tries=3 --backoff=60
```

---

## 🔧 Configuration Supervisor (Production Linux)

Pour que le worker tourne en permanence en production, utilisez **Supervisor**.

### Installation Supervisor

```bash
sudo apt update
sudo apt install supervisor
```

### Configuration

Créer `/etc/supervisor/conf.d/genesis-worker.conf` :

```ini
[program:genesis-worker]
process_name=%(program_name)s_%(process_num)02d
command=php /var/www/genesiswebsite/artisan queue:work database --tries=3 --backoff=60 --max-time=3600
autostart=true
autorestart=true
stopasgroup=true
killasgroup=true
user=www-data
numprocs=2
redirect_stderr=true
stdout_logfile=/var/www/genesiswebsite/storage/logs/worker.log
stopwaitsecs=3600
```

**Activer le worker :**
```bash
sudo supervisorctl reread
sudo supervisorctl update
sudo supervisorctl start genesis-worker:*
```

**Surveiller :**
```bash
sudo supervisorctl status genesis-worker:*
```

---

## 🔧 Configuration Windows Task Scheduler (Production Windows)

### Créer un Batch Script

Créer `start-queue-worker.bat` à la racine du projet :

```batch
@echo off
cd /d "C:\Users\DDOS\Herd\GENESIS\genesiswebsite"
php artisan queue:work database --tries=3 --backoff=60 --max-time=3600
```

### Créer une Tâche Planifiée

1. Ouvrir **Task Scheduler** (Planificateur de tâches)
2. Créer une tâche de base
3. **Nom** : Genesis Queue Worker
4. **Déclencheur** : Au démarrage de l'ordinateur
5. **Action** : Démarrer un programme
   - Programme : `C:\Users\DDOS\Herd\GENESIS\genesiswebsite\start-queue-worker.bat`
6. **Paramètres avancés** :
   - ✅ Exécuter même si l'utilisateur n'est pas connecté
   - ✅ Redémarrer en cas d'échec (tous les 1 minute, 3 tentatives)

---

## 📊 Laravel Horizon (Optionnel - Dashboard Redis)

Si vous utilisez Redis, installez **Laravel Horizon** pour un dashboard de monitoring.

### Installation

```bash
composer require laravel/horizon
php artisan horizon:install
```

### Configuration

**Publier la config :**
```bash
php artisan vendor:publish --tag=horizon-config
```

**Lancer Horizon :**
```bash
php artisan horizon
```

**Accéder au dashboard :**
```
http://genesiswebsite.test/horizon
```

**Protection en production (routes/web.php) :**
```php
Route::middleware('auth')->group(function () {
    Route::get('/horizon', function () {
        return redirect('/horizon/dashboard');
    });
});
```

---

## 📈 Monitoring et Performance

### Vérifier les Logs

**Logs Laravel :**
```bash
tail -f storage/logs/laravel.log
```

**Logs Worker (avec Supervisor) :**
```bash
tail -f storage/logs/worker.log
```

### Métriques Importantes

**Jobs traités :**
```bash
php artisan queue:monitor database
```

**Jobs échoués :**
```bash
php artisan queue:failed
```

**Temps d'exécution moyen :**
- Vérifier dans Laravel Horizon (si installé)
- Ou surveiller les logs avec `grep "DONE"`

---

## 🐛 Dépannage

### ❌ Erreur "No connection could be made" (Redis)

**Cause :** Redis n'est pas installé ou démarré.

**Solution :**
```bash
# Vérifier si Redis tourne
redis-cli ping  # Doit retourner "PONG"

# Démarrer Redis
# Linux
sudo systemctl start redis

# macOS
brew services start redis

# Windows (WSL)
sudo service redis-server start
```

### ❌ Jobs ne se traitent pas

**Vérifier que le worker tourne :**
```bash
ps aux | grep "queue:work"
```

**Redémarrer le worker :**
```bash
php artisan queue:restart
php artisan queue:work
```

### ❌ Jobs échouent systématiquement

**Voir les détails de l'erreur :**
```bash
php artisan queue:failed
```

**Logs Laravel :**
```bash
tail -f storage/logs/laravel.log
```

**Réessayer manuellement :**
```bash
php artisan queue:retry {id}
```

---

## ✅ Checklist Production

Avant de déployer en production :

- [ ] **Driver de queue configuré** (database ou redis)
- [ ] **Worker tourne en continu** (Supervisor/Task Scheduler)
- [ ] **Logs configurés** (`storage/logs/worker.log`)
- [ ] **Monitoring actif** (Horizon ou logs manuels)
- [ ] **Sauvegardes automatiques** de la table `jobs` (si database driver)
- [ ] **Rate limiting actif** sur les routes critiques
- [ ] **Failed jobs surveillés** quotidiennement
- [ ] **Alertes configurées** en cas d'échec répété

---

## 📚 Ressources

- [Laravel Queue Documentation](https://laravel.com/docs/11.x/queues)
- [Laravel Horizon Documentation](https://laravel.com/docs/11.x/horizon)
- [Redis Documentation](https://redis.io/documentation)
- [Supervisor Documentation](http://supervisord.org/)

---

**Version :** 1.0  
**Date :** 10 Novembre 2025  
**Projet :** GENESIS Website

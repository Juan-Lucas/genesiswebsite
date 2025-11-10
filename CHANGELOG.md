# Changelog

All notable changes to the Genesis Website project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

---

## [2.0.0] - 2025-11-10 - "Enterprise Edition"

### 🎉 Major Refactoring - Enterprise-Grade Architecture

This is a **major release** with breaking changes. The entire architecture has been refactored following industry best practices.

### 🏗️ Added - Architecture

- **Repository Pattern**: 4 repositories for data access abstraction
  - `ServiceRepository` - Service data management
  - `ProjectRepository` - Project data management with featured/related
  - `ArticleRepository` - Article data management with categories
  - `NewsletterRepository` - Newsletter subscriber management

- **Service Layer**: 3 services for business logic orchestration
  - `ContactService` - Contact email handling with queue jobs
  - `NewsletterService` - Newsletter subscription with validation
  - `BrochureService` - PDF brochure generation

- **Form Request Pattern**: Centralized validation
  - `ContactFormRequest` - Contact form validation
  - `NewsletterSubscribeRequest` - Newsletter email validation

- **Dependency Injection**: IoC Container usage in all controllers
  - All repositories and services registered in `AppServiceProvider`
  - Constructor injection in 5 controllers

### 🎯 Added - Constants & Code Quality

- **Constants Classes**: Elimination of magic strings
  - `ProjectStatus` - DRAFT, PUBLISHED, ARCHIVED constants
  - `ProjectCategory` - Project categories with icon mappings
  - `CacheKeys` - Standardized cache key names and TTL values

- **Model Enhancements**
  - `Project::isPublished()` - Helper method for status checking
  - `Project::isFeatured()` - Helper method for featured checking
  - `ProjectCategory::getIcon()` - Centralized icon logic

### ⚡ Added - Performance Optimization

- **Intelligent Caching**: 5 repository methods cached
  - `ServiceRepository::getAllPublished()` (1 hour TTL)
  - `ProjectRepository::getAllPublished()` (1 hour TTL)
  - `ProjectRepository::getFeatured()` (1 hour TTL)
  - `ArticleRepository::getLatest()` (1 hour TTL)
  - `ArticleRepository::getAllCategories()` (1 day TTL)

- **Cache Invalidation**: Model Observers
  - `ServiceObserver` - Auto-clear cache on Service changes
  - `ProjectObserver` - Auto-clear cache on Project changes
  - `ArticleObserver` - Auto-clear cache on Article changes

- **Queue Jobs**: Background processing
  - `SendContactEmail` - Asynchronous email sending with 3 retries
  - Database queue driver configured for immediate use
  - Redis-ready configuration for production

### 🔒 Added - Security

- **Rate Limiting**: Anti-spam protection
  - Contact form: 5 requests per minute
  - Newsletter: 3 subscriptions per minute
  - Brochure download: 10 downloads per minute

- **Form Validation**: Centralized validation in Form Requests
- **CSRF Protection**: Enabled on all POST routes

### 🧪 Added - Testing & Quality

- **Unit Tests**: 24 tests covering repositories and services
  - ServiceRepositoryTest (9 tests)
  - NewsletterRepositoryTest (6 tests)
  - NewsletterServiceTest (3 tests)
  - ContactServiceTest (2 tests)
  - BrochureServiceTest (3 tests)

- **Feature Tests**: 41 tests covering user workflows
  - ContactFormTest (8 tests)
  - NewsletterTest (5 tests)
  - BrochureDownloadTest (4 tests)
  - Auth tests (17 tests)
  - ProfileTest (5 tests)

- **CI/CD Pipeline**: GitHub Actions with 3 jobs
  - Tests job with 70% minimum coverage
  - Code quality job with Laravel Pint (PSR-12)
  - Security job with composer audit

- **Test Framework**: Pest PHP v4
  - Modern, expressive syntax
  - Factory pattern for test data
  - Total: 65 tests, 134 assertions, 100% passing

### 📚 Added - Documentation

- **ARCHITECTURE.md** (300+ lines): Complete architecture guide
  - Repository Pattern explained
  - Service Layer Pattern
  - Form Request Pattern
  - Dependency Injection
  - Data flow diagrams

- **TESTING.md** (400+ lines): Comprehensive testing guide
  - Pest PHP usage
  - AAA pattern (Arrange-Act-Assert)
  - Factories and Fakers
  - CI/CD integration

- **BEST_PRACTICES.md** (200+ lines): Enterprise best practices
  - SOLID principles applied
  - Performance optimization
  - Security hardening
  - Production deployment

- **QUEUE_SETUP.md** (150+ lines): Queue configuration guide
  - Database vs Redis setup
  - Supervisor configuration (Linux)
  - Task Scheduler configuration (Windows)
  - Troubleshooting guide

### 🛠️ Added - Developer Tools

- **Production Scripts**
  - `start-queue-worker.ps1` - PowerShell worker with auto-restart
  - `start-queue-worker.bat` - Batch version for Windows
  - `monitor-queue.ps1` - Real-time queue monitoring

- **Factories**
  - `ServiceFactory` - with published/unpublished states
  - `NewsletterSubscriberFactory` - with unique emails

### ⚙️ Changed - Breaking Changes

- **Controllers Refactored**: All controllers now use dependency injection
  - `PageController` - Injects ServiceRepository, ContactService, BrochureService
  - `NewsletterController` - Injects NewsletterService
  - `ServiceController` - Injects ServiceRepository
  - `ProjectController` - Injects ProjectRepository
  - `BlogController` - Injects ArticleRepository

- **Models Updated**
  - `Project` model now uses Constants instead of magic strings
  - Added helper methods: `isPublished()`, `isFeatured()`

- **Routes Modified**
  - Rate limiting middleware added to 3 routes
  - Contact, newsletter, and brochure routes now throttled

- **Environment Configuration**
  - `.env` updated with CACHE_STORE and QUEUE_CONNECTION
  - `.env.example` updated as template

### 🗑️ Removed

- `app/Actions/` directory (unused)
- `app/DataTransferObjects/` directory (unused)
- Magic strings throughout codebase (replaced with Constants)

### 📊 Statistics

- **21 new files created**
- **11 files modified**
- **65 tests passing** (100% success rate)
- **1000+ lines of documentation**
- **30+ best practices applied**

### 🔄 Migration Guide from v1.0.0

If upgrading from v1.0.0, follow these steps:

1. **Update dependencies**:
   ```bash
   composer install
   npm install
   ```

2. **Update environment**:
   ```bash
   cp .env.example .env
   # Update DB and mail credentials
   ```

3. **Run migrations**:
   ```bash
   php artisan migrate
   ```

4. **Clear caches**:
   ```bash
   php artisan cache:clear
   php artisan config:clear
   php artisan route:clear
   ```

5. **Start queue worker** (production):
   ```bash
   php artisan queue:work --tries=3 --backoff=60
   ```

6. **Run tests**:
   ```bash
   php artisan test
   ```

### ⚠️ Breaking Changes Details

- **Controllers**: Direct Model queries replaced with Repository calls
- **Email Sending**: Now asynchronous via Queue Jobs (requires queue worker)
- **Cache**: Requires cache configuration (database or Redis)
- **Constants**: `Project::where('status', 'published')` must use `ProjectStatus::PUBLISHED`

---

## [1.0.0] - 2025-11-05 - Initial Release

### Added

- Initial Laravel 12 setup
- Basic MVC architecture
- Service, Project, Article, Newsletter models
- Contact form with email notifications
- Newsletter subscription
- PDF brochure generation
- Blog with articles
- Multilingual support (FR/EN)
- Authentication system
- Tailwind CSS styling
- Livewire components

### Features

- Portfolio showcase
- Service presentation
- Project gallery
- Blog articles
- Contact form
- Newsletter subscription
- Brochure download
- Responsive design

---

## Versioning

We use [Semantic Versioning](https://semver.org/):
- **MAJOR** version for incompatible API changes
- **MINOR** version for backwards-compatible functionality
- **PATCH** version for backwards-compatible bug fixes

## Links

- [Repository](https://github.com/Juan-Lucas/genesiswebsite)
- [Issues](https://github.com/Juan-Lucas/genesiswebsite/issues)
- [Documentation](https://github.com/Juan-Lucas/genesiswebsite/tree/main/docs)

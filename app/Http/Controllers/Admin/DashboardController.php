<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\NewsletterSubscriber;
use App\Models\Project;
use App\Models\Service;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'projects' => Project::count(),
            'services' => Service::count(),
            'articles' => Article::count(),
            'subscribers' => NewsletterSubscriber::count(),
            'published_projects' => Project::whereNotNull('published_at')->count(),
            'published_services' => Service::whereNotNull('published_at')->count(),
            'published_articles' => Article::whereNotNull('published_at')->count(),
        ];

        $recent_projects = Project::latest()->take(5)->get();
        $recent_articles = Article::latest()->take(5)->get();
        $recent_subscribers = NewsletterSubscriber::latest()->take(10)->get();

        return view('admin.dashboard', compact('stats', 'recent_projects', 'recent_articles', 'recent_subscribers'));
    }
}

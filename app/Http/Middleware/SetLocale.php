<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if locale is in session
        if (Session::has('locale')) {
            $locale = Session::get('locale');
        }
        // Check if locale is in request
        elseif ($request->has('locale')) {
            $locale = $request->get('locale');
            Session::put('locale', $locale);
        }
        // Use browser language or default
        else {
            $locale = $request->getPreferredLanguage(array_keys(config('app.available_locales'))) ?? config('app.locale');
        }

        // Validate locale
        if (!array_key_exists($locale, config('app.available_locales'))) {
            $locale = config('app.locale');
        }

        App::setLocale($locale);

        return $next($request);
    }
}

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
        // 1. Si la session contient une locale, on l'utilise
        if (Session::has('locale')) {
            $locale = Session::get('locale');
        }
        // 2. Si la requête contient une locale, on la prend et on la met en session
        elseif ($request->has('locale')) {
            $locale = $request->get('locale');
            Session::put('locale', $locale);
        }
        // 3. Sinon, on force la locale par défaut de l'application (fr)
        else {
            $locale = config('app.locale');
        }

        // Validation de la locale
        if (! array_key_exists($locale, config('app.available_locales'))) {
            $locale = config('app.locale');
        }

        App::setLocale($locale);
        return $next($request);
    }
}

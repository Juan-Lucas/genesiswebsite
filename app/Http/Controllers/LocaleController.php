<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    /**
     * Switch the application locale.
     *
     * @param string $locale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function switch(string $locale)
    {
        // Validate the locale against available locales
        if (array_key_exists($locale, config('app.available_locales'))) {
            Session::put('locale', $locale);
        }

        return redirect()->back();
    }
}

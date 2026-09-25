<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $codespaceName = env('CODESPACE_NAME');
        $domain = env('GITHUB_CODESPACES_PORT_FORWARDING_DOMAIN');

        if ($codespaceName && $domain) {
            $url = "https://{$codespaceName}-8000.{$domain}";
            URL::forceRootUrl($url);
            URL::forceScheme('https');
        }
    }
}
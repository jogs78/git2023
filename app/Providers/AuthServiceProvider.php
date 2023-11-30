<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Policies\CasaPolicy;
use App\Models\Casa;
use App\Models\Terreno;
use App\Policies\TerrenoPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Casa::class => CasaPolicy::class,
        Terreno::class => TerrenoPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}

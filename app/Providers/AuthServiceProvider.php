<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Policies\CasaPolicy;
use App\Models\Casa;
use App\Models\Terreno;
use App\Policies\TerrenoPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Usuario;
use Illuminate\Support\Facades\Gate;


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
        Gate::define('Administrar', function (Usuario $usuario){
            if( $usuario->tipo_de_usuario == 'vendedor')
            return true;
        else   
            return false;
        });
    }
}

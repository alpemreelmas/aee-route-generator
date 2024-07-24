<?php 

namespace AeeRouteGenerator\Providers;

use App\Http\RouteGenerator;
use Illuminate\Support\ServiceProvider;

class RouteGeneratorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerNamespaces();
    }

    public function register()
    {
        $this->app->singleton(RouteGenerator::class, function (){
            return new RouteGenerator();
        });
    }

    public function registerNamespaces()
    {
        $stubsPath = dirname(__DIR__) . '/src/Commands/stubs';
        $this->publishes([
            $stubsPath => base_path('stubs/aee-stubs'),
        ], 'stubs');

    }
}
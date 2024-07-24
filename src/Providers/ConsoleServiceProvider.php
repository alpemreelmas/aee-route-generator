<?php

namespace AeeRouteGenerator\Providers;

use AEE\RouteGenerator\Commands\RouteGeneratorCommand;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;
use Nwidart\Modules\Commands;

class ConsoleServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->commands($this->provides());
    }

    public function provides(): array
    {
        return self::defaultCommands()->toArray();
    }

    /**
     * Get the package default commands.
     *
     * @return Collection
     */
    public static function defaultCommands(): Collection
    {
        return collect([
            RouteGeneratorCommand::class
        ]);
    }
}
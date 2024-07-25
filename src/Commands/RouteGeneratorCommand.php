<?php

namespace AEE\RouteGenerator\Commands;

use AeeRouteGenerator\RouteGenerator;
use Illuminate\Console\Command;

class RouteGeneratorCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'larabase:generate-routes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generating automatic modules routes.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info("Generating routes...");
        try{
            app(RouteGenerator::class)->run();
            $this->info("Routes are generated successfully.");
        }catch (\FileNotFoundException $e){
            $this->error($e->getMessage()."\n\n Did you forget to create route_generator.php file ? \n");
        }catch (\Exception $e){
            $this->error($e->getMessage());
        }
    }
}

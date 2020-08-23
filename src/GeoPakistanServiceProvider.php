<?php
namespace Aaqib\GeoPakistan;

use Illuminate\Support\ServiceProvider;

class GeoPakistanServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishMigrations();
        $this->publishSeeds();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerCommands();
    }

    /**
     * Publish migration file.
     */
    private function publishMigrations()
    {
//        $this->loadMigrationsFrom(__DIR__ . 'database/migrations/');
         $this->publishes([__DIR__ . '/database/migrations' => base_path('database/migrations')], 'migrations');
    }

    /**
     * Publish seeder file.
     */
    private function publishSeeds()
    {
        $this->publishes([__DIR__ . '/database/seeds' => base_path('database/seeds')], 'seeds');
    }

    private function registerCommands()
    {
        $this->commands([
            \Aaqib\GeoPakistan\Console\InitCommand::class,
        ]);
    }
}

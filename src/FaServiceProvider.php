<?php
    
    namespace Regnilk\FaLaravel;

    use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
    use Illuminate\Support\Facades\Blade;
    use Regnilk\FaLaravel\Components\Fa;

    class FaServiceProvider extends LaravelServiceProvider
    {
        /**
         * Indicates if loading of the provider is deferred.
         *
         * @var bool
         */
        protected $defer = FALSE;
    
        /**
         * Register the service provider.
         *
         * @return void
         */
        public function register()
        {
            $configPath = __DIR__ . '/../config/fa-laravel.php';
        
            $this->mergeConfigFrom($configPath, 'fa');
        }
    
        /**
         * Bootstrap the application events.
         *
         * @return void
         */
        public function boot()
        {
            $configPath = __DIR__ . '/../config/fa-laravel.php';
            
            $this->publishes([$configPath => $this->getConfigPath()], 'config');
        
            $this->loadViewComponentsAs('fa', [
                Fa::class
            ]);
    
            $this->loadViewsFrom(__DIR__ . '/Views', 'fa-laravel');
        
            Blade::component('fa', Fa::class);
        }
    
        /**
         * Get the config path
         *
         * @return string
         */
        protected function getConfigPath()
        {
            return config_path('fa-laravel.php');
        }
    
    }
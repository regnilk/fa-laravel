<?php
    
    namespace Up\WsLaravel;
    
    use Illuminate\Contracts\Support\DeferrableProvider;
    use Regnilk\FaLaravel\Components\Fa;

    class ServiceProvider extends \Illuminate\Support\ServiceProvider implements DeferrableProvider
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
        
            $configPath = __DIR__ . '/../config/fa.php';
            /*if ($this->app['config']->get('upwebservices') === null) {
                $this->app['config']->set('upwebservices', require __DIR__ . '/../config/upwebservices.php');
            }*/
        
            $this->mergeConfigFrom($configPath, 'fa');
        
            $this->app->bind('Fa', function () {
                return Fa::class;
            });
        
        }
    
        /**
         * Bootstrap the application events.
         *
         * @return void
         */
        public function boot()
        {
            $configPath = __DIR__ . '/../config/fa.php';
            $this->publishes([$configPath => $this->getConfigPath()], 'config');
        
            if ($this->app['config']->get('fa') === NULL) {
                $this->app['config']->set('fa', require __DIR__ . '/../config/fa.php');
            }
        
            $this->loadViewsComponentsAs('fa', [Fa::class]);
        
            /*$this->publishes([
                __DIR__ . '/../resources/views' => resource_path('views/vendor/upwebservices'),
            ]);*/
        }
    
        /**
         * Get the services provided by the provider.
         *
         * @return array
         */
        public function provides()
        {
            return [WebServices::class];
        }
    
        /**
         * Get the config path
         *
         * @return string
         */
        protected function getConfigPath()
        {
            return config_path('upwebservices.php');
        }
    
    }
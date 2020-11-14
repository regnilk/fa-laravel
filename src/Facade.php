<?php
    
    namespace Regnilk\FaLaravel;
    
    use Regnilk\FaLaravel\Components\Fa;
    
    class Facade extends \Illuminate\Support\Facades\Facade
    {
        /**
         * {@inheritDoc}
         */
        protected static function getFacadeAccessor()
        {
            return Fa::class;
        }
    }

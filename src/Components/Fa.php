<?php
    
    namespace Regnilk\FaLaravel\Components;
    
    use Illuminate\View\Component;
    
    class Fa extends Component
    {
        public $icon;
        
        /**
         * Create a new component instance.
         *
         * @return void
         */
        public function __construct($icon)
        {
            $this->icon = $icon;
        }
        
        /**
         * Get the view / contents that represent the component.
         *
         * @return \Illuminate\Contracts\View\View|string
         */
        public function render()
        {
            return view('fa-laravel::fa');
        }
    
        /**
         * Return icon from configuration using shortcut icon name
         *
         * @param $icon - the icon shortcut name
         *
         * @return string the FontAwesome icon
         */
        public function grabIcon($icon)
        {
            return config('fa.' . $icon);
        }
    }

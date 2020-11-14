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
            return view('components.fa');
        }
    
        public function grabIcon($icon)
        {
            return config('fa.' . $icon);
        }
    }

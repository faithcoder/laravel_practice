<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Navigation extends Component
{
    
    public $nav_items;
    public $nav_links;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($nav_items, $nav_links)
    {
        $this->nav_items = $nav_items;
        $this->nav_links = $nav_links;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.admin.navigation');
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $theme;
    public $caption;
    public $closeable;

    public function __construct($theme, $caption, $closeable=null)
    {
        $this->theme = $theme;
        $this->caption = $caption;
        $this->closeable = $closeable;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class footer extends Component
{

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->test = "HEUHEUEHU";
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        return view('components.footer');
    }
}

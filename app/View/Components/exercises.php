<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\MeuPacote\Lista;

class exercises extends Component
{

    public $arrayListaDadosMuscle = [];
 
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($arrayListaDadosMuscle = null)
    {
        $this->lista = new Lista();

        if($arrayListaDadosMuscle != null){
            $this->arrayListaDadosMuscle = $arrayListaDadosMuscle;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.exercises');
    }
}

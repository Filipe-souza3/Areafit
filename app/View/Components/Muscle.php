<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\MeuPacote\Lista;

class muscle extends Component
{

    public $nomeExercicio;
    public $dadosExercicio;
    public $pathImage;
    public $nomeMuscle;
    public $nomeCorrecao;

    private $lista;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($exercicio, $dadosExercicio, $pathImage, $nomeMuscle)
    {
        $this->lista = new Lista();

        $this->nomeExercicio = $exercicio;
        $this->dadosExercicio = $dadosExercicio;
        // $this->dadosExercicio['url'] = $this->lista->correcaoNomeExercicio($this->dadosExercicio["nome"]);
        $this->pathImage = $pathImage;
        $this->nomeMuscle = $nomeMuscle;
        $this->nomeCorrecao = $this->lista->correcaoNome($nomeMuscle);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.muscle');
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\MeuPacote\Lista;


class cardList extends Component
{

    /*Se o nome do class estiver com as iniciais minusculas vai dar errro ele n vai pasar pela class depois de renoar dar um php artisan view:clear*/



    public $nome;
    public $desc;
    public $img;
    public $passos;
    public $url;



    // @var string
    public $nomeMuscle;
    public $nomeCorrecaoMuscle;
    public $pathImage;
    public $listaDadosMuscle;

    public $ArrayListaDadosMuscle;
    public $ArrayPathImage;

    public $adcBotao;

    public $lista;

    public $daysWeek;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($listaDadosMuscle = null, $pathImage = null, $nomeMuscle = null, $ArrayListaDadosMuscle = null, $ArrayPathImage = null, $adcBotao = false, $daysWeek = null)
    {
        $this->lista = new Lista();
        if(!empty($nomeMuscle)){
             $this->nomeCorrecaoMuscle = $this->lista->correcaoNome($nomeMuscle);
             $this->nomeMuscle = $nomeMuscle;
        }

        if(!empty($pathImage)){
            $this->pathImage = $pathImage;
        }

        if(!empty($listaDadosMuscle)){
            $this->listaDadosMuscle = $listaDadosMuscle;
        }

        if(!empty($ArrayListaDadosMuscle)){
            $this->ArrayListaDadosMuscle = $ArrayListaDadosMuscle;
        }

        if(!empty($ArrayPathImage)){
            $this->ArrayPathImage = $ArrayPathImage;
        }

        if($adcBotao == true){
            // \Log::info(print_r("entrou if botao", true));
            $this->adcBotao = true;
        }
        // $this->lista->correcaoNomeExercicio

        if(!empty($daysWeek)){
            $this->daysWeek = $daysWeek;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-list');
    }

}

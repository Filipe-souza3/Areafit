<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MeuPacote\Lista;
use App\MeuPacote\BasicTrainning;
use Illuminate\Support\Facades\Cookie;

class IndexController extends Controller
{
    //
    private $pathImage = "storage/body/male/gifs/";
    private $lista;
    private $basic;
    private $side;
    private $my_list = [];
    private $ads = false;

    public function __construct()
    {
        $this->lista = new Lista();
        $this->basic = new BasicTrainning();
    }

    public function dataIndex()
    {
        return view('body');
    }

    public function exercises()
    {
        $daysWeek = ['segunda', 'terca', 'quarta', 'quinta', 'sexta', 'sabado', 'domingo'];
        $exercises_list = [
            'segunda' => [],
            'terca' => [],
            'quarta' => [],
            'quinta' => [],
            'sexta' => [],
            'sabado' => [],
            'domingo' => [],
        ];
        $exercise = [
            'all_exercises' => [],
            'pathImage' => [],
            'nameMuscle' => []
        ];

        // $list_exercises = [];
        // $contagemTest = 0;
        $pathImage = [];
        $nomes = [];
        $listOneMuscle = [];

        // $listWeek = session('myList');
        $listWeek = json_decode(request()->cookie('training'), true);
        // \Log::info(print_r("exercies listweek", true));
        // \Log::info(print_r($listWeek, true));
        
        // array_key_exists($daysWeek[0], $listWeek);

        // $jj = json_encode($daysWeek);
        // Cookie::queue('days', $jj, 999999);
        $var = json_decode(request()->cookie('training'), true);
        $value = Cookie::get("trainig");
        // \Log::info(print_r("peganod cookie ", true));
        // \Log::info(print_r($var['segunda'], true));

        if (!empty($listWeek)) {
            // dd($listWeek);
            for ($z = 0; $z < count($daysWeek); $z++) {
                if (array_key_exists($daysWeek[$z], $listWeek)) {
                    $list = $listWeek[$daysWeek[$z]];

                    for ($i = 0; $i < count($list); $i++) {
                        array_push($exercise['nameMuscle'], $list[$i]["muscle"]);
                        array_push($exercise['pathImage'], $this->pathImage . $this->lista->getSide($list[$i]["muscle"]) . "/" . $list[$i]["muscle"] ."/");
                        // array_push($nomes, $list[$i]["muscle"]);
                        // array_push($pathImage, $this->pathImage . $this->lista->getSide($list[$i]["muscle"]) . "/" . $list[$i]["muscle"] . "/");



                        foreach ($list[$i]["exercise"] as $value) {
                            $dadosExercicio = $this->lista->getExercicio($list[$i]["muscle"], $value);
                            array_push($listOneMuscle, $dadosExercicio);
                            // array_push($list_exercises, $dadosExercicio);
                        }
                        // array_push($list_exercises, $listOneMuscle);
                        // array_push($exercises_list[$daysWeek[$z]], $listOneMuscle);
                        // array_push($exercise['all_exercises'], $listOneMuscle);
                        $exercise['all_exercises'] = $listOneMuscle;
                        $listOneMuscle = [];

                        array_push($exercises_list[$daysWeek[$z]], $exercise);
                        $exercise['all_exercises'] = [];
                        $exercise['pathImage'] = [];
                        $exercise['nameMuscle'] =[];
                    }
                } 
                // else {
                    // array_push($list_exercises, []);
                // }
            }
            // \Log::info(print_r($pathImage, true));
            // \Log::info(print_r($exercises_list, true));
            // dd($exercises_list);

        } else {
            \Log::info(print_r("list vazia", true));
        }
        return view('exercises', ['arrayListaDadosMuscle' => $exercises_list, 
            'ArrayPathImage' => $pathImage, 
            'arrayNomes' => $nomes, 
            'daysWeek' => $daysWeek,
            'ads' => $this->ads]);
        // return view('exercises', ['arrayListaDadosMuscle' => $list_exercises, 'ArrayPathImage' => $pathImage, 'arrayNomes' => $nomes, 'daysWeek' => $daysWeek]);
    }
    // public function exercises1()
    // {
    //     $daysWeek = ['segunda', 'terca', 'quarta', 'quinta', 'sexta', 'sabado', 'domingo'];
    //     $list_exercises = [];
    //     // $contagemTest = 0;
    //     $pathImage = [];
    //     $nomes = [];
    //     $listOneMuscle = [];

    //     $listWeek = session('myList');
    //     \Log::info(print_r("exercies", true));
    //     \Log::info(print_r($listWeek, true));
    //     if (!empty($listWeek)) {
    //         // $this->my_list = json_decode(Cookie::get("muscle-cookie"));
    //         \Log::info(print_r("exercies", true));
    //         \Log::info(print_r($listWeek[$daysWeek[0]], true));


    //         for ($z = 0; $z < count($daysWeek); $z++) {
    //             if (array_key_exists($daysWeek[$z], $listWeek)) {
    //                 $list = $listWeek[$daysWeek[$z]];

    //                 for ($i = 0; $i < count($list); $i++) {
    //                     array_push($nomes, $list[$i]["muscle"]);
    //                     array_push($pathImage, $this->pathImage . $this->lista->getSide($list[$i]["muscle"]) . "/" . $list[$i]["muscle"] . "/");

    //                     foreach ($list[$i]["exercise"] as $value) {
    //                         $dadosExercicio = $this->lista->getExercicio($list[$i]["muscle"], $value);
    //                         array_push($listOneMuscle, $dadosExercicio);
    //                         // array_push($list_exercises, $dadosExercicio);
    //                     }
    //                     array_push($list_exercises, $listOneMuscle);
    //                     $listOneMuscle = [];
    //                 }
    //             } else {
    //                 // array_push($list_exercises, []);
    //             }
    //         }
    //         // \Log::info(print_r($pathImage, true));
    //         \Log::info(print_r($list_exercises, true));

    //     } else {
    //         \Log::info(print_r("list vazia", true));
    //     }
    //     return view('exercises', [
    //         'arrayListaDadosMuscle' => $list_exercises, 
    //         'ArrayPathImage' => $pathImage, 
    //         'arrayNomes' => $nomes, 
    //         'daysWeek' => $daysWeek]);
    // }



    public function getCookie(Request $request)
    {
        \Log::info(print_r("foi ajaxx", true));
        // \Log::info(print_r($request->all(), true));
        \Log::info(print_r($request->muscleCookie, true));




        $this->my_list = $request->muscleCookie;
        // if(!empty($this->my_list)){
        if ($this->my_list == "empty") {
            session(['myList' => []]);
            return response()->json("Lista vazia", 200);
        } else {
            if ($this->my_list != null) {
                // if(sizeof($this->my_list) > -1){
                \Log::info(print_r("getcookie session", true));
                \Log::info(print_r($this->my_list, true));

                session(['myList' => $this->my_list]);

                return response()->json(route('exercises'), 200);
                // return response()->json("cookie encontrado", 200);
            } else {
                return response()->json("erro ao procurar cookie", 500);
            }
        }
    }

    public function dataList($muscle)
    {
        $listaDadosMuscle = $this->lista->listaMuscle($muscle);
        $this->side = $this->lista->getSide();
        $this->pathImage = $this->pathImage . $this->side . "/" . $muscle . "/";

        return view('list', [
            'listaDadosMuscle' => $listaDadosMuscle, 
            'pathImage' => $this->pathImage, 
            'nomeMuscle' => $muscle,
            'ads' => $this->ads]);
    }

    public function dataMuscle($nomeMuscle, $exercicio)
    {
        $dadosExercicio = $this->lista->getExercicio($nomeMuscle, $exercicio);
        $this->side = $this->lista->getSide();
        $this->pathImage = $this->pathImage . $this->side . "/" . $nomeMuscle . "/";

        return view('muscle', [
            'exercicio' => $exercicio, 
            'nomeMuscle' => $nomeMuscle, 
            'dadosExercicio' => $dadosExercicio, 
            'pathImage' => $this->pathImage,
            'ads' => $this->ads]);
    }



    public function createCookie($muscle, $exercise)
    {

        $exist = false;
        $obj = array(
            "muscle" => $muscle,
            "exercise" => array($exercise)
        );

        if (Cookie::has("muscle-cookie")) {

            $this->my_list = json_decode(Cookie::get("muscle-cookie"));
            // \Log::info(print_r($this->my_list[0], true));

            for ($i = 0; $i < count($this->my_list); $i++) {

                if ($this->my_list[$i]->muscle == $muscle) {
                    $exist = true;
                    $exist_exercise = false;

                    foreach ($this->my_list[$i]->exercise as $value) {
                        if ($value == $exercise) {
                            $exist_exercise = true;
                        }
                    }

                    if ($exist_exercise == false) {
                        array_push($this->my_list[$i]->exercise, $exercise);
                    }
                }
            }

            if ($exist == false) {
                // \Log::info("NAO FOI ".$muscle);
                array_push($this->my_list, $obj);
            }

            \Log::info(print_r(Cookie::get("muscle-cookie"), true));
            $json = json_encode($this->my_list);
            Cookie::queue('muscle-cookie', $json, 999999);

        } else {
            // \Log::info("PRIMEIRO");
            array_push($this->my_list, $obj);
            $json = json_encode($this->my_list);
            Cookie::queue('muscle-cookie', $json, 999999);
        }
        return $this->my_list;
    }

    public function imc()
    {
        return view('imc',['ads' => $this->ads]);
    }
    public function calories()
    {
        return view('calories',['ads' => $this->ads]);
    }

    public function basicTrainning($gender){

        $basicExercise =[
            'Segunda'=> [],
            'Quarta'=> [],
            'Sexta'=> [],
        ];

        $exercise = [
            'all_exercises' => [],
            'pathImage' => [],
            'nameMuscle' => []
        ];

        $basicExerciseIndex = array_keys($basicExercise);
        $exercises = null;

        if($gender == "Masculino"){
            $exercises = $this->basic->getMale();
        }else if($gender == "Feminino"){
            $exercises = $this->basic->getFemale();
        }


        for($i = 0 ; $i < sizeof($basicExerciseIndex) ; $i++) {
            $exercisesIndex = array_keys($exercises[$basicExerciseIndex[$i]]);

            for($z = 0 ; $z < sizeof($exercisesIndex) ; $z++) {

                array_push($exercise['nameMuscle'], $exercisesIndex[$z]);
                array_push($exercise['pathImage'], $this->pathImage.$this->lista->getSide($exercisesIndex[$z])."/".$exercisesIndex[$z]."/");

                for($y = 0 ; $y < sizeof($exercises[$basicExerciseIndex[$i]][$exercisesIndex[$z]]) ; $y++) {
                    array_push($exercise['all_exercises'], $this->lista->getExercicio($exercisesIndex[$z], $exercises[$basicExerciseIndex[$i]][$exercisesIndex[$z]][$y]));
                }
                array_push($basicExercise[$basicExerciseIndex[$i]], $exercise);

                $exercise['all_exercises'] = [];
                $exercise['pathImage'] = [];
                $exercise['nameMuscle'] =[];
            }
        }

        return view("exercises-basic", [
            "basicExercises"=> $basicExercise, 
            "daysWeek" => $basicExerciseIndex, 
            "gender" => $gender,
            "ads" => $this->ads]);
    }

    // public function exercises1(){
    //     $list_exercises = [];
    //     $contagemTest = 0;
    //     $pathImage = [];
    //     $nomes =[];
    //     $listOneMuscle = [];

    //     if(Cookie::has("muscle-cookie")){
    //         $this->my_list = json_decode(Cookie::get("muscle-cookie"));
    //         \Log::info(print_r($this->my_list, true));
    //         \Log::info(print_r("buscca", true));
    //         for($i=0 ; $i < count($this->my_list) ; $i++) {
    //                 array_push($nomes, $this->my_list[$i]->muscle);
    //                 array_push($pathImage, $this->pathImage.$this->lista->getSide($this->my_list[$i]->muscle)."/".$this->my_list[$i]->muscle."/");
    //             foreach ($this->my_list[$i]->exercise as $value) {
    //                 $dadosExercicio = $this->lista->getExercicio($this->my_list[$i]->muscle, $value);
    //                 array_push($listOneMuscle, $dadosExercicio);
    //             }
    //             array_push($list_exercises, $listOneMuscle);
    //             $listOneMuscle = [];
    //         }
    //         \Log::info(print_r($list_exercises, true));
    //     }
    //     return view('exercises', ['arrayListaDadosMuscle'=>$list_exercises, 'ArrayPathImage'=>$pathImage, 'arrayNomes'=>$nomes]);
    // }
}
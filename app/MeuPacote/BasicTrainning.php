<?php
namespace App\MeuPacote;

class BasicTrainning
{


    private $basicMale = array(

        "Segunda" => array(

           "Peitoral" => array(
                "supino-reto",
                "Supino-inclinado-com-halteres",
                "Crosso-Over"
            ),

            "Ombros" => array(
                "desenv-halteres",
                "Elevação-lateral-com-halteres"
            ),

            "Triceps" => array(
                "Triceps-com-corda",
                "Triceps-frances"
            ),
            "Abdomen"=> array(
                "Abdominal-reto"
            )
        ),
        "Quarta" => array(

            "Dorsal" => array(
                "Puxada-alta-frontal",
                "Remada-sentado-na-maquina-com-triangulo",
                "Puxada-alta-frontal-com-corda",
                "remada-na-barra-T"
            ),

            "Trapezio" => array(
                "Halteres-paralelos"
            ),

            "Biceps" => array(
                "Rosca-direta-com-halteres",
                "rosca-inversa-com-barra-w"
            ),
            "Abdomen"=> array(
                "Prancha"
            )
        ),
        "Sexta" => array(

            "Coxas-anterior" => array(
                "Leg-press",
                "Hack",
                "Cadeira-extensora",
                "Avanco"
            ),

            "Coxas-posterior" => array(
                "Levantamento-terra-romeno",
                "Mesa-flexora"
            ),

            "Panturrilhas" => array(
                "Elevacao-de-panturrilhas-sentado",
                "Elevacao-de-panturrilhas"
            )
        )
    );

    private $basicFemale = array(
        "Segunda" => array(
            "Coxas-anterior" => array(
                "Agachamento-livre-com-barra",
                "Leg-press",
                "Avanco",
                "Cadeira-extensora",
                "Cadeira-adutora"
            ),

            "Panturrilhas"=> array(
                "Elevacao-de-panturrilhas",
            )
        ),
        "Quarta" => array(
            "Peitoral"=> array(
                "Peck-deck-Voador",
                "Crucifixo-inclinado"
            ),

            "Dorsal"=> array(
                "Remada-sentado-na-maquina-com-triangulo",
                "Puxada-alta-frontal"
            ),

            "Ombros"=> array(
                "desenv-halteres",
                "Elevação-lateral-com-halteres"
            ),

            "Biceps"=> array(
                "Rosca-direta-com-halteres"
            ),

            "Triceps"=> array(
                "Triceps-com-barra"
            ),

            "Abdomen"=> array(
                "Prancha"
            )
        ),
        "Sexta" => array(
            "Coxas-posterior"=> array(
                "Levantamento-terra",
                "Levantamento-terra-romeno",
                "Mesa-flexora",
                "Cadeira-abdutora",
                "Elevacao-pevilca-apoiado-no-banco"
            ),

            "Gluteos"=> array(
                "Coice-no-cabo"
            ),

            "Panturrilhas"=> array(
                "Elevacao-de-panturrilhas-sentado"
            )
        )
    );


    function getMale() {
        return $this->basicMale;
    }

    function getFemale() {
        return $this->basicFemale;
    }
}


?>
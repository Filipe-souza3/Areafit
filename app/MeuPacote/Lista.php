<?php
    namespace App\MeuPacote;

    class Lista {

        private $param;
        private $side;

        public Array $body = Array(
            "path" =>"storage/body/male/gifs/",
            "front" => Array(
                "Trapezio" => Array(
                    Array(
                        "nome" => "Halteres paralelos",
                        "nome_url"=>"Halteres-paralelos",
                        "desc" => "Contrair trapézios com halteres paralelos",
                        "img" => "Dumbbell-Shrug.webp",
                        "musculo_trabalhado" => "Trapézio",

                        "beneficios" => "O exercício dos ombros com halteres paralelos é um exercício que tem como principal benefício o fortalecimento dos músculos do trapézio superior e médio, que são responsáveis pela elevação e estabilização das escápulas. Esse exercício também pode ajudar a melhorar a postura e a prevenir lesões no pescoço e nos ombros, além de aumentar a força e a resistência muscular.",

                        "passos" => Array(
                            "Fique em pé com os pés afastados na largura dos ombros e segure um halter em cada mão ao lado do corpo, com as palmas das mãos voltadas para o corpo.",
                            "Levante os ombros o máximo que puder, mantendo os braços retos e sem mexer o resto do corpo.",
                            "Segure os ombros levantados por um momento e depois abaixe-os lentamente de volta à posição inicial.",
                            "Repita o movimento por 8-12 repetições, ou até a falha muscular."
                        )
                    ),
                    Array(
                        "nome" => "Halter unilateral",
                        "nome_url" => "Halter-unilateral",
                        "desc" => "Contrair trapézios com halter unilateral",
                        "img" => "Dumbbell-Seated-Gittleson-Shrug.webp",
                        "musculo_trabalhado" => "Trapézio, Ombros",

                        "beneficios" => "O exercício de trapézio unilateral sentado com halter é uma boa opção para fortalecer e desenvolver os músculos do trapézio, deltoides e romboides. Ele ajuda a melhorar a postura e a estabilidade dos ombros, além de prevenir lesões na região. ",

                        "passos" => Array(
                            "Sente-se em um banco ou cadeira com as costas retas e os pés apoiados no chão.",
                            "Segure um halter com uma mão e deixe o braço estendido ao lado do corpo.",
                            "Mantendo o braço estendido, levante o halter em direção ao ombro, mantendo o cotovelo próximo ao corpo.
                            Ao levantar o halter, contraia o músculo do trapézio, puxando-o em direção ao pescoço.",
                            "Segure a posição por um momento e, em seguida, abaixe o halter de volta à posição inicial, controlando o movimento.",
                            "Repita o movimento para o número desejado de repetições e, em seguida, troque de lado e repita com a outra mão."
                        )
                    ),
                    Array(
                        "nome" => "Barras paralelas",
                        "nome_url"=>"Barras-paralelas",
                        "desc" => "Contrair trapézios nas barras paralelos",
                        "img" => "Dip-Shrugs.webp",
                        "musculo_trabalhado" => "Trapézio",

                        "beneficios" => "O exercício de trapézio nas barras paralelas é um exercício de musculação que tem como principal objetivo trabalhar os músculos do trapézio superior e médio. Entre os principais benefícios desse exercício estão o fortalecimento e o desenvolvimento da região dos ombros, além de melhorar a postura e a estabilidade na região da coluna cervical",

                        "passos" => Array(
                            "Posicione-se em pé entre as barras paralelas e as mãos segurando cada barra acima da altura dos ombros.",
                            "Mantenha os braços estendidos e as mãos afastadas na largura dos ombros.",
                            "Levante os ombros em direção às orelhas, contraindo o trapézio.",
                            "Segure por um segundo antes de abaixar os ombros de volta à posição inicial."
                        )
                    ),
                    Array(
                        "nome" => "Barra",
                        "nome_url"=>"Barra",
                        "desc" => "Contrair trapézios usando a barra",
                        "img" => "Barbell-Shrug.webp",
                        "musculo_trabalhado" => "Trapézio",

                        "beneficios" => "Exercitar o trapézio utilizando a barra pode trazer diversos benefícios, como a melhoria da postura e a prevenção de lesões na região cervical e dorsal. Além disso, o fortalecimento do trapézio auxilia em movimentos que envolvem a elevação dos ombros e a estabilização da coluna vertebral.",

                        "passos" => Array(
                            "Comece segurando a barra com uma pegada pronada (palmas das mãos viradas para baixo) e mantenha as mãos afastadas na largura dos ombros.",
                            "Mantenha os braços estendidos enquanto levanta os ombros até as orelhas, contraindo o trapézio.",
                            "Pause brevemente no topo do movimento e depois abaixe lentamente os ombros de volta à posição inicial, evitando soltar completamente os ombros.",
                            "Repita o movimento para completar o número de repetições desejadas."
                        )
                    ),
                    Array(
                        "nome" => "Halteres paralelos sentado em banco inclinado",
                        "nome_url"=>"Halteres-paralelos-sentado-em-banco-inclinado",
                        "desc" => "Contrair trapézios em banco inclinado",
                        "img" => "Dumbbell-Incline-Shrug.webp",
                        "musculo_trabalhado" => "Trapézio",

                        "beneficios" => "O exercício de trapézio com halteres sentado em banco inclinado é uma ótima opção para fortalecer e tonificar os músculos do trapézio, o que pode melhorar a postura e evitar dores nas costas e ombros. Além disso, o exercício também pode ajudar a aumentar a força e a resistência dos músculos das costas e dos ombros, o que pode ser benéfico para outras atividades físicas e para a vida cotidiana em geral.",

                        "passos" => Array(
                            "Sente-se em um banco inclinado com um halter em cada mão.",
                            "Mantenha os pés apoiados no chão e as costas retas;
                            Eleve os halteres na direção dos ombros, mantendo os cotovelos ligeiramente flexionados.",
                            "Mantenha essa posição por um segundo, contraindo os músculos do trapézio.",
                            "Abaixe os halteres de volta à posição inicial, inspirando durante o movimento.",
                            "Repita o movimento, controlando o movimento dos halteres e evitando balançar o corpo."
                        )
                    ),
                    Array(
                        "nome" => "Cabo",
                        "nome_url"=>"Cabo",
                        "desc" => "Contrair trapézios usando cabo",
                        "img" => "Cable-Shrug.webp",
                        "musculo_trabalhado" => "Trapézio",

                        "beneficios" => "Exercitar o trapézio utilizando o cabo pode trazer diversos benefícios, como a melhoria da postura e a prevenção de lesões na região cervical e dorsal. Além disso, o fortalecimento do trapézio auxilia em movimentos que envolvem a elevação dos ombros e a estabilização da coluna vertebral.",

                        "passos" => Array(
                            "Comece segurando a barra conectada ao cabo com uma pegada pronada (palmas das mãos viradas para baixo) e mantenha as mãos afastadas na largura dos ombros.",
                            "Mantenha os braços estendidos enquanto levanta os ombros até as orelhas, contraindo o trapézio.",
                            "Pause brevemente no topo do movimento e depois abaixe lentamente os ombros de volta à posição inicial, evitando soltar completamente os ombros.",
                            "Repita o movimento para completar o número de repetições desejadas."
                        )
                    ),
                ),
                "Ombros" => Array(
                    Array(
                        "nome" => "Elevação frontal alternada com halteres",
                        "nome_url"=>"Elevacao-frontal-alternada-com-halteres",
                        "desc" => "Elevação frontal com halteres",
                        "img" => "Alternating-Dumbbell-Front-Raise.webp",
                        "musculo_trabalhado" => "Deltoide anterior, deltoide lateral, trapézio",

                        "beneficios" => "O exercício de elevação frontal alternada com halteres é uma ótima opção para trabalhar os músculos do ombro, incluindo o deltóide anterior e o trapézio. Ele ajuda a aumentar a força e a resistência muscular nessa região, melhorando a estabilidade e a mobilidade dos ombros. Além disso, por ser um exercício unilateral, ele permite corrigir desequilíbrios musculares entre os ombros e ajuda na coordenação motora. É importante realizar o exercício de forma correta para evitar lesões e obter os benefícios esperados.",

                        "passos" => Array(
                            "Fique em pé com os pés afastados na largura dos ombros, segurando um halter em cada mão com as palmas das mãos voltadas para o corpo.",
                            "Mantenha os braços estendidos ao lado do corpo;
                            Levante um halter em linha reta na frente do seu corpo até que o braço esteja paralelo ao chão.",
                            "Mantenha o halter na posição elevada por um breve momento, contraindo o músculo do ombro.",
                            "Abaixe o halter controladamente enquanto levanta o outro halter na mesma forma.",
                            "Repita o movimento alternadamente, elevando um halter de cada vez, realizando o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Remada alta no cabo",
                        "nome_url"=>"Remada-alta-no-cabo",
                        "desc" => "Remada alta utilizando o cabo",
                        "img" => "Cable-Upright-Row.webp",
                        "musculo_trabalhado" => "Deltoide posterior, trapézio",

                        "beneficios" => "O exercício de remada alta com barra é eficaz para o desenvolvimento da musculatura do deltóide posterior e do trapézio, além de ajudar a melhorar a postura e a estabilidade do ombro. Esse exercício também pode auxiliar no fortalecimento da região cervical e das costas, prevenindo lesões e dores.",

                        "passos" => Array(
                            "Fique em pé com os pés na largura dos ombros e segure uma barra com as mãos na largura dos ombros, com as palmas voltadas para baixo.",
                            "Levante a barra até a altura do peito, mantendo os cotovelos elevados e paralelos ao chão. Os cotovelos devem estar apontados para fora.",
                            "Mantenha os ombros para trás e o núcleo firme enquanto levanta a barra.",
                            "Segure a posição por um momento e depois abaixe a barra lentamente até a posição inicial."
                        )
                    ),
                    Array(
                        "nome" => "Elevação lateral com halteres",
                        "nome_url"=>"Elevacao-lateral-com-halteres",
                        "desc" => "Elevação dos ombros lateral com halteres",
                        "img" => "Dumbbell-Lateral-Raise.webp",
                        "musculo_trabalhado" => "Deltoide laterais, deltoide anterior, trapézio",

                        "beneficios" => "O exercício de elevação lateral com halteres é direcionado para os deltoides laterais, que são os músculos localizados na parte superior e externa dos ombros. Além disso, o movimento da elevação lateral com halteres é capaz de melhorar a estabilidade dos ombros, prevenir lesões e promover a simetria dos deltoides.",

                        "passos" => Array(
                            "Segure um halter em cada mão e mantenha-os ao lado do corpo com as palmas voltadas para o corpo.",
                            "Mantenha os cotovelos levemente dobrados e levante os braços para os lados, mantendo a altura dos ombros e mantendo os halteres paralelos ao chão.",
                            "Segure por um segundo e, em seguida, abaixe lentamente os halteres de volta à posição inicial."
                        )
                    ),
                    Array(
                        "nome" => "Elevação lateral no cabo",
                        "nome_url"=>"Elevacao-lateral-no-cabo",
                        "desc" => "Elevação lateral no cabo inclinado",
                        "img" => "Cable-Lateral-Raise.webp",
                        "musculo_trabalhado" => "Deltoide laterais, deltoide anterior, trapézio",

                        "beneficios" => "O exercício Elevação Lateral no Cabo trabalha os músculos do ombro, especificamente o deltóide lateral. Ele ajuda a melhorar a definição e o tônus muscular do ombro, aumenta a força e a resistência muscular, e pode ajudar a prevenir lesões nos ombros. Além disso, por se tratar de um exercício unilateral, ele ajuda a corrigir desequilíbrios musculares entre os ombros.",

                        "passos" => Array(
                            "Ajuste a polia na posição mais baixa do cabo e conecte um pegador de cabo.",
                            "Fique de lado para a máquina e segure o pegador com a mão mais distante da polia.",
                            "Mantenha os pés afastados na largura dos ombros, com o joelho levemente dobrado.",
                            "Mantenha o braço estendido e comece a levantá-lo para o lado, mantendo o cotovelo levemente flexionado.",
                            "Levante o braço até a altura do ombro ou até sentir a contração muscular.",
                            "Pause por um momento no topo e depois abaixe o braço lentamente de volta à posição inicial.",
                            "Repita o exercício para o número desejado de repetições e, em seguida, troque de lado e repita com o outro braço."
                        )
                    ),
                    Array(
                        "nome" => "Elevação lateral sentado inclinado",
                        "nome_url"=>"Elevacao-lateral-sentado-inclinado",
                        "desc" => "Elevação lateral sentado com peito apoiado inclinado",
                        "img" => "Dumbbell-Chest-Supported-Lateral-Raises.webp",
                        "musculo_trabalhado" => "Deltoide posterior, deltoide lateral, trapézio",

                        "beneficios" => "O exercício crucifixo invertido sentado apoiado no peito é excelente para desenvolver a força e a estabilidade dos ombros, além de trabalhar músculos como o trapézio, o deltóide posterior. Este exercício também ajuda a melhorar a postura, fortalecendo a região das costas e prevenindo lesões. A execução adequada desse exercício ajuda a fortalecer e desenvolver os músculos das costas e dos ombros, proporcionando um corpo mais forte e saudável.",

                        "passos" => Array(
                            "Sente-se em um banco ou cadeira com encosto inclinado.",
                            "Segure um par de halteres com as palmas das mãos voltadas para o seu corpo e deixe-os pendurados.",
                            "Levante os halteres até a altura do peito, mantendo os cotovelos levemente flexionados.",
                            "Abra os braços para os lados, afastando os halteres do seu corpo, até que eles fiquem paralelos ao chão e na altura dos ombros.",
                            "Mantenha a posição por um segundo e, em seguida, retorne os halteres à posição inicial com um movimento controlado.",
                            "Repita o movimento por várias repetições, mantendo a postura e os cotovelos levemente flexionados."
                        )
                    ),
                    Array(
                        "nome" => "Face pull",
                        "nome_url"=>"Face-pull",
                        "desc" => "Face pull com corda",
                        "img" => "Face-Pull.webp",
                        "musculo_trabalhado" => "Deltoide posterior, trapézio",

                        "beneficios" => "O exercício de ombro Face Pull é excelente para fortalecer os músculos das costas, ombros e braços, além de ajudar a melhorar a postura e prevenir lesões. Esse exercício tem como foco principal os músculos das costas, especificamente o trapézio e o deltóide posterior, que são importantes para manter a estabilidade dos ombros e melhorar a postura. Além disso, o Face Pull ajuda a desenvolver a força e o controle dos músculos do manguito rotador, que são fundamentais para prevenir lesões no ombro.",

                        "passos" => Array(
                            "Ajuste a polia para a altura dos seus ombros e prenda uma corda na mesma.",
                            "Segure cada extremidade da corda com as palmas das mãos voltadas para baixo.",
                            "Fique em pé com os pés afastados na largura dos ombros e segure a corda na frente do peito.",
                            "Puxe a corda em direção ao rosto, mantendo os cotovelos para cima e para fora.",
                            "Quando a corda estiver próxima ao rosto, pause por um momento e depois retorne lentamente à posição inicial."
                        )
                    ),
                    Array(
                        "nome" => "Elevação frontal com barra no cabo",
                        "nome_url"=>"Elevacao-frontal-com-barra-no-cabo",
                        "desc" => "Elevação frontal com barra no cabo",
                        "img" => "Two-Arm-Cable-Front-Raise.webp",
                        "musculo_trabalhado" => "Deltoide anterior, deltoide lateral",

                        "beneficios" => "A elevação frontal com barra na corda é um exercício efetivo para trabalhar os músculos do ombro, especialmente o deltoide frontal. Ele ajuda a melhorar a força e resistência muscular, além de aumentar a estabilidade dos ombros e melhorar a postura. É um exercício bastante versátil, podendo ser realizado por pessoas de diferentes níveis de condicionamento físico, e também pode ser modificado adicionando variações na posição dos braços e na resistência.",

                        "passos" => Array(
                            "Anexe uma barra ao cabo de uma máquina de polia ajustável mais próximo do chão.",
                            "Fique de costas para a polia e passe a barra no meio das pernas.",
                            "Segure aa barra com as palmas das mãos voltadas para baixo e os braços estendidos em frente ao corpo.",
                            "Mantenha os braços retos e levante as mãos em direção ao teto até que elas estejam na altura dos ombros.",
                            "Pause por um momento e depois abaixe as mãos de volta à posição inicial.",
                            "Repita o movimento para o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Elevação Frontal com Anilha",
                        "nome_url"=>"Elevacao-frontal-com-anilha",
                        "desc" => "Elevação Frontal com Anilha",
                        "img" => "Weight-Plate-Front-Raise-1.webp",
                        "musculo_trabalhado" => "Deltoide anterior, deltoide lateral",

                        "beneficios" => "A Elevação Frontal com Anilha é um exercício que fortalece principalmente os músculos do ombro, incluindo o deltóide anterior. Além disso, ele também recruta os músculos do braço, como o bíceps e o braquial, e trabalha na estabilização da região escapular.
                        Esse exercício pode ajudar a melhorar a estabilidade e o controle dos ombros, o que pode prevenir lesões e melhorar a postura. Ele também pode contribuir para o aumento da força e da resistência muscular nos ombros e nos braços, o que é benéfico para várias atividades diárias e esportes.",

                        "passos" => Array(
                            "Anexe uma barra ao cabo de uma máquina de polia ajustável mais próximo do chão.",
                            "Fique de costas para a polia e passe a barra no meio das pernas.",
                            "Segure aa barra com as palmas das mãos voltadas para baixo e os braços estendidos em frente ao corpo.",
                            "Mantenha os braços retos e levante as mãos em direção ao teto até que elas estejam na altura dos ombros.",
                            "Pause por um momento e depois abaixe as mãos de volta à posição inicial.",
                            "Repita o movimento para o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Remada inclinada de 45 Graus",
                        "nome_url"=>"Remada-inclinada-45-graus",
                        "desc" => "Remada inclinada de 45 Graus com halteres",
                        "img" => "45-Degree-Incline-Row.webp",
                        "musculo_trabalhado" => "Deltoide posterior, dorsal",

                        "beneficios" => "A Remada Inclinada de 45 Graus é um exercício que trabalha principalmente os músculos do ombro, em especial o deltóide posterior, além de envolver também os músculos das costas e dos braços. Os benefícios desse exercício incluem o fortalecimento e a tonificação dos músculos do ombro, melhorando a postura e reduzindo o risco de lesões. Além disso, a remada inclinada também pode ajudar no desenvolvimento da força e da resistência muscular.",

                        "passos" => Array(
                            "Fique em pé inclinado em um banco de 45 graus, mantendo as costas retas e os pés firmes no chão.",
                            "Pegue um par de halteres, segurando-os com as palmas das mãos voltadas para o corpo, deixando-os pendurados na frente de seus joelhos.",
                            "Levante os halteres em direção ao peito, mantendo as costas retas. Pare quando os halteres estiverem logo abaixo do peito.",
                            "Pause por um momento e, em seguida, abaixe lentamente os halteres de volta à posição inicial.",
                            "Repita o movimento de elevação dos halteres em direção ao peito para concluir uma repetição."
                        )
                    ),
                    Array(
                        "nome" => "Crucifixo invertido",
                        "nome_url"=>"Crucifixo-invertido",
                        "desc" => "Crucifixo invertido com tronco inclinado",
                        "img" => "Bent-Over-Lateral-Raise.webp",
                        "musculo_trabalhado" => "Deltoide posterior, trapézio",

                        "beneficios" => "O exercício de ombro crucifixo invertido com tronco inclinado é benéfico para o fortalecimento dos músculos do ombro, especialmente do deltóide posterior. Ele pode ajudar a melhorar a postura e prevenir lesões. Nesse exercício, você precisa ficar com o tronco inclinado e levantar os pesos em direção às suas omoplatas, realizando uma contração isométrica dos músculos do ombro. Isso pode ajudar a desenvolver a estabilidade e a força do ombro, além de melhorar a flexibilidade e o alcance de movimento.",

                        "passos" => Array(
                            "Posicione-se com os pés na abertura dos ombros e o tronco inclinado para frente.",
                            "Segure halteres com as palmas das mãos voltadas para dentro e os braços estendidos para baixo.",
                            "Incline o tronco para frente, mantendo as costas retas.",
                            "Levante os braços para os lados, mantendo os cotovelos levemente flexionados, até que os halteres estejam na altura dos ombros.",
                            "Mantenha a posição por um momento e depois abaixe os halteres de volta à posição inicial."
                        )
                    ),
                    Array(
                        "nome" => "Remada com halteres",
                        "nome_url"=>"Remada-com-halteres",
                        "desc" => "Remada sentada com halteres",
                        "img" => "Dumbbell-Seated-Bent-Over-Rear-Delt-Row.webp",
                        "musculo_trabalhado" => "Deltoide posterior, deltoide lateral, trapézio",

                        "beneficios" => "O exercício de remada sentada com halteres é excelente para o desenvolvimento dos ombros, especialmente a porção posterior. Os principais benefícios incluem o fortalecimento e aumento da massa muscular dos deltoides, dos músculos trapézio e dos músculos romboides.
                        Além disso, esse exercício ajuda a melhorar a postura e a estabilidade dos ombros, o que pode reduzir o risco de lesões. Ele também pode ajudar a melhorar o desempenho em outros exercícios para os ombros, como o desenvolvimento militar.",

                        "passos" => Array(
                            "Sente-se em um banco com as costas retas e os pés firmemente apoiados no chão.",
                            "Segure um halter em cada mão com as palmas das mãos voltadas para fora do seu corpo.",
                            "Incline-se para a frente, mantendo as costas retas e a cabeça erguida. Certifique-se de que seus braços estejam pendurados diretamente abaixo dos seus ombros.",
                            "Levante os halteres em direção aos seus ombros, dobrando os cotovelos. Contraia os músculos das costas enquanto levanta os pesos.",
                            "Pause por um segundo no topo do movimento e, em seguida, abaixe lentamente os pesos de volta à posição inicial."
                        )
                    ),
                    Array(
                        "nome" => "Remada com halter unilateral",
                        "nome_url"=>"Remada-com-halter-unilateral",
                        "desc" => "Remada com halter unilateral no banco",
                        "img" => "Dumbbell-Row.webp",
                        "musculo_trabalhado" => "Deltoide posterior, deltoide lateral, trapézio",

                        "beneficios" => "A remada unilateral com halteres, também conhecida como remada inclinada unilateral, é um exercício que tem como objetivo principal fortalecer e desenvolver a musculatura das costas, em especial do latíssimo do dorso. Além disso, esse exercício trabalha também a musculatura dos ombros e dos braços, auxiliando na melhora da postura e da estabilidade corporal. Entre os benefícios da remada inclinada unilateral com halteres, destacam-se o aumento da força e da resistência muscular, o desenvolvimento da simetria muscular entre os lados direito e esquerdo do corpo, a melhora da estabilidade da coluna vertebral e a prevenção de lesões nas costas. Outra vantagem da remada inclinada unilateral com halteres é que ela pode ser realizada em qualquer lugar, desde que se tenha um par de halteres. Por ser um exercício unilateral, ele também permite corrigir desequilíbrios musculares que podem levar a lesões ou dores nas costas.",

                        "passos" => Array(
                            "Pegue um halter com uma das mãos e posicione o joelho do mesmo lado em um banco. A outra perna deve ficar apoiada no chão e o tronco deve ficar inclinado para frente, mantendo a coluna ereta.",
                            "Com o halter na mão, deixe o braço estendido para baixo, na altura do joelho. Esse será o início do movimento.",
                            "Levante o halter até a altura do peito, mantendo o cotovelo próximo ao corpo e o punho próximo ao abdômen. Contraia o músculo das costas durante o movimento.",
                            "Pause por um momento na posição de pico, com o halter próximo ao peito.",
                            "Em seguida, abaixe o halter lentamente até a posição inicial, mantendo o controle do movimento e mantendo a postura correta.",
                            "Repita o movimento por várias repetições e, em seguida, mude de lado para realizar a remada com a outra mão."
                        )
                    ),
                    Array(
                        "nome" => "Desenvolvimento com halteres",
                        "nome_url"=>"Desenv-halteres",
                        "desc" => "Desenvolvimento com halteres sentado",
                        "img" => "desenv-ombros.webp",
                        "musculo_trabalhado" => "Deltoide posterior, deltoide lateral, deltoide anterior",

                        "beneficios" => "O exercício de desenvolvimento com halteres oferece diversos benefícios abrangentes para o corpo. Ao realizar esse movimento, você fortalece significativamente os músculos dos ombros, incluindo o deltoides anterior, médio e posterior. Esse fortalecimento não apenas contribui para o desenvolvimento de ombros mais largos e definidos, mas também melhora a estabilidade e a funcionalidade do complexo do ombro, reduzindo o risco de lesões. Além disso, o desenvolvimento com halteres ativa os músculos estabilizadores, incluindo os músculos do core, promovendo uma maior coordenação e equilíbrio. Esse exercício é altamente adaptável, permitindo ajustes na amplitude de movimento e nas cargas, proporcionando uma progressão gradual e adequada às capacidades individuais. Incorporar o desenvolvimento com halteres em sua rotina de treino contribuirá não apenas para um físico mais simétrico, mas também para o aprimoramento da força funcional dos membros superiores.",

                        "passos" => Array(
                            "Posicione-se, sentado, com os pés afastados na largura dos ombros. Segure um halter em cada mão, palmas viradas para frente e cotovelos flexionados a 90 graus.",
                            "Eleve os halteres simultaneamente em direção ao teto, mantendo o movimento controlado. Estenda os cotovelos no ponto mais alto, evitando hiperextensão.",
                            "Baixe os halteres de volta à posição inicial de maneira controlada, mantendo a respiração controlada, inspirando durante a descida e expirando durante a elevação.",
                            "Mantenha a postura ereta, ombros para trás, e o núcleo firme. Certifique-se de um arco completo nos ombros para aproveitar a amplitude total de movimento."
                        )
                    )
                ),
                "Peitoral" => Array(
                    Array(
                        "nome" => "Supino reto",
                        "nome_url"=>"Supino-reto",
                        "desc" => "Supino reto",
                        "img" => "Barbell-Bench-Press.webp",
                        "musculo_trabalhado" => "Peitoral, tríceps, ombros",

                        "beneficios" => "O supino é um exercício que trabalha principalmente os músculos do peitoral, tríceps e ombros. Além disso, também pode ajudar no fortalecimento dos músculos das costas e dos braços. Ao executar o supino regularmente, é possível obter benefícios como o aumento da força muscular, melhora na postura, prevenção de lesões e aumento da densidade óssea. Vale lembrar que a execução correta do exercício e o uso de cargas adequadas são fundamentais para evitar lesões e garantir a efetividade do treino.",

                        "passos" => Array(
                            "Deite-se em um banco de supino com os pés apoiados no chão e as costas completamente apoiadas no banco.",
                            "Pegue a barra com as mãos em uma distância um pouco mais larga do que a largura dos ombros.",
                            "Levante a barra da estrutura do suporte, estendendo os braços completamente.",
                            "Abaixe a barra lentamente em direção ao peito, mantendo os cotovelos próximos ao corpo.",
                            "Pare a descida quando a barra estiver a cerca de 2 a 3 centímetros do seu peito.",
                            "Empurre a barra de volta para cima, estendendo os braços completamente e repetindo o movimento."
                        )
                    ),
                    Array(
                        "nome" => "Peck-deck/Voador",
                        "nome_url"=>"Peck-deck-voador",
                        "desc" => "Peck-deck ou voador",
                        "img" => "peckdeck.webp",
                        "musculo_trabalhado" => "Peitoral, deltoroides",

                        "beneficios" => "O exercício de Peck Deck ou Voador trabalha principalmente o músculo peitoral maior, mas também pode envolver os músculos deltoides. Os benefícios incluem o desenvolvimento da força e resistência muscular, melhora na estabilidade dos ombros e aumento da capacidade funcional do peitoral. O movimento isolado realizado no Peck Deck ou Voador ajuda a direcionar a tensão para a área alvo do peitoral, resultando em uma maior ativação e hipertrofia muscular. Este exercício também pode ser uma ótima opção para pessoas que desejam evitar tensão excessiva nas articulações do ombro, pois oferece suporte adicional aos ombros.",

                        "passos" => Array(
                            "Sente-se no aparelho, ajustando o encosto de acordo com sua altura;
                            Ajuste os pegadores para que seus braços fiquem em um ângulo de 90 graus.",
                            "Coloque os antebraços no suporte e segure os pegadores com as mãos;
                            Mantenha a postura ereta e contraia os músculos do abdômen e das costas.",
                            "Inspire profundamente e, ao expirar, empurre os pegadores para frente até que seus braços se encontrem estendidos;
                            Retorne à posição inicial lentamente, mantendo a tensão nos músculos do peitoral.",
                            "Repita o movimento pelo número de repetições desejado."
                        )
                    ),
                    Array(
                        "nome" => "Cross Over",
                        "nome_url"=>"Cross-over",
                        "desc" => "Cross over na polia",
                        "img" => "Cable-Crossover.webp",
                        "musculo_trabalhado" => "Peitoral, deltoroides",

                        "beneficios" => "O exercício de cross over é um movimento de treinamento de resistência que trabalha principalmente os músculos do peito, especificamente os músculos peitorais maiores. Além disso, ele também recruta os músculos dos ombros como músculos secundários.
                        Os benefícios do cross over incluem o aumento da força e resistência muscular do peito, a melhoria da postura e estabilidade dos ombros e uma melhor definição dos músculos peitorais. É um exercício versátil que pode ser realizado em diferentes variações para enfatizar diferentes partes do peito.",

                        "passos" => Array(
                            "Posicione-se em pé entre duas polias com as mãos segurando as alças de cada polia, mantendo os cotovelos ligeiramente flexionados.",
                            "Dê um passo à frente para criar tensão na corda.",
                            "Incline-se para a frente, mantendo as costas retas, os abdominais contraídos e o peito aberto.",
                            "Mantenha os braços estendidos na altura dos ombros, na linha média do corpo",
                            "Inspire enquanto traz as mãos para frente, em um movimento cruzando as mãos em frente ao peito.",
                            "Expire enquanto retorna lentamente as mãos à posição inicial, controlando a resistência."
                        )
                    ),
                    Array(
                        "nome" => "Cross Over na polia baixa",
                        "nome_url"=>"Cross-over-na-polia-baixa",
                        "desc" => "Cross Over na polia baixa",
                        "img" => "Low-Cable-Crossover.webp",
                        "musculo_trabalhado" => "Peitoral, deltoroides",

                        "beneficios" => "O exercício Cross Over Upper é uma variação do Cross Over tradicional, sendo uma opção eficiente para trabalhar os músculos do peitoral. Alguns dos principais benefícios desse exercício incluem o aumento da força e resistência dos músculos do peito, além da melhora na estabilidade dos ombros. Os músculos principais trabalhados durante o Cross Over Upper são os músculos do peitoral maior, especialmente a porção clavicular, que é responsável pela projeção e forma arredondada dos músculos do peito. Além disso, os músculos dos ombros também são recrutados durante o movimento.",

                        "passos" => Array(
                            "Posicione a polia em uma altura baixa, abaixo da altura dos tornozelos.",
                            "Fique de pé entre as duas polias, com as pernas ligeiramente afastadas e as mãos segurando as alças das polias.",
                            "Mantenha os braços ligeiramente flexionados ao lado do corpo.",
                            "Dê um passo à frente com um pé para manter o equilíbrio.",
                            "Puxe as alças das polias para a frente do corpo, mantendo os cotovelos na altura dos ombros.",
                            "Pause por um segundo com os braços esticados à frente do corpo;
                            Volte à posição inicial de forma controlada."
                        )
                    ),
                    Array(
                        "nome" => "Barra paralela",
                        "nome_url"=>"Barra-paralela",
                        "desc" => "Barra paralela",
                        "img" => "Chest-Dips.webp",
                        "musculo_trabalhado" => "Peitoral, deltoroides, triceps",

                        "beneficios" => "Fazer barra paralela pode trazer benefícios significativos para o desenvolvimento da parte superior do corpo, principalmente tríceps, ombros e peitorais. O exercício é eficiente para aumentar a força e resistência muscular nessas áreas, além de contribuir para a melhora da postura e estabilidade corporal. Além disso, como é um exercício que utiliza o peso do próprio corpo, pode ser feito em qualquer lugar e não requer equipamentos sofisticados, o que o torna uma opção acessível e prática para incluir na rotina de treinamento.",

                        "passos" => Array(
                            "Encontre uma barra paralela e coloque-a em uma posição segura e estável.",
                            "Posicione-se entre as barras e segure cada uma com as mãos na altura dos ombros.",
                            "Estenda os braços e levante os pés do chão, mantendo-os juntos.
                            Mantenha o corpo em linha reta, com os cotovelos estendidos e os ombros para trás.",
                            "Flexione os braços e abaixe o corpo até que os braços formem um ângulo de 90 graus.",
                            "Empurre o corpo de volta à posição inicial e repita o movimento."
                        )
                    ),
                    Array(
                        "nome" => "Supino fechado com halteres",
                        "nome_url"=>"Supino-fechado-com-halteres",
                        "desc" => "Supino fechado com halteres",
                        "img" => "Close-Grip-Dumbbell-Press.webp",
                        "musculo_trabalhado" => "Peitoral, deltoide anterior, triceps",

                        "beneficios" => "O supino fechado com halteres é um exercício excelente para trabalhar os músculos do peitoral e dos tríceps. Além disso, também ajuda a fortalecer os ombros e a estabilização do core. É um movimento que permite um maior controle e amplitude de movimento em comparação com o supino fechado na barra. Por isso, é uma ótima opção para quem busca aumentar a força e a hipertrofia muscular, além de ajudar a melhorar a estabilidade do tronco e a prevenir lesões.",

                        "passos" => Array(
                            "Comece deitado em um banco plano com os halteres em cada mão, com as palmas voltadas para dentro e os braços estendidos perpendicularmente ao corpo.",
                            "Mantenha os cotovelos próximos ao corpo e dobre-os lentamente até que os halteres estejam próximos um do outro, perto da altura do peito.",
                            "Empurre os halteres para cima, estendendo completamente os braços e mantendo os cotovelos próximos ao corpo.",
                            "Lentamente, abaixe os halteres até a posição inicial, mantendo os cotovelos próximos ao corpo.",
                            "Repita o movimento para completar o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Supino fechado inclinado com halter",
                        "nome_url"=>"Supino-fechado-inclinado-com-um-halter",
                        "desc" => "Supino fechado com um halter",
                        "img" => "Close-grip-Incline-Dumbbell-Press.webp",
                        "musculo_trabalhado" => "Peitoral, deltoide anterior, triceps",

                        "beneficios" => "O supino inclinado fechado com um halter é um exercício que traz diversos benefícios para o peitoral e tríceps. Ao realizar o movimento, o ângulo inclinado trabalha a porção superior do peitoral, enquanto o fechamento das mãos no halter coloca mais ênfase no tríceps. Além disso, esse exercício pode ajudar a melhorar a estabilidade dos ombros e fortalecer a região do núcleo. Por ser uma variação do supino fechado tradicional, o supino inclinado fechado com um halter pode proporcionar uma maior variedade de estímulos para os músculos envolvidos no movimento.",

                        "passos" => Array(
                            "Deite-se em um banco inclinado com um halter, com as palmas voltadas para dentro e os braços estendidos acima do peito segurando o halter.",
                            "Mantenha os cotovelos próximos ao corpo enquanto abaixa o halter em direção ao seu peito, mantendo os braços em um ângulo de 45 graus em relação ao corpo.",
                            "Ao atingir a posição mais baixa possível sem sentir dor ou desconforto, empurre o halter de volta à posição inicial, estendendo os braços completamente.",
                            "Certifique-se de manter o núcleo engajado e a postura correta ao longo do exercício.",
                            "Repita o movimento por várias repetições, mantendo a técnica adequada e um ritmo controlado."
                        )
                    ),
                    Array(
                        "nome" => "Supino vertical na máquina",
                        "nome_url"=>"Supino-vertical-na-maquina",
                        "desc" => "Supino vertical na máquina",
                        "img" => "Lever-Chest-Press.webp",
                        "musculo_trabalhado" => "Peitoral, deltoide anterior, triceps",

                        "beneficios" => "O supino vertical na máquina é um exercício que oferece diversos benefícios para os músculos do peitoral, tríceps e ombros. A máquina guia o movimento, permitindo que o praticante mantenha uma boa postura e execute o movimento corretamente, reduzindo o risco de lesões. Além disso, por se tratar de um movimento vertical, o supino na máquina trabalha especialmente a porção superior dos músculos peitorais, ajudando no desenvolvimento da força e hipertrofia nessa região. Outro benefício é a variação de carga, possibilitando que o praticante utilize mais peso com segurança, o que é importante para o ganho de massa muscular.",

                        "passos" => Array(
                            "Ajuste o banco da máquina para a sua altura e sente-se com as costas retas e os pés firmes no chão.",
                            "Segure as alças da máquina com as mãos e empurre-as para frente.",
                            "Pare quando os braços estiverem completamente estendidos.",
                            "Abaixe devagar as alças de volta à posição inicial.",
                            "Repita o movimento para realizar as repetições desejadas."
                        )
                    ),
                    Array(
                        "nome" => "Crucifixo declinado com halteres",
                        "nome_url"=>"Crucifixo-declinado-com-halteres",
                        "desc" => "Crucifixo declinado com halteres",
                        "img" => "Decline-Dumbbell-Fly.webp",
                        "musculo_trabalhado" => "Peitoral, deltoide anterior, biceps",

                        "beneficios" => "Fazer crucifixo com halteres em superfície declinada é um excelente exercício para trabalhar os músculos do peitoral maior e também pode ser útil para fortalecer os ombros, tríceps e  biceps secundariamente. A inclinação do banco ajuda a direcionar o esforço do movimento para a porção inferior do peitoral, permitindo que você alcance um bom alongamento e contração muscular. Isso pode ajudar a melhorar a definição e a tonificação do peito.",

                        "passos" => Array(
                            "Deite-se em um banco inclinado com a cabeça mais baixa do que os pés e mantenha os pés fixados em algo.",
                            "Segure um halter em cada mão, com os braços estendidos acima do peito e as palmas das mãos voltadas uma para a outra.",
                            "Mantendo os cotovelos levemente flexionados, abaixe os braços para os lados até sentir um alongamento confortável no peito.",
                            "Retorne lentamente os braços à posição inicial, contraindo os músculos do peito para levantar os halteres."
                        )
                    ),
                    Array(
                        "nome" => "Supino declinado com halteres",
                        "nome_url"=>"Crucifixo-com-halteres-declinado",
                        "desc" => "Crucifixo com halteres declinado",
                        "img" => "Decline-Dumbbell-Press.webp",
                        "musculo_trabalhado" => "Peitoral, deltoide anterior, tríceps",

                        "beneficios" => "O supino com halteres em superfície declinada é um exercício que traz diversos benefícios para o peitoral, como a maior ênfase na porção inferior do músculo, além de recrutar também os músculos estabilizadores do tronco e do ombro. Além disso, o uso dos halteres permite uma maior amplitude de movimento e um melhor trabalho de simetria entre os lados do corpo. É um ótimo exercício para quem busca variações no treino de peitoral e um trabalho mais intenso na porção inferior do músculo.",

                        "passos" => Array(
                            "Deite-se em um banco declinado e segure os halteres com as palmas das mãos voltadas para os seus pés.",
                            "Posicione os halteres acima do seu peito, mantendo os braços estendidos.",
                            "Abaixe lentamente os halteres em direção ao peito, mantendo os cotovelos levemente abertos.",
                            "Pause brevemente e, em seguida, levante os halteres de volta para a posição inicial, estendendo os braços novamente.",
                            "Repita o movimento pelo número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Crucifixo reto com halteres",
                        "nome_url"=>"Crucifixo-reto-com-halteres",
                        "desc" => "Crucifixo reto com halteres",
                        "img" => "Dumbbell-Fly.webp",
                        "musculo_trabalhado" => "Peitoral, deltoide anterior, tríceps, bíceps",

                        "beneficios" => "O exercício crucifixo reto com halteres é um ótimo movimento para fortalecer e tonificar os músculos do peito, especialmente a porção central e inferior. Além disso, ele pode ajudar a melhorar a estabilidade dos ombros e a flexibilidade das articulações. Outros benefícios incluem a melhoria da postura e do equilíbrio muscular, já que o exercício trabalha músculos acessórios como os deltoides e os tríceps. É importante ressaltar que a realização correta do exercício, com uma boa técnica e o uso de cargas adequadas, é fundamental para obter os benefícios desejados.",

                        "passos" => Array(
                            "Deite-se em um banco plano com um halter em cada mão, estendendo-os em direção ao teto.",
                            "Abra os braços lentamente, mantendo os halteres alinhados com os ombros. Desça os braços até que os halteres fiquem paralelos ao solo.",
                            "Pause brevemente no fundo da posição e, em seguida, traga os halteres de volta à posição inicial, trazendo-os sobre o peito e contraindo o peitoral.",
                            "Repita o movimento mantendo o controle do peso em todo o momento."
                        )
                    ),
                    Array(
                        "nome" => "Supino reto com halteres",
                        "nome_url"=>"Supino-reto-com-halteres",
                        "desc" => "Supino reto com halteres",
                        "img" => "Dumbbell-Press.webp",
                        "musculo_trabalhado" => "Peitoral, deltoide anterior, tríceps",

                        "beneficios" => "O supino reto com halteres é um exercício que trabalha principalmente o peitoral maior, além dos ombros e tríceps. Ele oferece uma grande vantagem em relação ao supino com barra, pois permite um maior alongamento dos músculos do peito e uma maior amplitude de movimento. Outro benefício é a ativação de músculos estabilizadores, o que ajuda a melhorar a força geral do tronco e a prevenir lesões. Além disso, o uso de halteres permite um equilíbrio muscular mais simétrico e ajuda a corrigir desequilíbrios entre os lados do corpo.",

                        "passos" => Array(
                            "Deite-se em um banco plano, com os pés apoiados no chão e segure um halter em cada mão, mantendo os cotovelos estendidos e as palmas das mãos voltadas para a frente.",
                            "Lentamente, abaixe os halteres até que fiquem próximos ao seu peito, mantendo os cotovelos levemente abertos.",
                            "Pause brevemente e, em seguida, empurre os halteres para cima em um movimento controlado até que os braços estejam totalmente estendidos acima do peito.",
                            "Repita o movimento, respirando profundamente e mantendo a postura correta durante todo o exercício."
                        )
                    ),
                    Array(
                        "nome" => "Pullover com halter",
                        "nome_url"=>"Pullover-com-halter",
                        "desc" => "Pullover com halter",
                        "img" => "Dumbbell-Pullover.webp",
                        "musculo_trabalhado" => "Peitoral, deltoide posterior, tríceps",

                        "beneficios" => "O exercício pullover é um ótimo movimento para trabalhar múltiplos grupos musculares, incluindo o peitoral, o tríceps, os ombros, o latíssimo do dorso e o serrátil anterior. Além disso, ele também ajuda a melhorar a amplitude de movimento dos ombros e a flexibilidade torácica. Por envolver diversos músculos, o pullover é um exercício bastante efetivo para ganho de força e hipertrofia muscular na região do tronco. Ele pode ser feito com halteres, uma barra ou uma máquina específica, e é um excelente complemento para o treino de musculação.",

                        "passos" => Array(
                            "Deite-se em um banco com a cabeça no final e segure um halter com as duas mãos acima do peito.",
                            "Mantenha os braços estendidos e abaixe o halter lentamente atrás da cabeça, mantendo os cotovelos ligeiramente flexionados.",
                            "Respire fundo e sinta o alongamento nos músculos do peito e das costas.",
                            "Volte à posição inicial levantando o halter acima do peito até que os braços fiquem novamente estendidos.",
                            "Repita o movimento por várias repetições."
                        )
                    ),
                    Array(
                        "nome" => "Crossover inferior com halteres",
                        "nome_url"=>"Crossover-inferior-com-halteres",
                        "desc" => "Crossover inferior com halteres",
                        "img" => "Dumbbell-Upward-Fly.webp",
                        "musculo_trabalhado" => "Peitoral, deltoide posterior, tríceps",

                        "beneficios" => "O exercício pullover é um ótimo movimento para trabalhar múltiplos grupos musculares, incluindo o peitoral, o tríceps, os ombros, o latíssimo do dorso e o serrátil anterior. Além disso, ele também ajuda a melhorar a amplitude de movimento dos ombros e a flexibilidade torácica. Por envolver diversos músculos, o pullover é um exercício bastante efetivo para ganho de força e hipertrofia muscular na região do tronco. Ele pode ser feito com halteres, uma barra ou uma máquina específica, e é um excelente complemento para o treino de musculação.",

                        "passos" => Array(
                            "Segure um halter em cada mão com as palmas das mãos voltadas para frente.",
                            "Coloque-se em pé com os pés afastados na largura dos ombros.",
                            "Mantenha os braços estendidos e os halteres na altura dos quadris.",
                            "Levante os braços na frente do corpo em direção ao outro lado, até os halteres se tocarem.",
                            "Volte à posição inicial e repita o movimento."
                        )
                    ),
                    Array(
                        "nome" => "Crossover na polia alta",
                        "nome_url"=>"Crossover-na-polia-alta",
                        "desc" => "Crossover na polia alta",
                        "img" => "High-Cable-Crossover.webp",
                        "musculo_trabalhado" => "Peitoral, deltoide anterior",

                        "beneficios" => "O Crossover com polia alta é um exercício de treinamento de força que visa principalmente o fortalecimento dos músculos do peito. Esse exercício utiliza a resistência dos cabos da polia alta, permitindo que você trabalhe a musculatura de forma eficaz. Ele também ajuda a melhorar a estabilidade dos ombros e a aumentar a força muscular em geral. O Crossover com polia alta é uma ótima opção para diversificar o treino de peito, além de ser um exercício de baixo impacto, o que significa que é menos estressante para as articulações.",

                        "passos" => Array(
                            "Comece posicionando as polias da máquina de cabo em sua posição mais alta.",
                            "Em seguida, pegue as alças de cada lado e dê um passo à frente.",
                            "Mantenha os joelhos levemente flexionados, e incline ligeiramente o tronco para a frente.",
                            "Mantenha os braços estendidos e com as palmas das mãos voltadas para baixo.",
                            "Inspire e comece a puxar as alças em direção ao centro do corpo, mantendo os braços estendidos e os cotovelos levemente flexionados.",
                            "Ao chegar ao ponto de contração máxima, expire e segure por um segundo antes de lentamente retornar à posição inicial."
                        )
                    ),
                    Array(
                        "nome" => "Supino inclinado",
                        "nome_url"=>"Supino-inclinado",
                        "desc" => "Supino inclinado",
                        "img" => "Incline-Barbell-Bench-Press.webp",
                        "musculo_trabalhado" => "Peitoral, deltoide anterior, tríceps",

                        "beneficios" => "O supino inclinado com barra é um exercício excelente para trabalhar a parte superior do peitoral, ombros e tríceps. Ao inclinar o banco, a ênfase é colocada no peitoral superior, o que pode ajudar a desenvolver um visual mais definido e simétrico nos músculos do peito. Além disso, como é um exercício composto, envolve múltiplos grupos musculares simultaneamente, o que pode resultar em ganhos de força e massa muscular mais rápidos. Outro benefício é que pode ser realizado com um peso maior do que o supino reto, o que pode estimular ainda mais o crescimento muscular.",

                        "passos" => Array(
                            "Comece ajustando o banco em um ângulo de cerca de 30 a 45 graus e deite-se com as costas no banco e os pés apoiados no chão.",
                            "Posicione-se sob a barra de forma que ela fique acima do meio do peito.",
                            "Pegue a barra com as mãos em uma distância um pouco mais larga do que a largura dos ombros e levante-a do suporte.",
                            "Lentamente, abaixe a barra até que ela fique perto do peito, mas sem tocá-lo, enquanto você inspira.",
                            "Em seguida, empurre a barra para cima, estendendo os braços enquanto expira.",
                            "Repita o movimento."
                        )
                    ),
                    Array(
                        "nome" => "Crucifixo inclinado",
                        "nome_url"=>"Crucifixo-inclinado",
                        "desc" => "Crucifixo inclinado",
                        "img" => "Incline-dumbbell-Fly.webp",
                        "musculo_trabalhado" => "Peitoral, deltoide anterior, bíceps",

                        "beneficios" => "O exercício de crucifixo inclinado é uma excelente maneira de fortalecer e tonificar os músculos do peitoral superior, ombros,tríceps e biceps. Ao realizar o movimento em um banco inclinado, o ângulo trabalha mais a porção superior do músculo peitoral, proporcionando um aspecto mais definido e volumoso ao peitoral. Além disso, o exercício trabalha a estabilidade do core e das escápulas, ajudando na prevenção de lesões e melhorando a postura. O crucifixo inclinado com halteres também permite um maior alongamento muscular, promovendo a flexibilidade e mobilidade dos ombros.",

                        "passos" => Array(
                            "Ajuste o banco em um ângulo de 30 a 45 graus, de forma que você possa realizar o movimento de forma confortável e segura.",
                            "Pegue um par de halteres e deite-se de costas no banco inclinado, com os pés apoiados no chão.",
                            "Comece segurando os halteres acima do peito, com as palmas das mãos voltadas uma para a outra.",
                            "Abra os braços em direção aos lados, mantendo uma ligeira flexão nos cotovelos, até sentir um leve alongamento nos músculos do peito.",
                            "Pause brevemente nessa posição e depois traga os halteres de volta para a posição inicial, contraindo os músculos do peito para realizar o movimento de volta.",
                            "Repita o movimento por várias repetições, mantendo uma técnica adequada."
                        )
                    ),
                    Array(
                        "nome" => "Supino inclinado com halteres",
                        "nome_url"=>"Supino-inclinado-com-halteres",
                        "desc" => "Supino inclinado com halteres",
                        "img" => "Incline-Dumbbell-Press.webp",
                        "musculo_trabalhado" => "Peitoral, deltoide anterior, tríceps",

                        "beneficios" => "O supino inclinado com halteres é um exercício que trabalha principalmente o peitoral superior, mas também envolve outros músculos como os ombros e tríceps. Além disso, como é realizado com halteres, oferece a vantagem de trabalhar os músculos de forma mais equilibrada, evitando desequilíbrios musculares. O exercício também ajuda a melhorar a estabilidade dos ombros e a aumentar a força e a resistência muscular do peitoral.",

                        "passos" => Array(
                            "Deite-se em um banco inclinado, com as costas firmes no apoio e os pés apoiados no chão.",
                            "Segure um halter em cada mão e posicione os braços estendidos acima do peito, com as palmas das mãos voltadas para a frente.",
                            "Abaixe os halteres lentamente, dobrando os cotovelos até que os braços estejam paralelos ao chão.",
                            "Pause brevemente e, em seguida, empurre os halteres de volta para a posição inicial, estendendo completamente os braços.",
                            "Repita o movimento por várias repetições, mantendo a técnica correta e evitando balançar o corpo."
                        )
                    ),
                    Array(
                        "nome" => "Flexão",
                        "nome_url"=>"Flexao",
                        "desc" => "flexao",
                        "img" => "flexao-de-bracos.webp",
                        "musculo_trabalhado" => "Peitoral, deltoide anterior, tríceps",

                        "beneficios" => "Fazer flexão é uma excelente forma de exercitar vários músculos do corpo, incluindo peitoral, ombros, tríceps e abdominais. Além disso, é um exercício que pode ser feito em qualquer lugar, sem a necessidade de equipamentos especiais. As flexões também ajudam a desenvolver força e resistência muscular, e podem ser facilmente adaptadas para diferentes níveis de condicionamento físico, tornando-se um exercício versátil e eficaz. Além disso, por ser um exercício que utiliza o peso corporal, as flexões podem ajudar a melhorar a estabilidade e o equilíbrio.",

                        "passos" => Array(
                            "Comece em uma posição de prancha com as mãos apoiadas no chão, um pouco mais largas do que a largura dos ombros, e os pés juntos.",
                            "Certifique-se de que seu corpo forme uma linha reta dos calcanhares até a cabeça.",
                            "Abaixe o corpo, mantendo o corpo em linha reta e os cotovelos próximos ao corpo, até que o peito esteja a alguns centímetros do chão.",
                            "Empurre de volta para cima até que os braços estejam completamente estendidos, sem trancar os cotovelos.",
                            "Repita por várias repetições."
                        )
                    ),
                    Array(
                        "nome" => "Supino declinado",
                        "nome_url"=>"Supino-declinado",
                        "desc" => "Supino declinado",
                        "img" => "Decline-Barbell-Bench-Press.webp",
                        "musculo_trabalhado" => "Peitoral, deltoide anterior, tríceps",

                        "beneficios" => "O exercício de supino declinado oferece uma série de benefícios para o desenvolvimento dos músculos do peitoral, ombros e tríceps. Ao realizar esse exercício, você enfatiza a parte inferior do peitoral, ajudando a criar uma aparência mais definida e volumosa nessa região. Além disso, o supino declinado também fortalece os músculos estabilizadores do ombro, contribuindo para uma melhor estabilidade e prevenção de lesões nessa área. O movimento de empurrar a barra para cima envolve os músculos do tríceps, proporcionando um treinamento eficaz para essa região. O exercício de supino declinado também pode auxiliar no aumento da força e potência no peitoral e nos ombros, sendo útil para atletas e praticantes de musculação.",

                        "passos" => Array(
                            "Deite-se em um banco declinado, com os pés firmemente encaixados no apoio.",
                            "Posicione os ombros e a parte superior das costas no banco, garantindo uma postura estável.",
                            "Pegue a barra com as mãos em uma largura um pouco maior do que a largura dos ombros, com uma pegada pronada.",
                            "Retire a barra do suporte e abaixe-a lentamente em direção ao peito, mantendo os cotovelos ligeiramente flexionados.",
                            "Pare quando a barra estiver próxima ao peito, mas não toque nele.",
                            "Expire e empurre a barra para cima, estendendo completamente os braços.",
                            "Mantenha os cotovelos ligeiramente flexionados durante todo o movimento para evitar estresse excessivo nas articulações do ombro.",
                            "Pause por um momento no topo do movimento, concentrando-se na contração dos músculos do peitoral.",
                            "Inspire e abaixe a barra controladamente até a posição inicial.",
                            "Repita o movimento para o número desejado de repetições, mantendo uma respiração adequada e uma técnica correta."
                        )
                    )
                ),
                "Biceps" => Array(
                    Array(
                        "nome" => "Rosca alternada com halteres",
                        "nome_url"=>"Rosca-alternada-com-halteres",
                        "desc" => "Rosca alternada com halteres",
                        "img" => "Dumbbell-Curl.webp",
                        "musculo_trabalhado" => "Biceps, braquial",

                        "beneficios" => "A rosca alternada com halteres é um exercício de isolamento que tem como foco principal os músculos dos braços, especialmente o bíceps braquial. Além de desenvolver o bíceps, esse exercício também trabalha o antebraço e o músculo braquial, proporcionando mais força e definição muscular. Além disso, a rosca alternada com halteres é uma opção interessante para evitar desequilíbrios musculares, uma vez que os braços trabalham independentemente um do outro, garantindo que ambos sejam trabalhados de maneira equilibrada.",

                        "passos" => Array(
                            "Segure um halter em cada mão e fique em pé com os pés afastados na largura dos ombros.",
                            "Mantenha os braços estendidos ao lado do corpo e as palmas das mãos voltadas para dentro.",
                            "Levante um dos halteres em direção ao ombro, mantendo o cotovelo próximo ao corpo e o braço bem fixo.",
                            "Pause quando o halter estiver próximo ao ombro e contraia o músculo bíceps",
                            "Retorne o halter à posição inicial enquanto começa a levantar o outro halter em direção ao ombro.",
                            "Repita o movimento alternando os braços até completar o número de repetições desejado."
                        )
                    ),
                    Array(
                        "nome" => "Rosca direta com halteres",
                        "nome_url"=>"Rosca-direta-com-halteres",
                        "desc" => "Rosca direta com halteres",
                        "img" => "Double-Arm-Dumbbell-Curl.webp",
                        "musculo_trabalhado" => "Biceps, braquial",

                        "beneficios" => "A rosca direta com halteres é um exercício de isolamento altamente eficaz para o treinamento dos braços. Ao realizar este exercício, o bíceps braquial é o principal músculo trabalhado, juntamente com os músculos do antebraço. Além disso, a rosca direta com halteres pode ajudar a melhorar a força e o tamanho dos braços, além de auxiliar no desenvolvimento de um maior controle muscular e resistência. É um exercício versátil, que pode ser realizado em diferentes posições, como sentado ou em pé, e pode ser facilmente adicionado à rotina de treinamento de qualquer pessoa em busca de braços mais fortes e definidos.",

                        "passos" => Array(
                            "Fique em pé com as pernas afastadas na largura dos ombros, segurando um halter em cada mão com as palmas voltadas para o corpo.",
                            "Mantenha os cotovelos próximos ao corpo e levante os halteres em direção aos ombros, mantendo as palmas voltadas para o corpo durante todo o movimento.",
                            "Ao chegar ao topo do movimento, aperte os bíceps e segure por um segundo antes de abaixar lentamente os halteres de volta à posição inicial.",
                            "Repita o movimento para o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Rosca direta com barra reta",
                        "nome_url"=>"Rosca-direta-com-barra-reta",
                        "desc" => "Rosca direta com barra reta",
                        "img" => "Barbell-Curl.webp",
                        "musculo_trabalhado" => "Biceps, braquial",

                        "beneficios" => "A rosca direta com barra reta é um exercício popular para o fortalecimento dos braços e melhoria do desempenho em atividades do dia a dia que envolvam a região, como levantar objetos pesados. Esse exercício tem como principal alvo o músculo bíceps braquial, mas também trabalha o braquial e o braquiorradial, além de outros músculos estabilizadores dos braços. Ao realizar a rosca direta com barra reta corretamente, você pode aumentar a força e o tamanho dos seus músculos do braço, o que pode levar a uma melhora na aparência física e aumento da sua capacidade funcional.",

                        "passos" => Array(
                            "Fique em pé com os pés afastados na largura dos ombros e segure a barra com as mãos com as palmas voltadas para cima e com as mãos afastadas na largura dos ombros.",
                            "Mantenha os cotovelos próximos ao corpo e as costas retas. Levante a barra até a altura dos ombros, mantendo os braços retos.",
                            "Flexione os cotovelos e levante a barra em direção ao peito, mantendo os braços próximos ao corpo.",
                            "Pause brevemente no topo do movimento e, em seguida, abaixe a barra lentamente de volta à posição inicial.",
                            "Repita o movimento para completar a série."
                        )
                    ),
                    Array(
                        "nome" => "Rosca direta no cabo",
                        "nome_url"=>"Rosca-direta-no-cabo",
                        "desc" => "Rosca direta no cabo",
                        "img" => "cable-curl.webp",
                        "musculo_trabalhado" => "Biceps, braquial",

                        "beneficios" => "A rosca direta no cabo é um exercício excelente para trabalhar os músculos do braço, especificamente o bíceps braquial. Este exercício também pode ajudar a melhorar a força e estabilização do pulso. Além disso, a realização deste exercício com o cabo ao invés de uma barra reta permite uma maior amplitude de movimento e pode reduzir a tensão no antebraço, minimizando assim o risco de lesões. É um exercício bastante versátil que pode ser facilmente modificado para atender às necessidades individuais de cada praticante.",

                        "passos" => Array(
                            "Selecione o peso adequado no aparelho de cabo, de acordo com sua capacidade física e nível de treinamento.",
                            "Fique de pé em frente ao aparelho, segurando a barra com as duas mãos com as palmas das mão para cima.",
                            "Mantenha os braços estendidos ao longo do corpo, com os cotovelos levemente flexionados.",
                            "Mantenha o abdômen contraído e a postura ereta.",
                            "Inicie o movimento flexionando os cotovelos e levantando a barra em direção ao peito, mantendo os braços próximos ao corpo e os pulsos firmes.",
                            "Pare o movimento quando a barra estiver próxima ao peito e mantenha a contração muscular por um segundo.",
                            "Retorne a barra à posição inicial de forma controlada, estendendo completamente os cotovelos."
                        )
                    ),
                    Array(
                        "nome" => "Rosca direta com barra W pegada fechada",
                        "nome_url"=>"Rosca-direta-com-barra-w-pegada-fechada",
                        "desc" => "Rosca direta com barra W pegada fechada",
                        "img" => "Close-Grip-Z-Bar-Curl.webp",
                        "musculo_trabalhado" => "Biceps, braquial",

                        "beneficios" => "A rosca direta com barra W pegada fechada é um excelente exercício para fortalecer e tonificar os músculos dos braços, especialmente o bíceps braquial. Ao contrário da rosca direta com barra reta, a pegada fechada permite que você aplique mais pressão no bíceps e menos no antebraço, o que pode ajudar a evitar lesões. Além disso, como a barra W tem uma curvatura natural, ela ajuda a manter a posição correta dos pulsos e cotovelos, reduzindo o risco de estresse excessivo nas articulações.",

                        "passos" => Array(
                            "Em pé, segure a barra W com as palmas das mãos voltadas para cima e as mãos posicionadas próximas uma da outra, com os braços estendidos na sua frente.",
                            "Mantenha os pés afastados na largura dos ombros e as costas retas.",
                            "Levante a barra em direção ao peito, mantendo os cotovelos presos ao corpo.",
                            "Expire enquanto levanta a barra e contrai os bíceps.",
                            "Pause por um segundo no topo do movimento e depois abaixe a barra lentamente até a posição inicial.",
                            "Repita o movimento pelo número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Rosca scott com barra W",
                        "nome_url"=>"Rosca-scott-com-barra-w",
                        "desc" => "Rosca scott com barra W",
                        "img" => "Z-Bar-Preacher-Curl.webp",
                        "musculo_trabalhado" => "Biceps, braquial",

                        "beneficios" => "A Rosca Scott com barra W é um exercício que visa trabalhar principalmente o bíceps braquial e o braquial anterior. Este exercício é considerado um dos mais efetivos para o desenvolvimento do bíceps, pois a posição específica da Rosca Scott com barra W mantém os cotovelos fixos, permitindo um maior foco no bíceps e evitando que outros músculos auxiliares entrem em ação. Além disso, a utilização da barra W permite que o punho e o antebraço fiquem em uma posição mais confortável e natural, o que pode ajudar a reduzir o risco de lesões nos punhos.",

                        "passos" => Array(
                            "Coloque a barra W no suporte e ajuste a altura do suporte de modo que as mãos fiquem alinhadas com os cotovelos.",
                            "Sente-se no banco Scott, ajustando o suporte para que o braço fique esticado, mas com a parte superior do braço apoiada no banco.",
                            "Agarre a barra com as palmas das mãos voltadas para cima e as mãos na largura dos ombros.",
                            "Levante a barra até a altura dos ombros, mantendo os cotovelos no apoio.",
                            "Faça uma pausa e contraia os músculos do bíceps.",
                            "Baixe a barra de volta à posição inicial, mantendo os cotovelos no apoio.",
                            "Repita o movimento para realizar o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Rosca martelo alternada",
                        "nome_url"=>"Rosca-martelo-alternada",
                        "desc" => "Rosca martelo alternada",
                        "img" => "Hammer-Curl.webp",
                        "musculo_trabalhado" => "Biceps, braquial",

                        "beneficios" => "A Rosca Martelo é um exercício eficaz para fortalecer e tonificar os músculos do braço, incluindo o bíceps braquial e o braquial. Além disso, esse exercício também trabalha os músculos do antebraço, como o braquiorradial. Ao executar a Rosca Martelo, o praticante pode aumentar sua força e estabilidade do punho. Esse exercício pode ser realizado com halteres ou no cabo, permitindo uma variação na intensidade do treinamento e proporcionando desafios adicionais para os músculos envolvidos.",

                        "passos" => Array(
                            "Segure um par de halteres com as palmas das mãos voltadas para dentro e mantenha os cotovelos próximos ao corpo.",
                            "Mantenha os braços estendidos ao lado do corpo.",
                            "Levante os halteres em direção aos ombros, mantendo as palmas das mãos voltadas uma para a outra.",
                            "Mantenha a contração no topo e desça lentamente os halteres de volta à posição inicial."
                        )
                    ),
                    Array(
                        "nome" => "Rosca concentrada",
                        "nome_url"=>"Rosca-concentrada",
                        "desc" => "Rosca concentrada",
                        "img" => "Concentration-Curl.webp",
                        "musculo_trabalhado" => "Biceps, braquial",

                        "beneficios" => "A rosca concentrada é um exercício de isolamento para o bíceps que pode ajudar a aumentar a força e o tamanho muscular dessa região. Ao executar o exercício, o praticante deve manter o braço estendido em posição fixa enquanto realiza a flexão do cotovelo. Esse movimento concentra a tensão muscular no bíceps, permitindo que ele trabalhe de forma mais intensa. Além disso, o exercício ajuda a aprimorar a conexão mente-músculo, o que significa que o praticante terá maior controle e consciência sobre os músculos que está trabalhando.",

                        "passos" => Array(
                            "Sente-se em um banco com um halter em uma mão e o braço apoiado no interior da coxa, com a palma da mão voltada para cima.",
                            "Mantenha o braço bem estendido e próximo ao corpo.",
                            "Flexione o cotovelo lentamente, levantando o halter em direção ao ombro, mantendo o cotovelo próximo ao corpo e a palma da mão voltada para cima.",
                            "Pause por um segundo quando o halter estiver perto do ombro.",
                            "Baixe o halter lentamente de volta à posição inicial, esticando completamente o braço."
                        )
                    ),
                    Array(
                        "nome" => "Rosca direta no banco inclinado",
                        "nome_url"=>"Rosca-direta-no-banco-inclinado",
                        "desc" => "Rosca direta com halteres no banco inclinado",
                        "img" => "Flexor-Incline-Dumbbell-Curls.webp",
                        "musculo_trabalhado" => "Biceps, braquial",

                        "beneficios" => "A rosca direta no banco inclinado é um exercício eficaz para o desenvolvimento dos músculos do bíceps, bem como dos músculos do antebraço. A posição inclinada do banco ajuda a isolar o bíceps, tornando-o o principal músculo trabalhado durante o movimento. Além disso, esse exercício também ajuda a melhorar a estabilidade dos ombros e a aumentar a força de preensão. É uma ótima variação da rosca direta tradicional que permite uma sobrecarga maior no bíceps, resultando em mais crescimento muscular. É importante realizar o exercício com a técnica correta para evitar lesões e obter os melhores resultados possíveis.",

                        "passos" => Array(
                            "Escolha um banco inclinado entre 45 a 60 graus e sente-se com as costas apoiadas no encosto, segurando um halter em cada mão com as palmas das mãos voltadas para cima.",
                            "Mantenha os cotovelos perto do corpo e os braços estendidos para baixo, com os halteres na altura das coxas.",
                            "Levante os halteres em direção aos ombros, contraindo os músculos do bíceps. Mantenha os cotovelos próximos ao corpo durante todo o movimento.",
                            "Pause brevemente no topo do movimento e depois abaixe os halteres de volta à posição inicial lentamente, controlando o movimento.",
                            "Repita o movimento para realizar as repetições planejadas."
                        )
                    ),
                    Array(
                        "nome" => "Rosca martelo no banco",
                        "nome_url"=>"Rosca-martelo-no-banco",
                        "desc" => "Rosca martelo no banco",
                        "img" => "Seated-Hammer-Curl.webp",
                        "musculo_trabalhado" => "Biceps, braquial",

                        "beneficios" => "Ao fazer a rosca martelo sentado no banco, é possível melhorar a força e o tamanho dos músculos dos braços, o que pode levar a um aumento da capacidade de levantamento de peso em outros exercícios e na vida cotidiana. Além disso, esse exercício pode ajudar a desenvolver a estabilidade e o equilíbrio dos músculos do braço, melhorando a postura e prevenindo lesões. Por fim é uma variação efetiva da rosca martelo tradicional, permitindo que o movimento seja realizado com mais foco e intensidade nos músculos do braço.",

                        "passos" => Array(
                            "Sente-se em um banco com encosto reto, mantenha a coluna reta e os pés apoiados no chão.",
                            "Segure um halter em cada mão com as palmas das mãos voltadas uma para a outra e os braços estendidos ao lado do corpo.",
                            "Mantendo os cotovelos próximos ao corpo, levante um halter em direção ao ombro, mantendo a palma da mão voltada para dentro. Pare o movimento quando o halter estiver próximo ao ombro.",
                            "Expire durante a subida do halter e segure por um segundo no topo.
                            Abaixe lentamente o halter até a posição inicial enquanto inspira.",
                            "Repita o movimento com o outro braço.",
                            "Continue alternando os braços até atingir a quantidade desejada de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Rosca direta com barra W",
                        "nome_url"=>"Rosca-direta-com-barra-w",
                        "desc" => "Rosca direta com barra W",
                        "img" => "Z-Bar-Curl.webp",
                        "musculo_trabalhado" => "Biceps, braquial",

                        "beneficios" => "A rosca direta com barra W é um exercício muito efetivo para o fortalecimento dos músculos do braço, principalmente do bíceps. Ao fazer esse exercício, você estará trabalhando a porção mais interna do músculo, aumentando sua definição e força. Além disso, a barra W reduz a tensão nos pulsos e nos antebraços, o que permite que você se concentre melhor no movimento e execute com mais precisão. Outro benefício é o aumento da estabilidade dos ombros e a melhora da postura, já que esse exercício recruta os músculos do deltoides. É importante lembrar que a rosca direta com barra W deve ser feita com uma boa técnica e um peso adequado, para evitar lesões e garantir a efetividade do treino.",

                        "passos" => Array(
                            "Fique de pé e segure a barra W com as palmas das mãos voltadas para cima e as mãos posicionadas na largura dos ombros.",
                            "Mantenha os cotovelos próximos ao corpo e os braços estendidos, sem travar os cotovelos.",
                            "Lentamente, flexione os cotovelos e levante a barra em direção ao peito, mantendo os braços próximos ao corpo.",
                            "Pare quando a barra estiver próxima aos seus ombros e segure a contração por um segundo.",
                            "Abaixe a barra de volta à posição inicial lentamente, controlando o movimento."
                        )
                    ),
                    Array(
                        "nome" => "Rosca direta sentado com halteres",
                        "nome_url"=>"Rosca-direta-sentado-com-halteres",
                        "desc" => "Rosca direta sentado com halteres",
                        "img" => "seated-biceps-curl.webp",
                        "musculo_trabalhado" => "Biceps, braquial",

                        "beneficios" => "A rosca direta sentado com halteres é um exercício de fortalecimento dos braços que se concentra no bíceps braquial. Ele oferece vários benefícios para quem o pratica regularmente. Alguns dos benefícios incluem o aumento da força e da resistência muscular dos braços, a melhoria da estabilidade articular do ombro, o fortalecimento dos músculos do antebraço e o aumento da massa muscular dos braços. Além disso, a rosca direta sentado com halteres permite uma maior amplitude de movimento em comparação com outros exercícios de rosca, o que pode ajudar a maximizar o recrutamento muscular e aumentar a eficácia do treino.",

                        "passos" => Array(
                            "Sente-se em um banco com encosto vertical, segure um halter em cada mão com a palma das mãos voltada para dentro e os braços estendidos ao lado do corpo.",
                            "Mantenha os cotovelos próximos ao corpo e comece a levantar os halteres em direção ao peito, mantendo os pulsos retos e os braços próximos ao corpo durante todo o movimento.",
                            "Contraia os bíceps no topo do movimento, segure por um segundo e, em seguida, abaixe os halteres lentamente até a posição inicial.",
                            "Repita o movimento para o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Rosca direta com corda",
                        "nome_url"=>"Rosca-direta-com-corda",
                        "desc" => "Rosca direta com corda",
                        "img" => "rope-bicep-curls.webp",
                        "musculo_trabalhado" => "Biceps, braquial",

                        "beneficios" => "A rosca direta na corda é um exercício eficaz para o fortalecimento dos bíceps, antebraços e músculos estabilizadores do ombro. A utilização da corda como resistência proporciona uma maior amplitude de movimento e um maior envolvimento muscular, especialmente no final do movimento, o que ajuda a desenvolver a definição muscular. Além disso, este exercício pode ajudar a melhorar a força de preensão e a coordenação dos músculos do braço e do ombro, o que pode ser útil em muitas atividades do dia a dia.",

                        "passos" => Array(
                            "Comece ajustando a polia da máquina de cabo para a posição mais baixa e prenda a corda na polia.",
                            "Segure cada extremidade da corda com uma das mãos e fique de frente para a polia.",
                            "Mantenha os cotovelos colados ao corpo e as costas retas.",
                            "Com as palmas das mãos voltadas uma para a outra, puxe as cordas em direção ao seus ombros.",
                            "Mantenha os braços firmes enquanto contrai os músculos do bíceps, segurando a posição por um segundo.",
                            "Retorne lentamente à posição inicial, controlando o movimento e mantendo a tensão na corda.",
                            "Repita o movimento para completar o número de repetições desejado."
                        )
                    ),
                    Array(
                        "nome" => "Rosca scott halteres alternado",
                        "nome_url"=>"Rosca-scott-halteres-alternado",
                        "desc" => "Rosca scott halteres alternado",
                        "img" => "Dumbbell-Alternate-Preacher-Curl.webp",
                        "musculo_trabalhado" => "Biceps, braquial",

                        "beneficios" => "A rosca scott com halteres alternados é um exercício efetivo para fortalecer e tonificar os braços, em particular os músculos bíceps braquiais. O movimento controlado e isolado é menos estressante para as articulações do cotovelo e ombro, o que o torna uma opção segura para pessoas com lesões ou dores nessas áreas. Além disso, o uso de halteres permite uma maior amplitude de movimento, o que pode aumentar a ativação muscular em comparação com outras variações de rosca. Ao realizar esse exercício regularmente e com o peso adequado, você pode esperar ver um aumento na força e no tamanho muscular em seus braços.",

                        "passos" => Array(
                            "Posicione-se em um banco Scott com os braços estendidos sobre o apoio almofadado, segurando um halter em cada mão com as palmas voltadas para baixo.",
                            "Mantenha os cotovelos no banco e inicie o movimento flexionando o cotovelo para levantar o halter em direção ao ombro, mantendo o braço no banco e a palma da mão voltada para o corpo.",
                            "Ao levantar um halter, mantenha o outro braço estendido no apoio, sem movimento. Em seguida, abaixe o halter controladamente até a posição inicial, mantendo a contração muscular.",
                            "Repita o movimento com o outro braço, alternando a posição dos halteres em cada repetição.",
                            "Realize o número desejado de repetições para cada braço."
                        )
                    ),
                    Array(
                        "nome" => "Rosca martelo no scott",
                        "nome_url"=>"Rosca-martelo-no-scott",
                        "desc" => "Rosca martelo no scott",
                        "img" => "Dumbbell-Preacher-Hammer-Curl.webp",
                        "musculo_trabalhado" => "Biceps, braquial",

                        "beneficios" => "A rosca martelo no banco Scott é um exercício excelente para fortalecer os músculos dos braços, especialmente o bíceps braquial. Ao trabalhar com halteres em um banco Scott, você é capaz de isolar o movimento para o bíceps e reduzir a tensão no antebraço, o que ajuda a minimizar o risco de lesões. Além disso, esse exercício pode melhorar a estabilidade dos ombros, ajudar a melhorar a amplitude de movimento do cotovelo e prevenir desequilíbrios musculares. É uma ótima opção para adicionar variação à sua rotina de treinamento de bíceps e pode ser realizado por pessoas de diferentes níveis de condicionamento físico.",

                        "passos" => Array(
                            "Primeiro, escolha um banco Scott e ajuste a altura do suporte de modo que as almofadas de apoio estejam alinhadas com os seus cotovelos quando você estiver sentado.",
                            "Pegue os halteres com as palmas das mãos voltadas para dentro, ou seja, pegada martelo.",
                            "Sente-se no banco Scott com as costas retas e os pés apoiados no chão.",
                            "Coloque os braços estendidos sobre as almofadas de apoio.",
                            "Levante os halteres em direção aos ombros, mantendo os pulsos retos.",
                            "Segure a contração no topo e, em seguida, abaixe os halteres de volta à posição inicial de forma controlada.",
                            "Repita o movimento por várias repetições."
                        )
                    ),
                    Array(
                        "nome" => "Rosca scott unilateral",
                        "nome_url"=>"Rosca-scott-unilateral",
                        "desc" => "Rosca scott unilateral",
                        "img" => "Dumbbell-Preacher-Curl.webp",
                        "musculo_trabalhado" => "Biceps, braquial",

                        "beneficios" => "A rosca scott unilateral é um exercício eficaz para o fortalecimento dos braços, especificamente o bíceps braquial. Ao realizar o movimento de forma unilateral, cada braço é trabalhado individualmente, ajudando a equilibrar possíveis assimetrias musculares. Além disso, a posição do scott ajuda a isolar a ação do bíceps, evitando que outros músculos auxiliem no movimento. Isso torna a rosca scott unilateral um exercício excelente para aumentar a força e o tamanho dos braços.",

                        "passos" => Array(
                            "Escolha o halter adequado para o seu nível de treinamento e ajuste o banco scott à altura adequada para os seus braços.",
                            "Sente-se no banco scott e coloque um dos braços no apoio, mantendo o outro braço estendido ao lado do corpo.",
                            "Segure o halter com a palma da mão voltada para cima, mantendo o braço estendido.",
                            "Com o cotovelo fixo no apoio do banco scott, flexione o braço e levante o halter em direção ao ombro, expirando durante a elevação.",
                            "Pause por um momento no topo da contração e, em seguida, abaixe lentamente o halter de volta à posição inicial, inspirando durante a descida.",
                            "Repita o movimento por várias repetições e, em seguida, mude para o outro braço."
                        )
                    ),
                    Array(
                        "nome" => "Rosca inversa no cabo",
                        "nome_url"=>"Rosca-inversa-no-cabo",
                        "desc" => "Rosca inversa no cabo",
                        "img" => "Cable-Reverse-Grip-EZ-bar-Biceps-Curl.webp",
                        "musculo_trabalhado" => "Biceps, braquial, supinador",

                        "beneficios" => "A rosca inversa no cabo é um exercício que tem como foco principal trabalhar o músculo braquial anterior, além de também recrutar o músculo braquiorradial e o supinador. Com este exercício, é possível desenvolver a força e a resistência muscular dos braços, melhorando a execução de atividades cotidianas e esportivas que demandam força nos membros superiores. Além disso, a rosca inversa no cabo também contribui para a estabilidade dos pulsos e dos cotovelos, o que pode prevenir lesões em atividades que envolvem impacto ou movimentos repetitivos. Esse exercício também ajuda a fortalecer os músculos da região do antebraço, melhorando a pegada e aumentando a capacidade de levantamento de peso.",

                        "passos" => Array(
                            "Comece colocando um cabo em uma polia baixa.",
                            "Fique em pé de frente para a polia e segure o pegador com as mãos, com as palmas voltadas para baixo.",
                            "Mantenha os cotovelos colados ao corpo e os ombros relaxados.",
                            "Puxe o pegador em direção ao seu corpo, mantendo os cotovelos próximos ao tronco e levando as mãos em direção ao seu abdômen.",
                            "Segure a posição por um segundo e, em seguida, retorne lentamente à posição inicial.",
                            "Repita o movimento por várias repetições."
                        )
                    ),
                    Array(
                        "nome" => "Rosca inversa com halteres",
                        "nome_url"=>"Rosca-inversa-com-halteres",
                        "desc" => "Rosca inversa com halteres",
                        "img" => "dumbbell-reverse-curl.webp",
                        "musculo_trabalhado" => "Biceps, braquial, supinador",

                        "beneficios" => "A rosca inversa com halteres é um excelente exercício para fortalecer os músculos do braço e do antebraço, além de contribuir para a estabilização dos ombros. Ao realizar a rosca inversa com halteres, você ativa músculos que geralmente não são trabalhados em outros exercícios de braço, como o braquial e o supinador. O exercício também ajuda a melhorar a flexibilidade dos pulsos e a aumentar a força de preensão. A rosca inversa com halteres pode ser especialmente útil para pessoas que sofrem de dores no punho ou que desejam melhorar a pegada em outros exercícios.",

                        "passos" => Array(
                            "Segure um halter em cada mão, mantendo os braços ao lado do corpo com as palmas das mãos voltadas para o corpo.",
                            "Mantendo os cotovelos próximos ao corpo, levante os halteres em direção ao peito, mantendo os pulsos retos.",
                            "Pause por um momento na posição mais alta, contraindo os músculos do antebraço.",
                            "Abaixe lentamente os halteres de volta à posição inicial, mantendo os cotovelos próximos ao corpo e as palmas das mãos voltadas para o corpo."
                        )
                    ),
                    Array(
                        "nome" => "Rosca martelo unilateral scott",
                        "nome_url"=>"Rosca-martelo-unilateral-scott",
                        "desc" => "Rosca inversa com halteres",
                        "img" => "Dumbbell-Scott-Hammer-Curl.webp",
                        "musculo_trabalhado" => "Biceps, braquial",

                        "beneficios" => "A rosca martelo unilateral no scott é um exercício de isolamento efetivo para o desenvolvimento dos músculos do braço, especialmente o bíceps braquial. Por trabalhar um braço de cada vez, ajuda a corrigir desequilíbrios musculares e promove uma melhor estabilidade do tronco. Além disso, é um exercício que pode ser facilmente modificado para aumentar a intensidade, como por exemplo, utilizando halteres mais pesados, diminuindo o tempo de descanso entre as séries ou aumentando o número de repetições. Adicionar a rosca martelo unilateral no scott ao seu treino de braços pode ajudar a aumentar a força e definição muscular nessa região.",

                        "passos" => Array(
                            "Posicione o banco Scott em uma superfície firme e coloque um halter na lateral do banco.",
                            "Sente-se no banco e coloque o braço estendido na almofada de apoio, segurando o halter com a palma da mão voltada para o corpo.",
                            "Mantenha o cotovelo próximo ao corpo e levante o halter em direção ao ombro, dobrando o cotovelo.",
                            "Segure a contração no pico do movimento e, em seguida, abaixe o halter de volta à posição inicial, mantendo o controle do movimento durante todo o exercício.",
                            "Repita o movimento para o número desejado de repetições e, em seguida, mude de lado para trabalhar o braço oposto."
                        )
                    ),
                    Array(
                        "nome" => "Rosca inversa com barra W",
                        "nome_url"=>"Rosca-inversa-com-barra-w",
                        "desc" => "Rosca inversa com halteres",
                        "img" => "Reverse-Grip-EZ-Bar-Curl.webp",
                        "musculo_trabalhado" => "Biceps, braquial",

                        "beneficios" => "A execução da rosca inversa com barra W proporciona uma série de benefícios notáveis para o fortalecimento e desenvolvimento dos músculos do braço. Este exercício, focado principalmente nos músculos do antebraço e bíceps, contribui para o aumento da força e resistência nessa região. Ao utilizar a barra W, a pegada neutra preserva os pulsos, minimizando o estresse articular. Além de aprimorar a definição e o tamanho dos bíceps, a rosca inversa também fortalece os músculos estabilizadores do cotovelo, melhorando a funcionalidade e prevenindo lesões.",

                        "passos" => Array(
                            "Comece em pé, com os pés afastados na largura dos ombros, segurando a barra W com as palmas das mãos voltadas para baixo e as mãos afastadas na largura dos ombros.",
                            "Mantenha os braços estendidos ao lado do corpo e os cotovelos próximos ao corpo.",
                            "Levante a barra em direção ao peito, mantendo os cotovelos próximos ao corpo e as palmas das mãos voltadas para cima.",
                            "Segure brevemente no topo e, em seguida, abaixe a barra lentamente de volta à posição inicial.",
                            "Repita o movimento para completar o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Rosca scott na máquina",
                        "nome_url"=>"Rosca-scott-na-maquina",
                        "desc" => "Rosca scott na máquina",
                        "img" => "Lever-Preacher-Curl.webp",
                        "musculo_trabalhado" => "Biceps, braquial",

                        "beneficios" => "A realização da rosca Scott na máquina proporciona diversos benefícios para o desenvolvimento dos músculos do braço, particularmente dos bíceps. Ao utilizar a máquina Scott, o exercício oferece um suporte eficaz para os cotovelos, minimizando o estresse nas articulações e permitindo um isolamento mais preciso dos músculos-alvo. Isso resulta em um aumento significativo na força e definição dos bíceps. Além disso, a rosca Scott na máquina promove uma amplitude de movimento controlada, contribuindo para a prevenção de lesões e proporcionando uma contração muscular mais efetiva.",

                        "passos" => Array(
                            "Ajuste o assento da máquina para que os braços fiquem apoiados confortavelmente no suporte da máquina e os cotovelos fiquem alinhados com a articulação do eixo.",
                            "Agarre as alças com as palmas das mãos voltadas para cima e os braços estendidos.",
                            "Mantenha os cotovelos firmes e levante lentamente as alças em direção aos ombros, inspirando.",
                            "Mantenha a posição por um segundo e depois abaixe as alças de volta à posição inicial, expirando.",
                            "Repita o movimento para realizar a quantidade desejada de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Rosca unilateral no cabo",
                        "nome_url"=>"Rosca-unilateral-no-cabo",
                        "desc" => "Rosca unilateral no cabo",
                        "img" => "High-Cable-Single-Arm-Bicep-Curl.webp",
                        "musculo_trabalhado" => "Biceps, braquial",

                        "beneficios" => "A rosca unilateral no cabo é um exercício eficaz para trabalhar os músculos dos braços, principalmente o bíceps braquial. Esse movimento permite um trabalho mais concentrado no músculo, aumentando a sua definição e resistência, além de promover um melhor equilíbrio muscular entre os dois braços. O uso do cabo como resistência proporciona uma tensão constante no músculo durante todo o movimento, o que contribui para o desenvolvimento de uma musculatura mais simétrica e equilibrada. Além disso, a rosca unilateral no cabo é um exercício versátil, que pode ser facilmente adaptado às necessidades e limitações individuais de cada praticante.",

                        "passos" => Array(
                            "Ajuste a polia do cabo para que fique na reta do ombro.",
                            "Pegue a alça do cabo com a mão direita e fique de lado para a máquina.",
                            "Mantenha os cotovelos fixos e puxe a alça em direção ao ombro direito, mantendo o braço próximo ao corpo.",
                            "Volte lentamente à posição inicial e repita o movimento para o número de repetições desejado.",
                            "Repita o mesmo processo para o outro lado."
                        )
                    ),
                    Array(
                        "nome" => "Rosca no crossover",
                        "nome_url"=>"Rosca-no-crossover",
                        "desc" => "Rosca no crossover",
                        "img" => "overhead-cable-curl.webp",
                        "musculo_trabalhado" => "Biceps, braquial",

                        "beneficios" => "A rosca na polia alta é um exercício que trabalha principalmente o bíceps, além de recrutar os músculos do antebraço e do ombro. Ao utilizar a polia alta, a tensão no músculo é mantida durante todo o movimento, o que gera uma maior ativação muscular e um estímulo mais intenso para o bíceps. Entre os benefícios da rosca no polia alto estão o fortalecimento e desenvolvimento muscular do bíceps, a melhora na estabilidade e mobilidade dos ombros e a promoção de um melhor desempenho em outros exercícios que envolvem o movimento de flexão do cotovelo, como o supino e o remo. É um exercício bastante versátil, pois pode ser realizado com diferentes variações de pegada e posicionamento dos pés, o que permite uma maior variedade no treinamento e adaptação às necessidades individuais.",

                        "passos" => Array(
                            "Coloque o cross over na altura adequada, ajustando as polias para que elas fiquem no nível acima da cabeça.",
                            "Pegue as duas alças do cross over com as palmas das mãos voltadas para cima e os braços estendidos.",
                            "Mantenha os cotovelos na altura dos ombros, flexione os braços e puxe as alças em direção aos ombros.",
                            "Mantenha os pulsos retos e controle o movimento de puxada.",
                            "Ao chegar no topo do movimento, segure a posição por um segundo, contraindo bem os músculos do bíceps.",
                            "Em seguida, lentamente volte a posição inicial, esticando completamente os braços.",
                            "Repita o movimento para o número desejado de repetições."
                        )
                    )
                ),
                "Antebraco" => Array(
                    Array(
                        "nome" => "Rosca de punho pelas costas",
                        "nome_url"=>"Rosca-no-crossover",
                        "desc" => "Rosca de punho em pé pelas costas com barra",
                        "img" => "Behind-The-Back-Barbell-Wrist-Curl.webp",
                        "musculo_trabalhado" => "Braquiorradial, braquial, supinador",

                        "beneficios" => "A flexão de pulso com barra nas costas é um exercício que visa o fortalecimento dos músculos do antebraço, em especial os extensores. Esses músculos são importantes para a realização de atividades cotidianas, como levantar objetos pesados ou agarrar com firmeza. Além disso, esse exercício ajuda a melhorar a estabilidade e o equilíbrio dos pulsos, o que pode reduzir o risco de lesões. A flexão de pulso com barra nas costas também pode ser um ótimo complemento para treinos de musculação para braços, como bíceps e tríceps.",

                        "passos" => Array(
                            "Fique em pé com a barra atrás das costas. As mãos devem estar afastadas na largura dos ombros e as palmas voltadas para trás.",
                            "Mantenha os braços retos e os cotovelos próximos ao corpo.",
                            "Levante a barra flexionando os pulsos para cima, contraindo os músculos dos antebraços.",
                            "Pause no topo do movimento e, em seguida, abaixe a barra controladamente de volta à posição inicial.",
                            "Repita o movimento para completar o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Rosca inversa com barra reta",
                        "nome_url"=>"Rosca-inversa-com-barra-reta",
                        "desc" => "Rosca inversa com barra reta",
                        "img" => "Barbell-Reverse-Curl.webp",
                        "musculo_trabalhado" => "Braquiorradial, braquial, supinador",

                        "beneficios" => "A rosca inversa com barra reta é um exercício para o fortalecimento dos músculos do braço, em especial o músculo braquial e o antebraço. Além disso, também recruta os músculos do ombro, em particular o deltoide anterior. A técnica de pegada invertida (mãos pronadas) exige uma maior ativação do músculo braquial e dos músculos do antebraço para segurar a barra e realização do movimento de flexão do cotovelo. Por isso, é um ótimo exercício para aprimorar a força dos braços e a resistência muscular dessas regiões.",

                        "passos" => Array(
                            "Fique em pé com os pés afastados na largura dos ombros, segurando a barra reta com as mãos em uma pegada pronada (palmas das mãos voltadas para baixo) e com as mãos na abertura dos ombros.",
                            "Mantenha os cotovelos próximos ao corpo e levante a barra em direção ao peito.",
                            "Ao chegar ao topo do movimento, contraia os músculos do braço e segure por um momento.",
                            "Em seguida, abaixe a barra lentamente até a posição inicial, mantendo os cotovelos próximos ao corpo durante todo o movimento."
                        )
                    ),
                    Array(
                        "nome" => "Rosca de punho inversa com barra",
                        "nome_url"=>"Rosca-de-punho-inversa-com-barra",
                        "desc" => "Rosca de punho inversa com barra",
                        "img" => "Barbell-Reverse-Wrist-Curl.webp",
                        "musculo_trabalhado" => "Braquiorradial, braquial",

                        "beneficios" => "A rosca de punho inversa com barra apoiada na coxa é um exercício excelente para fortalecer os músculos flexores do antebraço, além de também trabalhar os músculos do bíceps braquial. Os benefícios desse exercício incluem um aumento da força nos músculos do antebraço, melhorando a capacidade de realizar atividades diárias e esportivas que exigem uma pegada mais forte. Além disso, o fortalecimento dos músculos do bíceps braquial pode levar a uma melhoria na estética do braço.",

                        "passos" => Array(
                            "Comece sentado em um banco com os antebraços apoiados nas coxas e as mãos segurando a barra com as palmas das mãos voltadas para baixo.",
                            "Mantenha os antebraços apoiados nas coxas.",
                            "Levante os punhos para cima, mantendo os antebraços apoiados nas coxas. Certifique-se de manter os antebraços apoiados e a contração concentrada nos músculos do antebraço.",
                            "Pause brevemente no topo da contração e, em seguida, abaixe lentamente as mãos de volta à posição inicial.",
                            "Repita o movimento para completar a série."
                        )
                    ),
                    Array(
                        "nome" => "rosca de punho inversa apoiado no banco",
                        "nome_url"=>"Rosca-de-punho-inversa-com-barra-no-banco",
                        "desc" => "Rosca de punho inversa com barra no banco",
                        "img" => "Barbell-Reverse-Wrist-Curl-Over-a-Bench.webp",
                        "musculo_trabalhado" => "Braquiorradial, braquial",

                        "beneficios" => "A rosca de punho inversa apoiado no banco é um exercício que trabalha principalmente os músculos dos antebraços, incluindo o braquiorradial, o supinador e o extensor radial do carpo. Além disso, esse exercício também pode ajudar a melhorar a força e o desempenho em outras atividades que envolvem a utilização dos antebraços, como levantamento de peso, escalada e prática de esportes de raquete. É importante executar esse exercício com a técnica correta e evitar a utilização de peso excessivo, para evitar lesões e obter melhores resultados.",

                        "passos" => Array(
                            "Ajuste o banco em uma posição plana e se ajoelhe apoiando os antebraços no banco.",
                            "Segure a barra com as mãos na posição de pronação (palmas para baixo), com as mãos afastadas na largura dos ombros.",
                            "Eleve a barra, flexionando os pulsos em direção aos antebraços, sem movimentar os cotovelos.",
                            "Mantenha a contração por um segundo na posição mais elevada e, em seguida, abaixe lentamente a barra até a posição inicial, mantendo o controle.",
                            "Repita o movimento para realizar todas as repetições desejadas."
                        )
                    ),
                    Array(
                        "nome" => "Rosca de punho apoiado no banco",
                        "nome_url"=>"Rosca-de-punho-paoiado-no-banco-com-barra",
                        "desc" => "Rosca de punho no banco com barra",
                        "img" => "barbell-Wrist-Curl.webp",
                        "musculo_trabalhado" => "Braquiorradial, braquial",

                        "beneficios" => "A rosca de punho apoiado no banco é um exercício excelente para fortalecer e definir os músculos dos antebraços. Ao realizar esse exercício, você trabalha principalmente os músculos flexores e extensores do punho, além de recrutar músculos estabilizadores do antebraço. Fortalecer esses músculos é importante tanto para atividades cotidianas, como carregar objetos pesados, quanto para a prática de atividades físicas que envolvam o uso das mãos, como levantamento de peso e escalada. Além disso, o exercício pode ajudar a prevenir lesões e dores no punho e antebraço.",

                        "passos" => Array(
                            "Ajuste o banco em uma posição plana e sente-se com as pernas afastadas e os pés apoiados no chão.",
                            "Segure a barra com as palmas das mãos para cima, com as mãos afastadas na largura dos ombros.",
                            "Apoie os antebraços no banco, de modo que os pulsos fiquem livres para se movimentar.",
                            "Eleve a barra, flexionando os pulsos em direção aos antebraços, sem movimentar os cotovelos.",
                            "Mantenha a contração por um segundo na posição mais elevada e, em seguida, abaixe lentamente a barra até a posição inicial, mantendo o controle.",
                            "Repita o movimento para realizar todas as repetições desejadas."
                        )
                    ),
                    Array(
                        "nome" => "Rosca martelo de punho unilateral",
                        "nome_url"=>"Rosca-martelo-de-punho-unilateral",
                        "desc" => "Rosca martelo de punho apoiado na coxa",
                        "img" => "Dumbbell-Seated-Neutral-Wrist-Curl.webp",
                        "musculo_trabalhado" => "Braquiorradial, braquial",

                        "beneficios" => "A rosca martelo de punho é um exercício de fortalecimento dos músculos flexores do antebraço, em especial o músculo braquiorradial. Além disso, trabalha também o músculo braquial e o supinador, auxiliando na estabilidade do cotovelo e melhorando a coordenação e força dos membros superiores. Este exercício é benéfico para pessoas que praticam esportes que envolvem pegada forte, como escalada, musculação e artes marciais.",

                        "passos" => Array(
                            "Sente-se em um banco com as costas retas e os pés firmemente apoiados no chão.",
                            "Coloque a parte inferior do braço em cima das coxas, de forma que os punhos fiquem ligeiramente para fora.",
                            "Segure um halter com a palma voltada para dentro.",
                            "Levante os halter na direção do ombro, mantendo o cotovelo apoiado na coxa.",
                            "Segure por um segundo na posição final e depois abaixe lentamente o halter para a posição inicial."
                        )
                    ),
                    Array(
                        "nome" => "Rosca de punho unilateral",
                        "nome_url"=>"Rosca-de-punho-unilateral",
                        "desc" => "Rosca de punho apoiado na coxa",
                        "img" => "Dumbbell-Wrist-Curl.webp",
                        "musculo_trabalhado" => "Braquiorradial, braquial",

                        "beneficios" => "A rosca de punho apoiado na coxa é um exercício eficiente para fortalecer os músculos do antebraço e melhorar o desempenho em atividades diárias que envolvem a pegada e a estabilidade do punho. Além disso, é uma opção segura e de baixo impacto, ideal para pessoas que estão se recuperando de lesões ou que desejam fortalecer essa região do corpo. Ao executar corretamente esse exercício, você também pode melhorar a resistência dos músculos do antebraço e diminuir o risco de lesões durante outras atividades físicas.",

                        "passos" => Array(
                            "Sente-se em um banco com os pés apoiados no chão.",
                            "Segure o halter com a palma da mão voltada para cima.",
                            "Mantendo os cotovelos apoiados nas coxas, levante o halter para cima até sentir uma contração nos antebraços.",
                            "Mantenha a posição por um segundo e, em seguida, abaixe o halter de volta à posição inicial.",
                            "Repita o movimento por várias repetições."
                        )
                    ),
                    Array(
                        "nome" => "Rosca de punho inversa unilateral com anilha",
                        "nome_url"=>"Rosca-de-punho-inversa-unilateral-com-anilha",
                        "desc" => "Rosca de punho inversa unilateral com anilha",
                        "img" => "Reverse-Wrist-Curl.webp",
                        "musculo_trabalhado" => "Braquiorradial, braquial",

                        "beneficios" => "Rosca de punho inversa unilateral com anilha é um exercício excelente para fortalecer os músculos flexores do antebraço, além de também trabalhar os músculos do bíceps braquial. Os benefícios desse exercício incluem um aumento da força nos músculos do antebraço, melhorando a capacidade de realizar atividades diárias e esportivas que exigem uma pegada mais forte. Além disso, o fortalecimento dos músculos do bíceps braquial pode levar a uma melhoria na estética do braço.",

                        "passos" => Array(
                            "Comece sentado em um banco com um antebraço apoiado na coxa e a mão segurando uma anilha com as palmas das mãos voltadas para baixo.",
                            "Mantenha o antebraço apoiado na coxa.",
                            "Levante o punho para cima, mantendo o antebraço apoiado na coxa.", "Certifique-se de manter o antebraço apoiado e a contração concentrada nos músculos do antebraço.",
                            "Pause brevemente no topo da contração e, em seguida, abaixe lentamente a mão de volta à posição inicial.",
                            "Repita o movimento para completar a série."
                        )
                    ),
                    Array(
                        "nome" => "Rosca martelo de punho com anilha",
                        "nome_url"=>"Rosca-martelo-de-punho-com-anilha",
                        "desc" => "Rosca martelo de punho com anilha",
                        "img" => "Weighted-Wrist-Curl.webp",
                        "musculo_trabalhado" => "Braquiorradial, braquial",

                        "beneficios" => "A rosca martelo de punho é um exercício de fortalecimento dos músculos flexores do antebraço, em especial o músculo braquiorradial. Além disso, trabalha também o músculo braquial e o supinador, auxiliando na estabilidade do cotovelo e melhorando a coordenação e força dos membros superiores. Este exercício é benéfico para pessoas que praticam esportes que envolvem pegada forte, como escalada, musculação e artes marciais.",

                        "passos" => Array(
                            "Sente-se em um banco e os pés firmemente apoiados no chão.",
                            "Segure uma anilha em cada mão e com as palmas das mãos voltadas uma para outra.",
                            "Com os cotovelos próximos ao corpo e os braços em 90 graus, levante os punhos em direção aos ombros.",
                            "Segure por um segundo na posição final e depois abaixe lentamente o halter para a posição inicial. "
                        )
                    ),
                    Array(
                        "nome" => "Rolo de pulso",
                        "nome_url"=>"Rolo-de-pulso",
                        "desc" => "Rolo de pulso",
                        "img" => "wrist-roller.webp",
                        "musculo_trabalhado" => "Braquiorradial, braquial",

                        "beneficios" => "O exercício rolo de pulso é uma atividade física simples que pode ser realizada com um equipamento específico ou uma barra com pesos nas extremidades. É eficaz para o fortalecimento dos músculos dos antebraços e para melhorar a força de preensão das mãos. Além disso, pode ajudar a prevenir lesões nos pulsos e a melhorar a estabilidade do punho. É importante fazer o exercício corretamente para evitar lesões e obter os melhores resultados possíveis.",

                        "passos" => Array(
                            "Fique em pé com os pés afastados na largura dos ombros e segure uma barra com as mãos na largura dos ombros.",
                            "Mantenha os braços estendidos na frente do corpo, com as mãos segurando a barra.",
                            "Comece a enrolar a barra para cima e para baixo, usando apenas o movimento dos pulsos para girá-la.",
                            "Certifique-se de manter os braços estendidos durante todo o exercício.",
                            "Faça quantas repetições forem necessárias para atingir sua meta de treinamento."
                        )
                    )
                ),
                "Obliquos" => Array(
                    Array(
                        "nome" => "Abdominal boxeador",
                        "nome_url"=>"Abdominal-boxeador",
                        "desc" => "Abdominal boxeador",
                        "img" => "Cross-Crunch.webp",
                        "musculo_trabalhado" => "Oblíquos, reto, quadril, lombar",

                        "beneficios" => "Esse exercício é eficaz para trabalhar os músculos retos abdominais, oblíquos externos e internos, além de acionar a musculatura do quadril e da lombar. Além disso, por se tratar de um exercício de alto gasto energético, ele contribui para a perda de gordura corporal e definição muscular. A prática regular desse exercício pode melhorar a postura e a estabilidade do core, prevenindo lesões e melhorando o desempenho em outras atividades físicas e esportes.",

                        "passos" => Array(
                            "Deite-se de costas em um colchonete ou tapete de exercícios e dobre os joelhos para que seus pés fiquem apoiados no chão.",
                            "Junte as mãos próximo ao peito e levante a cabeça e os ombros do chão.",
                            "Gire o tronco para a direita e leve o cotovelo esquerdo em direção ao joelho direito.",
                            "Retorne à posição inicial e repita o movimento para o lado oposto, levando o cotovelo direito em direção ao joelho esquerdo."
                        )
                    ),
                    Array(
                        "nome" => "Abdominal bicicleta",
                        "nome_url"=>"Abdominal-bicicleta",
                        "desc" => "Abdominal bicicleta",
                        "img" => "Bicycle-Crunch.webp",
                        "musculo_trabalhado" => "Oblíquos, reto, coxas",

                        "beneficios" => "O exercício abdominal bicicleta é uma ótima opção para fortalecer e tonificar os músculos abdominais. Além disso, ele também pode ajudar a melhorar a resistência e a capacidade cardiovascular. Outro benefício é que esse exercício trabalha a estabilidade da coluna vertebral e da região lombar, o que pode ajudar a prevenir lesões e dores nas costas. Ele ainda pode contribuir para a queima de gordura abdominal e melhorar a postura corporal.",

                        "passos" => Array(
                            "Deite-se de costas em um colchonete ou tapete de exercícios.",
                            "Coloque as mãos atrás da cabeça, levante as pernas e flexione os joelhos em um ângulo de 90 graus.",
                            "Levante a cabeça, pescoço e ombros do chão.",
                            "Flexione o tronco, movendo o cotovelo direito em direção ao joelho esquerdo, enquanto simultaneamente estende a perna direita para frente.",
                            "Retorne à posição inicial e repita o movimento, desta vez levando o cotovelo esquerdo em direção ao joelho direito, enquanto estende a perna esquerda para frente.",
                            "Continue alternando os lados em um movimento de pedalada, como se estivesse andando de bicicleta."
                        )
                    ),
                    Array(
                        "nome" => "Flexão lateral com halter",
                        "nome_url"=>"Flexao-lateral-com-halter",
                        "desc" => "Flexão lateral com halter",
                        "img" => "Dumbbell-Side-Bend.webp",
                        "musculo_trabalhado" => "Oblíquos, reto, lombar",

                        "beneficios" => "A flexão lateral com halter é um exercício que visa fortalecer os músculos oblíquos externos e internos, além de trabalhar o reto abdominal e a lombar. Além de melhorar a definição abdominal e a postura, esse exercício também ajuda a prevenir lesões na região lombar e a aumentar a estabilidade do tronco durante atividades diárias e esportivas. Por trabalhar músculos profundos e estabilizadores, a flexão lateral com halter também pode ajudar a melhorar a respiração e a função pulmonar. Além disso, o exercício pode ser adaptado para diferentes níveis de condicionamento físico, permitindo que pessoas iniciantes e avançadas possam incluí-lo em sua rotina de treinamento.",

                        "passos" => Array(
                            "Fique em pé com os pés afastados na largura dos ombros e segure um halter com uma das mãos, mantendo o braço ao lado do corpo.",
                            "Mantenha a coluna ereta e os abdominais contraídos para manter a estabilidade durante o exercício.",
                            "Incline lentamente o corpo para o lado oposto do halter, mantendo o braço estendido ao lado do corpo.",
                            "Sinta o alongamento na lateral do corpo e depois, lentamente, retorne à posição inicial.",
                            "Repita o exercício para o outro lado, alternando os lados."
                        )
                    ),
                    Array(
                        "nome" => "Abdominal oblíquo lateral no solo",
                        "nome_url"=>"Abdominal-obliquo-lateral-no-solo",
                        "desc" => "Abdominal oblíquo lateral no solo",
                        "img" => "Oblique-Floor-Crunches.webp",
                        "musculo_trabalhado" => "Oblíquos, reto",

                        "beneficios" => "O abdominal oblíquo lateral no solo é um exercício altamente eficaz para trabalhar os músculos oblíquos externos do abdômen, que ajudam a definir a cintura e a melhorar a postura. Além disso, este exercício também ajuda a melhorar o equilíbrio e a estabilidade do núcleo, o que pode ter um impacto positivo na realização de outras atividades físicas e no dia a dia. Outros benefícios incluem o aumento da força e resistência abdominal, melhora da flexibilidade lateral da coluna vertebral e a prevenção de lesões relacionadas à má postura.",

                        "passos" => Array(
                            "Deite-se de lado no chão, com as pernas dobradas uma sobre a outra e o braço inferior abraçando o corpo.",
                            "Posicione a mão do braço superior atrás da cabeça, com o cotovelo apontando para o teto.",
                            "Contraia o abdômen e eleve o tronco, mantendo o quadril no chão.",
                            "Ao subir, leve o cotovelo em direção as pernas, mantendo a contração do abdômen.",
                            "Volte à posição inicial de forma controlada e repita o movimento por várias repetições antes de mudar de lado."
                        )
                    ),
                    Array(
                        "nome" => "Abdominal giro russo",
                        "nome_url"=>"Abdominal-giro-russo",
                        "desc" => "Abdominal giro russo com peso",
                        "img" => "abdominal-obliquo-rotacao-russa.webp",
                        "musculo_trabalhado" => "Oblíquos, pernas",

                        "beneficios" => "O abdominal giro russo com peso é um exercício que tem como objetivo fortalecer os músculos oblíquos internos e externos do abdômen, assim como os músculos do core e da região lombar. Além disso, ele também pode ajudar a melhorar a postura e a estabilidade da coluna vertebral. Realizar o abdominal giro russo com peso de forma regular pode ajudar a tonificar os músculos do abdômen, tornando a cintura mais definida. O exercício também pode ser útil para quem pratica atividades esportivas que exigem força e estabilidade na região do core, como corrida, ciclismo e levantamento de peso.",

                        "passos" => Array(
                            "Sentado com as pernas levantadas e cruzadas, segure uma anilha com as duas mãos em frente ao peito.
                            Incline o tronco para a frente em cerca de 45 graus, mantendo a coluna reta e contraindo os músculos abdominais.
                            Gire o tronco para a direita, levando a anilha para a lateral direita do corpo, enquanto mantém os braços próximos ao corpo.
                            Retorne à posição central, contraindo os músculos abdominais e mantendo a coluna reta.
                            Repita o movimento, girando o tronco para a esquerda desta vez.",
                            "Continue alternando os lados, mantendo o movimento controlado e concentrando-se na contração dos músculos oblíquos e abdominais."
                        )
                    ),
                    Array(
                        "nome" => "Giro sentado com barra",
                        "nome_url"=>"Giro-sentado-com-barra",
                        "desc" => "Giro sentado com barra nas costas",
                        "img" => "Barbell-Seated-Twist.webp",
                        "musculo_trabalhado" => "Oblíquos",

                        "beneficios" => "O exercício abdominal Giro do tronco sentado com barra é uma excelente opção para trabalhar os músculos oblíquos externos e internos do abdômen, além de melhorar a mobilidade e flexibilidade da coluna vertebral. Esse movimento também fortalece a região lombar e ajuda a melhorar a postura, além de contribuir para um melhor desempenho em atividades cotidianas e esportivas que exigem força e estabilidade abdominal. Ademais, o giro do tronco também ajuda a tonificar e definir os músculos da região lateral do abdômen, proporcionando uma aparência mais estética.",

                        "passos" => Array(
                            "Sente-se em um banco ou cadeira com os pés apoiados no chão e segure uma barra atrás do pescoço, mantendo-a com as mãos.",
                            "Mantenha o tronco ereto, olhe para frente e contraia os músculos do abdômen.",
                            "Gire o tronco para um lado, mantendo os quadris e os pés imóveis, enquanto expira.",
                            "Retorne à posição inicial e repita o movimento do outro lado.",
                            "Mantenha o movimento suave e controlado, evitando puxar a barra com as mãos."
                        )
                    ),
                    Array(
                        "nome" => "Prancha lateral com elevação",
                        "nome_url"=>"Prancha-lateral-com-elevacao",
                        "desc" => "Prancha lateral com elevação",
                        "img" => "Side-Bridge.webp",
                        "musculo_trabalhado" => "Oblíquos, quadril, lombar",

                        "beneficios" => "A prancha lateral com elevação é um exercício que tem como objetivo fortalecer os músculos oblíquos e transverso do abdômen, além de trabalhar também os músculos do quadril e da região lombar. Esse exercício também ajuda a melhorar a estabilidade e o equilíbrio do corpo. Ao realizar a prancha lateral com elevação, o corpo é forçado a estabilizar a posição, o que aumenta a ativação muscular em comparação com outros exercícios abdominais tradicionais. Isso resulta em uma maior resistência do núcleo, ajudando a prevenir lesões e melhorando o desempenho em atividades físicas.",

                        "passos" => Array(
                            "Deite-se de lado, apoiando o antebraço no chão e mantenha o corpo reto, como se estivesse em uma prancha lateral.",
                            "Mantenha os pés juntos e as pernas esticadas.",
                            "Coloque a mão livre na cintura ou na cabeça.",
                            "Levante lentamente o quadril em direção ao teto.",
                            "Pause no topo do movimento e, em seguida, abaixe lentamente o quadril de volta à posição inicial.",
                            "Repita o movimento por várias repetições, e então mude para o outro lado do corpo."
                        )
                    ),
                    Array(
                        "nome" => "Abdominal lateral mão no pé",
                        "nome_url"=>"Abdominal-lateral-mao-no-pe",
                        "desc" => "Abdominal lateral mão no pé",
                        "img" => "Heel-Touch.webp",
                        "musculo_trabalhado" => "Oblíquos, quadril, lombar",

                        "beneficios" => "O abdominal lateral mão no pé é um exercício que trabalha principalmente os músculos oblíquos do abdômen, mas também recruta o reto abdominal e os músculos da região lombar. Além de fortalecer a musculatura abdominal, esse exercício ajuda a melhorar a estabilidade e o equilíbrio do tronco, aprimorar a postura e reduzir o risco de lesões na região lombar. Ele também pode contribuir para a diminuição da circunferência abdominal e a definição da cintura. Outro benefício é o fato de ser uma variação do abdominal tradicional, permitindo a diversificação dos treinos e a promoção de novos desafios para o corpo.",

                        "passos" => Array(
                            "Deite-se de costas no chão, com os pés firmemente apoiados no solo.",
                            "Mantenha os braços esticados ao longo do corpo.",
                            "Levante o tronco do chão, mantendo a coluna reta e os músculos abdominais contraídos.",
                            "Vire o tronco para um lado, mantendo os braços esticados e as mãos apontando para o pé correspondente.",
                            "Toque o pé com a mão, mantendo a posição por alguns segundos.",
                            "Retorne lentamente à posição inicial.",
                            "Repita o movimento para o outro lado, alternando os lados a cada repetição."
                        )
                    ),
                    Array(
                        "nome" => "Abdominal oblíquo no solo cruzado",
                        "nome_url"=>"Abdominal-obliquo-no-solo-cruzado",
                        "desc" => "abdominal oblíquo no solo cruzado",
                        "img" => "Half-Cross-Crunch.webp",
                        "musculo_trabalhado" => "Oblíquos, lombar",

                        "beneficios" => "O abdominal oblíquo no solo cruzado é um excelente exercício para trabalhar os músculos oblíquos externos e internos, que estão localizados nas laterais do abdômen. Além de tonificar e fortalecer a região abdominal, este exercício também ajuda a melhorar a postura, a estabilidade do tronco e a flexibilidade da coluna. Outros benefícios incluem o aumento da resistência muscular, a queima de gordura localizada na região abdominal e a prevenção de lesões lombares. O abdominal oblíquo no solo cruzado também pode ser adaptado para diferentes níveis de condicionamento físico, tornando-se um exercício versátil e eficaz para quem busca um abdômen mais definido e forte.",

                        "passos" => Array(
                            "Deite-se no chão com as pernas estendidas e os braços ao lado do corpo.",
                            "Flexione o joelho direito e cruze a perna esquerda sobre ele, apoiando o pé no chão.",
                            "Coloque a mão esquerda atrás da cabeça e a mão direita no chão ao lado do corpo.",
                            "Eleve o tronco, levando o cotovelo esquerdo em direção ao joelho direito.",
                            "Contraia o abdômen durante o movimento e mantenha a posição por alguns segundos.",
                            "Retorne lentamente à posição inicial e repita o movimento do outro lado, alternando as pernas e os braços."
                        )
                    ),
                    Array(
                        "nome" => "Flexão lateral no cabo",
                        "nome_url"=>"Flexao-lateral-no-cabo",
                        "desc" => "Flexão lateral no cabo",
                        "img" => "Cable-Side-Bend.webp",
                        "musculo_trabalhado" => "Oblíquos, lombar, ombros, glúteos",

                        "beneficios" => "A flexão lateral no cabo é um exercício que visa trabalhar principalmente os músculos oblíquos externos do abdômen, bem como os músculos da região lombar e glúteos. Este exercício é feito com o auxílio de um cabo de máquina de treinamento, que oferece uma resistência constante, permitindo um controle maior sobre o movimento e, consequentemente, um trabalho muscular mais eficiente. ",

                        "passos" => Array(
                            "Prenda uma corda ou pegador de cabo em uma polia baixa e selecione o peso desejado.",
                            "Posicione-se ao lado do cabo, segure o pegador com a mão que está mais próxima do cabo e deixe o braço estendido ao lado do corpo.",
                            "Afaste os pés na largura dos ombros e mantenha-os paralelos.",
                            "Mantenha a coluna ereta e a cabeça alinhada com a coluna.",
                            "Flexione lateralmente o tronco, levando o braço que está segurando o pegador em direção ao teto e mantendo o outro braço estendido ao lado do corpo.",
                            "Mantenha o abdômen contraído e o quadril estabilizado durante todo o movimento.",
                            "Retorne à posição inicial de forma controlada e repita o movimento para o outro lado."
                        )
                    ),
                    Array(
                        "nome" => "Prancha aranha",
                        "nome_url"=>"Prancha-aranha",
                        "desc" => "Prancha aranha",
                        "img" => "Spider-Plank.webp",
                        "musculo_trabalhado" => "Oblíquos, lombar",

                        "beneficios" => "A prancha aranha é um exercício que traz diversos benefícios para o corpo, especialmente para o fortalecimento da musculatura do core e do tronco. Ele consiste em assumir a posição de prancha tradicional e, em seguida, flexionar os joelhos em direção aos cotovelos, mantendo a estabilidade do corpo. Entre os benefícios da prancha aranha, destacam-se o fortalecimento dos músculos abdominais, lombares e dos glúteos, além de trabalhar a estabilidade e o equilíbrio do corpo como um todo. O exercício também ajuda a melhorar a postura e a reduzir a tensão na região lombar, o que pode ser benéfico para pessoas com dores nas costas.",

                        "passos" => Array(
                            "Comece em uma posição de prancha, com os cotovelos no chão e ombros e as pernas estendidas para trás.",
                            "Leve o joelho direito em direção ao cotovelo direito, dobrando a perna e girando o quadril para o lado.",
                            "Retorne a perna direita para a posição inicial de prancha e repita o mesmo movimento com a perna esquerda em direção ao cotovelo esquerdo.",
                            "Continue alternando os lados, mantendo o quadril baixo e os abdominais contraídos.",
                            "Tente manter a posição de prancha estável e não permita que o quadril suba ou desça enquanto realiza os movimentos de joelho em direção ao cotovelo."
                        )
                    )
                ),
                "Abdomen" => Array(
                    Array(
                        "nome" => "Abdominal reto",
                        "nome_url"=>"Abdominal-reto",
                        "desc" => "Abdominal reto",
                        "img" => "Crunch.webp",
                        "musculo_trabalhado" => "Reto abdominal, obliquos",

                        "beneficios" => "O abdominal reto é um exercício popular de fortalecimento do core que envolve a contração dos músculos abdominais para levantar o tronco do chão até a posição sentada. Entre os seus benefícios, destacam-se o fortalecimento dos músculos abdominais, o que pode melhorar a postura, a estabilidade da coluna vertebral e a capacidade de realizar atividades diárias com mais eficiência e segurança.",

                        "passos" => Array(
                            "Deite-se de costas em um colchonete com as pernas dobradas e os pés no chão.",
                            "Coloque as mãos atrás da cabeça, mantendo os cotovelos abertos.",
                            "Contraia os músculos abdominais e levante os ombros do chão em direção às coxas, mantendo o pescoço relaxado.",
                            "Expire enquanto realiza o movimento de subida e mantenha a contração dos músculos abdominais por alguns segundos.",
                            "Inspire enquanto retorna à posição inicial, abaixando os ombros lentamente até o colchonete."
                        )
                    ),
                    Array(
                        "nome" => "Abdominal com pernas elevadas",
                        "nome_url"=>"Abdominal-com-pernas-elevadas",
                        "desc" => "Abdominal com pernas elevadas",
                        "img" => "Double-Crunches.webp",
                        "musculo_trabalhado" => "Reto abdominal, obliquos",

                        "beneficios" => "O exercício abdominal com pernas elevadas é uma ótima opção para fortalecer a região do abdômen, incluindo os músculos inferiores. Ao realizar esse exercício regularmente, você pode esperar melhorias na sua postura, flexibilidade e estabilidade do tronco. Além disso, como envolve uma contração intensa dos músculos abdominais, pode ajudar a reduzir a gordura localizada na região da barriga. Outros benefícios incluem melhoria da circulação sanguínea na região do abdômen, alívio de dores nas costas e aumento da capacidade pulmonar. No entanto, é importante lembrar que nenhum exercício isolado é capaz de garantir resultados milagrosos, sendo necessário uma rotina regular de exercícios e uma alimentação equilibrada para alcançar resultados satisfatórios.",

                        "passos" => Array(
                            "Deite-se de costas em um colchonete ou tapete de exercícios com as pernas estendidas e os braços ao lado do corpo.",
                            "Levante as pernas juntas até que fiquem perpendiculares ao chão.",
                            "Mantenha os músculos abdominais contraídos enquanto levanta lentamente a parte superior do corpo em direção às pernas.",
                            "Pause por um segundo na posição mais alta antes de voltar lentamente à posição inicial, mantendo o controle do movimento.",
                            "Repita o movimento quantas vezes conseguir sem perder a forma adequada."
                        )
                    ),
                    Array(
                        "nome" => "Abdominal escalador",
                        "nome_url"=>"Abdominal-escalador",
                        "desc" => "Abdominal escalador",
                        "img" => "Mountain-climber.webp",
                        "musculo_trabalhado" => "Reto abdominal,coxas, panturrilhas",

                        "beneficios" => "O abdominal escalador é um exercício que ajuda a fortalecer os músculos abdominais, bem como os músculos do tronco e dos braços. Além disso, esse exercício também pode ajudar a melhorar a estabilidade do tronco e a resistência cardiovascular. Outros benefícios incluem a queima de calorias, a redução da gordura abdominal e a melhoria da postura. É importante lembrar que nenhum exercício isolado é capaz de garantir resultados milagrosos, sendo necessário uma rotina regular de exercícios e uma alimentação equilibrada para alcançar resultados satisfatórios.",

                        "passos" => Array(
                            "Comece na posição de prancha alta, com as mãos apoiadas no chão diretamente abaixo dos ombros e os braços estendidos.",
                            "Mantenha o corpo reto, apoiando-se nas pontas dos pés.",
                            "Leve um dos joelhos em direção ao peito, mantendo o outro pé estendido.",
                            "Volte o joelho de volta à posição inicial e leve o outro joelho em direção ao peito.",
                            "Continue alternando os joelhos, como se estivesse escalando uma montanha, mantendo o movimento constante e controlado.",
                            "Contraia os músculos abdominais durante todo o movimento, mantendo o core estabilizado.",
                            "Repita o exercício de 10 a 15 vezes ou quantas vezes conseguir sem perder a forma adequada."
                        )
                    ),
                    Array(
                        "nome" => "Prancha",
                        "nome_url"=>"Prancha",
                        "desc" => "Prancha",
                        "img" => "plank.webp",
                        "musculo_trabalhado" => "Reto abdominal,oblíquos, glúteos",

                        "beneficios" => "A prancha é um exercício que ajuda a fortalecer os músculos do core, incluindo os músculos abdominais, da região lombar e glúteos. Além disso, a prancha também pode ajudar a melhorar a postura, a estabilidade do tronco e a resistência cardiovascular. Outros benefícios incluem a redução da dor nas costas, a melhoria da coordenação motora e o aumento da flexibilidade.",

                        "passos" => Array(
                            "Deite-se de bruços no chão e posicione os cotovelos abaixo dos ombros, mantendo os antebraços apoiados no chão.",
                            "Levante o corpo, apoiando-se nas pontas dos pés e nos antebraços, mantendo o corpo reto e o core contraído.",
                            "Mantenha os cotovelos alinhados com os ombros e os antebraços paralelos um ao outro.",
                            "Olhe para baixo, mantendo a cabeça alinhada com a coluna vertebral.",
                            "Mantenha a posição pelo tempo desejado, começando com 20 a 30 segundos e aumentando gradualmente conforme a melhoria da força e resistência.",
                            "Para finalizar, abaixe o corpo de volta ao chão."
                        )
                    ),
                    Array(
                        "nome" => "Abdominal reto com aparelho",
                        "nome_url"=>"Abdominal-reto-com-aparelho",
                        "desc" => "Abdominal reto com aparelho",
                        "img" => "Ab-Roller-Crunch.webp",
                        "musculo_trabalhado" => "Reto abdominal, oblíquos",

                        "beneficios" => "O exercício abdominal reto com aparelho tem como principal objetivo fortalecer os músculos abdominais, em especial o reto abdominal. Além disso, o uso do aparelho proporciona maior estabilidade e controle durante a execução do exercício, minimizando o risco de lesões na coluna vertebral. Outros benefícios incluem a melhora da postura, aumento da resistência muscular e da força abdominal, além de ajudar a tonificar e definir a região abdominal. O exercício é indicado para pessoas de todos os níveis de condicionamento físico, mas é importante que seja executado com orientação adequada e respeitando os limites do seu corpo.",

                        "passos" => Array(
                            "Deite-se de costas sobre o aparelho, mantendo os joelhos flexionados e os pés apoiados no chão.",
                            "Segure as alças do aparelho com as mãos, mantendo os braços estendidos acima da cabeça.",
                            "Incline o tronco para frente, contraindo os músculos abdominais e levantando a cabeça e os ombros do chão.",
                            "Mantenha a posição por alguns segundos, concentrando a contração nos músculos abdominais.",
                            "Retorne à posição inicial, mantendo o controle do movimento e evitando deixar o tronco cair bruscamente.",
                            "Repita o exercício de acordo com a sua série."
                        )
                    ),
                    Array(
                        "nome" => "Tesoura",
                        "nome_url"=>"Tesoura",
                        "desc" => "Tesoura",
                        "img" => "Leg-Scissors.webp",
                        "musculo_trabalhado" => "Reto abdominal, oblíquos, coxas",

                        "beneficios" => "O exercício tesoura é uma ótima opção para fortalecer os músculos abdominais, especialmente o reto abdominal e os oblíquos. Além disso, ele também ajuda a fortalecer a região lombar, melhorar a flexibilidade e a coordenação motora. Outros benefícios incluem o aumento da resistência muscular e da capacidade respiratória. Esse exercício é relativamente simples e pode ser feito em casa sem equipamentos, mas é importante ter a orientação adequada para realizar a técnica corretamente e evitar lesões.",

                        "passos" => Array(
                            "Deite-se de costas no chão, com as pernas estendidas e os braços ao lado do corpo.",
                            "Levante as duas pernas em direção ao teto, mantendo-as retas e juntas.",
                            "Com as pernas paralelas cruze uma por cima da outra, em seguida retorne a posição inicial e em seguida cruze a outra por cima.",
                            "Alterne as pernas, fazendo o movimento de tesoura, mantendo as pernas estendidas e juntas durante todo o exercício.",
                            "Repita o exercício de acordo com sua série."
                        )
                    ),
                    Array(
                        "nome" => "Elevação de pernas",
                        "nome_url"=>"Elevacao-de-pernas",
                        "desc" => "Elevação de pernas",
                        "img" => "Lying-Leg-Raise.webp",
                        "musculo_trabalhado" => "Reto abdominal, coxas",

                        "beneficios" => "O exercício de elevação de pernas deitado é uma excelente opção para fortalecer os músculos abdominais inferiores e os flexores do quadril. Além disso, ele ajuda a melhorar a estabilidade do core e a resistência dos músculos abdominais. Outros benefícios incluem a melhora da postura e do equilíbrio corporal, além de ajudar na prevenção de lesões na coluna. Esse exercício pode ser realizado em casa, sem a necessidade de equipamentos e pode ser facilmente modificado para atender diferentes níveis de condicionamento físico.",

                        "passos" => Array(
                            "Deite-se de costas em um colchonete ou tapete, com as pernas estendidas e os braços ao lado do corpo.",
                            "Mantenha as pernas juntas e comece a levantar as pernas em direção ao teto, mantendo-as retas.",
                            "Continue a levantar as pernas até que os quadris saiam do chão e forme um ângulo de 90 graus com o tronco.",
                            "Mantenha essa posição por alguns segundos, enquanto contrai os músculos abdominais.",
                            "Abaixe as pernas lentamente, mantendo-as retas e controlando o movimento.",
                            "Repita o exercício de acordo com sua série."
                        )
                    ),
                    Array(
                        "nome" => "Abdominal em pé na polia alta",
                        "nome_url"=>"Abdominal-em-pe-na-polia-alta",
                        "desc" => "Abdominal em pé na polia alta",
                        "img" => "Standing-Cable-Crunch.webp",
                        "musculo_trabalhado" => "Reto abdominal, oblíquos",

                        "beneficios" => "O exercício abdominal em pé na polia alta é uma ótima maneira de trabalhar os músculos abdominais de uma forma dinâmica e funcional. Ele ajuda a fortalecer e tonificar os músculos abdominais superiores, inferiores e oblíquos, além de trabalhar os músculos das costas e do core. Outros benefícios incluem o aumento da estabilidade do tronco e do equilíbrio corporal, bem como a melhoria da postura. É uma opção versátil que pode ser facilmente adaptada para diferentes níveis de condicionamento físico e necessidades específicas de treinamento, tornando-se um exercício altamente eficaz para quem busca um abdômen forte e definido.",

                        "passos" => Array(
                            "Ajuste a altura da polia para que ela esteja acima da sua cabeça e fixe uma alça na extremidade.",
                            "Fique de costas para a polia e segure a corda com ambas as mãos, mantendo os braços dobrados na altura dos ombros.",
                            "Mantenha os pés afastados na largura dos ombros e os joelhos levemente flexionados.",
                            "Contraia os músculos abdominais levando os cotovelos em direção às suas coxas.",
                            "Mantenha a contração abdominal e volte lentamente à posição inicial.",
                            "Repita o exercício de acordo com sua série."
                        )
                    ),
                    Array(
                        "nome" => "Elevação de pernas na cadeira",
                        "nome_url"=>"Elevacao-de-pernas-na-cadeira",
                        "desc" => "Elevação de pernas na cadeira",
                        "img" => "Captains-Chair-Leg-Raise.webp",
                        "musculo_trabalhado" => "Reto abdominal, oblíquos, coxas",

                        "beneficios" => "O exercício de elevação da perna na cadeira do capitão é uma excelente maneira de fortalecer e tonificar os músculos abdominais e das pernas. O exercício trabalha principalmente os músculos oblíquos e transversos abdominais, bem como os quadríceps e os flexores do quadril.
                        Ao realizar o exercício, você estará se concentrando em manter a postura correta, o que ajudará a melhorar a força e o equilíbrio. O exercício também pode ajudar a melhorar a estabilidade lombar e a prevenir lesões nas costas. Além disso, a elevação da perna na cadeira do capitão é um exercício de baixo impacto, o que significa que é fácil para as articulações e pode ser realizado por pessoas de diferentes níveis de condicionamento físico.",

                        "passos" => Array(
                            "Posicione-se na cadeira do capitão, segurando as alças laterais para manter a estabilidade. As costas devem estar retas e os pés devem ficar suspensos do chão.",
                            "Comece o exercício levantando lentamente as pernas até a altura do peito, mantendo as pernas retas e os pés juntos.",
                            "Mantenha a posição por alguns segundos e, em seguida, abaixe lentamente as pernas de volta à posição inicial, sem permitir que elas toquem a plataforma da cadeira.",
                            "Repita o exercício por cerca de 3 séries de 12 a 15 repetições, ou quantas repetições você puder executar com boa forma."
                        )
                    ),
                    Array(
                        "nome" => "Abdominal curto",
                        "nome_url"=>"Abdominal-curto",
                        "desc" => "Abdominal curto",
                        "img" => "Quarter-Sit-up.webp",
                        "musculo_trabalhado" => "Reto abdominal, oblíquos",

                        "beneficios" => "O exercício abdominal curto é uma variação do clássico crunch abdominal e é uma excelente maneira de fortalecer e tonificar os músculos abdominais. Este exercício trabalha principalmente os músculos retos abdominais, que são responsáveis por flexionar a coluna vertebral.
                        Ao executar o exercício abdominal curto, você está se concentrando em contrair e apertar os músculos abdominais, o que ajuda a melhorar a definição muscular e a aparência geral do abdômen. Além disso, o exercício ajuda a melhorar a estabilidade lombar e a prevenir lesões nas costas, fortalecendo os músculos que suportam a coluna vertebral.",

                        "passos" => Array(
                            "Deite-se de costas no chão, com os joelhos dobrados e os pés apoiados no chão.",
                            "Estique os braços ao lado do corpo e os ombros relaxados.",
                            "Lentamente, levante o tronco em direção aos joelhos, contraindo os músculos abdominais. Certifique-se de manter o pescoço e a cabeça alinhados com a coluna vertebral e não force a cabeça para frente com as mãos.",
                            "Pause brevemente quando sentir a contração máxima dos músculos abdominais e, em seguida, abaixe lentamente o tronco de volta à posição inicial.",
                            "Repita o exercício quantas repetições você puder executar com boa forma."
                        )
                    ),
                    Array(
                        "nome" => "Abdominal na barra fixa",
                        "nome_url"=>"Abdominal-na-barra-fixa",
                        "desc" => "Abdominal na barra fixa com os joelhos",
                        "img" => "Hanging-Knee-Raises.webp",
                        "musculo_trabalhado" => "Reto abdominal, oblíquos",

                        "beneficios" => "O exercício abdominal na barra reta também conhecido como knee raises, é um excelente exercício para fortalecer e tonificar a região abdominal. Ao executar esse exercício, você fortalece os músculos abdominais inferiores e superiores, além dos músculos do tronco e das pernas.
                        O exercício pode ser realizado em qualquer barra fixa ou estação de tração. Ao levantar os joelhos em direção ao peito, você desafia a força do núcleo e promove a estabilidade e o equilíbrio do corpo. O exercício também ajuda a melhorar a flexibilidade e a amplitude de movimento das articulações das pernas e do quadril.",

                        "passos" => Array(
                            "Encontre uma barra fixa ou estação de tração e segure com as mãos na largura dos ombros.",
                            "Pendure-se na barra, com os braços estendidos e os pés fora do chão.",
                            "Mantenha os joelhos juntos e as pernas retas.",
                            "Comece a levantar os joelhos em direção ao peito, mantendo-os juntos.",
                            "Contraia os músculos abdominais enquanto levanta os joelhos.",
                            "Continue levantando os joelhos até que as coxas estejam paralelas ao chão ou o mais próximo possível do peito.",
                            "Mantenha a posição por alguns segundos e, em seguida, abaixe lentamente as pernas de volta à posição inicial.",
                            "Repita o movimento para o número desejado de repetições."
                        )
                    )
                ),
                "Coxas-anterior" => Array(
                    Array(
                        "nome" => "Levantamento terra",
                        "nome_url"=>"Levantamento-terra",
                        "desc" => "Levantamento terra",
                        "img" => "pernas-e-costas-levantamento-terra-deadlift.webp",
                        "musculo_trabalhado" => "Coxas anteriores, glúteos",

                        "beneficios" => "O exercício de Levantamento Terra, também conhecido como Deadlift, é um exercício composto que trabalha vários grupos musculares, incluindo os músculos das costas, glúteos, isquiotibiais e quadríceps. Ele é considerado um dos melhores exercícios para o fortalecimento da musculatura posterior do corpo, além de ser muito eficaz para desenvolver força e resistência muscular.
                        Os benefícios do Levantamento Terra incluem a melhora da postura, aumento da força geral do corpo, fortalecimento da musculatura das costas e do core, prevenção de lesões, aumento da densidade óssea, melhora da coordenação motora e estabilidade corporal.",

                        "passos" => Array(
                            "Coloque a barra no chão em frente a você, com as placas de peso do seu lado.",
                            "Fique de pé com os pés na largura dos ombros, mantendo os pés apontados para frente e os dedos dos pés sob a barra.",
                            "Agache-se e agarre a barra com as mãos afastadas na largura dos ombros, mantendo as mãos na frente das pernas.",
                            "Levante o peito e puxe as omoplatas para trás, mantendo a coluna vertebral em posição neutra.",
                            "Expire e levante a barra do chão, mantendo os braços estendidos.",
                            "Mantenha a barra próxima ao corpo e levante-a até ficar em pé, contraindo os músculos das costas, glúteos e pernas.",
                            "Mantenha a posição por um momento, depois abaixe a barra lentamente até o chão, enquanto inspira.",
                            "Repita o movimento para o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Agachamento búlgaro",
                        "nome_url"=>"Agachamento-bulgaro",
                        "desc" => "Agachamento búlgaro",
                        "img" => "Dumbbell-Bulgarian-Split-Squat.webp",
                        "musculo_trabalhado" => "Coxas anteriores, coxas posteriores, glúteos",

                        "beneficios" => "O agachamento búlgaro é um exercício que trabalha principalmente os músculos das pernas, glúteos e core. Ele é realizado com uma perna apoiada em um banco ou plataforma, enquanto a outra perna é flexionada em um agachamento, permitindo um grande alongamento muscular. Esse exercício é excelente para desenvolver força, equilíbrio e flexibilidade nas pernas, e também pode ajudar a melhorar a estabilidade do tronco e a postura.",

                        "passos" => Array(
                            "Segure um halter em cada mão e fique em pé de costas para um banco ou plataforma.",
                            "Levante uma perna e coloque o pé na plataforma ou banco.",
                            "Dê um passo para frente com a outra perna e mantenha o pé no chão.",
                            "Flexione a perna que está no chão, descendo o quadril em direção ao chão, mantendo a outra perna estendida para trás.",
                            "Mantenha a postura ereta, com o tronco levemente inclinado para a frente.",
                            "Empurre o calcanhar da perna que está no chão e retorne à posição inicial, mantendo o controle do movimento.",
                            "Repita o movimento para o número desejado de repetições e depois mude de perna."
                        )
                    ),
                    Array(
                        "nome" => "Agachamento livre com barra",
                        "nome_url"=>"Agachamento-livre-com-barra",
                        "desc" => "Agachamento livre com barra",
                        "img" => "Barbell-sumo-squat.webp",
                        "musculo_trabalhado" => "Coxas anteriores, coxas posteriores, glúteos",

                        "beneficios" => "O agachamento livre com barra é um exercício de força que trabalha os músculos da parte inferior do corpo, incluindo quadríceps, glúteos, isquiotibiais e panturrilhas, além de envolver a musculatura estabilizadora do core. Este exercício é muito popular entre atletas e praticantes de musculação devido à sua eficácia em aumentar a força e o tamanho muscular das pernas e do quadril.
                        Além disso, o agachamento livre com barra também pode melhorar a mobilidade das articulações do quadril, joelho e tornozelo, bem como a densidade óssea e a saúde geral do corpo.",

                        "passos" => Array(
                            "Comece em pé com a barra posicionada no rack de agachamento em uma altura que seja confortável para você levantá-la e posicione-se abaixo dela.",
                            "Coloque a barra nas costas, apoiando-a nos músculos do trapézio e segurando-a com as mãos ligeiramente mais afastadas do que a largura dos ombros.",
                            "Dê um passo à frente, posicione os pés na largura dos ombros e aponte os dedos dos pés ligeiramente para fora.",
                            "Mantendo as costas retas, flexione os joelhos e os quadris simultaneamente, como se estivesse sentando em uma cadeira imaginária, enquanto abaixa seu corpo lentamente.",
                            "Desça até que suas coxas estejam paralelas ao chão ou até onde se sentir confortável.",
                            "Empurre através dos calcanhares e estenda as pernas e quadris para levantar o peso de volta à posição inicial."
                        )
                    ),
                    Array(
                        "nome" => "Agachamento unilateral",
                        "nome_url"=>"Agachamento-unilateral",
                        "desc" => "Agachamento unilateral",
                        "img" => "Barbell-Split-Squat.webp",
                        "musculo_trabalhado" => "Coxas anteriores, coxas posteriores, glúteos",

                        "beneficios" => "O agachamento unilateral é um exercício que consiste em realizar agachamentos apoiando-se em uma perna de cada vez, trabalhando principalmente os músculos da coxa, glúteos e abdômen. Esse exercício ajuda a melhorar o equilíbrio e a estabilidade corporal, além de desenvolver força e resistência muscular nas pernas. Ele também pode ajudar a corrigir desequilíbrios musculares entre as pernas, já que é possível notar diferenças de força e desenvolvimento entre elas. Outro benefício é a possibilidade de variação na carga utilizada, seja com o uso de halteres, barras ou apenas com o peso corporal.",

                        "passos" => Array(
                            "Posicione a barra nas costas, entre o trapézio e a base do pescoço.",
                            "Dê um passo à frente com uma das pernas e mantenha a outra estendida para trás.",
                            "Mantenha os pés afastados na largura do quadril e com as pontas dos pés viradas para a frente.",
                            "Flexione o joelho da perna da frente, descendo o corpo em direção ao chão, até que a coxa fique paralela ao solo.",
                            "Mantenha a coluna reta, os abdominais contraídos e o peito erguido durante todo o movimento.",
                            "Empurre o chão com a perna da frente e retorne à posição inicial, repetindo o movimento por várias repetições.",
                            "Troque de perna e repita o movimento."
                        )
                    ),
                    Array(
                        "nome" => "Agachamento taça",
                        "nome_url"=>"Agachamento-taca",
                        "desc" => "Agachamento taça",
                        "img" => "Dumbbell-Goblet-Squat.webp",
                        "musculo_trabalhado" => "Coxas anteriores, coxas posteriores, glúteos",

                        "beneficios" => "O agachamento taça é um exercício de fortalecimento muscular que oferece vários benefícios. Ele é especialmente útil para desenvolver a força e a resistência das pernas, glúteos e músculos centrais. Além disso, é uma opção de exercício de baixo impacto para pessoas que têm problemas nas articulações do joelho ou quadril, pois ele ajuda a fortalecer as pernas sem colocar pressão nas articulações.
                        Outro benefício do agachamento taça é que ele pode melhorar a postura e a estabilidade do core, pois exige o engajamento dos músculos abdominais e das costas para manter a coluna ereta durante o movimento. ",

                        "passos" => Array(
                            "Fique em pé com os pés afastados na largura dos ombros e segure um halter ou anilha com ambas as mãos, mantendo-o próximo ao peito com os cotovelos dobrados.",
                            "Mantenha as costas retas e contraia os músculos abdominais.",
                            "Comece a flexionar os joelhos e abaixar o corpo lentamente, mantendo o peso nos calcanhares e os joelhos voltados para fora.",
                            "Continue descendo até que as coxas fiquem paralelas ao chão, mantendo as costas retas e o halter ou anilha próximo ao peito.",
                            "Pause por um momento e, em seguida, comece a se levantar lentamente, empurrando através dos calcanhares e contraindo os glúteos no topo do movimento.",
                            "Repita o movimento para completar o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Agachamento lateral",
                        "nome_url"=>"Agachamento-lateral",
                        "desc" => "Agachamento lateral",
                        "img" => "Barbell-Lateral-Lunge.webp",
                        "musculo_trabalhado" => "Coxas anteriores, coxas posteriores, glúteos",

                        "beneficios" => "O agachamento lateral com barra livre é um exercício que oferece muitos benefícios pois ele trabalha os músculos das pernas, glúteos e quadris, tonificando e fortalecendo essas áreas. Além disso, ajuda a melhorar a estabilidade e o equilíbrio, o que é importante para prevenir lesões e melhorar o desempenho em outras atividades físicas. O agachamento lateral com barra livre também pode ser um ótimo exercício cardiovascular, já que aumenta a frequência cardíaca e a respiração.",

                        "passos" => Array(
                            "Posicione uma barra com pesos em um suporte de agachamento, ajustando a altura para que você possa levantá-la facilmente.",
                            "Fique em pé de frente para a barra, com os pés afastados na largura dos ombros.",
                            "Coloque a barra nas costas, apoiando-a nos músculos do trapézio e segurando-a com as mãos ligeiramente mais afastadas do que a largura dos ombros.",
                            "Com a barra nas costas dê um passo largo para o lado flexionando os joelhos, mantendo a perna oposta estendida. Desça até que a coxa da perna flexionada esteja paralela ao chão ou um pouco abaixo.",
                            "Mantenha a posição de agachamento por alguns segundos e, em seguida, empurre-se para cima, voltando à posição inicial.",
                            "Repita o movimento do outro lado, dando um passo largo para o lado oposto.",
                            "Alterne os lados para realizar o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Avanço",
                        "nome_url"=>"Avanco",
                        "desc" => "Avanço",
                        "img" => "Dumbbell-Lunge.webp",
                        "musculo_trabalhado" => "Coxas anteriores, coxas posteriores, glúteos",

                        "beneficios" => "O agachamento avanço é um exercício que trabalha principalmente os músculos das pernas, quadris e glúteos. Ele consiste em dar um passo à frente com uma perna e flexionar os joelhos até que ambas as pernas estejam em um ângulo de 90 graus.
                        Além de fortalecer as pernas e glúteos, o agachamento avanço também pode ajudar a melhorar o equilíbrio e a estabilidade. Isso porque o exercício exige um controle maior do corpo, principalmente durante a fase de avanço.
                        O agachamento avanço pode ser feito com ou sem pesos, e é uma excelente opção para quem busca fortalecer a região das pernas e glúteos. É importante lembrar de manter a postura correta durante todo o exercício, com os ombros para trás e a cabeça erguida.",

                        "passos" => Array(
                            "Segure um par de halteres em cada mão, mantendo os braços ao lado do corpo. Fique em pé com os pés na largura dos ombros e as palmas das mãos voltadas para dentro.",
                            "Dê um passo largo à frente com uma das pernas, flexionando o joelho até que a coxa fique paralela ao chão. O joelho oposto deve quase tocar o chão.",
                            "Mantenha o tronco ereto e o peito para cima, com o abdômen contraído. Os halteres devem ficar ao lado do corpo durante todo o movimento.",
                            "Empurre-se de volta à posição inicial, pressionando o calcanhar da perna da frente para retornar à posição em pé.",
                            "Repita o movimento com a outra perna.",
                            "Alterne as pernas para realizar o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Agachamento no cabo",
                        "nome_url"=>"Agachamento-no-cabo",
                        "desc" => "Agachamento no cabo",
                        "img" => "Cable-Squat.webp",
                        "musculo_trabalhado" => "Coxas anteriores, coxas posteriores, glúteos",

                        "beneficios" => "O agachamento no cabo é um exercício que traz vários benefícios para o fortalecimento muscular das pernas, glúteos e quadril, além de melhorar a estabilidade, equilíbrio e resistência. Ao adicionar uma resistência extra através do cabo, é possível aumentar o desafio do exercício e trabalhar músculos estabilizadores que são essenciais para a saúde e o bem-estar. Como uma variação do agachamento tradicional, o agachamento no cabo também é uma ótima maneira de trazer variedade para a rotina de treino e trabalhar diferentes grupos musculares.",

                        "passos" => Array(
                            "Prenda o pegador no equipamento de treinamento, ajustando-a na altura mais baixa.",
                            "Segure as alças firmemente.",
                            "Fique agaichado com os pés afastados na largura dos ombros e aponte os dedos dos pés para frente.",
                            "Inspire e comece a subir lentamente, mantendo a coluna vertebral reta e o peito para cima.",
                            "Continue subindo até que fique de pé.",
                            "Expire e comece a descer lentamente, dobrando os joelhos e jogando os quadris para trás.",
                            "Repita o movimento para o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Avanço no cabo",
                        "nome_url"=>"Avanco-no-cabo",
                        "desc" => "Avanço no cabo",
                        "img" => "Cable-Forward-Lunge.webp",
                        "musculo_trabalhado" => "Coxas anteriores, coxas posteriores, glúteos",

                        "beneficios" => "Os exercícios de avanço no cabo é altamente benéfico para fortalecer os músculos das pernas e glúteos, melhorar a estabilidade do core e equilíbrio corporal, aumentar a flexibilidade e mobilidade das articulações das pernas, reduzir o risco de lesões musculares e articulares, melhorar a postura corporal, aumentar a resistência muscular e endurance, melhorar o desempenho em atividades físicas e esportes, queimar calorias e reduzir gordura corporal, melhorar a autoestima e confiança, e ajudar a prevenir doenças ósseas como a osteoporose. É fundamental realizar esses exercícios com a técnica adequada e sob a orientação de um profissional de educação física para maximizar os resultados e evitar lesões.",

                        "passos" => Array(
                            "Comece de pé, com uma corda presa em uma polia na altura adequada para você.",
                            "De costas para a polia segure a corda com as duas mãos  atrás do pescoço.",
                            "Dê um passo à frente com um pé, mantendo o outro pé no lugar.",
                            "Mantenha o pé da frente apoiado no chão e flexione o joelho da perna de trás até que ele quase toque o chão.",
                            "Mantenha o tronco ereto e a postura alinhada enquanto desce em direção ao chão.",
                            "Empurre o pé da frente para voltar à posição inicial enquanto estende o joelho da perna de trás.",
                            "Repita o movimento com a outra perna.",
                            "Alterne as pernas e repita o movimento pelo número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Cadeira extensora",
                        "nome_url"=>"Cadeira-extensora",
                        "desc" => "Cadeira extensora",
                        "img" => "LEG-EXTENSION.webp",
                        "musculo_trabalhado" => "Coxas anteriores",

                        "beneficios" => "Fazer exercícios na cadeira extensora pode proporcionar diversos benefícios para o fortalecimento muscular das pernas, como o fortalecimento dos quadríceps, melhora da estabilidade do joelho, aumento da força e resistência das pernas, prevenção de lesões, melhora da postura corporal, aumento da densidade óssea, melhora da mobilidade e flexibilidade das pernas, queima de calorias e redução de gordura corporal, aumento da autoestima e confiança, e melhora do desempenho em atividades físicas e esportes que exigem força nas pernas. É fundamental lembrar que a execução do exercício deve ser realizada com a técnica adequada e sob a orientação de um profissional de educação física, além de começar com uma carga leve e aumentar a intensidade gradualmente para evitar lesões e maximizar os resultados.",

                        "passos" => Array(
                            "Sente-se na cadeira, mantendo a coluna reta e apoiada no encosto.",
                            "Ajuste a almofada da cadeira extensora para que ela fique entre os pés e a canela.",
                            "Agarre as alças laterais da cadeira para se estabilizar.",
                            "Lentamente, empurre a plataforma com os pés para estender os joelhos completamente.",
                            "Pause brevemente no topo do movimento, mantendo os joelhos estendidos, mas sem travá-los.",
                            "Contraia os músculos dos quadríceps ao estender as pernas.",
                            "Retorne a plataforma para a posição inicial, abaixando lentamente os joelhos até a posição de 90 graus."
                        )
                    ),
                    Array(
                        "nome" => "Leg press",
                        "nome_url"=>"Leg-press",
                        "desc" => "Leg press",
                        "img" => "Leg-Press.webp",
                        "musculo_trabalhado" => "Coxas anteriores, quadril, panturrilha",

                        "beneficios" => "O Leg Press é um exercício que oferece diversos benefícios para o corpo, especialmente para as pernas e glúteos. Ele ajuda a fortalecer os músculos da coxa, quadril e panturrilha, além de melhorar a flexibilidade e o equilíbrio. O exercício também é uma opção para quem tem problemas nas costas ou articulações, pois permite um movimento mais controlado e seguro. Além disso, o Leg Press pode ajudar a aumentar a densidade óssea e melhorar a resistência muscular, o que pode ser benéfico para atletas e pessoas com um estilo de vida mais ativo.",

                        "passos" => Array(
                            "Ajuste o banco e a plataforma do Leg Press de acordo com a sua altura e postura.",
                            "Sente-se no banco e coloque os pés na plataforma com os dedos apontando para cima ou ligeiramente para fora.",
                            "Mantenha as costas retas e pressione a plataforma para frente com as pernas, evitando travar os joelhos.",
                            "Pause por um segundo quando as pernas estiverem estendidas e, em seguida, abaixe a plataforma de volta, controlando o movimento.",
                            "Repita o exercício de acordo com a série e repetições recomendadas."
                        )
                    ),
                    Array(
                        "nome" => "Hack",
                        "nome_url"=>"Hack",
                        "desc" => "Hack",
                        "img" => "Sled-Hack-Squat.webp",
                        "musculo_trabalhado" => "Coxas anteriores, quadril, glúteos",

                        "beneficios" => "O exercício de Hack é um ótimo complemento para os treinos de perna, pois trabalha os músculos da coxa, quadril e glúteos. Ele ajuda a fortalecer as pernas, aumentar a resistência muscular e melhorar a estabilidade do corpo. Além disso, o Hack pode ajudar a melhorar a postura, reduzir o risco de lesões e aumentar a flexibilidade. Como o exercício envolve a realização de movimentos mais controlados, também pode ser uma opção mais segura para pessoas com problemas nas articulações ou nas costas. Combinado com uma dieta equilibrada e outros exercícios, o Hack pode ser uma ferramenta eficaz para alcançar os objetivos de fitness e melhorar a qualidade de vida.",

                        "passos" => Array(
                            "Ajuste o aparelho de acordo com a sua altura e postura, de forma que seus ombros e seus pés fiquem apoiados na plataforma do aparelho.",
                            "Posicione as pernas estendidas no aparelho, com os dedos dos pés apontando para a frente e levemente para fora.",
                            "Agache-se, mantendo as costas retas e a cabeça erguida, e abaixe a plataforma do aparelho o máximo que conseguir, mantendo as pernas estendidas.",
                            "Empurre a plataforma de volta à posição inicial, estendendo completamente as pernas, mas sem travar os joelhos.",
                            "Repita o exercício de acordo com a série e repetições recomendadas."
                        )
                    ),
                    Array(
                        "nome" => "Agachamento sumô",
                        "nome_url"=>"Agachamento-sumo",
                        "desc" => "Agachamento sumô",
                        "img" => "Sumo-Plie-Dumbbell-Squat.webp",
                        "musculo_trabalhado" => "Coxas anteriores, glúteos",

                        "beneficios" => "O agachamento sumô é um exercício altamente benéfico para fortalecer os músculos inferiores do corpo. Ao adotar uma postura ampla com os pés virados para fora, ele direciona o foco para os glúteos, quadríceps e adutores, proporcionando um treinamento eficaz para essas áreas. Além de promover o ganho de massa muscular e tonificação, o agachamento sumô também melhora a estabilidade e o equilíbrio das pernas, aumenta a flexibilidade dos quadris e fortalece a região lombar. Esse exercício é especialmente útil para atletas que desejam melhorar o desempenho em esportes que envolvem movimentos laterais, como basquete e tênis, além de ser uma ótima opção para quem busca desenvolver um corpo mais forte e definido.",

                        "passos" => Array(
                            "Segure um halter com as duas mãos no centro do corpo.",
                            "Fique em pé com os pés mais afastados do que a largura dos ombros, com os dedos dos pés apontando ligeiramente para fora.",
                            "Mantenha a coluna reta, os ombros para trás e o olhar para frente.",
                            "Flexione os joelhos lentamente, mantendo o peso nos calcanhares.","Desça até que suas coxas estejam paralelas ao chão ou até onde for confortável para você.",
                            "Certifique-se de que seus joelhos não ultrapassem a linha dos dedos dos pés durante a descida.",
                            "Mantenha a posição por um breve momento, concentrando-se na contração dos músculos das pernas e glúteos.",
                            "Empurre o chão com os calcanhares e estenda os joelhos para retornar à posição inicial."
                        )
                    ),
                    Array(
                        "nome" => "Agachamento smith",
                        "nome_url"=>"Agachamento-smith",
                        "desc" => "Agachamento smith",
                        "img" => "agachamento-smith.webp",
                        "musculo_trabalhado" => "Coxas anteriores, coxas anteriores, glúteos",

                        "beneficios" => "O exercício de agachamento no Smith é uma variação do tradicional agachamento que oferece diversos benefícios para o corpo. Ao realizá-lo, você fortalece e desenvolve os músculos das pernas, incluindo quadríceps, glúteos, isquiotibiais e panturrilhas. Isso resulta em pernas mais fortes, tonificadas e poderosas. Além disso, o agachamento no Smith também trabalha os músculos estabilizadores, contribuindo para uma melhor estabilidade e equilíbrio corporal. O exercício também pode ajudar a melhorar a postura, uma vez que envolve a ativação do core e dos músculos das costas. Outro benefício é a possibilidade de ajustar a carga e a altura da barra no Smith, permitindo uma progressão gradual à medida que você ganha força. O agachamento no Smith também oferece um maior nível de segurança e estabilidade em comparação com o agachamento livre, sendo uma opção interessante para pessoas com restrições de mobilidade ou que estejam começando a praticar o exercício.",

                        "passos" => Array(
                            "Posicione-se embaixo da barra do Smith, com os ombros alinhados com a altura desejada da barra.",
                            "Coloque os pés ligeiramente afastados, em uma posição confortável e estável, com os dedos dos pés apontados ligeiramente para fora.",
                            "Agarre a barra com as mãos, mantendo uma pegada firme e segura.",
                            "Destrave a barra do apoio, mantendo os pés firmemente plantados no chão.",
                            "Mantenha as costas retas e o olhar para frente, direcionando o olhar para um ponto fixo à sua frente.",
                            "Inicie o movimento flexionando os joelhos e os quadris, abaixando o corpo até que as coxas fiquem paralelas ao chão ou em uma posição confortável.",
                            "Mantenha o peso nos calcanhares e evite que os joelhos ultrapassem a linha dos dedos dos pés.",
                            "Pause brevemente no ponto mais baixo do agachamento e, em seguida, estenda as pernas e os quadris para retornar à posição inicial.",
                            "Mantenha uma respiração adequada, inspirando ao descer e expirando ao subir.",
                            "Repita o movimento para o número desejado de repetições, focando na técnica correta e mantendo o controle do movimento."
                        )
                    ),
                    Array(
                        "nome" => "Cadeira abdutora",
                        "nome_url"=>"Cadeira-abdutora",
                        "desc" => "Cadeira abdutora",
                        "img" => "../../back/Coxas-posterior/HiP-ABDUCTION-MACHINE.webp",
                        "musculo_trabalhado" => "Glúteos, coxas anteriores, coxas posteriores",

                        "beneficios" => "O exercício de cadeira abdutora é uma ótima opção para fortalecer os músculos adutores da região da coxa. Ao realizar esse movimento, você trabalha especificamente os músculos do interior da coxa, como o adutor longo e curto, além de envolver outros músculos estabilizadores e do core. Isso resulta em pernas mais fortes, tonificadas e proporciona uma maior estabilidade nas articulações do quadril e do joelho. Além disso, a cadeira abdutora auxilia no desenvolvimento do equilíbrio e na melhora da postura corporal. O exercício também pode ser útil na prevenção de lesões, principalmente para atletas que praticam esportes que exigem movimentos laterais e de agilidade.",

                        "passos" => Array(
                            "Sente-se na cadeira abdutora, ajustando a altura do assento de acordo com a sua altura.",
                            "Posicione os pés nos apoios laterais da cadeira, mantendo as pernas afastadas na largura dos ombros.",
                            "Certifique-se de que as costas estejam apoiadas no encosto da cadeira e segure as alças laterais para manter o equilíbrio.",
                            "Ajuste a carga de acordo com suas capacidades, lembrando-se de começar com um peso mais leve e progredir gradualmente.",
                            "Inicie o movimento pressionando os pés nos apoios laterais e afastando as pernas para fora, contra a resistência da máquina.",
                            "Mantenha o controle do movimento e evite utilizar o impulso para abrir as pernas.",
                            "Ao atingir a posição máxima de abdução, pause por um momento e concentre-se na contração dos músculos adutores.",
                            "Lentamente, retorne as pernas à posição inicial, controlando o movimento.",
                            "Realize o número desejado de repetições, mantendo uma respiração adequada."
                        )
                    ),
                    Array(
                        "nome" => "Cadeira adutora",
                        "nome_url"=>"Cadeira-adutora",
                        "desc" => "Cadeira abdutora",
                        "img" => "../../back/Coxas-posterior/HIP-ADDUCTION-MACHINE.webp",
                        "musculo_trabalhado" => "Coxas internas",

                        "beneficios" => "O exercício de cadeira adutora é uma excelente opção para fortalecer os músculos adutores da região da coxa. Ao realizar esse movimento, você trabalha de forma específica os músculos do interior da coxa, como o adutor longo e curto. O fortalecimento desses músculos contribui para a estabilidade e equilíbrio do corpo, além de auxiliar na prevenção de lesões, principalmente nas articulações do quadril e do joelho. Além disso, a cadeira adutora também pode ajudar na correção de desequilíbrios musculares entre a musculatura adutora e abdutora das pernas. Essa simetria muscular é essencial para um bom alinhamento e funcionamento das pernas durante atividades cotidianas e esportivas.",

                        "passos" => Array(
                            "Sente-se na cadeira adutora, ajustando a altura do assento de acordo com a sua altura.",
                            "Posicione as pernas na parte externa das almofadas acolchoadas, com os joelhos flexionados em um ângulo de aproximadamente 90 graus.",
                            "Segure as alças laterais para manter o equilíbrio e a estabilidade durante o exercício.",
                            "Ajuste a carga de acordo com suas capacidades, lembrando-se de começar com um peso mais leve e progredir gradualmente.",
                            "Inicie o movimento pressionando as pernas contra as almofadas, aproximando-as uma da outra.",
                            "Mantenha o controle do movimento e evite utilizar o impulso para fechar as pernas.",
                            "Ao atingir a posição máxima de adução, pause por um momento e concentre-se na contração dos músculos adutores.",
                            "Lentamente, retorne as pernas à posição inicial, controlando o movimento.",
                            "Realize o número desejado de repetições, mantendo uma respiração adequada."
                        )
                    )
                ),
                "Panturrilhas" => Array(
                    Array(
                        "nome" => "Elevação de panturrilhas",
                        "nome_url"=>"Elevacao-de-panturrilhas",
                        "desc" => "Elevação de panturrilha com peso do corpo",
                        "img" => "standing-calf-raise.webp",
                        "musculo_trabalhado" => "panturrilhas",

                        "beneficios" => "A elevação de panturrilhas é um exercício fundamental para fortalecer os músculos da panturrilha. Essa prática contribui significativamente para o desenvolvimento da musculatura das pernas, melhorando a estabilidade e a resistência. Além de promover a definição muscular, a elevação de panturrilhas auxilia na prevenção de lesões comuns, como distensões musculares, fortalecendo a estrutura da panturrilha. Essencial para atletas e praticantes de atividade física regular, o exercício melhora a capacidade de propulsão durante atividades como corrida e salto. Seja na versão com peso corporal, barra ou máquina, a elevação de panturrilhas é versátil e pode ser adaptada a diferentes níveis de condicionamento físico",

                        "passos" => Array(
                            "Fique em pé, com os pés paralelos e alinhados com os ombros. Mantenha os joelhos levemente flexionados para evitar a hiperextensão.",
                            "Escolha se realizará o exercício em uma superfície elevada, como uma plataforma de elevação de panturrilha, ou no chão.",
                            "Eleve os calcanhares o mais alto possível contraindo os músculos da panturrilha.",
                            "Segure por um segundo na posição mais alta, concentrando a contração nas panturrilhas.",
                            "Desça os calcanhares de volta à posição inicial de maneira controlada.",
                            "Mantenha uma respiração regular, inspirando enquanto eleva e expirando durante a descida."
                        )
                    ),
                    Array(
                        "nome" => "Elevação de panturrilhas sentado",
                        "nome_url"=>"Elevacao-de-panturrilhas-sentado",
                        "desc" => "Elevação de panturrilhas sentado",
                        "img" => "Lever-Seated-Calf-Raise.webp",
                        "musculo_trabalhado" => "panturrilhas",

                        "beneficios" => "A elevação de panturrilha sentado é um exercício eficaz para fortalecer os músculos da panturrilha. Ao realizar esse exercício, sentado em uma cadeira ou banco com os pés apoiados em uma plataforma elevada, você concentra o trabalho nos músculos gastrocnêmios e sóleos da panturrilha. Isso contribui para o aumento da força e resistência desses músculos, resultando em pernas mais tonificadas e definidas. Além disso, a elevação de panturrilha sentado ajuda a melhorar a estabilidade dos tornozelos, o equilíbrio e a postura corporal. Esse exercício também pode ser benéfico para atletas envolvidos em esportes que exigem força explosiva nas pernas, como corrida, salto em altura ou basquete.",

                        "passos" => Array(
                            "Sente-se em uma cadeira ou banco com os pés apoiados em uma plataforma elevada.",
                            "Mantenha as costas retas e os ombros relaxados.",
                            "Deixe os calcanhares descerem o máximo possível.",
                            "Empurre com força os dedos dos pés para cima, contraindo os músculos da panturrilha.",
                            "Levante os calcanhares o máximo que puder, ficando na ponta dos pés.",
                            "Mantenha-se na posição elevada por um breve momento.",
                            "Desça lentamente os calcanhares de volta à posição inicial, alongando os músculos da panturrilha.",
                            "Execute o número desejado de repetições, mantendo uma boa técnica e respirando adequadamente."
                        )
                    ),
                    Array(
                        "nome" => "Elevação de panturrilhas em pé com halteres",
                        "nome_url"=>"Elevacao-de-panturrilhas-sentado-em-pe-com-halteres",
                        "desc" => "Elevação de panturrilhas em pé com halteres",
                        "img" => "Dumbbell-Calf-Raise.webp",
                        "musculo_trabalhado" => "panturrilhas",

                        "beneficios" => "A elevação de panturrilha em pé com halteres é um exercício altamente eficaz para fortalecer e desenvolver os músculos da panturrilha. Ao segurar halteres nas mãos e ficar em pé, você concentra o trabalho nos músculos gastrocnêmios e sóleos da panturrilha, promovendo o aumento da força e da resistência nessa região. Além de tonificar as panturrilhas, esse exercício ajuda a melhorar a estabilidade dos tornozelos, o equilíbrio e a postura corporal. A utilização de halteres proporciona a possibilidade de progressão e aumento da intensidade, permitindo que você desafie seus músculos progressivamente.",

                        "passos" => Array(
                            "Fique em pé com os pés afastados na largura dos ombros sobre uma plataforma, segurando um halter em cada mão.",
                            "Mantenha as costas retas, os ombros para trás e o olhar para frente.",
                            "Descendo, estique os músculos da panturrilha ao abaixar os calcanhares o máximo possível.",
                            "Empurre com força os dedos dos pés para cima, contraindo os músculos da panturrilha.",
                            "Eleve os calcanhares o máximo que puder, ficando na ponta dos pés.",
                            "Mantenha-se na posição elevada por um momento, sentindo a contração dos músculos da panturrilha.",
                            "Desça lentamente os calcanhares de volta à posição inicial, alongando os músculos da panturrilha.",
                            "Execute o número desejado de repetições, mantendo uma boa técnica e respirando adequadamente."
                        )
                    ),
                    Array(
                        "nome" => "Elevação de panturrilhas no hack",
                        "nome_url"=>"Elevacao-de-panturrilhas-no-hack",
                        "desc" => "Elevação de panturrilhas no hack",
                        "img" => "Hack-Machine-One-Leg-Calf-Raise.webp",
                        "musculo_trabalhado" => "panturrilhas",

                        "beneficios" => "A elevação de panturrilha com um pé no hack é um exercício eficaz para fortalecer e desenvolver os músculos da panturrilha de forma unilateral. Ao utilizar o hack, com um pé de cada vez, você direciona o trabalho para o gastrocnêmio e o sóleo, promovendo o aumento da força e resistência nessa região. Além de tonificar as panturrilhas, esse exercício ajuda a melhorar a estabilidade e o equilíbrio, além de corrigir assimetrias musculares entre as pernas. A execução unilateral também permite um maior foco nos músculos trabalhados, proporcionando um treinamento mais intenso e direcionado.",

                        "passos" => Array(
                            "Fique em pé diante do hack com a ponta de um pé apoiada no apoio do hack e o outro pé estendido para trás.",
                            "Mantenha as costas retas, os ombros para trás e o olhar para frente.",
                            "Flexione o pé apoiado no hack, abaixando o calcanhar o máximo possível.",
                            "Empurre com força o pé para cima, contraindo os músculos da panturrilha.",
                            "Eleve o calcanhar o máximo que puder, ficando na ponta do pé.",
                            "Mantenha-se na posição elevada por um breve momento, sentindo a contração dos músculos da panturrilha.",
                            "Desça lentamente o calcanhar de volta à posição inicial, alongando os músculos da panturrilha.",
                            "Realize o número desejado de repetições, mantendo uma boa técnica e respirando adequadamente."
                        )
                    ),
                    Array(
                        "nome" => "Elevação de panturrilhas no leg press",
                        "nome_url"=>"Elevacao-de-panturrilhas-no-leg-press",
                        "desc" => "Elevação de panturrilhas no leg press",
                        "img" => "Leg-Press-Calf-Raise.webp",
                        "musculo_trabalhado" => "panturrilhas",

                        "beneficios" => "A elevação de panturrilha no leg press é um exercício altamente eficaz para fortalecer e tonificar os músculos da panturrilha. Ao utilizar o leg press, com os pés posicionados na plataforma e os calcanhares em extensão, você concentra o trabalho nos músculos gastrocnêmios e sóleos, promovendo o aumento da força e resistência nessa região. Além de desenvolver panturrilhas mais definidas, esse exercício contribui para melhorar a estabilidade e equilíbrio dos tornozelos, além de auxiliar na correção de assimetrias musculares entre as pernas. A utilização do leg press permite um controle preciso da carga, permitindo a progressão gradual do treinamento.",

                        "passos" => Array(
                            "Sente-se no leg press e ajuste a posição da plataforma para apoiar os calcanhares, com os dedos dos pés voltados para cima.",
                            "Ajuste a posição do assento para um ângulo de aproximadamente 90 graus nos joelhos.",
                            "Mantenha as costas retas e segure as alças laterais para maior estabilidade.",
                            "Flexione os pés, abaixando os calcanhares o máximo possível.",
                            "Empurre com força os dedos dos pés para cima, contraindo os músculos da panturrilha.",
                            "Eleve os calcanhares o máximo que puder, ficando na ponta dos pés.",
                            "Mantenha-se na posição elevada por um momento, sentindo a contração dos músculos da panturrilha.",
                            "Desça lentamente os calcanhares de volta à posição inicial, alongando os músculos da panturrilha.",
                            "Realize o número desejado de repetições, mantendo uma boa técnica e respirando adequadamente."
                        )
                    ),
                    Array(
                        "nome" => "Elevação de panturrilhas na polia",
                        "nome_url"=>"Elevacao-de-panturrilhas-na-polia",
                        "desc" => "Elevação de panturrilhas na polia",
                        "img" => "Calf-Raise-with-Resistance-Band.webp",
                        "musculo_trabalhado" => "panturrilhas",

                        "beneficios" => "A elevação de panturrilha na polia é um exercício que proporciona diversos benefícios para os músculos da panturrilha. Ao utilizar a polia você direciona o trabalho para os músculos gastrocnêmios e sóleos, promovendo o fortalecimento e tonificação dessa região. Além de desenvolver panturrilhas mais definidas, esse exercício contribui para melhorar a estabilidade e o equilíbrio dos tornozelos, além de ajudar a corrigir desequilíbrios musculares entre as pernas. A elevação de panturrilha na polia permite um movimento suave e controlado, ajustando a resistência de acordo com a carga selecionada.",

                        "passos" => Array(
                            "Fique em pé de costas para a polia, segurando a alça com as mãos.",
                            "Posicione os pés afastados na largura dos ombros.",
                            "Mantenha as costas retas, os ombros para trás e o olhar para frente.",
                            "Flexione os pés, abaixando os calcanhares o máximo possível.",
                            "Empurre com força os dedos dos pés para cima, contraindo os músculos da panturrilha.",
                            "Eleve os calcanhares o máximo que puder, ficando na ponta dos pés.",
                            "Mantenha-se na posição elevada por um breve momento, sentindo a contração dos músculos da panturrilha.",
                            "Desça lentamente os calcanhares de volta à posição inicial, alongando os músculos da panturrilha.",
                            "Realize o número desejado de repetições, mantendo uma boa técnica e respirando adequadamente."
                        )
                    ),
                    Array(
                        "nome" => "Elevação de panturrilha unilateral",
                        "nome_url"=>"Elevacao-de-panturrilha-unilateral",
                        "desc" => "Elevação de panturrilha unilateral apoiado",
                        "img" => "Single-Leg-Calf-Raises.webp",
                        "musculo_trabalhado" => "panturrilhas",

                        "beneficios" => "A elevação de panturrilha com uma perna é um exercício altamente eficaz para fortalecer e tonificar os músculos da panturrilha de forma unilateral. Ao realizar o exercício com uma perna de cada vez, você concentra o esforço nos músculos gastrocnêmios e sóleos, promovendo um aumento de força e resistência nessa região. Além de desenvolver panturrilhas mais definidas, esse exercício também contribui para melhorar o equilíbrio, a estabilidade e a simetria muscular entre as pernas. A execução unilateral permite um maior foco nos músculos trabalhados, proporcionando um treinamento mais intenso e direcionado.",

                        "passos" => Array(
                            "Fique em pé, com uma perna levemente flexionada à frente e a outra perna estendida para trás.",
                            "Apoiado com as mãos em algum suporte mantenha as costas retas, os ombros para trás e o olhar para frente.",
                            "Flexione o pé da perna de trás, abaixando o calcanhar o máximo possível.",
                            "Empurre com força o pé para cima, contraindo os músculos da panturrilha.",
                            "Eleve o calcanhar o máximo que puder, ficando na ponta do pé.",
                            "Mantenha-se na posição elevada por um breve momento, sentindo a contração dos músculos da panturrilha.",
                            "Desça lentamente o calcanhar de volta à posição inicial, alongando os músculos da panturrilha.",
                            "Realize o número desejado de repetições, mantendo uma boa técnica e respirando adequadamente."
                        )
                    )
                )
            ),
            "back" => Array(
                "Trapezio-medio" => Array(
                    Array(
                        "nome" => "Remada curvada com barra",
                        "nome_url"=>"Remada-curvada-com-barra",
                        "desc" => "Remada curvada com barra",
                        "img" => "Barbell-Bent-Over-Row.webp",
                        "musculo_trabalhado" => "dorsal, trapézio, romboides",

                        "beneficios" => "A remada curvada com barra é um exercício altamente benéfico para fortalecer e desenvolver a musculatura das costas. Ao realizar esse exercício, você trabalha principalmente os músculos do grupo dorsal, incluindo o grande dorsal, trapézio, romboides e infraespinhoso, proporcionando uma melhoria significativa na força, estabilidade e postura dessa região. Além disso, a remada curvada com barra também ativa os músculos dos braços, como o bíceps braquial e braquial anterior, e os músculos estabilizadores do core. Outro benefício importante é o fortalecimento dos músculos do antebraço e da pegada.",

                        "passos" => Array(
                            "Fique em pé com os pés afastados na largura dos ombros, segurando a barra com as mãos em uma pegada pronada (palmas das mãos voltadas para baixo) e as mãos posicionadas um pouco mais largas do que a largura dos ombros.",
                            "Flexione levemente os joelhos e mantenha as costas retas, inclinando o tronco para a frente em um ângulo de aproximadamente 45 graus.",
                            "Mantenha os braços estendidos e os ombros para trás, com os músculos das costas ativados.",
                            "Puxe a barra em direção ao seu abdômen, mantendo os cotovelos próximos ao corpo e os ombros para trás.",
                            "Concentre-se em contrair os músculos das costas enquanto puxa a barra.",
                            "Mantenha a contração por um breve momento quando a barra estiver próxima ao seu abdômen.",
                            "Retorne à posição inicial, estendendo os braços novamente e alongando os músculos das costas.",
                            "Repita o movimento de acordo com o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Remada sentado na máquina",
                        "nome_url"=>"Remada-sentado-na-maquina",
                        "desc" => "Remada sentado na máquina",
                        "img" => "Seated-Row-Machine.webp",
                        "musculo_trabalhado" => "Rombóides, dorsal",

                        "beneficios" => "A remada sentado na máquina é um exercício eficaz para fortalecer e desenvolver os músculos das costas, em particular os músculos do grupo dorsal. Ao realizar esse movimento, você concentra o trabalho nos músculos como o grande dorsal, trapézio, romboides e infraespinhoso, promovendo um aumento de força, estabilidade e definição nessa região. Além disso, a remada sentado na máquina proporciona um apoio estável para as costas, minimizando o risco de lesões e permitindo um treinamento mais controlado.",

                        "passos" => Array(
                            "Posicione-se na máquina de remada, sentado no banco com os pés firmemente apoiados no suporte e as pernas levemente flexionadas.",
                            "Agarre a barra da máquina com as mãos.",
                            "Mantenha as costas retas e o peito para fora.",
                            "Inicie o movimento puxando a barra em direção ao abdômen, flexionando os cotovelos e mantendo os ombros para trás.",
                            "Concentre-se em contrair os músculos das costas durante o movimento, puxando os ombros para baixo e para trás.",
                            "Pause por um momento quando a barra estiver próxima ao abdômen, sentindo a contração nos músculos das costas.",
                            "Lentamente, estenda os braços e retorne a barra à posição inicial, alongando os músculos das costas.",
                            "Mantenha a respiração controlada durante o movimento, expirando enquanto puxa a barra e inspirando enquanto retorna à posição inicial.",
                            "Realize o número desejado de repetições, mantendo uma execução suave e controlada."
                        )
                    ),
                    Array(
                        "nome" => "Remada na barra T",
                        "nome_url"=>"Remada-sentada-na-maquina",
                        "desc" => "Remada na barra T com pegada invertida",
                        "img" => "Lever-T-bar-Row.webp",
                        "musculo_trabalhado" => "Dorsal, trapézio, rombóides",

                        "beneficios" => "A remada na barra T com pegada invertida é um exercício altamente benéfico para fortalecer e desenvolver a musculatura das costas, especialmente os músculos do grupo dorsal. Esse movimento trabalha os músculos do grande dorsal, trapézio, romboides e infraespinhoso, resultando em um aumento significativo de força, estabilidade e definição nessa região. A pegada invertida, com as palmas das mãos voltadas para cima, também enfatiza os músculos do bíceps e dos antebraços. Além disso, a remada na barra T oferece um maior controle e amplitude de movimento em comparação com outras variações de remada, permitindo um recrutamento mais efetivo dos músculos das costas.",

                        "passos" => Array(
                            "Ajuste o banco da máquina de remada para que seus pés fiquem apoiados firmemente no suporte e suas pernas flexionadas.",
                            "Sente-se no banco, segurando a barra com uma pegada invertida, ou seja, as palmas das mãos voltadas para cima.",
                            "Mantenha as costas retas e os ombros para trás, posicionando-se de forma estável no assento.",
                            "Comece o movimento: puxe a barra em direção ao seu abdômen, mantendo os cotovelos próximos ao corpo.",
                            "Concentre-se em contrair os músculos das costas durante o movimento de puxar.",
                            "Mantenha a contração por um breve momento quando a barra estiver próxima ao seu abdômen.",
                            "Retorne à posição inicial, estendendo os braços e alongando os músculos das costas.",
                            "Repita o movimento de acordo com o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Remada sentado na polia com barra",
                        "nome_url"=>"Remada-sentada-na-polia-com-barra",
                        "desc" => "Remada sentado na polia com barra",
                        "img" => "Seated-Cable-Row.webp",
                        "musculo_trabalhado" => "Dorsal, trapézio, rombóides",

                        "beneficios" => "A remada sentada na polia com pegador é um exercício altamente benéfico para fortalecer e desenvolver a musculatura das costas. Ao realizar esse movimento, você concentra o trabalho nos músculos do grupo dorsal, como o grande dorsal, trapézio, romboides e infraespinhoso, proporcionando um aumento de força, estabilidade e definição nessa região. A utilização do pegador na polia permite um maior recrutamento dos músculos das costas, além de proporcionar uma maior variação de movimento e ajuste de pegada para melhor atingir diferentes partes das costas. Esse exercício também ativa os músculos dos braços, como o bíceps e braquial anterior, além de trabalhar os músculos estabilizadores do core.",

                        "passos" => Array(
                            "Sente-se no banco da polia, com os pés apoiados no suporte e as pernas ligeiramente flexionadas.",
                            "Agarre a barra com as palmas das mãos voltadas para baixo, em uma pegada um pouco mais larga do que a largura dos ombros.",
                            "Mantenha as costas retas, o peito para fora e os ombros para trás.",
                            "Incline-se levemente para a frente, mantendo um ângulo de aproximadamente 45 graus entre o tronco e as pernas.",
                            "Mantenha os braços estendidos, segurando a barra na frente do corpo.",
                            "Puxe a barra em direção ao abdômen, flexionando os cotovelos e mantendo os ombros para trás.",
                            "Concentre-se em contrair os músculos das costas durante o movimento de puxar.",
                            "Mantenha a contração por um breve momento quando a barra estiver próxima ao abdômen.",
                            "Retorne à posição inicial de forma controlada, estendendo os braços e alongando os músculos das costas.",
                            "Repita o movimento de acordo com o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Remada sentado na polia com pegador",
                        "nome_url"=>"Remada-sentada-na-polia-com-pegador",
                        "desc" => "Remada sentado na polia com barra  com pegador",
                        "img" => "Seated-Cable-Rope-Row.webp",
                        "musculo_trabalhado" => "Dorsal, trapézio, rombóides",

                        "beneficios" => "A remada sentado é um exercício altamente benéfico para fortalecer e desenvolver a musculatura das costas. Ao realizar esse movimento, você concentra o trabalho nos músculos do grupo dorsal, como o grande dorsal, trapézio, romboides e infraespinhoso, resultando em um aumento significativo de força, estabilidade e definição nessa região. Além disso, a remada sentado na polia também ativa os músculos dos braços, como o bíceps e braquial anterior, e os músculos estabilizadores do core.",

                        "passos" => Array(
                            "Sente-se no banco da polia, com os pés apoiados no suporte e as pernas ligeiramente flexionadas.",
                            "Agarre o pegador da polia com as palmas das mãos voltadas para dentro.",
                            "Mantenha as costas retas, o peito para fora e os ombros para trás.",
                            "Mantenha os braços estendidos, segurando o pegador na frente do corpo.",
                            "Puxe o pegador em direção ao abdômen, flexionando os cotovelos e mantendo os ombros para trás.",
                            "Concentre-se em contrair os músculos das costas durante o movimento de puxar.",
                            "Mantenha a contração por um breve momento quando o pegador estiver próximo ao abdômen.",
                            "Retorne à posição inicial de forma controlada, estendendo os braços e alongando os músculos das costas.",
                            "Repita o movimento de acordo com o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Remada curvada com barra e pegada invetida",
                        "nome_url"=>"Remada-curvada-com-barra-e-pegada-invetida",
                        "desc" => "Remada curvada com barra e pegada invetida",
                        "img" => "Reverse-Grip-Barbell-Row.webp",
                        "musculo_trabalhado" => "Dorsal, trapézio, rombóides",

                        "beneficios" => "
                        A remada curvada com barra e pegada invertida é um exercício altamente benéfico para fortalecer e desenvolver a musculatura das costas. Ao realizar esse movimento, você trabalha principalmente os músculos do grupo dorsal, como o grande dorsal, trapézio, romboides e infraespinhoso, resultando em um aumento significativo de força, estabilidade e definição nessa região. A pegada invertida, com as palmas das mãos voltadas para cima, também enfatiza os músculos do bíceps e dos antebraços. Além disso, a remada curvada com barra permite um recrutamento eficiente dos músculos das costas, proporcionando um aumento da massa muscular e melhorando a postura. Esse exercício também ajuda a corrigir desequilíbrios musculares, promovendo um desenvolvimento simétrico e proporcional das costas.",

                        "passos" => Array(
                            "Posicione-se em pé com os pés afastados na largura dos ombros e os joelhos levemente flexionados.",
                            "Segure a barra com as palmas das mãos voltadas para cima (pegada invertida), um pouco mais afastadas do que a largura dos ombros.",
                            "Mantenha as costas retas, o peito para fora e os ombros para trás.",
                            "Incline o tronco para a frente, mantendo um ângulo de aproximadamente 45 graus em relação ao chão.",
                            "Mantenha os braços estendidos e a barra na linha dos joelhos.",
                            "Puxe a barra em direção ao abdômen, flexionando os cotovelos e mantendo os ombros para trás.",
                            "Concentre-se em contrair os músculos das costas durante o movimento de puxar.",
                            "Mantenha a contração por um breve momento quando a barra estiver próxima ao abdômen.",
                            "Retorne à posição inicial de forma controlada, estendendo os braços e alongando os músculos das costas.",
                            "Repita o movimento de acordo com o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Remada ponta de barra",
                        "nome_url"=>"Remada-ponta-de-barra",
                        "desc" => "Remada ponta de barra",
                        "img" => "t-bar-rows.webp",
                        "musculo_trabalhado" => "Dorsal, trapézio, rombóides",

                        "beneficios" => "A remada ponta de barra, também conhecida como remada T-bar, é um exercício altamente benéfico para fortalecer e desenvolver a musculatura das costas. Ao realizar esse movimento, você trabalha principalmente os músculos do grupo dorsal, como o grande dorsal, trapézio, romboides e infraespinhoso, proporcionando um aumento significativo de força, estabilidade e definição nessa região. A remada ponta de barra também ativa os músculos dos braços, como o bíceps e braquial anterior, além de envolver os músculos estabilizadores do core. O posicionamento inclinado e a pegada na barra proporcionam um ângulo favorável para ativar os músculos das costas de forma intensa.",

                        "passos" => Array(
                            "Posicione a barra no chão, com uma das extremidades presa no suporte ou apoio.",
                            "Coloque uma carga adequada na outra extremidade da barra.",
                            "Com a barra no meio das pernas e com os pés afastados na largura dos ombros e os joelhos levemente flexionados.",
                            "Incline o tronco para a frente, mantendo as costas retas e o peito para fora.",
                            "Agarre a barra com as mãos ou um suporte.",
                            "Mantenha os braços estendidos e o corpo ligeiramente inclinado para a frente.",
                            "Inicie o movimento puxando a barra em direção ao abdômen, flexionando os cotovelos e mantendo os ombros para trás.",
                            "Concentre-se em contrair os músculos das costas durante o movimento de puxar.",
                            "Mantenha a contração por um breve momento quando a barra estiver próxima ao abdômen.",
                            "Retorne à posição inicial de forma controlada, estendendo os braços e alongando os músculos das costas.",
                            "Repita o movimento de acordo com o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Remada curvada com halteres",
                        "nome_url"=>"Remada-curvada-com-halteres",
                        "desc" => "Remada curvada com halteres",
                        "img" => "Bent-Over-Dumbbell-Row.webp",
                        "musculo_trabalhado" => "Dorsal, trapézio, rombóides",

                        "beneficios" => "A remada curvada com halteres é um exercício altamente benéfico para fortalecer e desenvolver a musculatura das costas. Ao realizar esse movimento, você trabalha principalmente os músculos do grupo dorsal, como o grande dorsal, trapézio, romboides e infraespinhoso, resultando em um aumento significativo de força, estabilidade e definição nessa região. Além disso, a remada curvada com halteres também ativa os músculos dos braços, como o bíceps, e envolve os músculos estabilizadores do core. Esse exercício permite um maior grau de liberdade de movimento em comparação com a remada com barra, permitindo um recrutamento muscular mais individualizado e simétrico. Além disso, a remada curvada com halteres promove uma melhor ativação dos músculos estabilizadores, contribuindo para uma postura mais correta e equilibrada.",

                        "passos" => Array(
                            "Pegue um par de halteres e posicione-se em pé com os pés afastados na largura dos ombros.",
                            "Flexione levemente os joelhos e incline o tronco para a frente, mantendo as costas retas.",
                            "Segure os halteres com as palmas das mãos voltadas uma para a outra, mantendo os braços estendidos e pendendo abaixo do corpo.",
                            "Mantenha os cotovelos próximos ao corpo e comece a levantar os halteres em direção às costelas, flexionando os cotovelos.",
                            "Concentre-se em contrair os músculos das costas durante o movimento, puxando os ombros para trás e para baixo.",
                            "Pause por um momento quando os halteres estiverem próximos às costelas, sentindo a contração nos músculos das costas.",
                            "Lentamente, abaixe os halteres de volta à posição inicial, estendendo os braços e alongando os músculos das costas.",
                            "Repita o movimento de acordo com o número desejado de repetições."
                        )
                    )
                ),
                "Dorsal" => Array(
                    Array(
                        "nome" => "Remada curvada com barra",
                        "nome_url"=>"Remada-curvada-com-barra",
                        "desc" => "Remada curvada com barra",
                        "img" => "../Trapezio-medio/Barbell-Bent-Over-Row.webp",
                        "musculo_trabalhado" => "Dorsal, trapézio, romboides",

                        "beneficios" => "A remada curvada com barra é um exercício altamente benéfico para fortalecer e desenvolver a musculatura das costas. Ao realizar esse exercício, você trabalha principalmente os músculos do grupo dorsal, incluindo o grande dorsal, trapézio, romboides e infraespinhoso, proporcionando uma melhoria significativa na força, estabilidade e postura dessa região. Além disso, a remada curvada com barra também ativa os músculos dos braços, como o bíceps braquial e braquial anterior, e os músculos estabilizadores do core. Outro benefício importante é o fortalecimento dos músculos do antebraço e da pegada.",

                        "passos" => Array(
                            "Fique em pé com os pés afastados na largura dos ombros, segurando a barra com as mãos em uma pegada pronada (palmas das mãos voltadas para baixo) e as mãos posicionadas um pouco mais largas do que a largura dos ombros.",
                            "Flexione levemente os joelhos e mantenha as costas retas, inclinando o tronco para a frente em um ângulo de aproximadamente 45 graus.",
                            "Mantenha os braços estendidos e os ombros para trás, com os músculos das costas ativados.",
                            "Puxe a barra em direção ao seu abdômen, mantendo os cotovelos próximos ao corpo e os ombros para trás.",
                            "Concentre-se em contrair os músculos das costas enquanto puxa a barra.",
                            "Mantenha a contração por um breve momento quando a barra estiver próxima ao seu abdômen.",
                            "Retorne à posição inicial, estendendo os braços novamente e alongando os músculos das costas.",
                            "Repita o movimento de acordo com o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Remada sentado na máquina",
                        "nome_url"=>"Remada-sentado-na-maquina",
                        "desc" => "Remada sentado na máquina",
                        "img" => "../Trapezio-medio/Seated-Row-Machine.webp",
                        "musculo_trabalhado" => "Rombóides, dorsal",

                        "beneficios" => "A remada sentado na máquina é um exercício eficaz para fortalecer e desenvolver os músculos das costas, em particular os músculos do grupo dorsal. Ao realizar esse movimento, você concentra o trabalho nos músculos como o grande dorsal, trapézio, romboides e infraespinhoso, promovendo um aumento de força, estabilidade e definição nessa região. Além disso, a remada sentado na máquina proporciona um apoio estável para as costas, minimizando o risco de lesões e permitindo um treinamento mais controlado.",

                        "passos" => Array(
                            "Posicione-se na máquina de remada, sentado no banco com os pés firmemente apoiados no suporte e as pernas levemente flexionadas.",
                            "Agarre a barra da máquina com as mãos.",
                            "Mantenha as costas retas e o peito para fora.",
                            "Inicie o movimento puxando a barra em direção ao abdômen, flexionando os cotovelos e mantendo os ombros para trás.",
                            "Concentre-se em contrair os músculos das costas durante o movimento, puxando os ombros para baixo e para trás.",
                            "Pause por um momento quando a barra estiver próxima ao abdômen, sentindo a contração nos músculos das costas.",
                            "Lentamente, estenda os braços e retorne a barra à posição inicial, alongando os músculos das costas.",
                            "Mantenha a respiração controlada durante o movimento, expirando enquanto puxa a barra e inspirando enquanto retorna à posição inicial.",
                            "Realize o número desejado de repetições, mantendo uma execução suave e controlada."
                        )
                    ),
                    Array(
                        "nome" => "Remada na barra T",
                        "nome_url"=>"Remada-na-barra-T",
                        "desc" => "Remada na barra T com pegada invertida",
                        "img" => "../Trapezio-medio/Lever-T-bar-Row.webp",
                        "musculo_trabalhado" => "Dorsal, trapézio, rombóides",

                        "beneficios" => "A remada na barra T com pegada invertida é um exercício altamente benéfico para fortalecer e desenvolver a musculatura das costas, especialmente os músculos do grupo dorsal. Esse movimento trabalha os músculos do grande dorsal, trapézio, romboides e infraespinhoso, resultando em um aumento significativo de força, estabilidade e definição nessa região. A pegada invertida, com as palmas das mãos voltadas para cima, também enfatiza os músculos do bíceps e dos antebraços. Além disso, a remada na barra T oferece um maior controle e amplitude de movimento em comparação com outras variações de remada, permitindo um recrutamento mais efetivo dos músculos das costas.",

                        "passos" => Array(
                            "Ajuste o banco da máquina de remada para que seus pés fiquem apoiados firmemente no suporte e suas pernas flexionadas.",
                            "Sente-se no banco, segurando a barra com uma pegada invertida, ou seja, as palmas das mãos voltadas para cima.",
                            "Mantenha as costas retas e os ombros para trás, posicionando-se de forma estável no assento.",
                            "Comece o movimento: puxe a barra em direção ao seu abdômen, mantendo os cotovelos próximos ao corpo.",
                            "Concentre-se em contrair os músculos das costas durante o movimento de puxar.",
                            "Mantenha a contração por um breve momento quando a barra estiver próxima ao seu abdômen.",
                            "Retorne à posição inicial, estendendo os braços e alongando os músculos das costas.",
                            "Repita o movimento de acordo com o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Remada sentado na polia com barra",
                        "nome_url"=>"Remada-sentado-na-polia-com-barra",
                        "desc" => "Remada sentado na polia com barra",
                        "img" => "../Trapezio-medio/Seated-Cable-Row.webp",
                        "musculo_trabalhado" => "Dorsal, trapézio, rombóides",

                        "beneficios" => "A remada sentada na polia com pegador é um exercício altamente benéfico para fortalecer e desenvolver a musculatura das costas. Ao realizar esse movimento, você concentra o trabalho nos músculos do grupo dorsal, como o grande dorsal, trapézio, romboides e infraespinhoso, proporcionando um aumento de força, estabilidade e definição nessa região. A utilização do pegador na polia permite um maior recrutamento dos músculos das costas, além de proporcionar uma maior variação de movimento e ajuste de pegada para melhor atingir diferentes partes das costas. Esse exercício também ativa os músculos dos braços, como o bíceps e braquial anterior, além de trabalhar os músculos estabilizadores do core.",

                        "passos" => Array(
                            "Sente-se no banco da polia, com os pés apoiados no suporte e as pernas ligeiramente flexionadas.",
                            "Agarre a barra com as palmas das mãos voltadas para baixo, em uma pegada um pouco mais larga do que a largura dos ombros.",
                            "Mantenha as costas retas, o peito para fora e os ombros para trás.",
                            "Incline-se levemente para a frente, mantendo um ângulo de aproximadamente 45 graus entre o tronco e as pernas.",
                            "Mantenha os braços estendidos, segurando a barra na frente do corpo.",
                            "Puxe a barra em direção ao abdômen, flexionando os cotovelos e mantendo os ombros para trás.",
                            "Concentre-se em contrair os músculos das costas durante o movimento de puxar.",
                            "Mantenha a contração por um breve momento quando a barra estiver próxima ao abdômen.",
                            "Retorne à posição inicial de forma controlada, estendendo os braços e alongando os músculos das costas.",
                            "Repita o movimento de acordo com o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Remada sentado na polia com triângulo",
                        "nome_url"=>"Remada-sentado-na-maquina-com-triangulo",
                        "desc" => "Remada sentado na polia com barra  com triângulo",
                        "img" => "../Trapezio-medio/Seated-Cable-Rope-Row.webp",
                        "musculo_trabalhado" => "Dorsal, trapézio, rombóides",

                        "beneficios" => "A remada sentado é um exercício altamente benéfico para fortalecer e desenvolver a musculatura das costas. Ao realizar esse movimento, você concentra o trabalho nos músculos do grupo dorsal, como o grande dorsal, trapézio, romboides e infraespinhoso, resultando em um aumento significativo de força, estabilidade e definição nessa região. Além disso, a remada sentado na polia também ativa os músculos dos braços, como o bíceps e braquial anterior, e os músculos estabilizadores do core.",

                        "passos" => Array(
                            "Sente-se no banco da polia, com os pés apoiados no suporte e as pernas ligeiramente flexionadas.",
                            "Agarre o triângulo na polia com as palmas das mãos voltadas para dentro.",
                            "Mantenha as costas retas, o peito para fora e os ombros para trás.",
                            "Mantenha os braços estendidos, segurando o triângulo na frente do corpo.",
                            "Puxe o triângulo em direção ao abdômen, flexionando os cotovelos e mantendo os ombros para trás.",
                            "Concentre-se em contrair os músculos das costas durante o movimento de puxar.",
                            "Mantenha a contração por um breve momento quando o triângulo estiver próximo ao abdômen.",
                            "Retorne à posição inicial de forma controlada, estendendo os braços e alongando os músculos das costas.",
                            "Repita o movimento de acordo com o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Remada curvada com barra e pegada invetida",
                        "nome_url"=>"Remada-curvada-com-barra-e-pegada-invetida",
                        "desc" => "Remada curvada com barra e pegada invetida",
                        "img" => "../Trapezio-medio/Reverse-Grip-Barbell-Row.webp",
                        "musculo_trabalhado" => "Dorsal, trapézio, rombóides",

                        "beneficios" => "
                        A remada curvada com barra e pegada invertida é um exercício altamente benéfico para fortalecer e desenvolver a musculatura das costas. Ao realizar esse movimento, você trabalha principalmente os músculos do grupo dorsal, como o grande dorsal, trapézio, romboides e infraespinhoso, resultando em um aumento significativo de força, estabilidade e definição nessa região. A pegada invertida, com as palmas das mãos voltadas para cima, também enfatiza os músculos do bíceps e dos antebraços. Além disso, a remada curvada com barra permite um recrutamento eficiente dos músculos das costas, proporcionando um aumento da massa muscular e melhorando a postura. Esse exercício também ajuda a corrigir desequilíbrios musculares, promovendo um desenvolvimento simétrico e proporcional das costas.",

                        "passos" => Array(
                            "Posicione-se em pé com os pés afastados na largura dos ombros e os joelhos levemente flexionados.",
                            "Segure a barra com as palmas das mãos voltadas para cima (pegada invertida), um pouco mais afastadas do que a largura dos ombros.",
                            "Mantenha as costas retas, o peito para fora e os ombros para trás.",
                            "Incline o tronco para a frente, mantendo um ângulo de aproximadamente 45 graus em relação ao chão.",
                            "Mantenha os braços estendidos e a barra na linha dos joelhos.",
                            "Puxe a barra em direção ao abdômen, flexionando os cotovelos e mantendo os ombros para trás.",
                            "Concentre-se em contrair os músculos das costas durante o movimento de puxar.",
                            "Mantenha a contração por um breve momento quando a barra estiver próxima ao abdômen.",
                            "Retorne à posição inicial de forma controlada, estendendo os braços e alongando os músculos das costas.",
                            "Repita o movimento de acordo com o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Remada ponta de barra",
                        "nome_url"=>"Remada-ponta-de-barra",
                        "desc" => "Remada ponta de barra",
                        "img" => "../Trapezio-medio/t-bar-rows.webp",
                        "musculo_trabalhado" => "Dorsal, trapézio, rombóides",

                        "beneficios" => "A remada ponta de barra, também conhecida como remada T-bar, é um exercício altamente benéfico para fortalecer e desenvolver a musculatura das costas. Ao realizar esse movimento, você trabalha principalmente os músculos do grupo dorsal, como o grande dorsal, trapézio, romboides e infraespinhoso, proporcionando um aumento significativo de força, estabilidade e definição nessa região. A remada ponta de barra também ativa os músculos dos braços, como o bíceps e braquial anterior, além de envolver os músculos estabilizadores do core. O posicionamento inclinado e a pegada na barra proporcionam um ângulo favorável para ativar os músculos das costas de forma intensa.",

                        "passos" => Array(
                            "Posicione a barra no chão, com uma das extremidades presa no suporte ou apoio.",
                            "Coloque uma carga adequada na outra extremidade da barra.",
                            "Com a barra no meio das pernas e com os pés afastados na largura dos ombros e os joelhos levemente flexionados.",
                            "Incline o tronco para a frente, mantendo as costas retas e o peito para fora.",
                            "Agarre a barra com as mãos ou um suporte.",
                            "Mantenha os braços estendidos e o corpo ligeiramente inclinado para a frente.",
                            "Inicie o movimento puxando a barra em direção ao abdômen, flexionando os cotovelos e mantendo os ombros para trás.",
                            "Concentre-se em contrair os músculos das costas durante o movimento de puxar.",
                            "Mantenha a contração por um breve momento quando a barra estiver próxima ao abdômen.",
                            "Retorne à posição inicial de forma controlada, estendendo os braços e alongando os músculos das costas.",
                            "Repita o movimento de acordo com o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Remada curvada com halteres",
                        "nome_url"=>"Remada-curvada-com-halteres",
                        "desc" => "Remada ponta de barra",
                        "img" => "../Trapezio-medio/Bent-Over-Dumbbell-Row.webp",
                        "musculo_trabalhado" => "Dorsal, trapézio, rombóides",

                        "beneficios" => "A remada curvada com halteres é um exercício altamente benéfico para fortalecer e desenvolver a musculatura das costas. Ao realizar esse movimento, você trabalha principalmente os músculos do grupo dorsal, como o grande dorsal, trapézio, romboides e infraespinhoso, resultando em um aumento significativo de força, estabilidade e definição nessa região. Além disso, a remada curvada com halteres também ativa os músculos dos braços, como o bíceps, e envolve os músculos estabilizadores do core. Esse exercício permite um maior grau de liberdade de movimento em comparação com a remada com barra, permitindo um recrutamento muscular mais individualizado e simétrico. Além disso, a remada curvada com halteres promove uma melhor ativação dos músculos estabilizadores, contribuindo para uma postura mais correta e equilibrada.",

                        "passos" => Array(
                            "Pegue um par de halteres e posicione-se em pé com os pés afastados na largura dos ombros.",
                            "Flexione levemente os joelhos e incline o tronco para a frente, mantendo as costas retas.",
                            "Segure os halteres com as palmas das mãos voltadas uma para a outra, mantendo os braços estendidos e pendendo abaixo do corpo.",
                            "Mantenha os cotovelos próximos ao corpo e comece a levantar os halteres em direção às costelas, flexionando os cotovelos.",
                            "Concentre-se em contrair os músculos das costas durante o movimento, puxando os ombros para trás e para baixo.",
                            "Pause por um momento quando os halteres estiverem próximos às costelas, sentindo a contração nos músculos das costas.",
                            "Lentamente, abaixe os halteres de volta à posição inicial, estendendo os braços e alongando os músculos das costas.",
                            "Repita o movimento de acordo com o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Remada com halter unilateral",
                        "nome_url"=>"Remada-com-halter-unilateral",
                        "desc" => "Remada com halter unilateral no banco",
                        "img" => "../../front/Ombros/Dumbbell-Row.webp",
                        "musculo_trabalhado" => "Dorsal, deltoide posterior, trapézio",

                        "beneficios" => "A remada unilateral com halteres, também conhecida como remada inclinada unilateral, é um exercício que tem como objetivo principal fortalecer e desenvolver a musculatura das costas, em especial do latíssimo do dorso. Além disso, esse exercício trabalha também a musculatura dos ombros e dos braços, auxiliando na melhora da postura e da estabilidade corporal. Entre os benefícios da remada inclinada unilateral com halteres, destacam-se o aumento da força e da resistência muscular, o desenvolvimento da simetria muscular entre os lados direito e esquerdo do corpo, a melhora da estabilidade da coluna vertebral e a prevenção de lesões nas costas. Outra vantagem da remada inclinada unilateral com halteres é que ela pode ser realizada em qualquer lugar, desde que se tenha um par de halteres. Por ser um exercício unilateral, ele também permite corrigir desequilíbrios musculares que podem levar a lesões ou dores nas costas. ",

                        "passos" => Array(
                            "Pegue um halter com uma das mãos e posicione o joelho do mesmo lado em um banco. A outra perna deve ficar apoiada no chão e o tronco deve ficar inclinado para frente, mantendo a coluna ereta.",
                            "Com o halter na mão, deixe o braço estendido para baixo, na altura do joelho. Esse será o início do movimento.",
                            "Levante o halter até a altura do peito, mantendo o cotovelo próximo ao corpo e o punho próximo ao abdômen. Contraia o músculo das costas durante o movimento.",
                            "Pause por um momento na posição de pico, com o halter próximo ao peito.",
                            "Em seguida, abaixe o halter lentamente até a posição inicial, mantendo o controle do movimento e mantendo a postura correta.",
                            "Repita o movimento por várias repetições e, em seguida, mude de lado para realizar a remada com a outra mão."
                        )
                    ),
                    Array(
                        "nome" => "Remada inclinada de 45 Graus",
                        "nome_url"=>"Remada-inclinada-45-graus",
                        "desc" => "Remada inclinada de 45 Graus com halteres",
                        "img" => "../../front/Ombros/45-Degree-Incline-Row.webp",
                        "musculo_trabalhado" => "Deltoide posterior, dorsal",

                        "beneficios" => "A Remada Inclinada de 45 Graus é um exercício que trabalha principalmente os músculos do ombro, em especial o deltóide posterior, além de envolver também os músculos das costas e dos braços. Os benefícios desse exercício incluem o fortalecimento e a tonificação dos músculos do ombro, melhorando a postura e reduzindo o risco de lesões. Além disso, a remada inclinada também pode ajudar no desenvolvimento da força e da resistência muscular.",

                        "passos" => Array(
                            "Fique em pé inclinado em um banco de 45 graus, mantendo as costas retas e os pés firmes no chão.",
                            "Pegue um par de halteres, segurando-os com as palmas das mãos voltadas para o corpo, deixando-os pendurados na frente de seus joelhos.",
                            "Levante os halteres em direção ao peito, mantendo as costas retas. Pare quando os halteres estiverem logo abaixo do peito.",
                            "Pause por um momento e, em seguida, abaixe lentamente os halteres de volta à posição inicial.",
                            "Repita o movimento de elevação dos halteres em direção ao peito para concluir uma repetição."
                        )
                    ),
                    Array(
                        "nome" => "Puxada alta frontal",
                        "nome_url"=>"Puxada-alta-frontal",
                        "desc" => "Puxada alta frontal",
                        "img" => "Lat-Pulldown.webp",
                        "musculo_trabalhado" => "Dorsal, deltoide posterior, trapézio",

                        "beneficios" => "A puxada alta frontal, também conhecida como pulldown frontal, é um exercício que traz diversos benefícios para o desenvolvimento dos músculos das costas e dos braços. Ao executar esse movimento, você trabalha principalmente o grupo dorsal, envolvendo o grande dorsal, trapézio e romboides, além dos músculos dos braços, como o bíceps e braquial anterior. A puxada alta frontal ajuda a fortalecer e tonificar a musculatura das costas, proporcionando uma maior definição e melhora da postura. Além disso, esse exercício também contribui para o aumento da força e da estabilidade na região do tronco, auxiliando na prevenção de lesões e no desempenho de atividades diárias.",

                        "passos" => Array(
                            "Sente-se no banco da máquina de puxada alta e ajuste a altura do suporte para que seus joelhos fiquem confortavelmente apoiados.",
                            "Agarre a barra de puxada alta com as mãos afastadas na largura dos ombros e as palmas voltadas para baixo.",
                            "Mantenha as costas eretas, o peito para fora e os ombros para trás.",
                            "Inicie o movimento puxando a barra em direção à parte superior do peito, flexionando os cotovelos e contraindo os músculos das costas.",
                            "Concentre-se em puxar os ombros para baixo e para trás, mantendo uma postura correta durante todo o exercício.",
                            "Ao atingir o ponto máximo de contração, pause por um momento e sinta a contração nos músculos das costas.",
                            "Lentamente, estenda os braços e retorne a barra à posição inicial, alongando os músculos das costas.",
                            "Mantenha a respiração controlada durante o movimento, expirando enquanto puxa a barra e inspirando enquanto retorna à posição inicial.",
                            "Realize o número desejado de repetições, mantendo uma execução suave e controlada."
                        )
                    ),
                    Array(
                        "nome" => "Puxada alta frontal com corda",
                        "nome_url"=>"Puxada-alta-frontal-com-corda",
                        "desc" => "Puxada alta frontal com corda",
                        "img" => "Rope-Straight-Arm-Pulldown.webp",
                        "musculo_trabalhado" => "Dorsal, peitoral",

                        "beneficios" => "O Puxada alta frontal com corda é um exercício que proporciona diversos benefícios para o desenvolvimento da musculatura do tronco e dos braços. Ao realizar esse movimento, você trabalha principalmente o grupo muscular dos músculos peitorais, o grande dorsal e os músculos do tríceps. Além disso, a puxada alta frontal com corda é uma excelente opção para fortalecer e alongar os músculos do peitoral e das costas, promovendo um aumento da flexibilidade e da amplitude de movimento. Esse exercício também pode contribuir para melhorar a postura, uma vez que envolve a estabilização da coluna vertebral e o fortalecimento dos músculos da região lombar.",

                        "passos" => Array(
                            "Posicione-se em pé em frente à máquina de polia alta, com os pés afastados na largura dos ombros.",
                            "Segure a barra ou a corda da polia alta com as mãos em uma pegada pronada, ou seja, com as palmas voltadas para baixo.",
                            "Flexione levemente os joelhos e mantenha uma postura ereta, com o abdômen contraído.",
                            "Inicie o movimento levando a barra ou a corda em direção a  barriga, mantendo os braços estendidos e alongando a musculatura do peitoral.",
                            "Sinta a contração nos músculos do peitoral e dos músculos das costas ao atingir o ponto máximo de contração.",
                            "Pause por um momento nessa posição, concentrando-se na sensação de alongamento e contração dos músculos trabalhados.",
                            "Lentamente, retorne à posição inicial, voltando os braços na altura dos ombros.",
                            "Realize o número desejado de repetições, mantendo uma execução controlada e fluída."
                        )
                    ),
                    Array(
                        "nome" => "Puxada alta frontal com triângulo",
                        "nome_url"=>"Puxada-alta-frontal-com-triangulo",
                        "desc" => "Puxada alta frontal com triângulo",
                        "img" => "V-bar-Lat-Pulldown.webp",
                        "musculo_trabalhado" => "Dorsal, ombros",

                        "beneficios" => "A puxada alta com triângulo é um exercício altamente eficaz para fortalecer e desenvolver a musculatura das costas, com ênfase no latíssimo do dorso. Ao realizar esse movimento, você recruta também os músculos dos ombros, braços e parte superior do tronco. A puxada alta com triângulo promove o aumento da força e resistência dos músculos das costas, resultando em um melhor desempenho em atividades que exigem puxar ou levantar objetos. Além disso, esse exercício contribui para a melhora da postura, uma vez que fortalece os músculos que sustentam a coluna vertebral. A puxada alta com triângulo também pode auxiliar no desenvolvimento da estabilidade do core, fortalecendo os músculos abdominais e lombares.",

                        "passos" => Array(
                            "Sentado em um banco de puxada alta, posicione os pés firmemente apoiados no suporte à frente.",
                            "Segure o triângulo de puxada com as mãos em uma pegada pronada, com as palmas voltadas para baixo e as mãos posicionadas mais próximas uma da outra.",
                            "Mantenha os braços estendidos e os ombros relaxados.",
                            "Inicie o movimento puxando o triângulo em direção à parte superior do peito, flexionando os cotovelos e mantendo os ombros para baixo e para trás.",
                            "Concentre-se em contrair os músculos das costas durante o movimento, puxando os ombros para baixo e apertando as escápulas juntas.",
                            "Pause por um momento quando o triângulo estiver próximo ao peito, sentindo a contração nos músculos das costas.",
                            "Lentamente, estenda os braços e retorne à posição inicial, alongando os músculos das costas.",
                            "Mantenha a respiração controlada durante o movimento, expirando enquanto puxa o triângulo e inspirando enquanto retorna à posição inicial.",
                            "Mantenha uma postura ereta e evite balançar o corpo para gerar impulso.",
                            "Realize o número desejado de repetições, mantendo uma execução suave e controlada."
                        )
                    ),
                    Array(
                        "nome" => "Barra fixa",
                        "nome_url"=>"Barra-fixa",
                        "desc" => "Barra fixa",
                        "img" => "Pull-up.webp",
                        "musculo_trabalhado" => "Dorsal, ombros",

                        "beneficios" => "A barra fixa com pegada aberta oferece uma série de benefícios para o corpo. Ao realizar esse exercício, você fortalece principalmente os músculos das costas, como o latíssimo do dorso, trapézio e romboides, além dos músculos dos braços, como os bíceps e braquiorradial. A pegada aberta amplia o estímulo nos músculos das costas, ativando uma maior porção do latíssimo do dorso e promovendo um desenvolvimento mais equilibrado. Além disso, a barra fixa com pegada aberta ajuda a melhorar a postura, uma vez que fortalece os músculos das costas responsáveis por manter a coluna vertebral alinhada. Esse exercício também contribui para o desenvolvimento da força e da resistência muscular, proporcionando um físico mais atlético e tonificado. Outro benefício é o aumento da estabilidade dos ombros, ajudando a prevenir lesões e dores nessa região.",

                        "passos" => Array(
                            "Posicione-se em frente à barra fixa com as mãos afastadas mais do que a largura dos ombros, na chamada pegada aberta.",
                            "Segure a barra com as palmas das mãos voltadas para a frente.",
                            "Mantenha os braços estendidos e os ombros relaxados.",
                            "Contraia os músculos das costas e do core para estabilizar o corpo.",
                            "Inicie o movimento flexionando os cotovelos e puxando o corpo em direção à barra.",
                            "Continue a subir até que o queixo esteja acima da barra ou até sentir uma contração completa nos músculos das costas.",
                            "Pause por um momento na posição mais alta, concentrando-se em manter os ombros para baixo e apertar as escápulas juntas.",
                            "Lentamente, estenda os braços e retorne à posição inicial, alongando os músculos das costas.",
                            "Mantenha a respiração controlada durante o movimento, expirando enquanto puxa o corpo para cima e inspirando enquanto retorna à posição inicial.",
                            "Realize o número desejado de repetições, mantendo uma execução suave e controlada."
                        )
                    )
                ),
                "Triceps" => Array(
                    Array(
                        "nome" => "Barra paralela",
                        "nome_url"=>"Barra-paralela",
                        "desc" => "Barra paralela",
                        "img" => "../../front/Peitoral/Chest-Dips.webp",
                        "musculo_trabalhado" => "Peitoral, deltoroides, triceps",

                        "beneficios" => "Fazer barra paralela pode trazer benefícios significativos para o desenvolvimento da parte superior do corpo, principalmente tríceps, ombros e peitorais. O exercício é eficiente para aumentar a força e resistência muscular nessas áreas, além de contribuir para a melhora da postura e estabilidade corporal. Além disso, como é um exercício que utiliza o peso do próprio corpo, pode ser feito em qualquer lugar e não requer equipamentos sofisticados, o que o torna uma opção acessível e prática para incluir na rotina de treinamento.",

                        "passos" => Array(
                            "Encontre uma barra paralela e coloque-a em uma posição segura e estável.",
                            "Posicione-se entre as barras e segure cada uma com as mãos na altura dos ombros.",
                            "Estenda os braços e levante os pés do chão, mantendo-os juntos.
                            Mantenha o corpo em linha reta, com os cotovelos estendidos e os ombros para trás.",
                            "Flexione os braços e abaixe o corpo até que os braços formem um ângulo de 90 graus.",
                            "Empurre o corpo de volta à posição inicial e repita o movimento."
                        )
                    ),
                    Array(
                        "nome" => "Tríceps francês",
                        "nome_url"=>"Triceps-frances",
                        "desc" => "Tríceps francês",
                        "img" => "Cable-Rope-Overhead-Triceps-Extension.webp",
                        "musculo_trabalhado" => "Tríceps, antebraços",

                        "beneficios" => "O tríceps francês na polia baixa promove um aumento da força e resistência dos músculos do tríceps, o que pode contribuir para a realização de outros exercícios que envolvem empurrar e levantar pesos. Através desse movimento, você também trabalha a estabilidade dos ombros e os músculos do antebraço.
                        Ao realizar o tríceps francês na polia baixa, você também trabalha a coordenação e o equilíbrio, uma vez que precisa manter uma postura adequada e controlar o movimento ao longo de todo o exercício. Além disso, ele pode ser adaptado para diferentes níveis de condicionamento físico, ajustando a carga e o número de repetições.",

                        "passos" => Array(
                            "Posicione-se de costas em uma polia baixa com uma barra reta ou uma corda de tríceps anexada a ela.",
                            "Segure a barra ou a corda com as mãos e afaste-se da polia para que haja tensão na corda ou na barra.",
                            "Mantenha os pés afastados na largura dos ombros e os joelhos ligeiramente flexionados para garantir estabilidade.",
                            "Posicione-se com as costas retas e o abdômen contraído.",
                            "Mantendo os cotovelos fixos e próximos à cabeça.",
                            "Comece o movimento flexionando os antebraços para cima, pause por um momento e sinta a contração nos músculos do tríceps.",
                            "Desça a barra ou a corda em direção à parte de trás da cabeça retornando à posição inicial, mantendo os cotovelos apontados para cima.",
                            "Quando os antebraços estiverem paralelos ao chão ou um pouco abaixo disso reinicie o movimento.",
                            "Mantenha o controle durante todo o movimento, evitando balançar o corpo ou utilizar impulso para realizar o exercício.",
                            "Repita o movimento para o número desejado de repetições, lembrando-se de manter uma respiração adequada durante o exercício."
                        )
                    ),
                    Array(
                        "nome" => "Tríceps com barra",
                        "nome_url"=>"Triceps-com-barra",
                        "desc" => "Tríceps com barra",
                        "img" => "Pushdown.webp",
                        "musculo_trabalhado" => "Tríceps, antebraços",

                        "beneficios" => "Fazer tríceps na polia oferece benefícios como fortalecimento e desenvolvimento dos músculos tríceps, maior amplitude de movimento, melhoria da estabilidade dos ombros e força dos membros superiores. Os exercícios na polia também melhoram a coordenação, equilíbrio e permitem treinos unilaterais para corrigir assimetrias musculares. Além disso, são opções seguras para pessoas com lesões nos cotovelos ou pulsos, evitando a compressão da coluna vertebral que pode ocorrer em outros exercícios com halteres ou barras. Com a polia, a tensão constante ao longo do movimento garante contrações musculares mais intensas, resultando em um treino eficaz para os tríceps.",

                        "passos" => Array(
                            "Posicione-se em pé em frente à máquina de polia, com os pés afastados na largura dos ombros.",
                            "Segure a barra ou a alça da polia com as mãos em uma pegada pronada (palmas voltadas para baixo) e mantenha os cotovelos ligeiramente flexionados.",
                            "Mantenha os ombros para baixo e para trás, e mantenha uma postura ereta durante todo o exercício.",
                            "Inicie o movimento estendendo completamente os cotovelos, empurrando a barra ou a alça da polia para baixo até que seus braços estejam estendidos ao longo do corpo.",
                            "Certifique-se de manter os cotovelos próximos ao corpo durante o movimento, evitando que eles se afastem.",
                            "Mantenha a contração por um breve momento quando os braços estiverem totalmente estendidos.",
                            "Em seguida, controle o movimento enquanto retorna lentamente à posição inicial, dobrando os cotovelos e permitindo que a polia puxe a barra ou a alça para cima.",
                            "Evite balançar o corpo durante o exercício, mantendo o foco na contração dos músculos tríceps.",
                            "Repita o movimento por várias repetições, de acordo com a sua capacidade e objetivo de treinamento."
                        )
                    ),
                    Array(
                        "nome" => "Tríceps com corda",
                        "nome_url"=>"Triceps-com-corda",
                        "desc" => "Tríceps com corda",
                        "img" => "Rope-Pushdown.webp",
                        "musculo_trabalhado" => "Tríceps, antebraços",

                        "beneficios" => "Fazer tríceps com corda oferece benefícios como fortalecimento e desenvolvimento dos músculos tríceps, aumento da estabilidade dos ombros, melhoria da coordenação e equilíbrio. Esse exercício permite uma maior amplitude de movimento, envolvendo tanto a contração concêntrica quanto a excêntrica dos músculos tríceps. A corda proporciona uma maior variedade de exercícios e variações que podem ser adaptados de acordo com as necessidades e objetivos individuais. Além disso, a utilização da corda ajuda a trabalhar os músculos de forma mais completa, promovendo um treino mais eficaz. Os movimentos realizados com a corda também permitem uma maior estabilização dos pulsos, evitando possíveis lesões.",

                        "passos" => Array(
                            "Conecte a corda à máquina de polia ou ao equipamento apropriado.",
                            "Posicione-se em pé, de frente para a máquina, com os pés afastados na largura dos ombros.",
                            "Segure as extremidades da corda com as palmas das mãos voltadas uma para a outra.",
                            "Mantenha os cotovelos próximos ao corpo e os braços flexionados, mantendo uma leve inclinação para a frente.",
                            "Inicie o movimento estendendo completamente os cotovelos, empurrando a corda para baixo até que seus braços estejam estendidos ao longo do corpo.",
                            "Certifique-se de manter os cotovelos próximos ao corpo durante o movimento, evitando que eles se afastem.",
                            "Concentre-se em contrair os músculos tríceps ao máximo no final do movimento.",
                            "Em seguida, controle o movimento enquanto retorna lentamente à posição inicial, dobrando os cotovelos e permitindo que a corda suba.",
                            "Evite balançar o corpo durante o exercício, mantendo o foco na contração dos músculos tríceps.",
                            "Repita o movimento por várias repetições, de acordo com a sua capacidade e objetivo de treinamento, e descanse entre as séries."
                        )
                    ),
                    Array(
                        "nome" => "Tríceps testa com corda",
                        "nome_url"=>"Triceps-testa-com-corda",
                        "desc" => "Tríceps testa com corda",
                        "img" => "High-Pulley-Overhead-Tricep-Extension.webp",
                        "musculo_trabalhado" => "Tríceps, antebraços",

                        "beneficios" => "Fazer tríceps testa com corda oferece benefícios como fortalecimento e desenvolvimento dos músculos tríceps braquiais, especialmente da porção medial. Esse exercício direciona o foco para a região do tríceps próxima à articulação do cotovelo, promovendo um maior isolamento e estimulação muscular nessa área. A utilização da corda permite uma maior amplitude de movimento, permitindo que o tríceps seja alongado e contraído completamente. Além disso, esse exercício ajuda a melhorar a estabilidade dos cotovelos, uma vez que a corda proporciona uma pegada mais firme e segura. Com a prática regular, é possível obter um tríceps mais definido e tonificado, contribuindo para uma aparência estética mais harmônica dos braços.",

                        "passos" => Array(
                            "Conecte a corda à máquina de polia ou ao equipamento apropriado.",
                            "Posicione-se em pé, de costas para a máquina, com os pés afastados na largura dos ombros.",
                            "Segure as extremidades da corda com as palmas das mãos voltadas uma para a outra, mantendo uma pegada firme.",
                            "Flexione os cotovelos e traga as mãos em direção à testa, mantendo os braços próximos à cabeça e os cotovelos apontando para a frente.",
                            "Certifique-se de manter os cotovelos estáveis e fixos ao longo do movimento.",
                            "Inicie o movimento estendendo os cotovelos, empurrando a corda para cima até que os braços estejam completamente estendidos.",
                            "Concentre-se em contrair os músculos tríceps ao máximo no final do movimento.",
                            "Em seguida, controle o movimento enquanto retorna lentamente à posição inicial, flexionando novamente os cotovelos.",
                            "Evite balançar o corpo durante o exercício, mantendo o foco na contração dos músculos tríceps.",
                            "Repita o movimento por várias repetições, de acordo com a sua capacidade e objetivo de treinamento, e descanse entre as séries."
                        )
                    ),
                    Array(
                        "nome" => "Tríceps coice com halter",
                        "nome_url"=>"Triceps-coice-com-halter",
                        "desc" => "Tríceps coice com halter",
                        "img" => "Dumbbell-Kickback.webp",
                        "musculo_trabalhado" => "Tríceps, antebraços",

                        "beneficios" => "Fazer tríceps coice com halter oferece benefícios como fortalecimento e desenvolvimento dos músculos tríceps braquiais, em particular da porção lateral. Esse exercício direciona o foco para a parte de trás dos braços, ajudando a tonificar e definir essa região. A execução do movimento do coice com halter permite uma maior amplitude de movimento, permitindo que o tríceps seja alongado e contraído completamente. Além disso, esse exercício auxilia na estabilização dos ombros e no fortalecimento dos músculos estabilizadores. Ao realizar o coice com halter de forma adequada, você também pode melhorar a coordenação e o equilíbrio dos membros superiores, contribuindo para um treino mais completo e eficiente dos tríceps.",

                        "passos" => Array(
                                "Segure um halter com uma das mãos, com a palma da mão voltada para o corpo, mantendo o braço próximo ao tronco e o cotovelo flexionado.",
                                "Incline o tronco para a frente, mantendo as costas retas e o abdômen contraído.",
                                "Mantendo o braço fixo próximo ao tronco, estenda o antebraço para trás, movimentando o halter em direção à linha da cintura.",
                                "Ao estender o antebraço, contraia os músculos do tríceps para realizar o movimento.",
                                "Certifique-se de manter o cotovelo em linha reta e evitar que ele se mova durante o exercício.",
                                "Mantenha a posição estendida por um breve momento, sentindo a contração do tríceps.",
                                "Retorne lentamente à posição inicial, flexionando o antebraço e controlando o movimento.",
                                "Realize o número desejado de repetições com um braço antes de alternar para o outro."
                            )
                    ),
                    Array(
                        "nome" => "Tríceps coice no cabo",
                        "nome_url"=>"Triceps-coice-no-cabo",
                        "desc" => "Tríceps coice no cabo",
                        "img" => "Cable-Tricep-Kickback.webp",
                        "musculo_trabalhado" => "Tríceps, antebraços",

                        "beneficios" => "O exercício tríceps coice no cabo oferece benefícios notáveis para os tríceps e os braços. Ele fortalece e tonifica os músculos tríceps, proporcionando braços mais definidos. Além disso, o exercício melhora a força e resistência dos tríceps, o que auxilia no desempenho de outros exercícios de empurrar e levantar pesos. O movimento controlado do tríceps coice no cabo permite uma contração muscular efetiva, contribuindo para um desenvolvimento equilibrado dos tríceps. Ele também enfatiza a porção lateral dos tríceps, melhorando a simetria e a proporção muscular dos braços. O exercício pode ser adaptado para diferentes níveis de condicionamento físico, tornando-se acessível para uma variedade de pessoas.",

                        "passos" => Array(
                            "Posicione-se em frente a uma polia com altura média.",
                            "Fique com os pés afastados na largura dos ombros para obter estabilidade e avance a frente o pé inverso a mão que segura o cabo.",
                            "Mantenha os joelhos levemente flexionados e a coluna vertebral alinhada.",
                            "Comece com o cotovelo para trás do corpo, paralelo ao chão.",
                            "Inicie o movimento levando a parte inferior do braço para trás, mantendo a parte superior do braço imovel.",
                            "Mantenha a contração por um breve momento e depois retorne lentamente à posição inicial.",
                            "Mantenha um controle adequado durante todo o exercício, evitando balançar o corpo ou usar impulso para realizar o movimento.",
                            "Repita o exercício para o número desejado de repetições.
                            "
                        )
                    ),
                    Array(
                        "nome" => "Extensão de halter sob a cabeça",
                        "nome_url"=>"Extensao-de-halter-sob-a-cabeca",
                        "desc" => "Extensão de halter sob a cabeça",
                        "img" => "triceps-nuca-com-halter.webp",
                        "musculo_trabalhado" => "Tríceps, antebraços",

                        "beneficios" => "A extensão de halter sob a cabeça é um exercício que oferece diversos benefícios para os músculos do tríceps e dos ombros. Ao realizar esse exercício, você fortalece e tonifica os músculos tríceps, contribuindo para braços mais definidos e esteticamente agradáveis. Além disso, o movimento de extensão dos halteres sob a cabeça melhora a força e resistência dos tríceps, o que auxilia no desempenho de outros exercícios que envolvem empurrar e levantar pesos. Esse exercício também promove um maior desenvolvimento e definição muscular dos ombros, contribuindo para uma aparência atlética. A amplitude de movimento proporcionada pela extensão de halteres sob a cabeça permite uma contração muscular efetiva, estimulando o crescimento e a definição dos músculos trabalhados. Além disso, esse exercício pode ser adaptado para diferentes níveis de condicionamento físico, permitindo que pessoas de variados níveis de experiência se beneficiem dele.",

                        "passos" => Array(
                            "Fique em pé, com os pés afastados na largura dos ombros e os joelhos ligeiramente flexionados para manter a estabilidade.",
                            "Segure um halter com as duas mãos, com as palmas voltadas para cima, posicionando-o na frente do seu corpo.",
                            "Levante o halter acima da cabeça, estendendo completamente o braço, com o cotovelo próximo à orelha. Essa será a posição inicial.",
                            "Mantenha o cotovelo próximo à orelha ao longo de todo o exercício.",
                            "Flexione o cotovelo, abaixando o halter em direção à parte de trás da cabeça, mantendo o braço próximo à cabeça.",
                            "Continue abaixando o halter até que o antebraço fique paralelo ao chão ou ligeiramente abaixo dele.",
                            "Pause por um momento no ponto mais baixo do movimento, sentindo a contração nos músculos do tríceps.",
                            "Em seguida, estenda o cotovelo, elevando o halter de volta à posição inicial, mantendo o controle do movimento.",
                            "Mantenha uma postura adequada durante todo o exercício, com a coluna reta e o abdômen contraído.",
                            "Repita o movimento para o número desejado de repetições, mantendo uma respiração adequada durante o exercício."
                        )
                    ),
                    Array(
                        "nome" => "Tríceps no banco",
                        "nome_url"=>"Triceps-no-banco",
                        "desc" => "Tríceps no banco",
                        "img" => "Triceps-Dips-on-Floor.webp",
                        "musculo_trabalhado" => "Tríceps, antebraços",

                        "beneficios" => "O exercício tríceps no banco oferece benefícios significativos para o fortalecimento e desenvolvimento dos músculos tríceps. Ao realizar esse exercício, você promove o crescimento muscular dos tríceps, resultando em braços mais definidos e tonificados. Além disso, o exercício tríceps no banco contribui para a melhoria da força e resistência dos tríceps, permitindo um melhor desempenho em outros exercícios que envolvem empurrar e levantar pesos. O movimento controlado do exercício também auxilia no desenvolvimento da estabilidade e equilíbrio dos ombros, reduzindo o risco de lesões. A flexão e extensão dos braços durante o exercício recrutam os músculos do tríceps de forma efetiva, promovendo um estímulo adequado para o crescimento muscular.",

                        "passos" => Array(
                            "Sentado(a) em um banco, posicione as mãos na beirada do banco, com os dedos voltados para a frente e os polegares para dentro.",
                            "Deslize o corpo para fora do banco, mantendo os pés apoiados no chão.",
                            "Mantenha as costas retas e os cotovelos próximos ao corpo.",
                            "Comece com os braços estendidos, descendo o corpo em direção ao chão, dobrando os cotovelos.",
                            "Continue abaixando até que os cotovelos formem um ângulo de aproximadamente 90 graus.",
                            "Pause brevemente no ponto mais baixo do movimento, sentindo a contração nos músculos do tríceps.",
                            "Em seguida, estenda os braços, empurrando o corpo de volta à posição inicial, mantendo o controle do movimento.",
                            "Certifique-se de manter uma postura adequada durante todo o exercício, com as costas retas e o abdômen contraído.",
                            "Realize o movimento em um ritmo controlado, evitando balançar o corpo ou usar impulso para levantar o peso do corpo.",
                            "Repita o exercício para o número desejado de repetições, mantendo uma respiração adequada durante o exercício."
                        )
                    ),
                    Array(
                        "nome" => "Tríceps na máquina",
                        "nome_url"=>"Triceps-na-maquina",
                        "desc" => "Tríceps na máquina",
                        "img" => "triceps-sentado-no-aparelho.webp",
                        "musculo_trabalhado" => "Tríceps, antebraços",

                        "beneficios" => "Exercício composto que trabalha os tríceps, além de mobilizar os ombros e o peito. O peso deve ser escolhida de acordo com seus objetivos, se o foco do seu treino for força, a indicação é trabalhar com mais peso do que se a meta for a construção muscular. Sem esquecer de selecionar o peso conforme suas condições e não exceder seus limites.",

                        "passos" => Array(
                            "Sente-se no equipamento, escolha o peso e segure nas alças da máquina.",
                            "Dobre os cotovelos em um ângulo de 90º, mantendo-os ao lado do corpo, para focar o trabalho nos tríceps.",
                            "Contraia os tríceps e estenda os braços.",
                            "Na parte baixa do movimento, mantenha os braços ligeiramente dobrados para causar tensão nos tríceps.",
                            "Volte ao posicionamento inicial."
                        )
                    ),
                    Array(
                        "nome" => "Extensão de tríceps com barra reta",
                        "nome_url"=>"Extensao-de-triceps-com-barra-reta",
                        "desc" => "Extensão de tríceps com barra reta",
                        "img" => "Barbell-Triceps-Extension.webp",
                        "musculo_trabalhado" => "Tríceps, antebraços",

                        "beneficios" => "A extensão de tríceps com barra reta é um exercício altamente eficaz para fortalecer e desenvolver os músculos tríceps. Ao realizá-lo, você promove o crescimento e definição muscular nessa região, resultando em braços mais tonificados e esteticamente agradáveis. Além disso, o exercício ajuda a melhorar a força e a resistência dos tríceps, o que pode ser vantajoso para outros exercícios que envolvem empurrar e levantar pesos. A extensão de tríceps com barra reta também contribui para a estabilização dos ombros e para a melhoria da postura, reduzindo o risco de lesões. É um exercício versátil, pois pode ser adaptado para diferentes níveis de condicionamento físico, seja alterando a carga ou a posição do corpo.",

                        "passos" => Array(
                            "Deite-se em um banco plano, com os pés apoiados no chão e os joelhos flexionados.",
                            "Segure uma barra reta com as mãos em uma pegada pronada (palmas voltadas para baixo), mantendo as mãos afastadas na largura dos ombros.",
                            "Estenda os braços e posicione a barra acima do peito, mantendo os cotovelos ligeiramente flexionados. Essa será a posição inicial.",
                            "Mantendo os cotovelos fixos e próximos ao corpo, dobre os braços lentamente, abaixando a barra em direção à testa.",
                            "Continue abaixando a barra até que os antebraços fiquem paralelos ao chão ou ligeiramente abaixo dele.",
                            "Pause brevemente quando a barra estiver próxima ou tocando a testa, sentindo a contração nos músculos do tríceps.",
                            "Em seguida, estenda os braços, elevando a barra de volta à posição inicial, mantendo o controle do movimento.",
                            "Certifique-se de manter uma postura adequada durante todo o exercício, com as costas apoiadas no banco e o abdômen contraído.",
                            "Realize o movimento em um ritmo controlado, evitando balançar o corpo ou usar impulso para levantar a barra.",
                            "Repita o exercício para o número desejado de repetições, mantendo uma respiração adequada durante o exercício."
                        )
                    ),
                    Array(
                        "nome" => "Extensão de tríceps sob a cabeça deitado",
                        "nome_url"=>"Extensao-de-triceps-sob-a-cabeca-deitado",
                        "desc" => "Extensão de tríceps sob a cabeça deitado",
                        "img" => "Dumbbell-Skull-Crusher.webp",
                        "musculo_trabalhado" => "Tríceps, antebraços",

                        "beneficios" => "A extensão de tríceps com halteres é um exercício eficaz para fortalecer e desenvolver os músculos tríceps. Ao realizá-lo, você trabalha de forma isolada os tríceps, promovendo o crescimento muscular e a definição nessa região. Além disso, o exercício ajuda a melhorar a estabilidade dos ombros e a mobilidade dos cotovelos, o que pode ser benéfico em várias atividades do dia a dia. A extensão de tríceps com halteres também permite ajustar a carga de acordo com o seu nível de condicionamento físico, proporcionando uma progressão gradual.",

                        "passos" => Array(
                            "Deite-se em um banco plano, com os pés apoiados no chão e os joelhos flexionados.",
                            "Segure um halter em cada mão, com as palmas das mãos voltadas para dentro e os braços estendidos acima do peito. Essa será a posição inicial.",
                            "Mantendo os cotovelos fixos e próximos ao corpo, dobre os braços lentamente, abaixando os halteres em direção à testa.",
                            "Continue abaixando os halteres até que os antebraços fiquem paralelos ao chão ou ligeiramente abaixo dele.",
                            "Pause brevemente quando os halteres estiverem próximos ou tocando a testa, sentindo a contração nos músculos do tríceps.",
                            "Em seguida, estenda os braços, elevando os halteres de volta à posição inicial, mantendo o controle do movimento.",
                            "Certifique-se de manter uma postura adequada durante todo o exercício, com as costas apoiadas no banco e o abdômen contraído.",
                            "Realize o movimento em um ritmo controlado, evitando balançar o corpo ou usar impulso para levantar os halteres.",
                            "Repita o exercício para o número desejado de repetições, mantendo uma respiração adequada durante o exercício."
                        )
                    ),
                    Array(
                        "nome" => "Extensão de tríceps com halter sentado",
                        "nome_url"=>"Extensao-de-triceps-com-halter-sentado",
                        "desc" => "Extensão de tríceps com halter sentado",
                        "img" => "Seated-Dumbbell-Triceps-Extension.webp",
                        "musculo_trabalhado" => "Tríceps, antebraços",

                        "beneficios" => "A extensão de halter sob a cabeça é um exercício que oferece diversos benefícios para os músculos do tríceps e dos ombros. Ao realizar esse exercício, você fortalece e tonifica os músculos tríceps, contribuindo para braços mais definidos e esteticamente agradáveis. Além disso, o movimento de extensão do halter sob a cabeça melhora a força e resistência dos tríceps, o que auxilia no desempenho de outros exercícios que envolvem empurrar e levantar pesos. Esse exercício também promove um maior desenvolvimento e definição muscular dos ombros, contribuindo para uma aparência atlética. A amplitude de movimento proporcionada pela extensão de halter sob a cabeça permite uma contração muscular efetiva, estimulando o crescimento e a definição dos músculos trabalhados. Além disso, esse exercício pode ser adaptado para diferentes níveis de condicionamento físico, permitindo que pessoas de variados níveis de experiência se beneficiem dele.",

                        "passos" => Array(
                            "Sente-se, com os pés afastados para manter a estabilidade.",
                            "Segure um halter com as duas mãos, com as palmas voltadas para cima, posicionando-o na frente do seu corpo.",
                            "Levante o halter acima da cabeça, estendendo completamente o braço, com o cotovelo próximo à orelha. Essa será a posição inicial.",
                            "Mantenha o cotovelo próximo à orelha ao longo de todo o exercício.",
                            "Flexione o cotovelo, abaixando o halter em direção à parte de trás da cabeça, mantendo o braço próximo à cabeça.",
                            "Continue abaixando o halter até que o antebraço fique paralelo ao chão ou ligeiramente abaixo dele.",
                            "Pause por um momento no ponto mais baixo do movimento, sentindo a contração nos músculos do tríceps.",
                            "Em seguida, estenda o cotovelo, elevando o halter de volta à posição inicial, mantendo o controle do movimento.",
                            "Mantenha uma postura adequada durante todo o exercício, com a coluna reta e o abdômen contraído.",
                            "Repita o movimento para o número desejado de repetições, mantendo uma respiração adequada durante o exercício."
                        )
                    ),
                    Array(
                        "nome" => "Extensão lateral de tríceps no cabo",
                        "nome_url"=>"Extensao-lateral-de-triceps-no-cabo",
                        "desc" => "Extensão lateral de tríceps no cabo",
                        "img" => "Cable-Rear-Drive.webp",
                        "musculo_trabalhado" => "Tríceps, antebraços, ombro",

                        "beneficios" => "A extensão lateral de tríceps no cabo é um exercício eficaz para fortalecer e tonificar os músculos tríceps. Ao executar esse exercício, você trabalha de forma isolada os músculos tríceps, promovendo o aumento da força e da definição nessa região. Além disso, a extensão lateral de tríceps no cabo auxilia no desenvolvimento da estabilidade dos ombros e na mobilidade dos cotovelos, o que pode ser benéfico para diversas atividades do dia a dia. O exercício também permite ajustar a carga de acordo com o seu nível de condicionamento físico, facilitando a progressão ao longo do tempo. Além disso, ao utilizar o cabo, é possível manter uma tensão constante nos músculos tríceps durante todo o movimento, o que aumenta a eficácia do exercício.",

                        "passos" => Array(
                            "Posicione-se ao lado de uma máquina de cabo, com o cabo ajustado na altura do ombro.",
                            "Segure a alça do cabo com a mão oposta à lateral do corpo que está ao lado da máquina.",
                            "Fique em pé com os pés afastados na largura dos ombros, mantendo uma leve flexão nos joelhos.",
                            "Mantenha o braço que está segurando o cabo estendido ao lado do corpo na altura do ombro.",
                            "Inicie o movimento esticando o braço, levando o antebraço para trás, afastando-o do corpo.",
                            "Contraia o músculo do trícep enquanto estende completamente o antebraço.",
                            "Mantenha o restante do corpo estável, evitando movimentos excessivos do ombro ou do tronco.",
                            "Pause brevemente no topo do movimento, sentindo a contração no músculo do tríceps.",
                            "Retorne lentamente à posição inicial, controlando o movimento.",
                            "Repita o exercício para o número desejado de repetições e, em seguida, troque de lado para trabalhar a outra lateral do tríceps."
                        )
                    ),
                    Array(
                        "nome" => "Extensão de tríceps sob a cabeça unilateral deitado",
                        "nome_url"=>"Extensao-de-triceps-sob-a-cabeca-unilateral-deitado",
                        "desc" => "Extensão de tríceps sob a cabeça unilateral deitado",
                        "img" => "One-Arm-Lying-Triceps-Extension.webp",
                        "musculo_trabalhado" => "Tríceps, antebraços, ombro",

                        "beneficios" => "A extensão de tríceps sob a cabeça unilateral deitado é um exercício altamente eficaz para fortalecer e tonificar os músculos tríceps. Ao realizar esse exercício, você trabalha de forma isolada o tríceps de um braço de cada vez, o que proporciona um maior foco e recrutamento muscular. Isso auxilia no desenvolvimento de força, definição e equilíbrio muscular nos tríceps. Além disso, a posição deitada proporciona estabilidade e suporte para o tronco, permitindo que você se concentre exclusivamente no movimento dos braços. A extensão de tríceps sob a cabeça unilateral deitado também é benéfica para melhorar a estabilidade dos ombros, a coordenação e o controle do movimento.",

                        "passos" => Array(
                            "Deite-se em um banco plano, segurando um halter com uma das mãos.",
                            "Posicione o braço com o halter estendido sobre o peito, com a palma da mão voltada para dentro e o cotovelo flexionado.",
                            "Utilize a outra mão para estabilizar o braço com o halter.",
                            "Mantenha o braço fixo enquanto movendo apenas o cotovelo.",
                            "Desça o halter em direção à testa, mantendo o cotovelo próximo à cabeça.",
                            "Pare quando o antebraço estiver paralelo ao chão ou ligeiramente abaixo dele.",
                            "Pause brevemente e, em seguida, estenda o antebraço, retornando o halter à posição inicial.",
                            "Mantenha a contração nos músculos tríceps durante todo o movimento.",
                            "Certifique-se de manter uma postura adequada, com as costas apoiadas no banco e o abdômen contraído.",
                            "Realize o exercício em um ritmo controlado, evitando balançar o corpo ou usar impulso para levantar o halter.",
                            "Repita o exercício para o número desejado de repetições, alternando os braços para trabalhar ambos os tríceps."
                        )
                    )
                ),
                "Lombar" => Array(
                    Array(
                        "nome" => "Extensão lombar",
                        "nome_url"=>"Extensao-lombar",
                        "desc" => "Extensão lombar",
                        "img" => "Floor-Hyperextension-1.webp",
                        "musculo_trabalhado" => "Lombar, Coxas Posteriores, glúteos",

                        "beneficios" => "A extensão lombar, ou hiperextensão lombar, oferece benefícios como fortalecimento dos músculos das costas, estabilização da região lombar, melhora da postura e prevenção de lesões. Esse exercício promove o fortalecimento dos músculos eretores da espinha, estabiliza a coluna lombar, corrige o encurvamento excessivo, aumenta a flexibilidade, fortalece os músculos abdominais, melhora o desempenho em atividades que exigem movimentos de extensão lombar, estimula a circulação sanguínea, previne lesões nas costas, alivia dores lombares e melhora o equilíbrio corporal.",

                        "passos" => Array(
                            "Deite-se de bruços em uma superfície confortável, como um tapete ou um colchonete de exercícios.",
                            "Posicione as mãos ao lado do corpo ou na altura dos ombros, mantendo os braços estendidos.",
                            "Mantenha as pernas estendidas e os pés apoiados no chão.",
                            "Comece o movimento contraindo os músculos abdominais e glúteos para estabilizar a pelve.",
                            "Lentamente, levante o tronco, arqueando a coluna lombar para cima.",
                            "Certifique-se de manter o pescoço alinhado com a coluna e evite forçar a região cervical.",
                            "Continue elevando o tronco até sentir um alongamento suave nos músculos das costas.",
                            "Segure a posição por alguns segundos, mantendo a contração dos músculos das costas.",
                            "Retorne à posição inicial deitada, abaixando o tronco de forma controlada.",
                            "Realize o número desejado de repetições, mantendo uma execução suave e controlada."
                        )
                    ),
                    Array(
                        "nome" => "Levantamento romeno com halteres",
                        "nome_url"=>"Levantamento-romeno-com-halteres",
                        "desc" => "Levantamento romeno com halteres",
                        "img" => "Dumbbell-Romanian-Deadlift.webp",
                        "musculo_trabalhado" => "Coxas anteriores, coxas posteriores, glúteos",

                        "beneficios" => "O levantamento romeno com halteres é um exercício altamente benéfico para fortalecer e tonificar os músculos dos membros inferiores, além de melhorar a estabilidade do core e a postura. Durante esse exercício, você segura halteres com os braços estendidos e executa uma flexão do quadril, mantendo as pernas levemente flexionadas. ",

                        "passos" => Array(
                            "Segure um par de halteres com as mãos estendidas na frente do corpo, com as palmas voltadas uma para a outra.",
                            "Mantenha os pés afastados na largura dos ombros e os joelhos levemente flexionados.",
                            "Inicie o movimento inclinando o tronco para a frente a partir dos quadris, mantendo as costas retas.",
                            "Ao se inclinar para frente, deixe os halteres descerem em direção ao chão, mantendo os braços estendidos.",
                            "Continue descendo até sentir um alongamento suave nos músculos isquiotibiais, sem permitir que as costas se arredondem.",
                            "Pause por um momento na posição mais baixa, mantendo o alongamento.
                            A partir da posição mais baixa, comece a retornar à posição inicial, envolvendo os músculos das pernas e do glúteo.
                            Mantenha as costas retas durante todo o movimento, evitando arquear ou curvar a coluna.
                            Ao voltar à posição inicial, repita o movimento por várias repetições, de acordo com a sua capacidade."
                        )
                    ),
                    Array(
                        "nome" => "Levantamento terra romeno",
                        "nome_url"=>"Levantamento-terra-romeno",
                        "desc" => "Levantamento terra romeno",
                        "img" => "../Gluteos/Barbell-Romanian-Deadlift.webp",
                        "musculo_trabalhado" => "Coxas anteriores, coxas posteriores, glúteos",

                        "beneficios" => "O exercício de Levantamento Terra, também conhecido como Deadlift, é um exercício composto que trabalha vários grupos musculares, incluindo os músculos das costas, glúteos, isquiotibiais e quadríceps. Ele é considerado um dos melhores exercícios para o fortalecimento da musculatura posterior do corpo, além de ser muito eficaz para desenvolver força e resistência muscular.
                        Os benefícios do Levantamento Terra incluem a melhora da postura, aumento da força geral do corpo, fortalecimento da musculatura das costas e do core, prevenção de lesões, aumento da densidade óssea, melhora da coordenação motora e estabilidade corporal.",

                        "passos" => Array(
                            "Coloque uma barra no chão em frente a você e fique em pé com os pés na largura dos ombros, segurando a barra com as mãos afastadas na largura dos ombros.",
                            "Levante a barra do chão e coloque-a na sua posição inicial, mantendo os braços estendidos.",
                            "Dobre os joelhos levemente, mantendo as costas retas e o abdômen contraído.",
                            "Incline o tronco para a frente, mantendo a barra próxima ao corpo, até sentir um estiramento nos músculos posteriores da coxa.",
                            "Mantenha essa posição por um momento, contraindo os músculos da coxa e glúteos.",
                            "Endireite o tronco, estendendo os quadris e os joelhos e retornando à posição inicial.",
                            "Repita o movimento para o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Prancha",
                        "nome_url"=>"Prancha",
                        "desc" => "Prancha",
                        "img" => "../../front/Abdomen/plank.webp",
                        "musculo_trabalhado" => "Lombar, reto abdominal,oblíquos, glúteos",

                        "beneficios" => "A prancha é um exercício que ajuda a fortalecer os músculos do core, incluindo os músculos abdominais, da região lombar e glúteos. Além disso, a prancha também pode ajudar a melhorar a postura, a estabilidade do tronco e a resistência cardiovascular. Outros benefícios incluem a redução da dor nas costas, a melhoria da coordenação motora e o aumento da flexibilidade.",

                        "passos" => Array(
                            "Deite-se de bruços no chão e posicione os cotovelos abaixo dos ombros, mantendo os antebraços apoiados no chão.",
                            "Levante o corpo, apoiando-se nas pontas dos pés e nos antebraços, mantendo o corpo reto e o core contraído.",
                            "Mantenha os cotovelos alinhados com os ombros e os antebraços paralelos um ao outro.",
                            "Olhe para baixo, mantendo a cabeça alinhada com a coluna vertebral.",
                            "Mantenha a posição pelo tempo desejado, começando com 20 a 30 segundos e aumentando gradualmente conforme a melhoria da força e resistência.",
                            "Para finalizar, abaixe o corpo de volta ao chão."
                        )
                    ),
                    Array(
                        "nome" => "Extensão de tronco no banco inclinado",
                        "nome_url"=>"Extensao-de-tronco-no-banco-inclinado",
                        "desc" => "Extensão de tronco no banco inclinado",
                        "img" => "Weighted-Back-Extension.webp",
                        "musculo_trabalhado" => "Lombar, Coxas Posteriores, glúteos",

                        "beneficios" => "A extensão de tronco no banco inclinado é um exercício que oferece diversos benefícios para o corpo. Em primeiro lugar, ele fortalece a região lombar, os glúteos e os músculos das pernas, ajudando a melhorar a estabilidade e o equilíbrio. Além disso, esse exercício também trabalha os músculos do abdômen, contribuindo para o fortalecimento da região central do corpo.
                        Outro benefício da extensão de tronco no banco inclinado é o desenvolvimento da força e resistência dos músculos das costas, o que pode auxiliar na prevenção de dores e lesões nessa região. Esse movimento também promove uma melhora na postura, ajudando a corrigir desequilíbrios musculares e a manter a coluna vertebral alinhada.",

                        "passos" => Array(
                            "Posicione-se no banco inclinado com os pés firmemente apoiados no chão e as pernas estendidas.",
                            "Ajuste a inclinação do banco para que fique em torno de 45 graus.",
                            "Deite-se de bruços no banco, com os quadris apoiados no banco e a parte superior do corpo para fora do banco.",
                            "Coloque as mãos cruzadas atrás da cabeça ou segurando uma anilha, mantendo uma postura adequada.",
                            "Mantendo os músculos do abdômen contraídos e as costas retas, comece a levantar o tronco lentamente, usando os músculos das costas e dos glúteos.",
                            "Continue a subir até que seu tronco esteja alinhado com as pernas ou ligeiramente acima delas.",
                            "Segure por um segundo na posição de contração máxima e, em seguida, comece a abaixar o tronco de volta à posição inicial de forma controlada.",
                            "Repita o movimento para o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Bom dia",
                        "nome_url"=>"Bom-dia",
                        "desc" => "Bom dia",
                        "img" => "../Gluteos/Barbell-Good-Morning.webp",
                        "musculo_trabalhado" => "Lombar, glúteos, coxas posteriores",

                        "beneficios" => "O exercício 'bom dia' com barra reta é altamente benéfico para fortalecer e desenvolver os músculos do posterior da coxa, glúteos e lombar. Ao realizar esse exercício, você colhe uma série de benefícios. Em primeiro lugar, o 'bom dia' com barra reta é eficaz para fortalecer e tonificar os músculos posteriores da coxa, proporcionando pernas mais fortes e definidas. Além disso, ele também trabalha os glúteos, contribuindo para um bumbum mais firme e empinado. Outro benefício é o fortalecimento da região lombar, o que ajuda na estabilidade e na prevenção de lesões nessa área. Além disso, o exercício também envolve os músculos do core, contribuindo para uma melhor estabilidade e equilíbrio corporal.",

                        "passos" => Array(
                            "Posicione uma barra reta nas costas, apoiada nos ombros, com as mãos segurando a barra na largura dos ombros.",
                            "Mantenha os pés afastados na largura dos ombros e os dedos apontados ligeiramente para fora.",
                            "Mantenha a postura ereta, com os ombros para trás e os abdominais contraídos.",
                            "Incline o tronco para a frente, flexionando os quadris e mantendo as costas retas.",
                            "Continue o movimento até sentir um leve alongamento nos músculos posteriores da coxa.",
                            "Certifique-se de manter os joelhos levemente flexionados durante todo o movimento.",
                            "Pause brevemente no ponto mais baixo do movimento e concentre-se na contração dos músculos do posterior da coxa e dos glúteos.",
                            "Retorne à posição inicial, elevando o tronco e estendendo os quadris, mantendo as costas retas.",
                            "Repita o movimento para o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Elevação pévilca",
                        "nome_url"=>"Elevacao-pevilca",
                        "desc" => "Elevação pévilca",
                        "img" => "../Gluteos/Dumbbell-Glute-Bridge.webp",
                        "musculo_trabalhado" => "Lombar, glúteos, coxas posteriores",

                        "beneficios" => "O exercício de elevação pévilca com halter é um movimento eficaz para fortalecer e tonificar os músculos glúteos, posteriores da coxa e região lombar. Ao realizar esse exercício, você desfruta de vários benefícios. Em primeiro lugar, a elevação pévilca com halter é excelente para desenvolver glúteos mais firmes e empinados, melhorando a estética e a forma do bumbum. Além disso, fortalecer os glúteos e os músculos posteriores da coxa contribui para melhorar o desempenho em atividades que envolvem o movimento de extensão do quadril, como corrida, agachamento e saltos. Outro benefício é o fortalecimento da região lombar, o que ajuda na estabilidade e na prevenção de lesões nessa área. A elevação pévilca com halter também ativa os músculos do core, contribuindo para uma melhor estabilidade e equilíbrio corporal.",

                        "passos" => Array(
                            "Deite-se de costas em um colchonete ou superfície confortável.",
                            "Dobre os joelhos e mantenha os pés apoiados no chão, afastados na largura dos quadris.",
                            "Segure um halter com as duas mãos, segurando-o firmemente contra o abdômen.",
                            "Mantenha os braços estendidos ao longo do corpo.",
                            "Contraia os glúteos e os músculos abdominais, pressionando os pés contra o chão.",
                            "Levante lentamente os quadris em direção ao teto, mantendo a coluna vertebral alinhada.",
                            "Mantenha a posição por alguns segundos, sentindo a contração dos glúteos e dos músculos posteriores da coxa.",
                            "Abaixe os quadris de volta à posição inicial de forma controlada.",
                            "Repita o movimento para o número desejado de repetições."
                        )
                    )
                ),
                "Gluteos" => Array(
                    Array(
                        "nome" => "Levantamento terra romeno",
                        "nome_url"=>"Levantamento-terra-romeno",
                        "desc" => "Levantamento terra romeno",
                        "img" => "Barbell-Romanian-Deadlift.webp",
                        "musculo_trabalhado" => "Glúteos, coxas anteriores, coxas posteriores",

                        "beneficios" => "O exercício de Levantamento Terra, também conhecido como Deadlift, é um exercício composto que trabalha vários grupos musculares, incluindo os músculos das costas, glúteos, isquiotibiais e quadríceps. Ele é considerado um dos melhores exercícios para o fortalecimento da musculatura posterior do corpo, além de ser muito eficaz para desenvolver força e resistência muscular.
                        Os benefícios do Levantamento Terra incluem a melhora da postura, aumento da força geral do corpo, fortalecimento da musculatura das costas e do core, prevenção de lesões, aumento da densidade óssea, melhora da coordenação motora e estabilidade corporal.",

                        "passos" => Array(
                            "Coloque uma barra no chão em frente a você e fique em pé com os pés na largura dos ombros, segurando a barra com as mãos afastadas na largura dos ombros.",
                            "Levante a barra do chão e coloque-a na sua posição inicial, mantendo os braços estendidos.",
                            "Dobre os joelhos levemente, mantendo as costas retas e o abdômen contraído.",
                            "Incline o tronco para a frente, mantendo a barra próxima ao corpo, até sentir um estiramento nos músculos posteriores da coxa.",
                            "Mantenha essa posição por um momento, contraindo os músculos da coxa e glúteos.",
                            "Endireite o tronco, estendendo os quadris e os joelhos e retornando à posição inicial.",
                            "Repita o movimento para o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Agachamento búlgaro",
                        "nome_url"=>"Agachamento-bulgaro",
                        "desc" => "Agachamento búlgaro",
                        "img" => "../../front/Coxas-anterior/Dumbbell-Bulgarian-Split-Squat.webp",
                        "musculo_trabalhado" => "Glúteos, coxas anteriores, coxas posteriores",

                        "beneficios" => "O agachamento búlgaro é um exercício que trabalha principalmente os músculos das pernas, glúteos e core. Ele é realizado com uma perna apoiada em um banco ou plataforma, enquanto a outra perna é flexionada em um agachamento, permitindo um grande alongamento muscular. Esse exercício é excelente para desenvolver força, equilíbrio e flexibilidade nas pernas, e também pode ajudar a melhorar a estabilidade do tronco e a postura.",

                        "passos" => Array(
                            "Segure um halter em cada mão e fique em pé de costas para um banco ou plataforma.",
                            "Levante uma perna e coloque o pé na plataforma ou banco.",
                            "Dê um passo para frente com a outra perna e mantenha o pé no chão.",
                            "Flexione a perna que está no chão, descendo o quadril em direção ao chão, mantendo a outra perna estendida para trás.",
                            "Mantenha a postura ereta, com o tronco levemente inclinado para a frente.",
                            "Empurre o calcanhar da perna que está no chão e retorne à posição inicial, mantendo o controle do movimento.",
                            "Repita o movimento para o número desejado de repetições e depois mude de perna."
                        )
                    ),
                    Array(
                        "nome" => "Agachamento unilateral",
                        "nome_url"=>"Agachamento-unilateral",
                        "desc" => "Agachamento unilateral",
                        "img" => "../../front/Coxas-anterior/Barbell-Split-Squat.webp",
                        "musculo_trabalhado" => "glúteos, coxas anteriores, coxas posteriores",

                        "beneficios" => "O agachamento unilateral é um exercício que consiste em realizar agachamentos apoiando-se em uma perna de cada vez, trabalhando principalmente os músculos da coxa, glúteos e abdômen. Esse exercício ajuda a melhorar o equilíbrio e a estabilidade corporal, além de desenvolver força e resistência muscular nas pernas. Ele também pode ajudar a corrigir desequilíbrios musculares entre as pernas, já que é possível notar diferenças de força e desenvolvimento entre elas. Outro benefício é a possibilidade de variação na carga utilizada, seja com o uso de halteres, barras ou apenas com o peso corporal.",

                        "passos" => Array(
                            "Posicione a barra nas costas, entre o trapézio e a base do pescoço.",
                            "Dê um passo à frente com uma das pernas e mantenha a outra estendida para trás.",
                            "Mantenha os pés afastados na largura do quadril e com as pontas dos pés viradas para a frente.",
                            "Flexione o joelho da perna da frente, descendo o corpo em direção ao chão, até que a coxa fique paralela ao solo.",
                            "Mantenha a coluna reta, os abdominais contraídos e o peito erguido durante todo o movimento.",
                            "Empurre o chão com a perna da frente e retorne à posição inicial, repetindo o movimento por várias repetições.",
                            "Troque de perna e repita o movimento."
                        )
                    ),
                    Array(
                        "nome" => "Avanço",
                        "nome_url"=>"Avanco",
                        "desc" => "Avanço",
                        "img" => "../../front/Coxas-anterior/Dumbbell-Lunge.webp",
                        "musculo_trabalhado" => "Glúteos, coxas anteriores, coxas posteriores",

                        "beneficios" => "O agachamento avanço é um exercício que trabalha principalmente os músculos das pernas, quadris e glúteos. Ele consiste em dar um passo à frente com uma perna e flexionar os joelhos até que ambas as pernas estejam em um ângulo de 90 graus.
                        Além de fortalecer as pernas e glúteos, o agachamento avanço também pode ajudar a melhorar o equilíbrio e a estabilidade. Isso porque o exercício exige um controle maior do corpo, principalmente durante a fase de avanço.
                        O agachamento avanço pode ser feito com ou sem pesos, e é uma excelente opção para quem busca fortalecer a região das pernas e glúteos. É importante lembrar de manter a postura correta durante todo o exercício, com os ombros para trás e a cabeça erguida.",

                        "passos" => Array(
                            "Segure um par de halteres em cada mão, mantendo os braços ao lado do corpo. Fique em pé com os pés na largura dos ombros e as palmas das mãos voltadas para dentro.",
                            "Dê um passo largo à frente com uma das pernas, flexionando o joelho até que a coxa fique paralela ao chão. O joelho oposto deve quase tocar o chão.",
                            "Mantenha o tronco ereto e o peito para cima, com o abdômen contraído. Os halteres devem ficar ao lado do corpo durante todo o movimento.",
                            "Empurre-se de volta à posição inicial, pressionando o calcanhar da perna da frente para retornar à posição em pé.",
                            "Repita o movimento com a outra perna.",
                            "Alterne as pernas para realizar o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Agachamento no cabo",
                        "nome_url"=>"Agachamento-no-cabo",
                        "desc" => "Agachamento no cabo",
                        "img" => "../../front/Coxas-anterior/Cable-Squat.webp",
                        "musculo_trabalhado" => "Glúteos, coxas anteriores, coxas posteriores",

                        "beneficios" => "O agachamento no cabo é um exercício que traz vários benefícios para o fortalecimento muscular das pernas, glúteos e quadril, além de melhorar a estabilidade, equilíbrio e resistência. Ao adicionar uma resistência extra através do cabo, é possível aumentar o desafio do exercício e trabalhar músculos estabilizadores que são essenciais para a saúde e o bem-estar. Como uma variação do agachamento tradicional, o agachamento no cabo também é uma ótima maneira de trazer variedade para a rotina de treino e trabalhar diferentes grupos musculares.",

                        "passos" => Array(
                            "Prenda o pegador no equipamento de treinamento, ajustando-a na altura mais baixa.",
                            "Segure as alças firmemente.",
                            "Fique agaichado com os pés afastados na largura dos ombros e aponte os dedos dos pés para frente.",
                            "Inspire e comece a subir lentamente, mantendo a coluna vertebral reta e o peito para cima.",
                            "Continue subindo até que fique de pé.",
                            "Expire e comece a descer lentamente, dobrando os joelhos e jogando os quadris para trás.",
                            "Repita o movimento para o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Avanço no cabo",
                        "nome_url"=>"Avanco-no-cabo",
                        "desc" => "Avanço no cabo",
                        "img" => "../../front/Coxas-anterior/Cable-Forward-Lunge.webp",
                        "musculo_trabalhado" => "Glúteos, coxas anteriores, coxas posteriores",

                        "beneficios" => "Os exercícios de avanço no cabo é altamente benéfico para fortalecer os músculos das pernas e glúteos, melhorar a estabilidade do core e equilíbrio corporal, aumentar a flexibilidade e mobilidade das articulações das pernas, reduzir o risco de lesões musculares e articulares, melhorar a postura corporal, aumentar a resistência muscular e endurance, melhorar o desempenho em atividades físicas e esportes, queimar calorias e reduzir gordura corporal, melhorar a autoestima e confiança, e ajudar a prevenir doenças ósseas como a osteoporose. É fundamental realizar esses exercícios com a técnica adequada e sob a orientação de um profissional de educação física para maximizar os resultados e evitar lesões.",

                        "passos" => Array(
                            "Comece de pé, com uma corda presa em uma polia na altura adequada para você.",
                            "De costas para a polia segure a corda com as duas mãos  atrás do pescoço.",
                            "Dê um passo à frente com um pé, mantendo o outro pé no lugar.",
                            "Mantenha o pé da frente apoiado no chão e flexione o joelho da perna de trás até que ele quase toque o chão.",
                            "Mantenha o tronco ereto e a postura alinhada enquanto desce em direção ao chão.",
                            "Empurre o pé da frente para voltar à posição inicial enquanto estende o joelho da perna de trás.",
                            "Repita o movimento com a outra perna.",
                            "Alterne as pernas e repita o movimento pelo número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Agachamento sumô",
                        "nome_url"=>"Agachamento-sumo",
                        "desc" => "Agachamento sumô",
                        "img" => "agachamento-sumo-com-halter.webp",
                        "musculo_trabalhado" => "Glúteos, coxas anteriores",

                        "beneficios" => "O agachamento sumô é um exercício altamente benéfico para fortalecer os músculos inferiores do corpo. Ao adotar uma postura ampla com os pés virados para fora, ele direciona o foco para os glúteos, quadríceps e adutores, proporcionando um treinamento eficaz para essas áreas. Além de promover o ganho de massa muscular e tonificação, o agachamento sumô também melhora a estabilidade e o equilíbrio das pernas, aumenta a flexibilidade dos quadris e fortalece a região lombar. Esse exercício é especialmente útil para atletas que desejam melhorar o desempenho em esportes que envolvem movimentos laterais, como basquete e tênis, além de ser uma ótima opção para quem busca desenvolver um corpo mais forte e definido.",

                        "passos" => Array(
                            "Segure um halter com as duas mãos no centro do corpo.",
                            "Fique em pé com os pés mais afastados do que a largura dos ombros, com os dedos dos pés apontando ligeiramente para fora.",
                            "Mantenha a coluna reta, os ombros para trás e o olhar para frente.",
                            "Flexione os joelhos lentamente, mantendo o peso nos calcanhares.","Desça até que suas coxas estejam paralelas ao chão ou até onde for confortável para você.",
                            "Certifique-se de que seus joelhos não ultrapassem a linha dos dedos dos pés durante a descida.",
                            "Mantenha a posição por um breve momento, concentrando-se na contração dos músculos das pernas e glúteos.",
                            "Empurre o chão com os calcanhares e estenda os joelhos para retornar à posição inicial."
                        )
                    ),
                    Array(
                        "nome" => "Step up",
                        "nome_url"=>"Step-up",
                        "desc" => "Step up",
                        "img" => "step-up.webp",
                        "musculo_trabalhado" => "Glúteos, coxas anteriores",

                        "beneficios" => "Step up é um exercício simples, mas altamente benéfico para o fortalecimento e condicionamento físico geral. Ao incorporar esse movimento em sua rotina de treino, você pode colher uma série de benefícios. Em primeiro lugar, subir no step é uma ótima maneira de fortalecer os músculos das pernas, incluindo os quadríceps, glúteos, panturrilhas e isquiotibiais. Isso resulta em pernas mais fortes, tonificadas e definidas. Além disso, esse exercício também promove o aumento da resistência muscular e cardiovascular, pois envolve movimentos repetitivos e um trabalho aeróbico moderado. Outro benefício é o aprimoramento da coordenação motora, equilíbrio e estabilidade, pois requer concentração e controle durante o movimento.",

                        "passos" => Array(
                            "Posicione o step na frente de você, na altura desejada. Iniciantes podem começar com uma altura mais baixa e aumentar gradualmente.",
                            "Fique de pé com os pés alinhados com os quadris, ligeiramente afastados.",
                            "Mantenha a postura ereta, com os ombros para trás e os abdominais contraídos.",
                            "Comece flexionando os joelhos e os quadris, levantando um pé para subir no step.",
                            "Pressione o pé que está no step para cima até que ele fique completamente apoiado no topo do step.",
                            "Mantenha uma pausa breve no topo para estabilizar o corpo.",
                            "Em seguida, desça o pé de volta para o chão de maneira controlada.
                            Alterne os pés e repita o movimento, subindo no step com o outro pé.",
                            "Continue alternando os pés, realizando o movimento de subir e descer no step.",
                            "Mantenha um ritmo constante e controlado ao longo do exercício."
                        )
                    ),
                    Array(
                        "nome" => "Coice no cabo",
                        "nome_url"=>"Coice-no-cabo",
                        "desc" => "Coice no cabo",
                        "img" => "coice-no-cabo.webp",
                        "musculo_trabalhado" => "Glúteos, coxas anteriores",

                        "beneficios" => "O exercício de coice no cabo com a perna é uma ótima opção para fortalecer e tonificar os músculos glúteos e posteriores da coxa. Ao realizar esse exercício, você se concentra especificamente nessas regiões musculares, proporcionando vários benefícios. Primeiramente, o coice no cabo com a perna ajuda a desenvolver glúteos mais firmes e tonificados, melhorando a estética e a forma do bumbum. Além disso, fortalecer os glúteos e os músculos posteriores da coxa contribui para melhorar o desempenho em atividades que envolvem o movimento de extensão do quadril, como corrida, agachamento e saltos.",

                        "passos" => Array(
                            "Prenda uma alça de cabo baixo em uma polia posicionada ao nível dos tornozelos.",
                            "Fique de pé ao lado da máquina, com a perna de trabalho posicionada ao lado do cabo e a perna de apoio ligeiramente flexionada.",
                            "Segure-se na máquina com as duas mãos para manter o equilíbrio.",
                            "Mantenha a postura ereta, com os ombros para trás e os abdominais contraídos.",
                            "Inicie o movimento levando a perna de trabalho para trás e para cima, realizando uma extensão do quadril.",
                            "Certifique-se de manter o joelho estendido e o movimento controlado, concentrando-se na contração dos glúteos e dos músculos posteriores da coxa.",
                            "Pause brevemente no topo do movimento, sentindo a contração máxima dos músculos trabalhados.",
                            "Retorne à posição inicial de forma controlada, trazendo a perna de volta ao lado da perna de apoio.",
                            "Repita o movimento para o número desejado de repetições.",
                            "Troque de lado e repita o exercício com a outra perna."
                        )
                    ),
                    Array(
                        "nome" => "Bom dia",
                        "nome_url"=>"Bom-dia",
                        "desc" => "Bom dia",
                        "img" => "Barbell-Good-Morning.webp",
                        "musculo_trabalhado" => "Glúteos, coxas posteriores",

                        "beneficios" => "O exercício 'bom dia' com barra reta é altamente benéfico para fortalecer e desenvolver os músculos do posterior da coxa, glúteos e lombar. Ao realizar esse exercício, você colhe uma série de benefícios. Em primeiro lugar, o 'bom dia' com barra reta é eficaz para fortalecer e tonificar os músculos posteriores da coxa, proporcionando pernas mais fortes e definidas. Além disso, ele também trabalha os glúteos, contribuindo para um bumbum mais firme e empinado. Outro benefício é o fortalecimento da região lombar, o que ajuda na estabilidade e na prevenção de lesões nessa área. Além disso, o exercício também envolve os músculos do core, contribuindo para uma melhor estabilidade e equilíbrio corporal.",

                        "passos" => Array(
                            "Posicione uma barra reta nas costas, apoiada nos ombros, com as mãos segurando a barra na largura dos ombros.",
                            "Mantenha os pés afastados na largura dos ombros e os dedos apontados ligeiramente para fora.",
                            "Mantenha a postura ereta, com os ombros para trás e os abdominais contraídos.",
                            "Incline o tronco para a frente, flexionando os quadris e mantendo as costas retas.",
                            "Continue o movimento até sentir um leve alongamento nos músculos posteriores da coxa.",
                            "Certifique-se de manter os joelhos levemente flexionados durante todo o movimento.",
                            "Pause brevemente no ponto mais baixo do movimento e concentre-se na contração dos músculos do posterior da coxa e dos glúteos.",
                            "Retorne à posição inicial, elevando o tronco e estendendo os quadris, mantendo as costas retas.",
                            "Repita o movimento para o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Elevação pélvica",
                        "nome_url"=>"Elevacao-pelvica",
                        "desc" => "Elevação pélvica",
                        "img" => "Dumbbell-Glute-Bridge.webp",
                        "musculo_trabalhado" => "Glúteos, coxas posteriores",

                        "beneficios" => "O exercício de elevação pévilca com halter é um movimento eficaz para fortalecer e tonificar os músculos glúteos, posteriores da coxa e região lombar. Ao realizar esse exercício, você desfruta de vários benefícios. Em primeiro lugar, a elevação pévilca com halter é excelente para desenvolver glúteos mais firmes e empinados, melhorando a estética e a forma do bumbum. Além disso, fortalecer os glúteos e os músculos posteriores da coxa contribui para melhorar o desempenho em atividades que envolvem o movimento de extensão do quadril, como corrida, agachamento e saltos. Outro benefício é o fortalecimento da região lombar, o que ajuda na estabilidade e na prevenção de lesões nessa área. A elevação pévilca com halter também ativa os músculos do core, contribuindo para uma melhor estabilidade e equilíbrio corporal.",

                        "passos" => Array(
                            "Deite-se de costas em um colchonete ou superfície confortável.",
                            "Dobre os joelhos e mantenha os pés apoiados no chão, afastados na largura dos quadris.",
                            "Segure um halter com as duas mãos, segurando-o firmemente contra o abdômen.",
                            "Mantenha os braços estendidos ao longo do corpo.",
                            "Contraia os glúteos e os músculos abdominais, pressionando os pés contra o chão.",
                            "Levante lentamente os quadris em direção ao teto, mantendo a coluna vertebral alinhada.",
                            "Mantenha a posição por alguns segundos, sentindo a contração dos glúteos e dos músculos posteriores da coxa.",
                            "Abaixe os quadris de volta à posição inicial de forma controlada.",
                            "Repita o movimento para o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Elevação pélvica apoiado no banco",
                        "nome_url"=>"Elevacao-pelvica-apoiado-no-banco",
                        "desc" => "Elevação pélvica apoiado no banco",
                        "img" => "Barbell-Hip-Thrust.webp",
                        "musculo_trabalhado" => "Glúteos, coxas posteriores",

                        "beneficios" => "O exercício de elevação pévilca com halter é um movimento eficaz para fortalecer e tonificar os músculos glúteos, posteriores da coxa e região lombar. Ao realizar esse exercício, você desfruta de vários benefícios. Em primeiro lugar, a elevação pévilca com halter é excelente para desenvolver glúteos mais firmes e empinados, melhorando a estética e a forma do bumbum. Além disso, fortalecer os glúteos e os músculos posteriores da coxa contribui para melhorar o desempenho em atividades que envolvem o movimento de extensão do quadril, como corrida, agachamento e saltos. Outro benefício é o fortalecimento da região lombar, o que ajuda na estabilidade e na prevenção de lesões nessa área. A elevação pévilca com halter também ativa os músculos do core, contribuindo para uma melhor estabilidade e equilíbrio corporal.",

                        "passos" => Array(
                            "Posicione um banco plano próximo a você, sente-se no chão e apoie a costas no banco, com as costas totalmente apoiadas no banco e os pés no chão.",
                            "Dobre os joelhos e mantenha os pés afastados na largura dos quadris.",
                            "Coloque uma barra sobre os quadris, segurando-a com as mãos em uma pegada firme.",
                            "Mantenha os braços estendidos e os ombros relaxados.",
                            "Contraia os glúteos e os músculos abdominais.",
                            "Pressione os pés contra o chão e comece a elevar os quadris em direção ao teto, empurrando-os para cima.",
                            "Continue elevando até que seu corpo forme uma linha reta dos ombros aos joelhos.",
                            "Pause brevemente no topo do movimento, sentindo a contração dos glúteos.",
                            "Abaixe os quadris de volta à posição inicial de forma controlada, mantendo o controle do movimento.",
                            "Repita o movimento para o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Puxada no cabo entre as pernas",
                        "nome_url"=>"Puxada-no-cabo-entre-as-pernas",
                        "desc" => "Puxada no cabo entre as pernas",
                        "img" => "Pull-through-Hips.webp",
                        "musculo_trabalhado" => "Glúteos, coxas posteriores",

                        "beneficios" => "A puxada no cabo entre as pernas é um exercício que traz benefícios notáveis para a tonificação dos glúteos. Ao realizar esse exercício, você recruta os músculos do quadril, incluindo os glúteos máximo, médio e mínimo, proporcionando um trabalho específico nessa região. Isso leva ao fortalecimento e desenvolvimento dos glúteos, resultando em um aspecto mais firme e tonificado. Além disso, a puxada no cabo entre as pernas também envolve os músculos das costas e dos braços, proporcionando um estímulo adicional para essas áreas. Esse exercício contribui para melhorar a estabilidade dos quadris, o equilíbrio e a postura corporal.",

                        "passos" => Array(
                            "Posicione-se em pé, de costas para a máquina de cabo, com os pés afastados na largura dos quadris.",
                            "Agarre o triângulo com as duas mãos entre o meio das pernas, mantendo uma pegada firme.",
                            "Flexione ligeiramente os joelhos e mantenha a coluna ereta.",
                            "Inicie o movimento jogando o quadril para frente e as costas para trás, mantendo os cotovelos estendidos.",
                            "Contraia os glúteos e os músculos do quadril para realizar a tração do triângulo.",
                            "Pause brevemente no final do movimento, sentindo a contração dos glúteos.",
                            "Retorne à posição inicial de forma controlada, abaixando as costas e jogando o quadril para trás, mantendo a postura correta.",
                            "Repita o movimento para o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Agachamento livre com barra",
                        "nome_url"=>"Agachamento-livre-com-barra",
                        "desc" => "Agachamento livre com barra",
                        "img" => "../../front/Coxas-anterior/Barbell-sumo-squat.webp",
                        "musculo_trabalhado" => "Glúteos, coxas anteriores, coxas posteriores",

                        "beneficios" => "O agachamento livre com barra é um exercício de força que trabalha os músculos da parte inferior do corpo, incluindo quadríceps, glúteos, isquiotibiais e panturrilhas, além de envolver a musculatura estabilizadora do core. Este exercício é muito popular entre atletas e praticantes de musculação devido à sua eficácia em aumentar a força e o tamanho muscular das pernas e do quadril.
                        Além disso, o agachamento livre com barra também pode melhorar a mobilidade das articulações do quadril, joelho e tornozelo, bem como a densidade óssea e a saúde geral do corpo.",

                        "passos" => Array(
                            "Comece em pé com a barra posicionada no rack de agachamento em uma altura que seja confortável para você levantá-la e posicione-se abaixo dela.",
                            "Coloque a barra nas costas, apoiando-a nos músculos do trapézio e segurando-a com as mãos ligeiramente mais afastadas do que a largura dos ombros.",
                            "Dê um passo à frente, posicione os pés na largura dos ombros e aponte os dedos dos pés ligeiramente para fora.",
                            "Mantendo as costas retas, flexione os joelhos e os quadris simultaneamente, como se estivesse sentando em uma cadeira imaginária, enquanto abaixa seu corpo lentamente.",
                            "Desça até que suas coxas estejam paralelas ao chão ou até onde se sentir confortável.",
                            "Empurre através dos calcanhares e estenda as pernas e quadris para levantar o peso de volta à posição inicial."
                        )
                    ),
                    Array(
                        "nome" => "Quatro apoios",
                        "nome_url"=>"Quatro-apoios",
                        "desc" => "Quatro apoios",
                        "img" => "quatro-apoios-com-perna-esticada-e-elevacao-da-perna.webp",
                        "musculo_trabalhado" => "Glúteos, coxas anteriores, coxas posteriores",

                        "beneficios" => "O exercício de quatro apoios com elevação de perna traz diversos benefícios para o corpo. Ao realizar esse exercício, você fortalece e tonifica os músculos do glúteo, principalmente o glúteo máximo. Isso resulta em um bumbum mais firme e empinado. Além disso, a elevação de perna nessa posição também ativa os músculos das costas, dos abdominais e dos músculos estabilizadores do core, proporcionando maior estabilidade e equilíbrio corporal. Outro benefício é o fortalecimento dos músculos das pernas, incluindo os músculos posteriores da coxa.",

                        "passos" => Array(
                            "Posicione-se em uma posição de quatro apoios, com as mãos alinhadas com os ombros e os joelhos alinhados com os quadris.",
                            "Mantenha os antebraços  no chão e os joelhos apoiados no chão.",
                            "Mantenha a coluna reta, alinhada desde a cabeça até o quadril.",
                            "Engaje os músculos abdominais para estabilizar o core.",
                            "Inicie o movimento elevando uma perna estendida para trás, mantendo o joelho levemente flexionado.",
                            "Levante a perna até atingir uma posição paralela ao chão ou o mais alto possível sem comprometer a postura e estabilidade.",
                            "Mantenha a contração dos músculos do glúteo durante a elevação.",
                            "Pause brevemente no topo do movimento para sentir a contração do glúteo.",
                            "Retorne à posição inicial de forma controlada, baixando a perna até tocar novamente o chão.",
                            "Repita o movimento com a outra perna e alterne os lados."
                        )
                    ),
                    Array(
                        "nome" => "Balanço",
                        "nome_url"=>"balanco",
                        "desc" => "Balanço",
                        "img" => "russian-kettlebell-swing.webp",
                        "musculo_trabalhado" => "Glúteos, coxas anteriores, coxas posteriores",

                        "beneficios" => "O exercício de balanço com kettlebell oferece uma série de benefícios para o corpo. Ao realizar esse movimento, você trabalha de forma abrangente os músculos do corpo, especialmente os glúteos, quadríceps, isquiotibiais, core, ombros e costas. Isso resulta em um fortalecimento e tonificação muscular global. Além disso, o balanço com kettlebell também é um exercício que promove o desenvolvimento da resistência cardiovascular e melhora a coordenação motora. Esse movimento é considerado um exercício funcional, pois simula movimentos do dia a dia, como levantar objetos pesados do chão. O balanço com kettlebell também pode ser uma opção eficiente para quem busca queimar calorias e promover a perda de peso. ",

                        "passos" => Array(
                            "Posicione-se em pé, com os pés afastados na largura dos ombros e os joelhos ligeiramente flexionados.",
                            "Segure o kettlebell com as duas mãos, mantendo os braços estendidos à sua frente, na altura da linha dos joelhos.",
                            "Mantenha a coluna vertebral neutra e o olhar direcionado para frente.",
                            "Inicie o movimento dobrando os quadris e empurrando o quadril para trás, enquanto mantém os joelhos levemente flexionados.",
                            "Mantenha os braços estendidos e deixe o kettlebell balançar entre as pernas.",
                            "Com um movimento explosivo, estenda os quadris e os joelhos, balançando o kettlebell para frente até a altura dos ombros.",
                            "Durante o balanço para frente, envolva os músculos do glúteo e do core para impulsionar o kettlebell.",
                            "No momento de máximo impulso, mantenha os braços estendidos, mas não hiperestenda a coluna.",
                            "À medida que o kettlebell desce, permita que ele faça um movimento pendular entre as pernas, mantendo o controle do movimento.",
                            "Repita o movimento por várias repetições, mantendo a técnica adequada e uma respiração consistente."
                        )
                    )
                ),
                "Coxas-posterior" => Array(
                    Array(
                        "nome" => "Bom dia",
                        "nome_url"=>"Bom-dia",
                        "desc" => "Bom dia",
                        "img" => "../Gluteos/Barbell-Good-Morning.webp",
                        "musculo_trabalhado" => "Coxa posteriores, glúteos",

                        "beneficios" => "O exercício 'bom dia' com barra reta é altamente benéfico para fortalecer e desenvolver os músculos do posterior da coxa, glúteos e lombar. Ao realizar esse exercício, você colhe uma série de benefícios. Em primeiro lugar, o 'bom dia' com barra reta é eficaz para fortalecer e tonificar os músculos posteriores da coxa, proporcionando pernas mais fortes e definidas. Além disso, ele também trabalha os glúteos, contribuindo para um bumbum mais firme e empinado. Outro benefício é o fortalecimento da região lombar, o que ajuda na estabilidade e na prevenção de lesões nessa área. Além disso, o exercício também envolve os músculos do core, contribuindo para uma melhor estabilidade e equilíbrio corporal.",

                        "passos" => Array(
                            "Posicione uma barra reta nas costas, apoiada nos ombros, com as mãos segurando a barra na largura dos ombros.",
                            "Mantenha os pés afastados na largura dos ombros e os dedos apontados ligeiramente para fora.",
                            "Mantenha a postura ereta, com os ombros para trás e os abdominais contraídos.",
                            "Incline o tronco para a frente, flexionando os quadris e mantendo as costas retas.",
                            "Continue o movimento até sentir um leve alongamento nos músculos posteriores da coxa.",
                            "Certifique-se de manter os joelhos levemente flexionados durante todo o movimento.",
                            "Pause brevemente no ponto mais baixo do movimento e concentre-se na contração dos músculos do posterior da coxa e dos glúteos.",
                            "Retorne à posição inicial, elevando o tronco e estendendo os quadris, mantendo as costas retas.",
                            "Repita o movimento para o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Mesa flexora",
                        "nome_url"=>"Mesa-flexora",
                        "desc" => "Mesa flexora",
                        "img" => "Leg-Curl.webp",
                        "musculo_trabalhado" => "Coxa posteriores, glúteos",

                        "beneficios" => "A mesa flexora é um exercício que traz vários benefícios para o fortalecimento e desenvolvimento dos músculos da parte posterior das coxas, conhecidos como isquiotibiais. Ao realizar esse exercício, você fortalece os isquiotibiais, o que contribui para uma melhor estabilidade e equilíbrio das pernas. Além disso, a mesa flexora também ajuda a melhorar a flexibilidade dos músculos da região posterior das coxas, o que pode prevenir lesões e melhorar o desempenho em atividades físicas. Outro benefício desse exercício é o fortalecimento dos glúteos, já que esses músculos também são recrutados durante a execução da mesa flexora. Além disso, a mesa flexora pode ser ajustada para atingir diferentes níveis de resistência, permitindo uma progressão gradual e adaptação às capacidades individuais.",

                        "passos" => Array(
                            "Posicione-se deitado de barriga para baixo em uma mesa flexora, com os quadris na borda da mesa e as pernas estendidas.",
                            "Certifique-se de que as almofadas da mesa estejam ajustadas de forma adequada para apoiar as suas pernas logo acima dos tornozelos.",
                            "Segure nas alças da mesa para obter estabilidade durante o exercício.",
                            "Mantenha os músculos abdominais contraídos para estabilizar o tronco.",
                            "Inicie o movimento flexionando os joelhos e levantando as pernas em direção ao glúteo.",
                            "Contraia os músculos da parte posterior das coxas (isquiotibiais) enquanto levanta as pernas.",
                            "Pare no ponto mais alto da contração, onde os joelhos estão dobrados em um ângulo de 90 graus.",
                            "Mantenha a contração por um breve momento e depois abaixe as pernas de volta à posição inicial, estendendo os joelhos.",
                            "Repita o movimento para o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Levantamento terra romeno",
                        "nome_url"=>"Levantamento-terra-romeno",
                        "desc" => "Levantamento terra romeno",
                        "img" => "../Gluteos/Barbell-Romanian-Deadlift.webp",
                        "musculo_trabalhado" => "Glúteos, coxas anteriores, coxas posteriores",

                        "beneficios" => "O exercício de Levantamento Terra, também conhecido como Deadlift, é um exercício composto que trabalha vários grupos musculares, incluindo os músculos das costas, glúteos, isquiotibiais e quadríceps. Ele é considerado um dos melhores exercícios para o fortalecimento da musculatura posterior do corpo, além de ser muito eficaz para desenvolver força e resistência muscular.
                        Os benefícios do Levantamento Terra incluem a melhora da postura, aumento da força geral do corpo, fortalecimento da musculatura das costas e do core, prevenção de lesões, aumento da densidade óssea, melhora da coordenação motora e estabilidade corporal.",

                        "passos" => Array(
                            "Coloque uma barra no chão em frente a você e fique em pé com os pés na largura dos ombros, segurando a barra com as mãos afastadas na largura dos ombros.",
                            "Levante a barra do chão e coloque-a na sua posição inicial, mantendo os braços estendidos.",
                            "Dobre os joelhos levemente, mantendo as costas retas e o abdômen contraído.",
                            "Incline o tronco para a frente, mantendo a barra próxima ao corpo, até sentir um estiramento nos músculos posteriores da coxa.",
                            "Mantenha essa posição por um momento, contraindo os músculos da coxa e glúteos.",
                            "Endireite o tronco, estendendo os quadris e os joelhos e retornando à posição inicial.",
                            "Repita o movimento para o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Levantamento romeno com halteres",
                        "nome_url"=>"Levantamento-romeno-com-halteres",
                        "desc" => "Levantamento romeno com halteres",
                        "img" => "Dumbbell-Single-Leg-Deadlift.webp",
                        "musculo_trabalhado" => "Coxas posteriores, glúteos, lombar",

                        "beneficios" => "O exercício de levantamento romeno unilateral com halteres traz diversos benefícios para o corpo. Ao realizá-lo, você fortalece e desenvolve os músculos das pernas, principalmente os isquiotibiais, glúteos e músculos da panturrilha. Isso resulta em pernas mais fortes, tonificadas e definidas. Além disso, o exercício também trabalha o core e os músculos estabilizadores, contribuindo para uma melhor postura e equilíbrio corporal. O levantamento romeno unilateral com halteres também proporciona um bom estímulo para a coordenação e estabilidade muscular, uma vez que exige maior controle e equilíbrio durante a execução. Além disso, o fato de ser realizado unilateralmente permite corrigir desequilíbrios musculares e assimetrias entre as pernas.",

                        "passos" => Array(
                            "Segure um halter em cada mão, com os braços estendidos ao longo do corpo.",
                            "Mantenha os pés afastados na largura dos ombros e os joelhos levemente flexionados.",
                            "Inicie o movimento flexionando o quadril, levantando uma das pernas, mantendo-a estendida.",
                            "Mantenha as costas retas, inclinando o tronco para a frente, até que os halteres esteja próximo ao nível do joelho.",
                            "Contraia os músculos do glúteo e dos isquiotibiais para retornar à posição inicial, estendendo novamente o quadril e levantando o tronco.",
                            "Repita o movimento para o número desejado de repetições e, alterne a perna de apoio.",
                            "Concentre-se em manter a estabilidade e o equilíbrio durante o exercício, controlando a descida e a subida dos halteres."
                        )
                    ),
                    Array(
                        "nome" => "Cadeira flexora",
                        "nome_url"=>"Cadeira-flexora",
                        "desc" => "Cadeira flexora",
                        "img" => "Seated-Leg-Curl.webp",
                        "musculo_trabalhado" => "Coxas posteriores",

                        "beneficios" => "A cadeira flexora é um exercício focado nos músculos isquiotibiais, localizados na parte posterior das coxas. Ao realizar esse exercício, você fortalece e desenvolve esses músculos, contribuindo para uma maior estabilidade e resistência nas pernas. Além disso, a cadeira flexora também ajuda a melhorar a flexibilidade dos isquiotibiais, o que pode prevenir lesões e melhorar o desempenho em atividades físicas que envolvem o movimento das pernas. Outro benefício desse exercício é a redução do desequilíbrio muscular entre os isquiotibiais e os músculos da parte anterior da coxa, proporcionando uma melhor harmonia muscular na região das pernas.",

                        "passos" => Array(
                            "Ajuste o apoio da cadeira flexora de forma que seus joelhos fiquem alinhados com o eixo de rotação.",
                            "Sente-se na cadeira, posicionando os tornozelos no apoio.",
                            "Segure as alças laterais da cadeira para obter estabilidade durante o exercício.",
                            "Mantenha a coluna reta e os músculos abdominais contraídos para estabilizar o tronco.",
                            "Inicie o movimento dobrando os joelhos e levantando o peso preso ao sistema de roldanas.",
                            "Contraia os músculos isquiotibiais para elevar o peso até que as pernas fiquem em um ângulo de 90 graus.",
                            "Pause no ponto mais alto da contração e, em seguida, abaixe o peso controladamente, retornando à posição inicial.",
                            "Mantenha uma respiração adequada, inspirando ao flexionar os joelhos e expirando ao estender as pernas.",
                            "Repita o movimento para o número desejado de repetições, concentrando-se na contração e alongamento dos isquiotibiais."
                        )
                    ),
                    Array(
                        "nome" => "Extensão de tronco no banco inclinado",
                        "nome_url"=>"Extensao-de-tronco-no-banco-inclinado",
                        "desc" => "Extensão de tronco no banco inclinado",
                        "img" => "../Lombar/Weighted-Back-Extension.webp",
                        "musculo_trabalhado" => "Coxas Posteriores, glúteos, lombar",

                        "beneficios" => "A extensão de tronco no banco inclinado é um exercício que oferece diversos benefícios para o corpo. Em primeiro lugar, ele fortalece a região lombar, os glúteos e os músculos das pernas, ajudando a melhorar a estabilidade e o equilíbrio. Além disso, esse exercício também trabalha os músculos do abdômen, contribuindo para o fortalecimento da região central do corpo.
                        Outro benefício da extensão de tronco no banco inclinado é o desenvolvimento da força e resistência dos músculos das costas, o que pode auxiliar na prevenção de dores e lesões nessa região. Esse movimento também promove uma melhora na postura, ajudando a corrigir desequilíbrios musculares e a manter a coluna vertebral alinhada.",

                        "passos" => Array(
                            "Posicione-se no banco inclinado com os pés firmemente apoiados no chão e as pernas estendidas.",
                            "Ajuste a inclinação do banco para que fique em torno de 45 graus.",
                            "Deite-se de bruços no banco, com os quadris apoiados no banco e a parte superior do corpo para fora do banco.",
                            "Coloque as mãos cruzadas atrás da cabeça ou segurando uma anilha, mantendo uma postura adequada.",
                            "Mantendo os músculos do abdômen contraídos e as costas retas, comece a levantar o tronco lentamente, usando os músculos das costas e dos glúteos.",
                            "Continue a subir até que seu tronco esteja alinhado com as pernas ou ligeiramente acima delas.",
                            "Segure por um segundo na posição de contração máxima e, em seguida, comece a abaixar o tronco de volta à posição inicial de forma controlada.",
                            "Repita o movimento para o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Levantamento terra",
                        "nome_url"=>"Levantamento-terra",
                        "desc" => "Levantamento terra",
                        "img" => "../../front/Coxas-anterior/pernas-e-costas-levantamento-terra-deadlift.webp",
                        "musculo_trabalhado" => "Coxas anteriores, glúteos",

                        "beneficios" => "O exercício de Levantamento Terra, também conhecido como Deadlift, é um exercício composto que trabalha vários grupos musculares, incluindo os músculos das costas, glúteos, isquiotibiais e quadríceps. Ele é considerado um dos melhores exercícios para o fortalecimento da musculatura posterior do corpo, além de ser muito eficaz para desenvolver força e resistência muscular.
                        Os benefícios do Levantamento Terra incluem a melhora da postura, aumento da força geral do corpo, fortalecimento da musculatura das costas e do core, prevenção de lesões, aumento da densidade óssea, melhora da coordenação motora e estabilidade corporal.",

                        "passos" => Array(
                            "Coloque a barra no chão em frente a você, com as placas de peso do seu lado.",
                            "Fique de pé com os pés na largura dos ombros, mantendo os pés apontados para frente e os dedos dos pés sob a barra.",
                            "Agache-se e agarre a barra com as mãos afastadas na largura dos ombros, mantendo as mãos na frente das pernas.",
                            "Levante o peito e puxe as omoplatas para trás, mantendo a coluna vertebral em posição neutra.",
                            "Expire e levante a barra do chão, mantendo os braços estendidos.",
                            "Mantenha a barra próxima ao corpo e levante-a até ficar em pé, contraindo os músculos das costas, glúteos e pernas.",
                            "Mantenha a posição por um momento, depois abaixe a barra lentamente até o chão, enquanto inspira.",
                            "Repita o movimento para o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Agachamento smith",
                        "nome_url"=>"Agachamento-smith",
                        "desc" => "Agachamento smith",
                        "img" => "../../front/Coxas-anterior/agachamento-smith.webp",
                        "musculo_trabalhado" => "Coxas anteriores, coxas anteriores, glúteos",

                        "beneficios" => "O exercício de agachamento no Smith é uma variação do tradicional agachamento que oferece diversos benefícios para o corpo. Ao realizá-lo, você fortalece e desenvolve os músculos das pernas, incluindo quadríceps, glúteos, isquiotibiais e panturrilhas. Isso resulta em pernas mais fortes, tonificadas e poderosas. Além disso, o agachamento no Smith também trabalha os músculos estabilizadores, contribuindo para uma melhor estabilidade e equilíbrio corporal. O exercício também pode ajudar a melhorar a postura, uma vez que envolve a ativação do core e dos músculos das costas. Outro benefício é a possibilidade de ajustar a carga e a altura da barra no Smith, permitindo uma progressão gradual à medida que você ganha força. O agachamento no Smith também oferece um maior nível de segurança e estabilidade em comparação com o agachamento livre, sendo uma opção interessante para pessoas com restrições de mobilidade ou que estejam começando a praticar o exercício.",

                        "passos" => Array(
                            "Posicione-se embaixo da barra do Smith, com os ombros alinhados com a altura desejada da barra.",
                            "Coloque os pés ligeiramente afastados, em uma posição confortável e estável, com os dedos dos pés apontados ligeiramente para fora.",
                            "Agarre a barra com as mãos, mantendo uma pegada firme e segura.",
                            "Destrave a barra do apoio, mantendo os pés firmemente plantados no chão.",
                            "Mantenha as costas retas e o olhar para frente, direcionando o olhar para um ponto fixo à sua frente.",
                            "Inicie o movimento flexionando os joelhos e os quadris, abaixando o corpo até que as coxas fiquem paralelas ao chão ou em uma posição confortável.",
                            "Mantenha o peso nos calcanhares e evite que os joelhos ultrapassem a linha dos dedos dos pés.",
                            "Pause brevemente no ponto mais baixo do agachamento e, em seguida, estenda as pernas e os quadris para retornar à posição inicial.",
                            "Mantenha uma respiração adequada, inspirando ao descer e expirando ao subir.",
                            "Repita o movimento para o número desejado de repetições, focando na técnica correta e mantendo o controle do movimento."
                        )
                    ),
                    Array(
                        "nome" => "Agachamento sumô",
                        "nome_url"=>"Agachamento-sumo",
                        "desc" => "Agachamento sumô",
                        "img" => "../../front/Coxas-anterior/Sumo-Plie-Dumbbell-Squat.webp",
                        "musculo_trabalhado" => "Coxas anteriores, glúteos",

                        "beneficios" => "O agachamento sumô é um exercício altamente benéfico para fortalecer os músculos inferiores do corpo. Ao adotar uma postura ampla com os pés virados para fora, ele direciona o foco para os glúteos, quadríceps e adutores, proporcionando um treinamento eficaz para essas áreas. Além de promover o ganho de massa muscular e tonificação, o agachamento sumô também melhora a estabilidade e o equilíbrio das pernas, aumenta a flexibilidade dos quadris e fortalece a região lombar. Esse exercício é especialmente útil para atletas que desejam melhorar o desempenho em esportes que envolvem movimentos laterais, como basquete e tênis, além de ser uma ótima opção para quem busca desenvolver um corpo mais forte e definido.",

                        "passos" => Array(
                            "Segure um halter com as duas mãos no centro do corpo.",
                            "Fique em pé com os pés mais afastados do que a largura dos ombros, com os dedos dos pés apontando ligeiramente para fora.",
                            "Mantenha a coluna reta, os ombros para trás e o olhar para frente.",
                            "Flexione os joelhos lentamente, mantendo o peso nos calcanhares.","Desça até que suas coxas estejam paralelas ao chão ou até onde for confortável para você.",
                            "Certifique-se de que seus joelhos não ultrapassem a linha dos dedos dos pés durante a descida.",
                            "Mantenha a posição por um breve momento, concentrando-se na contração dos músculos das pernas e glúteos.",
                            "Empurre o chão com os calcanhares e estenda os joelhos para retornar à posição inicial."
                        )
                    ),
                    Array(
                        "nome" => "Avanço no cabo",
                        "nome_url"=>"Avanco-no-cabo",
                        "desc" => "Avanço no cabo",
                        "img" => "../../front/Coxas-anterior/Cable-Forward-Lunge.webp",
                        "musculo_trabalhado" => "Coxas anteriores, coxas posteriores, glúteos",

                        "beneficios" => "Os exercícios de avanço no cabo é altamente benéfico para fortalecer os músculos das pernas e glúteos, melhorar a estabilidade do core e equilíbrio corporal, aumentar a flexibilidade e mobilidade das articulações das pernas, reduzir o risco de lesões musculares e articulares, melhorar a postura corporal, aumentar a resistência muscular e endurance, melhorar o desempenho em atividades físicas e esportes, queimar calorias e reduzir gordura corporal, melhorar a autoestima e confiança, e ajudar a prevenir doenças ósseas como a osteoporose. É fundamental realizar esses exercícios com a técnica adequada e sob a orientação de um profissional de educação física para maximizar os resultados e evitar lesões.",

                        "passos" => Array(
                            "Comece de pé, com uma corda presa em uma polia na altura adequada para você.",
                            "De costas para a polia segure a corda com as duas mãos  atrás do pescoço.",
                            "Dê um passo à frente com um pé, mantendo o outro pé no lugar.",
                            "Mantenha o pé da frente apoiado no chão e flexione o joelho da perna de trás até que ele quase toque o chão.",
                            "Mantenha o tronco ereto e a postura alinhada enquanto desce em direção ao chão.",
                            "Empurre o pé da frente para voltar à posição inicial enquanto estende o joelho da perna de trás.",
                            "Repita o movimento com a outra perna.",
                            "Alterne as pernas e repita o movimento pelo número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Avanço",
                        "nome_url"=>"Avanco",
                        "desc" => "Avanço",
                        "img" => "../../front/Coxas-anterior/Dumbbell-Lunge.webp",
                        "musculo_trabalhado" => "Coxas anteriores, coxas posteriores, glúteos",

                        "beneficios" => "O agachamento avanço é um exercício que trabalha principalmente os músculos das pernas, quadris e glúteos. Ele consiste em dar um passo à frente com uma perna e flexionar os joelhos até que ambas as pernas estejam em um ângulo de 90 graus.
                        Além de fortalecer as pernas e glúteos, o agachamento avanço também pode ajudar a melhorar o equilíbrio e a estabilidade. Isso porque o exercício exige um controle maior do corpo, principalmente durante a fase de avanço.
                        O agachamento avanço pode ser feito com ou sem pesos, e é uma excelente opção para quem busca fortalecer a região das pernas e glúteos. É importante lembrar de manter a postura correta durante todo o exercício, com os ombros para trás e a cabeça erguida.",

                        "passos" => Array(
                            "Segure um par de halteres em cada mão, mantendo os braços ao lado do corpo. Fique em pé com os pés na largura dos ombros e as palmas das mãos voltadas para dentro.",
                            "Dê um passo largo à frente com uma das pernas, flexionando o joelho até que a coxa fique paralela ao chão. O joelho oposto deve quase tocar o chão.",
                            "Mantenha o tronco ereto e o peito para cima, com o abdômen contraído. Os halteres devem ficar ao lado do corpo durante todo o movimento.",
                            "Empurre-se de volta à posição inicial, pressionando o calcanhar da perna da frente para retornar à posição em pé.",
                            "Repita o movimento com a outra perna.",
                            "Alterne as pernas para realizar o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Agachamento taça",
                        "nome_url"=>"Agachamento-taca",
                        "desc" => "Agachamento taça",
                        "img" => "../../front/Coxas-anterior/Dumbbell-Goblet-Squat.webp",
                        "musculo_trabalhado" => "Coxas anteriores, coxas posteriores, glúteos",

                        "beneficios" => "O agachamento taça é um exercício de fortalecimento muscular que oferece vários benefícios. Ele é especialmente útil para desenvolver a força e a resistência das pernas, glúteos e músculos centrais. Além disso, é uma opção de exercício de baixo impacto para pessoas que têm problemas nas articulações do joelho ou quadril, pois ele ajuda a fortalecer as pernas sem colocar pressão nas articulações.
                        Outro benefício do agachamento taça é que ele pode melhorar a postura e a estabilidade do core, pois exige o engajamento dos músculos abdominais e das costas para manter a coluna ereta durante o movimento. ",

                        "passos" => Array(
                            "Fique em pé com os pés afastados na largura dos ombros e segure um halter ou anilha com ambas as mãos, mantendo-o próximo ao peito com os cotovelos dobrados.",
                            "Mantenha as costas retas e contraia os músculos abdominais.",
                            "Comece a flexionar os joelhos e abaixar o corpo lentamente, mantendo o peso nos calcanhares e os joelhos voltados para fora.",
                            "Continue descendo até que as coxas fiquem paralelas ao chão, mantendo as costas retas e o halter ou anilha próximo ao peito.",
                            "Pause por um momento e, em seguida, comece a se levantar lentamente, empurrando através dos calcanhares e contraindo os glúteos no topo do movimento.",
                            "Repita o movimento para completar o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Elevação pévilca",
                        "nome_url"=>"Elevacao-pevilca",
                        "desc" => "Elevação pévilca",
                        "img" => "../Gluteos/Dumbbell-Glute-Bridge.webp",
                        "musculo_trabalhado" => "Glúteos, coxas posteriores",

                        "beneficios" => "O exercício de elevação pévilca com halter é um movimento eficaz para fortalecer e tonificar os músculos glúteos, posteriores da coxa e região lombar. Ao realizar esse exercício, você desfruta de vários benefícios. Em primeiro lugar, a elevação pévilca com halter é excelente para desenvolver glúteos mais firmes e empinados, melhorando a estética e a forma do bumbum. Além disso, fortalecer os glúteos e os músculos posteriores da coxa contribui para melhorar o desempenho em atividades que envolvem o movimento de extensão do quadril, como corrida, agachamento e saltos. Outro benefício é o fortalecimento da região lombar, o que ajuda na estabilidade e na prevenção de lesões nessa área. A elevação pévilca com halter também ativa os músculos do core, contribuindo para uma melhor estabilidade e equilíbrio corporal.",

                        "passos" => Array(
                            "Deite-se de costas em um colchonete ou superfície confortável.",
                            "Dobre os joelhos e mantenha os pés apoiados no chão, afastados na largura dos quadris.",
                            "Segure um halter com as duas mãos, segurando-o firmemente contra o abdômen.",
                            "Mantenha os braços estendidos ao longo do corpo.",
                            "Contraia os glúteos e os músculos abdominais, pressionando os pés contra o chão.",
                            "Levante lentamente os quadris em direção ao teto, mantendo a coluna vertebral alinhada.",
                            "Mantenha a posição por alguns segundos, sentindo a contração dos glúteos e dos músculos posteriores da coxa.",
                            "Abaixe os quadris de volta à posição inicial de forma controlada.",
                            "Repita o movimento para o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Elevação pévilca apoiado no banco",
                        "nome_url"=>"Elevacao-pevilca-apoiado-no-banco",
                        "desc" => "Elevação pévilca apoiado no banco",
                        "img" => "../Gluteos/Barbell-Hip-Thrust.webp",
                        "musculo_trabalhado" => "Glúteos, coxas posteriores",

                        "beneficios" => "O exercício de elevação pévilca com halter é um movimento eficaz para fortalecer e tonificar os músculos glúteos, posteriores da coxa e região lombar. Ao realizar esse exercício, você desfruta de vários benefícios. Em primeiro lugar, a elevação pévilca com halter é excelente para desenvolver glúteos mais firmes e empinados, melhorando a estética e a forma do bumbum. Além disso, fortalecer os glúteos e os músculos posteriores da coxa contribui para melhorar o desempenho em atividades que envolvem o movimento de extensão do quadril, como corrida, agachamento e saltos. Outro benefício é o fortalecimento da região lombar, o que ajuda na estabilidade e na prevenção de lesões nessa área. A elevação pévilca com halter também ativa os músculos do core, contribuindo para uma melhor estabilidade e equilíbrio corporal.",

                        "passos" => Array(
                            "Posicione um banco plano próximo a você, sente-se no chão e apoie a costas no banco, com as costas totalmente apoiadas no banco e os pés no chão.",
                            "Dobre os joelhos e mantenha os pés afastados na largura dos quadris.",
                            "Coloque uma barra sobre os quadris, segurando-a com as mãos em uma pegada firme.",
                            "Mantenha os braços estendidos e os ombros relaxados.",
                            "Contraia os glúteos e os músculos abdominais.",
                            "Pressione os pés contra o chão e comece a elevar os quadris em direção ao teto, empurrando-os para cima.",
                            "Continue elevando até que seu corpo forme uma linha reta dos ombros aos joelhos.",
                            "Pause brevemente no topo do movimento, sentindo a contração dos glúteos.",
                            "Abaixe os quadris de volta à posição inicial de forma controlada, mantendo o controle do movimento.",
                            "Repita o movimento para o número desejado de repetições."
                        )
                    ),
                    Array(
                        "nome" => "Balanço",
                        "nome_url"=>"Balanco",
                        "desc" => "Balanço",
                        "img" => "../Gluteos/russian-kettlebell-swing.webp",
                        "musculo_trabalhado" => "Coxas posteriores, glúteos, coxas anteriores",

                        "beneficios" => "O exercício de balanço com kettlebell oferece uma série de benefícios para o corpo. Ao realizar esse movimento, você trabalha de forma abrangente os músculos do corpo, especialmente os glúteos, quadríceps, isquiotibiais, core, ombros e costas. Isso resulta em um fortalecimento e tonificação muscular global. Além disso, o balanço com kettlebell também é um exercício que promove o desenvolvimento da resistência cardiovascular e melhora a coordenação motora. Esse movimento é considerado um exercício funcional, pois simula movimentos do dia a dia, como levantar objetos pesados do chão. O balanço com kettlebell também pode ser uma opção eficiente para quem busca queimar calorias e promover a perda de peso.",

                        "passos" => Array(
                            "Posicione-se em pé, com os pés afastados na largura dos ombros e os joelhos ligeiramente flexionados.",
                            "Segure o kettlebell com as duas mãos, mantendo os braços estendidos à sua frente, na altura da linha dos joelhos.",
                            "Mantenha a coluna vertebral neutra e o olhar direcionado para frente.",
                            "Inicie o movimento dobrando os quadris e empurrando o quadril para trás, enquanto mantém os joelhos levemente flexionados.",
                            "Mantenha os braços estendidos e deixe o kettlebell balançar entre as pernas.",
                            "Com um movimento explosivo, estenda os quadris e os joelhos, balançando o kettlebell para frente até a altura dos ombros.",
                            "Durante o balanço para frente, envolva os músculos do glúteo e do core para impulsionar o kettlebell.",
                            "No momento de máximo impulso, mantenha os braços estendidos, mas não hiperestenda a coluna.",
                            "À medida que o kettlebell desce, permita que ele faça um movimento pendular entre as pernas, mantendo o controle do movimento.",
                            "Repita o movimento por várias repetições, mantendo a técnica adequada e uma respiração consistente."
                        )
                    ),
                    Array(
                        "nome" => "Cadeira abdutora",
                        "nome_url"=>"Cadeira-abdutora",
                        "desc" => "Cadeira abdutora",
                        "img" => "HiP-ABDUCTION-MACHINE.webp",
                        "musculo_trabalhado" => "Glúteos, coxas anteriores, coxas posteriores",

                        "beneficios" => "O exercício de cadeira abdutora é uma ótima opção para fortalecer os músculos adutores da região da coxa. Ao realizar esse movimento, você trabalha especificamente os músculos do interior da coxa, como o adutor longo e curto, além de envolver outros músculos estabilizadores e do core. Isso resulta em pernas mais fortes, tonificadas e proporciona uma maior estabilidade nas articulações do quadril e do joelho. Além disso, a cadeira abdutora auxilia no desenvolvimento do equilíbrio e na melhora da postura corporal. O exercício também pode ser útil na prevenção de lesões, principalmente para atletas que praticam esportes que exigem movimentos laterais e de agilidade.",

                        "passos" => Array(
                            "Sente-se na cadeira abdutora, ajustando a altura do assento de acordo com a sua altura.",
                            "Posicione os pés nos apoios laterais da cadeira, mantendo as pernas afastadas na largura dos ombros.",
                            "Certifique-se de que as costas estejam apoiadas no encosto da cadeira e segure as alças laterais para manter o equilíbrio.",
                            "Ajuste a carga de acordo com suas capacidades, lembrando-se de começar com um peso mais leve e progredir gradualmente.",
                            "Inicie o movimento pressionando os pés nos apoios laterais e afastando as pernas para fora, contra a resistência da máquina.",
                            "Mantenha o controle do movimento e evite utilizar o impulso para abrir as pernas.",
                            "Ao atingir a posição máxima de abdução, pause por um momento e concentre-se na contração dos músculos adutores.",
                            "Lentamente, retorne as pernas à posição inicial, controlando o movimento.",
                            "Realize o número desejado de repetições, mantendo uma respiração adequada."
                        )
                    ),
                    Array(
                        "nome" => "Cadeira adutora",
                        "nome_url"=>"Cadeira-adutora",
                        "desc" => "Cadeira abdutora",
                        "img" => "HIP-ADDUCTION-MACHINE.webp",
                        "musculo_trabalhado" => "Coxas internas",

                        "beneficios" => "O exercício de cadeira adutora é uma excelente opção para fortalecer os músculos adutores da região da coxa. Ao realizar esse movimento, você trabalha de forma específica os músculos do interior da coxa, como o adutor longo e curto. O fortalecimento desses músculos contribui para a estabilidade e equilíbrio do corpo, além de auxiliar na prevenção de lesões, principalmente nas articulações do quadril e do joelho. Além disso, a cadeira adutora também pode ajudar na correção de desequilíbrios musculares entre a musculatura adutora e abdutora das pernas. Essa simetria muscular é essencial para um bom alinhamento e funcionamento das pernas durante atividades cotidianas e esportivas.",

                        "passos" => Array(
                            "Sente-se na cadeira adutora, ajustando a altura do assento de acordo com a sua altura.",
                            "Posicione as pernas na parte externa das almofadas acolchoadas, com os joelhos flexionados em um ângulo de aproximadamente 90 graus.",
                            "Segure as alças laterais para manter o equilíbrio e a estabilidade durante o exercício.",
                            "Ajuste a carga de acordo com suas capacidades, lembrando-se de começar com um peso mais leve e progredir gradualmente.",
                            "Inicie o movimento pressionando as pernas contra as almofadas, aproximando-as uma da outra.",
                            "Mantenha o controle do movimento e evite utilizar o impulso para fechar as pernas.",
                            "Ao atingir a posição máxima de adução, pause por um momento e concentre-se na contração dos músculos adutores.",
                            "Lentamente, retorne as pernas à posição inicial, controlando o movimento.",
                            "Realize o número desejado de repetições, mantendo uma respiração adequada."
                        )
                    )
                )
            )
        );


        public function __construct(){ }

        public function listaMuscle($param) {
            if(isset($this->body['front'][$param])){
                $this->side = "front";
                return $this->body['front'][$param];
            }else if(isset($this->body['back'][$param])){
                $this->side = "back";
                return $this->body['back'][$param];
            }else{return "erro";}
        }

        public function getSide($nomeMuscle = null){
            if(!empty($nomeMuscle)){
                if(isset($this->body["front"][$nomeMuscle])){
                    return $this->side = "front";
                }else{
                    return $this->side = "back";
                }
            }else{
                return $this->side;
            }
        }

        public function getPathImage() {
            return $this->body['path'];
        }

        public function getExercicio($nomeMuscle, $exercicioNome) {

            if(isset($this->body["front"][$nomeMuscle])){
                $list = $this->body["front"][$nomeMuscle];
                $this->side = "front";
            }else{
                $list = $this->body["back"][$nomeMuscle];
                $this->side = "back";
            }

            foreach ($list as $exercicio) {
                if($exercicioNome == $exercicio['nome_url']){
                    return $exercicio;
                }
            }
        }

        // public function getExercicioNomeUrl($nomeMuscle, $nomeUrl){
        //     if(isset($this->body["front"][$nomeMuscle])){

        //     }else{
        //         $list = $this->body["back"][$nomeMuscle];

        //     }
        // }

        private $correcaoNomes = Array("Trapezio"=>"Trapézio", "Flexao"=>"Flexão","Antebraco"=>"Antebraço","Obliquos"=>"Oblíquos", "Coxas-anterior"=>"Coxas anterior", "Trapezio-medio"=>"Trapézio médio", "Triceps"=>"Tríceps", "Gluteos"=>"Glúteos", "Coxas-posterior"=>"Coxas posterior", "Abdomen"=>"Abdômen");

        public function correcaoNome($nome) {
            if(array_key_exists($nome,$this->correcaoNomes)){
                return $this->correcaoNomes[$nome];
            }
            return $nome;
        }

        private $correcaoNomeExercicio = Array("supino-vertical-na-máquina"=>"supino-vertical-na-maquina", "Rosca-scott-na-máquina"=>"Rosca-scott-na-maquina","Elevação-pélvica"=>"Elevacao-pelvica");

        public function correcaoNomeExercicio($nomeExerc) {
            if(array_key_exists($nomeExerc,$this->correcaoNomeExercicio)){
                return $this->correcaoNomeExercicio[$nomeExerc];
            }
            return $nomeExerc;
        }

    }
?>

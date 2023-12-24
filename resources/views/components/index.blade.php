<div class="inputs">
    {{-- <div class="genre">
        <div class="rb">
          <input class="form-radio-input radio radiofemale" type="radio" name="genreRadio" id="">
          <label for="genreRadio">Feminino</label>
        </div>
        <div class="rb">
          <input class="form-radio-input radio radiomale" type="radio" name="genreRadio" checked id="">
          <label for="genreRadio">Masculino</label>
        </div>
      </div>
      <div class="select">
        <select class="form-select col-2" aria-label="Default select example">
          <option selected>Tipos de exercícios</option>
          <option value="1">Alongamento</option>
          <option value="1">Aeróbico</option>
          <option value="2">Pesos</option>
        </select>
      </div> --}}
    <h3>Clique no músculo que deseja exercitar</h3>
</div>

<div class="body">
    <div class="body-front">
        <div class="man">
            <img src="{{ asset('storage/body/male/front/trap.png') }}" alt="" class="trapImg">
            <img src="{{ asset('storage/body/male/front/ombro.png') }}" alt="" class="shoulderImg">
            <img src="{{ asset('storage/body/male/front/peito.png') }}" alt="" class="chestImg">
            <img src="{{ asset('storage/body/male/front/biceps.png') }}" alt="" class="bicepsImg">
            <img src="{{ asset('storage/body/male/front/antebraco.png') }}" alt="" class="forearmImg">
            <img src="{{ asset('storage/body/male/front/barriga.png') }}" alt="" class="abdomenImg">
            <img src="{{ asset('storage/body/male/front/lateral.png') }}" alt="" class="obliqueImg">
            <img src="{{ asset('storage/body/male/front/coxa.png') }}" alt="" class="thighImg">
            <img src="{{ asset('storage/body/male/front/pant.png') }}" alt="" class="calvesImg">


            <img src="{{ asset('storage/body/male/maleFront.png') }}" alt="" class="img-front"
                usemap="#bodymapfront">

            <map name="bodymapfront" id="bodymapfront">
                <area shape="poly" class="MtrapRight trap" coords=""
                    href="{{ route('list', ['muscle' => 'Trapezio']) }}" />
                <area shape="poly" class="MtrapLeft trap" coords=""
                    href="{{ route('list', ['muscle' => 'Trapezio']) }}" />
                <area shape="poly" class="shoulderRight shoulder" coords=""
                    href="{{ route('list', ['muscle' => 'Ombros']) }}" />
                <area shape="poly" class="shoulderLeft shoulder" coords=""
                    href="{{ route('list', ['muscle' => 'Ombros']) }}" />
                <area shape="poly" class="chestRight chest" coords=""
                    href="{{ route('list', ['muscle' => 'Peitoral']) }}" />
                <area shape="poly" class="chestLeft chest" coords=""
                    href="{{ route('list', ['muscle' => 'Peitoral']) }}" />
                <area shape="poly" class="bicepsRight biceps" coords=""
                    href="{{ route('list', ['muscle' => 'Biceps']) }}" />
                <area shape="poly" class="bicepsLeft biceps" coords=""
                    href="{{ route('list', ['muscle' => 'Biceps']) }}" />
                <area shape="poly" class="forearmRight forearm" coords=""
                    href="{{ route('list', ['muscle' => 'Antebraco']) }}" />
                <area shape="poly" class="forearmLeft forearm" coords=""
                    href="{{ route('list', ['muscle' => 'Antebraco']) }}" />
                <area shape="poly" class="obliqueRight oblique" coords=""
                    href="{{ route('list', ['muscle' => 'Obliquos']) }}" />
                <area shape="poly" class="obliqueLeft oblique" coords=""
                    href="{{ route('list', ['muscle' => 'Obliquos']) }}" />
                <area shape="poly" class="abdomen" coords=""
                    href="{{ route('list', ['muscle' => 'Abdomen']) }}" />
                <area shape="poly" class="thighRight thigh" coords=""
                    href="{{ route('list', ['muscle' => 'Coxas-anterior']) }}" />
                <area shape="poly" class="thighLeft thigh" coords=""
                    href="{{ route('list', ['muscle' => 'Coxas-anterior']) }}" />

                <area shape="poly" class="calvesRightIn calves" coords=""
                    href="{{ route('list', ['muscle' => 'Panturrilhas']) }}" />
                <area shape="poly" class="calvesLeftIn calves" coords=""
                    href="{{ route('list', ['muscle' => 'Panturrilhas']) }}" />
                <area shape="poly" class="calvesRightOut calves" coords=""
                    href="{{ route('list', ['muscle' => 'Panturrilhas']) }}" />
                <area shape="poly" class="calvesLeftOut calves" coords=""
                    href="{{ route('list', ['muscle' => 'Panturrilhas']) }}" />
            </map>
        </div>

        {{-- <div class="woman">
            <img src="{{ asset('storage/body/female/front/trap.png') }}" alt="" class="FtrapImg">
            <img src="{{ asset('storage/body/female/front/ombro.png') }}" alt="" class="FshoulderImg">
            <img src="{{ asset('storage/body/female/front/peito.png') }}" alt="" class="FchestImg">
            <img src="{{ asset('storage/body/female/front/biceps.png') }}" alt="" class="FbicepsImg">
            <img src="{{ asset('storage/body/female/front/atbraco.png') }}" alt="" class="FforearmImg">
            <img src="{{ asset('storage/body/female/front/lat.png') }}" alt="" class="FobliqueImg">
            <img src="{{ asset('storage/body/female/front/abd.png') }}" alt="" class="FabdomenImg">
            <img src="{{ asset('storage/body/female/front/coxa.png') }}" alt="" class="FthighImg">
            <img src="{{ asset('storage/body/female/front/pant.png') }}" alt="" class="FcalvesImg">

            <img src="{{ asset('storage/body/female/femaleFront.png') }}" alt="" class="img-front"
                usemap="#bodymapwoman">

            <map name="bodymapwoman" id="bodymapwoman">
                <area shape="poly" class="FtrapRight trap" coords="" href="pages/list/trap.html" />
                <area shape="poly" class="FtrapLeft trap" coords="" href="pages/list/trap.html" />
                <area shape="poly" class="FshoulderRight shoulder" coords="" href="#" />
                <area shape="poly" class="FshoulderLeft shoulder" coords="" href="#" />
                <area shape="poly" class="FchestRight chest" coords="" href="#" />
                <area shape="poly" class="FchestLeft chest" coords="" href="#" />
                <area shape="poly" class="FbicepsRight biceps" coords="" href="#" />
                <area shape="poly" class="FbicepsLeft biceps" coords="" href="#" />
                <area shape="poly" class="FforearmRight forearm" coords="" href="#" />
                <area shape="poly" class="FforearmLeft forearm" coords="" href="#" />
                <area shape="poly" class="FobliqueRight oblique" coords="" href="#" />
                <area shape="poly" class="FobliqueLeft oblique" coords="" href="#" />
                <area shape="poly" class="Fabdomen" coords="" href="#" />
                <area shape="poly" class="FthighRight thigh" coords="" href="#" />
                <area shape="poly" class="FthighLeft thigh" coords="" href="#" />

                <area shape="poly" class="FcalvesRightIn calves" coords="" href="#" />
                <area shape="poly" class="FcalvesLeftIn calves" coords="" href="#" />
                <area shape="poly" class="FcalvesRightOut calves" coords="" href="#" />
                <area shape="poly" class="FcalvesLeftOut calves" coords="" href="#" />
            </map>
        </div> --}}
    </div>

    <div class="body-back">
        <div class="man">
            <img src="{{ asset('storage/body/male/back/trapBack.png') }}" alt="" class="trapImgBack">
            <img src="{{ asset('storage/body/male/back/ombro.png') }}" alt="" class="shoulderImgBack">
            <img src="{{ asset('storage/body/male/back/triceps.png') }}" alt="" class="tricepsImgBack">
            <img src="{{ asset('storage/body/male/back/trapmid.png') }}" alt="" class="trapMidImgBack">
            <img src="{{ asset('storage/body/male/back/lowback.png') }}" alt="" class="lowBackImgBack">
            <img src="{{ asset('storage/body/male/back/lats.png') }}" alt="" class="latsImgBack">
            <img src="{{ asset('storage/body/male/back/forearm.png') }}" alt="" class="forearmImgBack">
            <img src="{{ asset('storage/body/male/back/gluteos.png') }}" alt="" class="gluteosImgBack">
            <img src="{{ asset('storage/body/male/back/hams.png') }}" alt="" class="hamsImgBack">
            <img src="{{ asset('storage/body/male/back/calves.png') }}" alt="" class="calvesImgBack">

            <img src="{{ asset('storage/body/male/maleBack.png') }}" alt="" class="img-back"
                usemap="#bodymapback">

            <map name="bodymapback" id="bodymapback">
                <area shape="poly" class="trapBack" coords=""
                    href="{{ route('list', ['muscle' => 'Trapezio']) }}" />
                <area shape="poly" class="shoulderLeftBack shoulderBack" coords=""
                    href="{{ route('list', ['muscle' => 'Ombros']) }}" />
                <area shape="poly" class="shoulderRightBack shoulderBack" coords=""
                    href="{{ route('list', ['muscle' => 'Ombros']) }}" />
                <area shape="poly" class="tricepsRight triceps" coords=""
                    href="{{ route('list', ['muscle' => 'Triceps']) }}" />
                <area shape="poly" class="tricepsLeft triceps" coords=""
                    href="{{ route('list', ['muscle' => 'Triceps']) }}" />
                <area shape="poly" class="trapMid" coords=""
                    href="{{ route('list', ['muscle' => 'Trapezio-medio']) }}" />
                <area shape="poly" class="lowBack" coords=""
                    href="{{ route('list', ['muscle' => 'Lombar']) }}" />
                <area shape="poly" class="latsRight lats" coords=""
                    href="{{ route('list', ['muscle' => 'Dorsal']) }}" />
                <area shape="poly" class="latsLeft lats" coords=""
                    href="{{ route('list', ['muscle' => 'Dorsal']) }}" />
                <area shape="poly" class="forearmLeftBack forearmBack" coords=""
                    href="{{ route('list', ['muscle' => 'Antebraco']) }}" />
                <area shape="poly" class="forearmRightBack forearmBack" coords=""
                    href="{{ route('list', ['muscle' => 'Antebraco']) }}" />
                <area shape="poly" class="gluteoLeft gluteos" coords=""
                    href="{{ route('list', ['muscle' => 'Gluteos']) }}" />
                <area shape="poly" class="gluteoRight gluteos" coords=""
                    href="{{ route('list', ['muscle' => 'Gluteos']) }}" />
                <area shape="poly" class="hamsLeft hams" coords=""
                    href="{{ route('list', ['muscle' => 'Coxas-posterior']) }}" />
                <area shape="poly" class="hamsRight hams" coords=""
                    href="{{ route('list', ['muscle' => 'Coxas-posterior']) }}" />
                <area shape="poly" class="calvesLeftBack calvesBack" coords=""
                    href="{{ route('list', ['muscle' => 'Panturrilhas']) }}" />
                <area shape="poly" class="calvesRightBack calvesBack" coords=""
                    href="{{ route('list', ['muscle' => 'Panturrilhas']) }}" />
            </map>
        </div>


        {{-- <div class="woman">
            <img src="{{ asset('storage/body/female/back/backtrap.png') }}" alt="" class="FtrapImgBack">
            <img src="{{ asset('storage/body/female/back/shoulderback.png') }}" alt=""
                class="FshoulderImgBack">
            <img src="{{ asset('storage/body/female/back/tricepsback.png') }}" alt=""
                class="FtricepsImgBack">
            <img src="{{ asset('storage/body/female/back/topback.png') }}" alt="" class="FtrapMidImgBack">
            <img src="{{ asset('storage/body/female/back/bottomback.png') }}" alt=""
                class="FlowBackImgBack">
            <img src="{{ asset('storage/body/female/back/forearmback.png') }}" alt=""
                class="FforearmImgBack">
            <img src="{{ asset('storage/body/female/back/lats.png') }}" alt="" class="FlatsImgBack">
            <img src="{{ asset('storage/body/female/back/gluteos.png') }}" alt="" class="FgluteosImgBack">
            <img src="{{ asset('storage/body/female/back/hams.png') }}" alt="" class="FhamsImgBack">
            <img src="{{ asset('storage/body/female/back/calvesback.png') }}" alt="" class="FcalvesImgBack">
            <img src="{{ asset('storage/body/female/femaleBack.png') }}" alt="" class="img-back"
                usemap="#bodymapbackwoman">

            <map name="bodymapbackwoman" id="bodymapbackwoman">
                <area shape="poly" class="FtrapBack" coords="" href="pages/trap.html" />
                <area shape="poly" class="FshoulderLeftBack shoulderBack" coords="" href="#" />
                <area shape="poly" class="FshoulderRightBack shoulderBack" coords="" href="#" />
                <area shape="poly" class="FtrapMid" coords="" href="#" />
                <area shape="poly" class="FlowBack" coords="" href="#" />
                <area shape="poly" class="FtricepsRight triceps" coords="" href="#" />
                <area shape="poly" class="FtricepsLeft triceps" coords="" href="#" />
                <area shape="poly" class="FforearmLeftBack forearmBack" coords="" href="#" />
                <area shape="poly" class="FforearmRightBack forearmBack" coords="" href="#" />
                <area shape="poly" class="FlatsRight lats" coords="" href="#" />
                <area shape="poly" class="FlatsLeft lats" coords="" href="#" />
                <area shape="poly" class="FgluteoLeft gluteos" coords="" href="#" />
                <area shape="poly" class="FgluteoRight gluteos" coords="" href="#" />
                <area shape="poly" class="FhamsLeft hams" coords="" href="#" />
                <area shape="poly" class="FhamsRight hams" coords="" href="#" />
                <area shape="poly" class="FcalvesLeftBack calvesBack" coords="" href="#" />
                <area shape="poly" class="FcalvesRightBack calvesBack" coords="" href="#" />
            </map>
        </div> --}}
    </div>
</div>


{{-- <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottomCookie"
    aria-labelledby="offcanvasBottomLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Aceitar termos Cookies</h5>
    </div>
    <div class="offcanvas-body small" style="display:flex; flex-direction:column">
        <div class="content">
            Utilizamos cookies para melhorar sua experiência em nosso site e poder salvar e gerenciar seu treino para acessar quando quiser
            em seu dispositivo.
        </div>
        <div class="btns" style="display: flex;justify-content: flex-end;">
            <button style="margin-right: 5px" type="button" class="btn btn-light" data-bs-dismiss="offcanvas" aria-label="Close">Fechar</button>
            <button type="button" class="btn btn-success" data-bs-dismiss="offcanvas" aria-label="success" onclick="createCookie()">Aceitar</button>
        </div>
    </div>
</div> --}}

{{-- <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button> --}}

{{-- <div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <img src="..." class="rounded me-2" alt="">
            <strong class="me-auto">Termos de uso de cookies</strong>
        </div>
        <div class="toast-body">
            <div class="term-content">
                Utilizamos cookies para melhorar sua experiência em nosso site e podermos
            </div>
            <div class="btns">
                <button type="button" class="btn btn-light" data-bs-dismiss="toast" aria-label="Close">Fechar</button>
                <button type="button" class="btn btn-success" data-bs-dismiss="toast" aria-label="accept">Aceitar</button>
            </div>
        </div>
    </div>
</div> --}}



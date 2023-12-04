<div class="total">
    <div class="content">
        <div class="calc">
            <h3>Calcular calorias</h3>
            <div class="radios">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="radioMale" checked>
                    <label class="form-check-label" for="radioMale">
                        Homem
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="radioFemale">
                    <label class="form-check-label" for="radioFemale">
                        Mulher
                    </label>
                </div>
            </div>
            <label for="age">Atividade física</label>
            <select class="form-select" id="ativ-fisica" aria-label="Atividade-fisica">
                <option selected></option>
                <option value="1">Sedentário</option>
                <option value="2">Ativo</option>
                <option value="3">Muito ativo</option>
            </select>
            <label for="" class="alert-active"></label>

            <label for="age">Idade</label>
            <input style="margin-bottom: 5px" id="age" class="form-control" type="text"
                placeholder="Digite sua idade" aria-label="">
            <label for="" class="alert-age"></label>

            <label for="height">Peso</label>
            <input style="margin-bottom: 5px" id="weight" class="form-control" type="text"
                placeholder="Digite seu peso em Kg" aria-label="">
            <label for="" class="alert-weight"></label>

            <label for="weight">Altura</label>
            <input style="margin-bottom: 10px"style="margin-bottom: 5px" style="margin-bottom: 5px" id="height"
                class="form-control" type="text" placeholder="Digite sua altura em cm" aria-label="">
            <label for="" class="alert-height"></label>

            <div id="div-result">Gasto diário de calorias: <span id="result"></span> </div>
            <button style="margin-bottom: 5px" type="button" class="btn btn-warning btn-calc"
                onclick="calcCalories()">Calcular</button>
        </div>
    </div>
</div>
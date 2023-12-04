<div class="total">
    <div class="content">
        <div class="calc">
            {{-- <div id="div-result" style="font-size: 30px">Seu IMC: <span id="result"></span> </div> --}}
            <h3>Calcular IMC </h3>
            <label for="height">Peso</label>
            <input style="margin-bottom: 5px" id="weight" class="form-control" type="text"
            placeholder="Digite seu peso em Kg" aria-label="">
            <label for="" class="alert-weight"></label>
            <label for="weight">Altura</label>
            <input style="margin-bottom: 10px"style="margin-bottom: 5px" style="margin-bottom: 5px" id="height"
            class="form-control" type="text" placeholder="Digite sua altura em cm" aria-label="">
            <label for="" class="alert-height"></label>
            <div id="div-result">Seu IMC: <span id="result"></span></div>
            <button style="margin-bottom: 5px" type="button" class="btn btn-warning btn-calc" onclick="calcImc()">Calcular</button>
            <div id="alert"></div>
        </div>
        <div id="table">
            <table>
                <thead>
                    <tr>
                        <th colspan="2">Tabela de referência de IMC</th>
                    </tr>
                    <tr>
                        <th >IMC</th>
                        <th>Classificação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Menor que 18,5</td>
                        <td>Magreza</td>
                    </tr>
                    <tr>
                        <td>18,5 a 24,9</td>
                        <td>Normal</td>
                    </tr>
                    <tr>
                        <td>25 a 29,9</td>
                        <td>Sobrepeso</td>
                    </tr>
                    <tr>
                        <td>30 a 34,9</td>
                        <td>Obesidade grau I</td>
                    </tr>
                    <tr>
                        <td>35 a 39,9</td>
                        <td>Obesidade grau II</td>
                    </tr>
                    <tr>
                        <td>Maior que 40</td>
                        <td>Obesidade grau III</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
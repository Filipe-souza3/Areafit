<footer>
    <div class="center-footer">
        <div class="footer-header">
            <div class="logo-footer">
                Area<span>fit</span>
            </div>
        </div>
        <div class="footer-menu">
            <div class="footer-center-menu">
                <div>
                    <dl>
                        <li class="li-title">Meu treino</li>
                        <dl>
                            <li><a href="{{route('exercises')}}">treino</a></li>
                            <li>&nbsp;</li>
                        </dl>
                    </dl>
                </div>
                <div>
                    <dl>
                        <li class="li-title">Treinos</li>

                        <dl>
                            <li><a href="{{route('basic.trainning', ['gender' => 'Feminino'])}}">Feminino</a></li>
                            <li><a href="{{route('basic.trainning', ['gender' => 'Masculino'])}}">Masculino</a></li>
                        </dl>
                    </dl>
                </div>

                <div>
                    <dl>
                        <li class="li-title">Calculadoras</li>
                        <dl>
                            <li><a href="{{route('imc')}}">IMC</a></li>
                            <li><a href="{{route('calories')}}">Calorias</a></li>
                        </dl>
                    </dl>
                </div>
                <div>
                    <dl>
                        <li class="li-title">Contato</li>
                        <dl>
                            {{-- <li><a href="#">Insta</a></li> --}}
                            <li><a href="#">Email</a></li>
                        </dl>
                    </dl>
                </div>
            </div>
        </div>
        <div class="footer-copy"> © 2023-{{date('Y')}}  Areafit </div>
    </div>
</footer>

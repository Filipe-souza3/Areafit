var jsonWeek = {
    segunda: [],
    terca: [],
    quarta: [],
    quinta: [],
    sexta: [],
    sabado: [],
    domingo: []
};

function openWeek(modalWeek) {
    let muscleCookie = getCookie('training');
    if (muscleCookie == null) {
        showAcceptCookie();
    } else {
        openModal(modalWeek);
    }
}

function openModal(nameModal) {
    if (nameModal) {
        const myModalAlternative = new bootstrap.Modal('#' + nameModal);
        myModalAlternative.show();
    }
}

function openModalImportExport(nameModal) {
    if (nameModal) {
        const myModalAlternative = new bootstrap.Modal('#' + nameModal);
        myModalAlternative.show();
        this.exportar();
    }
}

function closeModalImportExport(nameModal, alertName) {
    if (nameModal) {
        if(alert){
            let alert = document.querySelector("."+alertName);
            alert.style.display = "none";
        }
        let modalElement = document.getElementById(nameModal);
        let myModalAlternative = bootstrap.Modal.getInstance(modalElement);
        myModalAlternative.hide();
    }
}

function getDays(muscle = null, exercise = null, url = null, key) {
    let seg = document.querySelector('#btn-seg-' + key);
    let ter = document.querySelector('#btn-ter-' + key);
    let qua = document.querySelector('#btn-qua-' + key);
    let qui = document.querySelector('#btn-qui-' + key);
    let sex = document.querySelector('#btn-sex-' + key);
    let sab = document.querySelector('#btn-sab-' + key);
    let dom = document.querySelector('#btn-dom-' + key);

    if (seg.getAttribute('aria-pressed') == 'true') {
        createListExercise(muscle, exercise, url, "segunda");
    }
    if (ter.getAttribute('aria-pressed') == 'true') {
        createListExercise(muscle, exercise, url, "terca");
    }
    if (qua.getAttribute('aria-pressed') == 'true') {
        createListExercise(muscle, exercise, url, "quarta");
    }
    if (qui.getAttribute('aria-pressed') == 'true') {
        createListExercise(muscle, exercise, url, "quinta");
    }
    if (sex.getAttribute('aria-pressed') == 'true') {
        createListExercise(muscle, exercise, url, "sexta");
    }
    if (sab.getAttribute('aria-pressed') == 'true') {
        createListExercise(muscle, exercise, url, "sabado");
    }
    if (dom.getAttribute('aria-pressed') == 'true') {
        createListExercise(muscle, exercise, url, "domingo");
    }

    console.log(ter.getAttribute('aria-pressed'));
    console.log(ter.getAttribute('value'));
}

function createListExercise(muscle = null, exercise = null, url = null, dayWeek) {
    let exist = false;
    let cookie = {
        "muscle": muscle,
        "exercise": [exercise]
    };
    let returnCookie = getCookie('training');
    console.log(document.cookie);

    if (returnCookie) {
        try {
            let returnGetCookie = returnCookie[dayWeek];
            console.log(returnGetCookie.length);

            for (let i = 0; returnGetCookie.length > i; i++) {
                if (returnGetCookie[i].muscle == muscle) {
                    exist = true;
                    let existExercise = false;

                    returnGetCookie[i].exercise.forEach(element => {
                        if (element == exercise) {
                            existExercise = true;
                        }
                    });

                    if (existExercise == false) {
                        returnGetCookie[i].exercise.push(exercise);
                    }
                }

            }
            if (exist == false) {
                returnGetCookie.push(cookie);
            }
            returnCookie[dayWeek] = returnGetCookie;
            document.cookie = "training=" + JSON.stringify(returnCookie) + ";path=/";
        } catch (error) {
            document.cookie = "training=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
            createListExercise(muscle, exercise, null, dayWeek);

        }
    } else {
        showAcceptCookie();
        // jsonWeek[dayWeek].push(cookie);
        // document.cookie = "training=" + JSON.stringify(jsonWeek) + ";path=/";
    }
}


function getCookie(params = null) {
    let content = null;
    let cookie = document.cookie;
    // console.log(cookie);
    if (cookie) {
        if (document.cookie.indexOf(params) != -1) {
            content = JSON.parse(
                document.cookie.split("; ").find(
                    row => row.startsWith(params + "=")
                ).split("=")[1]
            );
            console.log(content);
        }
    }
    return content;
}

function hiddenCardMuscle(card, muscle = null) {
    if (card) {
        let item = document.querySelector('#' + card);
        item.style.display = 'none';
    }

    if (muscle) {
        let musc = document.querySelector('#' + muscle);
        musc.style.display = 'none';
    }
}

function deleteCookie(nomeMuscle = null, exerciseUrl = null, route = null, daysWeek = null) {

    let muscleCookie = getCookie('training');

    console.log(daysWeek);
    console.log(muscleCookie);
    if (muscleCookie) {
        muscleCookie[daysWeek].forEach((muscle, indexMuscle) => {

            if (muscle['muscle'] == nomeMuscle) {
                muscle['exercise'].forEach((exercise, indexExercise) => {
                    if (exercise == exerciseUrl) {

                        if (muscle['exercise'].length == 1) {
                            muscleCookie[daysWeek].splice(indexMuscle, 1);
                            this.hiddenCardMuscle(exerciseUrl + "_" + daysWeek, nomeMuscle + "_" + daysWeek);
                        } else {
                            muscleCookie[daysWeek][indexMuscle]['exercise'].splice(indexExercise, 1);
                            this.hiddenCardMuscle(exerciseUrl + "_" + daysWeek, null);
                        }

                        console.log("delete");
                        console.log(muscleCookie);

                        document.cookie = "training=" + JSON.stringify(muscleCookie) + ";path=/";
                        // this.myTraining(route, null, false);
                    }
                });
            }
        });
    } else {
        alert("Erro ao encontrar o cookie.");
    }
}

function showAcceptCookie() {
    let muscleCookie = getCookie('training');
    if (muscleCookie == null) {
        const selectOffcanvas = document.querySelector('#offcanvasBottomCookie');
        canvas = new bootstrap.Offcanvas(selectOffcanvas);
        canvas.show();
    }
}

function generateDate() {
    return new Date(2147483647 * 1000).toUTCString();
}

function createCookie(textImport) {
    let expire = generateDate();
    if (textImport) {
        document.cookie = "training=" + textImport + ";expires=" + expire + ";path=/";
    } else {
        if (getCookie('training') == null) {
            document.cookie = "training=" + JSON.stringify(jsonWeek) + ";expires=" + expire + ";path=/";
        }
    }
}

function cleanCookie() {
    if (getCookie('training') != null) {
        document.cookie = "training=" + JSON.stringify(jsonWeek) + ";path=/";
        window.location.reload(true);
    }
}

function exportar() {
    let textArea = document.querySelector("#cookieExport");
    let cookie = this.getCookie('training');
    if (cookie != null) {
        textArea.value = JSON.stringify(cookie);
    }
}

function copiarExpotacao() {
    let alert = document.querySelector(".alert-export");
    let alertSucess = document.querySelector(".alert-success-export");
    let textArea = document.querySelector("#cookieExport");
    if (textArea.value) {
        navigator.clipboard.writeText(textArea.value)
            .then(() => {
                console.log("Texto copiado.");
                alertSucess.style.display = "block";
            })
            .catch(() => {
                console.log("Problema ao copiar.");
                alert.style.display = "block";
            });
            // closeModalImportExport('modalImportExport');
    }else{
        closeModalImportExport('modalImportExport','alert-export');
        showAcceptCookie();
        console.log('Nada para copiar.');
    }
}

function importar() {
    let textArea = document.querySelector("#textareaImport");

    if (getCookie('training') == null) {
        textArea.value ="";
        closeModalImportExport('modalImportExport',"alert-import");
        showAcceptCookie();
    } else {
        if (regex(textArea.value)) {
    
            let expire = generateDate();
            document.cookie = "training=" + JSON.stringify(textArea.value) + ";expires=" + expire + ";path=/";  
        }
    }
}

function regex(text) {
    let alert = document.querySelector(".alert-import");

    let reg = new RegExp(/[.=><;]/, 'g');
    let returnRegex = reg.test(text);
    if (!returnRegex) {
        // console.log('ok com o texto.');
        if (
            text.includes(':[{"muscle":') &&
            text.includes('}]') &&
            text.includes(':') &&
            text.includes(',')
        ) {

                createCookie(text);
                location.reload();

            console.log('texto ok.');
        } else {
            console.log('problema com o texto.');
            alert.style.display = "block";
        }
    } else {
        console.log('problema com o texto.');
        alert.style.display = "block";
        // return false;
    }

}

function limparImportar() {
    let textArea = document.querySelector("#textareaImport");
    textArea.value ="";
 }
// showAcceptCookie();



// {"segunda":[{"muscle":"Trapezio","exercise":["Halteres-paralelos"]},{"muscle":"Obliquos","exercise":["Abdominal-bicicleta","Flexao-lateral-com-halter"]},{"muscle":"Trapezio-medio","exercise":["Remada-sentada-na-maquina-com-barra"]},{"muscle":"Coxas-posterior","exercise":["Bom-dia"]},{"muscle":"Panturrilhas","exercise":["Elevacao-de-panturrilhas"]}],"terca":[{"muscle":"Abdomen","exercise":["Abdominal-reto"]},{"muscle":"Obliquos","exercise":["Abdominal-boxeador"]}],"quarta":[{"muscle":"Coxas-anterior","exercise":["Agachamento-bulgaro"]},{"muscle":"Trapezio-medio","exercise":["Remada-curvada-com-barra","Remada-sentada-na-maquina"]},{"muscle":"Coxas-posterior","exercise":["Mesa-flexora"]},{"muscle":"Panturrilhas","exercise":["Elevacao-de-panturrilhas-sentado"]}],"quinta":[{"muscle":"Trapezio-medio","exercise":["Remada-sentada-na-maquina"]}],"sexta":[{"muscle":"Abdomen","exercise":["Prancha"]},{"muscle":"Trapezio-medio","exercise":["Remada-sentado-na-maquina"]}],"sabado":[{"muscle":"Coxas-anterior","exercise":["Levantamento-terra"]}],"domingo":[]}
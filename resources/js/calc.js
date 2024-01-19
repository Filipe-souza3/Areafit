function calcImc(){
    let height = document.querySelector("#height");
    let weight = document.querySelector("#weight");
    let alertHeight = document.querySelector(".alert-height");
    let alertWeight = document.querySelector(".alert-weight");
    let calc = true;

    calc = check(height.value, alertHeight);
    calc = check(weight.value, alertWeight);

    let divResult = document.querySelector("#result");
    if(calc){
        alertHeight.style.display = "none";
        alertWeight.style.display = "none";
    
        let result = weight.value/(height.value*height.value);
        divResult.innerHTML = (result*10000).toFixed(1);
    }else{
        divResult.innerHTML = "";
    }
}

function calcCalories(){
    let active = document.querySelector("#ativ-fisica");
    let age = document.querySelector("#age");
    let height = document.querySelector("#height");
    let weight = document.querySelector("#weight");

    let alertActive = document.querySelector(".alert-active");
    let alertAge = document.querySelector(".alert-age");
    let alertHeight = document.querySelector(".alert-height");
    let alertWeight = document.querySelector(".alert-weight");


    let checkActive = check(active.value, alertActive);
    let checkAge = check(age.value, alertAge);
    let checkHeight = check(height.value, alertHeight);
    let checkWeight = check(weight.value, alertWeight);

    let male =  document.querySelector("#radioMale");
    let female =  document.querySelector("#radioFemale");
    let divResult = document.querySelector("#result");
    
    if(checkAge && checkHeight && checkWeight && checkActive){
        alertActive.style.display = "none";
        alertAge.style.display = "none";
        alertHeight.style.display = "none";
        alertWeight.style.display = "none";

        // Homens: TMB = 66,47 + (13,75 x P*) + ( 5,00 x A*) – (6,76 x I*)
        // Mulheres: TMB = 655,1 + (9,56 x P*) + ( 1,85 x A*) – (4,68 x I*)
        // https://www.ativo.com/saude/saiba-como-calcular-o-numero-de-calorias-necessarias-para-seu-corpo/
        let cal;
        if(male.checked){
            console.log("male");
            cal = 66.47 + (13.75*weight.value) + ( 5.00*height.value) - (6.76*age.value);
        }
        else if(female.checked){
            console.log("female");
            cal = 655.1 + (9.56*weight.value) + ( 1.85*height.value) - (4.68*age.value);
        }

        if(active.value == 1){
            cal = cal*1.2;
        } else if(active.value == 2){
            cal = cal*1.55;
        }else if(active.value == 3){
            cal = cal*1.725;
        }
        divResult.innerHTML = (cal).toFixed(2);
    } 
}

function check(field, alert){
    if(!field){
        fieldEmpty(alert);
        return false;
    }
    if(isNaN(field)){
        fieldInvalid(alert);
        return false;
    }
    fieldOk(alert);
    return true
}


function fieldOk(field){
    field.style.cssText = "display:none";
}

function fieldEmpty(field){
    field.style.cssText = "display:block; color:red";
    field.innerHTML = "Campo vazio";
}

function fieldInvalid(field){
    field.style.cssText = "display:block; color:red";
    field.innerHTML = "Valor invalido";
}
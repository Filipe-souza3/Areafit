var jsonWeek={segunda:[],terca:[],quarta:[],quinta:[],sexta:[],sabado:[],domingo:[]};function openWeek(modalWeek){null==getCookie("training")?showAcceptCookie():openModal(modalWeek)}function openModal(nameModal){nameModal&&new bootstrap.Modal("#"+nameModal).show()}function openModalImportExport(nameModal){nameModal&&(new bootstrap.Modal("#"+nameModal).show(),this.exportar())}function closeModalImportExport(nameModal,alertName){if(nameModal){if(alert){let alert=document.querySelector("."+alertName);alert.style.display="none"}alertName=document.getElementById(nameModal);bootstrap.Modal.getInstance(alertName).hide()}}function getDays(muscle=null,exercise=null,url=null,key){var seg=document.querySelector("#btn-seg-"+key),ter=document.querySelector("#btn-ter-"+key),qua=document.querySelector("#btn-qua-"+key),qui=document.querySelector("#btn-qui-"+key),sex=document.querySelector("#btn-sex-"+key),sab=document.querySelector("#btn-sab-"+key),key=document.querySelector("#btn-dom-"+key);"true"==seg.getAttribute("aria-pressed")&&createListExercise(muscle,exercise,url,"segunda"),"true"==ter.getAttribute("aria-pressed")&&createListExercise(muscle,exercise,url,"terca"),"true"==qua.getAttribute("aria-pressed")&&createListExercise(muscle,exercise,url,"quarta"),"true"==qui.getAttribute("aria-pressed")&&createListExercise(muscle,exercise,url,"quinta"),"true"==sex.getAttribute("aria-pressed")&&createListExercise(muscle,exercise,url,"sexta"),"true"==sab.getAttribute("aria-pressed")&&createListExercise(muscle,exercise,url,"sabado"),"true"==key.getAttribute("aria-pressed")&&createListExercise(muscle,exercise,url,"domingo"),console.log(ter.getAttribute("aria-pressed")),console.log(ter.getAttribute("value"))}function createListExercise(muscle=null,exercise=null,url,dayWeek){let exist=!1;var cookie={muscle:muscle,exercise:[exercise]},returnCookie=getCookie("training");if(console.log(document.cookie),returnCookie)try{var returnGetCookie=returnCookie[dayWeek];console.log(returnGetCookie.length);for(let i=0;returnGetCookie.length>i;i++)if(returnGetCookie[i].muscle==muscle){let existExercise=!(exist=!0);returnGetCookie[i].exercise.forEach(element=>{element==exercise&&(existExercise=!0)}),0==existExercise&&returnGetCookie[i].exercise.push(exercise)}0==exist&&returnGetCookie.push(cookie),returnCookie[dayWeek]=returnGetCookie,document.cookie="training="+JSON.stringify(returnCookie)+";path=/"}catch(error){document.cookie="training=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;",createListExercise(muscle,exercise,null,dayWeek)}else showAcceptCookie()}function getCookie(params=null){let content=null;return document.cookie&&-1!=document.cookie.indexOf(params)&&(content=JSON.parse(document.cookie.split("; ").find(row=>row.startsWith(params+"=")).split("=")[1]),console.log(content)),content}function hiddenCardMuscle(card,muscle=null){card&&(document.querySelector("#"+card).style.display="none"),muscle&&(document.querySelector("#"+muscle).style.display="none")}function deleteCookie(nomeMuscle=null,exerciseUrl=null,route,daysWeek=null){let muscleCookie=getCookie("training");console.log(daysWeek),console.log(muscleCookie),muscleCookie?muscleCookie[daysWeek].forEach((muscle,indexMuscle)=>{muscle.muscle==nomeMuscle&&muscle.exercise.forEach((exercise,indexExercise)=>{exercise==exerciseUrl&&(1==muscle.exercise.length?(muscleCookie[daysWeek].splice(indexMuscle,1),this.hiddenCardMuscle(exerciseUrl+"_"+daysWeek,nomeMuscle+"_"+daysWeek)):(muscleCookie[daysWeek][indexMuscle].exercise.splice(indexExercise,1),this.hiddenCardMuscle(exerciseUrl+"_"+daysWeek,null)),console.log("delete"),console.log(muscleCookie),document.cookie="training="+JSON.stringify(muscleCookie)+";path=/")})}):alert("Erro ao encontrar o cookie.")}function showAcceptCookie(){var selectOffcanvas;null==getCookie("training")&&(selectOffcanvas=document.querySelector("#offcanvasBottomCookie"),(canvas=new bootstrap.Offcanvas(selectOffcanvas)).show())}function generateDate(){return new Date(2147483647e3).toUTCString()}function createCookie(textImport){var expire=generateDate();textImport?document.cookie="training="+textImport+";expires="+expire+";path=/":null==getCookie("training")&&(document.cookie="training="+JSON.stringify(jsonWeek)+";expires="+expire+";path=/")}function cleanCookie(){null!=getCookie("training")&&(document.cookie="training="+JSON.stringify(jsonWeek)+";path=/",window.location.reload(!0))}function exportar(){var textArea=document.querySelector("#cookieExport"),cookie=this.getCookie("training");null!=cookie&&(textArea.value=JSON.stringify(cookie))}function copiarExpotacao(){let alert=document.querySelector(".alert-export"),alertSucess=document.querySelector(".alert-success-export");var textArea=document.querySelector("#cookieExport");textArea.value?navigator.clipboard.writeText(textArea.value).then(()=>{console.log("Texto copiado."),alertSucess.style.display="block"}).catch(()=>{console.log("Problema ao copiar."),alert.style.display="block"}):(closeModalImportExport("modalImportExport","alert-export"),showAcceptCookie(),console.log("Nada para copiar."))}function importar(){var expire,textArea=document.querySelector("#textareaImport");null==getCookie("training")?(textArea.value="",closeModalImportExport("modalImportExport","alert-import"),showAcceptCookie()):regex(textArea.value)&&(expire=generateDate(),document.cookie="training="+JSON.stringify(textArea.value)+";expires="+expire+";path=/")}function regex(text){var alert=document.querySelector(".alert-import");!new RegExp(/[.=><;]/,"g").test(text)&&text.includes(':[{"muscle":')&&text.includes("}]")&&text.includes(":")&&text.includes(",")?(createCookie(text),location.reload(),console.log("texto ok.")):(console.log("problema com o texto."),alert.style.display="block")}function limparImportar(){document.querySelector("#textareaImport").value=""}

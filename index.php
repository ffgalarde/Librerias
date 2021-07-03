<h1>Demo Campos Obligatorios</h1>
<div id="formulario">
    <input id="input1" class="OBLIGATORIO">
    <input id="input2" class="OBLIGATORIO">
    <input id="input3" class="">
    <input id="input4" class="">
    <input id="input5" class="OBLIGATORIO">
    <input id="input6" class="OBLIGATORIO">
</div>
<br>
<button onclick="ocultarInput5()">Ocultar/Mostrar Input5</button>
<button onclick="prueba()">Probar</button>

<script src="jquery/jquery.min.js"></script>
<script src="js/functions.js"></script>

<script>
function ocultarInput5(){
    //Al estar oculto el input la funcion no lo toma en consideracion como un dato obligatorio
    //al mostrarse nuevamente la funcion lo toma en consideracion nuevamente
    //Si el input se oculta al momento de ocultar un div, de igual forma lo ignora
    $( "#input5" ).toggle();
}

function prueba(){
    var indicador = camposObligatorios('formulario');
    if(!indicador){
        alert("Todo ok");
    }else{
        alert("Faltan campos");
    }
}
</script>
function camposObligatorios(idFormulario){
    //PENDIENTE:RETORNAR EL ID DEL CAMPO Y SU VALOR OBTENIDO COMO UN ARREGLO O UN JSON
    // No funciona con los radio buttons (no los convierte en obligatorios ni los marca de otro color)
    var campos = [];
    var regular = document.getElementsByClassName("OBLIGATORIO");
    for(var i=0; i<regular.length; i++){
        if($("#"+regular[i].getAttribute('id')).is(":visible")){
            campos.push(regular[i].getAttribute('id'));
        }
    }
    var arreglo = [];
    campos.forEach( function(valor, indice, array) {
        if($("#"+valor).val()=="" || $("#"+valor).val()=="$ NaN"){
            $('#'+valor).attr('style', 'background-color:#ffdddd;border-color:red !important;opacity: .5;');
            arreglo.push("X");
        }else{
            $('#'+valor).attr("style", "");
            arreglo.push("O");
        }
    });
    var indicador = arreglo.includes("X");
    return indicador;
}
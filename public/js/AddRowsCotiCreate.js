var numFila = 0 ;
var array_inputs = [];
var div_principal = document.getElementById("fila_detalle");


function crear_fila(){
    // Creación de nueva linea
        numFila++;

        array_inputs[0] = document.createElement('div');
        array_inputs[0].setAttribute("class","w-full md:w-6/9 px-1 mb-0 md:mb-0");
            var input = document.createElement("input");
            input.setAttribute("class",'appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:ring-1 focus:ring-blue-600');
            input.setAttribute("type","text");
            input.setAttribute("name","descripcion_" + numFila.toString());
            input.setAttribute("id","descripcion_" + numFila.toString());
            array_inputs[0].appendChild(input);

        array_inputs[1] = document.createElement("div");
        array_inputs[1].setAttribute("class","w-full md:w-1/9 px-1 mb-0 md:mb-0");
            var input_2 = document.createElement("input");
            input_2.setAttribute("class",'appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:ring-1 focus:ring-blue-600');
            input_2.setAttribute("type","text");
            input_2.setAttribute("name","precio_" + numFila.toString());
            input_2.setAttribute("id","precio_" + numFila.toString());
            array_inputs[1].appendChild(input_2);

        array_inputs[2] = document.createElement("div");
        array_inputs[2].setAttribute("class","w-full md:w-1/9 px-1 mb-0 md:mb-0");
            var input_3 = document.createElement("input");
            input_3.setAttribute("class",'appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:ring-1 focus:ring-blue-600');
            input_3.setAttribute("type","text");
            input_3.setAttribute("name","cantidad_" + numFila.toString());
            input_3.setAttribute("id","cantidad_" + numFila.toString());
            array_inputs[2].appendChild(input_3);

        array_inputs[3] = document.createElement("div");
        array_inputs[3] .setAttribute("class","w-full md:w-1/9 px-1 mb-0 md:mb-0");

        var input_4 = document.createElement("input");
            input_4.setAttribute("class",'appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:ring-1 focus:ring-blue-600');
            input_4.setAttribute("type","text");
            input_4.setAttribute("name","total_" + numFila.toString());
            input_4.setAttribute("id","total_" + numFila.toString());
            input_4.disabled=true;

            array_inputs[3].appendChild(input_4);
/*
        var label = document.createElement("labek");
        label.setAttribute("class",'block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 mt-3 focus:outline-none focus:ring-1 focus:ring-blue-600')

        div_hijo.appendChild(label);
*/

        div_principal.appendChild(array_inputs[0]);
        div_principal.appendChild(array_inputs[1]);
        div_principal.appendChild(array_inputs[2]);
        div_principal.appendChild(array_inputs[3]);

        agregarEventoBlur();
        agregarValidaciones();
}


function quitar_fila(){

    if(numFila>0){
        var input_descripcion = document.getElementById("descripcion_" + numFila.toString()); // notice the change
        input_descripcion.parentNode.removeChild(input_descripcion);

        var input_precio = document.getElementById("precio_" + numFila.toString()); // notice the change
        input_precio.parentNode.removeChild(input_precio);

        var input_cantidad = document.getElementById("cantidad_" + numFila.toString()); // notice the change
        input_cantidad.parentNode.removeChild(input_cantidad);

        var input_total = document.getElementById("total_" + numFila.toString()); // notice the change
        input_total.parentNode.removeChild(input_total);

        numFila--;
        console.log(numFila);
    }
}

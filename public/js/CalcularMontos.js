var inputs_cantidad = [];
var inputs_precio = [];
var inputs_total = [];


/*

setInputFilter(document.getElementById("intTextBox"), function(value) {
    return /^-?\d*$/.test(value); });
  setInputFilter(document.getElementById("uintTextBox"), function(value) {
    return /^\d*$/.test(value); });
  setInputFilter(document.getElementById("intLimitTextBox"), function(value) {
    return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 500); });
  setInputFilter(document.getElementById("floatTextBox"), function(value) {
    return /^-?\d*[.,]?\d*$/.test(value); });
  setInputFilter(document.getElementById("currencyTextBox"), function(value) {
    return /^-?\d*[.,]?\d{0,2}$/.test(value); });
  setInputFilter(document.getElementById("latinTextBox"), function(value) {
    return /^[a-z]*$/i.test(value); });
  setInputFilter(document.getElementById("hexTextBox"), function(value) {
    return /^[0-9a-f]*$/i.test(value); });
    https://stackoverflow.com/questions/469357/html-text-input-allow-only-numeric-input
    */


function setInputFilter(textbox, inputFilter) {
    ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
      textbox.addEventListener(event, function() {
        if (inputFilter(this.value)) {
          this.oldValue = this.value;
          this.oldSelectionStart = this.selectionStart;
          this.oldSelectionEnd = this.selectionEnd;
        } else if (this.hasOwnProperty("oldValue")) {
          this.value = this.oldValue;
          this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
        } else {
          this.value = "";
        }
      });
    });
  }

function mostrar_Cantidad(){
    alert("numero filas ? ")
    alert(numFila);
    return numFila;
}

function agregarValidaciones(){
    for (let i = 0; i <=numFila; i++) {
        inputs_cantidad[i] = document.getElementById("cantidad_"+i);
        inputs_precio[i] = document.getElementById("precio_"+i);
        inputs_total[i] = document.getElementById("total_"+i);

        // Seteo de Validaciones
        // Solo digitos y el punto decimal
        setInputFilter(inputs_precio[i], function(value) {
            return /^\d*\.?\d*$/.test(value);
        });

        // Solo digito para input cantidad
        setInputFilter(inputs_cantidad[i], function(value) {
            return /^\d*$/.test(value);
        });


    }

}

function agregarEventoBlur(){
    for (let i = 0; i <=numFila; i++) {
        inputs_cantidad[i] = document.getElementById("cantidad_"+i);
        inputs_precio[i] = document.getElementById("precio_"+i);
        inputs_total[i] = document.getElementById("total_"+i);

        inputs_cantidad[i].addEventListener("blur", function(event){
            if(!this.value == ""){
                if(!inputs_precio[i].value== ""){
                    inputs_total[i].value = inputs_precio[i].value*this.value;
                }
            }
        });

        inputs_precio[i].addEventListener("blur", function(event){
            precio = this.value;
            if(!precio == ""){
                console.log("precio" + this.value);
                if(!inputs_cantidad[i].value== ""){
                    inputs_total[i].value = parseInt(inputs_cantidad[i].value)*parseInt(precio);
                }
            }
        });
    }
}


/// Eventos para el primer registro
var inputs_cantidad_0 = document.getElementById("cantidad_0");
var inputs_precio_0 = document.getElementById("precio_0");
var inputs_total_0 = document.getElementById("total_0");

inputs_cantidad_0.addEventListener("blur", function(event){
    if(!this.value == ""){
        if(!inputs_precio_0.value== ""){
            inputs_total_0.value = inputs_precio_0.value*this.value;
        }
    }
});

inputs_precio_0.addEventListener("blur", function(event){
    precio = this.value;
    if(!precio == ""){
        console.log("precio" + this.value);
        if(!inputs_cantidad_0.value== ""){
            inputs_total_0.value = parseInt(inputs_cantidad_0.value)*parseInt(precio);
        }
    }
});

setInputFilter(inputs_precio_0, function(value) {
    return /^\d*\.?\d*$/.test(value);
});

// Solo digito para input cantidad
setInputFilter(inputs_cantidad_0, function(value) {
    return /^\d*$/.test(value);
});

var input_ruc = document.getElementById("ruc");
setInputFilter(input_ruc, function(value) {
    return /^[\d]{0,11}$/.test(value);
});

var input_celular = document.getElementById("celular");
setInputFilter(input_celular, function(value) {
    return /^[\+\d]?(?:[\d-.\s()]*)$/.test(value);
});

/*for (let i = 0; i <=numFila; i++) {
    inputs_cantidad[i] = document.getElementById("cantidad_"+i);
    inputs_precio[i] = document.getElementById("precio_"+i);
    inputs_total[i] = document.getElementById("total_"+i);

    console.log(inputs_cantidad[i]);
    console.log(inputs_precio[i]);
    console.log(inputs_total[i]);

    inputs_cantidad[i].addEventListener("blur", function(event){
        if(!this.value == ""){
            if(!inputs_precio[i].value== ""){
                inputs_total[i].value = inputs_precio[i].value*this.value;
            }
        }
    });

    inputs_precio[i].addEventListener("blur", function(event){
        precio = this.value;
        if(!precio == ""){
            console.log("precio" + this.value);
            if(!inputs_cantidad[i].value== ""){
                inputs_total[i].value = parseInt(inputs_cantidad[i].value)*parseInt(precio);
            }
        }
    });
}*/


/*
input_cantidad_0 =  document.getElementById("cantidad_0");
input_precio_0 =  document.getElementById("precio_0");
input_total_0 =  document.getElementById("total_0");

input_cantidad_0.addEventListener("blur", function(event){
    if(!this.value == ""){

        if(!input_precio_0.value== ""){

            input_total_0.value = input_precio_0.value*this.value;
        }
    }
});

input_precio_0.addEventListener("blur", function(event){
    precio = this.value;
    if(!precio == ""){
        console.log("precio" + this.value);
        if(!input_cantidad_0.value== ""){
            input_total_0.value = parseInt(input_cantidad_0.value)*parseInt(precio);
        }
    }
});*/



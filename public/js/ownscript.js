const input_sin_igv = document.getElementById('precio_venta_sin_igv');
if(input_sin_igv!=null){
    input_sin_igv.addEventListener('change',calcular_igv);
    function calcular_igv(e){
        document.getElementById('precio_venta_con_igv').value =  parseFloat(document.getElementById('precio_venta_sin_igv').value*1.18).toFixed(2) ; 
    }
}
function addFields(){
            // Number of inputs to create
            var number = document.getElementById("member").value;
            alert(number);
            // Container <div> where dynamic content will be placed
            var container = document.getElementById("container");
            alert(container);
            // Clear previous contents of the container
            while (container.hasChildNodes()) {
                container.removeChild(container.lastChild);
            }
            for (i=0;i<number;i++){
                // Append a node with a random text
                container.appendChild(document.createTextNode("Member " + (i+1)));
                // Create an <input> element, set its type and name attributes
                var input = document.createElement("input");
                input.type = "text";
                input.name = "member" + i;
                container.appendChild(input);
                // Append a line break 
                container.appendChild(document.createElement("br"));
            }
 }
    





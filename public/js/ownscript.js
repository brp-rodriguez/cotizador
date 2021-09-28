const input_sin_igv = document.getElementById('precio_venta_sin_igv');
input_sin_igv.addEventListener('change',calcular_igv);
function calcular_igv(e){
    document.getElementById('precio_venta_con_igv').value =  parseFloat(document.getElementById('precio_venta_sin_igv').value*1.18).toFixed(2) ; 
}






window.addEventListener("load",function(){
    let BtnCalc = this.document.getElementById('BtnCalc');
    let importe = this.document.getElementById('importe');
    let valoracion_malo = this.document.getElementById('valoracion_malo');
    let valoracion_bueno = this.document.getElementById('valoracion_bueno');
    let valoracion_excel = this.document.getElementById('valoracion_excel');
    let importe_calculado = this.document.querySelector("#importe_calculado");
    BtnCalc.addEventListener("click", function(){
        if (valoracion_malo.checked == true){
            let importe_ya_sumado = importe.value * 1;
            importe_calculado.innerHTML =importe_ya_sumado;
        };
        if (valoracion_bueno.checked == true){
            let importe_ya_sumado = importe.value * 1.10;
            importe_calculado.innerHTML =importe_ya_sumado;
        };
        if (valoracion_excel.checked == true){
            let importe_ya_sumado = importe.value * 1.25;
            importe_calculado.innerHTML =importe_ya_sumado;
        };
    });
    console.log(valoracion_bueno);
    console.log(valoracion_malo);
})  

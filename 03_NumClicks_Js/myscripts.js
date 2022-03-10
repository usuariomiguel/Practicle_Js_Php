window.addEventListener("load",function(){
    let evio
    let contador = 0
    evio = document.getElementById("evio")
    salida = document.getElementById("salida")
    evio.addEventListener("click",function(){
        if (contador == 0 ) {
            alert ("Buenas")
            contador = contador + 1;
        } else {
            contador = contador + 1;
            salida.innerHTML = ("Has clicado" + " " + contador + " " + "veces")
        }
    })
})
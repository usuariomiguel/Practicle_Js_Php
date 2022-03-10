window.addEventListener("load",function(){
    let pulsaBtn = document.getElementById("pulsaBtn")
    let salida = document.getElementById("salida")
    let n1 = 0
    let n2 = 1
    let suma = 0
    let generado_salida = "0,1,"
    pulsaBtn.addEventListener("click", function(){
        suma = n1 + n2
        n1 = n2
        n2 = suma
        salida.innerHTML=suma
    })
})
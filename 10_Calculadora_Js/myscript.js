window.addEventListener("load",function(){
    let operando_1 = document.querySelector("#operando_1")
    let operando_2 = this.document.getElementById("operando_2")
    let button_suma = this.document.getElementById("button_suma")
    let button_resta = this.document.getElementById("button_resta")
    let button_multi = this.document.getElementById("button_multi")
    let button_divide = this.document.getElementById("button_divide")
    let text_resultado = this.document.getElementById("text_resultado")
    button_suma.addEventListener("click", function(){
        text_resultado.innerHTML = parseFloat(operando_1.value) + parseFloat(operando_2.value)
    })
    button_resta.addEventListener("click", function(){
        text_resultado.innerHTML = parseFloat(operando_1.value) - parseFloat(operando_2.value)
    })
    button_multi.addEventListener("click", function(){
        text_resultado.innerHTML = parseFloat(operando_1.value) * parseFloat(operando_2.value)
    })
    button_divide.addEventListener("click", function(){
        text_resultado.innerHTML = parseFloat(operando_1.value) / parseFloat(operando_2.value)
    })
})
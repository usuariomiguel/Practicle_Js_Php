window.addEventListener("load",function(){
    let button_enviar = this.document.getElementById('button_enviar')
    let numero = this.document.getElementById('numero')
    let div_resultado = this.document.getElementById('resultado')
    
    button_enviar.addEventListener("click", function(){
        div_resultado.innerHTML = ""
        for(z=0;z<numero.value;z++) {
            for(var i=0;i<numero.value;i++){
                let aleatorio = Math.floor(Math.random() * 6);
                if (aleatorio == 0) {
                    let button = document.createElement("button")
                    button.innerHTML = "X"
                    button.className = "rojo"
                    div_resultado.appendChild(button)
                } else {
                    let button = document.createElement("button")
                    button.innerHTML = "O"
                    button.className = "verde"
                    div_resultado.appendChild(button)
                } 
            }
            var br = document.createElement("br");
            div_resultado.appendChild(br)
        };
    }) 
})

// NOTAS:
// button.innerHTML --> X / O
// button.className --> rojo / verde
// RANDOM --> Math.floor(Math.random() * 2);
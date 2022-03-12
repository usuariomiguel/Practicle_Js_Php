window.addEventListener("load",function() {
    alimento = document.getElementById("alimento")
    cantidad = document.getElementById("cantidad")
    salida = document.getElementById("salida")
    añadir = document.getElementById("añadir")

    añadir.addEventListener("click",function() {
        let li = document.createElement("li");/*creamos nodo <li>*/
        let lista = `${alimento.value}:${cantidad.value}`;
        li.innerHTML = lista
        salida.prepend(li)
    })           
})
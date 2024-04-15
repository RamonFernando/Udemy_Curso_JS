function automatizarSuma() {
    let sumaTotal = 0;
    let contenido = document.getElementById("contenido");
    for(let suma of contenido.children){
        sumaTotal += Number(suma.children[1].value);
    }
}
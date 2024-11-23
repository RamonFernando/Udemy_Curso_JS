let elementos = ["Ramon Fernando", "Maite Danese", "Nichi", "Peach"];

function leerTexto(){
    let lista = document.getElementById("resultado");
    lista.innerHTML = "";
    
    for (const elemento of elementos) {
        let item = document.createElement("li");
        item.innerText = elemento;
        lista.appendChild(item);
    }
    
}

function agregarElemento() {
    let entrada = document.getElementById("elementoTexto");
    let nuevoElemento = entrada.value.trim();
    if(nuevoElemento){
        elementos.push(nuevoElemento);
        entrada.value = "";
        leerTexto();
    }else{
        alert("Por favor, escribe un elemento.");
    }

}

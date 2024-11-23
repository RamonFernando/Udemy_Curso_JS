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

function actualizarElemento() {
    let valorActualInput = document.getElementById("elementoTexto").value.trim();
    if (valorActualInput !== "") {
        // Buscar si el elemento existe en la lista
        const index = elementos.indexOf(valorActualInput);
        if (index !== -1) {
            let nuevoValor = prompt("Introduce el nuevo valor del elemento:");
            if (nuevoValor != null && nuevoValor.trim() !== "") {
                // Actualizar el valor en la lista
                elementos[index] = nuevoValor.trim();
                alert(`Elemento actualizado de "${valorActualInput}" a "${nuevoValor}".`);
                document.getElementById("elementoTexto").value = ""; // Limpiar el input
                leerTexto(); // Actualizar la lista en la interfaz
            } else {
                alert("El nuevo valor no puede estar vacío.");
            }
        } else {
            alert(`El elemento "${valorActualInput}" no existe en la lista.`);
        }
    } else {
        alert("Por favor, introduce un valor en el campo de texto.");
    }
}
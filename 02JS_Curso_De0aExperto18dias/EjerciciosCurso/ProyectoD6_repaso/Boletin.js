let calificaciones = [7, 4, 5.7, 9, 8.5, 3];

function listarNotas() {
    let listaNotas = document.getElementById("listaNotas");
    listaNotas.innerHTML = "";
    for (const nota of calificaciones) {
        let item = document.createElement("li");
        item.textContent = "- " + nota;
        listaNotas.appendChild(item);
    }
}

function calcularPromedio() {
    let promedio = 0;
    for (let nota of calificaciones) {
        promedio += nota;
    }
    promedio /= calificaciones.length;
    promedio = promedio.toFixed(2); // Redondea a 2 decimales
    document.getElementById("promedio").textContent = promedio; // Muestra el promedio en el id promedio
}

function notaMasAlta() {
    let notaMax = 0;
    for (let nota of calificaciones) {
        if(nota > notaMax){
            notaMax = nota;
        }
    }
    nota = notaMax.toFixed(1);
    document.getElementById("nota").textContent = notaMax;
}

function haySuspenso() {
    let contNotasSuspensas = 0;
    let nota = document.getElementById("aplazo");
    for (const notaSuspensa of calificaciones) {
        if(notaSuspensa < 5){
            contNotasSuspensas++;
            nota.textContent = "Tu nota suspensa mas baja es " + notaSuspensa + " y tienes " + contNotasSuspensas + " nota/s suspensa/s.";
        }else{
            nota.textContent = "No tienes notas suspensas";
        }
    }
    
    
    
}
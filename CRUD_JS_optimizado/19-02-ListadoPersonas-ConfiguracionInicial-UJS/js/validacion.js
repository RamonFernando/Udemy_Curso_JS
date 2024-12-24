// ** ----------------------------- CRUD -------------------------------------- ** //
const personas = [
    new Persona('Juan', 'Perez'),
    new Persona('Karla', 'Lara'),
    new Persona('Miguel', 'Cervantes'),
    new Persona('Maite', 'Danese'),
    new Persona('Ramón', 'Pérez')
];
function mostrarPersonas() {
    let mensaje = personas.map(persona => `<li>${persona.nombre} ${persona.apellido} </li>`).join(' ');
    document.getElementById('personas').innerHTML = mensaje;    // Insertamos la lista en el DOM
}
function agregarPersona() {
    const {nombre, apellido} = document.forms['forma']; // (Desestructuración) accedemos al formulario con forms
    
    if (personas.find(persona => persona.nombre == nombre.value && persona.apellido == apellido.value))
        return alert("Error! Persona ya existente");
    
    (nombre.value == "" || apellido.value == "")? alert("Error!"):
        personas.push(new Persona(nombre.value, apellido.value));
    
    mostrarPersonas();
}
function actualizarPersona() {
    let num = parseInt(prompt("Ingresa el número que deseas actualizar."));
    if (num < 1 || num > personas.length || isNaN(num)) { 
        alert("Error! Número no valido o nulo.");
    }else{
        let nuevaPersona = (prompt("Introduce la informacion que deseas actualizar"));
        let [nombre, apellido] = nuevaPersona.trim().split(" "); // (Desestructuración)
        (nombre == undefined || apellido == undefined) ? alert("Error! ") : personas.splice(num-1, 1, new Persona(nombre, apellido));
    }
    mostrarPersonas();
}
function borrarPersona() {
    let num = parseInt(prompt("Ingresa el id que deseas eliminar."));
    (num < 1 || num > personas.length || isNaN(num)) ? alert("Error! ") : personas.splice((num-1), 1);
    
    mostrarPersonas();
}

// Explicación de los métodos
// Map: recorre y crea un nuevo array de listado de personas li
// Find: comprueba si la persona ya existe en el array y la devuelve (1ra coincidencia), true si la encuentra o undefined si no
// Split: divide la informacion en nombre y apellido
// Splice: elimina una persona del array
// Trim: elimina espacios adicionales
// Deestructuracion: permite extraer el nombre y apellido del array personas
// isNaN: método que comprueba si el id es un numero
// forms: propiedad que permite acceder al formulario, en este caso con el id 'forma'
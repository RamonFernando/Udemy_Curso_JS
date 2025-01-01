// CRUD Simple
const personas = [
    new Persona("Ramón", "Pérez"),
    new Persona('Maite', 'Danese'),
    new Persona('Ramón', 'Álvarez'),
    new Persona('Genesis', 'Rondom'),
    new Persona('Claudia', 'Mercadal'),
    new Persona('Jorge', 'Garcia')
    
];
// Metodos de validacion Mostrar, Agregar, Actualizar, Eliminar
function mostrarPersonas(){
    let persona = personas.map(persona => `<li>${persona.nombre} ${persona.apellido}</li>`).join(" ");
    document.getElementById('personas').innerHTML = persona;
}
function agregarPersona(){
    const {nombre, apellido} = document.getElementById('forma');
    if(personas.find(persona => persona.nombre == nombre.value && persona.apellido == apellido.value)){
        alert("La persona ya existe!")
        return;
    }
    (nombre.value.trim() && apellido.value.trim()) ? personas.push(new Persona(nombre.value, apellido.value)) : alert("Campos vacios!");
    mostrarPersonas();
}
function actualizarPersona(){
    let num = parseInt(prompt("Número de la personas a actualizar"));
    if(isNaN(num) || num == ""){
        alert("Caracter no valido o nulo");
        return;
    }
    let nombreNuevo = prompt("Ingrese el nombre");
    let apellidoNuevo = prompt("Ingrese el apellido");
    if(personas.find(persona => persona.nombre == nombreNuevo && persona.apellido == apellidoNuevo)){
        alert("La persona ya existe!");
        return;
    }
    (!nombreNuevo == "" || !apellidoNuevo == "") ? personas.splice(num -1, 1, new Persona(nombreNuevo, apellidoNuevo)) : alert("Campos vacios");
    mostrarPersonas();
}
function borrarPersona(){
    console.log("Comprobando metodo Eliminar");
    let num = parseInt(prompt("Ingrese el número de la persona a borrar"));
    (isNaN(num) || num == "" || num < 0 || num> personas.length) ? alert("Número no valido o nulo") : personas.splice(num - 1, 1);
    mostrarPersonas();
}

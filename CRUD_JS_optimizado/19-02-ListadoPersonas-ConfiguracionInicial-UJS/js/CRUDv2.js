const personas = [
    new Persona ("Ramón", "Pérez"),
    new Persona ('Maite', 'Danese'),
    new Persona ('Ramón', 'Álvarez'),
    new Persona ('Genesis', 'Rondom'),
    new Persona ('Claudia', 'Mercadal'),
];
const regex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/; // /^[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ\s]+$/

function mostrarPersonas(){
    let lista = personas.map(persona => `<li>${persona.nombre} ${persona.apellido}</li>`).join(" ");
    document.getElementById('personas').innerHTML = lista;
    if(personas.length == 0) document.getElementById('personas').innerHTML = '<h3>No hay personas en la lista</h3>';
}
function agregarPersona(){
    const {nombre, apellido} = document.forms['forma'];
    if(personas.find(p => p.nombre.trim() === nombre.value.trim() && p.apellido.trim() === apellido.value.trim()))
        {alert("La persona ya existe!"); return;}

    if(!validarMaximoNombresApellidos(nombre.value, apellido.value))
        {alert("Debes ingresar máximo 2 nombres y 2 apellidos"); return;}

    if((nombre.value.length + apellido.value.length) > 10)
        {alert("El nombre y apellidos deben tener máximo 50 caracteres");return;}

    if (nombre.value && apellido.value){
        if(!regex.test(nombre.value) || !regex.test(apellido.value)) {alert("Caracteres no permitidos"); return;}
        personas.push(new Persona(nombre.value, apellido.value));
        alert("Persona agregada con exito");
    } else {
        alert("Completa todos los campos.");
    }
    mostrarPersonas(nombre, apellido);
}
function actualizarPersona(){
    let numero = parseInt(prompt("Ingrese el número de la persona que desea actualizar"));
    if(numero == "" || isNaN(numero) || numero < 1 || numero > personas.length)
        { alert("Error, numero no valido o nulo"); return;}
    
    let nuevoNombre = prompt("Ingrese el nuevo nombre");
    let nuevoApellido = prompt("Ingrese el nuevo apellido");
    if(personas.find(p => p.nombre === nuevoNombre.trim() && p.apellido === nuevoApellido.trim()))
        {alert("La persona ya existe!"); return;}

    if(!validarMaximoNombresApellidos(nuevoNombre, nuevoApellido))
        {alert("Debes ingresar máximo 4 nombres y 2 apellidos"); return;}

    if(nombres.value.concat(apellidos.value).length > 50)
        {alert("El nombre y apellidos deben tener máximo 50 caracteres");return;}
    
    if(nuevoNombre.trim() && nuevoApellido.trim()) {
        if(!regex.test(nuevoNombre) || !regex.test(nuevoApellido)) {alert("Caracteres no permitidos"); return;}
        alert(`Persona ${numero} ${personas[numero -1].nombre} ${personas[numero -1].apellido} sera actualizada a:`);
        personas.splice(numero -1, 1, new Persona(nuevoNombre.trim(), nuevoApellido.trim()));
        alert(`Persona ${nuevoNombre} ${nuevoApellido}`);
    }else{
        alert("Error! Persona no actualizada, campos vacios");
    }
    mostrarPersonas();
}
function borrarPersona(){
    let num = parseInt(prompt("Ingrese el número de la persona que desea eliminar"));
    if(num == "" || isNaN(num) || num < 1 || num > personas.length)
        {alert("Error, numero no valido o nulo"); return;}
    alert(`Se ha eliminado a la persona ${num} ${personas[num-1].nombre} ${personas[num-1].apellido} con exito!`);
    personas.splice(num -1, 1);
    mostrarPersonas();
}
function validarMaximoNombresApellidos(nombre, apellido) {
    const nombreParts = nombre.trim().split(/\s+/); // Separar nombres por espacios (es igual a split(" "))
    const apellidoParts = apellido.trim().split(/\s+/); // Separar apellidos por espacios

    if (nombreParts.length > 4 || apellidoParts.length > 2)
        return false; // No cumple la validación}
    return true; // Cumple la validación
}


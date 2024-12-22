const personas = [
    new Persona('Juan','Perez'),
    new Persona('Karla', 'Lara')
];

function mostrarPersonas(){
    console.log("Mostrar personas...");
    // let texto = "";
    /*for(let persona of personas){
        console.log(persona);
        texto += `<li>${persona.nombre} ${persona.apellido}</li>`;
    }*/
    // Hacer el listado de personas con reduce
    // let texto = personas.reduce((listaPersonas, persona) => listaPersonas += `<li>${persona.nombre} ${persona.apellido}</li>`, "");
    
    // Hacer el listado con Map
    let texto = personas.map(persona => `<li>${persona.nombre} ${persona.apellido}</li>`).join(' ');
    document.getElementById('personas').innerHTML = texto;

}
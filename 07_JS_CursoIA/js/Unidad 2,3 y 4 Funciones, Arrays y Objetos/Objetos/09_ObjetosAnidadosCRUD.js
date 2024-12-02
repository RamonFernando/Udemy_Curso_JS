let estudiante = {
    nombre: "Carlos",
    cursos: [
        { nombre: "Matemáticas", calificacion: 90 },
        { nombre: "Historia", calificacion: 85 }
    ]
};

// Acceder a propiedades anidadas
console.log(estudiante.cursos[0].nombre); // "Matemáticas"

// Modificar propiedades anidadas
estudiante.cursos[1].calificacion = 92;
console.log(estudiante.cursos[1].calificacion); // 92

// Agregar propiedades anidadas
estudiante.cursos.push({ nombre: "Inglés", calificacion: 88 });
console.log(estudiante.cursos[2].nombre); // "Inglés"

// Recorrer propiedades anidadas
for (let curso of estudiante.cursos) {
    console.log(curso.nombre);
}

// Eliminar propiedades anidadas
delete estudiante.cursos[2];
console.log(estudiante.cursos[2]); // undefined

// Mostrar todo el objeto
console.log(estudiante); // { nombre: "Carlos", cursos: [ { nombre: "Matemáticas", calificacion: 90 }, { nombre: "Historia", calificacion: 85 } ] }

// Usa la notación de punto (objeto.propiedad) o corchetes (objeto["propiedad"]) para acceder o modificar propiedades anidadas.
// Puedes agregar nuevas propiedades anidadas dinámicamente.
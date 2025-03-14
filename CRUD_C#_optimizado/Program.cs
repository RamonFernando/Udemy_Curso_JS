﻿using System;
using System.Collections.Generic;

namespace SimpleCRUD {
    class Program {
        // Clase para representar un elemento
        public class Persona {
            public int Id { get; set; }
            public string Nombre { get; set; }
        }

        static void Main(string[] args){
            List<Persona> personas = new List<Persona>();      // Lista para almacenar las personas
            int contadorId = 1;

            while (true){
                Console.WriteLine("\n=== CRUD Básico en C# ===");
                Console.WriteLine("1. Crear");
                Console.WriteLine("2. Leer");
                Console.WriteLine("3. Actualizar");
                Console.WriteLine("4. Eliminar");
                Console.WriteLine("5. Salir");
                Console.Write("Selecciona una opción: ");
                string opcion = Console.ReadLine();

                switch (opcion){
                    case "1":
                        // Crear
                        Console.Write("Ingresa el nombre: ");
                        string nombre = Console.ReadLine();
                        if (nombre == "" || string.IsNullOrWhiteSpace(nombre)) {Console.WriteLine("El nombre no puede estar vacio."); break;}
                        if (personas.Exists(p => p.Nombre == nombre)) {Console.WriteLine("Ya existe una persona con ese nombre."); break;}
                        personas.Add(new Persona { Id = contadorId++, Nombre = nombre }); // Agrega un nuevo elemento y incrementa el contador
                        Console.WriteLine("Persona creada exitosamente.");
                        break;

                    case "2":
                        // Leer
                        Console.WriteLine("\nLista de Personas:");
                        foreach (var persona in personas) {
                            Console.WriteLine($"ID: {persona.Id}, Nombre: {persona.Nombre}");
                        }
                        if (personas.Count == 0) {Console.WriteLine("No hay personas en la lista.");}
                        break;

                    case "3":
                        // Actualizar
                        Console.Write("Ingresa el ID de la persona a actualizar: ");

                        if (int.TryParse(Console.ReadLine(), out int idActualizar)) {   // Convierte la entrada a un entero y la almacena en idActualizar
                            var persona = personas.Find(p => p.Id == idActualizar);     // Busca la persona por ID con Find: busca el primer elemento que cumpla la condicion o devuelve null
                            
                            if (persona != null) {                                      // Si la persona fue encontrada o no es null
                                Console.Write("Ingresa el nuevo nombre: ");
                                string nuevoNombre  = Console.ReadLine();
                                if (personas.Exists(p => p.Nombre == nuevoNombre)) { Console.WriteLine("Ya existe una persona con ese nombre."); break; }
                                persona.Nombre = nuevoNombre;                           // Actualiza el nombre. Metodo: personas.Add(new Persona { Id = contadorId++, Nombre = nombre });
                                Console.WriteLine("Persona actualizada exitosamente.");
                            } else {
                                Console.WriteLine("Persona no encontrada.");
                            }
                        } else {
                            Console.WriteLine("ID inválido.");
                        }
                        break;

                    case "4":
                        // Eliminar
                        Console.Write("Ingresa el ID de la persona a eliminar: ");
                        string id = Console.ReadLine();
                        
                        if (int.TryParse(id, out int idEliminar)) {                     // Convierte la entrada a un entero y la almacena en idEliminar
                            var persona = personas.Find(p => p.Id == idEliminar);       // Busca la persona por ID con Find
                            
                            if (persona != null) {
                                personas.Remove(persona);                               // Elimina la persona
                                Console.WriteLine("Persona eliminada exitosamente.");
                            } else {
                                Console.WriteLine("Persona no encontrada.");
                            }
                        } else {
                            Console.WriteLine("ID inválido.");
                        }
                        break;

                    case "5":
                        // Salir
                        Console.WriteLine("Saliendo...");
                        return;

                    default:
                        Console.WriteLine("Opción no válida. Intenta de nuevo.");
                        break;
                }
            }
        }
    }
}


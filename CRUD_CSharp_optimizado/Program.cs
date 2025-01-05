using System;
using System.Collections.Generic;

namespace SimpleCRUD {
    class Program {
        // Clase para representar un elemento
        public class Persona {
            public int Id { get; set; }
            public string Nombre { get; set; }
        }

        static void Main(string[] args){
            List<Persona> personas = new List<Persona>();
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
                        personas.Add(new Persona { Id = contadorId++, Nombre = nombre });
                        Console.WriteLine("Persona creada exitosamente.");
                        break;

                    case "2":
                        // Leer
                        Console.WriteLine("\nLista de Personas:");
                        foreach (var persona in personas) {
                            Console.WriteLine($"ID: {persona.Id}, Nombre: {persona.Nombre}");
                        }
                        break;

                    case "3":
                        // Actualizar
                        Console.Write("Ingresa el ID de la persona a actualizar: ");
                        if (int.TryParse(Console.ReadLine(), out int idActualizar)) {
                            var persona = personas.Find(p => p.Id == idActualizar);
                            
                            if (persona != null) {
                                Console.Write("Ingresa el nuevo nombre: ");
                                persona.Nombre = Console.ReadLine();
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
                        
                        if (int.TryParse(Console.ReadLine(), out int idEliminar)) {
                            var persona = personas.Find(p => p.Id == idEliminar);
                            
                            if (persona != null) {
                                personas.Remove(persona);
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


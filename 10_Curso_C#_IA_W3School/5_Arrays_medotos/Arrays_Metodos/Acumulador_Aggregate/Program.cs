﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Acumulador_Aggregate
{
    internal class Program
    {
        static void Main(string[] args)
        {
            // Metodo Aggregate funciona como el metodo reduce en JS
            // Acumula el valor de los elementos de un array en un unico valor sumando los elementos y devolviendo el resultado
            
            // Ejemplo
            // Encuentra el elemento mínimo en un array
            var numbers = new[] { 10, 20, 3, 5, 8 };
            foreach (var num in numbers) { Console.Write(num +  " "); };
            var min = numbers.Aggregate((posMin, i) => (posMin < i) ? posMin : i); // posMin es el acumulador y i es el elemento iterativo

            Console.WriteLine("\nPosición valor mínimo: " + (min-1) + " y el valor es: " + numbers[min-1]); // Salida: Posición valor mínimo: 2 y el valor es: 3");
            Console.WriteLine();
            
            // Ejemplo 1
            // Contar palabras y construir un resumen
            var phrases = new[] { "Hola", "mundo", "de C#", "LINQ es genial" };
            foreach (var palabra in phrases) { Console.Write(palabra + " "); };
            
            var summary = phrases.Aggregate((acumulador, index) => $"{acumulador} ({acumulador.Length} letras), {index}");
            Console.WriteLine("\n" + summary);

            // Ejemplo 2
            // Acumula el valor de los elementos de un array numeros
            int[] numeros = { 1, 2, 3, 4, 5 };
            int suma = numeros.Aggregate((acumulador, elemento) => acumulador + elemento);
            Console.WriteLine($"\nLa suma de los elementos es: {suma}");

            // Ejemplo 3
            // Acumula el valor de los elementos de un array de strings
            var words = new[] { "Hola", "mundo", "de", "C#" };
            var result = words.Aggregate((acumulador, i) => acumulador + " " + i);

            Console.WriteLine(result); // Salida: "Hola mundo de C#"
            Console.WriteLine();

            // Ejemplo 4
            // Acumula el valor de los nombres de un array de strings
            var names = new[] { "alice", "bob", "charlie" };
            var result1 = names.Aggregate("Nombres:",
            (current, i) => current + " " + i.ToUpper()); // Convertir a mayúsculas

            Console.WriteLine(result1); // Salida: "Nombres: ALICE BOB CHARLIE"

            Console.ReadKey();
        }
    }
}

﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace EjerciosBasicos
{
    internal class Program
    {
        static void Main(string[] args)
        {
            // Ejercicios

            // 1. Imprimir Hola y Nombre
            // Escriba un programa C# Sharp para imprimir Hola y su nombre en una línea separada.
            string name = "Ramon";
            Console.WriteLine("Hola " + name);

            // 2. Suma de Dos Números
            // Escriba un programa C# Sharp para imprimir la suma de dos números.
            int num1 = 10; int num2 = 5;
            Console.WriteLine("La suma es: " + (num1 + num2)); // 15

            // 3. Divide Dos Números
            // Escriba un programa C# Sharp para imprimir el resultado de dividir dos números.
            int num3 = 10; int num4 = 5;
            if (num3 == 0 || num4 == 0) 
                Console.WriteLine("No se puede dividir por 0");
            else 
                Console.WriteLine("El resultado de la division es: " + num3 / num4); // 2

            // 4. Resultados de Operaciones Especificados
            // Escriba un programa C# Sharp para imprimir los resultados de las operaciones especificadas. sum, rest, mult, div.
            Console.WriteLine("La suma es: " + (-1+4*6));  // 23
            Console.WriteLine("La resta es: " + ((35+5) % 7)); // 5
            Console.WriteLine("La multiplicacion es: " + (14 + -4 * 6 / 11)); // 12
            Console.WriteLine("La division es: " + (2 + 15 / 6 * 1 - 7 % 2)); // 3

            // 5. Intercambiar Dos Números
            // Escribe un programa C# Sharp para intercambiar dos números.
            int num5 = 10; int num6 = 5;
            int aux = num5;
            num5 = num6;
            num6 = aux;
            Console.WriteLine("El numero 1 es: " + num5); // 5
            Console.WriteLine("El numero 2 es: " + num6); // 10

            // Ejercicios 5.1
            // Escribe un programa C# Sharp para intercambiar dos números sin usar tercer variable.
            int num7 = 10; int num8 = 5;
            num7 = num7 + num8;
            num8 = num7 - num8;
            num7 = num7 - num8;
            Console.WriteLine("El numero 1 es: " + num7); // 5
            Console.WriteLine("El numero 2 es: " + num8); // 10

            // 6. Multiplica Tres Números
            // Escriba un programa C# Sharp para imprimir la salida de la multiplicación de tres números ingresados por el usuario.
            int num9 = 2; int num10 = 3; int num11 = 6;
            Console.WriteLine($"La multiplicacion es: {num9} * {num10} * {num11} = " + (num9 * num10 * num11)); // 36

            // 7. Operaciones Aritméticas
            // Escriba un programa C# Sharp para imprimir la salida de la suma de tres números ingresados por el usuario.
            Console.WriteLine("Ingrese el primer numero: ");
            int num12 = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Ingrese el segundo numero: ");
            int num13 = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Ingrese el tercer numero: ");
            int num14 = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine($"La suma es: {num12} + {num13} + {num14} = " + (num12 + num13 + num14));
            Console.WriteLine($"La resta es: {num12} - {num13} - {num14} = " + (num12 - num13 - num14));
            Console.WriteLine($"La multiplicacion es: {num12} * {num13} * {num14} = " + (num12 * num13 * num14));
            Console.WriteLine((num12 == 0 || num13 == 0 || num14 == 0) ? "No se puede dividir por 0" : ($"La division es: {num12} / {num13} / {num14} = " + (num12 / num13 / num14)));

            // V2
            int num15 = 25; int num16 = 4;
            Console.WriteLine($"Suma: {num15} + {num16} = " + (num15 + num16));
            Console.WriteLine($"Resta: {num15} - {num16} = " + (num15 - num16));
            Console.WriteLine($"Multiplicacion: {num15} * {num16} = " + (num15 * num16));
            Console.WriteLine((num15 == 0 || num16 == 0) ? "No se puede dividir por 0" : ($"Division: {num15} / {num16} = " + (num15 / num16)));

            // 8. Tabla de Multiplicación
            // Escriba un programa C# Sharp que imprima la tabla de multiplicación de un número como entrada.
            Console.WriteLine("Ingrese un numero: ");
            int num17 = Convert.ToInt32(Console.ReadLine());
            for (int i = 1; i <= 10; i++) 
                Console.WriteLine($"{num17} * {i} = " + (num17 * i));

            // 9. Promedio de Cuatro Números
            // Escriba un programa C# Sharp que tome cuatro números como entrada para calcular e imprimir el promedio.
            int num18 = 10; int num19 = 15; int num20 = 20; int num21 = 30; int promedio = (num18 + num19 + num20 + num21) / 4;
            Console.WriteLine($"El promedio de los cuatro numeros es: {num18} + {num19} + {num20} + {num21} = {promedio}" );

            // 10. Fórmula Especificada con Tres Números
            // Escribe un programa C# Sharp que tome tres números (x,y,z) como entrada y salidas (x+y).z y x.y + y.z.
            Console.WriteLine("Ingrese el primer numero: ");
            int x = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Ingrese el segundo numero: ");
            int y = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Ingrese el tercer numero: ");
            int z = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine($"Los numeros {x}, {y}, {z} = {x} + {y} * {z} es " + (x + y)*z + $" y {x} * {y} + {y} * {z} = " + (x * y + y * z));

            // 11. Imprimir Mensaje de Edad
            // Escriba un programa C# Sharp que tenga una edad (por ejemplo 20) como entrada e imprima algo como "Parece mayor de 20 años".
            Console.WriteLine("Ingrese su edad: ");
            int edad = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine(edad >= 18 ? $"Parece mayor de {edad}" : $"Parece menor de {edad}");

            // 12. Repita el número en Filas
            // Escriba un programa C# que tome un número como entrada y lo muestre cuatro veces seguidas (separado por espacios en blanco), y
            // luego cuatro veces en la siguiente fila, sin separación. Deberías hacerlo dos veces: Usa la consola. Escribe y usa {0}.

            Console.WriteLine("Ingrese un numero: ");
            int num22 = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine($"{num22} {num22} {num22} {num22}");
            Console.WriteLine($"{num22}{num22}{num22}{num22}");
            













            Console.ReadLine();
        }
    }
}

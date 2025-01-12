﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Array_LastIndexOf
{
    internal class Program
    {
        static void Main(string[] args)
        {
            /*
            El método LastIndexOf() se utiliza para buscar la última aparición de un elemento específico dentro de una matriz. 
            A diferencia de IndexOf(), que busca desde el principio, LastIndexOf() comienza la búsqueda desde el final de la matriz. 
            Si el elemento no se encuentra, devuelve -1.
            Ejemplo:
            
            int indice = Array.LastIndexOf(array, valorBuscado);
            
            Parametros:
            array: La matriz donde se realizará la búsqueda.
            valorBuscado: El elemento que se desea encontrar.
            indice: Un entero que almacenará el índice de la última aparición del elemento encontrado, o -1 si no se encuentra.
             */

            // Ejemplo 1
            Console.Write("\nArray: ");
            string[] nombres = { "Ana", "Juan", "Mario", "Ana" };
            
            foreach (string nombre in nombres){ Console.Write(nombre + " "); };
            int ultimoIndice = Array.LastIndexOf(nombres, "Ana");

            Console.WriteLine("\nÚltimo índice de 'Ana': " + ultimoIndice);
            // Salida: Último índice de 'Ana': 3

            // Ejemplo 2
            Console.Write("\nArray: ");
            int[] numeros = { 2, 5, 8, 1, 8, 9 };
            
            foreach (int num in numeros) { Console.Write(num + " "); }
            int numeroBuscado = 8;

            // Buscamos el número 8 en la matriz
            int indice = Array.LastIndexOf(numeros, numeroBuscado);

            if (indice != -1){
                Console.WriteLine("\nEl último 8 se encuentra en el índice {0}", indice);
            }else{
                Console.WriteLine("El número {0} no se encontró en la matriz.", numeroBuscado);
            }

            // Ejemplo 3
            string[] nombres1 = { "Ana", "Carlos", "Sofía", "David", "Carlos" };
            string nombreBuscado = "Carlos";

            int indice1 = Array.LastIndexOf(nombres1, nombreBuscado);

            if (indice1 != -1){
                Console.WriteLine("La última aparición de {0} está en el índice {1}", nombreBuscado, indice1);
            }else{
                Console.WriteLine("El nombre {0} no se encontró en la matriz.", nombreBuscado);
            }

            Console.ReadKey();
        }
    }
}

using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _09_Curso_C_
{
    internal class Program
    {
        static void Main(string[] args) {
            // Variables y Operadores
            Console.WriteLine("Variables y Operadores");
            int a = 10;
            int b = 5;
            int c = a + b;
            Console.WriteLine("El resultado es: " + c);

            // Tipos de Datos
            Console.WriteLine("Tipos de Datos");
            short corto = 1;
            int entero = 10;
            decimal pi = 3.14m;
            double doble = 3.14;
            float flotante = 3.14f;
            char caracter = 'A';
            string texto = "Hola Mundo";
            bool verdadero = true;
            bool falso = false;

            Console.WriteLine("Corto: " + corto);
            Console.WriteLine("Entero: " + entero);
            Console.WriteLine("Decimal: " + pi);
            Console.WriteLine("Double: " + doble);
            Console.WriteLine("Float: " + flotante);
            Console.WriteLine("Caracter: " + caracter);
            Console.WriteLine("Texto: " + texto);
            Console.WriteLine("Verdadero: " + verdadero);
            Console.WriteLine("Falso: " + falso);

            // Condicionales
            Console.WriteLine("Condicionales");
            int edad = 18;
            if (edad >= 18) {
                Console.WriteLine("Eres mayor de edad");
            }else{
                Console.WriteLine("Eres menor de edad");
            }
            // Switch con dias de la semana
            Console.WriteLine("Switch con dias de la semana");
            int dia = 1;
            switch (dia) {
                case 1:
                    Console.WriteLine("Lunes");
                    break;
                case 2:
                    Console.WriteLine("Martes");
                    break;
                case 3:
                    Console.WriteLine("Miercoles");
                    break;
                case 4:
                    Console.WriteLine("Jueves");
                    break;
                case 5:
                    Console.WriteLine("Viernes");
                    break;
                case 6:
                    Console.WriteLine("Sabado");
                    break;
                case 7:
                    Console.WriteLine("Domingo");
                    break;
                default:
                    Console.WriteLine("Dia no valido");
                    break;
            }

            // Bucles
            Console.WriteLine("Bucles");
            Console.WriteLine("For");
            for (int indice = 0; indice < 10; indice++) {
                Console.Write(indice + " ");
            }
            int index = 0;
            Console.WriteLine("\nWhile");
            while (index < 10) {
                Console.Write(index + " ");
                index++;
            }
            Console.WriteLine("\nDo While");
            do {
                Console.Write("index: " + index + " ");
                index++;
            } while (index < 10);

            Console.WriteLine();
            // Funciones
            Console.WriteLine("Funciones");
            int sumar(int numero1, int numero2) {
                return numero1 + numero2;
            }
            Console.WriteLine("La suma es: " +  sumar(1, 2));

            int restar(int numero1, int numero2) {
                int resultado = numero1 - numero2;
                Console.WriteLine("La resta es: " + resultado);
                return resultado;
            }
            restar(1, 2);

            
            
            

            Console.ReadKey();

            

        }
    }
}

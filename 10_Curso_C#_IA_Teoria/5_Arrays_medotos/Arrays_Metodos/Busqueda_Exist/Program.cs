using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Busqueda_Exist
{
    internal class Program
    {
        static void Main(string[] args)
        {
            // Array.Exists(array, predicate): Devuelve true si algún elemento del array cumple la condición.
            bool existeParMayor5 = Array.Exists(numeros, n => n > 5);
            Console.WriteLine("¿Existe un número mayor a 5? " + existeParMayor5);
            // Salida: ¿Existe un número mayor a 5? True
        }
    }
}

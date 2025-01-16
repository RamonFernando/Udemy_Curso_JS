using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace EjerciciosBasicos_21_30
{
    internal class Program
    {
        static void Main(string[] args)
        {
            // 21. Verifique 20 o Sum Equals 20
            // Escriba un programa C# para verificar la suma de los dos enteros dados.
            // Devuelva verdadero si uno de los enteros es 20 o si su suma es 20.
            int num1 = 8;
            int num2 = 12;

            if (esNumero(10, 10)) 
                Console.WriteLine("Hay un resultado o numero igual a 20? ({0} + {1}), {2}", num1, num2, esNumero(num1, num2));
            else 
                Console.WriteLine("Hay un resultado o numero igual a 20? ({0} + {1}), {2}", num1, num2, esNumero(num1, num2));
    
            bool esNumero(int parNum, int parNum2) {
                if (parNum + parNum2 == 20 || parNum == 20 || parNum2 == 20) {
                    return true;
                }
                return false;  
            }

            Console.ReadKey();

        }
    }
}

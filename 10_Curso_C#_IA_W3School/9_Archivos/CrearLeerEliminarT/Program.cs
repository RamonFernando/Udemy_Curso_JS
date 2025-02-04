﻿/*
    En C#, se pueden manejar archivos utilizando el espacio de nombres System.IO. Este incluye clases 
como File, FileInfo, StreamWriter, StreamReader, entre otras, que permiten trabajar con la creación, 
lectura, escritura y eliminación de archivos.
    Clases útiles de System.IO:
File: Métodos estáticos para operaciones rápidas como WriteAllText, ReadAllText, Exists, Delete, etc.
FileInfo: Métodos de instancia para manipulación avanzada de archivos.
StreamWriter y StreamReader: Para escribir y leer archivos de texto de manera eficiente.
Directory y DirectoryInfo: Para trabajar con directorios.
Path: Para manipular rutas de archivos y directorios.
 */
using System;
using System.IO;

class Program
{
    static void Main()
    {
        string rutaArchivo = "archivoEjemplo.txt";

        // Crear y escribir en el archivo
        using (StreamWriter escritor = new StreamWriter(rutaArchivo)) // Abre el archivo para escritura
        {
            escritor.WriteLine("Hola, este es un archivo de ejemplo.");
            escritor.WriteLine("¡Escrito desde C#!");
        }
        Console.WriteLine("Archivo creado y contenido escrito.");

        // Leer el archivo
        using (StreamReader lector = new StreamReader(rutaArchivo)) // Abre el archivo para lectura
        {
            string contenido = lector.ReadToEnd(); // Lee todo el contenido
            Console.WriteLine("Contenido del archivo:");
            Console.WriteLine(contenido);
        }

        // Eliminar el archivo
        if (File.Exists(rutaArchivo)) // Verifica si el archivo existe
        {
            File.Delete(rutaArchivo); // Elimina el archivo
            Console.WriteLine("Archivo eliminado.");
        }
        Console.ReadKey();
        /*
         Archivo creado y contenido escrito.
        Contenido del archivo:
        Hola, este es un archivo de ejemplo.
        ¡Escrito desde C#!
        Archivo eliminado.
         */
    }
}

package elseIf;
import java.util.*;

/**
 * @author Ramon
 *
 */
public class Ejercicio4 {

	/**
	 * PDF-Ejercicio de Condicionales 11/22
	 * Descripcion:
	 * Condicionales Ejercicio con if/else.
	 */
	public static void main(String[] args) {
		// Crea un programa que pida al usuario una contraseña. Si escribe
		// "1234" el programa responderá "Acceso concedido.".
		Scanner teclado = new Scanner(System.in);

		System.out.println("Introduce la contraseña: ");
		int pass = teclado.nextInt();
		if (pass == 1234) {
			System.out.println("Acceso Consedido");
		} else {
			System.out.println("Acceso denegado");
		}

		teclado.close();
	}

}
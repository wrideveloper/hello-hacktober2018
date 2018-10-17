import java.util.Scanner;
public class BelajarInputString{
	public static void main(String args[])
	{
		String nama, tempatLahir;
		int umur;
		Scanner sc = new Scanner(System.in);
		System.out.print("Nama: ");
		nama = sc.nextLine();
		System.out.print("Tempat lahir: ");
		tempatLahir = sc.nextLine();
		System.out.print("Umur: ");
		umur = sc.nextInt();

		System.out.println("\n\n Hallo nama saya "+nama+" umur saya "+umur+", dan saya lahir di kota "+tempatLahir);
	}
}
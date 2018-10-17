import java.util.Scanner;
public class BelajarHitung{
	public static void main(String args[])
	{
		Scanner sc = new Scanner(System.in);
		System.out.print("Masukkan angka1: ");
		int angka1 = sc.nextInt();
		System.out.print("Masukkan angka2: ");
		int angka2 = sc.nextInt();
		int hasil = angka1+angka2;
		System.out.println("\n\nPenambahan angka "+angka1+" dan angka "+angka2+" adalah "+hasil);
	}
}
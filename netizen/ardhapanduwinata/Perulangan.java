import java.util.Scanner;
public class Perulangan
{
	public static void main(String args[])
	{
		Scanner sc = new Scanner(System.in);
		System.out.print("Mau berapa kali perulangan? ");
		int ulang = sc.nextInt();
		
		System.out.print("\n\n");
		for(int i=1; i<=ulang; i++)
		{
			System.out.println("ini bilangan ke-"+i);
		}
	}
}
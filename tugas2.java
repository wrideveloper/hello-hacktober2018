import java.util.Scanner;
public class tugas2{
	public static void main(String args[]){
		Scanner sc = new Scanner (System.in);
		int a=0,b,n,jumlah = 0;
		double avg;
		System.out.print("Menghitung jumlah bilangan genap dari N bilangan\n");
		System.out.print("_____________________________________________________\n");
		System.out.print("Masukan range bilangan : ");
		n = sc.nextInt();
		b=n/2;
		System.out.println("Banyak nya bilangan genap dari 1 sampai "+n+" adalah "+b);
		for(int i = 1; i <= n; i++){
			
			if (i % 2 == 0){
				a++;
				jumlah += i;
				System.out.println("Bilangan genap ke "+a+" adalah "+i);

			}
			
		}
		
		System.out.println("Jumlah bilangan genap dari 1 sampai "+n+" adalah : "+jumlah);
		avg = jumlah/a;
		System.out.println("Rata - Rata bilangan genap dari 1 sampai"+n+" adalah : "+avg);


	}
}
import java.util.Scanner;
public class tugas1{
	public static void main(String arghs[]){
	Scanner sc = new Scanner(System.in);
	int n;
	int i = 0;
	System.out.print("masukan angka : ");
	n = sc.nextInt();
	
	for (i = 1;i <= n;i++){

		if (i % 5 == 0){
			System.out.print("");

	}else{
		System.out.println(i);
	}
	
		}

}
}
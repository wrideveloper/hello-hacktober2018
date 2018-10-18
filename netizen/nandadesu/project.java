import java.util.Scanner;
	class project{
		public  static void main(String[] args){
			Scanner sc = new Scanner(System.in);

		
			int uang, suhu, pilih, angka1, angka2;
			double hasil;


			
				System.out.println("==========================================================================");
				System.out.println("==============================  ALAT HITUNG ==============================");
				System.out.println("==========================================================================");
				System.out.println("");
				System.out.println("");
				System.out.println("   PILIHAN MENU  		              ");
				System.out.println("--------------------------------------------------------------------------");
				System.out.println("1. KONVERTER KURS RUPIAH			  ");
				System.out.println("2. KOVERTER SUHU CELCIUS			  ");
				System.out.println("3. KALKULATOR						  ");
				System.out.println("--------------------------------------------------------------------------");
				System.out.println("");
				System.out.print("PILIH MENU\t: ");
				pilih = sc.nextInt();
				System.out.println("");
				System.out.println("");
				System.out.println("");
				System.out.println("");
/*=====================================================================================================================================================
				SWITCH  CASE 			SWITCH  CASE 			SWITCH  CASE 			SWITCH  CASE 			SWITCH  CASE
=====================================================================================================================================================*/

				switch(pilih){

//=====================================================================================================================================================
//				CASE 1 " KONVERTER KURS RUPIAH "
//=====================================================================================================================================================
					case 1 :
						System.out.println("==========================================================================");
						System.out.println("=======================  KONVERSI MATA UANG RUPIAH  ======================");
						System.out.println("==========================================================================");
						System.out.println("");
						System.out.println("");
						System.out.println("	PILIHAN MATA UANG    ");
						System.out.println("--------------------------------------------------------------------------");
						System.out.println("1. POUND STERLING");
						System.out.println("2. US DOLLAR");
						System.out.println("3. YEN");
						System.out.println("4. EURO");
						System.out.println("5. WON");
						System.out.println("--------------------------------------------------------------------------");
						System.out.println("");

						System.out.print("Masukkan Jumlah Uang\t: Rp.");
						uang = sc.nextInt();
						System.out.print("Pilih Mata Uang\t\t: ");
						pilih = sc.nextInt();


							if(pilih==1 || pilih==2 || pilih==3 || pilih==4 || pilih==5){

									switch(pilih){
										case 1 :
											hasil = uang*0.000050;
											System.out.println("Hasil Konversi\t\t: " + hasil + " POUND STERLING");
											hasil = sc.nextDouble();
										break;

										case 2 :
											hasil = uang*0.000066; 
											System.out.println("Hasil Konversi\t\t: " + hasil + " US DOLLAR");
											hasil = sc.nextDouble();
										break;

										case 3 :
											hasil = uang*0.0075; 
											System.out.println("Hasil Konversi\t\t: " + hasil + " YEN");
											hasil = sc.nextDouble();
										break;

										case 4 :
											hasil = uang*0.000057; 
											System.out.println("Hasil Konversi\t\t: " + hasil + " EURO");
											hasil = sc.nextDouble();
										break;

										case 5 :
											hasil = uang*0.075; 
											System.out.println("Hasil Konversi\t\t: " + hasil + " WON");
											hasil = sc.nextDouble();
											break;
									}//batas switch dalam case 1				
							}else{
								System.out.println("MAAF MENU YANG ANDA PILIH TIDAK ADA");
							}//batas else
					break;//Break Case 1

//=====================================================================================================================================================
//				CASE 2 " KOVERTER SUHU CELCIUS "
//=====================================================================================================================================================
					case 2 :

						System.out.println("==========================================================================");
						System.out.println("=========================  KOVERTER SUHU CELCIUS  ========================");
						System.out.println("==========================================================================");
						System.out.println("");
						System.out.println("");
						System.out.println("	PILIHAN SUHU    ");
						System.out.println("--------------------------------------------------------------------------");
						System.out.println("1.KELVIN 		( K )");
						System.out.println("2.FAHRENHEIT 	( F )");
						System.out.println("3.REAMUR 		( R )");
						System.out.println("--------------------------------------------------------------------------");
						System.out.println("");
						System.out.print("Masukkan Suhu\t:");
						suhu = sc.nextInt();
						System.out.print("PILIH SUHU\t: ");
						pilih = sc.nextInt();
							if(pilih==1  || pilih==2 || pilih==3){
								switch(pilih){
										case 1 :
											hasil = suhu+273;
											System.out.println("Hasil Konversi\t\t: " + hasil + " K");
											hasil = sc.nextDouble();
										break;



										case 2 :
											hasil = (9/5)*suhu+32; 
											System.out.println("Hasil Konversi\t\t\t: " + hasil + " F");
											hasil = sc.nextDouble();
										break;


										case 3 :
											hasil = (4/5)*suhu; 
											System.out.println("Hasil Konversi\t\t: " + hasil + " R");
											hasil = sc.nextDouble();
										break;
									}//batas switch dalam case 2
							}else{
								System.out.println("MAAF SUHU YANG ANDA PILIH TIDAK ADA");
							}//batas else
					break;//Break Case 2

//=====================================================================================================================================================
//				CASE 3 " KALKULATOR	 "
//=====================================================================================================================================================
					case 3 :
						System.out.println("==========================================================================");
						System.out.println("============================  KALKULATOR  ================================");
						System.out.println("==========================================================================");
						System.out.println("");
						System.out.println("");


						System.out.println("	PILIHAN OPERASI   ");
						System.out.println("--------------------------------------------------------------------------");
						System.out.println("");
						System.out.print("Masukkan Angka 1\t:");
						angka1 = sc.nextInt();
						System.out.print("Masukkan Angka 2\t:");
						angka2 = sc.nextInt();
						System.out.println("");
						System.out.println("--------------------------------------------------------------------------");
						System.out.print("PILIH OPERASI\t: ( +  -  *  / )  \t:");
						pilih = sc.next().charAt(0);
						System.out.println("");
				
						
							if(angka1>0 || angka2>0){
								switch(pilih){
										case '+' :
											hasil = angka1+angka2;
											System.out.println("Hasil Bilangan\t\t: " + hasil);
											hasil = sc.nextDouble();
										break;


										case '-' :
											hasil = angka1-angka2 ; 
											System.out.println("Hasil Bilangan\t\t\t: " + hasil );
											hasil = sc.nextDouble();
										break;


										case '*' :
											hasil = angka1*angka2; 
											System.out.println("Hasil Bilangan\t\t: " + hasil );
											hasil = sc.nextDouble();
										break;


										case '/' :
											hasil = angka1/angka2; 
											System.out.println("Hasil Bilangan\t\t: " + hasil );
											hasil = sc.nextDouble();
										break;

									}//batas switch dalam case 2
							}else{
								System.out.println("MAAF ANGKA TIDAK BOLEH NEGATIF");
							}			
					break;//Break Case 3
				}	
		}
	}

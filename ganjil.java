// Seorang yang akan membayar pajak perlu dihitung semua harta kekayaan atau penghasilan. Kriteria yang dapat dihitung adalah sebagai berikut

// Sebelum dihitung, wajib pajak ditanya terlebih dahulu apakah memiliki usaha atau tidak.
//            i.     Ketika memiliki usaha, maka perlu diinputkan penghasilan dalam 1 tahun berapa? Kemudian dikenai pajak sebesar 15%

// Terdapat inputan harta kekayaan yang perlu dinputkan, dengan setiap wajib pajak memiliki harta kekayaan yang berbeda-beda.
// Harta kekayaan berupa, benda bergerak(kendaraan,dll) ataupun kekayaan yang tidak bergerak(perhiasan, tanah, surat berharga, dll). 
// Silakan diinputkan nama kendaraan ataupun perhiasaannya beserta nilai jual saat ini.
// Jika wajib pajak sudah berkeluarga, maka perlu ditanyakan tingkat pendidikan(SD,SMP,SMA,KULIAH). 
// Ketika jumlah yang kuliah anaknya 1 dan 1 SMA dan total harta kekayaan lebih dari sama dengan 50 juta maka akan dipotong semua pajaknya 10%. 
// Sedangkan tidak ada yang SMA ataupun KULIAH dan total harta kekayaan kurang dari 50 juta maka akan dipotong 5%.
import java.util.Scanner;
public class ganjil{
	public static void main(String args[]){
		boolean kekayaan = true;
        int counter = 0;
        String jawab,kategori,keluarga,pendidikan,p_anak,nama_kekayaan;
        Scanner scan = new Scanner(System.in);
     	int penghasilan;
     	double total=0,pajak,hasilpajak=0,totalpajak=0,harga_kekayaan=0;
     	
        System.out.print("Apakah anda memiliki usaha ??? (iya,tidak) : ");
     	kategori = scan.next();
        if(kategori.equalsIgnoreCase("iya")){
            System.out.print("masukan penghasilan satu tahun : ");
             penghasilan = scan.nextInt();
             hasilpajak = penghasilan * 0.15;

        } else{
            System.out.print("");
        }
        System.out.println("pajak satu tahun adalah "+ hasilpajak);
        System.out.println("_______________");
        System.out.println("harta kekayaan");
        System.out.println("_______________");
        while( kekayaan ) {
            
            System.out.print("apakah sudah tidak ada lagi ??? [ada/tidak]> ? ");
            jawab = scan.next();

            // cek jawabnnya, kalau ya maka berhenti mengulang
            if( jawab.equalsIgnoreCase("ada") ){
                System.out.print("sebutkan nama kekayaan anda ? ");
            	nama_kekayaan = scan.next();
            	System.out.print("kekayaan benda tersebut memiliki nilai berapa ? ");
            	harga_kekayaan = scan.nextInt();
            	total += harga_kekayaan;
                
            }else{
            	kekayaan = false;
            }

            counter++;
        }

        System.out.print("apakah anda sudah berkeluarga : (iya,tidak)");
        keluarga = scan.next();
        
        if (keluarga.equalsIgnoreCase("iya")){
            System.out.print("apakah pendidikan terakhir anda (SD,SMP,SMA,KULIAH) : ");
            pendidikan = scan.next();   
        }else{
            System.out.print("");
        }
        
        System.out.print("apakah anda punya 2 anak yang memiliki pendidikan kuliah dan SMA ?? (iya.tidak)");
        p_anak = scan.next();
        if (p_anak.equalsIgnoreCase("iya")){
            if(total >= 50000000){
                totalpajak = total * 0.10;
                
            }
        }else if (p_anak.equalsIgnoreCase("tidak")){
            if(total < 50000000){
                totalpajak = total * 0.05;
                
            }
        }
        System.out.println("total pajak yang akan anda bayar adalah "+totalpajak);

        System.out.println("Anda sudah melakukan perulangan sebanyak " + counter + " kali");

    

	}
}
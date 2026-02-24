public class TenRpl {

    public static void main(String[] args) {
      MuridRpl objek= new MuridRpl();
     
      System.out.println(objek.nama);
      System.out.println("Nama Anda adalah: "+objek.nama);
      objek.nama="Cinta Anjayy";
      
      System.out.println(objek.nama);
      System.out.println(objek.absen=07);
      System.out.println("");
      System.out.println("");
     
      objek.biodata();  
      
      int tampilanLuas=objek.menghitungPersegi ();
      System.out.println("Luas persegi panjangnya adalah: "+tampilanLuas);
          
      
      SiswaRpl obj= new SiswaRpl();
      obj.hobiSiswa();
      
      
      int hasilVolume=obj.menghitungBalok ();
      System.out.println("Volume balok adalah: "+hasilVolume);
      
      
    }
    
}

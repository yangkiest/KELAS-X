
public class Aploverloading {

    public static void main(String[] args) {
        Overloading objek= new Overloading();
        objek.DataKelas("Sepuluh RPL ");
        System.out.println(" ");
        objek.DataKelas("Sepuluh RPL", 36);
        
        objek.FavSong("Die For me ", "Chase Atlantic");
        
        String hasil = objek.kekuatanKhodam("Uncluk-uncluk Boyolali");
        System.out.println(hasil);
    }
    
}

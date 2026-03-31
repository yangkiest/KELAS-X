
public class Overloading {
    void DataKelas(String nmkelas) {
        System.out.println("Kelas Kita adalah: " + nmkelas);
    }
    
    void DataKelas(String nmkelas, int jmlhsiswa){
        System.out.println("Kelas Kita adalah: "+nmkelas );
        System.out.println("Jumlah Sobat Kita adalah: "+jmlhsiswa+ " Siswa");
    }
    
    void FavSong(String nmlagu, String pencipta){
        System.out.println("Lagu kesukaan gua adalah: "+nmlagu+ "Oleh "+pencipta);
    }
    
    String kekuatanKhodam(String khodam) {
        return "Khodamnya adalah "+khodam+" yang punya kekuatan menghilang pas ditanya tugas";
    }
}

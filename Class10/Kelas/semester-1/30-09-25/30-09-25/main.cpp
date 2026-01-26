#include <iostream>
using namespace std;

int main() {
    int tgl, bln;

    cout << "==============================\n";
    cout << "     CEK ZODIAK BRO \n";
    cout << "==============================\n";
    cout << "Masukin bulan lahir (1-12): ";
    cin >> bln;
    cout << "Masukin tanggal lahir: ";
    cin >> tgl;

    cout << "\n";

    if (bln == 1) {
        if (tgl >= 1 && tgl <= 19)
            cout << "Zodiak: Capricorn\nNote: Hidup lo teratur banget... kayak jadwal kuliah yang ga pernah dipatuhi.\n";
        else if (tgl >= 20 && tgl <= 31)
            cout << "Zodiak: Aquarius\nNote: Pikiran lo sering out of the box, tapi kadang keluar jauh sampe ga balik-balik.\n";
        else
            cout << "Tanggalnya ngawur bos!\n";
    }
    else if (bln == 2) {
        if (tgl >= 1 && tgl <= 18)
            cout << "Zodiak: Aquarius\nNote: Lo suka mikir aneh-aneh... cocok bikin teori konspirasi di TikTok.\n";
        else if (tgl >= 19 && tgl <= 29)
            cout << "Zodiak: Pisces\nNote: Hatinya halus banget... dikatain dikit langsung tidur sambil dengerin lagu galau.\n";
        else
            cout << "Tanggalnya ngaco, Februari tuh ga sampe segitu!\n";
    }
    else if (bln == 3) {
        if (tgl >= 1 && tgl <= 20)
            cout << "Zodiak: Pisces\nNote: Lo gampang baper, nonton iklan Indomie aja bisa nangis.\n";
        else if (tgl >= 21 && tgl <= 31)
            cout << "Zodiak: Aries\nNote: Kepala batu parah, kalau debat mending lawannya Google aja.\n";
        else
            cout << "Tanggal invalid, bro!\n";
    }
    else if (bln == 4) {
        if (tgl >= 1 && tgl <= 19)
            cout << "Zodiak: Aries\nNote: Energik sih, tapi suka bikin orang capek liatnya.\n";
        else if (tgl >= 20 && tgl <= 30)
            cout << "Zodiak: Taurus\nNote: Hobinya makan + rebahan = definisi hidup nikmat.\n";
        else
            cout << "Tanggalnya salah, April ga sampe segitu!\n";
    }
    else if (bln == 5) {
        if (tgl >= 1 && tgl <= 20)
            cout << "Zodiak: Taurus\nNote: Keras kepala, kalo udah pengen sesuatu harus kejadian, kayak craving ayam geprek malem-malem.\n";
        else if (tgl >= 21 && tgl <= 31)
            cout << "Zodiak: Gemini\nNote: Cerewet, bisa ngobrol sama tembok sekalipun.\n";
        else
            cout << "Tanggal salah, cek lagi!\n";
    }
    else if (bln == 6) {
        if (tgl >= 1 && tgl <= 20)
            cout << "Zodiak: Gemini\nNote: Otaknya random banget, dari ngobrol serius bisa nyambung ke 'kucing tuh bisa bahasa alien ga sih?'\n";
        else if (tgl >= 21 && tgl <= 30)
            cout << "Zodiak: Cancer\nNote: Anak rumahan sejati, keluar rumah aja butuh niat gede.\n";
        else
            cout << "Tanggal salah, Juni cuma 30 bro.\n";
    }
    else if (bln == 7) {
        if (tgl >= 1 && tgl <= 22)
            cout << "Zodiak: Cancer\nNote: Sensitif, kalo lagi bad mood semua orang kena imbas.\n";
        else if (tgl >= 23 && tgl <= 31)
            cout << "Zodiak: Leo\nNote: Narsisnya auto max level, kaca di rumah pasti retak liat lo.\n";
        else
            cout << "Tanggal salah, cek lagi!\n";
    }
    else if (bln == 8) {
        if (tgl >= 1 && tgl <= 22)
            cout << "Zodiak: Leo\nNote: Percaya diri tinggi, kadang sampe over... kayak ngerasa ganteng padahal biasa aja.\n";
        else if (tgl >= 23 && tgl <= 31)
            cout << "Zodiak: Virgo\nNote: Perfeksionis, liat typo dikit langsung pengen uninstall Word.\n";
        else
            cout << "Tanggal salah!\n";
    }
    else if (bln == 9) {
        if (tgl >= 1 && tgl <= 22)
            cout << "Zodiak: Virgo\nNote: Rapi banget, isi galeri aja ada folder-folder kayak dosen.\n";
        else if (tgl >= 23 && tgl <= 30)
            cout << "Zodiak: Libra\nNote: Ga bisa milih, pesen nasi padang aja lama karena bingung pilih lauk.\n";
        else
            cout << "Tanggalnya salah, September ga sampe segitu.\n";
    }
    else if (bln == 10) {
        if (tgl >= 1 && tgl <= 22)
            cout << "Zodiak: Libra\nNote: Diplomatis, bisa jadi moderator kalo temen lagi ribut.\n";
        else if (tgl >= 23 && tgl <= 31)
            cout << "Zodiak: Scorpio\nNote: Misterius, orang liat lo kayak karakter utama anime.\n";
        else
            cout << "Tanggal invalid, Oktober sampe 31 doang.\n";
    }
    else if (bln == 11) {
        if (tgl >= 1 && tgl <= 21)
            cout << "Zodiak: Scorpio\nNote: Tatapannya dalem, kayak lagi nagih utang.\n";
        else if (tgl >= 22 && tgl <= 30)
            cout << "Zodiak: Sagitarius\nNote: Jiwa petualang, cuma dompetnya ga dukung.\n";
        else
            cout << "Tanggal invalid!\n";
    }
    else if (bln == 12) {
        if (tgl >= 1 && tgl <= 21)
            cout << "Zodiak: Sagitarius\nNote: Optimis, padahal kadang ga tau jalan keluar gimana.\n";
        else if (tgl >= 22 && tgl <= 31)
            cout << "Zodiak: Capricorn\nNote: Ambisius, kayak mau jadi presiden padahal baru belajar ngoding.\n";
        else
            cout << "Tanggal salah bro!\n";
    }
    else {
        cout << "Bulan yang lo masukin tuh ga ada! (mungkin di kalender planet lain ada)\n";
    }

    return 0;
}

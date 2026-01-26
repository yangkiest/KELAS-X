const hari = 1;
let hasil;

switch (hari) {
  case 1:
    hasil = "Minggu";
    break;

  case 2:
    hasil = "Senin";
    break;

  case 3:
    hasil = "Selasa";
    break;

  case 4:
    hasil = "Rabu";
    break;

  case 5:
    hasil = "Kamis";
    break;

  case 6:
    hasil = "Jumat";
    break;

  case 7:
    hasil = "Sabtu";
    break;

  default:
    hasil = "Hari tidak diketahui";
    break;
}

console.log(hasil);

console.log("======================================");

const bulan = "april";
let moon;

switch (bulan) {
  case "januari":
    moon = "1";
    break;

  case "februari":
    moon = "2";
    break;

  case "maret":
    moon = "3";
    break;

  case "april":
    moon = "4";
    break;

  case "mei":
    moon = "5";
    break;

  case "juni":
    moon = "6";
    break;

  case "juli":
    moon = "7";
    break;

  case "agustus":
    moon = "8";
    break;

  case "september":
    moon = "9";
    break;

  case "oktober":
    moon = "10";
    break;

  case "november":
    moon = "11";
    break;

  case "desember":
    moon = "12";
    break;

  default:
    moon = "Bulan tidak diketahui";
    break;
}

console.log(moon);
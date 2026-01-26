let fungsi = function (nama) {
  console.log("Hello World " + nama);
};
fungsi("Erwin");

let contoh = (nama) => {
  console.log("Hello World " + nama);
};
contoh("Darwis");

let tambah = function (a, b) {
  return a + b;
};
console.log(tambah(5, 6));

let plus = (a, b) => a + b;
console.log(plus(5, 6));

let hasil = (a) => a * 2;
console.log(hasil(4));

let lagi = () => console.log("Hello World");
lagi();

let belajar = () => {
  console.log("Baris satu");
  console.log("Baris dua");
  console.log("Baris tiga");
  console.log("Baris empat");
};
belajar();

let nilai = 10;
let uji = nilai < 7 ? () => (predikat) => "Gagal" : () => (predikat) => "Lulus";
console.log(uji());
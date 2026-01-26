let coba = function () {
  return "Coba Function";
};

let buah = [
  "Nangka",
  "Pir",
  "Pisang",
  10,
  coba(),
  (tes = () => "Hasil Return Arrow Function"),
  function nama() {
    return "Hasil Return Function";
  },
];
console.log(buah);
console.log(buah[0]);
console.log(buah[1]);
console.log(buah[2]);
console.log(buah[3]);
console.log(buah[4]);
console.log(buah[5]());
console.log(buah[6]());

for (let i in buah) {
  console.log(buah[i]);
}
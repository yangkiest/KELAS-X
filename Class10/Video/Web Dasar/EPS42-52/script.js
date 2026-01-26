// function tampil() {
//   console.log(document.querySelectorAll("img"));
//   min = Math.ceil(0);
//   max = Math.floor(2);
//   let n = Math.floor(Math.random() * (max - min + 1) + min);
//   console.log("n");
//   document.querySelectorAll("img")[n].style.visibility = "visible";
// }

// function tampil() {
//   //   alert(document.querySelector("#nama").value);
//   document.querySelector("#hasil").value =
//     document.querySelector("#nama").value;

//   document.querySelector("#paragraft").innerText =
//     document.querySelector("#nama").value;
// }

// btn.onclick = tampil;

// btn.onclick = function () {
//   alert("JavaScript is fun!");
// };

// btn.onmouseover = function () {
//   alert("JavaScript is fun!");
// };

// btn.addEventListener("click", tampil);
// btn.addEventListener("mouseover", tampil);
// btn.addEventListener("mouseover", function () {
//   alert("Event");
// });

// btn.onclick = function () {
//     let menu = document.querySelector("ul");
//     menu.removeChild(menu.children[0]);

//   const nama = document.querySelector("#nama");
//   const judul = document.querySelector("h1");

//   let tampil = "Belajar";

//   judul.innerHTML = tampil + " " + nama.value;

//   tampil = "javascript";
//   judul.innerHTML = tampil + " " + nama.value;
// };

// btn.onclick = function () {
//   let a = 4;
//   let b = 2;

//   //   b = b + a;
//   //   b = b - a;
//   //   b = b * a;
//   //   b = b / a;
//   //   b = a % b;
//   //   b = b ** a;
//     // b = b ++;
//     // b = b --;

//   console.log(b);
// };

btn.onclick = function () {
  const nama = document.querySelector("#nama");
  //   if (nama.value == "") {
  //     alert("Nama masih kosong");
  //     nama.focus();
  if (nama.value == "a") {
    alert("Nama Sama");
    nama.focus();
  } else {
    alert(nama.value);
  }
};
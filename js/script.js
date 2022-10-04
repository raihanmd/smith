let span = document.querySelectorAll("nav ul span");
let input = document.querySelector(".menu-toggle input");
let ul = document.querySelector("nav ul");
let nav = document.querySelectorAll("ul li");
let btn = document.querySelector(".buton");
let clip = document.querySelector(".clip");
let toggle = document.querySelector(".menu-toggle");


function countChars(obj){
  let maxLength = 300;
  let strLength = obj.value.length;

  if(strLength > maxLength){
    document.getElementById('charNum').innerHTML = 'Melebihi batas maksimal 300 karakter!!';
    obj.value = obj.value.slice(0,-1); 
  }else{
    document.getElementById('charNum').innerHTML = strLength+"/300";
  }
}

input.addEventListener("click", function () {
  ul.classList.toggle("slide");
});
// jquery dimana nendena
window.addEventListener("scroll", function () {
  var nav = this.document.querySelector("nav");
  nav.classList.toggle("sticky", window.scrollY > 0);
});

btn.onclick = function () {
  btn.classList.add("active");
  clip.classList.add("active");
};

setInterval(() => {
  let date = new Date();
  let jam = document.querySelector("footer");
  jam.innerHTML = `${date.getHours()} : ${date.getMinutes()} : ${date.getSeconds()}`;
}, 1000);

let page = document.querySelectorAll(".page");
page.forEach(function (i) {
  console.log(i);
  i.addEventListener("click", function () {
    console.log("PAGE");
  });
});

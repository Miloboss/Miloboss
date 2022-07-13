// Loader

const all_container = document.querySelector(".all-container");
const loader = document.querySelector(".loader")

window.addEventListener("load", function() {
  loader.style.display = 'none';
  all_container.style.display = 'block';
  setTimeout(() => (all_container.style.opacity = 1), 50);
})

let minbg = document.getElementById("bg");
let bg_1 = document.getElementById("bg-1");
let bg_2 = document.getElementById("bg-2");
let bg_3 = document.getElementById("bg-3");

window.addEventListener("load", function(){
  if(bgmin1 === "bg11") {
    bg_1.classList.toggle('bgj');
  }
  else if(bgmin1 === "bg12") {
    bg_2.classList.toggle('bgj');
  } 
  else if(bgmin1 === "bg13") {
    bg_3.classList.toggle('bgj');
  }
})






  



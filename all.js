
// Read more function
const parentContainer =  document.querySelector('.read-more-container');

parentContainer.addEventListener('click', event=>{

    const current = event.target;

    const isReadMoreBtn = current.className.includes('read-more-btn');

    if(!isReadMoreBtn) return;

    const currentText = event.target.parentNode.querySelector('.read-more-text');

    currentText.classList.toggle('read-more-text--show');

    current.textContent = current.textContent.includes('Read More') ? "Read Less..." : "Read More...";

})

//

const all_container = document.querySelector(".all-container");
const loader = document.querySelector(".loader")

window.addEventListener("load", function() {
  loader.style.display = 'none';
  all_container.style.display = 'block';
  setTimeout(() => (all_container.style.opacity = 1), 50);
})





  



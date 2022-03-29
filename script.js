const nav = document.querySelector('nav');
var sec1 =document.querySelector('#sec1')
let navTop = nav.offsetTop;

function fixedNav() {
  if (window.scrollY > navTop) {    
    nav.classList.add('fixed');
    sec1.style.left= 25 +'%';
  } else {
    nav.classList.remove('fixed');    
  }
}
window.addEventListener('scroll', fixedNav);








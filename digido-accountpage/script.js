const nav = document.querySelector('nav');
let navTop = nav.offsetTop;
let sec1 =document.getElementsByClassName('sec1')
let sec2 =document.getElementsByClassName('sec2')

function fixedNav() {
  if (window.scrollY > navTop) {    
    nav.classList.add('fixed');
  } else {
    nav.classList.remove('fixed');    
  }
}
window.addEventListener('scroll', fixedNav);








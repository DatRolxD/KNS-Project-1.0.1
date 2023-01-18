const menuBtn = document.querySelector('.menu-btn');
const navbar = document.querySelector('#navbar');
let links = document.querySelectorAll('.responsive-invisible');
links = [...links];

let menuOpen = false;

menuBtn.addEventListener('click', () => {
  if(!menuOpen){
    menuBtn.classList.add('open');
    menuOpen = true;
    navbar.style.height = '95vh';
    links.map(link => {
      link.classList.remove('responsive-invisible');
    });
  }
  else {
    menuBtn.classList.remove('open');
    menuOpen = false;
    navbar.style.height = '10vh';
    links.map(link => {
      link.classList.add('responsive-invisible');
    });
    }
});
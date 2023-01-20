const menuBtn = document.querySelector('.menu-btn');
const navbar = document.querySelector('#navbar');
const navList = document.querySelector('#nav-list');
let links = document.querySelectorAll('.responsive-invisible');
links = [...links];

let menuOpen = false;

menuBtn.addEventListener('click', () => {
  if(!menuOpen){
    menuBtn.classList.add('open');
    menuOpen = true;
    navbar.style.height = '95vh';
    navList.style.width = '70%';
    links.map(link => {
      link.classList.remove('responsive-invisible');
    });
  }
  else {
    navList.removeAttribute('style');
    navbar.removeAttribute('style');
    menuBtn.classList.remove('open');
    menuOpen = false;
    links.map(link => {
      link.classList.add('responsive-invisible');
    });
    }
});

const footer = document.querySelector('#footer');
const footerArrow = document.querySelector('#footer-arrow');
const footerContent = document.querySelector('#footer-content');
let footerStatus = false; 

footerArrow.addEventListener('click', () => {
  if (footerStatus === false){
    footerArrow.style.transform = 'rotateX(-180deg)';
    footerStatus = true;
    footer.classList.remove('footer-js');
    footer.classList.add('footer-js-click');
    /*footer.style.height = '30vh';
    footer.style.opacity = '1';
    footer.style.justifyContent = 'flex-start';
    footer.style.padding = '1rem';
    */
    footerContent.style.display = 'grid';
    footerContent.classList.add('footer-grid');
    /* blur.classList.add('blur'); */
  }
  else {
    footerContent.removeAttribute('style');
    footerContent.classList.remove('footer-grid');
    footerArrow.removeAttribute('style');
    footer.classList.add('footer-js');
    footer.classList.remove('footer-js-click');
    /* blur.classList.remove('blur'); */
    footerStatus = false;
  }
});

let plusHolder = document.querySelectorAll('.plus-holder');
plusHolder = [...plusHolder];
let contentOpen = [];
/*let footerParas = document.querySelectorAll('.footer-para');*/
let footerColumns = document.querySelectorAll('.footer-column')
footerColumns = [...footerColumns];

for (let c = 0; c < plusHolder.length; c++){
  contentOpen[c] = false;
  plusHolder[c].addEventListener('click', () => {
    if (!contentOpen[c]){
      plusHolder[c].classList.add('open');
      let paragraphs = footerColumns[c].querySelectorAll('.footer-para');
      paragraphs = [...paragraphs];
      paragraphs.forEach(paragraph => {
        paragraph.classList.remove('mobile-invisible');
        paragraph.classList.add('footer-para-visible');
      })

      /*footerParas.forEach(footerPara => {
        footerPara.classList.remove('mobile-invisible');
        footerPara.classList.add('footer-para-visible');
      });
      */
      contentOpen[c] = true;
    }
    else{
      plusHolder[c].classList.remove('open');
      /*footerParas.forEach(footerPara => {
        footerPara.classList.remove('footer-para-visible');
        footerPara.classList.add('mobile-invisible');
      });
      */
      let paragraphs = footerColumns[c].querySelectorAll('.footer-para');
      paragraphs = [...paragraphs];
      paragraphs.forEach(paragraph => {
        paragraph.classList.remove('footer-para-visible');
        paragraph.classList.add('mobile-invisible');
      })
      contentOpen[c] = false;
    }
  })
}
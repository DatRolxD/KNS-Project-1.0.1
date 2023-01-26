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
      let paragraphs = footerColumns[c].querySelectorAll('.js-display');
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
      let paragraphs = footerColumns[c].querySelectorAll('.js-display'); 
      paragraphs = [...paragraphs];
      paragraphs.forEach(paragraph => {
        paragraph.classList.remove('footer-para-visible');
        paragraph.classList.add('mobile-invisible');
      })
      contentOpen[c] = false;
    }
  })
}
const facebookSvg = document.querySelector('#facebook-svg');
const instagramSvg = document.querySelector('#instagram-svg');
const linkedinSvg = document.querySelector('#linkedin-svg');
let clickableLinks = document.querySelectorAll('.clickable');
clickableLinks = [...clickableLinks];
let contactLinks = document.querySelectorAll('.contact-link');
contactLinks = [...contactLinks];

clickableLinks.forEach(clickableLink => {
  clickableLink.addEventListener('mouseover', () => {
    if (clickableLink.getAttribute('id') === 'facebook'){
      facebookSvg.classList.add('facebook-svg');
      contactLinks[0].style.color = 'var(--alpha-green)';
    }

    else if (clickableLink.getAttribute('id') === 'instagram'){
      instagramSvg.classList.add('instagram-svg');
      contactLinks[1].style.color = 'var(--alpha-green)';
    }

    else if (clickableLink.getAttribute('id') === 'linkedin'){
      linkedinSvg.classList.add('linkedin-svg');
      contactLinks[2].style.color = 'var(--alpha-green)';
    }
  })

  clickableLink.addEventListener('mouseout', () => {
    if (clickableLink.getAttribute('id') === 'facebook'){
      facebookSvg.classList.remove('facebook-svg');
      contactLinks[0].removeAttribute('style');
    }
    else if (clickableLink.getAttribute('id') === 'instagram'){
      instagramSvg.classList.remove('instagram-svg');
      contactLinks[1].removeAttribute('style');
    }

    else if (clickableLink.getAttribute('id') === 'linkedin'){
      linkedinSvg.classList.remove('linkedin-svg');
      contactLinks[2].removeAttribute('style');
    }
  })
})

/*
const mediaQuery = window.matchMedia('(max-width: 768px)');
const mapSvg = document.querySelector('#map-europe');
if (mediaQuery.matches) {
  mapSvg.setAttribute('preserveAspectRatio', "xMidYMin slice");
  mapSvg.setAttribute('viewBox', "185 80 700 520");
}*/

/*
const mainHeading = document.querySelector('#main-heading');
const countryName = document.querySelector('#country-name');
let countryLinks = document.querySelectorAll('.country-link');

countryLinks = [...countryLinks];
countryLinks.forEach(countryLink => {
  countryLink.addEventListener('mouseover', () => {
    mainHeading.style.opacity = "0";
    mainHeading.style.transition = "0.5s";
    mainHeading.textContent = countryLink.getAttribute("description");
  
    
    mainHeading.style.visibility = "hidden";
    countryName.textContent = countryLink.getAttribute('description');
    countryName.classList.remove('country-hide');
    mainHeading.style.position = "absolute";
    countryName.classList.add('center-plate');
    countryName.style.opacity = "0";
    countryName.style.transition = "5s";
    countryName.style.opacity = "0.2";
   
  } );
  countryLink.addEventListener('mouseout', () => {
    mainHeading.textContent = "Wybierz kraj";
    mainHeading.style.opacity = "1";
    
    countryName.classList.remove('center-plate');
    countryName.removeAttribute('style');
    countryName.classList.add('country-hide');
    mainHeading.removeAttribute('style');
    
  });
})
 */



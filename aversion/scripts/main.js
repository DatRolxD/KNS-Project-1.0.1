/* MOBILE-ONLY Open navbar by clicking on the hamburger menu  */
const menuBtn = document.querySelector('.menu-btn');
const navbar = document.querySelector('#navbar');
const navList = document.querySelector('#nav-list');
let links = document.querySelectorAll('.responsive-invisible');
links = [...links];

let menuOpen = false;

menuBtn.addEventListener('click', () => {
  if(!menuOpen){
    if(footerStatus === true){
      footerContent.removeAttribute('style');
      footerContent.classList.remove('footer-grid');
      footerArrow.removeAttribute('style');
      footer.classList.add('footer-js');
      footer.classList.remove('footer-js-click');
      footerStatus = false;
    }
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

/* Open footer by clicking on the arrow */
const footer = document.querySelector('#footer');
const footerArrow = document.querySelector('#footer-arrow');
const footerContent = document.querySelector('#footer-content');
let footerStatus = false; 

footerArrow.addEventListener('click', () => {
  if (!footerStatus){
    if(menuOpen) {
      navList.removeAttribute('style');
      navbar.removeAttribute('style');
      menuBtn.classList.remove('open');
      menuOpen = false;
      links.map(link => {
        link.classList.add('responsive-invisible');
      });
    }
    footerArrow.style.transform = 'rotateX(-180deg)';
    footerStatus = true;
    footer.classList.remove('footer-js');
    footer.classList.add('footer-js-click');
    footerContent.style.display = 'grid';
    footerContent.classList.add('footer-grid');
  }
  else {
    footerContent.removeAttribute('style');
    footerContent.classList.remove('footer-grid');
    footerArrow.removeAttribute('style');
    footer.classList.add('footer-js');
    footer.classList.remove('footer-js-click');
    footerStatus = false;
  }
});

/* MOBILE-ONLY Open the content of each footer heading */
let plusHolder = document.querySelectorAll('.plus-holder');
plusHolder = [...plusHolder];
let contentOpen = [];
let footerColumns = document.querySelectorAll('.footer-column')
footerColumns = [...footerColumns];

for (let c = 0; c < plusHolder.length; c++){
  contentOpen[c] = false;
  plusHolder[c].addEventListener('click', () => { 
    if (!contentOpen[c]){
      for (let a = 0; a < contentOpen.length; a++){
        if (contentOpen[a]){
          contentOpen[a] = false;
          plusHolder.forEach(plusHold => {
            plusHold.classList.remove('open');
          });
          let paragraphsCollection = [];
            footerColumns.forEach(footerColumn => {
              paragraphsCollection.push(footerColumn.querySelectorAll('.js-display'));
            });
            paragraphsCollection.forEach(paragraphArray => {
              paragraphArray.forEach(paragraph =>{
                paragraph.classList.remove('footer-para-visible');
                paragraph.classList.add('mobile-invisible');
              });
            });
        }
      }
      plusHolder[c].classList.add('open');
      let paragraphs = footerColumns[c].querySelectorAll('.js-display');
      paragraphs = [...paragraphs];
      paragraphs.forEach(paragraph => {
        paragraph.classList.remove('mobile-invisible');
        paragraph.classList.add('footer-para-visible');
      })
      contentOpen[c] = true;
    }
    else if (contentOpen[c]){
      contentOpen[c] = false;
      plusHolder[c].classList.remove('open');
      let paragraphs = footerColumns[c].querySelectorAll('.js-display'); 
      paragraphs = [...paragraphs];
      paragraphs.forEach(paragraph => {
        paragraph.classList.remove('footer-para-visible');
        paragraph.classList.add('mobile-invisible');
      })
    }
  })
}

/* Make social media icons change color on hover */
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

/* MOBILE-ONLY Change viewbox of the map */
const mediaQuery = window.matchMedia('(max-width: 768px)');
const mapSvg = document.querySelector('#map-europe');
if (mediaQuery.matches) {
  mapSvg.setAttribute('viewBox', "300 70 400 380");
}

/* Determine the active page */
let pathname = window.location.pathname;
console.log(pathname);



/* LOADING */
const logo = document.querySelector('#logo');
const spinner = document.querySelector('#spinner');
const spinnerContainer = document.querySelector('#spinner-container');

function logoLoaded() {
  spinner.remove();
  spinnerContainer.remove();
  logo.style.position = 'static';
  logo.style.opacity = '1';
};
if (logo.complete) {
  logoLoaded();
}
else {
  logo.addEventListener('load', logoLoaded);
  logo.addEventListener('error', function() {
      alert('error');
  });
};

/* Map tooltip container */
  let tooltipContainer = document.querySelector('#tooltip-container');
  if (tooltipContainer !== undefined && tooltipContainer !== null){
  const iButton = document.querySelector('#i-button');
  let tooltipOpen = false;
  function tooltip () {
    if (!tooltipOpen){
      tooltipContainer.style.clipPath = 'circle(75%)';
      tooltipContainer.style.background = 'var(--primary-red)';
      iButton.textContent = 'x';
      tooltipOpen = true;
      }
      else {
        tooltipContainer.removeAttribute('style');
        iButton.textContent = '?';
        tooltipOpen = false;
      }
  };
  tooltipContainer.addEventListener('click', tooltip);
}

/* Determine the active page */
let pathname = window.location.pathname;
let navLinks = document.querySelectorAll('.nav-link');
const currentPage = document.querySelector('#mobile-current-page');
const mediaQuery = window.matchMedia('(max-width: 712px)');
const mediaQueryTablet = window.matchMedia('(min-width:712px) and (max-width: 992px)');
let indexMatch = false;

let indexPage = document.querySelector('#index-page');
let aboutPage = document.querySelector('#about-page');
let newsPage = document.querySelector('#news-page');
let magazinePage = document.querySelector('#magazine-page');


if (indexPage !== undefined && indexPage !== null){
  navLinks[0].classList.add('active');
  currentPage.textContent = 'Strona główna';
  /* TOOLTIP FOR THE MAP ONLY INDEX.PHP */
  indexMatch = true;
  /* MOBILE-ONLY Change viewbox of the map */
  const mapSvg = document.querySelector('#map-europe');
  if (mediaQuery.matches) {
    mapSvg.setAttribute('viewBox', "300 70 400 380");
}
  else if (mediaQueryTablet.matches){
    mapSvg.setAttribute('viewBox', "338 175 400 380");
  }

}
else if (aboutPage !== undefined && aboutPage !== null){
  navLinks[1].classList.add('active');
  currentPage.textContent = 'O nas';
}
else if (newsPage !== undefined && newsPage !== null){
  /* Set active link */
  navLinks[2].classList.add('active');
  /* Display active link on a phone */
  let news = document.querySelector('#news');
  let bosnia = document.querySelector('#bosnia');
  let bulgaria = document.querySelector('#bulgaria');
  let croatia = document.querySelector('#croatia');
  let czechia = document.querySelector('#czechia');
  let lusatia = document.querySelector('#lusatia');
  let macedonia = document.querySelector('#macedonia');
  let montenegro = document.querySelector('#montenegro');
  let poland = document.querySelector('#poland');
  let serbia = document.querySelector('#serbia');
  let slovakia = document.querySelector('#slovakia');
  let slovenia = document.querySelector('#slovenia');
  if (news !== undefined && news !== null){
  currentPage.textContent = 'Aktualności';
  }
  /* Add country flag if selected news */
  else if (bosnia !== undefined && bosnia !== null){
    currentPage.textContent = 'Bośnia i Hercegowina';
    let flag = document.querySelector('#bosnia-flag');
    flag.style.display = 'block';
  }
  else if (bulgaria !== undefined && bulgaria !== null){
    currentPage.textContent = 'Bułgaria';
    let flag = document.querySelector('#bulgaria-flag');
    flag.style.display = 'block';
  }
  else if (croatia !== undefined && croatia !== null){
    currentPage.textContent = 'Chorwacja';
    let flag = document.querySelector('#croatia-flag');
    flag.style.display = 'block';
  }
  else if (czechia !== undefined && czechia !== null){
    currentPage.textContent = 'Czechy';
    let flag = document.querySelector('#czech-flag');
    flag.style.display = 'block';
  }
  else if (lusatia !== undefined && lusatia !== null){
    currentPage.textContent = 'Łużyce';
    let flag = document.querySelector('#lusatia-flag');
    flag.style.display = 'block';
  }
  else if (macedonia !== undefined && macedonia !== null){
    currentPage.textContent = 'Macedonia';
    let flag = document.querySelector('#macedonia-flag');
    flag.style.display = 'block';
  }
  else if (montenegro !== undefined && montenegro !== null){
    currentPage.textContent = 'Montenegro';
    let flag = document.querySelector('#montenegro-flag');
    flag.style.display = 'block';
  }
  else if (poland !== undefined && poland !== null){
    currentPage.textContent = 'Polska';
    let flag = document.querySelector('#poland-flag');
    flag.style.display = 'block';
  }
  else if (serbia !== undefined && serbia !== null){
    currentPage.textContent = 'Serbia';
    let flag = document.querySelector('#serbia-flag');
    flag.style.display = 'block';
  }
  else if (slovakia !== undefined && slovakia !== null){
    currentPage.textContent = 'Słowacja';
    let flag = document.querySelector('#slovakia-flag');
    flag.style.display = 'block';
  }
  else if (slovenia !== undefined && slovenia !== null){
    currentPage.textContent = 'Słowenia';
    let flag = document.querySelector('#slovenia-flag');
    flag.style.display = 'block';
  }
  /* TO BE REMOVED */
  /* Set max length of a post preview */
  let postPreviewTexts = document.querySelectorAll('.post-preview-text');
  postPreviewTexts = [...postPreviewTexts];
  postPreviewTexts.forEach(postPreviewText => {
    let postLength = 507;
    if (postPreviewText.textContent.length >= postLength){
      let text = postPreviewText.textContent;
      text = text.substring(0, 507);
      let dot = text[text.length-1];
      if (dot !== '.' && dot !== ','){
        text += '...';
      }
      else if (dot === ','){
        text = text.substring(0, 506);
        text += '...';
      }
      postPreviewText.textContent = text;
    }
  })
}
 /* ------------------------------------- */
else if (magazinePage !== undefined && magazinePage !== null){
  navLinks[3].classList.add('active');
  currentPage.textContent = 'Czasopismo';
}

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
    if (indexMatch && mediaQuery.matches || mediaQueryTablet.matches){
    tooltipContainer.style.opacity = '0';
    tooltipContainer.style.transform = 'translate(20000px)';
    tooltipContainer.removeEventListener('click', tooltip);
    };
    currentPage.style.opacity = '0';
    menuBtn.classList.add('open');
    menuOpen = true;
    navbar.style.height = '95vh';
    navList.style.width = '70%';
    links.map(link => {
      link.classList.remove('responsive-invisible');
    });
  }
  else {
    if (indexMatch && mediaQuery.matches || mediaQueryTablet.matches){
      tooltipContainer.style.opacity = '1';
      tooltipContainer.style.transform = '';
      tooltipContainer.addEventListener('click', tooltip);
      };
    currentPage.style.opacity = '1';
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
    if (indexMatch && mediaQuery.matches || mediaQueryTablet.matches){
      tooltipContainer.style.opacity = '0';
      tooltipContainer.style.transform = 'translate(20000px)';
      tooltipContainer.removeEventListener('click', tooltip);
      };
    footerArrow.style.transform = 'rotateX(-180deg)';
    footerStatus = true;
    footer.classList.remove('footer-js');
    footer.classList.add('footer-js-click');
    footerContent.style.display = 'grid';
    footerContent.classList.add('footer-grid');
  }
  else {
    if (indexMatch && mediaQuery.matches || mediaQueryTablet.matches){
      tooltipContainer.style.opacity = '1';
      tooltipContainer.style.transform = '';
      tooltipContainer.addEventListener('click', tooltip);
      };
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

  /* Add # before each tag */
  if (document.querySelectorAll('.post-preview-tag') !== undefined){
    let tags = document.querySelectorAll('.post-preview-tag');
    tags.forEach(tag => {
      tag.textContent = `#${tag.textContent}`;
    });
}



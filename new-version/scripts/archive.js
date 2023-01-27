let plusSign = document.querySelectorAll('.plus-minus');
plusSign = [...plusSign];
let showContent = false;
let footerColumn = document.querySelectorAll('.footer-column');
footerColumn = [...footerColumn];

plusSign.forEach(sign => {
  console.log(sign);
  sign.addEventListener('click', () => {
    if (showContent === false){
      sign.lastElementChild.setAttribute('d', 'M5 11h14v2H5z');
      
      showContent = true;
    }
    else {
      sign.lastElementChild.setAttribute('d', 'M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z');
      showContent = false;
    }
  });
});


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
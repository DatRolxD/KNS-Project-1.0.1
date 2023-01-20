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

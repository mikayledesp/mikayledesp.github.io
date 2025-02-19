let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

function displayText() {
  let textField = document.getElementById("textField");
    let button = document.querySelector("button");

    if (textField.style.display === "none") {
      textField.style.display = "block";
      button.textContent = "About Travel Guide";
    } else {
      textField.style.display = "none";
      button.textContent = "About Travel Guide";
    }
}

function toggleTheme() {
  let theme = document.getElementById('theme');
  console.log("Current theme href:", theme.getAttribute('href'));

  if (theme.getAttribute('href') === 'css/creativeHw3.css') {
    theme.setAttribute('href', 'css/creativeDarkMode.css');
  } else {
    theme.setAttribute('href', 'css/creativeHw3.css');
  }

  console.log("New theme href:", theme.getAttribute('href'));
}
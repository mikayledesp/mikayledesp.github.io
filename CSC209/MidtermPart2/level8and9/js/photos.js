let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  slideIndex = (n > slides.length) ? 1 : (n < 1) ? slides.length : n;
  
  Array.from(slides).forEach(slide => slide.style.display = "none");
  Array.from(dots).forEach(dot => dot.className = dot.className.replace(" active", ""));
  
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}

function displayText() {
  let textField = document.getElementById("textField");
  textField.style.display = (textField.style.display === "none") ? "block" : "none";
}

function toggleTheme() {
    let theme = document.getElementById('theme');
    console.log("Current theme href:", theme.getAttribute('href'));
  
    if (theme.getAttribute('href') === '../css/photos.css') {
      theme.setAttribute('href', '../css/photosDark.css');
    } else {
      theme.setAttribute('href', '../css/photos.css');
    }
  
    console.log("New theme href:", theme.getAttribute('href'));
  }

function createSlides() {
  let slideshowContainer = document.getElementsByClassName("slideshow-container")[0];
  for (let i = 0; i < NUM_IMAGES; i++) {
    let mainDiv = document.createElement("div");
    mainDiv.className = "mySlides";
    
    let numberDiv = document.createElement("div");
    numberDiv.className = "numbertext";
    numberDiv.textContent = `${i + 1} / ${NUM_IMAGES}`;
    mainDiv.appendChild(numberDiv);
    
    let image = document.createElement("img");
    image.src = `images/${imgNames[i]}.jpg`;
    image.style.width = "100%";
    mainDiv.appendChild(image);
    
    let captionDiv = document.createElement("div");
    captionDiv.className = "text";
    captionDiv.textContent = imgCaptions[i];
    mainDiv.appendChild(captionDiv);
    
    slideshowContainer.appendChild(mainDiv);
  }
}

function createDots() {
  let dotsContainer = document.getElementById("dots");
  for (let i = 0; i < NUM_IMAGES; i++) {
    let dot = document.createElement("span");
    dot.className = "dot";
    dot.onclick = () => currentSlide(i + 1);
    dotsContainer.appendChild(dot);
  }
}

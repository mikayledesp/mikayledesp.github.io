let slideIndex = 1;

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");

  if (n > slides.length) { slideIndex = 1 }
  if (n < 1) { slideIndex = slides.length }

  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  for (let i = 0; i < dots.length; i++) {
    dots[i].classList.remove("active");
  }

  if (slides.length > 0) {
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].classList.add("active");
  }
}

function createSlides() {
  const container = document.querySelector(".slideshow-container");

  for (let i = 0; i < imgNames.length; i++) {
    let slide = document.createElement("div");
    slide.className = "mySlides";

    let numberText = document.createElement("div");
    numberText.className = "numbertext";
    numberText.textContent = `${i + 1} / ${imgNames.length}`;
    slide.appendChild(numberText);

    let img = document.createElement("img");
    img.src = `images/${imgNames[i]}.JPG`;
    img.style.width = "100%";
    slide.appendChild(img);
    container.appendChild(slide);
  }
}

function createDots() {
  const dotsContainer = document.getElementById("dots");

  for (let i = 0; i < imgNames.length; i++) {
    let dot = document.createElement("span");
    dot.className = "dot";
    dot.addEventListener("click", () => currentSlide(i + 1));
    dotsContainer.appendChild(dot);
  }
}

window.onload = function () {
  createSlides();
  createDots();
  showSlides(slideIndex);
};

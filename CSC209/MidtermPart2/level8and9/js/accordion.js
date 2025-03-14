function addSections() {
  for (var i = 0; i < NRIMAGES; i++) {
    var image = IMAGES[i];
    addSingleSection(image.name, image.path);
  }

  eventistener();
}

function addSingleSection(name, imagePath) {
  var container = document.getElementById("accordion-container");

  var SECTION = 
    "<button class='accordion'>Download " + name + "</button>" +
    "<div class='panel'>" + 
      "<a href='" + imagePath + "'>View Image</a>" + // Removed target and rel
    "</div>";

  container.innerHTML += SECTION;
}

function eventistener() {
  var acc = document.getElementsByClassName("accordion");
  
  for (var i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", toggleFunction);
  }
}

function toggleFunction() {
  this.classList.toggle("active");
  var panel = this.nextElementSibling;
  if (panel.style.maxHeight) {
    panel.style.maxHeight = null;
  } else {
    panel.style.maxHeight = panel.scrollHeight + "px";
  }
}

addSections();
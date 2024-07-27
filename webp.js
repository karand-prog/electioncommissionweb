function goToPage(pageName) {
  window.location.href = pageName;
}

function changeHeaderColor() {
  var header = document.getElementById("header");
  header.style.color = "black";
}

function revertHeaderColor() {
  var header = document.getElementById("header");
  header.style.color = "white";
}

function slideImages() {
  var imageSlider = document.getElementById("image-slider");
  var images = imageSlider.getElementsByTagName("img");
  var currentImageIndex = 0;
  var totalImages = images.length;

  setInterval(function() {
    images[currentImageIndex].style.display = "none";
    currentImageIndex = (currentImageIndex + 1) % totalImages;
    images[currentImageIndex].style.display = "block";
  }, 3000);
}

// Attach event listeners
window.onload = function() {
  var header = document.getElementById("header");
  header.addEventListener("mouseover", changeHeaderColor);
  header.addEventListener("mouseout", revertHeaderColor);

  slideImages();
};

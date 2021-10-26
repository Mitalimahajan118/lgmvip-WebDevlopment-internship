// For Carousel Control
var counter = 1;
//Manual Carousel Control
document.getElementById("radio" + counter).checked = true;
counter++;
if (counter > 4) {
  counter = 1;
}
// For Automatic Carousel Control
setInterval(function () {
  document.getElementById("radio" + counter).checked = true;
  counter++;
  if (counter > 4) {
    counter = 1;
  }
}, 5000);

// For auto-play/pause video om Mouse Hover
document.getElementById("vid1").addEventListener("mouseover", function () {
  this.play();
});
document.getElementById("vid1").addEventListener("mouseleave", function () {
  this.pause();
});

document.getElementById("vid2").addEventListener("mouseover", function () {
  this.play();
});
document.getElementById("vid2").addEventListener("mouseleave", function () {
  this.pause();
});

// For Image Gallery Control
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides((slideIndex += n));
}

function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("work-life");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
  captionText.innerHTML = dots[slideIndex - 1].alt;
}

// For Google Map
function myMap() {
  var mapProp = {
    center: new google.maps.LatLng(20.295789712650425, 85.82384761330974),
    zoom: 10,
  };
  var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}

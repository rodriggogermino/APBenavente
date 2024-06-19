$(window).on('load', function() {
    $('#loader').fadeIn();
    setTimeout(function() {
        $('#loader').fadeOut();
    }, 300);
});

document.addEventListener('scroll', function () {
  var subnav = document.getElementById('subnav');
  if (window.scrollY > 100) { // Você pode ajustar o valor de 50 conforme necessário
      subnav.classList.add('hidden');
  } else {
      subnav.classList.remove('hidden');
  }
});

function openNav() {
    document.getElementById("sidenavMenu").style.left = "0";
}
  
function closeNav() {
    document.getElementById("sidenavMenu").style.left = "-400px";
}

function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}

function verPassword() {
    var x = document.getElementById("pword");
    var z = document.getElementById("passVisibilidade");
    if (x.type === "password") {
      x.type = "text";
      z.textContent = "Esconder Password";
    } else {
      x.type = "password";
      z.textContent = "Ver Password";
    }
}

let slideIndex = 0;
let slideInterval;

function showDivs(n) {
    let slides = document.getElementsByClassName("containerNews");
    if (n >= slides.length) { slideIndex = 0 }
    if (n < 0) { slideIndex = slides.length - 1 }
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.opacity = "0";
        slides[i].style.zIndex = "1";
    }
    slides[slideIndex].style.opacity = "1";
    slides[slideIndex].style.zIndex = "2";
}

function plusDivs(n) {
    clearInterval(slideInterval); // Stop the automatic slideshow on manual change
    slideIndex += n;
    showDivs(slideIndex);
    slideInterval = setInterval(autoSlide, 5000); // Restart the automatic slideshow
}

function autoSlide() {
    slideIndex++;
    showDivs(slideIndex);
}

function resetSlideIndex() {
    slideIndex = 0; // Reset the slide index
    clearInterval(slideInterval); // Stop the automatic slideshow
    slideInterval = setInterval(autoSlide, 5000); // Restart the automatic slideshow
}

window.onload = function() {
    showDivs(slideIndex);
    slideInterval = setInterval(autoSlide, 5000); // Change slide every 5 seconds
}


var modal = document.getElementById("myModal");
var btn = document.getElementById("bemVindoAdm");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

var modalRemove = document.getElementById("modalNews");
var removeBtn = document.getElementById("removerBtn");
var spanRemove = document.getElementsByClassName("closeRemove")[0];

removeBtn.onclick = function() {
  modalRemove.style.display = "block";
}
spanRemove.onclick = function() {
  modalRemove.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modalRemove) {
    modalRemove.style.display = "none";
  }
}

var removeFiles = document.getElementById("modalFiles");
var removeB = document.getElementById("removeFile");
var spanFiles = document.getElementsByClassName("cancelRemove")[0];

removeB.onclick = function() {
  removeFiles.style.display = "block";
}
spanFiles.onclick = function() {
  removeFiles.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == removeFiles) {
    removeFiles.style.display = "none";
  }
}

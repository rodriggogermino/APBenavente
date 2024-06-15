$(window).on('load', function() {
    $('#loader').fadeIn();
    setTimeout(function() {
        $('#loader').fadeOut();
    }, 300);
});

document.addEventListener('scroll', function () {
  var subnav = document.getElementById('subnav');
  if (window.scrollY > 50) { // Você pode ajustar o valor de 50 conforme necessário
      subnav.classList.add('hidden');
  } else {
      subnav.classList.remove('hidden');
  }
});

function openNav() {
    document.getElementById("sidenavMenu").style.width = "250px";
}
  
function closeNav() {
    document.getElementById("sidenavMenu").style.width = "0";
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
    }
    slides[slideIndex].style.opacity = "1";
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

  window.onload = function() {
    showDivs(slideIndex);
    slideInterval = setInterval(autoSlide, 5000); // Change slide every 5 seconds
  }

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("bemVindoAdm");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

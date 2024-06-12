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

function acceptCookies() {
  document.cookie = "cookie_consent=accepted; path=/; max-age=" + (30 * 24 * 60 * 60);
  document.querySelector('.cookie-consent-banner').style.display = 'none';

  // Send an AJAX request to set the consent in the database
  $.post(window.location.href, { cookie_consent: 'accepted' }, function() {
      // Hide the banner
      $('.cookie-consent-banner').hide();
  });
}

function managePreferences() {
  alert("Manage your preferences here.");
  // Implement your preferences management logic here
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

document.addEventListener('DOMContentLoaded', function() {
  const newsContainers = document.querySelectorAll('.containerNews');
  const leftArrow = document.getElementById('arLeft');
  const rightArrow = document.getElementById('arRight');
  let currentIndex = 0;

  function showNews(index) {
      newsContainers.forEach((container, i) => {
          container.classList.remove('active');
          if (i === index) {
              container.classList.add('active');
          }
      });
  }

  leftArrow.addEventListener('click', function() {
      currentIndex = (currentIndex === 0) ? newsContainers.length - 1 : currentIndex - 1;
      showNews(currentIndex);
  });

  rightArrow.addEventListener('click', function() {
      currentIndex = (currentIndex === newsContainers.length - 1) ? 0 : currentIndex + 1;
      showNews(currentIndex);
  });

  showNews(currentIndex);
});
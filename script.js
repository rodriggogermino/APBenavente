$(window).on('load', function() {
    $('#loader').fadeIn();
    setTimeout(function() {
        $('#loader').fadeOut();
    }, 300);
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

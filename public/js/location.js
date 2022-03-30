let button = document.getElementById("get-location");
let latText = document.getElementById("latitude");
let longText = document.getElementById("longitude");

button.addEventListener("click", function() {
  navigator.geolocation.getCurrentPosition(function(position) {
    let lat = position.coords.latitude;
    let long = position.coords.longitude;
    latText.innerText = lat.toFixed(5);
    longText.innerText = long.toFixed(5);

    document.getElementById("inputlongitude").value = long;
    document.getElementById("inputlatitude").value = lat;
  });
});
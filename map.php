<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<!-- <div id="map" style="height: 600px; width: 100%;"></div> -->
<div style="width: 100%; height: 600px;">
  <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509327!2d144.9556513159043!3d-37.81732797975171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf5779b8e59c0b9f!2sQALB%20TECH!5e0!3m2!1sen!2sin!4v1692520831884!5m2!1sen!2sin"

    width="100%"
    height="100%"
    style="border:0;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>
<script>
  var map = L.map('map').setView([20, 0], 2); // World view

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 18,
  }).addTo(map);

  // Example markers
  L.marker([28.6139, 77.2090]).addTo(map).bindPopup("QALB TECH India");
  L.marker([40.7128, -74.0060]).addTo(map).bindPopup("QALB TECH USA");
  L.marker([51.5074, -0.1278]).addTo(map).bindPopup("QALB TECH UK");
</script>

</body>
</html>
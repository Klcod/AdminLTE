(function () {
    "use strict";
    
    var map = L.map('mapa').setView([19.58346, -88.040791], 16);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([19.58346, -88.040791]).addTo(map)
        .bindPopup('GDLWebCamp 2022 <br> Boletos ya disponibles')
        .openPopup();
})();
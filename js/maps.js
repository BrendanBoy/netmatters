// make this into a loop

var map = L.map('map1', {scrollWheelZoom: false}).setView([52.23531839388951, 0.15372890001719028], 17);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoicmFuZG9tZXhjZXNzMjMiLCJhIjoiY2wxbTJrNWUwMGZycTNrbW13bmQ4bXVrNCJ9.XeeZ507mr2iT2we56z5l9Q'
}).addTo(map);
var marker = L.marker([52.23531839388951, 0.15372890001719028]).addTo(map);
marker.bindPopup("Unit 1.28<br>St John's Innovation Centre<br>Cowley road<br>Milton<br>Cambridge<br>CB4 0WS");

var map = L.map('map2', {scrollWheelZoom: false,}).setView([52.576068159815094, 1.1365811273521154], 17);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoicmFuZG9tZXhjZXNzMjMiLCJhIjoiY2wxbTJrNWUwMGZycTNrbW13bmQ4bXVrNCJ9.XeeZ507mr2iT2we56z5l9Q'
}).addTo(map);
var marker = L.marker([52.576068159815094, 1.1365811273521154]).addTo(map);
marker.bindPopup("Unit 15<br>Penfold Drive<br>Gateway 11 Business Park<br>Wymondham<br>Norfolk<br>NR18 0WZ");


var map = L.map('map3', {scrollWheelZoom: false}).setView([52.555938376449944, 1.713048771089214], 17);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoicmFuZG9tZXhjZXNzMjMiLCJhIjoiY2wxbTJrNWUwMGZycTNrbW13bmQ4bXVrNCJ9.XeeZ507mr2iT2we56z5l9Q'
}).addTo(map);
var marker = L.marker([52.555938376449944, 1.713048771089214]).addTo(map);
marker.bindPopup("Suite F23<br>Beacon Innovation Centre<br>Beacon Park<br>Gorleston<br>Great Yarmouth<br>Norfolk NR31 7RA");
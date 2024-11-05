// init aos
AOS.init();

//init splide
document.addEventListener('DOMContentLoaded', function () {
    new Splide('#modal-carousel').mount();
});

// prevent product's buttons from redirect
const productButtons = document.querySelectorAll('.btn-product');

for (const btn of productButtons) {
    btn.addEventListener('click', e => {
        e.preventDefault();
    })
}

// animate product's button
const productCards = document.querySelectorAll(".product-card");

// initial function for showing btn when product's card hovered / unhovered
function showBtn(btn) {
    console.log("🚀 ~ showBtn ~ btn:", btn)
    btn.classList.add("showing");
}

function unshowBtn(btn) {
    console.log("🚀 ~ unshowBtn ~ btn:", btn)
    btn.classList.remove("showing");
}

// Function to update btn's visibility when mobile vs non-mobile
function updateButtonsVisibility() {
    let w = window.innerWidth;

    if (w > 400) {
        for (const card of productCards) {
            const btn = card.querySelector('.btn-product');
            btn.classList.remove("showing");

            card.addEventListener("mouseover", () => [
                btn.classList.add("showing")
            ]);

            card.addEventListener("mouseout", () => {
                btn.classList.remove("showing");
            });
        }
    } else {
        for (const card of productCards) {
            const btn = card.querySelector('.btn-product');
            btn.classList.add("showing");

            card.removeEventListener("mouseover", () => [
                btn.classList.add("showing")
            ]);

            card.removeEventListener("mouseout", () => {
                btn.classList.remove("showing");
            });
        }
    }
}

// Add event listener for window resize
window.addEventListener('resize', updateButtonsVisibility);

// Initial update
updateButtonsVisibility();

// init leaflet js map for footer
const map = L.map('map').setView([51.505, -0.09], 13);

const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

const marker = L.marker([51.5, -0.09]).addTo(map)
    .bindPopup('<b>Hello world!</b><br />I am a popup.').openPopup();

const circle = L.circle([51.508, -0.11], {
    color: 'red',
    fillColor: '#f03',
    fillOpacity: 0.5,
    radius: 500
}).addTo(map).bindPopup('I am a circle.');

const polygon = L.polygon([
    [51.509, -0.08],
    [51.503, -0.06],
    [51.51, -0.047]
]).addTo(map).bindPopup('I am a polygon.');


const popup = L.popup()
    .setLatLng([51.513, -0.09])
    .setContent('I am a standalone popup.')
    .openOn(map);

function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent(`You clicked the map at ${e.latlng.toString()}`)
        .openOn(map);
}

map.on('click', onMapClick);
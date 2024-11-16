//init splide
document.addEventListener('DOMContentLoaded', function () {
    new Splide('#modal-carousel-private-cinema').mount();
    new Splide('#modal-carousel-self-photo').mount();
    new Splide('#modal-carousel-meeting-room').mount();
});

// init aos
AOS.init();

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
// init AOS
AOS.init();

// init splide
let splide = new Splide('#main-carousel', {
    pagination: true,
});

// get all thumbnail and current active thumbnail
let thumbnails = document.getElementsByClassName('thumbnail');
let current;

// add click event for thumbnail to be sync with carousel
for (let i = 0; i < thumbnails.length; i++) {
    initThumbnail(thumbnails[i], i);
}


function initThumbnail(thumbnail, index) {
    thumbnail.addEventListener('click', function () {
        splide.go(index);
    });
}

// add class for active thumbnail whenever carousel is moved or mounted
splide.on('mounted move', function () {
    let thumbnail = thumbnails[splide.index];


    if (thumbnail) {
        if (current) {
            current.classList.remove('is-active');
        }


        thumbnail.classList.add('is-active');
        current = thumbnail;
    }
});

// init splide
splide.mount();
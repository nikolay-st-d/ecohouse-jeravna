document.addEventListener('DOMContentLoaded', function () {
    const galleryThumbs = document.querySelectorAll('.gallery-thumb img');
    const overlay = document.getElementById('gallery-overlay');

    galleryThumbs.forEach((thumb) => {
        thumb.addEventListener('click', function () {
            const fullImg = document.createElement('img');
            fullImg.src = this.src;
            fullImg.alt = this.alt;
            fullImg.classList.add('full-image');

            overlay.innerHTML = '';
            overlay.appendChild(fullImg);
            overlay.style.display = 'flex';

            overlay.addEventListener('click', function () {
                overlay.style.display = 'none';
                overlay.innerHTML = '';
            });
        });
    });
});

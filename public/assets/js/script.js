
document.addEventListener('DOMContentLoaded', () => {
    const images = document.querySelectorAll('.lightbox');
    images.forEach(image => {
        image.addEventListener('click', () => openLightbox(image))
    })
})

function openLightbox(image) {
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightbox-image');

    lightboxImage.src = image.getAttribute('src');
    lightbox.classList.remove('hidden');
    setTimeout(() => {
        lightbox.classList.remove('opacity-0');
        lightbox.classList.add('opacity-100');
    }, 50);

    const closeBtn = document.getElementById('close-btn');
    closeBtn.addEventListener('click', closeLightbox);
    lightbox.addEventListener('click', event => {
        if (event.target === lightbox) {
            closeLightbox();
        }
    });
}

function closeLightbox() {
    const lightbox = document.getElementById('lightbox');
    lightbox.classList.remove('opacity-100');
    lightbox.classList.add('opacity-0');

    setTimeout(() => lightbox.classList.add('hidden'), 500);
}
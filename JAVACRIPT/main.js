const galleryItems = document.querySelectorAll('.gallery-item');
const lightbox = document.querySelector('.lightbox');
const lightboxImg = document.querySelector('.lightbox-content');
const closeBtn = document.createElement('span');
const nextBtn = document.createElement('span');
const prevBtn = document.createElement('span');

let currentIndex = 0;

galleryItems.forEach((item, index) => {
  item.addEventListener('click', () => {
    currentIndex = index;
    openLightbox();
  });
});

closeBtn.classList.add('close');
closeBtn.innerHTML = '&times;';
closeBtn.addEventListener('click', closeLightbox);

nextBtn.classList.add('arrow', 'next');
nextBtn.innerHTML = '&#10095;';
nextBtn.addEventListener('click', showNextImage);

prevBtn.classList.add('arrow', 'prev');
prevBtn.innerHTML = '&#10094;';
prevBtn.addEventListener('click', showPreviousImage);

document.addEventListener('keydown', function(event) {
  if (lightbox.style.display === 'flex') {
    if (event.key === 'ArrowRight') {
      showNextImage();
    } else if (event.key === 'ArrowLeft') {
      showPreviousImage();
    } else if (event.key === 'Escape') {
      closeLightbox();
    }
  }
});

lightbox.appendChild(closeBtn);
lightbox.appendChild(nextBtn);
lightbox.appendChild(prevBtn);

lightbox.addEventListener('click', function(event) {
  if (event.target === lightbox) {
    closeLightbox();
  }
});

function openLightbox() {
  lightbox.style.display = 'flex';
  showImage(currentIndex);
}

function closeLightbox() {
  lightbox.style.display = 'none';
}

function showNextImage() {
  currentIndex = (currentIndex + 1) % galleryItems.length;
  showImage(currentIndex);
}

function showPreviousImage() {
  currentIndex = (currentIndex - 1 + galleryItems.length) % galleryItems.length;
  showImage(currentIndex);
}

function showImage(index) {
  const imgSrc = galleryItems[index].querySelector('img').src;
  lightboxImg.src = imgSrc;
}

import PhotoSwipeLightbox from 'photoswipe/lightbox';
import 'photoswipe/style.css';

const lightbox = new PhotoSwipeLightbox({
  gallery: '.js-certificates',
  children: 'a',
  pswpModule: () => import('photoswipe'),
});

lightbox.init();

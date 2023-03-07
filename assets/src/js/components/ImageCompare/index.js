import ImageCompare from 'image-compare-viewer';
import 'image-compare-viewer/src/styles/index.scss';

import './ImageCompare.scss';

const viewers = document.querySelectorAll('.image-compare');

const options = {
  controlColor: '#ffffff',
  controlShadow: false,
  addCircle: true,
  addCircleBlur: false,
  smoothing: false,
};

viewers.forEach((element) => {
  let view = new ImageCompare(element, options).mount();
});

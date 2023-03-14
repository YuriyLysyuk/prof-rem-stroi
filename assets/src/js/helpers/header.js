const header = document.querySelector('.js-header');
const watchHeader = document.querySelector('.js-watch-header');

function obCallback(payload) {
  if (payload[0].isIntersecting) {
    header.classList.remove('header_fixed');
  } else {
    header.classList.add('header_fixed');
  }
}

const ob = new IntersectionObserver(obCallback);

ob.observe(watchHeader);

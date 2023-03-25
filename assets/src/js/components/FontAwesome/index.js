import { library, dom } from '@fortawesome/fontawesome-svg-core';

// Brands
import { faWhatsapp } from '@fortawesome/free-brands-svg-icons/faWhatsapp';
import { faVk } from '@fortawesome/free-brands-svg-icons/faVk';
import { faInstagram } from '@fortawesome/free-brands-svg-icons/faInstagram';
import { faOdnoklassniki } from '@fortawesome/free-brands-svg-icons/faOdnoklassniki';
import { faYoutube } from '@fortawesome/free-brands-svg-icons/faYoutube';
import { faFacebookSquare } from '@fortawesome/free-brands-svg-icons/faFacebookSquare';
import { faTiktok } from '@fortawesome/free-brands-svg-icons/faTiktok';

// Solid
import { faEnvelope } from '@fortawesome/free-solid-svg-icons/faEnvelope';
import { faPhone } from '@fortawesome/free-solid-svg-icons/faPhone';
import { faLocationDot } from '@fortawesome/free-solid-svg-icons/faLocationDot';
import { faAngleRight } from '@fortawesome/free-solid-svg-icons/faAngleRight';
import { faUser } from '@fortawesome/free-solid-svg-icons/faUser';

const icons = [
  faWhatsapp,
  faVk,
  faInstagram,
  faOdnoklassniki,
  faYoutube,
  faFacebookSquare,
  faTiktok,
  faEnvelope,
  faPhone,
  faLocationDot,
  faAngleRight,
  faUser,
];

library.add(icons);
dom.watch();

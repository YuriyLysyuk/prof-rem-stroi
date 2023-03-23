import { library, dom } from '@fortawesome/fontawesome-svg-core';

// Brands
import { faWhatsapp } from '@fortawesome/free-brands-svg-icons/faWhatsapp';

// Solid
import { faEnvelope } from '@fortawesome/free-solid-svg-icons/faEnvelope';
import { faPhone } from '@fortawesome/free-solid-svg-icons/faPhone';
import { faLocationDot } from '@fortawesome/free-solid-svg-icons/faLocationDot';

const icons = [faWhatsapp, faEnvelope, faPhone, faLocationDot];

library.add(icons);
dom.watch();

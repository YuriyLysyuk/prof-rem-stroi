/**
 * js-phone-mask — класс для маски телефона
 */

import IMask from 'imask';

const phoneMaskOptions = {
  mask: '+{7} (000) 000-00-00',
};

document.addEventListener('DOMContentLoaded', () => {
  initPhoneMask();
});

function initPhoneMask(node) {
  const phoneMaskNodes = document.querySelectorAll('.js-phone-mask');

  phoneMaskNodes.forEach((phoneMaskNode) => {
    // ограничение по длине
    phoneMaskNode.setAttribute('minlength', 18);
    phoneMaskNode.setAttribute('maxlength', 18);

    const phoneMask = IMask(phoneMaskNode, phoneMaskOptions);
  });
}

// Объект со всеми модалками
const modalsObj = {};
const overlay = document.querySelector('.js-overlay');

document.addEventListener('DOMContentLoaded', () => {
  const modals = document.querySelectorAll('[data-modal]');
  const openModalBtns = document.querySelectorAll('[data-modal-open]');
  const closeModalBtns = document.querySelectorAll('[data-modal-close]');

  modals.forEach((modal) => {
    const modalName = modal.dataset.modal;

    modalsObj[modalName] = modal;
  });

  // События
  openModalBtns.forEach((btn) => {
    btn.addEventListener('click', openModal);
  });

  closeModalBtns.forEach((btn) => {
    btn.addEventListener('click', closeModal);
  });

  overlay.addEventListener('click', closeAllModals);

  document.addEventListener('keydown', ({ key }) => {
    if (key === 'Escape') {
      closeAllModals();
    }
  });
});

// Функции
function openModal(event) {
  event.preventDefault();

  const modalName = event.currentTarget.dataset.modalOpen;

  if (!isModalExist(modalName)) return;

  modalsObj[modalName].classList.remove('hidden');
  overlay.classList.remove('hidden');
}

function closeModal(event) {
  const modalName = event.currentTarget.dataset.modalClose;

  if (!isModalExist(modalName)) return;

  modalsObj[modalName].classList.add('hidden');
  overlay.classList.add('hidden');
}

function closeAllModals() {
  for (const modalName in modalsObj) {
    if (!modalsObj[modalName].classList.contains('hidden')) {
      modalsObj[modalName].classList.add('hidden');
    }
  }

  if (!overlay.classList.contains('hidden')) {
    overlay.classList.add('hidden');
  }
}

function isModalExist(modalName) {
  if (Object.hasOwn(modalsObj, modalName)) {
    return true;
  }

  console.error(`Модалки с именем ${modalName} не существует`);

  return false;
}

document.addEventListener('DOMContentLoaded', () => {
  // Ко всем ссылкам, содержащим только # добавляем атрибут
  // для открытия модалки с обратным звонком
  const emptyLinks = document.querySelectorAll('a[href="#"]');

  emptyLinks.forEach((link) => {
    link.dataset.modalOpen = 'callback';
  });
});

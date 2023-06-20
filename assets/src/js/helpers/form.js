document.addEventListener('DOMContentLoaded', () => {
  const formNodes = document.querySelectorAll('.js-form');

  formNodes.forEach((formNode) => {
    formNode.addEventListener('submit', onSubmitForm);
  });
});

function onSubmitForm(e) {
  e.preventDefault();

  const form = this;
  const formAction = '/wp-content/themes/prof-rem-stroi/mail.php';
  const formData = new FormData(form);

  const errorNode = this.querySelector('.js-error');

  fetch(formAction, {
    method: 'POST',
    body: formData,
  })
    .then((response) => response.json())
    .then(({ status, message }) => {
      if (status === 'success') {
        console.log('ToDo: добавить цель Яндекс Метрики');
        console.log('ToDo: добавить редирект на страницу спасибо');

        hideError(errorNode);
      } else {
        showError(errorNode, message);
      }
    })
    .catch((error) => console.log('Error: ', error));
}

function showError(node, message) {
  if (node) {
    node.textContent = message;
    node.classList.remove('error_hidden');
  } else {
    console.error(message);
  }
}

function hideError(node) {
  if (node === null) return;

  node.textContent = '';
  node.classList.add('error_hidden');
}

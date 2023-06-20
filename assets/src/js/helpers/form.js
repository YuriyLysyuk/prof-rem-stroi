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

        hideError(errorNode);
        redirectToThankYouPage();
        form.reset();
      } else {
        showError(errorNode, message);
      }
    })
    .catch((error) => console.log('Error: ', error));
}

// Показать ошибку
function showError(node, message) {
  if (node) {
    node.textContent = message;
    node.classList.remove('error_hidden');
  } else {
    console.error(message);
  }
}

// Скрыть ошибку
function hideError(node) {
  if (node === null) return;

  node.textContent = '';
  node.classList.add('error_hidden');
}

// Вызов функции редиректа на страницу спасибо
function redirectToThankYouPage() {
  if (window?.prsOptions?.thankYouPage) {
    setTimeout(() => {
      window.location.assign(window.prsOptions.thankYouPage);
    }, 0);
  } else {
    console.log(
      'Добавьте ссылку на страницу Спасибо в window.prsOptions.thankYouPage'
    );
  }
}

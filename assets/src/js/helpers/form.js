document.addEventListener('DOMContentLoaded', () => {
  const formNodes = document.querySelectorAll('.js-form');

  formNodes.forEach((formNode) => {
    formNode.addEventListener('submit', onSubmitForm);
  });
});

function onSubmitForm(e) {
  e.preventDefault();

  const form = this;
  const formAction = '/wp-content/themes/prof-rem-stroi/integration/mail.php';
  const formData = new FormData(form);

  const errorNode = this.querySelector('.js-error');

  fetch(formAction, {
    method: 'POST',
    body: formData,
  })
    .then((response) => response.json())
    .then(({ status, message }) => {
      if (status === 'success') {
        reachYMFormGoal();
        hideError(errorNode);
        redirectToThankYouPage();
        form.reset();
      } else {
        showError(errorNode, message);
      }
    })
    .catch((error) => console.log(error));
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

// Срабатывание Яндекс Цели при успешной 
function reachYMFormGoal() {
  const errors = [];
  const ymNumber = window?.prsOptions?.ym?.number;
  const ymFormGoal = window?.prsOptions?.ym?.formGoal;

  if (!ymNumber) {
    errors.push(
      'Добавьте счетчик номера Яндекс Метрики в window.prsOptions.ym.number'
    );
  }

  if (!ymFormGoal) {
    errors.push(
      'Добавьте название цели Яндекс Метрики для успешной отправки формы window.prsOptions.ym.formGoal'
    );
  }

  if (typeof ym === 'undefined') {
    errors.push('Убедитесь что счетчик Яндекс Метрики установлен');
  }

  if (errors.length) {
    errors.forEach((error) => console.log(error));
  } else {
    ym(ymNumber, ymFormGoal);
  }
}

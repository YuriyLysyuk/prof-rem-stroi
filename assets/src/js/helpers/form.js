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

  fetch(formAction, {
    method: 'POST',
    body: formData,
  })
    .then((response) => response.json())
    .then(({ status }) => {
      if (status === 'success') {
        console.log('ToDo: добавить цель Яндекс Метрики');
        console.log('ToDo: добавить редирект на страницу спасибо');
      }
    })
    .catch((error) => console.log('Error: ', error));
}

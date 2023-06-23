// Объект со всеми модалками

document.addEventListener('DOMContentLoaded', () => {
  const saleDateNodes = document.querySelectorAll('.js-sales-date');
  const saleDate = getLastDateInNextMonth();

  saleDateNodes.forEach((node) => {
    node.textContent = saleDate.toLocaleDateString();
  });
});

function getLastDateInNextMonth() {
  const date = new Date();
  date.setMonth(date.getMonth() + 1, 1);
  date.setDate(date.getDate() - 1);

  return date;
}

document.addEventListener('DOMContentLoaded', () => {
  const category_1 = document.getElementById('category-1');
  const category_2 = document.getElementById('category-2');
  const products_1 = document.getElementById('products-1');
  const products_2 = document.getElementById('products-2');

  category_1.addEventListener('click', () => {
    products_1.style.display = 'flex';
    products_2.style.display = 'none';

    category_1.style.background = '#ef4444';
    category_1.style.color = '#ffffff';
    category_1.style.border = '2px #ef4444 solid'

    category_2.style.background = '#ffffff';
    category_2.style.color = '#000000';
    category_2.style.border = '2px #000000 solid'
  });

  category_2.addEventListener('click', () => {
    products_1.style.display = 'none';
    products_2.style.display = 'flex';

    category_2.style.background = '#ef4444';
    category_2.style.color = '#ffffff';
    category_2.style.border = '2px #ef4444 solid'

    category_1.style.background = '#ffffff';
    category_1.style.color = '#000000';
    category_1.style.border = '2px #000000 solid'
  });
});
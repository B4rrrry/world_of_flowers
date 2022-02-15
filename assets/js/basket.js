basketInit();
function basketInit() {
  const radioBtns = document.querySelectorAll('.basket-data__list-radio');
  // boxes 
  const boxes = document.querySelectorAll('.box-basket'),
    boxesWrap = document.querySelectorAll('.box-basket-wrap')
  boxes.forEach((btn, i) => {
    btn.addEventListener('click', () => {
      if (btn.checked == true) {
        boxesWrap[i].classList.add('box-basket-wrap--active')
      } else {
        boxesWrap[i].classList.remove('box-basket-wrap--active')
      }
    })
  })
  console.log(boxes)
  // radio 
  radioBtns.forEach(item => {
    item.addEventListener('click', () => {
      for (let i = 0; i < radioBtns.length; i++) {
        radioBtns[i].checked = false;
      }
      item.checked = true;
    })
  })
  // count 
  const countMin = document.querySelectorAll('.basket-list__count-btn--min'),
    countPls = document.querySelectorAll('.basket-list__count-btn--plus'),
    countVal = document.querySelectorAll('.basket-list__count'),
    productPrice = document.querySelectorAll('.basket-list__price span'),
    productFprice = document.querySelectorAll('.basket-list__price');
  let totalReq = document.querySelector('.basket-total__list-price span'),
    countPrice = document.querySelector('.basket-total__list-count span'),
    totalPrice = document.querySelector('.basket-total__list-total-price span');
  console.log(productPrice);
  // min 
  countMin.forEach((btn, i) => {
    btn.addEventListener('click', () => {
      let value = Number(countVal[i].textContent),
        productPriceVal = Number(productPrice[i].textContent);
      console.log(productPriceVal)
      if (value == 1) {
        alert('Вы не можете уменьше количество меньше 1 товара');
      } else {
        if (value != 1) {
          value -= 1;
          countVal[i].textContent = value;
          productPrice[i].textContent = productFprice[i].dataset.price * value;
          updateBasket();
        }
      }
    })
  })
  // plus 
  countPls.forEach((btn, i) => {
    btn.addEventListener('click', () => {
      let value = Number(countVal[i].textContent),
        productPriceVal = Number(productPrice[i].textContent);
      console.log(productPriceVal)
      value += 1;
      countVal[i].textContent = value;
      productPrice[i].textContent = productFprice[i].dataset.price * value;
      updateBasket();
    })
  })
  // sum 
  function updateBasket() {
    let sum = 0,
      count = 0;
    productPrice.forEach(price => {
      sum += Number(price.textContent)
    })

    countVal.forEach(countItem => {
      count += Number(countItem.textContent)
    })
    totalReq.textContent = sum;
    countPrice.textContent = count;
  }
  function discount(value) {
    totalPrice.textContent = Math.floor(Number(totalReq.textContent) * (value / 100));
  }

  $(function(){
    //2. Получить элемент, к которому необходимо добавить маску
    $("#basket-phone").mask("+7(999) 999-9999");
    $("#basket-phone-pol").mask("+7(999) 999-9999");
    $("#basket-name").mask("aaaaaaaaaaaaaaa");
    $("#basket-pol").mask("aaaaaaaaaaaaaaa");
    $("#basket-email").mask("**********@aaaaaaa.aaaaa");
  });
}

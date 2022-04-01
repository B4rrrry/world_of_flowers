const btnClose = document.querySelectorAll(".basket-list__delete-btn"),
  items = document.querySelectorAll(".basket-list__item");

btnClose.forEach((btn, i) => {
  btn.addEventListener("click", () => {
    let searchParams = new URLSearchParams();
    let id = btn.children[0].dataset.boquetId;
    searchParams.set("itemId", id);

    let promise = fetch("/processing/deleteItem.php", {
      method: "POST",
      body: searchParams,
    });

    items[i].remove();
    updatePrice()
  });
});
function updatePrice() {
  let totalPrice = document.querySelector(
      ".basket-total__list-price span"
    ),
    allPrice = document.querySelector(
      ".basket-total__list-total-price span"
    ),
    count = document.querySelector('.basket-total__list-count');
  let allPrices = document.querySelectorAll(".basket-list__price span");
  let finalPrice = 0;
 
  allPrices.forEach((price) => {
    finalPrice += Number(price.textContent);
 
  });
  console.log(finalPrice);
  count.textContent = allPrices.length;
  totalPrice.textContent = finalPrice;
  allPrice.textContent = finalPrice;
}

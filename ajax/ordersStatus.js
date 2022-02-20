let orders = document.querySelectorAll(".order-status");
let sendStatus;
let orderID;

orders.forEach((order) => {
  order.addEventListener("click", () => {
    if (order.textContent == "Не обработан") {
      order.textContent = "Обработан";
      sendStatus = order.textContent;
    } else {
      order.textContent = "Не обработан";
      sendStatus = order.textContent;
    }

    orderID = order.dataset.orderid;
    let searchParams = new URLSearchParams();
    searchParams.set("status", sendStatus);
    searchParams.set("id", orderID);

    let promise = fetch("/processing/ordersStatusHandler.php", {
      method: "POST",
      body: searchParams,
    });
  });
});

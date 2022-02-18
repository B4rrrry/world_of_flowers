let items = document.querySelectorAll(".queries-data__status");
let send;
let itemID;

items.forEach((item) => {
  item.addEventListener("click", () => {
    if (item.textContent == "Не обработан") {
      item.textContent = "Обработан";
      send = item.textContent;
    } else {
      item.textContent = "Не обработан";
      send = item.textContent;
    }

    itemID = item.dataset.queryid;
    let searchParams = new URLSearchParams();
    searchParams.set("status", send);
    searchParams.set("id", itemID);

    let promise = fetch("/processing/phoneQueriesHandler.php", {
      method: "POST",
      body: searchParams,
    });
  });
});

let btns = document.querySelectorAll(".fav-add-btn");
let innerResult = document.querySelector(".favorites-list__bottom");

btns.forEach((btn) => {
  btn.addEventListener("click", () => {
    let itemId = btn.dataset.favitemid;

    let searchParams = new URLSearchParams();
    searchParams.set("itemId", itemId);

    let promise = fetch("/processing/favAddToCardHandler.php", {
      method: "POST",
      body: searchParams,
    });

    promise
      .then((response) => {
        return response.text();
      })
      .then((text) => {
        innerResult.innerHTML = text;
      });
  });
});

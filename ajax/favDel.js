let delBtns = document.querySelectorAll(".del-btn");

delBtns.forEach((delBtn) => {
  delBtn.addEventListener("click", () => {
    let bId = delBtn.dataset.favitemid;

    let searchParams = new URLSearchParams();
    searchParams.set("bId", bId);

    let promise = fetch("/processing/delFromFavHandler.php", {
      method: "POST",
      body: searchParams,
    });
  });
});

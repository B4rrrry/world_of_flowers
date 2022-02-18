let btnArray = document.querySelectorAll('.buy__favorites');

btnArray.forEach((btn) => {
    btn.addEventListener('click', () => {
        let searchParams = new URLSearchParams();
        searchParams.set('favProdId', btn.dataset.favProdId);

        let promise = fetch('/processing/favouriteHandler.php', {
            method: 'POST',
            body: searchParams,
        });
    });
});
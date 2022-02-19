let sender = document.getElementById('buySender');
let innerResult = document.querySelector('.product__price-wrap');

sender.addEventListener('click', function(event) { 
    let itemId = sender.dataset.item;

    let searchParams = new URLSearchParams();
    searchParams.set('itemId', itemId);

    let promise = fetch('/processing/addToCartHandler.php', {
        method: 'POST',
        body: searchParams,
    });

    promise.then(
        response => {
            return response.text();
        }
    ).then(
        text => {
            innerResult.innerHTML = text;
        }
    );
});
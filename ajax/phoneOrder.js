let senderPhoneOrder = document.getElementById('orderCallForm');
let phoneOrderResult = document.querySelector('.modal__request-form');

senderPhoneOrder.addEventListener('submit', function(event) { 
    let clientName = document.querySelector('.modal__request-name').value;
    let clientPhone = document.querySelector('.modal__request-phone').value;

    let searchParams = new URLSearchParams();
    searchParams.set('name', clientName);
    searchParams.set('phone', clientPhone);

    let promise = fetch('/processing/phoneOrderHandler.php', {
        method: 'POST',
        body: searchParams,
    });

    promise.then(
        response => {
            return response.text();
        }
    ).then(
        text => {
            phoneOrderResult.innerHTML = text;
        }
    );

    event.preventDefault();
});
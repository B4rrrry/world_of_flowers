let senderPhoneOrder = document.getElementById('orderCallForm');
let phoneOrderResult = document.querySelector('.modal__request-form');

senderPhoneOrder.addEventListener('submit', function(event) { 
    let clientName = document.querySelector('.modal__request-name').value;
    let clientPhone = document.querySelector('.modal__request-phone').value;
    event.preventDefault();
    if(clientName.trim() != "" && clientPhone.value.trim() != "") {
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
        setTimeout(() => {
            location.reload()
        }, 2000);

    }
    else {
        alert('Поля не могут быть пустыми!');
    }
});
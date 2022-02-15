let sender = document.getElementById('newsletter');
let innerResult = document.querySelector('.newsletterForm');

sender.addEventListener('submit', function(event) { 
    let name = document.querySelector('.newsletter-name').value;
    let email = document.querySelector('.newsletter-email').value;

    let searchParams = new URLSearchParams();
    searchParams.set('name', name);
    searchParams.set('email', email);

    let promise = fetch('processing/newsletterHandler.php', {
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

    event.preventDefault();
});
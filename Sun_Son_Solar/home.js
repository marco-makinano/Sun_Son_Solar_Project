
const quoteForm = document.getElementById('quoteForm');
const quoteMessage = document.getElementById('quoteMessage');

quoteForm.addEventListener('submit', function (event) {
    event.preventDefault();   

    const name = quoteForm.fullname.value;
    quoteMessage.innerHTML =
        '<div class="form-message success">Thank you, ' + name +
        '! We received your request and will get back to you soon.</div>';

    quoteForm.reset();
});

const loginForm = document.getElementById('homeLoginForm');

loginForm.addEventListener('submit', function (event) {
    event.preventDefault();


    window.location.href = 'Products.html';
});

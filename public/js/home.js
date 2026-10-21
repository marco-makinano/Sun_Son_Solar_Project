const quoteForm = document.getElementById('quoteForm');
const quoteMessage = document.getElementById('quoteMessage');

if (quoteForm) {
    quoteForm.addEventListener('submit', function (event) {
        event.preventDefault();   

        const name = quoteForm.fullname.value;
        if (quoteMessage) {
            quoteMessage.innerHTML =
                '<div class="form-message success">Thank you, ' + name +
                '! We received your request and will get back to you soon.</div>';
        }

        quoteForm.reset();
    });
}
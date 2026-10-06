const CURRENT_PASSWORD_PLACEHOLDER = 'password123';

const form = document.getElementById('passwordForm');
const messageBox = document.getElementById('passwordMessage');


form.addEventListener('submit', function (event) {
    event.preventDefault();   
    messageBox.innerHTML = '';

    const currentPassword = form.currentPassword.value;
    const newPassword = form.newPassword.value;
    const confirmNewPassword = form.confirmNewPassword.value;

    if (currentPassword !== CURRENT_PASSWORD_PLACEHOLDER) {
        alert('Current password is incorrect.', 'error');
        return;
    }

    if (newPassword.length < 8) {
        alert('New password must be at least 8 characters.', 'error');
        return;
    }

    if (newPassword !== confirmNewPassword) {
        alert('New passwords and confirm password do not match.', 'error');
        return;
    }

    alert('Password updated!', 'success');
    form.reset();
});

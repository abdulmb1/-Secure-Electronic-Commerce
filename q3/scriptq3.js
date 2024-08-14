document.addEventListener('DOMContentLoaded', () => {
    const togglePassword = document.querySelector('.pw_hide');
    const passwordInput = document.querySelector('#password');

    togglePassword.addEventListener('click', () => {
        // Toggle the type attribute using a ternary operator
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);

        // Toggle the eye/eye-slash icon
        togglePassword.classList.toggle('uil-eye-slash');
        togglePassword.classList.toggle('uil-eye');
    });
});

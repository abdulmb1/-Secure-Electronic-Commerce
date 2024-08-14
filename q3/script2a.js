document.addEventListener('DOMContentLoaded', () => {
    // Password toggle functionality
    const togglePasswordIcons = document.querySelectorAll('.pw_hide');
    const passwordInputs = document.querySelectorAll('.input_box input[type="password"]');

    togglePasswordIcons.forEach((icon, index) => {
        icon.addEventListener('click', () => {
            // Toggle the type attribute using a ternary operator
            const type = passwordInputs[index].getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInputs[index].setAttribute('type', type);

            // Toggle the eye/eye-slash icon
            icon.classList.toggle('uil-eye-slash');
            icon.classList.toggle('uil-eye');
        });
    });
});

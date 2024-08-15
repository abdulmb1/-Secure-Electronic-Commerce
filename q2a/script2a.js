document.addEventListener('DOMContentLoaded', () => {
    // Password toggle functionality
    const togglePasswordIcons = document.querySelectorAll('.pw_hide');
    const passwordInputs = document.querySelectorAll('.input_box input[type="password"]');

    togglePasswordIcons.forEach((icon, index) => {
        icon.addEventListener('click', () => {
            const type = passwordInputs[index].getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInputs[index].setAttribute('type', type);
            icon.classList.toggle('uil-eye-slash');
            icon.classList.toggle('uil-eye');
        });
    });

    // Form submission and reCAPTCHA validation
    const form = document.getElementById('registrationForm');
    const errorMessage = document.getElementById('error-message');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting the traditional way

        const formData = new FormData(form);

        fetch('process2a.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            if (data.includes('Please complete the CAPTCHA')) {
                errorMessage.textContent = 'Please complete the CAPTCHA';
                errorMessage.style.display = 'block';
            } else if (data.includes('CAPTCHA was completed successfully!')) {
                // Redirect to the success page
                window.location.href = 'success.php';
            } else {
                // In case of other issues, show an error message
                errorMessage.textContent = 'An error occurred. Please try again.';
                errorMessage.style.display = 'block';
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});

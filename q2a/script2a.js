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
            } else {
                // Handle success, for example, redirect or display success message
                errorMessage.textContent = 'CAPTCHA was completed successfully!';
                errorMessage.style.color = 'green';
                errorMessage.style.display = 'block';
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});


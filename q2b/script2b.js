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
        event.preventDefault();

        // Generate the reCAPTCHA token
        grecaptcha.ready(function() {
            grecaptcha.execute('6LdSniYqAAAAANxaaT5ChelCVhtMCb76aK4yulB1', {action: 'submit'}).then(function(token) {
                document.getElementById('g-recaptcha-response').value = token;

                // Proceed with form submission after token is generated
                const formData = new FormData(form);

                fetch('process2b.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.text())
                .then(data => {
                    if (data.includes('CAPTCHA validation failed')) {
                        errorMessage.textContent = 'CAPTCHA validation failed. Please try again.';
                        errorMessage.style.display = 'block';
                        errorMessage.style.color = 'red';
                    } else {
                        // Redirect to a success page
                        window.location.href = 'success.php';
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            });
        });
    });
});





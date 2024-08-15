# SEC-A1
## Overview

This document provides an overview of the E-Commerce application implemented to protect against spam and unauthorised access. The application is secured using Google reCAPTCHA (both v2 and v3) to prevent fake user account creation and incorporates both email-based and Google’s 2-step verification multi-factor authentication (MFA) to protect user accounts.

## Technologies Used
    PHP: Server-side scripting language used for backend logic.
    Apache Server: Used to serve the PHP application.
    Google reCAPTCHA v2 and v3: Used to prevent spam and automated account creation.
    PHPMailer: PHP library used to send emails for email-based MFA.
    HTML/CSS: Used to structure and style the web pages.

## Running the application
To run the application, make sure you have an Apache server configured to run PHP code. This can be done using XAMPP, MAMP, or any other LAMP/WAMP stack. Then, on your web browsers search bar, go to http://localhost/sec-a1/X/Y, replacing X with any specifided folder then Y with login page.

## How it works

### User Registration with reCAPTCHA:
    reCAPTCHA v2: During registration, the user is presented with a CAPTCHA challenge. Once the user completes the challenge their response is verified on the server side before the registration process continues.
    
    reCAPTCHA v3: The user’s interaction with the registration form is scored in the background. If the score indicates human behavior, the registration proceeds; otherwise, it may be flagged or blocked.

### Login and Email-Based MFA:
    When a registered user attempts to log in, they provide their email and password. If the credentials are valid, a 6-digit code is generated and sent to their email address. The user must enter this code on a subsequent verification page. If the entered code matches the one generated, the login is successful, and the user is redirected to the application dashboard.

### Google’s 2-Step Verification (2FA):
    After logging in with their email and password, the user is prompted to enter a verification code from their authenticator app. This code is validated against Google’s 2FA service. If valid, the user gains access to their account; if not, they are denied access.


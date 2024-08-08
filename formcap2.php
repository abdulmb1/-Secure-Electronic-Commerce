<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h2>Create Account</h2>
        <form action="process_account.php" method="post">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <div class="requirements">Minimum 10 characters. Must include uppercase, lowercase, and number(s).</div>
            
            <label for="retype_password">Re-type Password</label>
            <input type="password" id="retype_password" name="retype_password" required>
            
            <div class="captcha">
                <input type="checkbox" id="captcha" name="captcha" required>
                <label for="captcha">I'm not a robot</label>
            </div>
            
            <button type="submit">Create Account</button>
        </form>
    </div>
</body>
</html>
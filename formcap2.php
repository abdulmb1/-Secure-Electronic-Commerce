<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .container {
            width: 300px;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #4CAF50;
        }
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        .requirements {
            font-size: 12px;
            color: #888;
        }
        .captcha {
            margin: 10px 0;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
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
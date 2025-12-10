<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - DormEase</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            background: #F6F1EA;
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login {
            text-align: center;
            width: %;
            max-width: 250px;
        }

        .login h2 {
            font-size: 28px;
            font-weight: 600;
            color: #D29A6A;
            margin-bottom: 5px;
        }

        .subtitle {
            font-size: 13px;
            color: #A78D7A;
            margin-bottom: 35px;
        }

        .login label {
            display: block;
            text-align: left;
            font-size: 14px;
            color: #C38C62;
            margin-top: 12px;
            margin-bottom: 4px;
        }

        .login input[type="text"], .login input[type="password"] {
            width: 230px;
            padding: 14px;
            border-radius: 10px;
            border: 2px solid #E3C4A8;
            font-size: 14px;
            margin-bottom: 10px;
            background: white;
        }

        .login input::placeholder {
            color: #b5b5b5;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 6px;
            margin-top: 5px;
            margin-bottom: 25px;
        }

        button {
            width: 100%;
            padding: 14px;
            background: #D29A6A;
            border: none;
            border-radius: 30px;
            font-size: 15px;
            color: white;
            cursor: pointer;
            box-shadow: 0px 4px 8px #d9c5b3;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .login p {
            font-size: 13px;
            color: #A78D7A;
        }

        .login a {
            color: #C38C62;
            text-decoration: none;
            font-weight: 500;
        }
    </style>
</head>

<body>

    <div class="login">
        <h2>Welcome Back!</h2>
        <p class="subtitle">Login to continue your search</p>

        <label>Email</label>
        <input type="text" placeholder="Enter your Email" required>

        <label>Password</label>
        <input type="password" placeholder="Enter your Password" required>

        <div class="remember">
            <input type="checkbox" id="remember">
            <label for="remember" style="margin:0;">Remember me</label>
        </div>

        <button onclick="window.location.href='Tenant_Dashboard.php'">Login</button>
        <p>Don't have an Account? <a href="TenantSignUp.php">Sign up</a></p>
    </div>

</body>
</html>
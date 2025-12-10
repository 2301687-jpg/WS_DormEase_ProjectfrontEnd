<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - DormEase</title>

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

        .signup {
            text-align: center;
            width: %;
            max-width: 250px;
        }

        .signup h2 {
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

        .signup input[type="text"], .signup input[type="password"] {
            width: 230px;
            padding: 14px;
            border-radius: 10px;
            border: 2px solid #E3C4A8;
            font-size: 14px;
            margin-bottom: 10px;
            background: white;
        }

        .signup input::placeholder {
            color: #b5b5b5;
        }

        .signup label {
            display: block;
            text-align: left;
            font-size: 14px;
            color: #C38C62;
            margin-top: 12px;
            margin-bottom: 4px;
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

        .signup p {
            font-size: 13px;
            color: #A78D7A;
        }

        .signup a {
            color: #C38C62;
            text-decoration: none;
            font-weight: 500;
        }

    </style>
</head>

<body>

    <div class="signup">

        <h2>DormEase</h2>
        <p class="subtitle">Your next home, found with ease</p>

        <label>Full Name</label>
        <input type="text" placeholder="Enter your full name" required>

        <label>Email</label>
        <input type="text" placeholder="Enter your email" required>

        <label>Phone Number</label>
        <input type="text" placeholder="Phone Number" required>

        <label>Password</label>
        <input type="password" placeholder="Enter your password" required>

        <label>Confirm Password</label>
        <input type="text" placeholder="Confirm your password" required>

        <button onclick="window.location.href='Tenant_Dashboard.php'">Sign Up</button>

        <p>Already have an account? <a href="TenantLogin.php">Login</a></p>
    </div>

</body>
</html>
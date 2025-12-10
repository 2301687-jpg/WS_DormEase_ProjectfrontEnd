<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .logout-box {
            background: white;
            padding: 40px 50px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        h2 {
            margin-bottom: 10px;
            font-size: 24px;
        }

        p {
            margin-bottom: 20px;
            color: #555;
        }

        .logout-btn {
            display: inline-block;
            background: #e63946;
            color: white;
            padding: 12px 30px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 16px;
            transition: 0.2s ease;
        }

        .logout-btn:hover {
            background: #d62839;
        }

        .cancel-link {
            display: block;
            margin-top: 15px;
            color: #555;
            text-decoration: none;
            font-size: 14px;
        }

        .cancel-link:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

    <div class="logout-box">
        <h2>Are you sure you want to logout?</h2>
        <p>You will need to log in again to continue.</p>

        <a href="TenantLogin.php" class="logout-btn">Logout</a>
        <a href="#" class="cancel-link">Cancel</a>
    </div>

</body>
</html>
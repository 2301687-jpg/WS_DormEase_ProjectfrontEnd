<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DormEase - Get Started</title>

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
            flex-direction: column;
        }

        .logo-box {
            width: 85px;
            height: 85px;
            background: #E7D8C8;
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 18px;
        }

        .logo-box img {
            width: 92px;
        }

        h1 {
            font-size: 32px;
            margin: 0;
            font-weight: 600;
        }

        h1 span {
            color: #D6A781;
        }

        p {
            color: #6f6f6f;
            margin-top: 8px;
            margin-bottom: 50px;
        }

        button {
            width: 260px;
            padding: 14px;
            background: #D6A781;
            border: none;
            border-radius: 30px;
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0px 5px 10px #cdb8a5;
        }

        button:hover {
            background: #ca946f;
        }
    </style>
</head>

<body>

    <div class="logo-box">
        <img src="images/hut.png">
    </div>

    <h1>Dorm<span>Ease</span></h1>
    <p class="subtitle">Your next home, found with ease</p>

    <button onclick="window.location.href='Choose_Role.php'">Get Started</button>

</body>
</html>
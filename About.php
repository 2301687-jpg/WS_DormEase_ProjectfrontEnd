<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About DormEase</title>
    <style>
        body   {
            font-family: "Inter", Arial, sans-serif;
            background-color: #f5f1ea;
        }

        .header {
            position: relative;
            padding: 20px;
            text-align: center;
            font-size: 20px;
            font-weight: 600;
        }

        .container {
            padding: 30px;
            font-size: 15px;
            text-decoration: none;
            color: #555;
        }

        .h3 {
            font-size: 28px;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .p {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 20px;
            color: #333;
            max-width: 500px;
        }

        .back {
            position: absolute;
            top: 24px;
            left: 24px;
            cursor: pointer;
            z-index: 10;
        }

        .back img {
            width: 24px;
            height: 24px;
        }

    </style>
</head>
<body>
    <div class="header">
        <h2 class="title-info">About</h2>
        <div class="back" onclick="history.back()">
                <img src="images/less-than" alt="">
    </div>
    <div class="container">
        <h2>About DormEase</h2>
            <p>DormEase is a Website designed to help students and renters easily find
                dormitories and boarding houses near their school or workplace. </p>
        
            <p>We provide updated listings, clear details, real photos so you can quickly
                 discover a place that fits your needs and budget.</p>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - DormEase</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f6f2; 
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .main-container {
            width: 100%;
            max-width: 400px;
            padding: 24px;
        }

        .header {
            width: 100%;
            display: flex;
            justify-content: flex-start;
            margin-bottom: 24px;
        }

        .back-btn {
            background: none;
            border: none;
            font-size: 28px;
            color: #4a4a4a;
            cursor: pointer;
            padding: 4px;
            font-weight: 300;
        }
        
        h1 {
            font-size: 24px;
            font-weight: 700;
            color: #333;
            margin-bottom: 8px;
        }

        .subtitle {
            font-size: 16px;
            color: #666;
            margin-bottom: 32px;
        }

        .role-card {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding: 24px;
            border-radius: 16px;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
            margin-bottom: 16px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.06);
        }

        .role-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 10px -1px rgba(0, 0, 0, 0.15);
        }

        .role-card img {
            width: 24px;
            height: 24px;
            margin-bottom: 8px;
            object-fit: contain;
        }

        .role-card h2 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .role-card .description {
            font-size: 14px;
            font-weight: 400;
            line-height: 1.4;
            margin-bottom: 0; 
        }

        .Tenant-container {
            background-color: #d4a574; 
            color: white;
            border: 2px solid #d4a574;
        }

        .Tenant-container h2, 
        .Tenant-container .description {
            color: black;
        }
        
        .Owner-container {
            background-color: white;
            color: #333;
            border: 2px solid #ddd;
        }

        .Owner-container h2,
        .Owner-container .description {
            color: #333;
        }
        
        .role-card img[src*="GetStarted_icon.jpeg"] {
            background-color: #ffffff99; 
            border-radius: 50%;
        }

        .role-card img[src*="GetStarted_hut.jpeg"] {
            background-color: #4a4a4a;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <div class="main-container">
        <div class="header">
            <button class="back-btn">‹</button>
        </div>

        <h1>Welcome! How will you use our app?</h1>
        <p class="subtitle">Choose your role to personalize your experience.</p>

        <div class="role-card Tenant-container">
            <a href="Login-Page.php" style="text-decoration: none;">
            <img src="images/user.png" alt="Profile Icon">
            <h2>I'm a Tenant</h2>
            <p class="description">Looking to find a dorm or boarding house to rent.</p>
        </div>

        <div class="role-card Owner-container">
            <img src="images/home.png" alt="Hut Icon">
            <h2>I'm an Owner</h2>
            <p class="description">Looking to list my property and manage tenants.</p>
        </div>
    </div>
</body>
</html>
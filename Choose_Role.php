<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Your Role</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Roboto, sans-serif;
            background: #f5f5f5;
            padding: 20px;
        }

        .container {
            max-width: 490px;
            margin: 60px auto;
        }

        .back-btn {
            color: #888;
            font-size: 24px;
            text-decoration: none;
            margin-bottom: 30px;
            display: inline-block;
        }

        h1 {
            font-size: 26px;
            font-weight: 600;
            color: #222;
            margin-bottom: 10px;
        }

        p {
            font-size: 15px;
            color: #666;
            margin-bottom: 35px;
        }

        .role-option {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 20px;
            margin-bottom: 15px;
            cursor: pointer;
        }

        .role-option:hover {
            border-color: #bbb;
            transform: translateY(-6px);
        }

        .role-option.selected {
            background: #d9b08c;
            border-color: #d9b08c;
        }

        .role-header {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 6px;
        }

        .icon {
            font-size: 20px;
        }

        .role-title {
            font-size: 16px;
            font-weight: 600;
            color: #222;
        }

        .role-desc {
            font-size: 14px;
            color: #555;
            margin-left: 30px;
        }

        .role-option.selected .role-desc:hover {
            color: #333;

        }
    </style>
</head>

<body>
    <div class="container">
        <a href="GetStarted-Page.php"><i class="fa fa-arrow-left"></i></a>
        
        <h1>Welcome! How will you use our Website?</h1>
        <p>Choose your role to personalize your experience</p>

        <div class="role-option selected" onclick="window.location='TenantLogin.php'">
    <div class="role-header">
        <i class="fa fa-user"></i>
        <div class="role-title">I'm a Tenant</div>
    </div>
    <div class="role-desc">Looking to find a dorm or boarding house to rent.</div>
</div>

<div class="role-option" onclick="window.location='OwnerLogin.php'">
    <div class="role-header">
        <i class="fa fa-home"></i>
        <div class="role-title">I'm an Owner</div>
    </div>
    <div class="role-desc">Looking to list my property and manage tenants.</div>

        </div>

    </div>
</body>
</html>
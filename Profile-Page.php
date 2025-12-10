<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DormEase - My Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            margin: 0;
            padding: 0;
            background: #F6F1EA;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            padding: 20px;
        }

        .back {
            font-size: 24px;
            cursor: pointer;
            margin-bottom: 10px;
        }

        .back img {
            width: 30px;
            height: 30px;
        }

        h2 {
            text-align: center;
            font-size: 22px;
            font-weight: 600;
            margin: 5px 0 15px;
        }

        .profile-section {
            text-align: center;
            margin-bottom: 15px;
        }

        .profile-section img {
            width: 110px;
            height: 110px;
            border-radius: 50%;
        }

        .profile-name {
            font-size: 20px;
            font-weight: 600;
            margin-top: 8px;
        }

        .member {
            font-size: 13px;
            color: gray;
        }

        .card {
            background: white;
            padding: 18px;
            border-radius: 15px;
            box-shadow: 0 4px 8px #e3d8ce;
            margin-bottom: 20px;
        }

        .card-title {
            font-weight: 600;
            font-size: 16px;
            margin-bottom: 15px;
        }

        .info-item {
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .info-item:last-child {
            margin-bottom: 5px;
        }

        .info-item img {
            width: 26px;
        }

        .label {
            font-size: 13px;
            font-weight: 600;
        }

        .value {
            margin-top: 2px;
            font-size: 14px;
        }

        .activity-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 18px;
        }

        .activity-left {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .activity-left img {
            width: 26px;
        }

        .nav {
            position: fixed;
            bottom: 0;
            width: 100%;
            background: #fff;
            padding: 10px 0;
            display: flex;
            justify-content: space-around;
            border-top: 1px solid #d9d3cb;
        }

        .nav div {
            text-align: center;
            font-size: 12px;
            cursor: pointer;
        }

        .nav img {
            width: 24px;
        }

    </style>
</head>
<body>

<div class="container">

    <div class="back" onclick="history.back()">
        <img src="images/less-than" style="text-decoration: none;">
    </div>

    <h2>My Profile</h2>

    <div class="profile-section">
        <img src="images/profile-picture.png">
        <p class="profile-name">Brent Pagcaliwagan</p>
        <p class="member">Member since 2025</p>
    </div>

    <div class="card">
        <p class="card-title">Personal Information</p>
 
        <div class="info-item">
            <img src="images/user.png">
            <div>
                <p class="label">Full Name</p>
                <p class="value">Brent Pagcaliwagan</p>
            </div>
        </div>

        <div class="info-item">
            <img src="images/gmail.png">
            <div>
                <p class="label">Email</p>
                <p class="value">brentmercado@gmail.com</p>
            </div>
        </div>

        <div class="info-item">
            <img src="images/phone-call.png">
            <div>
                <p class="label">Phone Number</p>
                <p class="value">0954-558-6539</p>
            </div>
        </div>
    </div>

    <div class="card">
        <p class="card-title">My Activity</p>

        <div class="activity-item">
            <div class="activity-left">
                <img src="images/archive.png">
                <span>Archive</span>
            </div>
            <span>></span>
        </div>

        <div class="activity-item">
            <div class="activity-left">
                <img src="images/bookmark.png">
                <span>Favorites</span>
            </div>
            <span>></span>
        </div>
    </div>

</div>

<div class="nav">
    <div onclick="window.location.href='Tenant_Dashboard.php'"><i class="fa fa-home"><br>Home</div></i>
    <div onclick.window.location.href="Tenant_Messages.php'"><i class="fa fa-comment"><br>Messages</div></i>
    <div onclick.window.location.href="Tenant_Booking.php'"><i class="fa fa-list"><br>Bookings</div></i>
    <div onclick="window.location.href='Profile-Page.php'"><i class="fa fa-user"><br>Profile</div></i>
</div>

</body>
</html>
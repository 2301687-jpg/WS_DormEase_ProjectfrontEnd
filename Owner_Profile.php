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

        .card,
        .card-first,
        .card-second {
            background: white;
            padding: 18px;
            border-radius: 6px;
            box-shadow: 0 4px 8px #e3d8ce;
            margin-bottom: 20px;
            width: 300px;
        }

        .card-title {
            font-weight: 600;
            font-size: 16px;
            margin-bottom: 15px;
        }

        .info-icon {
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .info {
            width:20px;
        }

        .info-item:last-child {
            margin-bottom: 5px;
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

        .card-wrapper {
            display: flex;
            gap: 20px;
            justify-content: center;
            align-items: flex-start;
            flex-wrap: wrap;
            margin-top: 25px;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="back" onclick="history.back()">
        <img src="images/less-than">
    </div>

    <h2>My Profile</h2>

    <div class="profile-section">
        <img src="images/profile-picture">
        <p class="profile-name">Kenn Philip Silang</p>
        <p class="member">Owner since 2025</p>
    </div>

    <div class="card-wrapper">

        <div class="card">
            <p class="card-title">Personal Information</p>

            <div class="info-icon">
                <i class="fa fa-user"></i>
                <div>
                    <p class="label">Full Name</p>
                    <p class="value">Kenn Philip Silang</p>
                </div>
            </div>

            <div class="info-icon">
                <i class="fa fa-envelope"></i>
                <div>
                    <p class="label">Email</p>
                    <p class="value">KennSilang@gmail.com</p>
                </div>
            </div>

            <div class="info-icon">
                <i class="fa fa-phone"></i>
                <div>
                    <p class="label">Phone Number</p>
                    <p class="value">0964-788-6558</p>
                </div>
            </div>
        </div>

        <div class="card-second">
            <p class="card-title">Property Management Overview</p>
            <p>Dormitory</p>
            <p>Boarding House</p>
        </div>

        <div class="card-first">
            <p class="card-title">Total Properties</p>
            <p><strong>3</strong></p>
        </div>

    </div>

</div>

</body>
</html>

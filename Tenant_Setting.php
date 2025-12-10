<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings Prototype</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #e7e5df;
            padding: 40px;
            display: flex;
            justify-content: center;
        }

        /* WEBSITE FORMAT CONTAINER */
        .page-wrapper {
            width: 100%;
            max-width: 900px;      /* ✔ makes it a website layout */
            background: #f8f6f2;   
            padding: 40px 60px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0,0,0,0.08);
        }

        .container {
            padding: 20px;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 24px;
            padding: 0 8px;
            width: 100%;
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

        .header h1 {
            font-size: 26px;          
            font-weight: 700;
            color: #333;
            text-align: left;
            margin-left: 0;
            flex-grow: 1;
            padding-left: 10px;
        }

        .section {
            background: white;
            border-radius: 16px;
            padding: 20px 24px;
            margin-bottom: 24px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 
                        0 2px 4px -2px rgba(0, 0, 0, 0.06);
        }

        .section-title {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 10px;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .menu-item {
            display: flex;
            align-items: center;
            padding: 14px 0;
            cursor: pointer;
            transition: background-color 0.1s ease;
        }

        .menu-item:not(:last-child) {
            border-bottom: 1px solid #f0f0f0;
        }

        .menu-item:hover {
            background-color: #fcfcfc;
        }

        .menu-item .icon img {
            width: 28px;
            height: 28px;
            object-fit: contain;
            margin-right: 16px;
        }

        .menu-item .label {
            flex: 1;
            font-size: 17px;
            color: #333;
        }

        .arrow {
            color: #bbb;
            font-size: 20px;
            font-weight: 700;
        }

        .toggle {
            width: 50px;
            height: 26px;
            background-color: #e0e0e0;
            border-radius: 14px;
            position: relative;
            cursor: pointer;
        }

        .toggle.active {
            background-color: #d4a574;
        }

        .toggle::after {
            content: '';
            position: absolute;
            width: 22px;
            height: 22px;
            border-radius: 50%;
            background: white;
            top: 2px;
            left: 2px;
            transition: left 0.3s;
        }

        .toggle.active::after {
            left: 26px;
        }

        .action-btn-group {
            margin-top: 20px;
        }

        .action-btn {
            width: 100%;
            padding: 18px;
            border: none;
            border-radius: 12px;
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 14px;
            cursor: pointer;
        }

        .logout-btn {
            background-color: #e0b389;
            color: white;
        }

        .delete-btn {
            background-color: #d9534f;
            color: white;
        }
    </style>
</head>

<body>
    <div class="page-wrapper"> 
        <div class="container">
            <div class="back" onclick="history.back()">
                <img src="images/less-than" alt="">
            </div>
        </div>

        <div class="header">
            <h1>Settings</h1>
            <div style="width: 28px;"></div>
       </div>

        <div class="section">
            <div class="section-title">Account</div>
                
            <div class="menu-item">
                <div class="icon">
                    <img src="images/user.png" alt="Profile Icon">
                </div>
                <div class="label">Profile Information</div>
                <span>&gt;</span>
            </div>

            <div class="menu-item">
                <div class="icon">
                    <img src="images/gmail.png" alt="Email Icon">
                </div>
                <div class="label red-text">Change Email Address</div>
                <span>&gt;</span>
            </div>

                <div class="menu-item">
                    <div class="icon">
                        <img src="images/Cpassword" alt="Lock Icon">
                    </div>
                    <div class="label">Change Password</div>
                    <span>&gt;</span>
                </div>

                <div class="menu-item">
                    <div class="menu-item" onclick="window.location.href='Tenant_Verification1.php'">
                    <div class="icon">
                        <img src="images/verify.png" alt="Verified Icon">
                    </div>
                    <div class="label">Account Verification</div>   
                </div>
            </div>
    </div>

            <div class="section">
                <div class="section-title">Notifications</div>
                
                <div class="menu-item">
                    <div class="icon">
                        <img src="images/notification.png" alt="Bell Icon">
                    </div>
                    <div class="label">Push Notifications</div>
                    <div class="toggle active" onclick="this.classList.toggle('active')"></div>
                </div>

                <div class="menu-item">
                    <div class="icon">
                        <img src="images/online-booking.png" alt="Calendar Icon">
                    </div>
                    <div class="label">Booking Confirmations</div>
                    <div class="toggle active" onclick="this.classList.toggle('active')"></div>
                </div>

                <div class="menu-item">
                    <div class="icon">
                        <img src="images/new-email.png" alt="Message Icon">
                    </div>
                    <div class="label">New Messages</div>
                    <div class="toggle" onclick="this.classList.toggle('active')"></div>
                </div>
            </div>

            <div class="section">
                <div class="section-title">Community Standards and Legal policies</div>
                
                <div class="menu-item">
                    <div class="icon">
                        <img src="images/lock.png" alt="Security Icon">
                    </div>
                    <div class="label">Privacy Policy</div>
                    <span>&gt;</span>
                </div>

                <div class="menu-item">
                    <div class="icon">
                        <img src="images/handshake.png" alt="Diamond Icon">
                    </div>
                    <div class="label">Community Standards</div>
                    <span>&gt;</span>
                </div>
                    
                <div class="menu-item" onclick="window.location.href='About.php'">
                    <div class="icon">
                        <img src="images/hut.png" alt="Info Icon">
                    </div>
                <div class="label">About</div>
                    <span>&gt;</span>
                </div>
    </div>

            <div class="section">
                <div class="section-title">Preferences</div>
                
                <div class="menu-item">
                    <div class="icon">
                        <img src="images/language.png" alt="Globe Icon">
                    </div>
                    <div class="label">Language</div>
                    <span>&gt;</span>
                </div>

                <div class="menu-item">
                    <div class="icon">
                        <img src="images/adjust.png" alt="Content Settings Icon">
                    </div>
                    <div class="label">Content preferences</div>
                    <span>&gt;</span>
                </div>

                <div class="menu-item">
                    <div class="icon">
                        <img src="images/clock.png" alt="Time Icon">
                    </div>
                    <div class="label">Time Management</div>
                    <span>&gt;</span>
                </div>
            </div>

            <div class="container action-btn-group">
                <button class="action-btn logout-btn" onclick="window.location.href='TenantLogout.php'">Logout</button>
                <button class="action-btn delete-btn">Delete Account</button>
            </div>
        </div>
    </div>
</body>
</html>
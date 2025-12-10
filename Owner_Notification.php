<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications - Web Layout</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: #f4f5f7;
        }

        .navbar {
            width: 100%;
            background: white;
            padding: 18px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ddd;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .navbar-title {
            font-size: 22px;
            font-weight: 700;
            color: #d4a574;
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .nav-btn {
            font-size: 18px;
            cursor: pointer;
            color: #555;
            transition: 0.2s;
        }

        .nav-btn:hover {
            color: #000;
        }

        .page-wrapper {
            max-width: 900px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .section-label {
            font-size: 14px;
            font-weight: 600;
            color: #888;
            text-transform: uppercase;
            margin: 25px 0 10px;
        }

        .notification-card {
            background: white;
            padding: 18px;
            border-radius: 14px;
            margin-bottom: 14px;
            display: flex;
            align-items: center;
            gap: 18px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            transition: 0.2s;
            cursor: pointer;
        }

        .notification-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 18px rgba(0,0,0,0.12);
        }

        .icon-wrapper {
            width: 52px;
            height: 52px;
            background: #eee;
            border-radius: 12px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            flex-shrink: 0;
        }

        .icon-success {
            background: #e8f5e9;
            color: #2e7d32;
        }

        .icon-message {
            background: #fff3e0;
            color: #f57c00;
        }

        .icon-payment {
            background: #fff8e1;
            color: #f9a825;
        }

        .icon-calendar {
            background: #ffe0b2;
            color: #e65100;
        }

        .notification-title {
            font-size: 17px;
            font-weight: 600;
            color: #d4a574;
            
        }

        .notification-subtitle {
            font-size: 14px;
            color: #777;
            margin-top: 4px;
        }

        .unread-dot {
            width: 10px;
            height: 10px;
            background: #ff5252;
            border-radius: 50%;
            margin-left: auto;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <div class="navbar-title">DormEase</div>

    </div>

    <div class="page-wrapper">

    <div class="section-label">Today</div>

        <div class="notification-card">
            <i class="fa fa-calendar"></i>
            <div>
                <div class="notification-title">New Booking Request.</div>
                <div class="notification-subtitle">From John Doe for Room 202</div>
            </div>
            <div class="unread-dot"></div>
        </div>

    <div class="notification-card">
            <i class="fa fa-comments icon-message"></i>
            <div>
                <div class="notification-title">New Message</div>
                <div class="notification-subtitle">Tenant 2</div>
            </div>
            <div class="unread-dot"></div>
        </div>

        <div class="section-label">Yesterday</div>

        <div class="notification-card">
            <i class="fa fa-money"></i>
            <div>
                <div class="notification-title">Payment Recieved</div>
                <div class="notification-subtitle">Payment from Tenant 4...</div>
            </div>
        </div>

     <div class="section-label">Last 7 Days</div>

        <div class="notification-card">
            <i class="fa fa-calendar"></i>
            <div>
                <div class="notification-title">New Message</div>
                <div class="notification-subtitle">From Tenant 3</div>
            </div>
        </div>

        <div class="notification-card">
            <i class="fa fa-comments icon-message"></i>
            <div>
                <div class="notification-title">New Message</div>
                <div class="notification-subtitle">From tenant 1...</div>
            </div>
        </div>

    </div>

</body>
</html>
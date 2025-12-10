<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Management Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #F6F1EA;
            color: #333;
        }

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 220px;
            height: 100vh;
            background: #fff;
            border-right: 1px solid #e0e0e0;
            padding: 24px 0;
        }

        .nav-menu {
            list-style: none;
        }

        .nav-item {
            padding: 12px 20px;
            cursor: pointer;
            color: #666;
            font-size: 14px;
            border-left: 3px solid transparent;
        }

        .nav-item a {
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .nav-item:hover {
            background: #f5f5f5;
            color: #333;
        }

        .nav-item.active {
            background: #f5f5f5;
            color: #333;
            border-left-color: #333;
        }

        .header {
            position: fixed;
            top: 0;
            left: 220px;
            right: 0;
            height: 60px;
            background: #fff;
            border-bottom: 1px solid #e0e0e0;
            padding: 0 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .user-section {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .main {
            margin-left: 220px;
            margin-top: 60px;
            padding: 30px;
        }

        .page-title {
            font-size: 24px;
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }

        .page-subtitle {
            font-size: 14px;
            color: #666;
            margin-bottom: 30px;
        }

        .status-label {
            color: #2e7d32;
            text-decoration: underline;
        }

        .cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 20px;
        }

        .card {
            background: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 15px;
            padding: 24px;
            transition: 0.2s ease;
        }

        .card:hover {
            transform: translateY(-6px);
        }

        .card-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 20px;
            padding-bottom: 16px;
            border-bottom: 1px solid #f0f0f0;
        }

        .card-title {
            font-size: 16px;
            font-weight: 600;
            color: #C38C62;
        }

        .info-row {
            margin-bottom: 12px;
            font-size: 14px;
            color: #666;
            line-height: 1.5;
        }

        .info-number {
            font-weight: 600;
            color: #333;
        }

        .info-number.alert {
            color: #d32f2f;
        }

        .info-number.success {
            color: #2e7d32;
        }

        .progress-bar-wrapper {
            margin-bottom: 16px;
        }

        .progress-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
            font-size: 14px;
            color: #666;
        }

        .progress-bar {
            width: 100%;
            height: 6px;
            background: #f0f0f0;
            border-radius: 3px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: #333;
        }

        .revenue-note {
            font-size: 14px;
            color: #666;
            margin-top: 12px;
        }

        .revenue-increase {
            color: #2e7d32;
            font-weight: 600;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background: #C38C62;
            color: #fff;
            border: none;
            border-radius: 30px;
            font-size: 14px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <aside class="sidebar">
        <ul class="nav-menu">
            <li class="nav-item active">Owner Dashboard</li>
            <li class="nav-item"><a href="Owner_Profile.php">Owner Profile</a></li>
            <li class="nav-item"><a href="Owner_Property.php">Owner Property</a></li>
            <li class="nav-item"><a href="Owner_Messages.php">Messages</a></li>
        </ul>
    </aside>

    <header class="header">
        <div class="user-section">
            <a href="Owner_Notification.php">
                <i class="fa fa-bell"></i>
            </a>
            <span class="user-name">Owner</span>
        </div>
    </header>

    <main class="main">
        <h1 class="page-title">Hello, Owner!</h1>
        <p class="page-subtitle">Your Dormitory - <span class="status-label">Open for Bookings</span></p>

        <div class="cards-container">

            <div class="card">
                <div class="card-header">
                    <i class="fa fa-edit"></i>
                    <h2 class="card-title">Booking Management</h2>
                </div>

                <div class="card-content">
                    <div class="info-row">
                        <span class="info-number alert">3</span> new booking requests
                    </div>
                    <div class="info-row">
                        <span class="info-number alert">5</span> upcoming check-ins this week
                    </div>
                </div>

                <a href="Owner_ViewBooking.php">
                    <button class="btn">View</button>
                </a>
            </div>


            <div class="card">
                <div class="card-header">
                    <i class="fa fa-bed"></i>
                    <h2 class="card-title">Room Management</h2>
                </div>

                <div class="card-content">
                    <div class="info-row">
                        <span class="info-number success">8 of 10</span> rooms occupied</div>

                    <div class="info-row">
                        <span class="info-number success">2</span> rooms available for booking</div>
                    </div>

                <a href="Owner_Room_Management.php">
                    <button class="btn">View</button></a>
            </div>


            <div class="card">
                <div class="card-header">
                    <i class="fa fa-file-text-o"></i>
                    <h2 class="card-title">Report Management</h2>
                </div>

                <div class="card-content">
                    <div class="progress-bar-wrapper">
                        <div class="progress-info">
                            <span>Occupancy Rate</span>
                            <span class="progress-value">80%</span>
                        </div>

                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 80%"></div>
                        </div>
                    </div>
                    <div class="revenue-note">Monthly revenue is up by <span class="revenue-increase">12%</span></div>
                </div>

                <a href="Owner_Report_Management.php">
                <button class="btn">View</button>
                </a>

            </div>
        </div>
    </main>
</body>
</html>
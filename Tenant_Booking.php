<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f0;
        }

        .container {
            max-width: 480px;
            margin: 0 auto;
            min-height: 20vh;
        }

        .header {
            width: 100%;
            padding: 20px 40px;
            background-color: #fff;
            border-bottom: 1px solid #ddd;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .header h1 {
            font-size: 26px;
            font-weight: 700;
            color: #D29A6A;
        }

        .bookings-list {
            padding: 0 20px;
        }

        .booking-card {
            background: white;
            border-radius: 16px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: 0.2s ease;
        }

        .status {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .status.confirmed {
            color: #00a650;
        }

        .status.pending {
            color: #f5a623;
        }

        .booking-content {
            display: flex;
            gap: 15px;
        }

        .booking-info {
            flex: 1;
        }

        .dorm-name {
            font-size: 16px;
            font-weight: 600;
            color: #000;
            margin-bottom: 3px;
        }

        .dorm-type {
            font-size: 14px;
            color: #666;
            font-style: italic;
            margin-bottom: 8px;
        }

        .booking-date {
            font-size: 13px;
            color: #999;
            margin-bottom: 15px;
        }

        .booking-actions {
            display: flex;
            gap: 10px;
        }

        .btn {
            padding: 8px 16px;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            cursor: pointer;
            font-weight: 500;
        }

        .btn-view {
            background: #d4a574;
            color: white;
        }

        .btn-cancel {
            background: #e8e8e0;
            color: #666;
        }

        .dorm-image {
            width: 380px;
            height: 200px;
            border-radius: 12px;
            object-fit: cover;
            flex-shrink: 0;
        }

        .content {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .booking-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 4px 16px rgba(0,0,0,0.15);
        }
    </style>
</head>
<body>

        <div class="header">
                <h1>Bookings</h1>
            </div>
        </div>

        <div class="content">

        <div class="bookings-list">

            <div class="booking-card">
                <div class="status confirmed">Confirmed</div>

                <div class="booking-content">
                    <div class="booking-info">
                        <div class="dorm-name">G2J Dormitory</div>
                        <div class="dorm-type">Student Dormitory</div>
                        <div class="booking-date">July 26, 2025 - Dec 15, 2025</div>
                        <div class="booking-actions">

                            <button class="btn btn-view">View Details</button>
                            <button class="btn btn-cancel">Cancel</button>
                        </div>
                    </div>
                    <img src="images/dorm7" alt="Dormitory" class="dorm-image">
                </div>
            </div>

            <div class="booking-card">
                <div class="status pending">Pending</div>
                <div class="booking-content">
                    <div class="booking-info">
                        <div class="dorm-name">Campus Dormitory</div>
                        <div class="dorm-type">University</div>
                        <div class="booking-date">July 26, 2025 - Dec 15, 2025</div>
                        <div class="booking-actions">
                            <button class="btn btn-view">View Details</button>
                            <button class="btn btn-cancel">Cancel</button>
                        </div>
                    </div>
                    <img src="images/dorm8.jpg" alt="Dormitory" class="dorm-image">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
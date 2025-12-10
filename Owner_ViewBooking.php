<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Management</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: auto;
        }

        .header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .back-btn {
            background: #ddd;
            border: none;
            padding: 8px 14px;
            font-size: 20px;
            cursor: pointer;
        }

        h1 {
            font-size: 24px;
            color: #C38C62;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 15px;
            margin-bottom: 25px;
        }

        .stat-card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        .stat-number {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 6px;
        }

        .stat-label {
            color: #777;
            font-size: 14px;
        }

        .tabs {
            margin-bottom: 20px;
        }

        .tab-btn {
            padding: 10px 18px; 
            border: 1px solid #c9a57b; 
            border-radius: 30px;
            background: white; 
            color: #c9a57b; 
            cursor: pointer; 
            margin-right: 8px;
        }

        .tab-btn.active {
            background: #c9a57b;
            color: white;
        }

        .section-title {
            margin-bottom: 10px;
            font-size: 18px;
            font-weight: bold;
            color: #C38C62;
        }

        .booking-card, .confirmation-card {
            background: white;
            border: 1px solid #ccc;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 12px;
        }

        .booking-name, .confirmation-name {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 6px;
        }

        .booking-date, .booking-room, .confirmation-details {
            font-size: 14px;
            margin-bottom: 6px;
            color: #555;
        }

        .booking-actions {
            display: flex;
            gap: 10px;
        }

        .btn-confirm, .btn-decline {
            padding: 8px 16px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-confirm {
            background: #c9a57b;
            color: white;
        }

        .btn-decline {
            background: #eee;
            color: #c9a57b;

        }

        .calendar-icon {
            width: 38px;
            height: 38px;
            background: #c9a57b;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
        }

        .confirmation-card {
            display: flex;
            align-items: center;
        }

        @media (max-width: 600px) {
            .booking-actions {
                flex-direction: column;
            }

            .btn-confirm, .btn-decline {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="header">
            <button class="back-btn" onclick="history.back()">‹</button>
            <h1>Booking Management</h1>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">12</div>
                <div class="stat-label">Rooms Available</div>
            </div>

            <div class="stat-card">
                <div class="stat-number">76%</div>
                <div class="stat-label">Occupancy Rate</div>
            </div>
        </div>

        <div class="tabs">
            <button class="tab-btn active">Requests</button>
            <button class="tab-btn">Confirmed</button>
        </div>

        <div class="section">
            <div class="section-title">Booking Requests</div>

            <div class="booking-card">
                <div class="booking-name">Michael Angelo</div>
                <div class="booking-date">Mar 15, 2025 - Sep 15, 2025</div>
                <div class="booking-room">Room 203 - Single Occupancy</div>

                <div class="booking-actions">
                    <button class="btn-confirm">Confirm</button>
                    <button class="btn-decline">Decline</button>
                </div>
            </div>

            <div class="booking-card">
                <div class="booking-name">Bongbong M.</div>
                <div class="booking-date">Mar 18, 2025 - Jul 15, 2025</div>
                <div class="booking-room">Room 202 - Single Occupancy</div>

                <div class="booking-actions">
                    <button class="btn-confirm">Confirm</button>
                    <button class="btn-decline">Decline</button>
                </div>
            </div>

            <div class="booking-card">
                <div class="booking-name">Zaldy Co</div>
                <div class="booking-date">Apr 27, 2025 - Jun 15, 2025</div>
                <div class="booking-room">Room 201 - Single Occupancy</div>

                <div class="booking-actions">
                    <button class="btn-confirm">Confirm</button>
                    <button class="btn-decline">Decline</button>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="section-title">Booking Confirmations</div>

            <div class="confirmation-card">
                <div class="calendar-icon">
                    <i class="fa fa-calendar"></i>
                </div>

                <div>
                    <div class="confirmation-name">David Lee</div>
                    <div class="confirmation-details">Check-in: March 20, 2025 - Room 302</div>
                </div>
            </div>

            <div class="confirmation-card">
                <div class="calendar-icon">
                    <i class="fa fa-calendar"></i>
                </div>


                <div>
                    <div class="confirmation-name">Jacky Chan</div>
                    <div class="confirmation-details">Check-in: March 22, 2025 - Room 101</div>
                </div>
            </div>

        </div>

    </div>
</body>
</html>
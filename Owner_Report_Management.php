<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #f5f5f5;
            padding: 20px;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .header {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 30px;
        }

        .back-btn {
            background: none;
            border: none;
            color: #999;
            font-size: 28px;
            cursor: pointer;
            padding: 8;
        }

        .header h1 {
            font-size: 20px;
            font-weight: 600;
            color: #000;
        }

        .cards-row {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .cards-row .card {
            flex: 1 1 350px; 
            margin-bottom: 20px;
        }

        .card {
            background: white;
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .card-title {
            font-size: 16px;
            font-weight: 600;
            color: #000;
            margin-bottom: 5px;
        }

        .card-subtitle {
            font-size: 13px;
            color: #c4a57b;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: #000;
            margin-bottom: 8px;
        }

        select, input {
            width: 100%;
            padding: 12px 15px;
            border: none;
            background: #f5f5f5;
            border-radius: 25px;
            font-size: 14px;
            color: #666;
            appearance: none;
            cursor: pointer;
        }

        select {
            background-repeat: no-repeat;
            background-position: right 15px center;
            padding-right: 40px;
        }

        input {
            background-repeat: no-repeat;
            background-position: right 15px center;
        }

        .generate-btn {
            width: 100%;
            padding: 14px;
            background: #c4a57b;
            color: white;
            border: none;
            border-radius: 25px;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
        }

        .generate-btn:hover {
            background: #b39568;
        }

        .summary-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-top: 20px;
        }

        .summary-item {
            background: #faf8f5;
            padding: 20px;
            border-radius: 15px;
        }

        .summary-label {
            font-size: 13px;
            color: #c4a57b;
            margin-bottom: 8px;
        }

        .summary-value {
            font-size: 28px;
            font-weight: 700;
            color: #000;
            margin-bottom: 5px;
        }

        .summary-description {
            font-size: 12px;
            color: #666;
        }

        .summary-description.green {
            color: #4caf50;
        }

        .summary-description.red {
            color: #f44336;
        }

        .list-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 18px;
            background: #faf8f5;
            border-radius: 15px;
            margin-bottom: 12px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .list-item:hover {
            background: #f5f0e8;
        }

        .list-icon {
            width: 45px;
            height: 45px;
            background: white;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            flex-shrink: 0;
        }

        .list-content {
            flex: 1;
        }

        .list-title {
            font-size: 15px;
            font-weight: 600;
            color: #000;
            margin-bottom: 3px;
        }

        .list-subtitle {
            font-size: 12px;
            color: #c4a57b;
        }

        .list-arrow {
            color: #ccc;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <button onclick="history.back()" class="back-btn">
                <i class="fa fa-angle-left">
            </button></i>
            
            <h1>Report Management</h1>
        </div>

        <div class="cards-row">

            <div class="card">
                <h2 class="card-title">Generate Report Logs</h2>
                <p class="card-subtitle">Select a report type and date range to generate</p>

                <div class="form-group">
                    <label class="form-label">Report type</label>
                    <select>
                        <option>Booking Transaction Records</option>
                        <option>Payment Records</option>
                        <option>User Activity Logs</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label">Date Range</label>
                    <input type="text" value="Last 30 days" readonly>
                </div>

                <button class="generate-btn">Generate Report</button>
            </div>

            <div class="card">
                <h2 class="card-title">Booking System Summary</h2>
                <p class="card-subtitle">Quick overview of recent booking activities</p>

                <div class="summary-grid">
                    <div class="summary-item">
                        <div class="summary-label">Total Bookings</div>
                        <div class="summary-value">125</div>
                        <div class="summary-description">+15 this month</div>
                    </div>
                    <div class="summary-item">
                        <div class="summary-label">Pending Requests</div>
                        <div class="summary-value">4</div>
                        <div class="summary-description">Awaiting Confirmation</div>
                    </div>
                    <div class="summary-item">
                        <div class="summary-label">Confirmed</div>
                        <div class="summary-value">118</div>
                        <div class="summary-description green">Occupied</div>
                    </div>
                    <div class="summary-item">
                        <div class="summary-label">Cancellations</div>
                        <div class="summary-value">3</div>
                        <div class="summary-description red">Last 30 days</div>
                    </div>
                </div>
            </div>

            <div class="card">
                <h2 class="card-title">System Logs Database</h2>
                <p class="card-subtitle">View detailed system and activity logs</p>

                <div class="list-item">
                    <i class="fa fa-list"></i>
                    <div class="list-content">
                        <div class="list-title">Booking Records</div>
                        <div class="list-subtitle">All Transaction history</div>
                    </div>
                    <div class="list-arrow">›</div>
                </div>

                <div class="list-item">
                    <div class="list-icon">🕐</div>
                    <div class="list-content">
                        <div class="list-title">System Activity Logs</div>
                        <div class="list-subtitle">Verification, updates, etc</div>
                    </div>
                    <div class="list-arrow">›</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

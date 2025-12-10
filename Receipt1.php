<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful - Dormitory Booking</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f5f5f0 0%, #e8e8e0 100%);
            min-height: 100vh;
        }

        .navbar {
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px 0;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            font-size: 24px;
            font-weight: 700;
            color: #d4a574;
        }

        .nav-links {
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .nav-links a {
            color: #333;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #d4a574;
        }

        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 40px;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #666;
            text-decoration: none;
            font-size: 15px;
            margin-bottom: 30px;
            transition: color 0.3s;
        }

        .back-link:hover {
            color: #d4a574;
        }

        .content-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        .left-column {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .right-column {
            position: sticky;
            top: 20px;
            height: fit-content;
        }

        .success-card {
            background: white;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .success-icon {
            width: 100px;
            height: 100px;
            background: #00a650;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            animation: scaleIn 0.5s ease-out;
        }

        @keyframes scaleIn {
            from {
                transform: scale(0);
            }
            to {
                transform: scale(1);
            }
        }

        .checkmark {
            color: white;
            font-size: 60px;
            font-weight: bold;
        }

        .success-title {
            font-size: 32px;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .success-message {
            color: #999;
            font-size: 16px;
        }

        .receipt-card {
            background: white;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid #f0f0f0;
        }

        .receipt-item {
            display: flex;
            justify-content: space-between;
            padding: 18px 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .receipt-item:last-child {
            border-bottom: none;
        }

        .receipt-label {
            color: #666;
            font-size: 15px;
        }

        .receipt-value {
            color: #000;
            font-size: 15px;
            font-weight: 500;
            text-align: right;
        }

        .booking-card {
            background: white;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .dorm-info {
            margin-bottom: 20px;
        }

        .dorm-title {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .dorm-subtitle {
            font-style: italic;
            color: #666;
            font-size: 16px;
        }

        .dorm-location {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #666;
            font-size: 15px;
            margin-top: 10px;
        }

        .location-icon {
            color: #e74c3c;
            font-size: 18px;
        }

        .dorm-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .action-buttons {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .btn {
            flex: 1;
            padding: 16px 30px;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }

        .btn-primary {
            background: linear-gradient(135deg, #d4a574, #c89860);
            color: white;
            box-shadow: 0 4px 15px rgba(200, 152, 96, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(200, 152, 96, 0.4);
        }

        .btn-secondary {
            background: #f5f5f0;
            color: #666;
        }

        .btn-secondary:hover {
            background: #e8e8e0;
        }

        .share-section {
            background: white;
            padding: 25px;
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .share-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .share-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
        }

        .share-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 2px solid #e0e0e0;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .share-btn:hover {
            border-color: #d4a574;
            transform: translateY(-3px);
        }

        @media (max-width: 968px) {
            .content-wrapper {
                grid-template-columns: 1fr;
            }

            .right-column {
                position: static;
            }

            .nav-links {
                display: none;
            }
        }

        @media (max-width: 640px) {
            .container {
                padding: 0 20px;
            }

            .nav-container {
                padding: 0 20px;
            }

            .success-card {
                padding: 35px 25px;
            }

            .receipt-card,
            .booking-card {
                padding: 25px;
            }

            .action-buttons {
                flex-direction: column;
            }
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">DormReceipt</div>
        </div>
    </nav>

    <div class="container">
        <a href="Tenant_Dashboard.php" class="back-link">Back to Dashboard</a>

        <div class="content-wrapper">
            <div class="left-column">
                <div class="success-card">
                    <div class="success-icon">
                         <i class="fa fa-check checkmark"></i>
                    </div>

                    <div class="success-title">Payment Successful</div>
                    <div class="success-message">Your booking has been confirmed</div>
                </div>

                <div class="receipt-card">
                    <div class="card-title">Receipt</div>
                    <div class="receipt-item">
                        <span class="receipt-label">Total Amount Paid</span>
                        <span class="receipt-value">₱ 4,800</span>
                    </div>

                    <div class="receipt-item">
                        <span class="receipt-label">Date</span>
                        <span class="receipt-value">July 26, 2025</span>
                    </div>

                    <div class="receipt-item">
                        <span class="receipt-label">Payment Method</span>
                        <span class="receipt-value">Gcash</span>
                    </div>

                    <div class="receipt-item">
                        <span class="receipt-label">Booking Reference</span>
                        <span class="receipt-value">#SVD-8A4B2C</span>
                    </div>

                    <div class="receipt-item">
                        <span class="receipt-label">Transaction ID</span>
                        <span class="receipt-value">123456789ABCD</span>
                    </div>
                </div>
            </div>

            <div class="right-column">
                <div class="booking-card">
                    <div class="card-title">Booking Details</div>

                    <div class="dorm-info">
                        <div class="dorm-title">G2J Dormitory</div>
                        <div class="dorm-subtitle">Student Dormitory</div>
                        <div class="dorm-location">
                            <span class="location-icon"></span>
                            <span>548, Gulod Labac, Batangas City</span>
                        </div>
                    </div>

                    <img src="https://images.unsplash.com/photo-1555854877-bab0e564b8d5?w=800&q=80" alt="Dormitory Room" class="dorm-image">
                </div>
            </div>
    </body>
</html>
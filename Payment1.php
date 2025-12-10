<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking & Payment Details</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4efe9;
        }

        .header {
            width: 100%;
            padding: 20px 40px;
            background-color: #fff;
            border-bottom: 1px solid #ddd;
            display: flex;
            align-items: center;
            position: relative;
            gap: 15px;
        }

        .back-button {
            background: transparent;
            border: none;
            font-size: 32px;
            color: #999;
            cursor: pointer;
        }

        .header h1 {
            font-size: 28px;
            font-weight: 700;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            color: #d4a574;
        }

        .content {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .card {
            background: white;
            border-radius: 16px;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .dorm-title {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .dorm-subtitle {
            font-size: 14px;
            font-style: italic;
            color: #777;
            margin-left: 8px;
        }

        .dorm-location {
            margin: 10px 0 18px;
            color: #666;
            font-size: 15px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .dorm-image {
            width: 100%;
            height: 280px;
            border-radius: 14px;
            object-fit: cover;
        }

        .section-title {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 18px;
        }

        .cost-item {
            display: flex;
            justify-content: space-between;
            padding: 14px 0;
            border-bottom: 1px solid #eee;
            font-size: 16px;
        }

        .cost-item:last-child {
            border-bottom: none;
        }

        .cost-value {
            font-weight: 700;
        }

        .total-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 25px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }

        .total-label {
            font-size: 20px;
            font-weight: 700;
        }

        .total-amount {
            font-size: 26px;
            font-weight: 800;
        }

        .payment-methods {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            align-items: center;
        }

        .payment-secure {
            display: flex;
            align-items: center;
            gap: 6px;
            padding: 10px 14px;
            background: #f0f0f0;
            border-radius: 6px;
            font-size: 14px;
            color: #666;
        }

        .payment-img {
            width: 80px;     
            height: auto;    
            object-fit: contain;
            border-radius: 6px;
            background: #fff;
            padding: 6px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }

        .secure-icon { color: #00a650; }

        .confirm-button {
            display: block; 
            text-decoration: none; 
            width: 100%;
            padding: 18px;
            background: linear-gradient(135deg, #d4a574, #c89860);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 20px;
            font-weight: 700;
            cursor: pointer;
            margin-top: 5px;
            transition: 0.25s ease;
            text-align: center; 
        }
        
    </style>
</head>
<body>

    <div class="header">
        <h1>Booking & Payment Details</h1>
    </div>

    <div class="content">

        <div class="card">
            <div class="dorm-title">G2J Dormitory<span class="dorm-subtitle">Student Dormitory</span></div>
                <div class="dorm-location">548, Gulod Labac, Batangas City</div>
            <img src="https://images.unsplash.com/photo-1555854877-bab0e564b8d5?w=800&q=80" class="dorm-image">
        </div>

        <div class="card">
            <div class="section-title">Cost Breakdown</div>

            <div class="cost-item">
                <span>Rent (1 month)</span>
                <span class="cost-value">₱ 4,000</span>
            </div>

            <div class="cost-item">
                <span>Security Deposit (refundable)</span>
                <span class="cost-value">₱ 400</span>
            </div>

            <div class="cost-item">
                <span>One-time Service Fee</span>
                <span class="cost-value">₱ 100</span>
            </div>
        </div>

        <div class="total-section">
            <span class="total-label">Total Amount</span>
            <span class="total-amount">₱ 4,500</span>
        </div>

        <div class="card">
            <div class="section-title">Accepted Payment Methods</div>

            <div class="payment-methods">
                <img src="images/gcash.png" alt="GCash" class="payment-img">
                <img src="images/PayMaya.png" alt="PayMaya" class="payment-img">
                <img src="images/visa.png" alt="Visa" class="payment-img">

            </div>
            </div>
        <a href="Receipt1.php" class="confirm-button">Confirm & Pay</a>
    </div>
</body>
</html>
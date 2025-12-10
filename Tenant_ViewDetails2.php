<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeNest Dormitory</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Inter", sans-serif;
            background: #f0ede6;
            color: #333;
        }

        .website-header {
            width: 100%;
            padding: 18px 60px;
            background: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #ddd;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .website-header h1 {
            font-size: 26px;
            font-weight: 700;
            color: #d4a574;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 18px;
            font-size: 22px;
            cursor: pointer;
        }

        .header-actions i:hover {
            color: #d4a574;
        }

        .page-container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .content-card {
            background: white;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.1);
        }

        .title-section h2 {
            font-size: 28px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .subtitle {
            font-size: 18px;
            color: #888;
            font-style: italic;
            font-weight: 400;
        }

        .status {
            display: inline-block;
            margin-top: 8px;
            background: #e8f9f0;
            color: #00a650;
            padding: 6px 14px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 14px;
        }

        .location {
            display: flex;
            align-items: flex-start;
            gap: 8px;
            margin: 15px 0 20px;
            color: #555;
        }

        .location-icon {
            font-size: 20px;
        }

        .dorm-image {
            width: 100%;
            height: 320px;
            object-fit: cover;
            border-radius: 14px;
            margin-bottom: 20px;
        }

        .rating {
            display: flex;
            gap: 5px;
            margin-bottom: 15px;
        }

        .empty {
            color: #ccc;
        }

        .rating .fa {
            color: #ffcc00;
        }

        .price {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .room-type {
            font-size: 18px;
            color: #666;
            margin-bottom: 25px;
        }

        .section {
            margin-bottom: 25px;
        }

        .section h3 {
            font-size: 22px;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .section p {
            font-size: 16px;
            color: #555;
            line-height: 1.7;
        }

        .book-button {
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

        .book-button:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }

        .book-button:active {
            transform: scale(0.98);
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>
<body>

    <header class="website-header">
        <h1>Dorm Details</h1>

        <div class="header-actions">
            <i class="fa fa-home"></i>
            <i class="fa fa-bell"></i>
            <i class="fa fa-gear"></i>
        </div>
    </header>

    <div class="page-container">
        <div class="content-card">
            <div class="title-section">
                <h2>HomesNest Dormitory</h2>
                <span class="status">Open For Booking</span>
            </div>

            <div class="location">
                <span class="location-icon"></span>
                <span>262, Lawas, Batangas City</span>
            </div>

            <img class="dorm-image" src="images/dorm_img.jpg" alt="Dormitory">

            <div class="rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            </div>

            <div class="price">5,500/month</div>
            <div class="room-type">4-Person Shared Room</div>

            <div class="section">
                <h3>About This Place</h3>
                <p>A clean, secure, and accessible living space with essential amenities. Ideal for students and workers seeking a convenient location.</p>
            </div>

            <div class="section">
                <h3>Inclusion</h3>
                <p>Water included · Electricity included · Free WiFi 24/7 · Shared refrigerator · Common kitchen & dining area · no curfew · washing machine access · with Cabinet / Wardrobe.</p>
            </div>

            <div class="section">
                <h3>Available Slots</h3>
                <p>Available Beds: 2 out of 4</p>
            </div>

            <a href="Payment2.php" class="book-button">Book Now</a>
        </div>
    </div>
</body>
</html>
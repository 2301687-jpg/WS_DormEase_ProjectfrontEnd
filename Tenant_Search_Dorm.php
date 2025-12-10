<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Dormitory Search - Website Version</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Inter", Arial, sans-serif;
            background-color: #f5f1ea;
            color: #333;
            padding-bottom: 90px;
        }

        header {
            width: 100%;
            padding: 22px 50px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #f5f1ea;
            position: sticky;
            top: 0;
            z-index: 20;
        }

        .avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            overflow: hidden;
        }

        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .user-section {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .greeting {
            font-size: 26px;
            font-weight: 700;
        }

        .header-icons {
            display: flex;
            gap: 20px;
            font-size: 26px;
            cursor: pointer;
            align-items: center;
        }

        .search-wrapper {
            width: 100%;
            max-width: 900px;
            margin: 20px auto;
            padding: 0 40px;
        }

        .search-box {
            background: white;
            display: flex;
            align-items: center;
            padding: 14px 20px;
            border-radius: 30px;
            border: 2px solid #ccc;
            gap: 12px;
        }

        .search-box input {
            border: none;
            outline: none;
            flex: 1;
            font-size: 16px;
        }

        .results-header {
            width: 100%;
            max-width: 900px;
            margin: 20px auto 10px;
            padding: 0 40px;
            font-size: 22px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .info-icon {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 2px solid #333;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }

        .dorm-card {
            width: 100%;
            max-width: 900px;
            margin: 20px auto;
            background: white;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.1);
        }

        .dorm-image {
            width: 100%;
            height: 260px;
            object-fit: cover;
        }

        .dorm-header,
        .dorm-footer {
            padding: 18px 25px;
        }

        .dorm-title {
            font-size: 22px;
            font-weight: 700;
        }

        .dorm-type {
            color: #777;
            font-size: 15px;
            margin-bottom: 6px;
        }

        .status-badge {
            background: #e8f5e9;
            padding: 5px 14px;
            border-radius: 12px;
            color: #2e7d32;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 10px;
            display: inline-block;
        }

        .location {
            font-size: 14px;
            color: #666;
        }

        .rating .fa {
            color: #ffcc00;
            font-size: 20px;
        }

        .price {
            margin-top: 10px;
            font-size: 22px;
            font-weight: 700;
            color: #000;
        }

        .card-actions {
            margin-top: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .view-details-btn {
            display: inline-block;
            text-decoration: none;
            background: #d4a574;
            color: white;
            padding: 10px 16px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
        }

        .bookmark-btn {
            background: none;
            border: none;
            font-size: 22px;
            cursor: pointer;
            color: #d4a574;
        }

        .top-nav {
            display: flex;
            gap: 20px;
            background-color: white;
            border: 1px solid #e0e0e0;
            padding: 10px 18px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            position: relative; /* no more absolute */
            z-index: 5;
        }

        .nav-item {
            text-decoration: none;
            color: #555;
            font-size: 14px;
            font-weight: bold;
            transition: 0.2s;
        }

        .nav-item.active {
            color: #d4a574;
            font-weight: 600;
        }

    </style>
    </head>

    <body>

    <header>
    <div class="header-left">
        <div class="user-section">
            <a href="Profile-Page.php">
                <div class="avatar">
                    <img src="images/profile.jpg" alt="User Avatar">
                </div>
            </a>
            <h1 class="greeting">Hello, User!</h1>
        </div>
    </div>

    <nav class="top-nav">
        <a href="#" class="nav-item active">Home</a>
        <a href="Message-Page.php" class="nav-item">Messages</a>
        <a href="Booking-Page.php" class="nav-item">Bookings</a>
        <a href="Favorites-Page.php" class="nav-item">Favorites</a>
    </nav>

    <div class="header-icons">
        <i class="fa fa-gear"></i>
        <i class="fa fa-bell"></i>
    </div>
</header>

    <div class="search-wrapper">
        <div class="search-box">
            <i class="fa fa-search"></i>
            <input type="text" value="Dormitory near Batangas City">
        </div>
    </div>

    <div class="results-header">Results <span class="info-icon">i</span></div>

    <div class="dorm-card">
        <img src="https://images.unsplash.com/photo-1555854877-bab0e564b8d5?w=800&h=600&fit=crop" class="dorm-image">

        <div class="dorm-header">
            <h2 class="dorm-title">G2J Dormitory</h2>
            <div class="dorm-type">Student Dormitory</div>
            <span class="status-badge">Open For Booking</span>
            <div class="location">548, Gulod Labac, Batangas City</div>
        </div>

        <div class="dorm-footer">
            <div class="rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-o"></span>
            </div>

                <div class="price">₱4,800/month</div>

            <div class="card-actions">
                <a href="Tenant_ViewDetails1.php" class="view-details-btn">View Details</a>
                <button class="bookmark-btn"><i class="fa fa-bookmark"></i></button>
            </div>
        </div>
    </div>

    <div class="dorm-card">
        <img src="images/dorm_img.jpg" class="dorm-image">

        <div class="dorm-header">
            <h2 class="dorm-title">HomeNest Dorm</h2>
            <span class="status-badge">Open For Booking</span>
            <div class="location">262, Lawas, Batangas City</div>
        </div>

        <div class="dorm-footer">
            <div class="rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            </div>

            <div class="price">₱5,500 - ₱7,000/month</div>

            <div class="card-actions">
                <a href="Tenant_ViewDetails2.php" class="view-details-btn">View Details</a>
                <button class="bookmark-btn"><i class="fa fa-bookmark"></i></button>
            </div>
        </div>
    </div>
    </body>
</html>
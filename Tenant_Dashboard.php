<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Housing</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f0;
            padding-bottom: 80px;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 30px 40px;
            padding-top: 80px;
        }

        .top-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .user-section {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
        }

        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .greeting {
            font-size: 32px;
            font-weight: bold;
            color: #000;
        }

        .header-icons {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .header-icon-link i {
            font-size: 28px;
            color: #333;
            cursor: pointer;
            transition: 0.2s ease;
        }

        .header-icon-link i:hover {
            color: #D29A6A;
            transform: scale(1.1);
        }

        .search-container {
            margin-bottom: 35px;
        }

        .search-box {
            display: flex;
            align-items: center;
            background-color: white;
            border: 2px solid #e0e0e0;
            border-radius: 25px;
            padding: 12px 20px;
            gap: 12px;
            transition: all 0.3s ease;
            max-width: 600px;
        }

        .search-box:focus-within {
            border-color: #4a90e2;
            box-shadow: 0 4px 12px rgba(74, 144, 226, 0.15);
        }

        .search-icon img {
            width: 18px;
            height: 18px;
        }

        .search-box input {
            border: none;
            outline: none;
            flex: 1;
            font-size: 14px;
            color: #333;
        }

        .section-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 25px;
            color: #000;
        }

        .featured-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .card-large {
            background-color: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 16px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .card-large:hover {
            transform: translateY(-6px);
            box-shadow: 0 8px 24px rgba(0,0,0,0.12);
        }

        .card-image-large {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-content {
            padding: 20px;
            position: relative;
        }

        .card-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 6px;
            color: #000;
        }

        .card-price-label {
            font-size: 13px;
            color: #666;
            margin-bottom: 3px;
        }

        .card-price {
            font-size: 16px;
            font-weight: bold;
            color: #ff8c00;
        }

        .bookmark {
            position: absolute;
            right: 20px;
            top: 20px;
            cursor: pointer;
        }

        .bookmark input {
            display: none;
        }

        .bookmark i {
            font-size: 22px;
            color: #ccc;
            transition: 0.2s ease;
        }

        .bookmark input:checked + i {
            color: #ffcc00;
        }

        .list-cards {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-bottom: 40px;
            width: 650px;
        }

        .card-list {
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 12px rgba(0,0,0,0.06);
            display: flex;
            cursor: pointer;
            position: relative;
        }

        .card-image-small {
            width: 80px;
            height: 80px;
            object-fit: cover;
            flex-shrink: 0;
        }

        .card-list-content {
            padding: 15px 20px;
            flex: 1;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-list-title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 4px;
            color: #000;
        }

        .top-nav {
            position: absolute;  
            top: 20px;
            right: 20px;
            background-color: white;
            border: 1px solid #e0e0e0;
            display: flex;
            gap: 20px;
            padding: 10px 18px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .nav-item {
            text-decoration: none;
            color: #555;
            font-size: 14px;
            font-weight: bold;
            transition: 0.2s;
        }
    </style>
</head>

<body>

        <nav class="top-nav">
            <a href="Tenant_Dashboard.php" class="nav-item active">
                <div>Home</div>
            </a>
            <a href="Tenant_Messages.php" class="nav-item">
                <div>Messages</div>
            </a>
            <a href="Tenant_Booking.php" class="nav-item">
                <div>Bookings</div>
            </a>
            <a href="Tenant_Favorites.php" class="nav-item">
                <div>Favorites</div>
            </a>
        </nav>

    <div class="container">
        <div class="top-header">
            <div class="user-section">
                <a href="Profile-Page.php">
                    <div class="avatar">
                        <img src="images/profile-picture" alt="User Avatar">
                    </div>
                </a>
                <h1 class="greeting">Hello, Brent!</h1>
            </div>

            <div class="header-icons">
                <a href="Tenant_Setting.php" class="header-icon-link">
                    <i class="fa fa-gear"></i>
                </a>
                <a href="Tenant_Notification.php" class="header-icon-link">
                    <i class="fa fa-bell"></i>
                </a>
            </div>
        </div>


        <div class="search-container">
            <form action="Tenant_Search_Dorm.php" method="get" class="search-box">
                <span class="search-icon">
                    <img src="images/search.png" alt="Search"></span>
                <input type="text" name="query" placeholder="Search by university, city, or name of place">
            </form>
        </div>

                <h2 class="section-title">Recommended For You</h2>
                    <div class="featured-cards">
                        <div class="card-large">
                            <img src="images/dorm2.jpg" class="card-image-large">
                            <div class="card-content">
                                <div class="card-title">University Lofts</div>
                                <div class="card-price-label">Starts from</div>
                                <div class="card-price">₱5,000/mo</div>
                                <label class="bookmark">
                                <input type="checkbox">
                            <i class="fa fa-bookmark"></i>
                        </label>
                    </div>
                </div>

            <div class="card-large">
                <img src="images/dorm5.jpg" class="card-image-large">
                <div class="card-content">
                    <div class="card-title">Campus Dormitory</div>
                    <div class="card-price-label">Starts from</div>
                    <div class="card-price">₱4,000/mo</div>
                    <label class="bookmark">
                        <input type="checkbox">
                        <i class="fa fa-bookmark"></i>
                    </label>
                </div>
            </div>
        </div>

        <h2 class="section-title">Near You</h2>
        <div class="list-cards">
            <div class="card-list">
                <img src="images/dorm1.jpg" class="card-image-small">
                <div class="card-list-content">
                    <div class="card-list-info">
                        <div class="card-list-title">EBM Dormitory</div>
                        <div class="card-price-label">Starts from</div>
                        <div class="card-price">₱5,500/mo</div>
                    </div>
                </div>
                <label class="bookmark">
                    <input type="checkbox">
                    <i class="fa fa-bookmark"></i>
                </label>
            </div>

            <div class="card-list">
                <img src="images/dorm3.jpg" class="card-image-small">
                <div class="card-list-content">
                    <div class="card-list-info">
                        <div class="card-list-title">Joelpadent Dormitory</div>
                        <div class="card-price-label">Starts from</div>
                        <div class="card-price">₱5,000/mo</div>
                    </div>
                </div>
                <label class="bookmark">
                    <input type="checkbox">
                    <i class="fa fa-bookmark"></i>
                </label>
            </div>

            <div class="card-list">
                <img src="images/dorm4.jpg" class="card-image-small">
                <div class="card-list-content">
                    <div class="card-list-info">
                        <div class="card-list-title">BBC Boarding House</div>
                        <div class="card-price-label">Starts from</div>
                        <div class="card-price">₱7,000/mo</div>
                    </div>
                </div>
                <label class="bookmark">
                    <input type="checkbox">
                    <i class="fa fa-bookmark"></i>
                </label>
            </div>

            <div class="card-list">
                <img src="images/BoardingHouse1.jpg" class="card-image-small">
                <div class="card-list-content">
                    <div class="card-list-info">
                        <div class="card-list-title">Medal Boarding House</div>
                        <div class="card-price-label">Starts from</div>
                        <div class="card-price">₱4,000/mo</div>
                    </div>
                </div>
                
                <label class="bookmark">
                    <input type="checkbox">
                    <i class="fa fa-bookmark"></i>
                </label>
            </div>
        </div>
    </div>
</body>
</html>
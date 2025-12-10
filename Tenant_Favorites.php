<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorites</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Inter", Arial, sans-serif;
        }

        body {
            background-color: #f4efe9;
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

        .content {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 20px;
        }

        /* Grid layout for cards */
        .favorites-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 25px;
        }

        .favorite-card {
            background: white;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: 0.2s ease;
            cursor: pointer;
        }

        .favorite-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 4px 16px rgba(0,0,0,0.15);
        }

        .dorm-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-info {
            padding: 18px;
        }

        .dorm-name {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .price-label {
            font-size: 13px;
            color: #666;
        }

        .price {
            font-size: 17px;
            font-weight: 700;
            color: #c59b75;
            margin-top: 4px;
        }

    </style>
</head>
<body>

    <div class="header">
        <h1>Favorites</h1>
    </div>

    <div class="content">

        <div class="favorites-grid">

            <div class="favorite-card">
                <img src="images/BoardingHouse2" class="dorm-image">
                <div class="card-info">
                    <div class="dorm-name">Kenn's Boarding House</div>
                    <div class="price-label">Starts from</div>
                    <div class="price">₱5,000/mo</div>
                </div>
            </div>

            <div class="favorite-card">
                <img src="images/Dormitory" class="dorm-image">
                <div class="card-info">
                    <div class="dorm-name">Ancient Rest Dormitory</div>
                    <div class="price-label">Starts from</div>
                    <div class="price">₱9,000/mo</div>
                </div>
            </div>

            <div class="favorite-card">
                <img src="images/BoardingHouse3" class="dorm-image">
                <div class="card-info">
                    <div class="dorm-name">Campus Dormitory</div>
                    <div class="price-label">Starts from</div>
                    <div class="price">₱9,000/mo</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
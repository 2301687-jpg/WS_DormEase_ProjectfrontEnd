<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Properties</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f2f2f2;
            padding: 20px;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 25px;
        }

        .header button {
            width: 40px;
            height: 40px;
            border: none;
            background: #eee;
            border-radius: 8px;
            font-size: 22px;
            cursor: pointer;
        }

        .header button a {
            color: black;
            text-decoration: none;
            display: block;
            width: 100%;
            height: 100%;
            line-height: 40px;
        }

        h1 {
            font-size: 22px;
            font-weight: bold;
            color: #D29A6A;
        }

        .properties-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }

        .property-card {
            background: white;
            border-radius: 8px;
            border: 1px solid #ddd;
            overflow: hidden;
            position: relative;
        }

        .property-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .property-info {
            padding: 15px;
            position: relative;
        }

        .property-name {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .property-price {
            font-size: 15px;
            color: #D29A6A;
            font-weight: bold;
        }

        .property-info .fa-edit {
            position: absolute;
            top: -10px;
            right: 10px;
            background: white;
            padding: 8px;
            border-radius: 50%;
            border: 1px solid #ccc;
            cursor: pointer;
        }

        @media (max-width: 600px) {
            .property-card img {
                height: 150px;
            }
        }
    </style>
</head>

<body>

    <div class="header">
        <button onclick="history.back()">‹</button>
        <h1>Owner Properties</h1>
        <button><a href="Owner_AddProperty.php">+</a></button>
    </div>

    <div class="properties-grid">

        <div class="property-card">
            <img src="images/dorm3" alt="">

            <div class="property-info">
                <i class="fa fa-edit"></i>
                <p class="property-name">Universal Dorms</p>
                <p class="property-price">₱5k/mo</p>
            </div>
        </div>

        <div class="property-card">
            <img src="images/BBC.png" alt="">

            <div class="property-info">
                <i class="fa fa-edit"></i>
                <p class="property-name">Ancient Rest Dormitory</p>
                <p class="property-price">₱8k/mo</p>
            </div>
        </div>

        <div class="property-card">
            <img src="images/UniversalDorm.png" alt="">

            <div class="property-info">
                <i class="fa fa-edit"></i>
                <p class="property-name">Campus Dormitory</p>
                <p class="property-price">₱9k/mo</p>
            </div>
        </div>

    </div>

</body>
</html>
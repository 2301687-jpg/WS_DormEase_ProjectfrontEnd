<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Room Management - Website Layout</title>
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
      color: #222;
    }

    header {
      background: white;
      border-bottom: 1px solid #ddd;
      padding: 20px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 10;
    }

    header h1 {
      font-size: 24px;
      font-weight: bold;
    }

    nav a {
      margin-left: 20px;
      text-decoration: none;
      color: #444;
      font-size: 15px;
    }

    nav a:hover {
      text-decoration: underline;
    }

    .container {
      max-width: 1200px;
      margin: 40px auto;
      padding: 0 20px;
      display: grid;
      grid-template-columns: 300px 1fr;
      gap: 25px;
    }

    .sidebar {
      background: white;
      padding: 20px;
      border-radius: 10px;
      border: 1px solid #ddd;
      height: fit-content;
    }

    .sidebar h2 {
      font-size: 18px;
      margin-bottom: 10px;
      color: #333;
    }

    .property-card {
      margin-top: 15px;
      display: flex;
      gap: 12px;
      padding: 12px;
      border-radius: 10px;
      background: #fafafa;
      border: 1px solid #ddd;
    }

    .property-icon {
      font-size: 32px;
    }

    .edit-btn {
      margin-top: 10px;
      background: #C38C62;
      border: none;
      color: white;
      padding: 8px 15px;
      border-radius: 20px;
      
      cursor: pointer;
      font-size: 14px;
    }

    .main-content {
      background: white;
      padding: 25px;
      border-radius: 10px;
      border: 1px solid #ddd;
    }

    .section-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .section-header h2 {
      font-size: 20px;
      color: #C38C62
    }

    .add-btn {
      background: #C38C62;
      color: white;
      border: none;
      width: 32px;
      height: 32px;
      border-radius: 30px;
      font-size: 20px;
      cursor: pointer;
    }

    .room-card {
      padding: 18px;
      border-radius: 10px;
      border: 1px solid #ddd;
      background: #fafafa;
      margin-bottom: 20px;
    }

    .room-header {
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;
    }

    .room-number {
      font-size: 17px;
      font-weight: bold;
    }

    .status-badge {
      background: #C38C62;
      color: white;
      padding: 5px 12px;
      border-radius: 20px;
      font-size: 12px;
    }

    .availability {
        display: inline-block;
        padding: 5px 12px;
        border-radius: 8px;
        font-size: 12px;
        margin-bottom: 8px;
    }

    .available { background: #d4edda; color: #155724; }
    .occupied { background: #f8d7da; color: #721c24; }

    .tenant-name {
        margin-bottom: 10px;
        font-size: 14px;
    }

    .room-details {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 12px;
    }

    .detail-label {
        font-size: 15px;
        color: #a57a50;
    }

  </style>
</head>

<body>

    <header>
        <h1>Room Management</h1>
    </header>

    <div class="container">

    <aside class="sidebar">
        <h2>My Property</h2>
        <button class="edit-btn">Edit</button>

        <div class="property-card">
        <i class="fa fa-building"></i>

        <div>
            <strong>Universal Dorms</strong><br>
            <small>123 Rizal Avenue, Batangas</small>
        </div>
        </div>
    </aside>

    <main class="main-content">
        <div class="section-header">
        <h2>Rooms</h2>
        <button class="add-btn">+</button>
        </div>

        <div class="room-card">
        <div class="room-header">
            <span class="room-number">Room 101</span>
            <span class="status-badge">Mark Available</span>
        </div>

        <div class="availability occupied">Occupied</div>
            <div class="tenant-name">David Laid</div>
            <div class="room-details">
                <div><span class="detail-label">Type</span><br>Single</div>
                <div><span class="detail-label">Capacity</span><br>1</div>
                <div><span class="detail-label">Price</span><br>₱3500</div>
            </div>
        </div>

        <div class="room-card">
        <div class="room-header">
            <span class="room-number">Room 102</span>
            <span class="status-badge">Occupied</span>
        </div>

        <div class="availability available">Mark Available</div>
            <div class="room-details">
                <div><span class="detail-label">Type</span><br>Single</div>
                <div><span class="detail-label">Capacity</span><br>1</div>
                <div><span class="detail-label">Price</span><br>₱3500</div>
            </div>
        </div>

        <div class="room-card">
            <div class="room-header">
                <span class="room-number">Room 201</span>
            <span class="status-badge">Occupied</span>
        </div>

            <div class="availability available">Mark Available</div>

        <div class="room-details">
            <div><span class="detail-label">Type</span><br>Double</div>
            <div><span class="detail-label">Capacity</span><br>2</div>
            <div><span class="detail-label">Price</span><br>₱5000</div>
            </div>
        </div>

        <div class="room-card">
            <div class="room-header">
            <span class="room-number">Room 202</span>
            <span class="status-badge">Mark Available</span>
        </div>

        <div class="availability occupied">Occupied</div>
            <div class="tenant-name">David Lee</div>
                <div class="room-details">

                <div><span class="detail-label">Type</span><br>Double</div>
                <div><span class="detail-label">Capacity</span><br>2</div>
                <div><span class="detail-label">Price</span><br>₱5000</div>
            </div>
        </div>

        </main>
    </div>
</body>
</html>

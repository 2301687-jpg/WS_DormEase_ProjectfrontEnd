<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Property</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }

        .header {

            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
        }

        .back-btn {
            background: #e0e0e0;
            border: none;
            padding: 8px 14px;
            border-radius: 30px;
            cursor: pointer;
        }

        h1 {
            font-size: 24px;
            font-weight: bold;
            color: #D6A781;
        }

        .section {
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 18px;
            margin-bottom: 10px;
            font-weight: bold;
            color: #D6A781;
        }

        input[type="text"], textarea {
            width: 70%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
            margin-bottom: 12px;
            font-size: 14px;
        }

        textarea {
            resize: vertical;
        }

        .photo-upload {
            width: 100%;
            height: 150px;
            border: 1px dashed #777;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            background: #fafafa;
            margin-bottom: 10px;
            border-radius: 20px;
        }

        .manage-btn {
            display: block;
            margin: 10px auto;
            width: 200px;      
            padding: 10px;
            background: #D6A781;
            color: white;
            border: none;
            border-radius: 30px;
            cursor: pointer;
        }

        .details-grid, .room-types, .amenities-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            width: 60%;
        }

        .detail-box {
            border: 1px solid #ccc;
            padding: 12px;
            border-radius: 4px;
            background: #fafafa;
        }

        .detail-label {
            font-size: 12px;
            color: #555;
        }

        .detail-value {
            font-size: 16px;
            font-weight: bold;
            margin-top: 5px;
        }

        .simple-btn {
            padding: 10px;
            border: 1px solid #aaa;
            cursor: pointer;
            border-radius: 30px;
        }

        .simple-btn:hover {
            transition: 0.5s ease;
             background: #D6A781;;
        }

        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 25px;
        }

        .add-btn {
            width: 200px;        
            background: #D6A781;
            border: none;
            padding: 12px;
            color: white;
            border-radius: 30px;
            cursor: pointer;
            font-size: 16px;
        }

        .cancel-btn {
            width: 150px;
            border: 1px solid #ccc;
            padding: 12px;
            border-radius: 30px;
            cursor: pointer;
            background: white;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">
            <button class="back-btn" onclick="history.back()">Back</button>
            <h1>Add Property</h1>
        </div>

        <div class="section">
            <input type="file" id="fileInput" style="display: none;"> 
            <div class="photo-upload" id="uploadBox">Click to upload photo</div>
            <button class="manage-btn choose-file-btn">Manage Photos</button>
        </div>

        <div class="section">
            <h2 class="section-title">Property Basics</h2>
            <input type="text" placeholder="Property Name">
            <input type="text" placeholder="Full Address">
        </div>

        <div class="section">
            <h2 class="section-title">About the Property</h2>
            <textarea placeholder="Describe your property"></textarea>
        </div>

        <div class="section">
            <h2 class="section-title">Details</h2>
            <div class="details-grid">
                <div class="detail-box">
                <div class="detail-label">Price/Month (₱)</div>
                </div>

                <div class="detail-box">
                <div class="detail-label">Rooms Available</div>
                </div>
            </div>
        </div>

        <div class="section">
            <h2 class="section-title">Room Type</h2>
                <div class="room-types">
                    <button class="simple-btn">Solo</button>
                    <button class="simple-btn">Shared</button>
                </div>
            </div>

        <div class="section">
            <h2 class="section-title">Inclusion & Amenities</h2>
                <div class="amenities-grid">
                    <button class="simple-btn">Wi-Fi</button>
                    <button class="simple-btn">Aircon</button>
                    <button class="simple-btn">Private CR</button>
                    <button class="simple-btn">Kitchen</button>
                    <button class="simple-btn">Laundry</button>
                    <button class="simple-btn">Utilities</button>
                    <button class="simple-btn">Wardrobe</button>
                    <button class="simple-btn">Refrigerator</button>
                </div>
            </div>

        <div class="section">
            <h2 class="section-title">Dormitory/Boarding House Rules</h2>
            <textarea placeholder="Enter Dormitory/Boarding house rules"></textarea>
        </div>

        <div class="action-buttons">
            <button class="add-btn">Add Property</button>
            <button class="cancel-btn">Cancel</button>
        </div>
        </div>

    <script>
        const fileInput = document.getElementById("fileInput");
        const uploadBox = document.getElementById("uploadBox");
        uploadBox.addEventListener("click", () => {fileInput.click();});
    </script>

</body>
</html>
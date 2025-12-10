<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Inter", Arial, sans-serif;
            background-color: #ebe6df;
            display: flex;
            justify-content: center;
        }

        .container {
            width: 100%;
            max-width: 480px;
            min-height: 100vh;
            background: #fff;
            box-shadow: 0 0 20px rgba(0,0,0,0.08);
            border-radius: 0 0 12px 12px;
            overflow: hidden;
        }

        .header {
            display: flex;
            align-items: center;
            padding: 30px 30px;
            position: relative;
            background: #f7f2ec;
            border-bottom: 1px solid #ddd2c1;
        }

        .header h1 {
            width: 100%;
            text-align: center;
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px;
            font-weight: 600;
            color: #5a4b3a;
        }

        .search-container {
            padding: 15px 20px;
            background: #fff;
        }

        .search-box {
            position: relative;
        }

        .search-box input {
            width: 100%;
            padding: 12px 18px 12px 45px;
            border: 2px solid #d4c5b0;
            border-radius: 25px;
            background-color: white;
            font-size: 15px;
            outline: none;
            transition: 0.2s;
        }

        .search-box input:focus {
            border-color: #c4a78b;
            box-shadow: 0 0 6px rgba(196, 167, 139, 0.3);
        }

        .search-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 17px;
            color: #999;
            font-size: 16px;
        }

        .messages-list {
            padding: 0 20px;
        }

        .message-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px 0;
            border-bottom: 1px solid #e6ded3;
            cursor: pointer;
            transition: 0.2s;
        }

        .message-item:hover {
            background: #f4eee7;
            border-radius: 10px;
            padding-left: 10px;
        }

        .avatar {
            width: 55px;
            height: 55px;
            border-radius: 50%;
            flex-shrink: 0;
        }

        .avatar1 { background: #5b9fd8; }
        .avatar2 { background: #7eb8e8; }
        .avatar3 { background: #ff6b9d; }
        .avatar4 { background: #6dd5b0; }

        .message-content {
            flex: 1;
        }

        .message-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 4px;
        }

        .owner-name {
            font-size: 17px;
            font-weight: 600;
            color: #4d3f32;
        }

        .timestamp {
            font-size: 13px;
            color: #a59b8f;
        }

        .message-preview {
            font-size: 14px;
            color: #7d6f61;
        }
    </style>
</head>
<body>

    <div class="container">

        <div class="header">
            <h1>Messages</h1>
        </div>

        <div class="search-container">
            <div class="search-box">
                <span class="search-icon">
                    <i class="fa fa-search"></i>
                </span>

                <input type="text" placeholder="Search conversations">
            </div>
        </div>

        <div class="messages-list">

            <div class="message-item">
                <div class="avatar avatar1"></div>
                <div class="message-content">
                    <div class="message-header">
                        <span class="owner-name">Owner 1</span>
                        <span class="timestamp">1:45 pm</span>
                    </div>
                    <div class="message-preview">Hi, is this still available? I would li...</div>
                </div>
            </div>

            <div class="message-item">
                <div class="avatar avatar2"></div>
                <div class="message-content">
                    <div class="message-header">
                        <span class="owner-name">Owner 2</span>
                        <span class="timestamp">2:37 pm</span>
                    </div>
                    <div class="message-preview"><strong>Let me help you with your inquiry.</strong></div>
                </div>
            </div>

            <div class="message-item">
                <div class="avatar avatar3"></div>
                <div class="message-content">
                    <div class="message-header">
                        <span class="owner-name">Owner 3</span>
                        <span class="timestamp">10:16 am</span>
                    </div>
                    <div class="message-preview"><strong>Yes! It's still available for booking.</strong></div>
                </div>
            </div>

            <div class="message-item">
                <div class="avatar avatar4"></div>
                <div class="message-content">
                    <div class="message-header">
                        <span class="owner-name">Owner 4</span>
                        <span class="timestamp">4:36 pm</span>
                    </div>
                    <div class="message-preview"><strong>Feel free to ask more questions!</strong></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
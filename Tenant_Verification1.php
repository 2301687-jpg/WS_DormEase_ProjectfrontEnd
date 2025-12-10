<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Verification</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #f8f9fa;
            padding: 40px 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            padding: 60px 80px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .back-link {
            color: #666;
            text-decoration: none;
            font-size: 14px;
            display: inline-block;
            margin-bottom: 30px;
        }

        .back-link:hover {
            color: #333;
        }

        h1 {
            font-size: 32px;
            font-weight: 600;
            margin-bottom: 8px;
            color: #1a1a1a;
        }

        .step {
            color: #666;
            font-size: 14px;
            margin-bottom: 40px;
        }

        h2 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 12px;
            color: #1a1a1a;
        }

        .description {
            color: #666;
            font-size: 15px;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .upload-area {
            border: 2px dashed #d1d5db;
            border-radius: 8px;
            padding: 60px 40px;
            text-align: center;
            background: #fafafa;
            margin-bottom: 40px;
            cursor: pointer;
        }

        .upload-area:hover {
            border-color: #9ca3af;
            background: #f5f5f5;
        }

        .upload-icon {
            font-size: 48px;
            margin-bottom: 16px;
        }

        .upload-text {
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 8px;
            color: #1a1a1a;
        }

        .upload-subtext {
            color: #666;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .choose-file-btn {
            background: #d4a574;
            color: white;
            border: none;
            padding: 10px 24px;
            border-radius: 6px;
            font-weight: 500;
            cursor: pointer;
            font-size: 14px;
        }

        .choose-file-btn:hover {
            background: #c49563;
        }

        .tips-section {
            margin-bottom: 40px;
            padding: 24px;
            background: #f8f9fa;
            border-radius: 8px;
            max-width: 500px;
        }

        .tips-title {
            font-weight: 600;
            font-size: 16px;
            margin-bottom: 16px;
            color: #1a1a1a;
        }

        .tip-item {
            margin-bottom: 16px;
        }

        .tip-item:last-child {
            margin-bottom: 0;
        }

        .tip-title {
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 4px;
            color: #1a1a1a;
        }

        .tip-description {
            color: #666;
            font-size: 14px;
            line-height: 1.5;
        }

        .continue-btn {
            background: #d4a574;
            color: white;
            border: none;
            padding: 12px 32px;
            border-radius: 6px;
            font-weight: 500;
            font-size: 15px;
            cursor: pointer;
        }

        .continue-btn:hover {
            background: #c49563;
        }

        input[type="file"] {
            display: none;
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">

        <h1>Account Verification</h1>
        <div class="step">Step 1</div>

        <h2>Upload Government Issued ID</h2>
        <p class="description">Please provide a clear photo of your driver's license, passport, or national ID etc.</p>

        <label for="fileInput">
            <div class="upload-area">
                <i class="fa fa-file-o"></i>
                <div class="upload-text">Upload a file</div>
                <div class="upload-subtext">Click to upload.</div>
                <button class="choose-file-btn" type="button">Choose file</button>
            </div>
        </label>

        <input type="file" id="fileInput" accept="image/*,.pdf">

        <div class="tips-section">
            <div class="tips-title">Submission Tips</div>
            
            <div class="tip-item">
                <div class="tip-title">Fit in Frame</div>
                <div class="tip-description">Make sure all four corners of the document are visible.</div>
            </div>

            <div class="tip-item">
                <div class="tip-title">Use good lighting</div>
                <div class="tip-description">Avoid glare and shadows. A well-lit, neutral background is best.</div>
            </div>

            <div class="tip-item">
                <div class="tip-title">No blurry photos</div>
                <div class="tip-description">Ensure the image is in focus and all text is readable.</div>
            </div>
        </div>
        
        <button onclick="window.location.href='Tenant_Verification2.php'" class="continue-btn">Continue</button>
    </div>

    <script>
        document.querySelector(".choose-file-btn").addEventListener("click", () => {
            document.getElementById("fileInput").click();
        });
    </script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Verification - Step 2</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #ffffff;
            line-height: 1.6;
        }

        .header {
            background: #f8f9fa;
            padding: 20px 0;
            border-bottom: 1px solid #e5e7eb;
        }

        .header-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 40px;
        }

        .logo {
            font-size: 20px;
            font-weight: 600;
            color: #1a1a1a;
        }

        .main-content {
            max-width: 800px;
            margin: 60px auto;
            padding: 0 40px;
        }

        h1 {
            font-size: 36px;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 16px;
        }

        .step-indicator {
            color: #666;
            font-size: 14px;
            margin-bottom: 32px;
        }

        .step-indicator em {
            font-style: italic;
        }

        h2 {
            font-size: 24px;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 16px;
        }

        .description {
            color: #666;
            font-size: 15px;
            margin-bottom: 24px;
            line-height: 1.6;
        }

        .upload-area {
            border: 2px dashed #d1d5db;
            border-radius: 8px;
            padding: 60px 40px;
            text-align: center;
            background: #fafafa;
            cursor: pointer;
            transition: all 0.2s;
            margin-bottom: 40px;
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
        }

        .button-container {
            display: flex;
            gap: 16px;
        }

        .btn {
            padding: 12px 32px;
            border-radius: 6px;
            font-weight: 500;
            font-size: 15px;
            cursor: pointer;
            border: none;
            transition: all 0.2s;
        }

        .btn-previous {
            background: #d4a574;
            color: white;
        }

        .btn-previous:hover {
            background: #c49563;
        }

        .btn-next {
            background: #d4a574;
            color: white;
        }

        .btn-next:hover {
            background: #c49563;
        }

        input[type="file"] {
            display: none;
        }

        @media (max-width: 768px) {
            .main-content {
                padding: 0 20px;
            }

            h1 {
                font-size: 28px;
            }

            h2 {
                font-size: 20px;
            }

            .button-container {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="main-content">
        <h1>Account Verification</h1>
        <div class="step-indicator">Step 2: <em>Proof of status</em></div>

        <h2>Upload Proof of Enrollment or Employment</h2>
        <p class="description">
            Please upload a valid document like a student ID, enrollment form or a certificate of employment to confirm your tenant eligibility.
        </p>
        <p class="description">
            This information is kept secure and can only used for verification access.
        </p>

        <label for="fileInput">
            <div class="upload-area">
                <i class="fa fa-file-o"></i>
                <div class="upload-text">Upload a document</div>
                <div class="upload-subtext">Tap to upload</div>
            </div>
        </label>
        <input type="file" id="fileInput" accept="image/*,.pdf">

        <div class="button-container">
            <button onclick="window.location.href='Tenant_Verification1.php'" class="btn btn-previous">Previous</button>
            <button onclick="window.location.href='Tenant_VerificationLast.php'" class="btn btn-next">Next</button>
        </div>
    </div>
</body>
</html>
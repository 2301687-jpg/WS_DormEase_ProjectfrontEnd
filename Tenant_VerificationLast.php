<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review & Submit - Account Verification</title>
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

        .logo {
            font-size: 20px;
            font-weight: 600;
            color: #1a1a1a;
        }

        .main-content {

            max-width: 1200px;
            margin: 40px auto;
            padding: 0 40px;
        }

        h1 {
            font-size: 36px;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 24px;
        }

        .intro-text {
            font-size: 18px;
            color: #333;
            margin-bottom: 40px;
            line-height: 1.5;
        }

        .section-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 24px;
            margin-bottom: 24px;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 18px;
            font-weight: 600;
            color: #1a1a1a;
        }

        .edit-link {
            color: #d4a574;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
        }

        .edit-link:hover {
            color: #c49563;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #f3f4f6;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            color: #666;
            font-size: 14px;
        }

        .info-value {
            color: #1a1a1a;
            font-size: 14px;
            font-weight: 500;
        }

        .document-preview {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .doc-icon {
            width: 60px;
            height: 40px;
            background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
        }

        .checkbox-container {
            margin: 32px 0;
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .checkbox-container input[type="checkbox"] {
            margin-top: 4px;
            width: 18px;
            height: 18px;
            cursor: pointer;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #666;
            text-decoration: none;
            font-size: 15px;
            margin-bottom: 30px;
            transition: color 0.3s;
        }

        .back-link:hover {
            color: #d4a574;
        }

        .checkbox-label {
            color: #666;
            font-size: 14px;
            line-height: 1.5;
        }

        .submit-btn {
            width: 100%;
            background: #d4a574;
            color: white;
            border: none;
            padding: 14px 32px;
            border-radius: 6px;
            font-weight: 500;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.2s;
        }

        .submit-btn:hover {
            background: #c49563;
        }

        .submit-btn:disabled {
            background: #d1d5db;
            cursor: not-allowed;
        }

        @media (max-width: 768px) {
            .main-content {
                padding: 0 20px;
            }

            h1 {
                font-size: 28px;
            }

            .intro-text {
                font-size: 16px;
            }

            .info-row {
                flex-direction: column;
                align-items: flex-start;
                gap: 4px;
            }
        }
    </style>
</head>
<body>

    <div class="main-content">
        <a href="Tenant_Dashboard.php" class="back-link">Back to Dashboard</a>
        <h1>Review & Submit</h1>
        <p class="intro-text">Almost there! Please review your information.</p>

        <div class="section-card">
            <div class="section-header">
                <h2 class="section-title">Personal Details</h2>
            <a href="#" class="edit-link">Edit</a>
        </div>

        <div class="info-row">
            <span class="info-label">Full Name</span>
            <span class="info-value">User Lastname</span>
        </div>

        <div class="info-row">
            <span class="info-label">Contact Number</span>
            <span class="info-value">0954-558-6539</span>
        </div>

        <div class="info-row">
            <span class="info-label">Email Address</span>
                <span class="info-value">User@09gmail.com</span>
            </div>
        </div>

        <div class="section-card">
            <div class="section-header">
                <h2 class="section-title">Identity Document</h2>
            <a href="#" class="edit-link">Edit</a>
        </div>

        <div class="info-row">
            <span class="info-label">Document Type</span>
            <span class="info-value">Blank</span>
        </div>

        <div class="info-row">
            <span class="info-label">Document</span>
                <div class="document-preview">
                    <div class="doc-icon"></div>
                </div>
            </div>
        </div>

        <div class="section-card">
            <div class="section-header">
                <h2 class="section-title">Proof of Affiliation</h2>
            <a href="#" class="edit-link">Edit</a>
        </div>

        <div class="info-row">
            <span class="info-label">Institution</span>
            <span class="info-value">Blank</span>
        </div>

        <div class="info-row">
            <span class="info-label">Blank</span>
                <div class="document-preview">
                    <div class="doc-icon"></div>
                </div>
            </div>
        </div>

        <div class="checkbox-container">
            <input type="checkbox" id="confirmCheck">

            <label for="confirmCheck" class="checkbox-label">I confirm that all information provided is accurate and true.</label>
        </div>

        <button class="submit-btn" id="submitBtn" disabled>Submit for Verification</button>

    </div>
</body>
</html>
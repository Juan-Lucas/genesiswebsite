<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 650px;
            margin: 0 auto;
            padding: 20px;
            background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
        }
        .container {
            background-color: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 40px 30px;
            text-align: center;
            position: relative;
        }
        .header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: rgba(255, 255, 255, 0.3);
        }
        .logo {
            display: inline-block;
            margin-bottom: 20px;
        }
        .logo svg {
            width: 160px;
            height: auto;
            filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.1));
        }
        .header h1 {
            margin: 0;
            font-size: 26px;
            font-weight: 700;
            letter-spacing: -0.5px;
        }
        .header p {
            margin: 8px 0 0 0;
            font-size: 15px;
            opacity: 0.95;
            font-weight: 400;
        }
        .content {
            padding: 40px 30px;
        }
        .badge {
            display: inline-block;
            padding: 8px 16px;
            background: linear-gradient(135deg, #667eea15 0%, #764ba215 100%);
            border: 2px solid #667eea40;
            border-radius: 20px;
            color: #667eea;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 25px;
        }
        .field {
            margin-bottom: 20px;
            padding: 18px;
            background: linear-gradient(135deg, #f9fafb 0%, #f3f4f6 100%);
            border-radius: 12px;
            border-left: 5px solid #667eea;
            transition: all 0.3s ease;
        }
        .field:hover {
            border-left-color: #764ba2;
            transform: translateX(2px);
        }
        .field-label {
            font-weight: 700;
            color: #667eea;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 6px;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .field-label::before {
            content: '●';
            font-size: 8px;
        }
        .field-value {
            color: #1f2937;
            font-size: 16px;
            font-weight: 500;
        }
        .field-value a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.2s ease;
        }
        .field-value a:hover {
            color: #764ba2;
        }
        .message-section {
            margin-top: 30px;
            padding: 25px;
            background: linear-gradient(135deg, #ffffff 0%, #f9fafb 100%);
            border: 2px solid #e5e7eb;
            border-radius: 12px;
        }
        .message-label {
            font-weight: 700;
            color: #667eea;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .message-label::before {
            content: '✉';
            font-size: 14px;
        }
        .message-box {
            background-color: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 20px;
            white-space: pre-wrap;
            word-wrap: break-word;
            color: #374151;
            font-size: 15px;
            line-height: 1.8;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
        }
        .divider {
            height: 2px;
            background: linear-gradient(90deg, transparent 0%, #e5e7eb 50%, transparent 100%);
            margin: 30px 0;
        }
        .footer {
            padding: 30px;
            background: linear-gradient(135deg, #f9fafb 0%, #f3f4f6 100%);
            text-align: center;
            color: #6b7280;
            font-size: 14px;
            border-top: 2px solid #e5e7eb;
        }
        .footer p {
            margin: 8px 0;
        }
        .footer a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.2s ease;
        }
        .footer a:hover {
            color: #764ba2;
        }
        .footer-logo {
            margin-top: 15px;
            opacity: 0.6;
        }
        .footer-logo svg {
            width: 100px;
            height: auto;
        }
        @media only screen and (max-width: 600px) {
            body {
                padding: 10px;
            }
            .content {
                padding: 25px 20px;
            }
            .header {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <svg viewBox="0 0 200 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 10C20 8.89543 20.8954 8 22 8H28C29.1046 8 30 8.89543 30 10V18C30 19.1046 29.1046 20 28 20H22C20.8954 20 20 19.1046 20 18V10Z" fill="white" fill-opacity="0.9"/>
                    <path d="M32 12C32 10.8954 32.8954 10 34 10H40C41.1046 10 42 10.8954 42 12V38C42 39.1046 41.1046 40 40 40H34C32.8954 40 32 39.1046 32 38V12Z" fill="white" fill-opacity="0.9"/>
                    <path d="M8 22C8 20.8954 8.89543 20 10 20H16C17.1046 20 18 20.8954 18 22V38C18 39.1046 17.1046 40 16 40H10C8.89543 40 8 39.1046 8 38V22Z" fill="white" fill-opacity="0.9"/>
                    <text x="50" y="32" font-family="Arial, sans-serif" font-size="24" font-weight="bold" fill="white">GENESIS</text>
                </svg>
            </div>
            <h1>Nouveau message de contact</h1>
            <p>Un client potentiel souhaite vous contacter</p>
        </div>
        <div class="content">
            <div class="badge">📬 Nouveau Lead</div>
            <div class="badge">📬 Nouveau Lead</div>

            <div class="field">
                <div class="field-label">Nom</div>
                <div class="field-value">{{ $contactData['name'] }}</div>
            </div>

            <div class="field">
                <div class="field-label">Email</div>
                <div class="field-value">
                    <a href="mailto:{{ $contactData['email'] }}">
                        {{ $contactData['email'] }}
                    </a>
                </div>
            </div>

            @if(!empty($contactData['phone']))
            <div class="field">
                <div class="field-label">Téléphone</div>
                <div class="field-value">
                    <a href="tel:{{ $contactData['phone'] }}">
                        {{ $contactData['phone'] }}
                    </a>
                </div>
            </div>
            @endif

            <div class="field">
                <div class="field-label">Sujet</div>
                <div class="field-value">{{ $contactData['subject'] }}</div>
            </div>

            <div class="divider"></div>

            <div class="message-section">
                <div class="message-label">Message</div>
                <div class="message-box">{{ $contactData['message'] }}</div>
            </div>
        </div>

        <div class="footer">
            <p><strong>Ce message a été envoyé depuis le formulaire de contact de <a href="{{ config('app.url') }}">Genesis</a></strong></p>
            <p>Vous pouvez répondre directement à cet email pour contacter <strong>{{ $contactData['name'] }}</strong></p>
            <div class="footer-logo">
                <svg viewBox="0 0 200 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 10C20 8.89543 20.8954 8 22 8H28C29.1046 8 30 8.89543 30 10V18C30 19.1046 29.1046 20 28 20H22C20.8954 20 20 19.1046 20 18V10Z" fill="#667eea" fill-opacity="0.8"/>
                    <path d="M32 12C32 10.8954 32.8954 10 34 10H40C41.1046 10 42 10.8954 42 12V38C42 39.1046 41.1046 40 40 40H34C32.8954 40 32 39.1046 32 38V12Z" fill="#667eea" fill-opacity="0.8"/>
                    <path d="M8 22C8 20.8954 8.89543 20 10 20H16C17.1046 20 18 20.8954 18 22V38C18 39.1046 17.1046 40 16 40H10C8.89543 40 8 39.1046 8 38V22Z" fill="#667eea" fill-opacity="0.8"/>
                    <text x="50" y="32" font-family="Arial, sans-serif" font-size="24" font-weight="bold" fill="#667eea">GENESIS</text>
                </svg>
            </div>
        </div>
    </div>
</body>
</html>

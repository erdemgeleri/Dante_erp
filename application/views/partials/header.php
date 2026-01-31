<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($page_title) ? $page_title . ' - Dante ERP' : 'Dante ERP' ?></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-bg: #f8f9fa;
            --card-bg: #ffffff;
            --border-color: #e0e0e0;
            --text-dark: #1a1a1a;
            --text-light: #666666;
            --accent-color: #2563eb;
            --accent-hover: #1d4ed8;
            --danger: #dc2626;
            --success: #16a34a;
            --warning: #ea580c;
            --shadow: 0 1px 3px rgba(0, 0, 0, 0.08);
            --shadow-lg: 0 4px 12px rgba(0, 0, 0, 0.12);
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background-color: var(--primary-bg);
            color: var(--text-dark);
            line-height: 1.6;
        }

        /* Header */
        .header {
            background: var(--card-bg);
            border-bottom: 1px solid var(--border-color);
            padding: 16px 0;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: var(--shadow);
        }

        .header-container {
            max-width: 1600px;
            margin: 0 auto;
            padding: 0 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 20px;
            font-weight: 700;
            color: var(--text-dark);
            text-decoration: none;
        }

        .logo i {
            color: var(--accent-color);
            font-size: 24px;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--accent-color), #1e40af);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 14px;
        }

        .user-details {
            font-size: 13px;
        }

        .user-name {
            font-weight: 600;
            color: var(--text-dark);
        }

        .user-role {
            color: var(--text-light);
            font-size: 12px;
        }

        .logout-btn {
            background: none;
            border: none;
            color: var(--text-light);
            cursor: pointer;
            font-size: 16px;
            transition: color 0.3s ease;
            padding: 8px;
        }

        .logout-btn:hover {
            color: var(--danger);
        }

        /* Container */
        .container {
            max-width: 1600px;
            margin: 0 auto;
            padding: 32px 24px;
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 24px;
            color: var(--text-light);
            font-size: 12px;
            border-top: 1px solid var(--border-color);
            margin-top: 40px;
        }

        .footer a {
            color: inherit;
            text-decoration: underline;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header-container {
                padding: 0 16px;
            }

            .container {
                padding: 20px 16px;
            }

            .header-right {
                gap: 16px;
            }

            .user-details {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="header-container">
            <a href="<?= site_url('dashboard') ?>" class="logo">
                <i class="fas fa-cubes"></i>
                <span>DANTE ERP</span>
            </a>
            <div class="header-right">
                <div class="user-info">
                    <div class="user-avatar"><?= isset($user_initials) ? $user_initials : 'SA' ?></div>
                    <div class="user-details">
                        <div class="user-name"><?= isset($user_name) ? $user_name : 'Super Admin' ?></div>
                        <div class="user-role"><?= isset($user_role) ? $user_role : 'Administrator' ?></div>
                    </div>
                </div>
                <button class="logout-btn" title="Çıkış Yap" onclick="window.location.href='<?= site_url('auth/logout') ?>'">
                    <i class="fas fa-sign-out-alt"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="container">
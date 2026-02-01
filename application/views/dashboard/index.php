<!DOCTYPE html>
<html lang="<?= isset($current_lang) ? $current_lang : 'tr' ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->lang->line('page_dashboard') ?> - <?= $this->lang->line('app_name') ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #f8f9fa;
            color: #1a1a1a;
        }

        header {
            background: white;
            border-bottom: 1px solid #eee;
            padding: 16px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 50px;
        }

        .logo {
            font-size: 20px;
            font-weight: 700;
            color: #1a1a1a;
        }

        .nav-menu {
            display: flex;
            gap: 30px;
            list-style: none;
        }

        .nav-menu a {
            text-decoration: none;
            color: #666;
            font-weight: 500;
            font-size: 13px;
            transition: color 0.2s;
        }

        .nav-menu a:hover {
            color: #2563eb;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
        }

        .avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: #2563eb;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: 600;
        }

        .user-name {
            font-size: 13px;
            color: #1a1a1a;
            font-weight: 500;
        }

        .logout-btn {
            background: #fee;
            color: #c33;
            border: 1px solid #fcc;
            padding: 8px 14px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
            font-size: 12px;
            transition: background 0.2s;
        }

        .logout-btn:hover {
            background: #fdd;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 30px;
        }

        .welcome {
            background: white;
            padding: 30px;
            border-radius: 6px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.06);
            margin-bottom: 30px;
        }

        .welcome h1 {
            font-size: 28px;
            margin-bottom: 8px;
        }

        .welcome p {
            color: #666;
            font-size: 14px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            padding: 20px;
            border-radius: 6px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.06);
        }

        .stat-label {
            color: #999;
            font-size: 12px;
            font-weight: 500;
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .stat-value {
            font-size: 28px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 6px;
        }

        .stat-change {
            font-size: 12px;
            color: #22c55e;
        }

        .stat-change.negative {
            color: #ef4444;
        }

        .content-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
        }

        .card {
            background: white;
            padding: 24px;
            border-radius: 6px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.06);
        }

        .card h2 {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #1a1a1a;
        }

        .project-list {
            list-style: none;
        }

        .project-item {
            padding: 14px 0;
            border-bottom: 1px solid #f0f0f0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .project-item:last-child {
            border-bottom: none;
        }

        .project-info {
            flex: 1;
        }

        .project-name {
            font-weight: 600;
            color: #1a1a1a;
            font-size: 14px;
            margin-bottom: 4px;
        }

        .project-client {
            font-size: 12px;
            color: #999;
        }

        .project-status {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 11px;
            font-weight: 600;
            margin-left: 10px;
            white-space: nowrap;
        }

        .status-active {
            background: #efe;
            color: #3c3;
        }

        .status-pending {
            background: #fef3e6;
            color: #b8860b;
        }

        .status-completed {
            background: #e6f2ff;
            color: #0066cc;
        }

        .earnings-widget {
            background: white;
            padding: 20px;
            border-radius: 6px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.06);
            margin-bottom: 20px;
        }

        .earnings-label {
            font-size: 12px;
            color: #999;
            font-weight: 500;
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .earnings-amount {
            font-size: 32px;
            font-weight: 700;
            color: #22c55e;
            margin-bottom: 14px;
        }

        .earnings-detail {
            font-size: 13px;
            color: #666;
            line-height: 1.8;
        }

        .activity-list {
            list-style: none;
        }

        .activity-item {
            padding: 14px 0;
            border-bottom: 1px solid #f0f0f0;
            display: flex;
            gap: 12px;
        }

        .activity-item:last-child {
            border-bottom: none;
        }

        .activity-icon {
            width: 32px;
            height: 32px;
            border-radius: 4px;
            background: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 14px;
        }

        .activity-content {
            flex: 1;
        }

        .activity-title {
            font-weight: 600;
            color: #1a1a1a;
            font-size: 13px;
            margin-bottom: 2px;
        }

        .activity-time {
            font-size: 11px;
            color: #999;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
            text-decoration: none;
            text-align: center;
            width: 100%;
            margin-top: 16px;
        }

        .btn-primary {
            background: #2563eb;
            color: white;
        }

        .btn-primary:hover {
            background: #1d4ed8;
        }

        .btn-secondary {
            background: #f0f0f0;
            color: #666;
            border: 1px solid #ddd;
        }

        .btn-secondary:hover {
            background: #e8e8e8;
        }

        @media (max-width: 1024px) {
            .content-grid {
                grid-template-columns: 1fr;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .nav-menu {
                display: none;
            }
        }

        @media (max-width: 768px) {
            header {
                flex-direction: column;
                gap: 12px;
            }

            .header-left {
                width: 100%;
                justify-content: space-between;
                gap: 20px;
            }

            .header-right {
                width: 100%;
                justify-content: flex-end;
            }

            .container {
                padding: 20px;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .user-name {
                display: none;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="header-left">
            <a href="<?= site_url('dashboard') ?>" class="logo"><?= $this->lang->line('app_name') ?></a>
            <ul class="nav-menu">
                <li><a href="<?= site_url('dashboard') ?>"><?= $this->lang->line('nav_home') ?></a></li>
                <li><a href="<?= site_url('projects') ?>"><?= $this->lang->line('nav_projects') ?></a></li>
                <li><a href="<?= site_url('earnings') ?>"><?= $this->lang->line('nav_reports') ?></a></li>
                <li><a href="<?= site_url('messages') ?>"><?= $this->lang->line('nav_messages') ?></a></li>
            </ul>
        </div>
        <div class="header-right">
            <div class="user-profile">
                <div class="avatar"><?= isset($user_initials) ? $user_initials : 'Ö' ?></div>
                <span class="user-name"><?= isset($user_name) ? $user_name : $this->lang->line('user_role_user') ?></span>
            </div>
            <?php if (isset($current_lang)): ?>
            <a href="<?= site_url('lang/set/tr') ?>" style="font-size:12px; color:#666; text-decoration:none;"><?= $this->lang->line('lang_tr') ?></a>
            <span style="color:#ccc">|</span>
            <a href="<?= site_url('lang/set/en') ?>" style="font-size:12px; color:#666; text-decoration:none;"><?= $this->lang->line('lang_en') ?></a>
            <?php endif; ?>
            <button class="logout-btn" onclick="window.location.href='<?= site_url('auth/logout') ?>'"><?= $this->lang->line('btn_logout') ?></button>
        </div>
    </header>

    <div class="container">
        <div class="welcome">
            <h1><?= $this->lang->line('welcome_title') ?></h1>
            <p><?= $this->lang->line('welcome_desc') ?></p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-label"><?= $this->lang->line('stat_active_ops') ?></div>
                <div class="stat-value">3</div>
                <div class="stat-change"><?= $this->lang->line('stat_new') ?></div>
            </div>
            <div class="stat-card">
                <div class="stat-label"><?= $this->lang->line('stat_this_month') ?></div>
                <div class="stat-value">₺2.450</div>
                <div class="stat-change"><?= $this->lang->line('stat_increase') ?></div>
            </div>
            <div class="stat-card">
                <div class="stat-label"><?= $this->lang->line('stat_completed') ?></div>
                <div class="stat-value">28</div>
                <div class="stat-change"><?= $this->lang->line('stat_pending_count') ?></div>
            </div>
            <div class="stat-card">
                <div class="stat-label"><?= $this->lang->line('stat_avg_score') ?></div>
                <div class="stat-value">4.9</div>
                <div class="stat-change"><?= $this->lang->line('stat_great') ?></div>
            </div>
        </div>

        <div class="content-grid">
            <div class="card">
                <h2><?= $this->lang->line('card_recent_ops') ?></h2>
                <ul class="project-list">
                    <li class="project-item">
                        <div class="project-info">
                            <div class="project-name">Web Sitesi Tasarımı</div>
                            <div class="project-client">ABC Şirketi</div>
                        </div>
                        <span class="project-status status-active"><?= $this->lang->line('status_active') ?></span>
                    </li>
                    <li class="project-item">
                        <div class="project-info">
                            <div class="project-name">Logo Tasarımı</div>
                            <div class="project-client">XYZ Inc</div>
                        </div>
                        <span class="project-status status-pending"><?= $this->lang->line('status_pending') ?></span>
                    </li>
                    <li class="project-item">
                        <div class="project-info">
                            <div class="project-name">Mobile App UI</div>
                            <div class="project-client">TechStart</div>
                        </div>
                        <span class="project-status status-completed"><?= $this->lang->line('status_completed') ?></span>
                    </li>
                    <li class="project-item">
                        <div class="project-info">
                            <div class="project-name">Sosyal Medya İçeriği</div>
                            <div class="project-client">Marketing Co</div>
                        </div>
                        <span class="project-status status-active"><?= $this->lang->line('status_active') ?></span>
                    </li>
                </ul>
                <a href="<?= site_url('projects') ?>" class="btn btn-primary"><?= $this->lang->line('btn_all_ops') ?></a>
            </div>

            <div>
                <div class="earnings-widget">
                    <div class="earnings-label"><?= $this->lang->line('earnings_total') ?></div>
                    <div class="earnings-amount">₺24.850</div>
                    <div class="earnings-detail">
                        <div><?= $this->lang->line('earnings_paid') ?> ₺22.400</div>
                        <div style="margin-top: 8px;"><?= $this->lang->line('earnings_pending') ?> ₺2.450</div>
                    </div>
                    <a href="<?= site_url('earnings') ?>" class="btn btn-secondary"><?= $this->lang->line('btn_details') ?></a>
                </div>

                <div class="card">
                    <h2><?= $this->lang->line('card_recent_activities') ?></h2>
                    <ul class="activity-list">
                        <li class="activity-item">
                            <div class="activity-icon">✓</div>
                            <div class="activity-content">
                                <div class="activity-title"><?= $this->lang->line('activity_completed') ?></div>
                                <div class="activity-time"><?= $this->lang->line('time_2h_ago') ?></div>
                            </div>
                        </li>
                        <li class="activity-item">
                            <div class="activity-icon">💬</div>
                            <div class="activity-content">
                                <div class="activity-title"><?= $this->lang->line('activity_new_message') ?></div>
                                <div class="activity-time"><?= $this->lang->line('time_4h_ago') ?></div>
                            </div>
                        </li>
                        <li class="activity-item">
                            <div class="activity-icon">⭐</div>
                            <div class="activity-content">
                                <div class="activity-title"><?= $this->lang->line('activity_5_stars') ?></div>
                                <div class="activity-time"><?= $this->lang->line('time_1d_ago') ?></div>
                            </div>
                        </li>
                        <li class="activity-item">
                            <div class="activity-icon">💰</div>
                            <div class="activity-content">
                                <div class="activity-title"><?= $this->lang->line('activity_payment') ?></div>
                                <div class="activity-time"><?= $this->lang->line('time_3d_ago') ?></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 
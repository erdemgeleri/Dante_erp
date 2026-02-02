<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Xenoura</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background-color: #0f172a;
            color: #e2e8f0;
        }


        header {
            background: rgba(15, 23, 42, 0.9);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(71, 85, 105, 0.2);
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
            font-size: 22px;
            font-weight: 900;
            background: linear-gradient(135deg, #22c55e 0%, #3b82f6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: -0.5px;
        }

        .nav-menu {
            display: flex;
            gap: 35px;
            list-style: none;
        }

        .nav-menu a {
            text-decoration: none;
            color: #94a3b8;
            font-weight: 500;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .nav-menu a:hover {
            color: #22c55e;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
            padding: 8px 16px;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .user-profile:hover {
            background-color: rgba(71, 85, 105, 0.2);
        }

        .avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: linear-gradient(135deg, #22c55e 0%, #3b82f6 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            font-size: 14px;
        }

        .user-name {
            font-size: 14px;
            color: #e2e8f0;
            font-weight: 500;
        }

        .logout-btn {
            background-color: rgba(239, 68, 68, 0.2);
            color: #fca5a5;
            border: 1px solid rgba(239, 68, 68, 0.3);
            padding: 8px 16px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 500;
            font-size: 13px;
            transition: all 0.3s ease;
        }

        .logout-btn:hover {
            background-color: rgba(239, 68, 68, 0.3);
            border-color: rgba(239, 68, 68, 0.5);
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 30px;
        }

        .welcome-section {
            background: linear-gradient(135deg, rgba(34, 197, 94, 0.1) 0%, rgba(59, 130, 246, 0.1) 100%);
            border: 1px solid rgba(71, 85, 105, 0.3);
            padding: 40px;
            border-radius: 12px;
            margin-bottom: 30px;
        }

        .welcome-section h1 {
            font-size: 32px;
            margin-bottom: 10px;
            color: #f1f5f9;
        }

        .welcome-section p {
            font-size: 15px;
            color: #cbd5e1;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: rgba(30, 41, 59, 0.8);
            border: 1px solid rgba(71, 85, 105, 0.3);
            padding: 24px;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-4px);
            border-color: rgba(71, 85, 105, 0.5);
            background: rgba(30, 41, 59, 1);
        }

        .stat-label {
            color: #94a3b8;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 12px;
        }

        .stat-value {
            font-size: 32px;
            font-weight: 900;
            color: #22c55e;
            margin-bottom: 8px;
        }

        .stat-change {
            font-size: 13px;
            color: #22c55e;
        }

        .stat-change.negative {
            color: #fca5a5;
        }

        .content-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
            margin-bottom: 30px;
        }

        .card {
            background: rgba(30, 41, 59, 0.8);
            border: 1px solid rgba(71, 85, 105, 0.3);
            padding: 30px;
            border-radius: 10px;
        }

        .card h2 {
            font-size: 18px;
            margin-bottom: 24px;
            color: #f1f5f9;
            border-bottom: 1px solid rgba(71, 85, 105, 0.3);
            padding-bottom: 16px;
            font-weight: 700;
        }

        .project-list {
            list-style: none;
        }

        .project-item {
            padding: 16px 0;
            border-bottom: 1px solid rgba(71, 85, 105, 0.2);
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
            color: #f1f5f9;
            margin-bottom: 6px;
            font-size: 15px;
        }

        .project-client {
            font-size: 12px;
            color: #64748b;
        }

        .project-status {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 600;
            margin-left: 12px;
            white-space: nowrap;
        }

        .status-active {
            background-color: rgba(34, 197, 94, 0.2);
            color: #86efac;
        }

        .status-pending {
            background-color: rgba(243, 156, 18, 0.2);
            color: #fcd34d;
        }

        .status-completed {
            background-color: rgba(59, 130, 246, 0.2);
            color: #93c5fd;
        }

        .earnings-widget {
            background: linear-gradient(135deg, rgba(34, 197, 94, 0.15) 0%, rgba(59, 130, 246, 0.15) 100%);
            border: 1px solid rgba(71, 85, 105, 0.3);
            color: #e2e8f0;
            padding: 24px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .earnings-label {
            font-size: 12px;
            color: #94a3b8;
            margin-bottom: 10px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .earnings-amount {
            font-size: 36px;
            font-weight: 900;
            color: #22c55e;
            margin-bottom: 16px;
        }

        .earnings-detail {
            font-size: 13px;
            color: #cbd5e1;
            line-height: 1.8;
        }

        .activity-list {
            list-style: none;
        }

        .activity-item {
            padding: 16px 0;
            border-bottom: 1px solid rgba(71, 85, 105, 0.2);
            display: flex;
            gap: 14px;
        }

        .activity-item:last-child {
            border-bottom: none;
        }

        .activity-icon {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            background-color: rgba(71, 85, 105, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 18px;
        }

        .activity-content {
            flex: 1;
        }

        .activity-title {
            font-weight: 600;
            color: #f1f5f9;
            margin-bottom: 4px;
            font-size: 14px;
        }

        .activity-time {
            font-size: 12px;
            color: #64748b;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(34, 197, 94, 0.25);
        }

        .btn-secondary {
            background-color: rgba(71, 85, 105, 0.3);
            color: #cbd5e1;
            border: 1px solid rgba(71, 85, 105, 0.5);
        }

        .btn-secondary:hover {
            background-color: rgba(71, 85, 105, 0.4);
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
                padding: 16px 20px;
                flex-direction: column;
                gap: 16px;
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

            .welcome-section {
                padding: 24px;
            }

            .welcome-section h1 {
                font-size: 24px;
            }

            .nav-menu {
                display: none;
            }
        }

        @media (max-width: 480px) {
            .logo {
                font-size: 18px;
            }

            .container {
                padding: 16px;
            }

            .card {
                padding: 20px;
            }

            .welcome-section {
                padding: 16px;
            }

            .welcome-section h1 {
                font-size: 20px;
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
            <a href="<?= site_url('dashboard') ?>" class="logo">XENOURA</a>
            <ul class="nav-menu">
                <li><a href="<?= site_url('dashboard') ?>">Anasayfa</a></li>
                <li><a href="<?= site_url('projects') ?>">Projeler</a></li>
                <li><a href="<?= site_url('earnings') ?>">Kazançlar</a></li>
                <li><a href="<?= site_url('messages') ?>">Mesajlar</a></li>
            </ul>
        </div>
        <div class="header-right">
            <div class="user-profile">
                <div class="avatar">Ö</div>
                <span class="user-name">Öğrenci</span>
            </div>
            <button class="logout-btn" onclick="window.location.href='<?= site_url('auth/logout') ?>'">Çıkış</button>
        </div>
    </header>

    <div class="container">
        <div class="welcome-section">
            <h1>Hoşgeldiniz! 🚀</h1>
            <p>Yeni projeler keşfet, kazanç yap ve becerilerini geliştir.</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-label">Aktif Projeler</div>
                <div class="stat-value">3</div>
                <div class="stat-change">↑ 1 yeni bu haftada</div>
            </div>
            <div class="stat-card">
                <div class="stat-label">Bu Ay Kazandı</div>
                <div class="stat-value">₺2.450</div>
                <div class="stat-change">↑ %24 artış</div>
            </div>
            <div class="stat-card">
                <div class="stat-label">Tamamlanan</div>
                <div class="stat-value">28</div>
                <div class="stat-change">2 beklemede</div>
            </div>
            <div class="stat-card">
                <div class="stat-label">Ortalama Puan</div>
                <div class="stat-value">4.9</div>
                <div class="stat-change">⭐ Harika</div>
            </div>
        </div>

        <div class="content-grid">
            <div class="card">
                <h2>Son Projeler</h2>
                <ul class="project-list">
                    <li class="project-item">
                        <div class="project-info">
                            <div class="project-name">Web Sitesi Tasarımı</div>
                            <div class="project-client">Müşteri: ABC Şirketi</div>
                        </div>
                        <span class="project-status status-active">Aktif</span>
                    </li>
                    <li class="project-item">
                        <div class="project-info">
                            <div class="project-name">Logo Tasarımı</div>
                            <div class="project-client">Müşteri: XYZ Inc</div>
                        </div>
                        <span class="project-status status-pending">Beklemede</span>
                    </li>
                    <li class="project-item">
                        <div class="project-info">
                            <div class="project-name">Mobile App UI</div>
                            <div class="project-client">Müşteri: TechStart</div>
                        </div>
                        <span class="project-status status-completed">Tamamlandı</span>
                    </li>
                    <li class="project-item">
                        <div class="project-info">
                            <div class="project-name">Sosyal Medya İçeriği</div>
                            <div class="project-client">Müşteri: Marketing Co</div>
                        </div>
                        <span class="project-status status-active">Aktif</span>
                    </li>
                </ul>
                <a href="<?= site_url('projects') ?>" class="btn btn-primary" style="margin-top: 20px; display: block; text-align: center;">Tüm Projeler</a>
            </div>

            <div>
                <div class="earnings-widget">
                    <div class="earnings-label">Toplam Kazanç</div>
                    <div class="earnings-amount">₺204.850</div>
                    <div class="earnings-detail">
                        <div>Ödenen: ₺22.400</div>
                        <div style="margin-top: 8px;">Beklenmede: ₺2.450</div>
                    </div>
                    <a href="<?= site_url('earnings') ?>" class="btn btn-secondary" style="margin-top: 16px; display: block; text-align: center;">Detaylı İçgörüler</a>
                </div>

                <div class="card">
                    <h2>Son Aktiviteler</h2>
                    <ul class="activity-list">
                        <li class="activity-item">
                            <div class="activity-icon">✓</div>
                            <div class="activity-content">
                                <div class="activity-title">Proje Tamamlandı</div>
                                <div class="activity-time">2 saat önce</div>
                            </div>
                        </li>
                        <li class="activity-item">
                            <div class="activity-icon">💬</div>
                            <div class="activity-content">
                                <div class="activity-title">Yeni Mesaj Geldi</div>
                                <div class="activity-time">4 saat önce</div>
                            </div>
                        </li>
                        <li class="activity-item">
                            <div class="activity-icon">⭐</div>
                            <div class="activity-content">
                                <div class="activity-title">5 Yıldız Puanlama</div>
                                <div class="activity-time">1 gün önce</div>
                            </div>
                        </li>
                        <li class="activity-item">
                            <div class="activity-icon">💰</div>
                            <div class="activity-content">
                                <div class="activity-title">Ödeme Yapıldı</div>
                                <div class="activity-time">3 gün önce</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
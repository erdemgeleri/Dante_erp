<?php 
    $page_title = 'Dashboard';
    $user_name = 'Öğrenci';
    $user_initials = 'Ö';
    $user_role = 'Kullanıcı';
    
    $nav_menu = [
        ['label' => 'Anasayfa', 'url' => site_url('dashboard')],
        ['label' => 'Projeler', 'url' => site_url('projects')],
        ['label' => 'Raporlar', 'url' => site_url('earnings')],
        ['label' => 'Mesajlar', 'url' => site_url('messages')]
    ];
?>

<?php $this->load->view('partials/header'); ?>
    <style>

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
        transition: box-shadow 0.2s;
    }

    .stat-card:hover {
        box-shadow: 0 4px 12px rgba(0,0,0,0.12);
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
        .stats-grid {
            grid-template-columns: 1fr;
        }

        .welcome {
            padding: 20px;
        }

        .welcome h1 {
            font-size: 22px;
        }
    }

    @media (max-width: 480px) {
        .welcome h1 {
            font-size: 20px;
        }

        .stat-value {
            font-size: 24px;
        }
    }
</style>

<div class="welcome">
    <h1>Hoşgeldiniz! 👋</h1>
    <p>Sisteminizin güncel durumunu görüntüleyin ve yönetin.</p>
</div>

<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-label">Aktif İşlemler</div>
        <div class="stat-value"><?= isset($active_tasks) ? $active_tasks : '3' ?></div>
        <div class="stat-change">↑ 1 yeni</div>
    </div>
    <div class="stat-card">
        <div class="stat-label">Bu Ay</div>
        <div class="stat-value">₺2.450</div>
        <div class="stat-change">↑ %24 artış</div>
    </div>
    <div class="stat-card">
        <div class="stat-label">Tamamlanan</div>
        <div class="stat-value"><?= isset($completed_tasks) ? $completed_tasks : '28' ?></div>
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
        <h2>Son İşlemler</h2>
        <ul class="project-list">
            <li class="project-item">
                <div class="project-info">
                    <div class="project-name">Web Sitesi Tasarımı</div>
                    <div class="project-client">ABC Şirketi</div>
                </div>
                <span class="project-status status-active">Aktif</span>
            </li>
            <li class="project-item">
                <div class="project-info">
                    <div class="project-name">Logo Tasarımı</div>
                    <div class="project-client">XYZ Inc</div>
                </div>
                <span class="project-status status-pending">Beklemede</span>
            </li>
            <li class="project-item">
                <div class="project-info">
                    <div class="project-name">Mobile App UI</div>
                    <div class="project-client">TechStart</div>
                </div>
                <span class="project-status status-completed">Tamamlandı</span>
            </li>
            <li class="project-item">
                <div class="project-info">
                    <div class="project-name">Sosyal Medya İçeriği</div>
                    <div class="project-client">Marketing Co</div>
                </div>
                <span class="project-status status-active">Aktif</span>
            </li>
        </ul>
        <a href="<?= site_url('projects') ?>" class="btn btn-primary">Tüm İşlemler</a>
    </div>

    <div>
        <div class="earnings-widget">
            <div class="earnings-label">Toplam Kazanç</div>
            <div class="earnings-amount">₺24.850</div>
            <div class="earnings-detail">
                <div>Ödenen: ₺22.400</div>
                <div style="margin-top: 8px;">Beklenmede: ₺2.450</div>
            </div>
            <a href="<?= site_url('earnings') ?>" class="btn btn-secondary">Detaylar</a>
        </div>

        <div class="card">
            <h2>Son Aktiviteler</h2>
            <ul class="activity-list">
                <li class="activity-item">
                    <div class="activity-icon">✓</div>
                    <div class="activity-content">
                        <div class="activity-title">İşlem Tamamlandı</div>
                        <div class="activity-time">2 saat önce</div>
                    </div>
                </li>
                <li class="activity-item">
                    <div class="activity-icon">💬</div>
                    <div class="activity-content">
                        <div class="activity-title">Yeni Mesaj</div>
                        <div class="activity-time">4 saat önce</div>
                    </div>
                </li>
                <li class="activity-item">
                    <div class="activity-icon">⭐</div>
                    <div class="activity-content">
                        <div class="activity-title">5 Yıldız</div>
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

<?php $this->load->view('partials/footer'); ?>
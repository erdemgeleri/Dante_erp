<?php 
    // Sayfa başlığı ve kullanıcı bilgileri
    $page_title = 'Super Admin Dashboard';
    $user_name = 'Super Admin';
    $user_initials = 'SA';
    $user_role = 'Administrator';
?>

<?php $this->load->view('partials/header'); ?>

<style>
    /* Top Section */
    .top-section {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 32px;
        gap: 24px;
    }

    .welcome-section h1 {
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .welcome-section p {
        color: var(--text-light);
        font-size: 14px;
    }

    .quick-stats {
        display: flex;
        gap: 16px;
    }

    .stat-mini {
        background: var(--card-bg);
        border: 1px solid var(--border-color);
        padding: 16px 20px;
        border-radius: 8px;
        text-align: center;
        min-width: 140px;
    }

    .stat-mini-value {
        font-size: 22px;
        font-weight: 700;
        color: var(--accent-color);
    }

    .stat-mini-label {
        font-size: 12px;
        color: var(--text-light);
        margin-top: 4px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* Section Title */
    .section-title {
        font-size: 16px;
        font-weight: 700;
        margin-bottom: 16px;
        color: var(--text-dark);
    }

    /* Grid System */
    .grid-2 {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
        margin-bottom: 32px;
    }

    .grid-4 {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 16px;
        margin-bottom: 32px;
    }

    /* Card */
    .card {
        background: var(--card-bg);
        border: 1px solid var(--border-color);
        border-radius: 10px;
        padding: 20px;
        box-shadow: var(--shadow);
        transition: all 0.2s ease;
    }

    .card:hover {
        border-color: var(--accent-color);
        box-shadow: var(--shadow-lg);
    }

    /* Module Card */
    .module-card {
        display: flex;
        flex-direction: column;
        gap: 12px;
        text-decoration: none;
        color: inherit;
        cursor: pointer;
    }

    .module-icon {
        width: 48px;
        height: 48px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        transition: transform 0.2s ease;
    }

    .module-card:hover .module-icon {
        transform: translateY(-2px);
    }

    .module-title {
        font-weight: 600;
        font-size: 14px;
    }

    .module-desc {
        font-size: 12px;
        color: var(--text-light);
        line-height: 1.4;
    }

    /* Module Icons - Color Variants */
    .icon-blue {
        background: rgba(37, 99, 235, 0.1);
        color: var(--accent-color);
    }

    .icon-green {
        background: rgba(22, 163, 74, 0.1);
        color: var(--success);
    }

    .icon-orange {
        background: rgba(234, 88, 12, 0.1);
        color: var(--warning);
    }

    .icon-red {
        background: rgba(220, 38, 38, 0.1);
        color: var(--danger);
    }

    .icon-purple {
        background: rgba(147, 51, 234, 0.1);
        color: #9333ea;
    }

    .icon-cyan {
        background: rgba(6, 182, 212, 0.1);
        color: #06b6d4;
    }

    .icon-indigo {
        background: rgba(79, 70, 229, 0.1);
        color: #4f46e5;
    }

    .icon-pink {
        background: rgba(236, 72, 153, 0.1);
        color: #ec4899;
    }

    /* Info Cards */
    .info-card {
        padding: 16px;
    }

    .info-card-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 12px;
    }

    .info-label {
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        color: var(--text-light);
        letter-spacing: 0.5px;
    }

    .info-value {
        font-size: 20px;
        font-weight: 700;
        color: var(--text-dark);
        margin-top: 4px;
    }

    .info-badge {
        display: inline-block;
        padding: 4px 8px;
        border-radius: 4px;
        font-size: 11px;
        font-weight: 600;
        text-transform: uppercase;
    }

    .badge-success {
        background: rgba(22, 163, 74, 0.2);
        color: var(--success);
    }

    .badge-warning {
        background: rgba(234, 88, 12, 0.2);
        color: var(--warning);
    }

    .badge-danger {
        background: rgba(220, 38, 38, 0.2);
        color: var(--danger);
    }

    /* List Items */
    .list-item {
        padding: 12px 0;
        border-bottom: 1px solid var(--border-color);
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 13px;
    }

    .list-item:last-child {
        border-bottom: none;
    }

    .list-item-name {
        font-weight: 500;
        color: var(--text-dark);
    }

    .list-item-value {
        color: var(--text-light);
    }

    /* Action Buttons */
    .action-buttons {
        display: flex;
        gap: 8px;
        margin-top: 12px;
    }

    .btn {
        padding: 8px 16px;
        border: none;
        border-radius: 6px;
        font-size: 12px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .btn-primary {
        background: var(--accent-color);
        color: white;
    }

    .btn-primary:hover {
        background: var(--accent-hover);
    }

    .btn-secondary {
        background: #f0f0f0;
        color: var(--text-dark);
        border: 1px solid var(--border-color);
    }

    .btn-secondary:hover {
        background: #e8e8e8;
    }

    .btn-small {
        padding: 6px 12px;
        font-size: 11px;
    }

    /* Divider */
    .divider {
        height: 1px;
        background: var(--border-color);
        margin: 20px 0;
    }

    /* Smooth Animations */
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .card {
        animation: slideIn 0.3s ease forwards;
    }

    .card:nth-child(1) { animation-delay: 0.05s; }
    .card:nth-child(2) { animation-delay: 0.1s; }
    .card:nth-child(3) { animation-delay: 0.15s; }
    .card:nth-child(4) { animation-delay: 0.2s; }
    .card:nth-child(5) { animation-delay: 0.25s; }
    .card:nth-child(6) { animation-delay: 0.3s; }
    .card:nth-child(7) { animation-delay: 0.35s; }
    .card:nth-child(8) { animation-delay: 0.4s; }
    .card:nth-child(9) { animation-delay: 0.45s; }
    .card:nth-child(10) { animation-delay: 0.5s; }
    .card:nth-child(11) { animation-delay: 0.55s; }
    .card:nth-child(12) { animation-delay: 0.6s; }

    /* Responsive */
    @media (max-width: 1024px) {
        .top-section {
            flex-direction: column;
        }

        .quick-stats {
            flex-wrap: wrap;
        }
    }

    @media (max-width: 768px) {
        .quick-stats {
            gap: 12px;
        }

        .stat-mini {
            min-width: 120px;
            padding: 12px 16px;
            font-size: 12px;
        }

        .grid-4 {
            grid-template-columns: repeat(2, 1fr);
        }

        .welcome-section h1 {
            font-size: 22px;
        }
    }

    @media (max-width: 480px) {
        .grid-2,
        .grid-4 {
            grid-template-columns: 1fr;
        }

        .welcome-section h1 {
            font-size: 20px;
        }
    }
</style>

<!-- Welcome Section -->
<div class="top-section">
    <div class="welcome-section">
        <h1>Hoş Geldiniz</h1>
        <p>ERP Yönetim Sistemi - Sistem Yöneticisi Paneli</p>
    </div>
    <div class="quick-stats">
        <div class="stat-mini">
            <div class="stat-mini-value">1,250</div>
            <div class="stat-mini-label">Kullanıcı</div>
        </div>
        <div class="stat-mini">
            <div class="stat-mini-value">98.5%</div>
            <div class="stat-mini-label">Sistem Sağlığı</div>
        </div>
        <div class="stat-mini">
            <div class="stat-mini-value">12</div>
            <div class="stat-mini-label">Modüller</div>
        </div>
    </div>
</div>

<!-- Management Tools -->
<h2 class="section-title">Yönetim Araçları</h2>
<div class="grid-4">
    <div class="card module-card" onclick="window.location.href='<?= site_url('superadmin/users') ?>'">
        <div class="module-icon icon-blue">
            <i class="fas fa-user-tie"></i>
        </div>
        <div class="module-title">Kullanıcılar</div>
        <div class="module-desc">Kullanıcı hesaplarını yönet</div>
    </div>

    <div class="card module-card">
        <div class="module-icon icon-green">
            <i class="fas fa-shield-alt"></i>
        </div>
        <div class="module-title">İzinler</div>
        <div class="module-desc">Rol ve yetkilendirme</div>
    </div>

    <div class="card module-card">
        <div class="module-icon icon-orange">
            <i class="fas fa-globe"></i>
        </div>
        <div class="module-title">Konfigürasyon</div>
        <div class="module-desc">Sistem ayarları ve parametreler</div>
    </div>

    <div class="card module-card">
        <div class="module-icon icon-red">
            <i class="fas fa-history"></i>
        </div>
        <div class="module-title">Kayıtlar</div>
        <div class="module-desc">Sistem ve kullanıcı logları</div>
    </div>

    <div class="card module-card">
        <div class="module-icon icon-purple">
            <i class="fas fa-envelope"></i>
        </div>
        <div class="module-title">Bildirimler</div>
        <div class="module-desc">E-posta ve sistem bildirimleri</div>
    </div>

    <div class="card module-card">
        <div class="module-icon icon-cyan">
            <i class="fas fa-clone"></i>
        </div>
        <div class="module-title">Veri Transfer</div>
        <div class="module-desc">İthalatı ve ihraçatı yönet</div>
    </div>

    <div class="card module-card">
        <div class="module-icon icon-indigo">
            <i class="fas fa-plug"></i>
        </div>
        <div class="module-title">Entegrasyonlar</div>
        <div class="module-desc">Dış sistem bağlantıları</div>
    </div>

    <div class="card module-card">
        <div class="module-icon icon-pink">
            <i class="fas fa-tools"></i>
        </div>
        <div class="module-title">Bakım</div>
        <div class="module-desc">Sistem bakım ve optimizasyon</div>
    </div>
</div>

<!-- System Monitoring -->
<h2 class="section-title">Sistem Durumu</h2>
<div class="grid-2">
    <div class="card info-card">
        <div class="info-card-header">
            <div>
                <div class="info-label">Sunucu Durumu</div>
                <div class="info-value">Aktif</div>
            </div>
            <span class="info-badge badge-success">ÇALIŞAN</span>
        </div>
        <div class="list-item">
            <span class="list-item-name">CPU Kullanımı</span>
            <span class="list-item-value">42%</span>
        </div>
        <div class="list-item">
            <span class="list-item-name">Bellek</span>
            <span class="list-item-value">6.8GB / 16GB</span>
        </div>
        <div class="list-item">
            <span class="list-item-name">Disk Alanı</span>
            <span class="list-item-value">542GB / 1TB</span>
        </div>
        <div class="action-buttons">
            <button class="btn btn-secondary btn-small">
                <i class="fas fa-sync"></i> Yenile
            </button>
            <button class="btn btn-secondary btn-small">
                <i class="fas fa-cog"></i> Ayarlar
            </button>
        </div>
    </div>

    <div class="card info-card">
        <div class="info-card-header">
            <div>
                <div class="info-label">Database</div>
                <div class="info-value">Sağlıklı</div>
            </div>
            <span class="info-badge badge-success">ÇALIŞAN</span>
        </div>
        <div class="list-item">
            <span class="list-item-name">Bağlantılar</span>
            <span class="list-item-value">24/50</span>
        </div>
        <div class="list-item">
            <span class="list-item-name">Boyut</span>
            <span class="list-item-value">12.4GB</span>
        </div>
        <div class="list-item">
            <span class="list-item-name">Son Yedek</span>
            <span class="list-item-value">2 saat önce</span>
        </div>
        <div class="action-buttons">
            <button class="btn btn-secondary btn-small">
                <i class="fas fa-database"></i> Yedek Al
            </button>
            <button class="btn btn-secondary btn-small">
                <i class="fas fa-stethoscope"></i> Test Et
            </button>
        </div>
    </div>
</div>

<!-- Recent Activities -->
<h2 class="section-title">Son Aktiviteler</h2>
<div class="card">
    <div class="list-item">
        <div>
            <div class="list-item-name">Cüneyt Yılmaz - Giriş Yaptı</div>
            <div class="list-item-value">2 dakika önce</div>
        </div>
    </div>
    <div class="list-item">
        <div>
            <div class="list-item-name">Sistem Yedeklemesi Tamamlandı</div>
            <div class="list-item-value">14 dakika önce</div>
        </div>
    </div>
    <div class="list-item">
        <div>
            <div class="list-item-name">Fatih Demirel - HR Modülü Kullandı</div>
            <div class="list-item-value">28 dakika önce</div>
        </div>
    </div>
    <div class="list-item">
        <div>
            <div class="list-item-name">Sistem Güncellemesi Uygulandı v2.14.5</div>
            <div class="list-item-value">1 saat önce</div>
        </div>
    </div>
    <div class="list-item">
        <div>
            <div class="list-item-name">Yeni Kullanıcı Eklendi: Merve Kaya</div>
            <div class="list-item-value">3 saat önce</div>
        </div>
    </div>
</div>

<?php $this->load->view('partials/footer'); ?>
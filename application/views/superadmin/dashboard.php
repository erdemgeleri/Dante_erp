<?php
    $page_title = $this->lang->line('page_superadmin_dashboard');
    $user_name = 'Super Admin';
    $user_initials = 'SA';
    $user_role = $this->lang->line('user_role_super_admin');
?>

<?php $this->load->view('partials/header'); ?>

<style>
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

    .section-title {
        font-size: 16px;
        font-weight: 700;
        margin-bottom: 16px;
        color: var(--text-dark);
    }

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

    .divider {
        height: 1px;
        background: var(--border-color);
        margin: 20px 0;
    }

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

<div class="top-section">
    <div class="welcome-section">
        <h1><?= $this->lang->line('sa_welcome_title') ?></h1>
        <p><?= $this->lang->line('sa_welcome_desc') ?></p>
    </div>
    <div class="quick-stats">
        <div class="stat-mini">
            <div class="stat-mini-value">1,250</div>
            <div class="stat-mini-label"><?= $this->lang->line('sa_stat_user') ?></div>
        </div>
        <div class="stat-mini">
            <div class="stat-mini-value">98.5%</div>
            <div class="stat-mini-label"><?= $this->lang->line('sa_stat_health') ?></div>
        </div>
        <div class="stat-mini">
            <div class="stat-mini-value">12</div>
            <div class="stat-mini-label"><?= $this->lang->line('sa_stat_modules') ?></div>
        </div>
    </div>
</div>

<h2 class="section-title"><?= $this->lang->line('sa_section_tools') ?></h2>
<div class="grid-4">
    <div class="card module-card" onclick="window.location.href='<?= site_url('superadmin/users') ?>'">
        <div class="module-icon icon-blue">
            <i class="fas fa-user-tie"></i>
        </div>
        <div class="module-title"><?= $this->lang->line('sa_module_users') ?></div>
        <div class="module-desc"><?= $this->lang->line('sa_module_users_desc') ?></div>
    </div>

    <div class="card module-card">
        <div class="module-icon icon-green">
            <i class="fas fa-shield-alt"></i>
        </div>
        <div class="module-title"><?= $this->lang->line('sa_module_permissions') ?></div>
        <div class="module-desc"><?= $this->lang->line('sa_module_permissions_desc') ?></div>
    </div>

    <div class="card module-card">
        <div class="module-icon icon-orange">
            <i class="fas fa-globe"></i>
        </div>
        <div class="module-title"><?= $this->lang->line('sa_module_config') ?></div>
        <div class="module-desc"><?= $this->lang->line('sa_module_config_desc') ?></div>
    </div>

    <div class="card module-card">
        <div class="module-icon icon-red">
            <i class="fas fa-history"></i>
        </div>
        <div class="module-title"><?= $this->lang->line('sa_module_logs') ?></div>
        <div class="module-desc"><?= $this->lang->line('sa_module_logs_desc') ?></div>
    </div>

    <div class="card module-card">
        <div class="module-icon icon-purple">
            <i class="fas fa-envelope"></i>
        </div>
        <div class="module-title"><?= $this->lang->line('sa_module_notifications') ?></div>
        <div class="module-desc"><?= $this->lang->line('sa_module_notifications_desc') ?></div>
    </div>

    <div class="card module-card">
        <div class="module-icon icon-cyan">
            <i class="fas fa-clone"></i>
        </div>
        <div class="module-title"><?= $this->lang->line('sa_module_transfer') ?></div>
        <div class="module-desc"><?= $this->lang->line('sa_module_transfer_desc') ?></div>
    </div>

    <div class="card module-card">
        <div class="module-icon icon-indigo">
            <i class="fas fa-plug"></i>
        </div>
        <div class="module-title"><?= $this->lang->line('sa_module_integrations') ?></div>
        <div class="module-desc"><?= $this->lang->line('sa_module_integrations_desc') ?></div>
    </div>

    <div class="card module-card">
        <div class="module-icon icon-pink">
            <i class="fas fa-tools"></i>
        </div>
        <div class="module-title"><?= $this->lang->line('sa_module_maintenance') ?></div>
        <div class="module-desc"><?= $this->lang->line('sa_module_maintenance_desc') ?></div>
    </div>
</div>

<h2 class="section-title"><?= $this->lang->line('sa_section_status') ?></h2>
<div class="grid-2">
    <div class="card info-card">
        <div class="info-card-header">
            <div>
                <div class="info-label"><?= $this->lang->line('sa_server_status') ?></div>
                <div class="info-value"><?= $this->lang->line('status_active') ?></div>
            </div>
            <span class="info-badge badge-success"><?= $this->lang->line('sa_badge_running') ?></span>
        </div>
        <div class="list-item">
            <span class="list-item-name"><?= $this->lang->line('sa_cpu_usage') ?></span>
            <span class="list-item-value">42%</span>
        </div>
        <div class="list-item">
            <span class="list-item-name"><?= $this->lang->line('sa_memory') ?></span>
            <span class="list-item-value">6.8GB / 16GB</span>
        </div>
        <div class="list-item">
            <span class="list-item-name"><?= $this->lang->line('sa_disk_space') ?></span>
            <span class="list-item-value">542GB / 1TB</span>
        </div>
        <div class="action-buttons">
            <button class="btn btn-secondary btn-small">
                <i class="fas fa-sync"></i> <?= $this->lang->line('sa_btn_refresh') ?>
            </button>
            <button class="btn btn-secondary btn-small">
                <i class="fas fa-cog"></i> <?= $this->lang->line('sa_btn_settings') ?>
            </button>
        </div>
    </div>

    <div class="card info-card">
        <div class="info-card-header">
            <div>
                <div class="info-label"><?= $this->lang->line('sa_db_status') ?></div>
                <div class="info-value"><?= $this->lang->line('sa_healthy') ?></div>
            </div>
            <span class="info-badge badge-success"><?= $this->lang->line('sa_badge_running') ?></span>
        </div>
        <div class="list-item">
            <span class="list-item-name"><?= $this->lang->line('sa_connections') ?></span>
            <span class="list-item-value">24/50</span>
        </div>
        <div class="list-item">
            <span class="list-item-name"><?= $this->lang->line('sa_size') ?></span>
            <span class="list-item-value">12.4GB</span>
        </div>
        <div class="list-item">
            <span class="list-item-name"><?= $this->lang->line('sa_last_backup') ?></span>
            <span class="list-item-value"><?= $this->lang->line('time_2h_ago') ?></span>
        </div>
        <div class="action-buttons">
            <button class="btn btn-secondary btn-small">
                <i class="fas fa-database"></i> <?= $this->lang->line('sa_btn_backup') ?>
            </button>
            <button class="btn btn-secondary btn-small">
                <i class="fas fa-stethoscope"></i> <?= $this->lang->line('sa_btn_test') ?>
            </button>
        </div>
    </div>
</div>

<h2 class="section-title"><?= $this->lang->line('sa_section_activities') ?></h2>
<div class="card">
    <div class="list-item">
        <div>
            <div class="list-item-name"><?= $this->lang->line('sa_activity_login') ?></div>
            <div class="list-item-value"><?= $this->lang->line('sa_time_2m_ago') ?></div>
        </div>
    </div>
    <div class="list-item">
        <div>
            <div class="list-item-name"><?= $this->lang->line('sa_activity_backup') ?></div>
            <div class="list-item-value"><?= $this->lang->line('sa_time_14m_ago') ?></div>
        </div>
    </div>
    <div class="list-item">
        <div>
            <div class="list-item-name"><?= $this->lang->line('sa_activity_hr_used') ?></div>
            <div class="list-item-value"><?= $this->lang->line('sa_time_28m_ago') ?></div>
        </div>
    </div>
    <div class="list-item">
        <div>
            <div class="list-item-name"><?= $this->lang->line('sa_activity_update') ?></div>
            <div class="list-item-value"><?= $this->lang->line('sa_time_1h_ago') ?></div>
        </div>
    </div>
    <div class="list-item">
        <div>
            <div class="list-item-name"><?= $this->lang->line('sa_activity_user_added') ?></div>
            <div class="list-item-value"><?= $this->lang->line('sa_time_3h_ago') ?></div>
        </div>
    </div>
</div>

<?php $this->load->view('partials/footer'); ?>
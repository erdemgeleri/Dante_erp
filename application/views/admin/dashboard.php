<?php
    $page_title = $this->lang->line('ad_admin_dashboard');
?>

<?php $this->load->view('partials/header'); ?>

<style>
    .page-header {
        margin-bottom: 30px;
    }

    .page-header h1 {
        font-size: 32px;
        font-weight: 700;
        color: #1a1a1a;
        margin: 0 0 8px 0;
    }

    .page-header p {
        color: #666;
        font-size: 14px;
        margin: 0;
    }

    .welcome-card {
        background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
        border-radius: 12px;
        padding: 40px;
        color: white;
        margin-bottom: 40px;
        box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
    }

    .welcome-card h2 {
        font-size: 28px;
        font-weight: 700;
        margin: 0 0 8px 0;
    }

    .welcome-card p {
        font-size: 14px;
        opacity: 0.95;
        margin: 0;
    }

    .welcome-time {
        font-size: 13px;
        opacity: 0.8;
        margin-top: 12px;
    }

    .dashboard-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 24px;
        margin-bottom: 40px;
    }

    .dashboard-card {
        background: white;
        border-radius: 12px;
        padding: 28px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.06);
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        transition: all 0.3s ease;
        cursor: pointer;
        border: 2px solid transparent;
        text-decoration: none;
        color: inherit;
    }

    .dashboard-card:hover {
        box-shadow: 0 8px 24px rgba(0,0,0,0.12);
        transform: translateY(-4px);
        border-color: #2563eb;
    }

    .card-icon {
        width: 80px;
        height: 80px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 40px;
        margin-bottom: 20px;
        transition: all 0.3s ease;
    }

    .dashboard-card:hover .card-icon {
        transform: scale(1.1) rotate(5deg);
    }

    .card-icon.customers-icon {
        background: linear-gradient(135deg, #f0f4ff, #e6f0ff);
        color: #2563eb;
    }

    .card-icon.jobs-icon {
        background: linear-gradient(135deg, #fef3f0, #ffe6e0);
        color: #dc2626;
    }

    .card-icon.contracts-icon {
        background: linear-gradient(135deg, #f0fff4, #e6ffe8);
        color: #059669;
    }

    .card-icon.employees-icon {
        background: linear-gradient(135deg, #fffbf0, #fff5e6);
        color: #d97706;
    }

    .card-icon.projects-icon {
        background: linear-gradient(135deg, #faf5ff, #f5e6ff);
        color: #7c3aed;
    }

    .card-icon.reports-icon {
        background: linear-gradient(135deg, #f0f9ff, #e0f2fe);
        color: #0284c7;
    }

    .card-icon.finance-icon {
        background: linear-gradient(135deg, #f0fff4, #e0ffe6);
        color: #16a34a;
    }

    .card-icon.settings-icon {
        background: linear-gradient(135deg, #f5f3ff, #ede9fe);
        color: #9333ea;
    }

    .card-title {
        font-size: 18px;
        font-weight: 700;
        color: #1a1a1a;
        margin: 0 0 8px 0;
    }

    .card-description {
        font-size: 13px;
        color: #666;
        margin: 0;
        line-height: 1.5;
    }

    .card-count {
        font-size: 32px;
        font-weight: 700;
        color: #2563eb;
        margin-top: 16px;
    }

    .card-count-label {
        font-size: 11px;
        color: #999;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-top: 4px;
    }

    .stats-row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-bottom: 40px;
    }

    .stat-box {
        background: white;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.06);
        border-left: 4px solid #2563eb;
    }

    .stat-box.warning {
        border-left-color: #f59e0b;
    }

    .stat-box.success {
        border-left-color: #10b981;
    }

    .stat-box.danger {
        border-left-color: #dc2626;
    }

    .stat-box-label {
        font-size: 12px;
        color: #999;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 8px;
        font-weight: 600;
    }

    .stat-box-value {
        font-size: 28px;
        font-weight: 700;
        color: #1a1a1a;
    }

    .quick-actions {
        background: white;
        border-radius: 12px;
        padding: 28px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.06);
        margin-bottom: 40px;
    }

    .quick-actions h3 {
        font-size: 18px;
        font-weight: 700;
        color: #1a1a1a;
        margin: 0 0 20px 0;
    }

    .action-buttons {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
        gap: 12px;
    }

    .action-btn {
        padding: 14px 20px;
        border: 2px solid #ddd;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        background: white;
        color: #1a1a1a;
    }

    .action-btn:hover {
        border-color: #2563eb;
        color: #2563eb;
        background: #f0f7ff;
    }

    .action-btn.primary {
        background: #2563eb;
        color: white;
        border-color: #2563eb;
    }

    .action-btn.primary:hover {
        background: #1d4ed8;
        border-color: #1d4ed8;
    }
    @media (max-width: 1024px) {
        .dashboard-grid {
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        }
    }

    @media (max-width: 768px) {
        .page-header h1 {
            font-size: 24px;
        }

        .welcome-card {
            padding: 24px;
        }

        .welcome-card h2 {
            font-size: 22px;
        }

        .dashboard-grid {
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 16px;
        }

        .dashboard-card {
            padding: 20px;
        }

        .card-icon {
            width: 60px;
            height: 60px;
            font-size: 32px;
            margin-bottom: 16px;
        }

        .card-title {
            font-size: 16px;
        }

        .stats-row {
            grid-template-columns: 1fr;
        }

        .action-buttons {
            grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
        }

        .quick-actions {
            padding: 20px;
        }
    }

    @media (max-width: 480px) {
        .page-header h1 {
            font-size: 20px;
        }

        .welcome-card {
            padding: 20px;
        }

        .welcome-card h2 {
            font-size: 18px;
        }

        .dashboard-grid {
            grid-template-columns: 1fr;
        }

        .dashboard-card {
            padding: 16px;
        }

        .card-icon {
            width: 50px;
            height: 50px;
            font-size: 28px;
        }

        .card-title {
            font-size: 14px;
        }

        .action-buttons {
            grid-template-columns: 1fr;
        }

        .action-btn {
            padding: 12px 16px;
            font-size: 12px;
        }
    }
</style>

<div class="page-header">
    <h1><?= $this->lang->line('ad_admin_dashboard') ?></h1>
    <p><?= $this->lang->line('ad_manage_business') ?></p>
</div>

<div class="welcome-card">
    <h2>
        <?= sprintf($this->lang->line('ad_welcome_back'), $this->session->userdata('full_name') ?: 'Patron') ?>
    </h2>
    <p><?= $this->lang->line('ad_ready_to_manage') ?></p>
    <div class="welcome-time">
        <i class="fas fa-calendar"></i> 
        <?= date('d.m.Y H:i', time()) ?>
    </div>
</div>

<div class="stats-row">
    <div class="stat-box">
        <div class="stat-box-label"><?= $this->lang->line('ad_stat_customers') ?></div>
        <div class="stat-box-value"><?= isset($total_customers) ? $total_customers : 0 ?></div>
    </div>
    <div class="stat-box warning">
        <div class="stat-box-label"><?= $this->lang->line('ad_stat_ongoing_jobs') ?></div>
        <div class="stat-box-value"><?= isset($active_jobs) ? $active_jobs : 0 ?></div>
    </div>
    <div class="stat-box success">
        <div class="stat-box-label"><?= $this->lang->line('ad_stat_employees') ?></div>
        <div class="stat-box-value"><?= isset($total_employees) ? $total_employees : 0 ?></div>
    </div>
    <div class="stat-box danger">
        <div class="stat-box-label"><?= $this->lang->line('ad_stat_contracts') ?></div>
        <div class="stat-box-value"><?= isset($active_contracts) ? $active_contracts : 0 ?></div>
    </div>
</div>

<div class="dashboard-grid">
    
    <!-- Müşteriler -->
    <a href="<?= site_url('admin/customers') ?>" class="dashboard-card">
        <div class="card-icon customers-icon">
            <i class="fas fa-users"></i>
        </div>
        <h3 class="card-title"><?= $this->lang->line('ad_customers') ?></h3>
        <p class="card-description"><?= $this->lang->line('ad_manage_customers') ?></p>
        <div class="card-count"><?= isset($total_customers) ? $total_customers : 0 ?></div>
        <div class="card-count-label"><?= $this->lang->line('ad_total') ?></div>
    </a>

    <!-- İşler -->
    <a href="<?= site_url('admin/jobs') ?>" class="dashboard-card">
        <div class="card-icon jobs-icon">
            <i class="fas fa-briefcase"></i>
        </div>
        <h3 class="card-title"><?= $this->lang->line('ad_jobs') ?></h3>
        <p class="card-description"><?= $this->lang->line('ad_manage_jobs') ?></p>
        <div class="card-count"><?= isset($active_jobs) ? $active_jobs : 0 ?></div>
        <div class="card-count-label"><?= $this->lang->line('ad_active') ?></div>
    </a>

    <!-- Kontratlar -->
    <a href="<?= site_url('admin/contracts') ?>" class="dashboard-card">
        <div class="card-icon contracts-icon">
            <i class="fas fa-file-contract"></i>
        </div>
        <h3 class="card-title"><?= $this->lang->line('ad_contracts') ?></h3>
        <p class="card-description"><?= $this->lang->line('ad_manage_contracts') ?></p>
        <div class="card-count"><?= isset($active_contracts) ? $active_contracts : 0 ?></div>
        <div class="card-count-label"><?= $this->lang->line('ad_active') ?></div>
    </a>

    <!-- Çalışanlar -->
    <a href="<?= site_url('admin/employees') ?>" class="dashboard-card">
        <div class="card-icon employees-icon">
            <i class="fas fa-user-tie"></i>
        </div>
        <h3 class="card-title"><?= $this->lang->line('ad_employees') ?></h3>
        <p class="card-description"><?= $this->lang->line('ad_manage_employees') ?></p>
        <div class="card-count"><?= isset($total_employees) ? $total_employees : 0 ?></div>
        <div class="card-count-label"><?= $this->lang->line('ad_total') ?></div>
    </a>

    <!-- Projeler -->
    <a href="<?= site_url('admin/projects') ?>" class="dashboard-card">
        <div class="card-icon projects-icon">
            <i class="fas fa-project-diagram"></i>
        </div>
        <h3 class="card-title"><?= $this->lang->line('ad_projects') ?></h3>
        <p class="card-description"><?= $this->lang->line('ad_manage_projects') ?></p>
        <div class="card-count"><?= isset($total_projects) ? $total_projects : 0 ?></div>
        <div class="card-count-label"><?= $this->lang->line('ad_total') ?></div>
    </a>

    <!-- Raporlar -->
    <a href="<?= site_url('admin/reports') ?>" class="dashboard-card">
        <div class="card-icon reports-icon">
            <i class="fas fa-chart-bar"></i>
        </div>
        <h3 class="card-title"><?= $this->lang->line('ad_reports') ?></h3>
        <p class="card-description"><?= $this->lang->line('ad_view_reports') ?></p>
        <div class="card-count">
            <i class="fas fa-chart-line"></i>
        </div>
        <div class="card-count-label"><?= $this->lang->line('ad_analytics') ?></div>
    </a>

    <a href="<?= site_url('admin/finance') ?>" class="dashboard-card">
        <div class="card-icon finance-icon">
            <i class="fas fa-wallet"></i>
        </div>
        <h3 class="card-title"><?= $this->lang->line('ad_finance') ?></h3>
        <p class="card-description"><?= $this->lang->line('ad_manage_payments') ?></p>
        <div class="card-count">
            <i class="fas fa-money-bill-wave"></i>
        </div>
        <div class="card-count-label"><?= $this->lang->line('ad_accounting') ?></div>
    </a>

    <a href="<?= site_url('admin/settings') ?>" class="dashboard-card">
        <div class="card-icon settings-icon">
            <i class="fas fa-cog"></i>
        </div>
        <h3 class="card-title"><?= $this->lang->line('ad_settings') ?></h3>
        <p class="card-description"><?= $this->lang->line('ad_configure_system') ?></p>
        <div class="card-count">
            <i class="fas fa-sliders-h"></i>
        </div>
        <div class="card-count-label"><?= $this->lang->line('ad_preferences') ?></div>
    </a>

</div>

<div class="quick-actions">
    <h3><?= $this->lang->line('ad_quick_actions') ?></h3>
    <div class="action-buttons">
        <a href="<?= site_url('admin/add_customer') ?>" class="action-btn primary">
            <i class="fas fa-user-plus"></i> <?= $this->lang->line('ad_add_customer') ?>
        </a>
        <a href="<?= site_url('admin/jobs/add') ?>" class="action-btn primary">
            <i class="fas fa-plus"></i> <?= $this->lang->line('ad_new_job') ?>
        </a>
        <a href="<?= site_url('admin/contracts/add') ?>" class="action-btn primary">
            <i class="fas fa-file-plus"></i> <?= $this->lang->line('ad_new_contract') ?>
        </a>
        <a href="<?= site_url('admin/employees/add') ?>" class="action-btn primary">
            <i class="fas fa-user-plus"></i> <?= $this->lang->line('ad_add_employee') ?>
        </a>
        <a href="<?= site_url('admin/projects/add') ?>" class="action-btn">
            <i class="fas fa-folder-plus"></i> <?= $this->lang->line('ad_new_project') ?>
        </a>
        <a href="<?= site_url('admin/reports') ?>" class="action-btn">
            <i class="fas fa-download"></i> <?= $this->lang->line('ad_export_data') ?>
        </a>
    </div>
</div>

<?php $this->load->view('partials/footer'); ?>
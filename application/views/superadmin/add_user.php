<?php
    $page_title = $this->lang->line('page_add_user');
    $user_name = 'Super Admin';
    $user_initials = 'SA';
    $user_role = $this->lang->line('user_role_super_admin');

    $nav_menu = [
        ['label' => $this->lang->line('nav_dashboard'), 'url' => site_url('superadmin/dashboard')],
        ['label' => $this->lang->line('nav_users'), 'url' => site_url('superadmin/users')],
        ['label' => $this->lang->line('nav_permissions'), 'url' => site_url('superadmin/permissions')],
        ['label' => $this->lang->line('nav_settings'), 'url' => site_url('superadmin/settings')]
    ];
?>

<?php $this->load->view('partials/header'); ?>

<style>
    .add-user-container {
        display: flex;
        justify-content: center;
        padding: 20px;
        min-height: calc(100vh - 200px);
    }

    .form-container {
        width: 100%;
        max-width: 700px;
        background: white;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.06);
    }

    .page-header {
        margin-bottom: 30px;
    }

    .page-header h1 {
        font-size: 28px;
        font-weight: 700;
        color: #1a1a1a;
        margin: 0 0 8px 0;
    }

    .page-header p {
        color: #666;
        font-size: 14px;
        margin: 0;
    }

    .form-group {
        margin-bottom: 24px;
    }

    .form-group label {
        display: block;
        color: #1a1a1a;
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 8px;
    }

    .form-group label .required {
        color: #dc2626;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 10px 12px;
        border: 1px solid #ddd;
        border-radius: 6px;
        font-size: 14px;
        font-family: inherit;
        color: #1a1a1a;
        transition: border-color 0.2s, box-shadow 0.2s;
        box-sizing: border-box;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: #2563eb;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
    }

    .form-group input::placeholder {
        color: #999;
    }

    .form-group textarea {
        resize: vertical;
        min-height: 100px;
    }

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 24px;
    }

    .form-row .form-group {
        margin-bottom: 0;
    }

    .help-text {
        font-size: 12px;
        color: #999;
        margin-top: 6px;
    }

    .alert {
        padding: 12px 16px;
        border-radius: 6px;
        font-size: 13px;
        margin-bottom: 20px;
        border-left: 4px solid;
    }

    .alert-error {
        background: #fee;
        border-left-color: #dc2626;
        color: #991b1b;
    }

    .alert-success {
        background: #f0fdf4;
        border-left-color: #22c55e;
        color: #15803d;
    }

    .alert ul {
        margin: 8px 0 0 0;
        padding-left: 20px;
    }

    .alert li {
        margin: 4px 0;
    }

    .password-info {
        background: #f8f9fa;
        border: 1px solid #ddd;
        padding: 12px 16px;
        border-radius: 6px;
        font-size: 12px;
        color: #666;
        margin-top: 8px;
    }

    .password-info strong {
        display: block;
        margin-bottom: 8px;
        color: #1a1a1a;
    }

    .password-info ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .password-info li {
        padding: 4px 0;
        padding-left: 20px;
        position: relative;
    }

    .password-info li:before {
        content: "✓";
        color: #22c55e;
        font-weight: bold;
        position: absolute;
        left: 0;
    }

    .form-actions {
        display: flex;
        gap: 12px;
        margin-top: 32px;
        padding-top: 24px;
        border-top: 1px solid #f0f0f0;
    }

    .btn {
        padding: 11px 20px;
        border: none;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        white-space: nowrap;
        flex: 1;
        justify-content: center;
    }

    .btn-primary {
        background: #2563eb;
        color: white;
    }

    .btn-primary:hover {
        background: #1d4ed8;
    }

    .btn-primary:active {
        background: #1e40af;
    }

    .btn-secondary {
        background: #f0f0f0;
        color: #666;
        border: 1px solid #ddd;
    }

    .btn-secondary:hover {
        background: #e8e8e8;
    }

    .btn-secondary:active {
        background: #e0e0e0;
    }

    .btn:disabled {
        opacity: 0.6;
        cursor: not-allowed;
    }

    .section-title {
        font-size: 16px;
        font-weight: 600;
        color: #1a1a1a;
        margin-top: 32px;
        margin-bottom: 16px;
        padding-bottom: 12px;
        border-bottom: 2px solid #f0f0f0;
    }

    .section-title:first-of-type {
        margin-top: 0;
    }

    @media (max-width: 768px) {
        .add-user-container {
            padding: 16px;
        }

        .form-container {
            padding: 24px;
        }

        .page-header h1 {
            font-size: 24px;
        }

        .form-row {
            grid-template-columns: 1fr;
            gap: 0;
        }

        .form-row .form-group {
            margin-bottom: 24px;
        }

        .form-row .form-group:last-child {
            margin-bottom: 0;
        }

        .form-actions {
            flex-direction: column;
        }

        .btn {
            width: 100%;
        }
    }

    @media (max-width: 480px) {
        .add-user-container {
            padding: 12px;
        }

        .form-container {
            padding: 16px;
        }

        .page-header h1 {
            font-size: 20px;
        }

        .page-header p {
            font-size: 12px;
        }

        .form-group label {
            font-size: 13px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            font-size: 16px; 
            padding: 12px;
        }

        .section-title {
            font-size: 14px;
            margin-top: 24px;
        }
    }
</style>

<div class="add-user-container">
    <div class="form-container">
        <div class="page-header">
            <h1><?= $this->lang->line('title_add_user') ?></h1>
            <p><?= $this->lang->line('desc_add_user') ?></p>
        </div>

        <?php if($this->session->flashdata('error')): ?>
            <div class="alert alert-error">
                <strong><?= $this->lang->line('alert_error') ?></strong> <?= $this->session->flashdata('error') ?>
            </div>
        <?php endif; ?>

        <?php if($this->session->flashdata('success')): ?>
            <div class="alert alert-success">
                <strong><?= $this->lang->line('alert_success') ?></strong> <?= $this->session->flashdata('success') ?>
            </div>
        <?php endif; ?>

        <?php if(validation_errors()): ?>
            <div class="alert alert-error">
                <strong><?= $this->lang->line('alert_validation_error') ?></strong>
                <?= validation_errors('<ul><li>', '</li><li>', '</li></ul>') ?>
            </div>
        <?php endif; ?>

        <form action="<?= site_url('superadmin/add_user_post') ?>" method="post" novalidate>
            
            <div class="section-title"><?= $this->lang->line('section_personal') ?></div>

            <div class="form-row">
                <div class="form-group">
                    <label for="name">
                        <?= $this->lang->line('label_first_name') ?> <span class="required">*</span>
                    </label>
                    <input 
                        type="text" 
                        name="name" 
                        id="name" 
                        placeholder="<?= $this->lang->line('placeholder_name') ?>"
                        required
                        minlength="2"
                        maxlength="50"
                        value="<?= set_value('name') ?>"
                    >
                    <div class="help-text"><?= $this->lang->line('help_min_2_chars') ?></div>
                </div>
                <div class="form-group">
                    <label for="surname">
                        <?= $this->lang->line('label_last_name') ?> <span class="required">*</span>
                    </label>
                    <input 
                        type="text" 
                        name="surname" 
                        id="surname" 
                        placeholder="<?= $this->lang->line('placeholder_surname') ?>"
                        required
                        minlength="2"
                        maxlength="50"
                        value="<?= set_value('surname') ?>"
                    >
                    <div class="help-text"><?= $this->lang->line('help_min_2_chars') ?></div>
                </div>
            </div>

            <div class="form-group">
                <label for="email">
                    <?= $this->lang->line('label_email') ?> <span class="required">*</span>
                </label>
                <input 
                    type="email" 
                    name="email" 
                    id="email" 
                    placeholder="<?= $this->lang->line('placeholder_email_add') ?>"
                    required
                    value="<?= set_value('email') ?>"
                >
                <div class="help-text"><?= $this->lang->line('help_email') ?></div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="phone">
                        <?= $this->lang->line('label_phone') ?> <span class="required">*</span>
                    </label>
                    <input 
                        type="tel" 
                        name="phone" 
                        id="phone" 
                        placeholder="<?= $this->lang->line('placeholder_phone_add') ?>"
                        required
                        value="<?= set_value('phone') ?>"
                    >
                    <div class="help-text"><?= $this->lang->line('help_phone') ?></div>
                </div>
                <div class="form-group">
                    <label for="role">
                        <?= $this->lang->line('th_role') ?> <span class="required">*</span>
                    </label>
                    <select name="role" id="role" required>
                        <option value=""><?= $this->lang->line('placeholder_select') ?></option>
                        <option value="user" <?= set_select('role', 'user') ?>><?= $this->lang->line('user_role_user') ?></option>
                        <option value="admin" <?= set_select('role', 'admin') ?>><?= $this->lang->line('user_role_admin') ?></option>
                        <option value="super_admin" <?= set_select('role', 'super_admin') ?>><?= $this->lang->line('user_role_super_admin') ?></option>
                    </select>
                    <div class="help-text"><?= $this->lang->line('help_role_select') ?></div>
                </div>
            </div>

            <div class="form-group">
                <label for="address">
                    <?= $this->lang->line('label_address') ?> <span class="required">*</span>
                </label>
                <textarea 
                    name="address" 
                    id="address" 
                    placeholder="<?= $this->lang->line('placeholder_address_short') ?>"
                    required
                    maxlength="200"
                ><?= set_value('address') ?></textarea>
                <div class="help-text"><?= $this->lang->line('help_address_max') ?></div>
            </div>

            <div class="section-title"><?= $this->lang->line('section_account') ?></div>

            <div class="form-group">
                <label for="username">
                    <?= $this->lang->line('label_username') ?> <span class="required">*</span>
                </label>
                <input 
                    type="text"
                    name="username" 
                    id="username" 
                    placeholder="<?= $this->lang->line('placeholder_username_add') ?>"
                    required
                    minlength="4"
                    maxlength="50"
                    value="<?= set_value('username') ?>"
                >
                <div class="help-text"><?= $this->lang->line('help_username_range') ?></div>
            </div>

            <div class="form-group">
                <label for="password">
                    <?= $this->lang->line('label_password') ?> <span class="required">*</span>
                </label>
                <input 
                    type="password" 
                    name="password" 
                    id="password" 
                    placeholder="<?= $this->lang->line('placeholder_password_strong') ?>"
                    required
                    minlength="6"
                >
                <div class="password-info">
                    <strong><?= $this->lang->line('password_requirements') ?></strong>
                    <ul>
                        <li><?= $this->lang->line('password_req_min') ?></li>
                        <li><?= $this->lang->line('password_req_mixed') ?></li>
                        <li><?= $this->lang->line('password_req_special') ?></li>
                    </ul>
                </div>
            </div>

            <div class="form-group">
                <label for="password_confirm">
                    <?= $this->lang->line('label_password_confirm') ?> <span class="required">*</span>
                </label>
                <input 
                    type="password" 
                    name="password_confirm" 
                    id="password_confirm" 
                    placeholder="<?= $this->lang->line('placeholder_password_confirm') ?>"
                    required
                    minlength="6"
                >
                <div class="help-text"><?= $this->lang->line('help_password_match') ?></div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-user-plus"></i> <?= $this->lang->line('btn_add_user') ?>
                </button>
                <a href="<?= site_url('superadmin/users') ?>" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> <?= $this->lang->line('btn_back') ?>
                </a>
            </div>
        </form>
    </div>
</div>

<script>
    const passwordInput = document.getElementById('password');
    const passwordConfirmInput = document.getElementById('password_confirm');

    function checkPasswordMatch() {
        if (passwordConfirmInput.value && passwordInput.value !== passwordConfirmInput.value) {
            passwordConfirmInput.style.borderColor = '#dc2626';
        } else {
            passwordConfirmInput.style.borderColor = '#ddd';
        }
    }

    passwordInput.addEventListener('input', checkPasswordMatch);
    passwordConfirmInput.addEventListener('input', checkPasswordMatch);
    document.querySelector('form').addEventListener('submit', function(e) {
        if (passwordInput.value !== passwordConfirmInput.value) {
            e.preventDefault();
            alert(<?= json_encode($this->lang->line('msg_password_mismatch')) ?>);
            passwordConfirmInput.focus();
            return false;
        }
    });
</script>

<?php $this->load->view('partials/footer'); ?>